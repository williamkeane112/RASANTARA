import { useState, useEffect } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faCircleInfo } from "@fortawesome/free-solid-svg-icons";

function UniqueFacts() {
  const [uniqueFacts] = useState([
    "Did you know that every regional food has a unique background story?",
    "Pecel Lele, a popular dish in Indonesia made from fried catfish which is often referred to as 'addictive catfish'.",
    "Nasi Goreng was recognized as Indonesia's Intangible Cultural Heritage by UNESCO in 2013.",
    "Indonesia has more than 17,000 islands, and is the largest archipelagic country in the world.",
    "Indonesia has 1340 ethnic groups and 652 regional languages.",
    "It is said that fried rice was created when there were leftovers from the previous day, so someone just fried it with spices and fried rice was created!",
    "Sate was originally invented by someone who was so lazy about cooking, that he just threaded meat on skewers and grilled it!"
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
