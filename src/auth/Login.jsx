import axios from "axios";
import { useEffect, useState } from "react";
import { useNavigate } from "react-router-dom";

function Login() {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const redirect = useNavigate();

    useEffect(()=>{
        if(localStorage.getItem('token')){
            redirect('/')
        }
    })
    const handelLogin = async (e) => {
        e.preventDefault();
        try{
            const response = await axios.post('http://localhost:8000/api/login', {
                email,
                password,
            });
            localStorage.setItem('token', response.data.access_token);
            console.log(response.data);
            redirect('/')
        }catch (error){
            console.log(error)
        }
    }
  return (
    <>
      <form onSubmit={handelLogin}>
        <label htmlFor="">Email</label>
        <input type="email" name="email" value={email} onChange={(e) => setEmail(e.target.value)} className="border border-black block" />

        <label htmlFor="">Password</label>
        <input type="text" name="password" value={password} onChange={(e) => setPassword(e.target.value)} className="border border-black block" />

        <button className="border border-black bg-blue-600 py-1 px-2 text-white mt-2">Submit</button>
      </form>
    </>
  );
}

export default Login;
