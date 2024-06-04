import { Link } from "react-router-dom";
import UnSave from "../assets/icon/UnSave.svg";
import Tekwan from "../assets/img/Tekwan.png";
import SatePadang from "../assets/Sumatera/SatePadang.jpg";
import Rendang from "../assets/Sumatera/Rendang.jpg";
import Pempek from "../assets/Sumatera/Pempek.jpg";
import IkanArsik from "../assets/Sumatera/IkanArsik.jpg";
import MieAceh from "../assets/Sumatera/MieAceh.jpg";
import GualiIkanPatih from "../assets/Sumatera/GulaiIkanPatih.jpeg";
const Data = [
  {
    id: 1,
    img: Tekwan,  // Example image path
    makanan: "Tekwan",
    Asal: "Palembang, Sumatera Selatan",
    text: "Tekwan adalah makanan khas orang Tionghua yang di modifikasi oleh masyarakat palembang agar sesuai dengan cita rasa lidah masyarakat setempat.",
  },
  {
    id: 2,
    img: SatePadang,
    makanan: "Sate Padang",
    Asal: "Padang, Sumatera Barat",
    text: "Sate Padang adalah sate dengan saus kental yang terbuat dari campuran berbagai rempah dan tepung beras.",
  },
  {
    id: 3,
    img: Rendang,
    makanan: "Rendang",
    Asal: "Padang, Sumatera Barat",
    text: "Rendang adalah hidangan daging yang dimasak dengan rempah-rempah dan santan hingga kuahnya mengering.",
  },
  {
    id: 4,
    img: Pempek,
    makanan: "Pempek",
    Asal: "Palembang, Sumatera Selatan",
    text: "Pempek adalah makanan khas Palembang yang terbuat dari ikan dan sagu, biasanya disajikan dengan saus cuka.",
  },
  {
    id: 5,
    img: IkanArsik,
    makanan: "Ikan Arsik",
    Asal: "Tapanuli, Sumatera Utara",
    text: "Ikan Arsik adalah masakan ikan khas Batak yang dimasak dengan bumbu kuning khas yang kaya rempah.",
  },
  {
    id: 6,
    img: MieAceh,
    makanan: "Gulai Ikan Patin",
    Asal: "Jambi, Sumatera",
    text: "Gulai Ikan Patin adalah masakan ikan dengan kuah gulai yang kaya rempah dan santan.",
  },
  {
    id: 7,
    img: GualiIkanPatih,
    makanan: "Mie Aceh",
    Asal: "Aceh, Sumatera",
    text: "Mie Aceh adalah hidangan mie pedas dengan campuran daging atau seafood.",
  },
];


const SumateraComp = () => {
  return (
    <>
      {Data.map((item, i) => (
        <Link to={`/detail`} key={item.id} className="">
          <div className="mb-4 lg:mx-1 ml-8 mx-5">
            <div className="w-full mb-6 border border-black rounded-lg grid lg:grid-cols-2 grid-cols-1 gap-2">
              <div className="lg:w-28 flex justify-center">
                <img src={item.img} alt="" className="rounded-lg w-full" />
              </div>
              <div className="lg:-ml-[133px] mt-[10px] lg:mx-6 mx-3 px-2 pb-5">
                <div className="flex justify-between items-center">
                  <div>
                    <h3 className="font-bold text-xl leading-[14px]">{item.makanan}</h3>
                    <span className="font-bold text-[11px]">{item.Asal}</span>
                  </div>
                  <img src={UnSave} alt="" className="w-4 -mt-4" />
                </div>
                <p className="text-[11px] mt-1">{item.text}</p>
              </div>
            </div>
          </div>
        </Link>
      ))}
    </>
  );
};

export default SumateraComp;
