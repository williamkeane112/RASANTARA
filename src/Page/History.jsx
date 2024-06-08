import Sidebar from "../components/SidebarDetail";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faBars } from "@fortawesome/free-solid-svg-icons";
import { useState, useEffect } from "react";

function History() {
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

    return (
        <div className="h-screen w-full flex bg-gray-100 overflow-auto">
        {/* Navbar */}
        {!isMobile && <Sidebar toggle={click} />}
        {sidebar && isMobile && <Sidebar toggle={click} />}
        {/* End navbar */}

        <div className="h-full w-full md:w-8/12 p-2 px-4 md:p-4 md:px-8">

        <div className={`${sidebar && isMobile ? "hidden" : ""} flex justify-between mx-4 my-4 md:hidden h-12`}>
        <svg className="text-[#2F7377] size-12 -mt-2" stroke="CurrentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path d="M12.707 17.293L8.414 13 18 13 18 11 8.414 11 12.707 6.707 11.293 5.293 4.586 12 11.293 18.707z"></path>
        </svg>
        <FontAwesomeIcon icon={faBars} alt="Icon Hamburger Menu" className="text-3xl" onClick={click} />
        </div>

            <h1 className="text-4xl font-bold">History</h1>

            <div className="mt-3 border border-t-2 border-black"></div>

            <div className="mt-6 flex justify-end">
                <h1 className="text-red-600">Hapus Semua</h1>
            </div>

            <div className="mt-8 min-h-24 h-auto w-full grid grid-cols-12 rounded-md bg-white shadow-xl">
                <div className="col-span-3 md:col-span-2">
                    <img className="h-24 md:h-full w-full" src="" alt="imeg" />
                </div>

                <div className="col-span-7 md:col-span-8 px-3">
                    <h1 className="text-xl md:text-2xl font-bold">Sate Padang</h1>
                    <h1 className="text-xs font-bold">Riau, Sumatera Barat</h1>
                    <h1 className="my-4 text-[0.6rem] md:text-xs leading-5 col-span-10">Lorem ipsum dolor sit amet consectetur. Sollicitudin velit elit sodales convallis. Scelerisque rhoncus pulvinar sem auctor nisi. Justo aliquam lacus auctor habitant at semper. Habitasse enim molestie accumsan nec.</h1>
                </div>

                <div className="col-span-2">
                    <h1 className="text-sm md:text-base font-bold tracking-wider">11-05-2021</h1>
                </div>
            </div>

            {/* Pagination */}
            <div className="mx-auto mt-8 h-14 w-10/12 md:w-4/6 grid grid-cols-8">
                <div className="col-span-2 p-1 px-4">
                    <button className="bg-[#2F7377] h-full w-full rounded-md flex justify-center items-center">
                        <svg className="text-white size-8" stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M5.854 4.646a.5.5 0 010 .708L3.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clipRule="evenodd"></path><path fillRule="evenodd" d="M2.5 8a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H3a.5.5 0 01-.5-.5z" clipRule="evenodd"></path></svg>
                    </button>
                </div>
                <div className="col-span-4 flex justify-between items-center mx-4">
                    <h1 className="text-[#2F7377]">1</h1>
                    <h1 className="text-[#2F7377]">2</h1>
                    <h1 className="text-[#2F7377]">3</h1>
                    <h1 className="text-[#2F7377]">4</h1>
                </div>
                <div className="col-span-2 p-1 px-4">
                    <button className="bg-[#2F7377] h-full w-full rounded-md flex justify-center items-center">
                        <svg className="text-white size-8" stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M10.146 4.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L12.793 8l-2.647-2.646a.5.5 0 010-.708z" clipRule="evenodd"></path><path fillRule="evenodd" d="M2 8a.5.5 0 01.5-.5H13a.5.5 0 010 1H2.5A.5.5 0 012 8z" clipRule="evenodd"></path></svg>
                    </button>
                </div>
            </div>
            {/* End Pagination */}
        </div>


        {/* Tombol Kembali */}
        <div className="hidden h-full w-4/12 md:flex justify-center">
            <div className="mt-20 h-64 w-10/12 bg-white shadow-xl rounded-md flex flex-col justify-evenly items-center">
                <div className="p-2 bg-[#2F7377] w-10/12 rounded-md flex items-center justify-between">
                  <svg className="text-white size-6" stroke="CurrentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.707 17.293L8.414 13 18 13 18 11 8.414 11 12.707 6.707 11.293 5.293 4.586 12 11.293 18.707z"></path>
                  </svg>
                <h1 className="text-white font-sans">Kembali</h1>
                <div></div>
                </div>

                <div className="h-40 w-10/12 rounded-md grid grid-rows-12 border border-gray-600 p-2">
                    <div className="row-span-3 flex justify-start items-center space-x-1">
                        <FontAwesomeIcon icon="fa-solid fa-filter" />
                        <h1 className="font-semibold">Filter</h1>
                    </div>
                    <div className="row-span-1 border-t-2 border-gray-600"></div>
                    <div className="row-span-5 flex flex-col justify-between items-start py-1">
                        <div className="flex justify-start space-x-2">
                            <input className="appearance-none checked:bg-blue-500 border-none bg-gray-600 w-5 h-5 rounded-md" type="radio" name="filter" id="" />
                            <h1 className="text-sm">Terbaru</h1>
                        </div>

                        <div className="flex justify-start space-x-2">
                            <input className="appearance-none checked:bg-blue-500 border-none bg-gray-600 w-5 h-5 rounded-md" type="radio" name="filter" id="" />
                            <h1 className="text-sm">Terlama</h1>
                        </div>
                    </div>
                    <div className="row-span-3 py-1">
                        <button className="h-full w-full bg-[#2F7377] rounded-md text-white text-sm">Apply</button>
                    </div>
                </div>
            </div>
        </div>
        {/* End Tombol Kembali */}
        </div>
    );
}

export default History;