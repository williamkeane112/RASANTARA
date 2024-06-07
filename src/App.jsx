import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Home from "./Page/Home";
import Detail from "./Page/Detail";
import List from "./Page/List";
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
          <Route path="/List" element={<List />} />
        </Routes>
      </Router>
    </>
  );
}

export default App;
