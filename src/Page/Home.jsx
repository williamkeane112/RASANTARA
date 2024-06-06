
import { Link } from "react-router-dom";

//source
import sumateraImg from "../assets/img/Sumatera.png";
import jawaImg from "../assets/img/Jawa.png";
import baliImg from "../assets/img/Bali.png";
import KalimantanImg from "../assets/img/Kalimantan.png";
import sulawesiImg from "../assets/img/Sulawesi.png";
import papuaiImg from "../assets/img/Papua.png";
import ntbImg from "../assets/img/ntb.png";
import nttImg from "../assets/img/ntt.png";
import bgWalpp from "../assets/img/bgwater2.png";
import "../home.css";

// Component
import UniqueFacts from "../components/uniquefacts";
import MusikHome from "../components/musikHome";
import SettingsModal from "../components/settingsModal";
import LoginModal from "../components/loginuser";

function Home() {


  return (
    <div className="body h-[100vh] md:w-auto w-[115vh] pt-3 relative" style={{ backgroundImage: `url(${bgWalpp})` }}>
      <SettingsModal />
      <LoginModal />
      
      <div className="title flex justify-center flex-col items-center ml-10 fixed md:static">
        <h1 className="font-bold md:text-6xl text-2xl drop-shadow-md text-black tracking-wider ">
          Rasa Nusantara
        </h1>
        <h1 className="font-bold md:text-6xl text-2xl drop-shadow-md absolute opacity-20 md:-mt-3 -mt-2 tracking-wider text-black ">
          Rasa Nusantara
        </h1>
        <p className="font-medium md:text-base text-[10px]">
          Pilih pulau dan temukan resep makanan kesukaanmu !
        </p>
      </div>

      <div className="IndonesiaMap">
        {/* Pulau Sumatera */}
        <div className="sumatera absolute md:bottom-20 bottom-56 md:left-8">
          <Link to="/Sumatera" className="sumatera">
            <img src={sumateraImg} alt="" className="md:w-[27rem] w-[16rem]" />
          </Link>
        </div>

        {/* Pulau Jawa */}
        <div className="jawa absolute md:bottom-6 bottom-48 md:left-[18rem] left-[10rem]">
          <Link to="/Jawa" className="jawa">
            <img src={jawaImg} alt="" className="md:w-[29rem] w-[18rem]" />
          </Link>
        </div>

        {/* Pulau Bali */}
        <div className="bali absolute md:bottom-10 md:right-[27rem] right-[17.5rem] bottom-[12rem]">
          <Link to="/Bali" className="bali">
            <img src={baliImg} alt="" className="md:w-[8rem] w-[6rem]" />
          </Link>
        </div>

        {/* Pulau Kalimantan */}
        <div className="kalimantan absolute md:left-[20rem] md:top-32 top-36 left-[11rem]">
          <Link to="/Kalimantan" className="kalimantan">
            <img src={KalimantanImg} alt="" className="md:w-[17.5rem] w-[14.5rem]" />
          </Link>
        </div>

        {/* Pulau Sulawesi */}
        <div className="sulawesi absolute md:left-[37.5rem] md:top-32 top-44 left-[25rem]">
          <Link to="/Sulawesi" className="sulawesi">
            <img src={sulawesiImg} alt="" className="md:w-[17rem] w-[11rem]" />
          </Link>
        </div>

        {/* Pulau Papua */}
        <div className="papua absolute md:right-[4rem] md:top-28 right-4 top-40">
          <Link to="/Papua" className="papua">
            <img src={papuaiImg} alt="" className="md:w-[21rem] w-[14rem]" />
          </Link>
        </div>

        {/* Pulau Nusa Tenggara Barat (NTB) */}
        <div className="ntb absolute md:right-[15.5rem] md:bottom-8 bottom-48 right-36">
          <Link to="/NusaTenggaraBarat" className="ntb">
            <img src={ntbImg} alt="" className="md:w-[12rem] w-[9rem]" />
          </Link>
        </div>

        {/* Pulau Nusa Tenggara Timur (NTT) */}
        <div className="ntt absolute md:right-[5rem] md:bottom-20 right-3 bottom-56">
          <Link to="/NusaTenggaraTimur" className="ntt">
            <img src={nttImg} alt="" className="md:w-[12rem] w-[9rem]" />
          </Link>
        </div>
      </div>

      <MusikHome />
      
      <UniqueFacts />
    </div>
  );
}

export default Home;
