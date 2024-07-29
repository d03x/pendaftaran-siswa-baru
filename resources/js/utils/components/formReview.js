import { parseInputName } from "../../utils";
import echo from "../echo";

/**
 * Generates a table row for the given input name and value.
 *
 * @param {string} name - The name of the input field.
 * @param {string} value - The value of the input field.
 * @returns {string} - The HTML string for the table row.
 */
function generateTableRow(name, value) {
    const displayValue = value 
        ? value 
        : '<i class="tw-text-red-500 text-decoration-underline tw-text-sm">Tolong Isi Dulu</i>';
    
    return `
        <tr>
            <td>${parseInputName(name)}</td>
            <td class="tw-px-3">:</td>
            <td>${displayValue}</td>
        </tr>
    `;
}

/**
 * Generates an HTML table for form review, excluding specified fields.
 *
 * @param {HTMLElement} formElement - The form element to review.
 * @param {Array<string>} excepts - The input names to exclude from the review.
 * @returns {string} - The HTML string for the review table.
 */
function generateReviewTable(formElement, excepts) {
    const inputs = formElement.querySelectorAll("input, select, textarea");
    let data = "<table>";
    
    inputs.forEach((input) => {
        if (!excepts.includes(input.name)) {
            data += generateTableRow(input.name, input.value);
        }
    });

    data += "</table>";
    return data;
}

/**
 * Generates a form review and inserts it into the specified element, or returns the review HTML.
 *
 * @param {string} selector - The selector for the form element to review.
 * @param {Array<string>} excepts - The input names to exclude from the review.
 * @param {Object} config - Configuration object for review placement.
 * @param {string} config.modalContentSelector - The selector for the element to insert the review into.
 * @returns {string|void} - The HTML string for the review table or void if inserted into a modal.
 */
function formReview(selector, excepts, config) {
    const formElement = document.querySelector(selector);
    const reviewContentElement = document.querySelector(config.modalContentSelector);
    const reviewHTML = generateReviewTable(formElement, excepts);

    if (reviewContentElement) {
        reviewContentElement.innerHTML = reviewHTML;
    } else {
        return reviewHTML;
    }
}
export { formReview };
