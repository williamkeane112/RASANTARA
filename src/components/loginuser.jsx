import { useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faUser, faTimes, faEnvelope, faLock } from "@fortawesome/free-solid-svg-icons";
import axios from "axios";

function LoginModal() {
  const [isLoginModalOpen, setIsLoginModalOpen] = useState(false);
  const [isCreateAccountOpen, setIsCreateAccountOpen] = useState(false);
  const [isLogin, setIsLogin] = useState(false);
  const [email, setEmail] = useState("");
  const [username, setUsername] = useState("");
  const [password, setPassword] = useState("");
  const [confirmPassword, setConfirmPassword] = useState("");

  const handleLoginModalToggle = () => {
    if (localStorage.getItem("token")) {
      setIsLogin(true);
    } else {
      setIsLoginModalOpen(!isLoginModalOpen);
    }
  };

  const handleCreateAccountToggle = () => {
    setIsLoginModalOpen(false);
    setIsLogin(false);
    setIsCreateAccountOpen(true);
  };

  const handleExistingAccountToggle = () => {
    setIsCreateAccountOpen(false);
    setIsLogin(false);
    setIsLoginModalOpen(true);
  };

  const close = () => {
    setIsLogin(false);
  };

  const Register = async (e) => {
    e.preventDefault();
    if (password !== confirmPassword) {
      alert("Passwords do not match");
      return;
    }
    try {
      const response = await axios.post("http://localhost:8000/api/register", { email, username, password }, { headers: { "Content-Type": "application/json" } });
      console.log(response.data);
      setIsLoginModalOpen(true);
      setIsCreateAccountOpen(false);
    } catch (error) {
      console.log(error);
    }
  };

  const handleLogin = async (e) => {
    e.preventDefault();
    try {
      const response = await axios.post("http://localhost:8000/api/login", {
        email,
        password,
      });
      localStorage.setItem("token", response.data.access_token);
      console.log(response.data);
      setIsLoginModalOpen(false);
    } catch (error) {
      console.log(error);
    }
  };
  // logout func
  const handelLogout = async () => {
    try {
      const token = localStorage.getItem("token");
      const response = await axios.post(
        "http://localhost:8000/api/logout",
        {},
        {
          headers: {
            Authorization: `Bearer ${token}`,
            "Content-Type": "application/json",
          },
        }
      );
      localStorage.removeItem("token");
      console.log(response.data);
    } catch (error) {
      console.log(error);
    }
  };

  return (
    <div>
      <div className="settings">
        <button onClick={handleLoginModalToggle} className="md:text-3xl text-2xl text-[#3D8E93] md:absolute fixed md:right-20 right-4 top-5 z-10">
          <FontAwesomeIcon icon={faUser} />
        </button>
        {isLoginModalOpen && (
          <div className="modal md:absolute fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-700 bg-opacity-50 z-20">
            <div className="modal-content bg-[#F8F6F2] md:w-[30rem] md:h-auto p-5 rounded-lg relative">
              <button onClick={handleLoginModalToggle} className="text-xl text-gray-600 absolute top-3 right-3">
                <FontAwesomeIcon icon={faTimes} />
              </button>
              <h2 className="text-2xl font-bold mb-4 text-center">LOGIN</h2>
              <form onSubmit={handleLogin}>
                <div className="email flex-col flex mb-3">
                  <label htmlFor="email" className="font-medium">
                    Email :
                  </label>
                  <FontAwesomeIcon icon={faEnvelope} className="absolute text-xl text-[#2F7377] mt-8 ml-2" />
                  <input type="email" required id="email" className="rounded-md h-10 md:w-[27rem] pl-10 shadow-xl shadow-offset-x-lg shadow-offset-y-none" value={email} onChange={(e) => setEmail(e.target.value)} />
                </div>
                <div className="password flex-col flex mb-3">
                  <label htmlFor="password" className="font-medium">
                    Password :
                  </label>
                  <FontAwesomeIcon icon={faLock} className="absolute text-xl text-[#2F7377] mt-8 ml-2" />
                  <input type="password" required id="password" className="rounded-md pl-10 h-10 md:w-[27rem] shadow-xl shadow-offset-x-lg shadow-offset-y-none" value={password} onChange={(e) => setPassword(e.target.value)} />
                </div>
                <div className="button items-center flex justify-center flex-col mt-5 mb-5">
                  <button type="submit" className="bg-[#2F7377] mb-2 text-white rounded-md h-10 w-[15rem]">
                    Login
                  </button>
                  <button type="button" onClick={handleCreateAccountToggle} className="text-sm underline">
                    Belum punya akun?
                  </button>
                </div>
              </form>
            </div>
          </div>
        )}
        {isCreateAccountOpen && (
          <div className="modal md:absolute fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-700 bg-opacity-50 z-20">
            <div className="modal-content bg-[#F8F6F2] md:w-[30rem] md:h-auto p-5 rounded-lg relative">
              <button onClick={handleExistingAccountToggle} className="text-xl text-gray-600 absolute top-3 right-3">
                <FontAwesomeIcon icon={faTimes} />
              </button>
              <h2 className="text-2xl font-bold mb-4 text-center">BUAT AKUN</h2>
              <form onSubmit={Register}>
                <div className="nama flex-col flex mb-3">
                  <label htmlFor="username" className="font-medium">
                    Nama :
                  </label>
                  <FontAwesomeIcon icon={faUser} className="absolute text-xl text-[#2F7377] mt-8 ml-2" />
                  <input type="text" required id="username" className="rounded-md h-10 md:w-[27rem] pl-10 shadow-xl shadow-offset-x-lg shadow-offset-y-none" value={username} onChange={(e) => setUsername(e.target.value)} />
                </div>
                <div className="email flex-col flex mb-3">
                  <label htmlFor="email" className="font-medium">
                    Email :
                  </label>
                  <FontAwesomeIcon icon={faEnvelope} className="absolute text-xl text-[#2F7377] mt-8 ml-2" />
                  <input type="email" required id="email" className="rounded-md h-10 md:w-[27rem] pl-10 shadow-xl shadow-offset-x-lg shadow-offset-y-none" value={email} onChange={(e) => setEmail(e.target.value)} />
                </div>
                <div className="password flex-col flex mb-3">
                  <label htmlFor="password" className="font-medium">
                    Password :
                  </label>
                  <FontAwesomeIcon icon={faLock} className="absolute text-xl text-[#2F7377] mt-8 ml-2" />
                  <input type="password" required id="password" className="rounded-md pl-10 h-10 md:w-[27rem] shadow-xl shadow-offset-x-lg shadow-offset-y-none" value={password} onChange={(e) => setPassword(e.target.value)} />
                </div>
                <div className="password flex-col flex mb-3">
                  <label htmlFor="confirmPassword" className="font-medium">
                    Konfirmasi Password :
                  </label>
                  <FontAwesomeIcon icon={faLock} className="absolute text-xl text-[#2F7377] mt-8 ml-2" />
                  <input
                    type="password"
                    required
                    id="confirmPassword"
                    className="rounded-md pl-10 h-10 md:w-[27rem] shadow-xl shadow-offset-x-lg shadow-offset-y-none"
                    value={confirmPassword}
                    onChange={(e) => setConfirmPassword(e.target.value)}
                  />
                </div>
                <div className="button items-center flex justify-center flex-col mt-5 mb-5">
                  <button type="submit" className="bg-[#2F7377] mb-2 text-white rounded-md h-10 w-[15rem]">
                    Buat Akun
                  </button>
                  <button type="button" onClick={handleExistingAccountToggle} className="text-sm underline">
                    Sudah punya akun?
                  </button>
                </div>
              </form>
            </div>
          </div>
        )}
        {isLogin && (
          <div className="modal md:absolute fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-700 bg-opacity-50 z-20">
            <div className="modal-content bg-[#F8F6F2] md:w-[30rem] md:h-auto p-5 rounded-lg relative">
              <button onClick={close} className="text-xl ml-10 text-gray-600 absolute top-3 right-3">
                <FontAwesomeIcon icon={faTimes} />
              </button>
              <div className="flex justify-center">
                <button onClick={handelLogout} className="py-2 px-5 bg-red-500 text-white text-center rounded-lg hover:bg-red-700">
                  LOGOUT
                </button>
              </div>
            </div>
          </div>
        )}
      </div>
    </div>
  );
}

export default LoginModal;
