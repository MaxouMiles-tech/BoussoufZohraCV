// ---------------------------------------------------------------------------------------------------------------------
//delai concernant la redirection apres l'envoi d'un mail
// ---------------------------------------------------------------------------------------------------------------------
function delai() {
    // Run code
    setTimeout(function () {
        document.location.href = '../../index.php';
    }, 1500);
}
window.onload = delai();