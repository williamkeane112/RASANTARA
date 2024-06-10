import{ useState, useEffect } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faCircleInfo } from "@fortawesome/free-solid-svg-icons";

function UniqueFacts() {
  const [uniqueFacts] = useState([
    "Taukah kamu disetiap makanan daerah pasti memiliki latar belakang cerita yang unik",
    "Pecel Lele, hidangan populer di Indonesia yang terbuat dari ikan lele goreng yang sering disebut sebagai 'lele yang bikin ketagihan'.",
    "Nasi Goreng diakui sebagai Warisan Budaya Tak Benda Indonesia oleh UNESCO pada 2013.",
    "Indonesia memiliki lebih dari 17.000 pulau, dan merupakan negara kepulauan terbesar di dunia.",
    "Indonesia memiliki 1340 suku bangsa dan 652 bahasa daerah.",
    "Konon, nasi goreng diciptakan saat ada sisa-sisa makanan dari hari sebelumnya, jadi seseorang hanya menggorengnya dengan bumbu-bumbu dan terciptalah nasi goreng!",
    "Sate awalnya diciptakan oleh seseorang yang sangat malas memasak, sehingga dia hanya menusukkan daging pada tusuk sate dan memanggangnya!"

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
          <h1 className="md:text-base">Fakta Unik :</h1>
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
