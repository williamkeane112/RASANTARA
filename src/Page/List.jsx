// icon
import HideMenu from "../assets/icon/HideMenu.svg";
import bgWalpp from "../assets/img/bgwater2.png";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";

import { faLocationDot, faXmark, faSearch } from "@fortawesome/free-solid-svg-icons";
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
import MusikList from "../components/musikList";


import { faLocationDot, faXmark, faSearch, faCircleExclamation } from "@fortawesome/free-solid-svg-icons";
// img
import sumatera2Img from "../assets/img/SumateraImg2.png";

// Router

import { Link, useLocation } from "react-router-dom";
import { useState } from "react";
// item
import ListComp from "../components/ListComp";
import Sidebar from "../components/Sidebar";
function Sumatera() {
  const queryParams = new URLSearchParams(location.search);
  const query = queryParams.get("pulau") || "";
  const [Small, isSmall] = useState(false);
  const [Hide, SetHideExpan] = useState(false);

  const HideOn = () => {
    SetHideExpan(!Hide);
  };

  const queryParams = new URLSearchParams(location.search);
  const pulau = queryParams.get("pulau");

  let imageToShow;
  let pulauName;

  switch (pulau) {
    case "sumatera":
      imageToShow = sumatera2Img;
      pulauName = "SUMATERA";
      break;
    case "jawa":
      imageToShow = JawaImg2;
      pulauName = "JAWA";
      break;
    case "ntt":
      imageToShow = nttImg;
      pulauName = "NUSA TENGGARA TIMUR";
      break;
    case "ntb":
      imageToShow = ntbImg;
      pulauName = "NUSA TENGGARA BARAT";
      break;
    case "kalimantan":
      imageToShow = KalimantanImg2;
      pulauName = "KALIMANTAN";
      break;
    case "papua":
      imageToShow = PapuaImg2;
      pulauName = "PAPUA";
      break;
    case "sulawesi":
      imageToShow = SulawesiImg2;
      pulauName = "SULAWESI";
      break;
    case "bali":
      imageToShow = BaliImg2;
      pulauName = "BALI";
      break;
    default:
      imageToShow = null;
      pulauName = "";
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
        <section className={`lg:col-span-5 ${isSmall ? "col-span-10" : ""} ${Hide ? "hidden" : "block"} lg:-ml-6 ml-4 lg:mx-0 mx- overflow-y-auto max-h-screen no-ScrollBar max-w-full`}>
          {/* Navbar */}
          <div className="mt-4 flex items-center justify-between mr-5 lg:mx-1 mx-8">
            <div className="flex items-center">
              <FontAwesomeIcon icon={faLocationDot} className="text-xl text-rose-500" />
              <span className="mt-2 font-semibold ml-1">Pulau {query}</span>
            </div>
            <Link to="/">
              <FontAwesomeIcon icon={faXmark} className="text-2xl" />
            </Link>
          </div>

          <div className="my-4 lg:mx-1 ml-8 mx-5">
            <div className="flex items-center relative">
              <FontAwesomeIcon icon={faSearch} alt="Search icon" className="absolute w-4 mx-2" />
              <input type="text" placeholder={`Cari resep makan di daerah pulau ${location.pathname.replace("/", "")}`} className="w-full lg:text-md font-semibold text-sm pl-8 py-[5px] border border-black rounded-md" />
            </div>
          </div>

          {/* end NavBar*/}

          <ListComp />
          {/* List Makanan */}
        </section>
        {/* End Section 2 */}
        {/* Menu ?? */}
        <div className={`${Hide ? "lg:-translate-x-[542px] duration-1000" : "duration-1000"} absolute inset-0 flex justify-center items-center z-50 pointer-events-none`}>
          <div className="border bg-[#FCFCFC] border-black border-r-0 lg:rounded-l-2xl rounded-l-3xl lg:-ml-[30px] ml-auto pointer-events-auto">
            <button className="lg:px-[12px] p-5 px-4 py-[6px]" onClick={HideOn}>
              <img src={HideMenu} alt="Hide Menu" className={`lg:w-[8px] w-3 ${Hide ? "rotate-180 duration-700 ease-in-out " : "rotate-0 duration-700 ease-in-out"}`} />
            </button>
          </div>
        </div>
        {/* End Menu ?? */}
        {/* Section 3 */}
        <section
          className={`border-l lg:border-black lg:flex ${isSmall ? "col-span-6" : "lg:col-span-11"} ${
            Hide ? "lg:col-span-11 col-span-10 lg:-ml-12 translate-x-10 -ml-1 lg:w-[100.7%] w-[149%] transition-transform duration-1000 ease-in-out" : " hidden lg:w-full  duration-1000 ease-in-out"
          }`}
        >
          <div className="w-full h-screen" style={{ backgroundImage: `url(${bgWalpp})` }}>
            <div className="flex items-center justify-center lg:pl-7 pl-2 pt-3">
              <span className="text-4xl font-bold text-center">{pulauName}</span>
            </div>
            <div className="flex items-center justify-center lg:mt-14 mt-44">

              <img
                src={imageToShow}
                alt="Pulau Image"
                className={`mx-auto ${isSumatera ? "lg:w-[80vh]" : "lg:w-[100vh]"} w-[60vh] ${isJawa ? "mt-36" : ""} ${isNttOrNtb ? "mt-32" : ""}`}
              />
            </div>
            <div className={`ml-5 ${isJawa ? "mt-28" : ""}`}>
              <MusikList />

              <img src={sumatera2Img} alt="Sumatera img" className="lg:w-[550px] w-[600px] mx-auto" />

            </div>
          </div>
        </section>

        {/* End Section 3 */}
      </div>
    </>
  );
}

export default Sumatera;
