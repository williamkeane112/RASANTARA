// icon
import HideMenu from "../assets/icon/HideMenu.svg";
import bgWalpp from "../assets/img/bgwater2.png";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faLocationDot, faXmark } from "@fortawesome/free-solid-svg-icons";

import ListComp from "../components/ListComp";
import Sidebar from "../components/Sidebar";
import MusikList from "../components/musikList";

// img
// Router

import { Link } from "react-router-dom";
import { useState } from "react";
import Pulau from "../components/Pualu";

function List() {
  const [Small, isSmall] = useState(false);
  const [Hide, SetHideExpan] = useState(false);

  const HideOn = () => {
    SetHideExpan(!Hide);
  };

  const queryParams = new URLSearchParams(location.search);
  const pulau = queryParams.get("pulau");
  const { imageToShow, pulauName, textColor, textSize, style } = Pulau({ pulau });

  const isJawa = pulau === "jawa";
  const isNttOrNtb = pulau === "ntt" || pulau === "ntb";
  const isSumatera = pulau === "sumatera";
  const isSulawesi = pulau === "sulawesi";
  const isKalimantan = pulau === "kalimantan";
  const isPapua = pulau === "papua";
  const isBali = pulau === "bali";

  return (
    <>
      {/* /pulau hide */}
      <section className={`border-l lg:border-black lg:hidden lg:col-span-6 col-span-12 absolute  ${Hide ? "w-full translate-y-[10%] transition-transform duration-1000 ease-in-out" : "-top-[100%] duration-1000 ease-in-out"}`}>
        <div className="w-full" style={{ backgroundImage: `url(${bgWalpp})` }}>
          <div className="flex items-center justify-center pl-7 pt-3">
            <span className={`${textSize} font-bold text-center ${textColor}`}>{pulauName}</span>
          </div>
          <div className="flex items-center justify-center mt-14">
            <img src={imageToShow} alt="Pulau Image" className={`mx-auto`} />
          </div>
          <div className={`ml-5`}>
             {/* <MusikList /> */}
          </div>
        </div>
      </section>
      {/* pulau hide */}
      <div className={`grid ${isSmall ? "grid-cols-11" : ""} lg:grid-cols-12`}>
        {/* SideBar */}
        <Sidebar />
        {/* End SideBar */}

        {/* Section 2*/}
        <section
          className={`lg:col-span-5 lg:mb-0 mb-20 ${isSmall ? "col-span-12" : ""} ${
            Hide ? "lg:hidden lg:translate-y-0 translate-y-[65%] transition-transform duration-1000 ease-in-out h-screen" : "block transition-transform duration-1000 ease-in-out"
          } lg:-ml-6 ml-4 lg:mx-0 overflow-y-auto max-h-screen no-ScrollBar max-w-full`}
        >
          {/* Navbar */}
          <div className="lg:mt-4 mt-14 my-3 flex items-center justify-between mr-5 lg:mx-1 mx-4">
            <div className="flex items-center">
              <FontAwesomeIcon icon={faLocationDot} className="text-xl text-[#2F7377]" />
              <span className="mt-2 font-semibold ml-1">Pulau {pulau}</span>
            </div>
            <Link to="/">
              <FontAwesomeIcon icon={faXmark} className="text-2xl text-[#2F7377] lg:flex hidden" />
            </Link>
          </div>
          {/* list */}
          <ListComp />
          {/* List Makanan */}
        </section>
        {/* End Section 2 */}
        {/* Menu ?? */}
        <div
          className={`${
            Hide ? "lg:-translate-x-[542px] duration-1000 lg:inset-x-0 inset-x-20 lg:mt-0 mt-[400px] lg:rotate-0 rotate-90" : "duration-1000 lg:inset-x-0 inset-x-20 lg:mt-0 mt-40 lg:rotate-0 -rotate-90"
          } absolute lg:inset-0 flex justify-center items-center z-50 pointer-events-none`}
        >
          ``
          <div className="border bg-[#FCFCFC] border-black border-r-0 lg:rounded-l-2xl lg:py-0 py-1 rounded-l-3xl lg:-ml-[30px] ml-auto pointer-events-auto">
            <button className="lg:px-[12px] p-5 px-4 py-[6px]" onClick={HideOn}>
              <img src={HideMenu} alt="Hide Menu" className={`lg:w-[8px] w-3 ${Hide ? "rotate-0 transition-transform duration-1000 ease-in-out" : "rotate-0"} duration-700 ease-in-out`} />
            </button>
          </div>
        </div>

        {/* End Menu ?? */}
        {/* Section 3 */}
        <section className={`border-l overflow-y-auto  lg:border-black lg:flex lg:col-span-6 col-span-12 hidden  ${Hide ? "lg:-ml-12 lg:translate-x-10 lg:w-[100.7%] w-full transition-transform duration-1000 ease-in-out" : "duration-1000 ease-in-out"}`}>
          <div className="w-full h-[100%] " style={{ backgroundImage: `url(${bgWalpp})` }}>
            <div className="flex items-center justify-center pl-7 pt-3">
              <span className={`${textSize} font-bold text-center ${textColor}`}>{pulauName}</span>
            </div>
            <div className="flex items-center justify-center mt-14">
              <img src={imageToShow} alt="Pulau Image" className={`mx-auto ${isSumatera ? "lg:w-[80vh]" : "lg:w-[100vh]"} w-[60vh] ${isJawa ? "mt-36" : "lg:mt-0 -mt-20"} ${isNttOrNtb ? "mt-32" : ""} ${isSulawesi ? "lg:w-[90vh]" : ""} ${isKalimantan ? "lg:w-[85vh]" : ""} ${isPapua ? "lg:w-[98vh]" : ""} ${isBali ? "mb-14" : ""} `} />
            </div>
            <div className={`ml-5    ${isJawa ? "mt-[90px]" : ""} `}>
              <MusikList />
            </div>
          </div>
        </section>

        {/* End Section 3 */}
      </div>
    </>
  );
}

export default List;
