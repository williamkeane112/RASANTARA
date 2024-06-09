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
import Cikcikperiuk from "../assets/audio/Cikcikperiuk.m4a";

const musicList = [
  { title: "Manuk Dadali", artist: "Lagu Tradisional Jawa Barat", audioSrc: manukDadali },
  { title: "Ayam Deh Lapeh", artist: "Lagu Tradisional Sumatra", audioSrc: ayamdehlapeh },
  { title: "Sajojo", artist: "Lagu Papua", audioSrc: sajojo },
  { title: "Yamko Rambe Yamko", artist: "Lagu Papua", audioSrc: Yamko },
  { title: "Gemu famire", artist: "Lagu Nusa Tenggara Timur", audioSrc: Gemufamire },
  { title: "Mejangeran", artist: "Lagu Bali", audioSrc: Mejangeran },
  { title: "Cupak Gerantang", artist: "Lagu Nusa Tenggara Barat", audioSrc: Cupakgerantang },
  { title: "Cik Cik Periuk", artist: "Lagu Kalimantan Timur", audioSrc: Cikcikperiuk }
];

function MusikHome() {
  const initialMusicIndex = Math.floor(Math.random() * musicList.length);
  const [isMusicPlaying, setIsMusicPlaying] = useState(true);
  const [currentMusicIndex, setCurrentMusicIndex] = useState(initialMusicIndex);
  const [audio, setAudio] = useState(() => new Audio(musicList[initialMusicIndex].audioSrc));

  useEffect(() => {
    const handleEnded = () => {
      const nextIndex = Math.floor(Math.random() * musicList.length);
      setCurrentMusicIndex(nextIndex);
      setAudio(new Audio(musicList[nextIndex].audioSrc));
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
      <div className="music flex items-center md:gap-5 gap-2 text-[#2F7377] md:bottom-6 bottom-3 left-5 md:absolute fixed">
        <button onClick={handleAudioToggle}>
          <FontAwesomeIcon icon={isMusicPlaying ? faVolumeHigh : faVolumeMute} className="md:text-3xl text-xl" />
        </button>
        <div className="text">
          <h1 className="music-title font-bold md:text-lg text-sm">
            {musicList[currentMusicIndex].title}
          </h1>
          <p className="music-artist text-[10px] md:text-xs">
            {musicList[currentMusicIndex].artist}
          </p>
        </div>
      </div>
    </div>
  );
}

export default MusikHome;
