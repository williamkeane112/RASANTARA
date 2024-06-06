import { useState, useEffect } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faCircleInfo } from "@fortawesome/free-solid-svg-icons";

function UniqueFacts() {
  const [uniqueFacts] = useState([
    "Did you know that each regional dish has a unique background story?",
    "Pecel Lele, a popular dish in Indonesia made from fried catfish, is often referred to as 'the addictive catfish'.",
  ]);

  const [currentFactIndex, setCurrentFactIndex] = useState(0);

  useEffect(() => {
    const intervalId = setInterval(() => {
      setCurrentFactIndex((prevIndex) =>
        prevIndex === uniqueFacts.length - 1 ? 0 : prevIndex + 1
      );
    }, 5000);

    return () => clearInterval(intervalId);
  }, [uniqueFacts.length]);

  return (
    <div className="">
      <div className="information md:w-[26rem] w-[16rem] md:text-center text-justify md:absolute md:bottom-[9rem] fixed bottom-16 left-16 md:left-auto md:right-[26rem]">
        <div className="title text-[#3D8E93] font-bold flex items-center gap-2 justify-center text-center">
          <FontAwesomeIcon icon={faCircleInfo} className="text-xl" />
          <h1 className="md:text-base">Unique Fact:</h1>
        </div>
        <div className="text md:text-[12px] text-[11px] text-[#4EA9AE]">
          <p className="mb-2 text-[#206468]">{uniqueFacts[currentFactIndex]}</p>
          <p className="text-center">{`${currentFactIndex + 1}/${uniqueFacts.length}`}</p>
        </div>
      </div>
    </div>
  );
}

export default UniqueFacts;
