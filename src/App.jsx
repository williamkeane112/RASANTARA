import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Home from "./Page/Home";
import Detail from "./Page/Detail";
import Sumatera from "./Page/Sumatera";
import Jawa from "./Page/Jawa";
import "./App.css";
import HomeEn from "./Page/HomeEN";
function App() {
  return (
    <>
      <Router>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/homeEN" element={<HomeEn />} />
          <Route path="/detail" element={<Detail />} />
          <Route path="/sumatera" element={<Sumatera />} />
          <Route path="/jawa" element={<Jawa />} />
        </Routes>
      </Router>
    </>
  );
}

export default App;