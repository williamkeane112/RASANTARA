import { useEffect, useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faSearch } from "@fortawesome/free-solid-svg-icons";

const FormSearch = ({ onSubmit }) => {
    const queryParams = new URLSearchParams(location.search);
  const pulau = queryParams.get("pulau") || "";
  let placeholder = "";
  if (location.pathname === "/bookmark") {
    placeholder = "Cari resep makan di daftar bookmark anda";
  } else {
    placeholder = `Cari resep makan didaerah ${pulau}`
  }

  const [searchTerm, setSearchTerm] = useState("");

  const handleSubmit = (e) => {
    e.preventDefault();
    onSubmit(searchTerm);
  };

  return (
    <form onSubmit={handleSubmit} className="flex items-center relative">
      <FontAwesomeIcon icon={faSearch} alt="Search icon" className="absolute w-4 mx-2" />
      <input
        type="text"
        className="w-full lg:text-md font-semibold text-sm pl-10 pr-20 py-[8px] rounded-md shadow-[5px_8px_10px_3px_rgba(0,0,0,0.3)]"
        value={searchTerm}
        onChange={(e) => {
          setSearchTerm(e.target.value);
          handleSubmit(e);
        }}
        placeholder={`${placeholder}`}
      />
    </form>
  );
};

export default FormSearch;
