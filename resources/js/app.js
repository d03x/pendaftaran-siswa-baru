import {OverlayScrollbars} from 'overlayscrollbars';  // Import OverlayScrollbars dari modul yang diinstal
import 'overlayscrollbars/overlayscrollbars.css';  // Jangan lupa untuk mengimpor stylesheet OverlayScrollbars
import NiceSelect from 'nice-select2';
import './bootstrap';
import "./pages/dashboard"


// Overlay Scrollbar
window.onload  = () => {
    const  instance = new NiceSelect(document.getElementById("select"), {
        placeholder : "Pilih sekolah asal",
        loading : true,
        width : '100%'
    });
    const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
    const Default = {
        scrollbarTheme: "os-theme-light",
        scrollbarAutoHide: "leave",
        scrollbarClickScroll: true,
    };

    const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
    if (sidebarWrapper) {
        OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
                theme: Default.scrollbarTheme,
                autoHide: Default.scrollbarAutoHide,
                clickScroll: Default.scrollbarClickScroll,
            },
        });
    }
}
