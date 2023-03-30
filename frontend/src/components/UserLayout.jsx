import {Outlet} from "react-router-dom";
import Header from "./includes/Header.jsx";
import Footer from "./includes/Footer.jsx";

const UserLayout = () => {
  return (
    <div>
      <Header />
      <main>
        <Outlet />
        <Footer />
      </main>
    </div>
  )
}

export default UserLayout
