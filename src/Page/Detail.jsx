// Icon
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBars } from "@fortawesome/free-solid-svg-icons";
import { Link, useParams } from "react-router-dom";

// Component
import Sidebar from "../components/SidebarDetail";
import { useState, useEffect } from "react";
import axios from "axios";

function Detail() {
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
          langkahLangkah: JSON.parse(result.data.detail.langkahLangkah)
        });
      } catch (error) {
        console.log(error);
      }
    };

    fetchUser();
  }, [id]);
  return (
    <div className={`${sidebar ? "flex" : "block"} md:flex overflow-auto bg-gray-100`}>
      {/* Navbar */}
      {!isMobile && <Sidebar toggle={click} />}
      {sidebar && isMobile && <Sidebar toggle={click} />}
      {/* End navbar */}

      {/* Main Content */}
      <div className={`${sidebar && isMobile ? "hidden" : ""} flex justify-between mx-10 mt-6 md:hidden h-12`}>
        <svg className="text-[#2F7377] size-12 -mt-2" stroke="CurrentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path d="M12.707 17.293L8.414 13 18 13 18 11 8.414 11 12.707 6.707 11.293 5.293 4.586 12 11.293 18.707z"></path>
        </svg>
        <FontAwesomeIcon icon={faBars} alt="Icon Hamburger Menu" className="text-3xl" onClick={click} />
      </div>

      <div className="h-auto w-full flex flex-col-reverse md:flex-row">
        <div className="h-auto md:w-9/12 flex flex-col">
          <div className="mx-auto mt-5 bg-gray-100 rounded-lg md:rounded-md shadow-2xl w-10/12 h-72">
            <iframe
              className="p-4 h-full w-full"
              width="560"
              height="315"
              src={`https://www.youtube.com/embed/`}
              title="YouTube video player"
              frameBorder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerPolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>

          <div className="mt-10 ml-10 text-lg md:text-xl md:ml-20 font-bold font-sans tracking-wide">
            {data.makanan} | {data.daerah}
            {/* {data.tutorial} */}
          </div>

          <button className="mt-10 mx-auto md:hidden p-2 bg-[#2F7377] w-9/12 rounded-md flex items-center justify-between">
            <div>
              <svg className="ml-2 text-white size-6" stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path fillRule="evenodd" d="M8 12l5 3V3a2 2 0 00-2-2H5a2 2 0 00-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 00-1-1H5a1 1 0 00-1 1v10.234z" clipRule="evenodd"></path>
              </svg>
            </div>
            <div className="font-sans text-white">Simpan Resep</div>
            <div></div>
          </button>

          <div className="mx-auto mt-10 bg-gray-100 rounded-md shadow-2xl w-10/12 h-auto">
            <div className="h-14 w-full row-span-1 flex justify-between mb-6">
              <h1 className="m-4 font-bold">Latar Belakang:</h1>
              <div className="m-4">
                <a href="">
                  <svg className="size-5" stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M542.22 32.05c-54.8 3.11-163.72 14.43-230.96 55.59-4.64 2.84-7.27 7.89-7.27 13.17v363.87c0 11.55 12.63 18.85 23.28 13.49 69.18-34.82 169.23-44.32 218.7-46.92 16.89-.89 30.02-14.43 30.02-30.66V62.75c.01-17.71-15.35-31.74-33.77-30.7zM264.73 87.64C197.5 46.48 88.58 35.17 33.78 32.05 15.36 31.01 0 45.04 0 62.75V400.6c0 16.24 13.13 29.78 30.02 30.66 49.49 2.6 149.59 12.11 218.77 46.95 10.62 5.35 23.21-1.94 23.21-13.46V100.63c0-5.29-2.62-10.14-7.27-12.99z"></path>
                  </svg>
                </a>
              </div>
            </div>

            <div className="h-auto w-full ml-4 mb-4">
              <h1 className="w-10/12">{detail.latarBelakang}</h1>
            </div>
          </div>

          <button className="mt-10 mx-auto md:hidden p-2 border-2 border-black w-9/12 rounded-md flex items-center justify-between">
            <div>
              <svg className="ml-2 size-6" stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M503.691 189.836L327.687 37.851C312.281 24.546 288 35.347 288 56.015v80.053C127.371 137.907 0 170.1 0 322.326c0 61.441 39.581 122.309 83.333 154.132 13.653 9.931 33.111-2.533 28.077-18.631C66.066 312.814 132.917 274.316 288 272.085V360c0 20.7 24.3 31.453 39.687 18.164l176.004-152c11.071-9.562 11.086-26.753 0-36.328z"></path>
              </svg>
            </div>
            <div className="font-sans font-bold">Bagikan</div>
            <div></div>
          </button>

          <div className="mx-auto mt-10 bg-gray-100 rounded-md shadow-2xl w-10/12 h-auto">
            <div className="h-14 w-full row-span-1 flex justify-between mb-2">
              <h1 className="m-4 font-bold">Bahan-bahan:</h1>
              <div className="m-4">
                <a href="">
                  <svg className="size-5" stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 384 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM96 424c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm96-192c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm128 368c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z"></path>
                  </svg>
                </a>
              </div>
            </div>

            <div className="h-auto w-full ml-4 mb-4">
              <ul className="w-11/12 list-disc ml-5">
                {detail?.bahanBahan?.map((bahan ,item) => (
                  <li key={item}>{bahan}</li>
                ))}
              </ul>
            </div>
          </div>

          <div className="mx-auto mt-10 bg-gray-100 rounded-md shadow-2xl w-10/12 h-auto mb-4">
            <div className="h-14 w-full row-span-1 mb-2">
              <h1 className="m-4 font-bold">Langkah-langkah:</h1>
            </div>

            <div className="h-auto w-full ml-4 mb-4">
              <ol className="w-11/12 list-decimal ml-5 space-y-6">
              {detail?.langkahLangkah?.map((langkah, index) => (
                <li key={index}>{langkah}</li>
              ))}
              </ol>
            </div>
          </div>
        </div>
        {/* End Main Content */}

        {/* Fixed Sidebar Tombol */}
        <div className="hidden h-56 w-full md:h-screen md:w-3/12 md:flex md:justify-center md:items-start">
          <div className="md:fixed w-full md:w-2/12">
            <div className="mx-5 md:mx-0 mt-5 h-48 md:mt-10 md:h-60 bg-gray-150 rounded-md shadow-2xl flex flex-col justify-evenly items-center">
              <Link to={-1} className="p-2 bg-gray-500 w-3/4 rounded-md flex items-center justify-between">
                <div>
                  <svg className="text-white size-6" stroke="CurrentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.707 17.293L8.414 13 18 13 18 11 8.414 11 12.707 6.707 11.293 5.293 4.586 12 11.293 18.707z"></path>
                  </svg>
                </div>
                <div className="text-white font-sans">Kembali</div>
                <div className="ml-2"></div>
              </Link>

              <button className="p-2 border-2 border-black w-3/4 rounded-md flex items-center justify-between">
                <div>
                  <svg className="size-6" stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path fillRule="evenodd" d="M8 12l5 3V3a2 2 0 00-2-2H5a2 2 0 00-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 00-1-1H5a1 1 0 00-1 1v10.234z" clipRule="evenodd"></path>
                  </svg>
                </div>
                <div className="font-sans">Simpan Resep</div>
                <div></div>
              </button>

              <button className="p-2 border-2 border-black w-3/4 rounded-md flex items-center justify-between">
                <div>
                  <svg className="size-6" stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M503.691 189.836L327.687 37.851C312.281 24.546 288 35.347 288 56.015v80.053C127.371 137.907 0 170.1 0 322.326c0 61.441 39.581 122.309 83.333 154.132 13.653 9.931 33.111-2.533 28.077-18.631C66.066 312.814 132.917 274.316 288 272.085V360c0 20.7 24.3 31.453 39.687 18.164l176.004-152c11.071-9.562 11.086-26.753 0-36.328z"></path>
                  </svg>
                </div>
                <div className="font-sans">Bagikan</div>
                <div className="ml-2"></div>
              </button>
            </div>
          </div>
        </div>
        {/* END Fixed Sidebar Tombol */}
      </div>
    </div>
  );
}

export default Detail;
