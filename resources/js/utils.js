function parseInputName(data){
    const removeUnderScore = data.replace(/_/g,' ').split(' ').map(val=>toUcWords(val)).join(' ');
    return removeUnderScore;
}

function toUcWords(strings){
    return strings.charAt(0).toUpperCase() + strings.slice(1);
}

toUcWords("dadan hidayat")

export {
    parseInputName,
}
