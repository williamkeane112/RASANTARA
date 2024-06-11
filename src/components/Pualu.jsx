// PulauInfo.js
import sumatera2Img from "../assets/img/SumateraImg2.png";
import JawaImg2 from "../assets/img/JawaImg2.png";
import ntbImg from "../assets/img/ntbImg2.png";
import nttImg from "../assets/img/nttImg2.png";
import KalimantanImg2 from "../assets/img/KalimantanImg2.png";
import PapuaImg2 from "../assets/img/PapuaImg2.png";
import SulawesiImg2 from "../assets/img/SulawesiImg2.png";
import BaliImg2 from "../assets/img/BaliImg2.png";

const Pulau = ({ pulau }) => {
  let [imageToShow, pulauName, textColor, textSize, style] = [null, "", "", "", ""];

  switch (pulau) {
    case "sumatera":
      imageToShow = sumatera2Img;
      pulauName = "SUMATERA";
      textColor = "text-[#2F7377]";
      textSize = "text-4xl";
      style = "lg:w-[80vh] lg:mt-0 -mt-20";
      break;
    case "jawa":
      imageToShow = JawaImg2;
      pulauName = "JAWA";
      textColor = "text-[#4A7A24]";
      textSize = "text-4xl";
      style = "lg:w-[100vh]";
      break;
    case "NusaTenggaraTimur":
      imageToShow = nttImg;
      pulauName = "NUSA TENGGARA TIMUR";
      textColor = "text-[#093F59]";
      textSize = "text-2xl";
      style = "lg:w-[100vh]";
      break;
    case "NusaTenggaraBarat":
      imageToShow = ntbImg;
      pulauName = "NUSA TENGGARA BARAT";
      textColor = "text-[#093F59]";
      textSize = "text-2xl";
      style = "lg:w-[100vh]";
      break;
    case "kalimantan":
      imageToShow = KalimantanImg2;
      pulauName = "KALIMANTAN";
      textColor = "text-[#8A8906]";
      textSize = "text-4xl";
      style = "lg:w-[100vh]";
      break;
    case "papua":
      imageToShow = PapuaImg2;
      pulauName = "PAPUA";
      textColor = "text-[#8A7909]";
      textSize = "text-4xl";
      style = "lg:w-[100vh]";
      break;
    case "sulawesi":
      imageToShow = SulawesiImg2;
      pulauName = "SULAWESI";
      textColor = "text-[#7D3700]";
      textSize = "text-4xl";
      style = "lg:w-[100vh]";
      break;
    case "bali":
      imageToShow = BaliImg2;
      pulauName = "BALI";
      textColor = "text-[#9B7E06]";
      textSize = "text-4xl";
      style = "lg:w-[100vh]";
      break;
    default:
      imageToShow = null;
      pulauName = "";
      textColor = "";
      textSize = "";
      style = "";
      break;
  }

  return {
    imageToShow,
    pulauName,
    textColor,
    textSize,
    style
  };
};

export default Pulau;
