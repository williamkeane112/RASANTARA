import { useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faGear, faTimes } from "@fortawesome/free-solid-svg-icons";
import { Link } from "react-router-dom";

function SettingsModal() {
  const [isSettingsOpen, setIsSettingsOpen] = useState(false);

  const handleSettingsToggle = () => {
    setIsSettingsOpen(!isSettingsOpen);
  };

  return (
    <div className="">
      <div className="settings">
        <button
          onClick={handleSettingsToggle}
          className="md:text-3xl text-2xl text-[#3D8E93] md:absolute fixed md:top-5 top-auto md:bottom-auto bottom-5 md:right-5 right-8 z-10"
        >
          <FontAwesomeIcon icon={faGear} />
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
              <h2 className="text-2xl font-bold mb-4">Settings</h2>
              <div className="Pilih-bahasa flex items-center justify-between gap-5">
                <h1 className="md:text-base text-sm">Select Language :</h1>
                <div className="button flex">
                  <div className="border border-r-0 bg-[#2F7377] w-fit py-1 rounded-l-md text-white px-2">
                    <Link to="/homeEN">ENG</Link>
                  </div>
                  <div className="border border-l-0 bg-white w-fit py-1 rounded-r-md   px-2">
                    <Link to="/">IND</Link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        )}
      </div>
    </div>
  );
}

export default SettingsModal;
