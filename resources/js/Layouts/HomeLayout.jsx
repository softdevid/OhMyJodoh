import Footer from "@/Components/Layouts/HomeLayout/Footer";
import Navbar from "@/Components/Layouts/HomeLayout/Navbar";
import React from "react";

const HomeLayout = ({ children }) => {
  return (
    <>
      <header>
        <Navbar />
      </header>
      <main>{children}</main>
      <footer>
        <Footer />
      </footer>
    </>
  );
};

export default HomeLayout;
