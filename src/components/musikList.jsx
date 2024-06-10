import { useState, useEffect } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faVolumeHigh, faVolumeMute } from "@fortawesome/free-solid-svg-icons";
import manukDadali from "../assets/audio/manukdadali.m4a"; 
import ayamdehlapeh from "../assets/audio/ayamdehlapeh.m4a";
import sajojo from "../assets/audio/sajojo.m4a";
import Yamko from "../assets/audio/Yamko.m4a";
import Gemufamire from "../assets/audio/Gemufamire.m4a";
import Mejangeran from "../assets/audio/Mejangeran.m4a";
import Cupakgerantang from "../assets/audio/Cupakgerantang.m4a";
import Sipatokaan from "../assets/audio/Sipatokaan.m4a";
import Cikcikperiuk from "../assets/audio/Cikcikperiuk.m4a";

import { useLocation } from "react-router-dom";

const musicList = [
  { title: "Manuk Dadali", artist: "Lagu Jawa Barat", audioSrc: manukDadali, region: "jawa" },
  { title: "Ayam Deh Lapeh", artist: "Lagu Sumatera Barat", audioSrc: ayamdehlapeh, region: "sumatera" },
  { title: "Sajojo", artist: "Lagu Papua", audioSrc: sajojo, region: "papua" },
  { title: "Yamko Rambe Yamko", artist: "Lagu Papua", audioSrc: Yamko, region: "papua" },
  { title: "Gemu Famire", artist: "Lagu Nusa Tenggara Timur", audioSrc: Gemufamire, region: "NusaTenggaraTimur" },
  { title: "Mejangeran", artist: "Lagu Bali", audioSrc: Mejangeran, region: "bali" },
  { title: "Cupak Gerantang", artist: "Lagu Nusa Tenggara Barat", audioSrc: Cupakgerantang, region: "NusaTenggaraBarat" },
  { title: "Sipatokaan", artist: "Lagu Sulawesi Utara", audioSrc: Sipatokaan, region: "sulawesi" },
  { title: "Cik Cik Periuk", artist: "Lagu Kalimantan Timur", audioSrc: Cikcikperiuk, region: "kalimantan" }

];

function MusikList() {
  const location = useLocation();
  const queryParams = new URLSearchParams(location.search);
  const pulau = queryParams.get("pulau");

  const filteredMusicList = musicList.filter(music => music.region === pulau);
  const initialMusicIndex = Math.floor(Math.random() * filteredMusicList.length);

  const [isMusicPlaying, setIsMusicPlaying] = useState(true);
  const [currentMusicIndex, setCurrentMusicIndex] = useState(initialMusicIndex);
  const [audio, setAudio] = useState(() => new Audio(filteredMusicList[initialMusicIndex].audioSrc));

  useEffect(() => {
    const handleEnded = () => {
      const nextIndex = Math.floor(Math.random() * filteredMusicList.length);
      setCurrentMusicIndex(nextIndex);
      setAudio(new Audio(filteredMusicList[nextIndex].audioSrc));
    };

    audio.addEventListener("ended", handleEnded);

    if (isMusicPlaying) {
      audio.play();
    }

    return () => {
      audio.pause();
      audio.removeEventListener("ended", handleEnded);
    };
  }, [audio, isMusicPlaying]);

  useEffect(() => {
    if (isMusicPlaying) {
      audio.play();
    } else {
      audio.pause();
    }
  }, [audio, isMusicPlaying]);

  const handleAudioToggle = () => {
    setIsMusicPlaying(!isMusicPlaying);
  };

  return (
    <div className="">
      <div className="music flex items-center md:gap-5 gap-2 text-[#2F7377]">
        <button onClick={handleAudioToggle}>
          <FontAwesomeIcon icon={isMusicPlaying ? faVolumeHigh : faVolumeMute} className="md:text-3xl text-xl" />
        </button>
        <div className="text">
          <h1 className="music-title font-bold md:text-lg text-sm">
            {filteredMusicList[currentMusicIndex].title}
          </h1>
          <p className="music-artist text-[10px] md:text-xs">
            {filteredMusicList[currentMusicIndex].artist}
          </p>
        </div>
      </div>
    </div>
  );
}

export default MusikList;