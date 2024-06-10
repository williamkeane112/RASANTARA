import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBookmark, faBars, faClock, faHome, faGear } from "@fortawesome/free-solid-svg-icons";
import { useState } from "react";
import { Link } from "react-router-dom";

function SidebarDetail() {
  const [isOpen, setOpen] = useState(false);
  const togelOpen = () => {
    setOpen(!isOpen);
  };
  return (
    <>
      <nav className="bg-white lg:fixed lg:h-screen lg:w-[6%] w-full max-h-[100%] border-r border-black">
        <div className="lg:mt-7 flex flex-col items-center mx-5">
          <div className={`flex lg:w-0 w-full justify-between lg:mx-4 mx-4 my-2 items-center md:hidden h-12 z-[99]`}>
            <Link to={-1}>
              <svg className="text-[#2F7377] size-12 -mt-2" stroke="CurrentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.707 17.293L8.414 13 18 13 18 11 8.414 11 12.707 6.707 11.293 5.293 4.586 12 11.293 18.707z"></path>
              </svg>
            </Link>
            <button onClick={togelOpen}>
              <FontAwesomeIcon icon={faBars} alt="Icon Hamburger Menu" className="text-3xl flex justify-end" />
            </button>
          </div>
          <Link to='/' className="lg:flex flex-col hidden items-center mb-12 ">
            <FontAwesomeIcon icon={faHome} className="text-4xl text-[#2F7377]" />
          </Link>
          <Link to="/bookmark" className="lg:flex flex-col hidden items-center mb-10 ">
            <FontAwesomeIcon icon={faBookmark} className="text-3xl text-[#2F7377]" />
            <span className="lg:text-[11px] text-sm">Tersimpan</span>
          </Link>
          <Link to="/history" className="lg:flex flex-col hidden items-center">
            <FontAwesomeIcon icon={faClock} alt="Icon Latters Menu" className="text-3xl text-[#2F7377]  " />
            <span className="lg:text-[11px]">Riwayat</span>
          </Link>
        </div>
      </nav>
      <div
        className={`absolute lg:hidden flex bg-white shadow-2xl w-[20%] h-screen  z-[9999] transform ${
          isOpen ? "translate-x-[400%] transition-transform duration-1000 ease-in-out" : "translate-x-[500%] transition-transform duration-1000 ease-in-out"
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
            <span className="text-[12px]">Baru Saja</span>
          </Link>
        </div>
      </div>
    </>
  );
}

export default SidebarDetail;
