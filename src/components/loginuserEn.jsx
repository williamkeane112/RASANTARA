import { useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faUser, faTimes, faEnvelope, faLock } from "@fortawesome/free-solid-svg-icons";

function LoginModal() {
  const [isLoginModalOpen, setIsLoginModalOpen] = useState(false);
  const [isCreateAccountOpen, setIsCreateAccountOpen] = useState(false);

  const handleLoginModalToggle = () => {
    setIsLoginModalOpen(!isLoginModalOpen);
  };

  const handleCreateAccountToggle = () => {
    setIsLoginModalOpen(false); 
    setIsCreateAccountOpen(true);
  };

  const handleExistingAccountToggle = () => {
    setIsCreateAccountOpen(false);
    setIsLoginModalOpen(true); 
  };

  return (
    <div>
      <div className="settings">
        <button
          onClick={handleLoginModalToggle}
          className="md:text-3xl text-2xl text-[#3D8E93] md:absolute fixed md:right-20 right-4 top-5   z-10"
        >
          <FontAwesomeIcon icon={faUser} />
        </button>
        {isLoginModalOpen && (
          <div className="modal md:absolute fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-700 bg-opacity-50 z-20">
            <div className="modal-content bg-[#F8F6F2] md:w-[30rem] md:h-auto p-5 rounded-lg relative">
              <button
                onClick={handleLoginModalToggle}
                className="text-xl text-gray-600 absolute top-3 right-3"
              >
                <FontAwesomeIcon icon={faTimes} />
              </button>
              <h2 className="text-2xl font-bold mb-4 text-center">LOGIN</h2>
              {/* form */}
              <div className="Pilih-bahasa flex items-center justify-between gap-5">
                <form action="">
                  <div className="email flex-col flex mb-3">
                    <label htmlFor="email" className="font-medium">Email:</label>
                    <FontAwesomeIcon icon={faEnvelope} className="absolute text-xl text-[#2F7377] mt-8 ml-2" />
                    <input type="email" name="" required id="" className="rounded-md h-10 md:w-[27rem] pl-10  shadow-xl shadow-offset-x-lg shadow-offset-y-none" />
                  </div>
                  <div className="password flex-col flex mb-3">
                    <label htmlFor="pass" className="font-medium">Password:</label>
                    <FontAwesomeIcon icon={faLock} className="absolute text-xl text-[#2F7377] mt-8 ml-2" />
                    <input type="password" name="" required id="" className="rounded-md pl-10 h-10 md:w-[27rem] shadow-xl shadow-offset-x-lg shadow-offset-y-none" />
                  </div>
                  <div className="button items-center flex justify-center flex-col mt-5 mb-5">
                    <button className="bg-[#2F7377] mb-2 text-white rounded-md h-10 w-[15rem]">Login</button>
                    <button onClick={handleCreateAccountToggle} className="text-sm underline">Don&apos;t have an account?</button>
                  </div>
                </form>
              </div>
              {/* end */}
            </div>
          </div>
        )}
        {isCreateAccountOpen && (
          <div className="modal md:absolute fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-700 bg-opacity-50 z-20">
            <div className="modal-content bg-[#F8F6F2] md:w-[30rem] md:h-auto p-5 rounded-lg relative">
              <button
                onClick={() => {
                  setIsCreateAccountOpen(false); 
                  setIsLoginModalOpen(true); 
                }}
                className="text-xl text-gray-600 absolute top-3 right-3"
              >
                <FontAwesomeIcon icon={faTimes} />
              </button>
              <h2 className="text-2xl font-bold mb-4 text-center">CREATE ACCOUNT</h2>
              {/* create account form */}
              <div className="Pilih-bahasa flex items-center justify-between gap-5">
                <form action="">
                  <div className="nama flex-col flex mb-3">
                    <label htmlFor="nama" className="font-medium">Name:</label>
                    <FontAwesomeIcon icon={faUser} className="absolute text-xl text-[#2F7377] mt-8 ml-2" />
                    <input type="text" name="" required id="" className="rounded-md h-10 md:w-[27rem] pl-10 shadow-xl shadow-offset-x-lg shadow-offset-y-none" />
                  </div>
                  <div className="email flex-col flex mb-3">
                    <label htmlFor="email" className="font-medium">Email:</label>
                    <FontAwesomeIcon icon={faEnvelope} className="absolute text-xl text-[#2F7377] mt-8 ml-2" />
                    <input type="email" name="" required id="" className="rounded-md h-10 md:w-[27rem] pl-10  shadow-xl shadow-offset-x-lg shadow-offset-y-none" />
                  </div>
                  <div className="password flex-col flex mb-3">
                    <label htmlFor="pass" className="font-medium">Password:</label>
                    <FontAwesomeIcon icon={faLock} className="absolute text-xl text-[#2F7377] mt-8 ml-2" />
                    <input type="password" name="" required id="" className="rounded-md pl-10 h-10 md:w-[27rem] shadow-xl shadow-offset-x-lg shadow-offset-y-none" />
                  </div>
                  <div className="nama flex-col flex mb-3">
                    <label htmlFor="nama" className="font-medium">Confirm Password:</label>
                    <FontAwesomeIcon icon={faLock} className="absolute text-xl text-[#2F7377] mt-8 ml-2" />
                    <input type="password" name="" required id="" className="rounded-md pl-10 h-10 md:w-[27rem] shadow-xl shadow-offset-x-lg shadow-offset-y-none" />
                  </div>
                  <div className="button items-center flex justify-center flex-col mt-5 mb-5">
                    <button className="bg-[#2F7377] mb-2 text-white rounded-md h-10 w-[15rem]">Create Account</button>
                    <button onClick={handleExistingAccountToggle} className="text-sm underline">Already have an account?</button>
                  </div>
                </form>
              </div>
              {/* end */}
            </div>
          </div>
        )}
      </div>
    </div>
  );
}

export default LoginModal;
