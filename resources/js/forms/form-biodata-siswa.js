import { parseInputName } from "@/utils.js";

document.addEventListener('DOMContentLoaded', () => {
    const formBiodataSiswa = document.getElementById('form-biodata-siswa');
    const reviewFormSiswa = document.querySelector(`button[data-btn='review-biodata-siswa']`);

    const generateReviewTable = (inputs) => {
        let data = "<table>";
        inputs.forEach((input) => {
            if(input.name != '_token' && input.name != '_method'){
                data += `
                    <tr>
                      <td>${parseInputName(input.name)}</td>
                      <td class="tw-px-3">:</td>
                      <td>${input.value ? input.value : '<i class="tw-text-red-500 text-decoration-underline tw-text-sm">Tolong Isi Dulu</i>'}</td>
                    </tr>
                  `;
            }
        });
        data += "</table>";
        return data;
    };

    reviewFormSiswa.addEventListener('click', () => {
        const inputs = formBiodataSiswa.querySelectorAll('input');
        const reviewTable = generateReviewTable(inputs);
        const reviewContentElement = document.querySelector('div[modal-review-content]');
        reviewContentElement.innerHTML = reviewTable;
        console.log(reviewTable);
    });

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
