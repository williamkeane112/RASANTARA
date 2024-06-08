import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Sidebar from "../components/Sidebar";
import { faBookmark, faSearch } from "@fortawesome/free-solid-svg-icons";
import { useEffect, useState } from "react";
import axios from "axios";

function BookMark() {
  // search data id func
  const [user_id, setUserId] = useState();

  useEffect(() => {
    const fetchUserId = async () => {
      try {
        const token = localStorage.getItem("token");
        const headers = {};
        if (token) {
          headers["Authorization"] = `Bearer ${token}`;
        }
        const response = await axios.post("http://localhost:8000/api/me", {}, { headers });
        setUserId(response.data.id);
      } catch (error) {
        console.error("Failed to fetch user ID", error);
      }
    };

    fetchUserId();
  }, []);

  // bookmark list func
  const [data, setData] = useState([]);
  useEffect(() => {
    const fetchData = async () => {
      if (!user_id) return;

      try {
        const result = await axios.get(`http://127.0.0.1:8000/api/bookmark/${user_id}`);
        setData(result.data);
      } catch (err) {
        console.log("ERROR", err);
      }
    };

    fetchData();
  }, [user_id]);

  // hapus bookmark func
  const deleteBookmark = async (id) => {
    try {
      const response = await axios.delete(`http://localhost:8000/api/bookmark/${id}`, {
        id,
      });
      console.log(response.data);
    } catch (error) {
      console.log(error);
    }
  }
    return (
    <>
      <div className="h-screen w-full flex bg-gray-100 overflow-auto">
        <Sidebar />

        <div className="h-full w-8/12 p-4 px-8">
          <h1 className="text-4xl font-bold">Tersimpan</h1>

          <div className="mt-3 border border-t-2 border-black"></div>

          <div className="mt-6 ">
            <div className="my-4 lg:mx-1 ml-8 mx-5 ">
              <div className="flex items-center relative">
                <FontAwesomeIcon icon={faSearch} alt="Search icon" className="absolute w-4 mx-2" />
                <input
                  type="text"
                  placeholder={`Cari resep makan di daftar ${location.pathname.replace("/", "")} anda`}
                  className="w-full lg:text-md font-semibold text-sm pl-8 py-[5px] rounded-md shadow-[3px_6px_8px_0.1px_rgba(0,0,0,0.3)]"
                />
              </div>
            </div>
          </div>
          <div className="">
            {data.map((datas, index) => (
              <div key={index} className="mb-4 lg:mx-1 ml-8 mx-5">
                <div className="w-full mb-6 shadow-[0_5px_4px_0.9px_rgba(0,0,0,0.2)] rounded-lg grid lg:grid-cols-2 grid-cols-1 gap-2">
                  <div className="lg:w-44 flex justify-center">
                    <img src={`http://127.0.0.1:8000/${datas.makanan.img}`} alt="" className="rounded-lg w-full" />
                  </div>
                  <div className="lg:-ml-[180px] mt-[10px] lg:mx-6 mx-3 px-2 pb-5">
                    <div className="flex justify-between items-center">
                      <div>
                        <h3 className="font-bold text-xl leading-[14px]"></h3>
                        <h3 className="font-bold text-xl leading-[14px]">{datas.makanan.makanan}</h3>
                        <span className="font-bold text-[11px]">{datas.makanan.daerah}</span>
                      </div>
                      <button
                       onClick={() => deleteBookmark(datas.id)}
                      >
                        <FontAwesomeIcon icon={faBookmark} />
                      </button>
                    </div>
                    <p className="text-[11px] mt-1">{datas.makanan.deskripsi}</p>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>

        {/* pagination */}
        <div className=""></div>

        {/* Tombol Kembali */}
        <div className="h-full w-4/12 flex justify-center ">
          <div className="mt-20 h-20 w-10/12 bg-white shadow-xl rounded-md flex justify-center items-center">
            <div className="p-2 bg-[#2F7377] w-10/12 rounded-md flex items-center justify-between">
              <svg className="text-white size-6" stroke="CurrentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.707 17.293L8.414 13 18 13 18 11 8.414 11 12.707 6.707 11.293 5.293 4.586 12 11.293 18.707z"></path>
              </svg>
              <h1 className="text-white font-sans">Kembali</h1>
              <div></div>
            </div>
          </div>
        </div>
        {/* End Tombol Kembali */}
      </div>
    </>
  );
}

export default BookMark;
