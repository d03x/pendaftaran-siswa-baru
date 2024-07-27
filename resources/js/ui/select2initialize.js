import NiceSelect from 'nice-select2';


// Overlay Scrollbar
const  instance = new NiceSelect(document.getElementById("select"), {
    placeholder : "Pilih sekolah asal",
    loading : true,
    width : '100%'
});