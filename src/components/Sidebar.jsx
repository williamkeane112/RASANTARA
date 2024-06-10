import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBookmark, faBars, faClock, faHome } from "@fortawesome/free-solid-svg-icons";
import { useState } from "react";
import { Link } from "react-router-dom";

// img
function Sidebar() {
  const [isOpen, setOpen] = useState(false);
  const togelOpen = () => {
    setOpen(!isOpen);
  };
  return (
    <>
      <nav className="lg:col-span-1 col-span-12 lg:w-[70px] w-full max-h-[100%] border-r border-black">
        <div className="lg:mt-7 flex flex-col items-center">
          <div className="flex items-center w-full z-[999]">
            <button onClick={togelOpen} className="flex lg:flex-col items-center lg:mb-12 lg:mx-auto ml-7">
              <FontAwesomeIcon icon={faBars} alt="Icon Hamburger Menu" className="text-3xl " />
            </button>
            <span className="py-4 ml-10 lg:hidden font-semibold">RASANTARA</span>
          </div>

          <Link to="/" className="lg:flex flex-col hidden items-center mb-12 ">
            <FontAwesomeIcon icon={faHome} className="text-4xl text-[#2F7377]" />
          </Link>
          <Link to="/bookmark" className="lg:flex flex-col hidden items-center mb-10 ">
            <FontAwesomeIcon icon={faBookmark} className="text-3xl text-[#2F7377]" />
            <span className="lg:text-[11px] text-sm">Tersimpan</span>
          </Link>
          <Link to='/history' className="lg:flex flex-col hidden items-center">
            <FontAwesomeIcon icon={faClock} alt="Icon Latters Menu" className="text-3xl text-[#2F7377] " />
            <span className="lg:text-[11px] text-sm">Riwayat</span>
          </Link>
        </div>
      </nav>
      {/* sidebar open */}
      <div
        className={`absolute lg:hidden flex bg-white shadow-2xl w-[20%] h-screen mt-12 z-[9999] left-0 transform ${
          isOpen ? "translate-x-0 transition-transform duration-1000 ease-in-out" : "-translate-x-[120%] transition-transform duration-1000 ease-in-out"
        }`}
      >
        <div className="mt-10 flex flex-col items-center mx-auto ">
          <Link to="/" className="flex flex-col  items-center mb-12 ">
            <FontAwesomeIcon icon={faHome} className="text-4xl text-[#2F7377]" />
          </Link>
          <Link to="/bookmark" className="flex flex-col items-center mb-10 ">
            <FontAwesomeIcon icon={faBookmark} className="text-3xl text-[#2F7377]" />
            <span className="text-[12px]">Tersimpan</span>
          </Link>
          <Link to="/history" className="flex flex-col items-center">
            <FontAwesomeIcon icon={faClock} alt="Icon Latters Menu" className="text-3xl text-[#2F7377]" />
            <span className="text-[12px]">Riwayat</span>
          </Link>
        </div>
      </div>
    </>
  );
}

export default Sidebar;
