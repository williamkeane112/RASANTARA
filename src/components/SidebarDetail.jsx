import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBookmark, faBars, faClock } from "@fortawesome/free-solid-svg-icons";
// img
// eslint-disable-next-line react/prop-types
function SidebarDetail({toggle}) {
  return (
    <nav className="bg-white fixed col-span-1 top-0 right-0 w-[105px] h-screen border-r border-black z-20">
      <div className="mt-6 flex flex-col items-center">
        <button className="flex flex-col items-center mb-20">
          <FontAwesomeIcon icon={faBars} alt="Icon Hamburger Menu" className="text-3xl" onClick={toggle}/>
        </button>
        <button className="flex flex-col items-center mb-14">
          <FontAwesomeIcon icon={faBookmark} className="text-2xl" />
          <span className="lg:text-[12px] text-sm">Tersimpan</span>
        </button>
        <button className="flex flex-col items-center">
          <FontAwesomeIcon icon={faClock} alt="Icon Latters Menu" className="text-2xl" />
          <span className="lg:text-[12px] text-sm">Baru Saja</span>
        </button>
      </div>
    </nav>
  );
}

export default SidebarDetail;
