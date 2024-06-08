import { Link, useLocation, useNavigate } from "react-router-dom";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBookmark, faSearch } from "@fortawesome/free-solid-svg-icons";
import { useEffect, useState } from "react";
import axios from "axios";

const ListComp = () => {
  const [Data, setData] = useState([]);
  const location = useLocation();
  const redirect = useNavigate();
  const [user_id, setUserId] = useState();

  // get id user
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
  // status bookmark
  const [bookmark, setBookmark] = useState();
  useEffect(() => {
    const fetchData = async () => {
      if (!user_id) return;

      try {
        const result = await axios.get(`http://127.0.0.1:8000/api/bookmark/${user_id}`);
        setBookmark(result.data);
      } catch (err) {
        console.log("ERROR", err);
      }
    };

    fetchData();
  }, [user_id]);
  // bookmark function
  const [makanan_id, setMakananId] = useState("");
  const Bookmark = async (makanan_id) => {
    try {
      const response = await axios.post("http://localhost:8000/api/bookmark", {
        user_id,
        makanan_id,
      });
      console.log(response.data);
    } catch (error) {
      console.log(error);
    }
  };
  // delete
  const deleteBookmark = async (bookmarkId) => {
    try {
      const response = await axios.delete(`http://localhost:8000/api/bookmark/${bookmarkId}`);
      console.log(response.data);
      // Refresh the bookmark list
      const updatedBookmarks = bookmark.filter((item) => item.id !== bookmarkId);
      setBookmark(updatedBookmarks);
    } catch (error) {
      console.log(error);
    }
  };
  // end bookmark function

  // show function
  useEffect(() => {
    fetchData();
  }, [location.pathname]);

  const queryParams = new URLSearchParams(location.search);
  const query = queryParams.get("pulau") || "";
  const fetchData = async () => {
    try {
      const result = await axios(`http://127.0.0.1:8000/api/makanan?query=${query}`);
      setData(result.data);
    } catch (err) {
      console.log("ERROR");
    }
  };
  // end function

  return (
    <>
      <div className="my-4 lg:mx-1 ml-8 mx-5 ">
        <div className="flex items-center relative">
          <FontAwesomeIcon icon={faSearch} alt="Search icon" className="absolute w-4 mx-2" />
          <input type="text" placeholder={`Cari resep makan di daerah pulau ${query}`} className="w-full lg:text-md font-semibold text-sm pl-8 py-[5px] rounded-md shadow-[3px_6px_8px_0.1px_rgba(0,0,0,0.3)]" />
        </div>
      </div>
      {Data.map((item) => (
        <Link to={`/detail/${item.id}`} key={item.id} className="">
          <div className="mb-4 lg:mx-1 ml-8 mx-5">
            <div className="w-full mb-6 shadow-[0_5px_4px_0.9px_rgba(0,0,0,0.2)] rounded-lg grid lg:grid-cols-2 grid-cols-1 gap-2">
              <div className="lg:w-28 flex justify-center">
                <img src={"http://127.0.0.1:8000/" + item.img} alt="" className="rounded-lg w-full" />
              </div>
              <div className="lg:-ml-[133px] mt-[10px] lg:mx-6 mx-3 px-2 pb-5">
                <div className="flex justify-between items-center">
                  <div>
                    <h3 className="font-bold text-xl leading-[14px]">{item.makanan}</h3>
                    <span className="font-bold text-[11px]">{item.daerah}</span>
                  </div>
                  {bookmark && bookmark.find((bookmarkItem) => bookmarkItem.makanan_id === item.id) ? (
                    <button
                      type="button"
                      className="z-[999] cursor-default"
                      onClick={(e) => {
                        e.stopPropagation();
                        e.preventDefault();
                        const bookmarkId = bookmark.find((bookmarkItem) => bookmarkItem.makanan_id === item.id).id;
                        deleteBookmark(bookmarkId);
                      }}
                    >
                      <FontAwesomeIcon icon={faBookmark} className="w-4" />
                    </button>
                  ) : (
                    <button
                      type="button"
                      className="z-[999] cursor-default"
                      onClick={(e) => {
                        e.stopPropagation();
                        e.preventDefault();
                        setMakananId(item.id);
                        Bookmark(item.id);
                      }}
                    >
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" className="w-4">
                        <path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z" />
                      </svg>
                    </button>
                  )}
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
