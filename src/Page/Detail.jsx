// Icon
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBars } from "@fortawesome/free-solid-svg-icons";
import { Link } from "react-router-dom";

// Component
import Sidebar from "../components/SidebarDetail";
import { useState } from "react";

function Detail() {

  const [sidebar, toggleSidebar] = useState(false);
  const click = () => {
    toggleSidebar(!sidebar);
  }

  return (
    <div className={`${sidebar ? 'flex' : 'block'} md:flex overflow-auto bg-gray-100`}>
      {/* Navbar */}
      { window.innerWidth < 640 ? null : <Sidebar toggle={click} /> }
      { sidebar ? <Sidebar toggle={click}/> : null}
      {/* End navbar */}


      {/* Main Content */}

      <div className={`${sidebar ? 'hidden' : ''} mx-6 mt-4 md:hidden block h-12 w-full`}>
        <FontAwesomeIcon icon={faBars} alt="Icon Hamburger Menu" className="text-3xl" onClick={click} />
      </div>

      <div className="h-auto w-full flex flex-col-reverse md:flex-row">
        <div className="h-auto md:w-9/12 flex flex-col">
          <div className="mx-auto mt-10 bg-gray-100 rounded-md shadow-lg w-11/12 h-72">
            <iframe
              className="p-4 h-full w-full"
              width="560"
              height="315"
              src="https://www.youtube.com/embed/nIE7Hg2YK4Y?si=2QxZJbN_MgIlf5z3"
              title="YouTube video player"
              frameBorder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerPolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>

          <div className="mt-5 ml-9 text-lg md:text-xl font-bold font-sans tracking-wide">Tekwan | Palembang, Sumatera Selatan</div>

          <div className="mx-auto mt-10 bg-gray-100 rounded-md shadow-lg w-11/12 h-auto">
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
              <h1 className="w-11/12">
                Tekwan berasal dari akulturasi budaya Palembang dan Tionghoa, di mana orang Tionghoa yang menetap di Palembang memperkenalkan makanan berbahan dasar ikan. Tekwan diadopsi oleh masyarakat Palembang dengan menambahkan kuah
                kaldu mirip sup dan bumbu khas daerah. Disebut berasal dari &quot;Berkotek Samo Kawan&quot; atau bahasa Hokkien &quot;tâi-oân&quot; yang mirip dengan Taiwan. Di negara lain, tekwan serupa dengan fishcake, tapi lebih kenyal
                dan gurih. Banyak penggemar kuliner lebih memilih tekwan ketimbang fishcake.
              </h1>
            </div>
          </div>

          <div className="mx-auto mt-20 bg-gray-100 rounded-md shadow-lg w-11/12 h-auto">
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
                <li>500 gram putih telur</li>
                <li>300 gram terigu</li>
                <li>330 gram tapioka</li>
                <li>gula pasir, kaldu bubuk dan garam secukupnya</li>
                <li>1500 ml air</li>
                <li>5 siung bawang putih</li>
                <li>1 sendok teh ebi, halus</li>
                <li>3 siung bawang merah</li>
                <li>1/2 sendok teh lada bubuk</li>
                <li>1 sendok makan udang segar</li>
                <li>bengkuang secukupnya</li>
                <li>jamur kuping dan bunga sedap malam, rendam di air hangat</li>
                <li>gula pasir dna garam secukupnya</li>
              </ul>
            </div>
          </div>

          <div className="mx-auto mt-20 bg-gray-100 rounded-md shadow-lg w-11/12 h-auto mb-4">
            <div className="h-14 w-full row-span-1 mb-2">
              <h1 className="m-4 font-bold">Langkah-langkah:</h1>
            </div>

            <div className="h-auto w-full ml-4 mb-4">
              <ol className="w-11/12 list-decimal ml-5 space-y-6">
                <li>Masukkan semua bahan kecuali tepung tapioka atau sagu, ke dalam food processor atau chopper, giling hingga halus.</li>
                <img className="h-24 w-32" src="../src/assets/img-langkah-langkah/Tekwan-1.jpg" alt="ok" />
                <li>Pindahkan ke wadah.</li>
                <img className="h-24 w-32" src="../src/assets/img-langkah-langkah/Tekwan-2.jpg" alt="ok" />
                <li>Tambahkan tepung tapioka, aduk hingga rata.</li>
                <img className="h-24 w-32" src="../src/assets/img-langkah-langkah/Tekwan-3.jpg" alt="ok" />
                <li>Didihkan air panci, kecilkan api.</li>
                <img className="h-24 w-32" src="../src/assets/img-langkah-langkah/Tekwan-4.jpg" alt="ok" />
                <li>Cubit adonan dengan ukuran sesuai selera.</li>
                <img className="h-24 w-32" src="../src/assets/img-langkah-langkah/Tekwan-5.jpg" alt="ok" />
                <li>Rebus dengan api kecil hingga matang.</li>
                <img className="h-24 w-32" src="../src/assets/img-langkah-langkah/Tekwan-6.jpg" alt="ok" />
                <li>Angkat dan tiriskan.</li>
                <img className="h-24 w-32" src="../src/assets/img-langkah-langkah/Tekwan-7.jpg" alt="ok" />
              </ol>
            </div>
          </div>
        </div>
        {/* End Main Content */}

        {/* Fixed Sidebar Tombol */}
        <div className="h-56 w-full md:h-screen md:w-3/12 md:flex md:justify-center md:items-start">
          <div className="md:fixed w-full md:w-2/12">
            <div className="mx-5 md:mx-0 mt-5 h-48 md:mt-10 md:h-60 bg-gray-150 rounded-md shadow-lg flex flex-col justify-evenly items-center">
              <Link to={-1}  className="p-2 bg-gray-500 w-3/4 rounded-md flex items-center justify-between">
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
