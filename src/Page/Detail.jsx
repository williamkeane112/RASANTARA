// Icon
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faArrowLeft, faBookOpen, faBookmark, faClipboardList, faShare } from "@fortawesome/free-solid-svg-icons";
import { Link, useParams } from "react-router-dom";

// Component
import Sidebar from "../components/SidebarDetail";
import { useState, useEffect } from "react";
import axios from "axios";

function Detail() {
  // show data
  const { id } = useParams();
  const [data, setData] = useState({});
  const [detail, setDetails] = useState([]);

  useEffect(() => {
    const fetchUser = async () => {
      try {
        const result = await axios.get(`http://127.0.0.1:8000/api/makanan/${id}`);
        setData(result.data);
        setDetails({
          ...result.data.detail,
          bahanBahan: JSON.parse(result.data.detail.bahanBahan),
          langkahLangkah: JSON.parse(result.data.detail.langkahLangkah),
        });
      } catch (error) {
        console.log(error);
      }
    };

    fetchUser();
  }, [id]);

  // get id user
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
  // status bookmark
  const [bookmarks, setBookmark] = useState();
  useEffect(() => {
    const fetchBookmarks = async () => {
      if (!user_id) return;
      try {
        const result = await axios.get(`http://localhost:8000/api/getbookmarks/${user_id}`);
        setBookmark(result.data);
      } catch (err) {
        console.error("Failed to fetch bookmarks", err);
      }
    };

    fetchBookmarks();
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
      window.location.reload();
    } catch (error) {
      console.log(error);
    }
  };
  // delete
  const deleteBookmark = async (bookmarkId) => {
    try {
      const response = await axios.delete(`http://localhost:8000/api/bookmark/${bookmarkId}`);
      console.log(response.data);
      window.location.reload();
      const updatedBookmarks = Bookmark.filter((item) => item.id !== bookmarkId);
      setBookmark(updatedBookmarks);
    } catch (error) {
      console.log(error);
    }
  };
  // end bookmark function
  return (
    <div className="grid grid-cols-12 overflow-auto bg-gray-100">
      {/* navbar */}
      <div className={`lg:relative fixed top-0 right-0 w-full duration-300 z[999] lg:col-span-1 col-span-12`}>
        <Sidebar />
      </div>
      {/* End Navbar */}
      {/* main content */}
      <div className="lg:col-span-8 col-span-12 lg:-ml-3 lg:mt-0 mt-12">
        <div className="mt-10 lg:mx-10 mx-10">
          {/* vidio */}
          <div className="w-full bg-gray-100 shadow-[4px_5px_9px_0.9px_rgba(0,0,0,0.4)] rounded-xl lg:h-80 h-[30vh]">
            <iframe
              className="p-2 lg:h-full h-[29vh] w-full rounded-2xl"
              width="560"
              height="315"
              src={`https://www.youtube.com/embed/`}
              title="YouTube video player"
              frameBorder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerPolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
            {/* End vidio */}
          </div>
          {/* makanan titel */}
          <div className="mt-7 lg:text-xl text-base font-bold font-sans tracking-wide">
            {data.makanan} | {data.daerah}
          </div>
          {/* End makanan titel */}
          {/* Hide bookmark */}

          <button
            className="py-2 w-full bg-[#2F7377] mt-4 rounded-lg lg:hidden block"
            onClick={(e) => {
              e.stopPropagation();
              e.preventDefault();
              const bookmarkItem = bookmarks && bookmarks.find((bookmarkItem) => bookmarkItem.makanan_id === detail.makanan_id);
              if (bookmarkItem) {
                // Bookmark exists, delete it
                const bookmarkId = bookmarkItem.id;
                deleteBookmark(bookmarkId);
              } else {
                // Bookmark does not exist, add it
                setMakananId(detail.makanan_id);
                Bookmark(detail.makanan_id);
              }
            }}
          >
            <div className="flex items-center justify-between mx-5">
              <svg className="text-white text-xl" stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path fillRule="evenodd" d="M8 12l5 3V3a2 2 0 00-2-2H5a2 2 0 00-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 00-1-1H5a1 1 0 00-1 1v10.234z" clipRule="evenodd"></path>
              </svg>
              <div>
                {bookmarks && bookmarks.find((bookmarkItem) => bookmarkItem.makanan_id === detail.makanan_id) ? (
                  <span className="text-lg font-semibold text-white mr-[75px]">Tersimpan</span>
                ) : (
                  <span className="text-lg font-semibold text-white mr-[75px]">Simpan Resep</span>
                )}
              </div>
            </div>
          </button>

          {/* End Hide bookmark */}
          {/* Latar Belakang */}
          <div className="bg-gray-100 w-full mt-7 rounded-lg shadow-[4px_5px_11px_0.9px_rgba(0,0,0,0.4)] mb-10">
            <div className="flex justify-between p-4">
              <span className="font-bold text-[#2F7377]">Latar Belakang :</span>
              <div>
                <FontAwesomeIcon icon={faBookOpen} className="text-[#2F7377]" />
              </div>
            </div>
            <div className="w-[95%]">
              <p className="pb-4 hyphens-auto text-justify mx-4 break-all">{detail.latarBelakang}</p>
            </div>
          </div>
          {/* EndLatar Belakang */}
          {/*  Bahan Bahan  */}
          <div className="bg-gray-100 w-full mt-7 rounded-lg shadow-[4px_5px_11px_0.9px_rgba(0,0,0,0.4)] mb-10">
            <div className="flex justify-between p-4">
              <span className="font-bold text-[#2F7377]"> Bahan Bahan :</span>
              <div>
                <FontAwesomeIcon icon={faClipboardList} className="text-[#2F7377] text-lg" />
              </div>
            </div>
            <div className="w-[95%]">
              <ul className="space-y-0 list-disc">
                {detail?.bahanBahan?.map((bahan, item) => (
                  <li className="pb-4 mx-8" key={item}>
                    {bahan}
                  </li>
                ))}
              </ul>
            </div>
          </div>
          {/* End Bahan Bahan  */}
          {/*  Langkah Langkah  */}
          <div className="bg-gray-100 w-full mt-7 rounded-lg shadow-[4px_5px_11px_0.9px_rgba(0,0,0,0.4)] mb-10">
            <div className="flex justify-between p-4">
              <span className="font-bold text-[#2F7377]"> Langkah-Langkah :</span>
            </div>
            <div className="w-[95%]">
              <ol className="list-decimal space-y-0">
                {detail?.langkahLangkah?.map((langkah, index) => (
                  <li className="pb-4 mx-8" key={index}>
                    {langkah}
                  </li>
                ))}
              </ol>
            </div>
          </div>
          {/* End Langkah Langkah  */}
          {/* Hide Share */}
          <button className="py-2 w-full border border-black mt-4 rounded-lg lg:hidden block mb-3">
            <div className="flex items-center justify-between mx-5">
              <FontAwesomeIcon icon={faShare} className=" text-2xl" />
              <div>
                <span className="text-lg font-semibold mr-[95px]">Bagikan</span>
              </div>
            </div>
          </button>
          {/* End Hide Share */}
        </div>
      </div>
      <div className="col-span-3 w-full lg:block hidden">
        <div className="mx-7 mt-10 bg-gray-100 rounded-lg py-5 shadow-[4px_5px_11px_0.9px_rgba(0,0,0,0.4)]">
          <div className="mx-5">
            <Link to={-1} className="py-2 w-full bg-[#2F7377] flex items-center rounded-md">
              <FontAwesomeIcon icon={faArrowLeft} className="ml-4 text-white text-2xl" />
              <span className="ml-12 text-white font-semibold">Kembali</span>
            </Link>
            {bookmarks && bookmarks.find((bookmarkItem) => bookmarkItem.makanan_id === detail.makanan_id) ? (
              <button
                className="py-2 my-3 w-full border border-black flex items-center rounded-md"
                onClick={(e) => {
                  e.stopPropagation();
                  e.preventDefault();
                  const bookmarkId = bookmarks.find((bookmarkItem) => bookmarkItem.makanan_id === detail.makanan_id).id;
                  deleteBookmark(bookmarkId);
                }}
              >
                <FontAwesomeIcon icon={faBookmark} className="text-[#2F7377] ml-3 text-2xl" />
                <span className="ml-10 font-semibold">Tersimpan</span>
              </button>
            ) : (
              <button
                className="py-2 my-3 w-full border border-black flex items-center rounded-md"
                onClick={(e) => {
                  e.stopPropagation();
                  e.preventDefault();
                  setMakananId(detail.makanan_id);
                  Bookmark(detail.makanan_id);
                }}
              >
                <svg className="size-6 ml-3" stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path fillRule="evenodd" d="M8 12l5 3V3a2 2 0 00-2-2H5a2 2 0 00-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 00-1-1H5a1 1 0 00-1 1v10.234z" clipRule="evenodd"></path>
                </svg>
                <span className="ml-5 font-semibold">Simpan Resep</span>
              </button>
            )}
            <button className="py-2 w-full border border-black flex items-center rounded-md">
              <FontAwesomeIcon icon={faShare} className="ml-4  text-2xl" />
              <span className="ml-10  font-semibold">Bagikan</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Detail;
