import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Home from "./Page/Home";
import Detail from "./Page/Detail";
import List from "./Page/List";
import History from "./Page/History";
import Bookmark from "./Page/BookMark";
import "./App.css";
import HomeEn from "./Page/HomeEN";

function App() {
  return (
    <>
      <Router>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/homeEN" element={<HomeEn />} />
          <Route path="/list" element={<List />} />
          <Route path="/detail/:id" element={<Detail />} />
          <Route path="/history" element={<History />} />
          <Route path="/bookmark" element={<Bookmark />} />
        </Routes>
      </Router>
    </>
  );
}

export default App;
