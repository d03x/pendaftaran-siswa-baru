import axios from 'axios';
import echo from './utils/echo';
import c3 from 'c3';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
// import semua library yang dibutuhkan
import "@popperjs/core"
import "bootstrap"
import "@fontsource/source-sans-3/index.css"
import "bootstrap-icons/font/bootstrap-icons.min.css"
// pesan ini akan tampil di konsol
echo.group(echo.asWarning("PPDB SMK BERBASIS WEB"));
echo.log("Versi:",echo.asAlert('1.0.0'));
echo.log("Author:dadan hidayat <dadanhidyt@gmail.com>");
echo.log("License:comersial");
echo.log("Website:", 'https://dadandev.com');
echo.groupEnd();
