import  { useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faUser, faTimes } from "@fortawesome/free-solid-svg-icons";
import Login from "../auth/Login";
import Register from "../auth/Register";

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
                <div>
                  <Login />
                  <div className="button items-center flex justify-center flex-col">
                    <button onClick={handleCreateAccountToggle} className="text-sm underline">Belum punya akun ?</button>
                  </div>
                </div>
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
              <h2 className="text-2xl font-bold mb-4 text-center">BUAT AKUN</h2>
              {/* buat account form */}
              <div className="Pilih-bahasa flex items-center justify-between gap-5">
               <div className="">
               <Register />
                  <div className="button items-center flex justify-center flex-col">
                    <button onClick={handleExistingAccountToggle} className="text-sm underline">Sudah punya akun ?</button>
                  </div>
               </div>
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
