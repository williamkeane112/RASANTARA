import Sidebar from "../components/Sidebar";

function History() {
    return (
        <div className="h-screen w-full flex bg-gray-100 overflow-auto">
        <Sidebar />

        <div className="h-full w-8/12 p-4 px-8">
            <h1 className="text-4xl font-bold">History</h1>

            <div className="mt-3 border border-t-2 border-black"></div>

            <div className="mt-6 flex justify-between">
                <h1>Filter</h1>
                <h1 className="text-red-600">Hapus Semua</h1>
            </div>

            <div className="mt-8 min-h-36 h-auto w-full grid grid-cols-12 rounded-md bg-white shadow-xl">
                <div className="col-span-2">
                    <img className="h-full w-full" src="" alt="imeg" />
                </div>

                <div className="col-span-8 px-3">
                    <h1 className="text-2xl font-bold">Sate Padang</h1>
                    <h1 className="text-xs font-bold">Riau, Sumatera Barat</h1>
                    <h1 className="my-4 text-xs leading-5">Lorem ipsum dolor sit amet consectetur. Sollicitudin velit elit sodales convallis. Scelerisque rhoncus pulvinar sem auctor nisi. Justo aliquam lacus auctor habitant at semper. Habitasse enim molestie accumsan nec.</h1>
                </div>

                <div className="col-span-2">
                    <h1 className="font-bold tracking-wider">11-05-2021</h1>
                </div>
            </div>
        </div>


        {/* Tombol Kembali */}
        <div className="h-full w-4/12 flex justify-center ">
            <div className="mt-20 h-20 w-10/12 bg-white shadow-xl rounded-md flex justify-center items-center">
                <div className="p-2 bg-[#2F7377] w-10/12 rounded-md flex items-center justify-between">
                  <svg className="text-white size-6" stroke="CurrentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.707 17.293L8.414 13 18 13 18 11 8.414 11 12.707 6.707 11.293 5.293 4.586 12 11.293 18.707z"></path>
                  </svg>
                <h1 className="text-white font-sans">Kembali</h1>
                <div></div>
                </div>
            </div>
        </div>
        {/* End Tombol Kembali */}
        </div>
    );
}

export default History;