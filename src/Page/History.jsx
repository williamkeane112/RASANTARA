import Sidebar from "../components/SidebarDetail";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBars, faFilter } from "@fortawesome/free-solid-svg-icons";
import { useState, useEffect } from "react";
import axios from "axios";
import { Link } from "react-router-dom";

function History() {
  //   get user id
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
  // history func
  // show data func
  const [data, setData] = useState([]);
  const [currentPage, setCurrentPage] = useState(1);
  const [totalPages, setTotalPages] = useState(1);
  const [filter, setFilter] = useState("terbaru");
  const itemsPerPage = 5;
  const fetchHistory = async () => {
    if (!user_id) return;
    try {
      const result = await axios.get(`http://localhost:8000/api/history/${user_id}?page=${currentPage}&filter=${filter}`);
      const totalItem = result.data.total;
      setData(result.data.data);
      setTotalPages(Math.ceil(totalItem / itemsPerPage));
    } catch (err) {
      console.error(err);
    }
  };
  useEffect(() => {
    fetchHistory();
  }, [user_id, currentPage, filter]);

  const handlePageChange = (page) => {
    if (page > 0 && page <= totalPages) {
      setCurrentPage(page);
    }
  };
  const [isFilterOpen, setIsFilterOpen] = useState(false);

  const handleFilterChange = (newFilter) => {
    setFilter(newFilter);
    setCurrentPage(1);
    setIsFilterOpen(!isFilterOpen)
  };

  const FilterOpen = () => {
    setIsFilterOpen(!isFilterOpen);
    console.log("Filter status:", !isFilterOpen);
  };
  console.log(isFilterOpen);
  //   hapus semua data
  const delateHistory = async () => {
    try {
      const response = await axios.delete(`http://localhost:8000/api/history/${user_id}`);
      console.log(response.data);
    } catch (error) {
      console.log(error);
    }
  };
  // end func
  return (
    <div className="h-screen grid grid-cols-12 bg-gray-100 overflow-auto">
      <div className={`lg:relative fixed top-0 right-0 w-full duration-300 z[999] lg:col-span-1 col-span-12`}>
        <Sidebar />
      </div>
      {/* sctio 2 */}
      <div className="md:col-span-8 col-span-12 p-2 px-4 lg:-ml-6 mt-16 mx-6 md:p-4 md:px-8">
        <h1 className="text-4xl font-bold">History</h1>
        <div className="mt-3 border border-t-2 border-black"></div>
        <div className="mt-6 flex lg:justify-end justify-between items-center">
          <button className="lg:hidden border border-black" onClick={FilterOpen}>
            <FontAwesomeIcon icon={faFilter} className="text-xl text-[#2F7377]" />
          </button>
          <div className={`${isFilterOpen ? "translate-x-0 transition-all duration-500 ease-in-out" : "translate-x-full"} absolute md:hidden justify-center -mt-14 w-full`}>
            <div className="mt-20 h-64 w-10/12 bg-white shadow-xl rounded-md flex flex-col justify-evenly items-center">
              <div className="h-40 w-10/12 rounded-md grid grid-rows-12 border border-gray-600 p-2">
                <div className="row-span-3 flex justify-start items-center space-x-1">
                  <FontAwesomeIcon icon="fa-solid fa-filter" />
                  <h1 className="font-semibold">Filter</h1>
                </div>
                <div className="row-span-1 border-t-2 border-gray-600"></div>
                <div className="row-span-5 flex flex-col justify-between items-start py-1">
                  <div className="flex justify-start space-x-2">
                    <input className="appearance-none checked:bg-blue-500 border-none bg-gray-600 w-5 h-5 rounded-md" type="radio" name="filter" checked={filter === "terbaru"} onChange={() => handleFilterChange("terbaru")} id="" />
                    <h1 className="text-sm">Terbaru</h1>
                  </div>
                  <div className="flex justify-start space-x-2">
                    <input className="appearance-none checked:bg-blue-500 border-none bg-gray-600 w-5 h-5 rounded-md" type="radio" name="filter" checked={filter === "terlama"} onChange={() => handleFilterChange("terlama")} id="" />
                    <h1 className="text-sm">Terlama</h1>
                  </div>
                </div>
                <div className="row-span-3 py-1">
                  <button className="h-full w-full bg-[#2F7377] rounded-md text-white text-sm" onClick={() => fetchHistory()}>
                    Apply
                  </button>
                </div>
              </div>
            </div>
          </div>

          <button onClick={() => delateHistory()}>
            <h1 className="text-red-600 hover:text-red-700 text-2xl hover:scale-125 transition-all duration-500">Hapus Semua</h1>
          </button>
        </div>
        {/* data */}
        {data.map((data, index) => (
          <div key={index} className="mt-6 min-h-24 h-auto w-full grid grid-cols-12 rounded-md bg-white shadow-xl">
            <div className="col-span-3 md:col-span-2">
              <img className="w-full h-full" src={`http://127.0.0.1:8000/${data.makanan.img}`} alt="imeg" />
            </div>
            <div className="col-span-9 md:col-span-10 px-3">
              <div className="flex items-center ">
                <h1 className="lg:text-2xl text-[15px] font-bold mt-2">{data.makanan.makanan}</h1>
                <h1 className="text-[12px] lg:text-base font-bold tracking-wider mt-2 ml-auto">{data.updated_at.split("T")[0]}</h1>
              </div>
              <h1 className="lg:text-xs text-[11px] font-bold">{data.makanan.daerah}</h1>
              <div className="w-full truncate">
                <h1 className="mb-4 lg:mt-2 mt-1 text-[0.6rem] md:text-xs leading-5 col-span-10 line-clamp-3">{data.makanan.deskripsi}</h1>
              </div>
            </div>
          </div>
        ))}

        {/* end data */}
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
      {/* end section 2 */}
      {/* Tombol Kembali */}
      <div className="lg:col-span-3 col-span-full lg:-ml-5 md:flex justify-center">
        <div className="mt-20 h-64 w-10/12 bg-white shadow-xl rounded-md lg:flex flex-col justify-evenly items-center hidden">
          <Link to={-1} className="p-2 bg-[#2F7377] w-10/12 rounded-md flex items-center justify-between">
            <svg className="text-white size-6" stroke="CurrentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.707 17.293L8.414 13 18 13 18 11 8.414 11 12.707 6.707 11.293 5.293 4.586 12 11.293 18.707z"></path>
            </svg>
            <h1 className="text-white font-sans">Kembali</h1>
            <div></div>
          </Link>

          <div className="h-40 w-10/12 rounded-md grid grid-rows-12 border border-gray-600 p-2">
            <div className="row-span-3 flex justify-start items-center space-x-1">
              <FontAwesomeIcon icon="fa-solid fa-filter" />
              <h1 className="font-semibold">Filter</h1>
            </div>
            <div className="row-span-1 border-t-2 border-gray-600"></div>
            <div className="row-span-5 flex flex-col justify-between items-start py-1">
              <div className="flex justify-start space-x-2">
                <input className="appearance-none checked:bg-blue-500 border-none bg-gray-600 w-5 h-5 rounded-md" type="radio" name="filter" checked={filter === "terbaru"} onChange={() => handleFilterChange("terbaru")} id="" />
                <h1 className="text-sm">Terbaru</h1>
              </div>

              <div className="flex justify-start space-x-2">
                <input className="appearance-none checked:bg-blue-500 border-none bg-gray-600 w-5 h-5 rounded-md" type="radio" name="filter" checked={filter === "terlama"} onChange={() => handleFilterChange("terlama")} id="" />
                <h1 className="text-sm">Terlama</h1>
              </div>
            </div>
            <div className="row-span-3 py-1">
              <button className="h-full w-full bg-[#2F7377] rounded-md text-white text-sm" onClick={() => fetchHistory()}>
                Apply
              </button>
            </div>
          </div>
        </div>
      </div>
      {/* End Tombol Kembali */}
    </div>
  );
}

export default History;
