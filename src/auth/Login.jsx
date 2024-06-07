import axios from "axios";
import { useEffect, useState } from "react";
import { useNavigate } from "react-router-dom";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEnvelope, faLock } from '@fortawesome/free-solid-svg-icons';

function Login() {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const redirect = useNavigate();

    useEffect(() => {
        if (localStorage.getItem('token')) {
            redirect('/');
        }
    }, [redirect]);

    const handelLogin = async (e) => {
        e.preventDefault();
        try {
            const response = await axios.post('http://localhost:8000/api/login', {
                email,
                password,
            });
            localStorage.setItem('token', response.data.access_token);
            console.log(response.data);
            redirect('/');
        } catch (error) {
            console.log(error);
        }
    };

    return (
        <>
            <form onSubmit={handelLogin}>
                <div className="email flex-col flex mb-3">
                    <label htmlFor="email" className="font-medium">Email :</label>
                    <FontAwesomeIcon icon={faEnvelope} className="absolute text-xl text-[#2F7377] mt-8 ml-2" />
                    <input type="email" name="email" value={email} onChange={(e) => setEmail(e.target.value)} required id="email" className="rounded-md h-10 md:w-[27rem] pl-10 shadow-xl shadow-offset-x-lg shadow-offset-y-none" 
                    />
                </div>
                <div className="password flex-col flex mb-3">
                    <label htmlFor="password" className="font-medium">Password :</label>
                    <FontAwesomeIcon icon={faLock} className="absolute text-xl text-[#2F7377] mt-8 ml-2" />
                    <input type="password" name="password" value={password} onChange={(e) => setPassword(e.target.value)} required id="password" className="rounded-md pl-10 h-10 md:w-[27rem] shadow-xl shadow-offset-x-lg shadow-offset-y-none" 
                    />
                </div>
                <div className="button items-center flex justify-center flex-col mt-5">
                    <button type="submit" className="bg-[#2F7377] mb-2 text-white rounded-md h-10 w-[15rem]">Login</button>
                </div>
            </form>
        </>
    );
}

export default Login;
