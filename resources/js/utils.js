const parseInputName = data => {
    const removeUnderScore = data.replace(/_/g, ' ').split(' ').map(val => capitalize(val)).join(' ');
    return removeUnderScore;
}

const capitalize = strings => {
    return strings.charAt(0).toUpperCase() + strings.slice(1);
}

export {
    parseInputName,
    capitalize,

}
