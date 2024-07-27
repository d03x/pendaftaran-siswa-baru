import {OverlayScrollbars} from 'overlayscrollbars';  // Import OverlayScrollbars dari modul yang diinstal
import 'overlayscrollbars/overlayscrollbars.css';  // Jangan lupa untuk mengimpor stylesheet OverlayScrollbars
window.onload  = () => {
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
