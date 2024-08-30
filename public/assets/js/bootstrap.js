import axios from 'axios';
import Aos from 'aos';
import Swiper from 'swiper';
import GLightbox from 'glightbox';
import imagesLoaded from 'imagesloaded';
import Isotope from 'isotope-layout';
import PureCounter from "@srexi/purecounterjs";
import * as bootstrap from "bootstrap";

// Set up global variables for all components to use
window.axios = axios;
window.Aos = Aos;
window.Swiper = Swiper;
window.GLightbox = GLightbox;
window.imagesLoaded = imagesLoaded;
window.Isotope = Isotope;
window.PureCounter = PureCounter;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
const enableTooltip = (enable = true) => {
    if (enable) {
        const tooltipTriggerList = document.querySelectorAll(
            '[data-bs-toggle="tooltip"]'
        );
        [...tooltipTriggerList].map(
            (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
        );
    }
};

const enablePopover = (enable = true) => {
    if (enable) {
        const popoverTriggerList = document.querySelectorAll(
            '[data-bs-toggle="popover"]'
        );
        [...popoverTriggerList].map(
            (popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl)
        );
    }
};

export { bootstrap, enableTooltip, enablePopover };