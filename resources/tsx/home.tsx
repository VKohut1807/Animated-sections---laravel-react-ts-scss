import React from 'react';
import ReactDOM from 'react-dom';
import FormTest from './components/FormTest';

const idPage:string = "home_page";

function Home() {
    return (
        <>
            <h1>Hello, React!</h1>
            <FormTest />
        </>
    );
}

if (document.getElementById(idPage)) ReactDOM.render(<Home />, document.getElementById(idPage));
