import "c3/c3.min.css"
import c3 from "c3";

const chartsDuaElement = '#char2t'



c3.generate({
   
    bindto: chartsDuaElement,
    data: {
        x : 'x',
        columns: [
            ['x','UMUM',"Prestasi Akademik","BtQ"],
            ['Diterima', 80,12,13],
            ['Ditolak', 31,13,43],
            ['Dicadangkan', 39,33,43],
        ],
      
        colors : {
            Diterima : "green",
            Ditolak : "red",
            Dicadangkan : "blue",
        },
        types : {
            Diterima : "bar",
            Ditolak : "bar",
            Dicadangkan : "bar",
        }
    },
    zoom :{
        enabled : true
    },
    axis : {
        x : {
            type : 'category',
            label : "Jalur Pendaftaran"
        },
        y : {
            label : "Total Pendaftar"
        },
        
    },
   
});

var genderChart = c3.generate({
    bindto: '#cart-statistik-by-gender',
    data: {
        columns: [
            ['Laki-laki', 100],
            ['Perempuan', 90]
        ],
        type: 'pie',
        colors: {
            'Laki-laki': '#3357FF',
            'Perempuan': '#FF5733'
        }
    }
});