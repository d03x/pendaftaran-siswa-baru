import "c3/c3.min.css"
import c3 from "c3";

var chart = c3.generate({
   
    bindto: '#char2t',
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
