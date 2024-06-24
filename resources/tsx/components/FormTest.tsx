import React, { useState } from 'react';
import InputField from './formComponents/InputField';

const FormInput: React.FC = () => {
    const [inputValue, setInputValue] = useState('');

    const handleInputChange = (value: string) => {
        setInputValue(value);
    };

    const handleSubmit = (event: React.FormEvent<HTMLFormElement>) => {
        event.preventDefault();
        console.log('Form submitted with value:', inputValue);
    };

    return (
        <div>
            <form onSubmit={handleSubmit}>
                <InputField
                    label="Input"
                    value={inputValue}
                    onChange={handleInputChange}
                />
                <button type="submit">Submit</button>
            </form>
            <p>You entered: {inputValue}</p>
        </div>
    );
};

export default FormInput;
