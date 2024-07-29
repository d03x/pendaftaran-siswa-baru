import { parseInputName } from "../../utils";
/**
 * 
 * @param {*} name 
 * @param {*} value 
 * @returns 
 */
function generateTableRow(name, value) {
    return `
               <tr>
                  <td>${parseInputName(name)}</td>
                  <td class="tw-px-3">:</td>
                  <td>${value
            ? value
            : '<i class="tw-text-red-500 text-decoration-underline tw-text-sm">Tolong Isi Dulu</i>'
        }</td>
                </tr> 
              `;
}

/**
 *
 * @param {*} inputs
 * @param {*} excepts
 * @returns
 */
const generateReviewTable = (formElement, excepts) => {
    const inputs = formElement.querySelectorAll("input");
    const selects = formElement.querySelectorAll("select");
    const textarea = formElement.querySelectorAll("textarea");

    let data = "<table>";
    inputs.forEach((input) => {
        if (!excepts.includes(input.name)) {
            data += generateTableRow(input.name, input.value);

        }
    });
    selects.forEach((input) => {
        if (!excepts.includes(input.name)) {
            data += generateTableRow(input.name, input.value);
        }
    });
    data += "</table>";
    return data;
};
/**
 *
 * @param {*} selector
 * @param {*} excepts
 * @param {*} config
 * @returns
 */
function formReview(selector, excepts, config) {
    const formElement = document.querySelector(selector);

    const reviewContentElement = document.querySelector(
        config.modalContentSelector
    );
    if (reviewContentElement) {
        reviewContentElement.innerHTML = generateReviewTable(
            formElement,
            excepts
        );
    } else {
        return generateReviewTable(formElement, excepts);
    }
}

export { formReview };
