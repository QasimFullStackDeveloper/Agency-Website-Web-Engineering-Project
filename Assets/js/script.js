$(document).ready(function () {
    $('#my-navbar').load('/assets/pages/navbar.html');
    $('#my-footer').load('/assets/pages/footer.html');
});


// Used in Footer Icon for going to Top
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}