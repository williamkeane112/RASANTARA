import { useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faUser, faTimes } from "@fortawesome/free-solid-svg-icons";

function LoginModal() {
  const [isSettingsOpen, setIsSettingsOpen] = useState(false);

  const handleSettingsToggle = () => {
    setIsSettingsOpen(!isSettingsOpen);
  };

  return (
    <div className="">
      <div className="settings">
        <button
          onClick={handleSettingsToggle}
          className="md:text-3xl text-2xl text-[#3D8E93] md:absolute fixed top-5 md:right-20 right-4  z-10"
        >
          <FontAwesomeIcon icon={faUser} />
        </button>
        {isSettingsOpen && (
          <div className="modal md:absolute fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-700 bg-opacity-50 z-20">
            <div className="modal-content bg-[#F8F6F2] md:w-[30rem] md:h-auto p-5 rounded-lg relative">
              <button
                onClick={handleSettingsToggle}
                className="text-xl text-gray-600 absolute top-3 right-3"
              >
                <FontAwesomeIcon icon={faTimes} />
              </button>
              <h2 className="text-2xl font-bold mb-4 text-center">Hallo, User</h2>
              {/* form */}
              <div className="Pilih-bahasa flex items-center justify-center">
                <form action="">
                    <div className="button items-center flex justify-center flex-col mt-5 mb-5">
                        <button className="bg-red-500 mb-2 text-white rounded-md h-10 md:w-[27rem] w-[10rem]">Log Out</button>
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