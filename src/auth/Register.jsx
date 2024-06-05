import axios from "axios";
import { useEffect, useState } from "react";
import { useNavigate } from "react-router-dom";

function Register() {
  const [email, setEmail] = useState("");
  const [username, setUsername] = useState("");
  const [password, setPassword] = useState("");
  const redirect = useNavigate();
  useEffect(() => {
    if (localStorage.getItem("token")) {
      redirect("/");
    }
  });

  const Register = async (e) => {
    e.preventDefault();
    try {
      const response = await axios.post(
        "http://localhost:8000/api/register",
        {
          email,
          username,
          password,
        },
        {
          headers: {
            "Content-Type": "application/json",
          },
        }
      );
      console.log(response.data);
      redirect("/login");
    } catch (error) {
      console.log(error);
    }
  };
  return (
    <>
      <form onSubmit={Register}>
        <label htmlFor="">Email</label>
        <input type="email" name="email" value={email} onChange={(e) => setEmail(e.target.value)} className="border border-black block" />

        <label htmlFor="">UserName</label>
        <input type="text" name="username" value={username} onChange={(e) => setUsername(e.target.value)} className="border border-black block" />

        <label htmlFor="">Password</label>
        <input type="text" name="password" value={password} onChange={(e) => setPassword(e.target.value)} className="border border-black block" />

        <button className="border border-black bg-blue-600 py-1 px-2 text-white mt-2">Submit</button>
      </form>
    </>
  );
}

export default Register;
