$(document).ready(function () {
    $(document).on('DOMNodeInserted', '.sidelink', function () {
        const navLinks = $('.side-link');

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