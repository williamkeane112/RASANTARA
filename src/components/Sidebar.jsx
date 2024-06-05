import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBookmark, faBars, faClock } from "@fortawesome/free-solid-svg-icons";
// img
function Sidebar() {
  return (
    <nav className="col-span-1 w-[70px] max-h-[100%] border-r border-black">
      <div className="mt-7 flex flex-col items-center">
        <button className="flex flex-col items-center mb-20">
          <FontAwesomeIcon icon={faBars} alt="Icon Hamburger Menu" className="text-2xl" />
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

export default Sidebar;
