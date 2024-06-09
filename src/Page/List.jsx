// icon
import HideMenu from "../assets/icon/HideMenu.svg";
import bgWalpp from "../assets/img/bgwater2.png";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faLocationDot, faXmark } from "@fortawesome/free-solid-svg-icons";
import sumatera2Img from "../assets/img/SumateraImg2.png";
import JawaImg2 from "../assets/img/JawaImg2.png";
import ntbImg from "../assets/img/ntbImg.png";
import nttImg from "../assets/img/nttImg.png";
import KalimantanImg2 from "../assets/img/KalimantanImg2.png";
import PapuaImg2 from "../assets/img/PapuaImg2.png";
import SulawesiImg2 from "../assets/img/SulawesiImg2.png";
import BaliImg2 from "../assets/img/BaliImg2.png";

import ListComp from "../components/ListComp";
import Sidebar from "../components/Sidebar";
import MusikList from "../components/MusikList";

// img

// Router

import { Link } from "react-router-dom";
import { useState } from "react";

function List() {
  const [Small, isSmall] = useState(false);
  const [Hide, SetHideExpan] = useState(false);

  const HideOn = () => {
    SetHideExpan(!Hide);
  };

  const queryParams = new URLSearchParams(location.search);
  const pulau = queryParams.get("pulau");

  let [imageToShow, pulauName, textColor, textSize] = [null, "", "", ""];

  switch (pulau) {
    case "sumatera":
      imageToShow = sumatera2Img;
      pulauName = "SUMATERA";
      textColor = "text-[#2F7377]";
      textSize = "text-4xl";
      break;
    case "jawa":
      imageToShow = JawaImg2;
      pulauName = "JAWA";
      textColor = "text-[#2F7377]";
      textSize = "text-4xl";
      break;
    case "ntt":
      imageToShow = nttImg;
      pulauName = "NUSA TENGGARA TIMUR";
      textColor = "text-[#2F7377]";
      textSize = "text-2xl";
      break;
    case "ntb":
      imageToShow = ntbImg;
      pulauName = "NUSA TENGGARA BARAT";
      textColor = "text-[#2F7377]";
      textSize = "text-2xl";
      break;
    case "kalimantan":
      imageToShow = KalimantanImg2;
      pulauName = "KALIMANTAN";
      textColor = "text-[#2F7377]";
      textSize = "text-4xl";
      break;
    case "papua":
      imageToShow = PapuaImg2;
      pulauName = "PAPUA";
      textColor = "text-[#2F7377]";
      textSize = "text-4xl";
      break;
    case "sulawesi":
      imageToShow = SulawesiImg2;
      pulauName = "SULAWESI";
      textColor = "text-[#2F7377]";
      textSize = "text-4xl";
      break;
    case "bali":
      imageToShow = BaliImg2;
      pulauName = "BALI";
      textColor = "text-[#2F7377]";
      textSize = "text-4xl";
      break;
    default:
      imageToShow = null;
      pulauName = "";
      textColor = "";
      textSize = "";
      break;
  }

  const isJawa = pulau === "jawa";
  const isNttOrNtb = pulau === "ntt" || pulau === "ntb";
  const isSumatera = pulau === "sumatera";

  return (
    <>
      <div className={`grid ${isSmall ? "grid-cols-11" : ""} lg:grid-cols-12`}>
        {/* SideBar */}
        <Sidebar />
        {/* End SideBar */}

        {/* Section 2*/}
        <section
          className={`lg:col-span-5 ${isSmall ? "col-span-12" : ""} ${
            Hide ? "lg:hidden lg:translate-y-0 translate-y-[73%] transition-transform duration-1000 ease-in-out" : "block transition-transform duration-1000 ease-in-out"
          } lg:-ml-6 ml-4 lg:mx-0 mx- overflow-y-auto max-h-screen no-ScrollBar max-w-full`}
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
            Hide ? "lg:-translate-x-[542px] duration-1000 lg:inset-x-0 inset-x-20 lg:mt-0 mt-40 lg:rotate-0 rotate-90 lg:translate-y-0 translate-y-[294px]" : "duration-1000 lg:inset-x-0 inset-x-20 lg:mt-0 mt-40 lg:rotate-0 -rotate-90"
          } absolute lg:inset-0 flex justify-center items-center z-50 pointer-events-none`}
        >
          <div className="border bg-[#FCFCFC] border-black border-r-0 lg:rounded-l-2xl lg:py-0 py-1 rounded-l-3xl lg:-ml-[30px] ml-auto pointer-events-auto">
            <button className="lg:px-[12px] p-5 px-4 py-[6px]" onClick={HideOn}>
              <img src={HideMenu} alt="Hide Menu" className={`lg:w-[8px] w-3 ${Hide ? "rotate-0 transition-transform duration-1000 ease-in-out" : "rotate-0"} duration-700 ease-in-out`} />
            </button>
          </div>
        </div>

        {/* End Menu ?? */}
        {/* Section 3 */}
        <section
          className={`border-l lg:border-black lg:flex lg:col-span-6 col-span-12 lg:relative absolute lg:top-0 -top-[80%]  ${
            Hide ? "lg:-ml-12 lg:translate-x-10 lg:translate-y-0 translate-y-[120%]  lg:w-[100.7%] w-full transition-transform duration-1000 ease-in-out" : "duration-1000 ease-in-out"
          }`}
        >
          <div className="lg:w-full lg:h-screen max-h-[100%] " style={{ backgroundImage: `url(${bgWalpp})` }}>
            <div className="flex items-center justify-center lg:pl-7 pl-2 pt-3">
              <span className={`${textSize} font-bold text-center ${textColor}`}>{pulauName}</span>
            </div>
            <div className="flex items-center justify-center lg:mt-14 mt-44">
              <img src={imageToShow} alt="Pulau Image" className={`mx-auto ${isSumatera ? "lg:w-[80vh]" : "lg:w-[100vh]"} w-[60vh] ${isJawa ? "mt-36" : "lg:mt-0 -mt-20"} ${isNttOrNtb ? "mt-32" : ""}`} />
            </div>
            <div className={`ml-5  ${isJawa ? "mt-[90px]" : ""} `}>
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
