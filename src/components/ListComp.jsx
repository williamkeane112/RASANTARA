import { Link, useLocation, useNavigate } from "react-router-dom";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBookmark } from "@fortawesome/free-solid-svg-icons";
import { useEffect, useState } from "react";
import axios from "axios";
import FormSearch from "../components/FormSearch";
import LoginModal from "../components/loginuser";

const ListComp = () => {
  const [Data, setData] = useState([]);
  const [user_id, setUserId] = useState();
  const location = useLocation();
  const redirect = useNavigate();

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
      // Refresh the bookmark list
      const updatedBookmarks = Bookmark.filter((item) => item.id !== bookmarkId);
      setBookmark(updatedBookmarks);
    } catch (error) {
      console.log(error);
    }
  };
  // end bookmark function

  // show function
  const queryParams = new URLSearchParams(location.search);
  const pulau = queryParams.get("pulau") || "";
  const lang = queryParams.get("lang") || "ind" || "en";
  const [isSearch, setIsSearch] = useState("");

  const fetchData = async () => {
    try {
      const query = isSearch ? `&query2=${isSearch}` : "";
      if (lang === "ind") {
        const result = await axios.get(`http://127.0.0.1:8000/api/makanan?query1=${pulau}${query}`);
        setData(result.data);
      } else if (lang === "en") {
        const result = await axios.get(`http://127.0.0.1:8000/api/makananEN?query1=${pulau}${query}`);
        setData(result.data);
      }
    } catch (err) {
      console.log("ERROR", err);
    }
  };

  useEffect(() => {
    fetchData();
  }, [pulau, isSearch]);

  const handelSubmitSearch = (searchTerm) => {
    setIsSearch(searchTerm);
  };
  // end function
  // modal login
  const [isLoginModalOpen, setIsLoginModalOpen] = useState(false);

  const handleLoginModalToggle = () => {
    if(user_id){
      console.log('jassgjks')

    }else{
    setIsLoginModalOpen(!isLoginModalOpen);

    }
  };
  // history
  const HistoryStore = async (makanan_id) => {
    if (user_id) {
      try {
        const response = await axios.post("http://localhost:8000/api/history", {
          user_id,
          makanan_id,
        });
        console.log(response.data);
        if(lang === "ind"){
          redirect(`/detail/${makanan_id}?lang=ind`);
        }else{
        redirect(`/detail/${makanan_id}?lang=en`);
        }
      } catch (error) {
        console.log(error);
      }
    } else {
      if(lang === "ind"){
        redirect(`/detail/${makanan_id}?lang=ind`);
      }else{
      redirect(`/detail/${makanan_id}?lang=en`);
      }
    }
  };

  return (
    <>
      {/* <div clakssName="my-4 lg:mx-1 lg:hidden  mx-3">
        <FormSearch />
      </div> */}
      <LoginModal
        isLoginModalOpen={isLoginModalOpen}
        setIsLoginModalOpen={setIsLoginModalOpen}
      />
      <div className="my-4 lg:mx-1 lg:ml-1 mx-3 lg:block ">
        <FormSearch onSubmit={handelSubmitSearch} />
      </div>
      {Data.map((item) => (
        <Link
          onClick={(e) => {
            e.preventDefault();
            setMakananId(item.id);
            HistoryStore(item.id);
          }}
          key={item.id}
        >
          <div className="mb-4 lg:mx-1 lg:ml-2 mx-4">
            <div className="w-full mb-6 shadow-[0_5px_4px_0.9px_rgba(0,0,0,0.2)] rounded-lg grid grid-cols-2 gap-2">
              <div className="lg:w-28 w-[100px] md:w-[115px] flex justify-center">
                <img src={"http://127.0.0.1:8000/" + item.img} alt="" className="rounded-lg lg:w-full h-[100px] object-cover" />
              </div>

              <div className="lg:-ml-[133px] -ml-14 md:-ml-60 mt-[10px] lg:mx-6 mx-2 px-2">
                <div className="flex justify-between items-center">
                  <div>
                    <h3 className="font-bold lg:text-xl text-sm leading-[14px]">{item.makanan}</h3>
                    <span className="font-bold lg:text-[11px] text-[9px]">{item.daerah}</span>
                  </div>
                  {bookmarks && bookmarks.find((bookmarkItem) => bookmarkItem.makanan_id === item.id) ? (
                    <button
                      type="button"
                      className="z-[999] cursor-default"
                      onClick={(e) => {
                        e.stopPropagation();
                        e.preventDefault();
                        const bookmarkId = bookmarks.find((bookmarkItem) => bookmarkItem.makanan_id === item.id).id;
                        deleteBookmark(bookmarkId);
                      }}
                    >
                      <FontAwesomeIcon icon={faBookmark} className="lg:w-4 text-2xl text-[#2F7377]" />
                    </button>
                  ) : (
                    <button
                      type="button"
                      className="z-[1] cursor-default"
                      onClick={(e) => {
                        e.stopPropagation();
                        e.preventDefault();
                        handleLoginModalToggle();
                        setMakananId(item.id);
                        Bookmark(item.id);
                      }}
                    >
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" className="lg:w-4 w-[17px] -z[99]">
                        <path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z" />
                      </svg>
                    </button>
                  )}
                </div>
                <div className="w-full">
                  <p className="lg:text-[11px] md:text-[15px] mt-1 text-[10px] lg:line-clamp-2 md:line-clamp-3 line-clamp-2">{item.deskripsi}</p>
                </div>
              </div>
            </div>
          </div>
        </Link>
      ))}
    </>
  );
};

export default ListComp;
