import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Home from "./Page/Home";
import Detail from "./Page/Detail";
import List from "./Page/List";
import "./App.css";
import HomeEn from "./Page/HomeEN";
import Jawa from "./Page/Jawa";
import Kalimantan from "./Page/Kalimantan";
import Sulawesi from "./Page/Sulawesi";
import Bali from "./Page/Bali";
import NusaTengaraTImur from "./Page/NusaTengaraTimur";
import NusaTenggaraBarat from "./Page/NusaTenggaraBarat";
import Papua from "./Page/Papua";
import Register from "./auth/Register";
import Login from "./auth/Login";
function App() {
  return (
    <>
      <Router>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/homeEN" element={<HomeEn />} />
          <Route path="/detail" element={<Detail />} />
          <Route path="/Sumatera" element={<Sumatera />} />
          <Route path="/Jawa" element={<Jawa />} />
          <Route path="/kalimantan" element={<Kalimantan />} />
          <Route path="/Bali" element={<Bali />} />
          <Route path="/Sulawesi" element={<Sulawesi />} />
          <Route path="/NusaTenggaraTimur" element={<NusaTengaraTImur />} />
          <Route path="/NusaTenggaraBarat" element={<NusaTenggaraBarat />} />
          <Route path="/Papua" element={<Papua />} />
          <Route path="/register" element={<Register />} />
          <Route path="/login" element={<Login />} />
        </Routes>
      </Router>
    </>
  );
}

export default App;
