import "c3/c3.min.css"
import c3 from "c3";

const chartsDuaElement = '#char2t'

c3.generate({
   
    bindto: chartsDuaElement,
    data: {
        type : 'pie',
        columns: [
            ['UMUM', 320],
            ['PRESTASI', 520],
            ['ZONASI', 220],
            ['PRESTASI AKADEMIK ', 220]
        ]
    },
    donut : {
        title : "Jalur Pendaftaran"
    }
});
