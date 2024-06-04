import React, { useState, useEffect } from "react";
import { Link } from "react-router-dom";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faVolumeHigh, faVolumeMute, faCircleInfo, faGear, faTimes } from "@fortawesome/free-solid-svg-icons";
import sumateraImg from "../assets/img/Sumatera.png";
import jawaImg from "../assets/img/Java.png";
import baliImg from "../assets/img/Bali.png";
import KalimantanImg from "../assets/img/Borneo.png";
import sulawesiImg from "../assets/img/Sulawesi.png";
import papuaiImg from "../assets/img/Papua.png";
import ntbImg from "../assets/img/Wnt.png";
import nttImg from "../assets/img/ntt.png";
import manukDadali from "../assets/audio/manukdadali.m4a";
import bgWalpp from "../assets/img/bgwater2.png";
import "../home.css";

function Home() {
  const [uniqueFacts, setUniqueFacts] = useState([
    "Did you know that every regional food has a unique background story?",
    "Pecel Lele, a popular dish in Indonesia made from fried catfish which is often referred to as \"addictive catfish\".",
  ]);

  const [currentFactIndex, setCurrentFactIndex] = useState(0);
  const [isMusicPlaying, setIsMusicPlaying] = useState(true);
  const [audio] = useState(new Audio(manukDadali));
  const [isSettingsOpen, setIsSettingsOpen] = useState(false);

  useEffect(() => {
    if (isMusicPlaying) {
      audio.play();
    }

    const intervalId = setInterval(() => {
      setCurrentFactIndex((prevIndex) =>
        prevIndex === uniqueFacts.length - 1 ? 0 : prevIndex + 1
      );
    }, 5000);

    return () => {
      clearInterval(intervalId);
      audio.pause();
      audio.currentTime = 0;
    };
  }, [audio, isMusicPlaying, uniqueFacts]);

  const handleAudioToggle = () => {
    setIsMusicPlaying(!isMusicPlaying);
  };

  const handleMuteToggle = () => {
    audio.muted = !audio.muted;
    setIsMusicPlaying(audio.muted);
  };

  const handleSettingsToggle = () => {
    setIsSettingsOpen(!isSettingsOpen);
  };

  return (
    <div className="body h-screen md:w-auto w-[115vh] pt-3 relative" style={{ backgroundImage: `url(${bgWalpp})` }}>
      <div className="settings">
        <button onClick={handleSettingsToggle} className="md:text-3xl text-xl text-[#3D8E93] md:absolute fixed top-5 right-5 z-10">
          <FontAwesomeIcon icon={faGear} className="" />
        </button>
        {isSettingsOpen && (
          <div className="modal md:absolute fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-700 bg-opacity-50 z-20">
            <div className="modal-content bg-white md:w-[30rem] md:h-[24rem] p-5 rounded-lg relative">
              <button onClick={handleSettingsToggle} className="text-xl text-gray-600 absolute top-3 right-3">
                <FontAwesomeIcon icon={faTimes} />
              </button>
              <h2 className="text-2xl font-bold mb-4">Settings</h2>
              <div className="Pilih-bahasa flex items-center justify-between gap-5">
                <h1 className="md:text-base text-sm">Select your Language :</h1>
                <div className="button flex">
                  <div className="border border-r-0 border-[#2F7377] w-fit py-1 rounded-l-md px-2 bg-[#2F7377] text-white">
                    <Link to="/homeEN">ENG</Link>
                  </div>
                  <div className="border border-l-0 border-[#2F7377] w-fit py-1 rounded-r-md   px-2">
                  <Link to="/">IND</Link>
                  </div>
                </div>
              </div>
           
            </div>
          </div>
        )}
      </div>
      <div className="title flex justify-center flex-col items-center ml-10 fixed md:static">
        <h1 className="font-bold md:text-6xl text-3xl  drop-shadow-md  text-black tracking-wider ">
          Rasa Nusantara
        </h1>
        <h1 className="font-bold md:text-6xl text-3xl drop-shadow-md absolute opacity-20 md:-mt-3 -mt-2 tracking-wider text-black ">
          Rasa Nusantara
        </h1>
        <p className="font-medium md:text-base text-[10px]">
        Choose an island and find your favorite food recipe!
        </p>
      </div>

      <div className="IndonesiaMap">
        {/* Pulau Sumatera */}
        <div className="sumatera absolute md:bottom-16 bottom-44 md:left-10">
          <Link to="/sumatera" className="sumatera">
            <img src={sumateraImg} alt="" className="md:w-[28rem] w-[18rem]" />
          </Link>
        </div>

        {/* Pulau Jawa */}
        <div className="jawa absolute md:-bottom-8 bottom-32 md:left-[19rem] left-[10rem]">
          <Link to="/" className="jawa">
            <img src={jawaImg} alt="" className="md:w-[28rem] w-[16rem]" />
          </Link>
        </div>

        {/* Pulau Bali */}
        <div className="bali absolute md:bottom-16 md:right-[27rem] right-[17.5rem] bottom-[10rem]">
          <Link to="/" className="bali">
            <img src={baliImg} alt="" className="md:w-[7rem] w-[6rem]" />
          </Link>
        </div>

        {/* Pulau Kalimantan */}
        <div className="kalimantan absolute md:left-[14rem] md:top-28 top-36 left-[4rem]">
          <Link to="/" className="kalimantan">
            <img src={KalimantanImg} alt="" className="md:w-[35rem] w-[27rem]" />
          </Link>
        </div>

        {/* Pulau Sulawesi */}
        <div className="sulawesi absolute md:left-[34rem] md:top-36 top-44 left-[20rem]">
          <Link to="/" className="sulawesi">
            <img src={sulawesiImg} alt="" className="md:w-[24rem] w-[16rem]" />
          </Link>
        </div>

        {/* Pulau Papua */}
        <div className="papua absolute md:right-[5rem] md:top-28 right-4 top-40">
          <Link to="/" className="papua">
            <img src={papuaiImg} alt="" className="md:w-[18rem] w-[14rem]" />
          </Link>
        </div>

        {/* Pulau Nusa Tenggara Barat (NTB) */}
        <div className="ntb absolute md:right-[15.5rem] md:bottom-14 bottom-40 right-36">
          <Link to="/" className="ntb">
            <img src={ntbImg} alt="" className="md:w-[12rem] w-[9rem]" />
          </Link>
        </div>

        {/* Pulau Nusa Tenggara Timur (NTT) */}
        <div className="ntt absolute md:right-[5rem] md:bottom-28 right-3 bottom-44">
          <Link to="/" className="ntt">
            <img src={nttImg} alt="" className="md:w-[12rem] w-[9rem]" />
          </Link>
        </div>
      </div>

      <div className="music flex items-center md:gap-5 gap-2 text-[#2F7377] md:bottom-6 bottom-3 left-5 md:absolute fixed">
        <button onClick={handleAudioToggle}>
          <FontAwesomeIcon icon={isMusicPlaying ? faVolumeHigh : faVolumeMute} className="md:text-4xl text-xl" />
        </button>
        <div className="text">
          <h1 className="music-title font-bold md:text-lg text-sm">Manuk Dadali</h1>
          <p className="music-artist md:text-base text-[10px]">West Java Traditional Songs</p>
        </div>
      </div>

      <div className="information md:w-[26rem] w-[16rem] md:text-center text-justify md:absolute md:bottom-[8rem] fixed  bottom-16 left-16 md:left-auto  md:right-[26rem]">
        <div className="title text-[#3D8E93] font-bold flex items-center gap-2 justify-center text-center">
          <FontAwesomeIcon icon={faCircleInfo} className="text-xl" />
          <h1 className="md:text-base">Unique facts :</h1>
        </div>
        <div className="text md:text-[11PX] text-[11px] text-[#4EA9AE]">
          <p className="mb-2 text-[#206468]">{uniqueFacts[currentFactIndex]}</p>
          <p className="text-center">{`${currentFactIndex + 1}/${uniqueFacts.length}`}</p>
        </div>
      </div>
    </div>
  );
}

export default Home;
