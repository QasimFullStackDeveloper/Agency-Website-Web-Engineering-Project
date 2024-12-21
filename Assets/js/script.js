$(document).ready(function () {
    $('#my-navbar').load('/assets/pages/navbar.html');
    $('#my-footer').load('/assets/pages/footer.html');
});


// Used in Footer Icon for going to Top
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

$(document).ready(function () {
    $(document).on('DOMNodeInserted', '.navbar', function () {
        const navLinks = $('.navbar-nav .nav-link');

        function setActiveLink(clickedLink) {
            navLinks.removeClass('active');
            if (clickedLink) {
                $(clickedLink).addClass('active');
            }
        }

        navLinks.each(function () {
            $(this).on('click', function () {
                setActiveLink(this);
            });
        });

        const currentPath = window.location.pathname;
        let activeLinkFound = false;

        navLinks.each(function () {
            if ($(this).attr('href') === currentPath) {
                setActiveLink(this);
                activeLinkFound = true;
            }
        });

        if (!activeLinkFound) {
            setActiveLink(navLinks.first());
        }
    });
});