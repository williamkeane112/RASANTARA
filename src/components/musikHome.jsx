import { useState, useEffect } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faVolumeHigh, faVolumeMute } from "@fortawesome/free-solid-svg-icons";
import manukDadali from "../assets/audio/manukdadali.m4a"; 


function MusikHome() {
  const [isMusicPlaying, setIsMusicPlaying] = useState(true);
  const [audio] = useState(new Audio(manukDadali));

  useEffect(() => {
    if (isMusicPlaying) {
      audio.play();
    } else {
      audio.pause();
    }

    return () => {
      audio.pause();
      audio.currentTime = 0;
    };
  }, [audio, isMusicPlaying]);

  const handleAudioToggle = () => {
    setIsMusicPlaying(!isMusicPlaying);
  };

  return (
    <div className="">
      <div className="music flex items-center md:gap-5 gap-2 text-[#2F7377] md:bottom-6 bottom-3 left-5 md:absolute fixed">
        <button onClick={handleAudioToggle}>
          <FontAwesomeIcon icon={isMusicPlaying ? faVolumeHigh : faVolumeMute} className="md:text-3xl text-xl" />
        </button>
        <div className="text">
          <h1 className="music-title font-bold md:text-base text-sm">Manuk Dadali</h1>
          <p className="music-artist text-[10px] md:text-xs">Lagu Tradisional Jawa Barat</p>
        </div>
      </div>
    </div>
  );
}

export default MusikHome;
