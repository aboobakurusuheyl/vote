import Swiper, { Pagination, Autoplay } from "swiper";
Swiper.use([Pagination, Autoplay]);
// import Swiper styles
import "swiper/css";
import "swiper/css/pagination";

var swiper = new Swiper(".mySwiper", {
    autoplay: {
        delay: 5000,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});
