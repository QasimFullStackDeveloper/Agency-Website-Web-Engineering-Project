$(document).ready(function () {
    $('#my-navbar').load('/assets/pages/navbar.html');
    $('#my-footer').load('/assets/pages/footer.html');
});


// Used in Footer Icon for going to Top
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// $(document).ready(function () {
//     $(document).on('DOMNodeInserted', '.navbar', function () {
//         const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

//         function setActiveLink(clickedLink) {
//             navLinks.forEach(link => link.classList.remove('active'));

//             if (clickedLink) {
//                 clickedLink.classList.add('active');
//             }
//         }

//         navLinks.forEach(navLink => {
//             navLink.addEventListener('click', function () {
//                 setActiveLink(this);
//             });
//         });

//         const currentPath = window.location.pathname;

//         let activeLinkFound = false;
//         navLinks.forEach(navLink => {
//             if (navLink.getAttribute('href') === currentPath) {
//                 setActiveLink(navLink);
//                 activeLinkFound = true;
//             }
//         });

//         if (!activeLinkFound) {
//             setActiveLink(navLinks[0]);
//         }
//     });
// });

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

    $(document).on('DOMNodeInserted', '.ActiveSide_bar', function () {
        const sideLinks = $('.sidebar .side-link');

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
            setActiveLink(sideLinks.first());
        }
    });
});