import React from 'react';

type InputFieldProps = {
    label: string;
    value: string;
    onChange: (value: string) => void;
};

const InputField: React.FC<InputFieldProps> = ({ label, value, onChange }) => {
    const handleChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        onChange(event.target.value);
    };

    return (
        <div>
            <label>
                {label}:
                <input
                    type="text"
                    value={value}
                    onChange={handleChange}
                />
            </label>
        </div>
    );
};

export default InputField;
