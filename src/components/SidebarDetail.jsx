import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBookmark, faBars, faClock, faHome, faGear } from "@fortawesome/free-solid-svg-icons";
import { useState } from "react";

function SidebarDetail() {
  const [isOpen, setOpen] = useState(false);
  const togelOpen = () => {
    setOpen(!isOpen);
  };
  return (
    <nav className="bg-white lg:fixed lg:h-screen lg:w-[6%] w-full  border-r border-black z-20">
      <div className="lg:mt-7 flex flex-col items-center mx-5">
        <div className={`flex lg:w-0 w-full justify-between lg:mx-4 mx-4 my-4 md:hidden h-12`}>
          <svg className="text-[#2F7377] size-12 -mt-2" stroke="CurrentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.707 17.293L8.414 13 18 13 18 11 8.414 11 12.707 6.707 11.293 5.293 4.586 12 11.293 18.707z"></path>
          </svg>
          <FontAwesomeIcon icon={faBars} alt="Icon Hamburger Menu" className="text-3xl flex justify-end" />
        </div>
        <button className="lg:flex flex-col hidden items-center mb-12 ">
          <FontAwesomeIcon icon={faHome} className="text-4xl text-[#2F7377]" />
        </button>
        <button className="lg:flex flex-col hidden items-center mb-10 ">
          <FontAwesomeIcon icon={faBookmark} className="text-3xl text-[#2F7377]" />
          <span className="lg:text-[11px] text-sm">Tersimpan</span>
        </button>
        <button className="lg:flex flex-col hidden items-center">
          <FontAwesomeIcon icon={faClock} alt="Icon Latters Menu" className="text-3xl " />
          <span className="lg:text-[11px] text-sm">Baru Saja</span>
        </button>
        <button className="lg:flex flex-col hidden items-center">
          <div className="mt-[250px]">
            <FontAwesomeIcon icon={faGear} alt="Icon Latters Menu" className="text-4xl text-[#2F7377]" />
          </div>
        </button>
      </div>
    </nav>
  );
}

export default SidebarDetail;
