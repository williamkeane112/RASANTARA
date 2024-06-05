import { Link, useLocation } from "react-router-dom";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBookmark } from "@fortawesome/free-solid-svg-icons";
import { useEffect, useState } from "react";
import axios from "axios";

const ListComp = () => {
  const [userData, setUserData] = useState([]);
  const location = useLocation();

  useEffect(() => {
    fetchData();
  }, [location.pathname]);

  const fetchData = async () => {
    const query = location.pathname.replace("/", "");
    try {
      const result = await axios(`http://127.0.0.1:8000/api/makanan?query=${query}`);
      setUserData(result.data);
    } catch (err) {
      console.log("ERROR");
    }
  };
  return (
    <>
      {userData.map((item) => (
        <Link to={`/detail`} key={item.id} className="">
          <div className="mb-4 lg:mx-1 ml-8 mx-5">
            <div className="w-full mb-6 border border-black rounded-lg grid lg:grid-cols-2 grid-cols-1 gap-2">
              <div className="lg:w-28 flex justify-center">
                <img src={"http://127.0.0.1:8000/"+item.img} alt="" className="rounded-lg w-full" />
              </div>
              <div className="lg:-ml-[133px] mt-[10px] lg:mx-6 mx-3 px-2 pb-5">
                <div className="flex justify-between items-center">
                  <div>
                    <h3 className="font-bold text-xl leading-[14px]">{item.makanan}</h3>
                    <span className="font-bold text-[11px]">{item.daerah}</span>
                  </div>
                  <FontAwesomeIcon icon={faBookmark} alt="" className="w-4 -mt-4" />
                </div>
                <p className="text-[11px] mt-1">{item.deskripsi}</p>
              </div>
            </div>
          </div>
        </Link>
      ))}
    </>
  );
};

export default ListComp;
