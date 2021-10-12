const darkModeButton = document.getElementById('darkMode');
// console.log(darkModeButton);
// const conteneurArticle = document.getElementById('conteneur');
const cadreCentral = document.getElementById('cadreCentral');
// const theBody = document.getElementsByTagName('body');
const fondModeNuit = document.getElementById('fondModeNuit')

darkModeButton.addEventListener('click', function() {
    fondModeNuit.classList.toggle("modeNuitActif");
    // conteneurArticle.classList.toggle("modeNuitActif");
    cadreCentral.classList.toggle("modeNuitActif");
});