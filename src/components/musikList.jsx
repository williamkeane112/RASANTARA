import { useState, useEffect } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faVolumeHigh, faVolumeMute } from "@fortawesome/free-solid-svg-icons";
import manukDadali from "../assets/audio/manukdadali.m4a"; 
import ayamdehlapeh from "../assets/audio/ayamdehlapeh.m4a";
import sajojo from "../assets/audio/sajojo.m4a";
import Yamko from "../assets/audio/Yamko.m4a";
import { useLocation } from "react-router-dom";

const musicList = [
  { title: "Manuk Dadali", artist: "Lagu Tradisional Jawa Barat", audioSrc: manukDadali, region: "jawa" },
  { title: "Ayam Deh Lapeh", artist: "Lagu Tradisional Sumatra", audioSrc: ayamdehlapeh, region: "sumatera" },
  { title: "Sajojo", artist: "Lagu Papua", audioSrc: sajojo, region: "papua" },
  { title: "Yamko Rambe Yamko", artist: "Lagu Papua", audioSrc: Yamko, region: "papua" },
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
  }, [audio, isMusicPlaying, filteredMusicList]);

  useEffect(() => {
    if (isMusicPlaying) {
      audio.play();
    } else {
      audio.pause();
    }
  }, [audio, isMusicPlaying]);

  useEffect(() => {
    const newAudio = new Audio(filteredMusicList[currentMusicIndex]?.audioSrc);
    setAudio(newAudio);
  }, [filteredMusicList, currentMusicIndex]);

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
            {filteredMusicList[currentMusicIndex]?.title}
          </h1>
          <p className="music-artist text-[10px] md:text-xs">
            {filteredMusicList[currentMusicIndex]?.artist}
          </p>
        </div>
      </div>
    </div>
  );
}

export default MusikList;
