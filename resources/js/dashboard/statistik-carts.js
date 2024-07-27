// import "c3/c3.min.css"
// import c3 from "c3";

// const chartsDuaElement = '#char2t'



// c3.generate({
   
//     bindto: chartsDuaElement,
//     data: {
//         type : 'pie',
//         columns: [
//             ['UMUM', 320],
//             ['PRESTASI', 520],
//             ['ZONASI', 220],
//             ['PRESTASI AKADEMIK ', 220]
//         ]
//     },
//     donut : {
//         title : "Jalur Pendaftaran"
//     }
// });
import {GoogleCharts} from 'google-charts';


function drawChart() {

    const data = GoogleCharts.api.visualization.arrayToDataTable([
        ['Pendaftar', 'Total Pendaftar'],
        ['UMUM', 620],
        ['PRESTASI', 122],
        ['ZONASI', 182]
    ]);
    const cartStatistikJalur = new GoogleCharts.api.visualization.ColumnChart(document.getElementById('char2t'));
    cartStatistikJalur.draw(data,{
        title : "Total Pendaftar Berdasarkan Jalur",
    });
}
GoogleCharts.load(drawChart);
