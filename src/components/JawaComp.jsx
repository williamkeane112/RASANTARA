import { Link } from "react-router-dom";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBookmark } from "@fortawesome/free-solid-svg-icons";
import Gudeg from '../assets/Jawa/Gudeg.jpg';
import SotoAyam from '../assets/Jawa/SotoAyam.jpg';
import Rawon from '../assets/Jawa/Rawon.jpg';
import NasiLiwet from '../assets/Jawa/NasiLiwet.jpg';
import TahuTek from '../assets/Jawa/TahuTek.jpg';
import Pecel from '../assets/Jawa/Pecel.jpg';
import Serabi from '../assets/Jawa/Serabi.jpeg';
const Data = [
  {
    id: 1,
    img: Gudeg, // Example image path
    makanan: "Gudeg",
    Asal: "Yogyakarta",
    text: "Gudeg adalah makanan tradisional dari Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan.",
  },
  {
    id: 2,
    img: SotoAyam,
    makanan: "Soto Ayam",
    Asal: "Semarang, Jawa Tengah",
    text: "Soto Ayam adalah sup ayam khas Indonesia yang disajikan dengan nasi, tauge, dan telur rebus.",
  },
  {
    id: 3,
    img: Rawon,
    makanan: "Rawon",
    Asal: "Surabaya, Jawa Timur",
    text: "Rawon adalah sup daging sapi khas Jawa Timur yang berwarna hitam karena penggunaan kluwek.",
  },
  {
    id: 4,
    img: NasiLiwet,
    makanan: "Nasi Liwet",
    Asal: "Solo, Jawa Tengah",
    text: "Nasi Liwet adalah hidangan nasi gurih yang dimasak dengan santan dan disajikan dengan sayur labu siam dan suwiran ayam.",
  },
  {
    id: 5,
    img: TahuTek,
    makanan: "Tahu Tek",
    Asal: "Surabaya, Jawa Timur",
    text: "Tahu Tek adalah hidangan tahu goreng yang disajikan dengan lontong, kentang, dan saus petis.",
  },
  {
    id: 6,
    img: Pecel,
    makanan: "Pecel",
    Asal: "Madiun, Jawa Timur",
    text: "Pecel adalah hidangan sayuran yang disajikan dengan bumbu kacang khas Jawa Timur.",
  },
  {
    id: 7,
    img: Serabi,
    makanan: "Serabi",
    Asal: "Bandung, Jawa Barat",
    text: "Serabi adalah kue tradisional yang terbuat dari tepung beras dan santan, biasanya disajikan dengan kinca atau gula kelapa.",
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
                  <FontAwesomeIcon icon={faBookmark} alt="" className="w-4 -mt-4" />
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
