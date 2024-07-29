import { parseInputName } from "@/utils.js";
import { formReview } from "../utils/components/formReview";

document.addEventListener('DOMContentLoaded', () => {
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
        formBiodataSiswa.addEventListener('submit', (event) => {
            event.preventDefault();
            const formData = new FormData(event.target);
            const data = Object.fromEntries(formData.entries());
            console.log(data);
            // You can use the `data` object as needed, e.g., send it to a server
        });
    }
});
