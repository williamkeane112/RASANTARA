import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBookmark, faSearch } from "@fortawesome/free-solid-svg-icons";
import { useEffect, useState } from "react";
import axios from "axios";
import Sidebar from "../components/SidebarDetail";
import { faBars } from "@fortawesome/free-solid-svg-icons";
import FormSearch from "../components/FormSearch";

function BookMark() {
  // search data id func
  const [user_id, setUserId] = useState();

  const [sidebar, toggleSidebar] = useState(false);
  const [isMobile, setIsMobile] = useState(window.innerWidth < 640);

  const click = () => {
    toggleSidebar(!sidebar);
  };

  useEffect(() => {
    const handleResize = () => {
      setIsMobile(window.innerWidth < 640);
      if (window.innerWidth >= 640) {
        toggleSidebar(false);
      }
    };

    window.addEventListener("resize", handleResize);
    return () => {
      window.removeEventListener("resize", handleResize);
    };
  }, []);

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
  const [isSearch, setIsSearch] = useState("");
  const [currentPage, setCurrentPage] = useState(1);
  const [totalPages, setTotalPages] = useState(1);
  const itemsPerPage = 5;
  useEffect(() => {
    const fetchData = async () => {
      if (!user_id) return;
      try {
        const query = isSearch ? `?query=${isSearch}` : `?page=${currentPage}`;
        const result = await axios.get(`http://127.0.0.1:8000/api/bookmark/${user_id}${query}`);
        const totalItems = result.data.total;
        setData(result.data.data);
        setTotalPages(Math.ceil(totalItems / itemsPerPage));
      } catch (err) {
        console.log("ERROR", err);
      }
    };
    console.log(totalPages);
    console.log(data);

    fetchData();
  }, [user_id, currentPage, isSearch]);

  const handlePageChange = (page) => {
    if (page > 0 && page <= totalPages) {
      setCurrentPage(page);
    }
  };

  const handleSearchSubmit = (searchTerm) => {
    setIsSearch(searchTerm);
    setCurrentPage(1);
  };
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
  };
  return (
    <>
      <div className="h-screen grid grid-cols-12 bg-gray-100 overflow-auto">
        <div className="lg:col-span-1 col-span-12">
          <Sidebar />
        </div>
        {/* section 2 */}
        <div className="md:col-span-8 lg:-ml-6 col-span-12  p-4 px-8">
          <h1 className="text-4xl font-bold">Tersimpan</h1>
          <div className="mt-3 border border-t-2 border-black"></div>
          <div className="mt-6 ">
            <div className="my-4 lg:mx-1 md:ml-8 md:mx-5 ">
              <div className="flex items-center relative">
                <FontAwesomeIcon icon={faSearch} alt="Search icon" className="absolute w-4 mx-2" />
                <div className="w-full">
                  <FormSearch onSubmit={handleSearchSubmit} />
                </div>
              </div>
            </div>
          </div>
          <div className="">
            {data.map((datas, index) => (
              <div key={index} className="mb-4 mx-2">
                <div className="w-full mb-6 shadow-[0_5px_4px_0.9px_rgba(0,0,0,0.2)] rounded-lg grid lg:grid-cols-2 grid-cols-1 gap-2">
                  <div className="lg:w-36 w-[100px] md:w-[115px] flex justify-center">
                    <img src={`http://127.0.0.1:8000/${datas.makanan.img}`} alt="" className="rounded-lg w-full" />
                  </div>
                  <div className="lg:-ml-[230px] mt-[10px] lg:mx-4 mx-3 px-2 pb-5">
                    <div className="flex justify-between items-center">
                      <div>
                        <h3 className="font-bold lg:text-xl leading-[14px]">{datas.makanan.makanan}</h3>
                        <span className="font-bold text-[8px] lg:text-[13px]">{datas.makanan.daerah}</span>
                      </div>
                      <button onClick={() => deleteBookmark(datas.id)}>
                        <FontAwesomeIcon icon={faBookmark} className="text-[#2F7377] text-xl" />
                      </button>
                    </div>
                    <div className="w-full truncate">
                      <p className="lg:text-[13px] md:line-clamp-3 line-clamp-2 text-[8px] md:text-[15px] mt-1">{datas.makanan.deskripsi}</p>
                    </div>
                  </div>
                </div>
              </div>
            ))}
          </div>

          {/* Pagination */}
          <div className="mx-auto mt-8 h-14 w-10/12 md:w-4/6 grid grid-cols-8">
            <div className="col-span-2 p-1 px-4">
              <button className="bg-[#2F7377] h-full w-full rounded-md flex justify-center items-center" onClick={() => handlePageChange(currentPage - 1)} disabled={currentPage === 1}>
                <svg className="text-white size-8" stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path fillRule="evenodd" d="M5.854 4.646a.5.5 0 010 .708L3.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clipRule="evenodd"></path>
                  <path fillRule="evenodd" d="M2.5 8a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H3a.5.5 0 01-.5-.5z" clipRule="evenodd"></path>
                </svg>
              </button>
            </div>
            <div className="col-span-4 flex justify-between items-center mx-4">
              {[...Array(totalPages).keys()].map((_, index) => (
                <button key={index} className={`text-[#2F7377] ${currentPage === index + 1 ? "font-bold" : ""}`} onClick={() => handlePageChange(index + 1)}>
                  {index + 1}
                </button>
              ))}
            </div>
            <div className="col-span-2 p-1 px-4">
              <button className="bg-[#2F7377] h-full w-full rounded-md flex justify-center items-center" onClick={() => handlePageChange(currentPage + 1)} disabled={currentPage === totalPages}>
                <svg className="text-white size-8" stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path fillRule="evenodd" d="M10.146 4.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L12.793 8l-2.647-2.646a.5.5 0 010-.708z" clipRule="evenodd"></path>
                  <path fillRule="evenodd" d="M2 8a.5.5 0 01.5-.5H13a.5.5 0 010 1H2.5A.5.5 0 012 8z" clipRule="evenodd"></path>
                </svg>
              </button>
            </div>
          </div>
          {/* End Pagination */}
        </div>
        {/* section 2 */}
        {/* Tombol Kembali */}
        <div className="hidden col-span-3 lg:-ml-6 md:flex justify-center ">
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
