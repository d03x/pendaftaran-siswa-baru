import { parseInputName } from "@/utils.js";
import { formReview } from "../utils/components/formReview";

document.addEventListener('DOMContentLoaded', async () => {
    const formBiodataSiswa = document.getElementById('form-biodata-siswa');
    const reviewButton = document.querySelector(`button[data-btn='review-biodata-siswa']`);

    reviewButton.addEventListener('click', () => formReview('#form-biodata-siswa', [
        '_token',
        '_method'
    ],{
        modalContentSelector:'div[modal-review-content]'
    }));
    //submit
    if (formBiodataSiswa) {
        formBiodataSiswa.addEventListener('submit', async (event) => {
            event.preventDefault();
            console.log("HENCET");
            const formData = new FormData(event.target);
            const data = Object.fromEntries(formData.entries());
            const response = await axios.post('/api/formulir/simpan',{
                biodata : data,
                data_orang_tua : {},
                nilai_rapot : {},
                berkas : {},
            });
            console.log(response)
            // You can use the `data` object as needed, e.g., send it to a server
        });
    }
});
