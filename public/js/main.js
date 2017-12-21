$(document).ready(function () {

    //Active navigation links
    $('nav a.nav-link[href="' + location.pathname + '"]').closest('li').addClass('active');
    if (location.pathname === '/pages' || location.pathname === '/pages/' || location.pathname === '/pages/index') {
        $('nav li.nav-item').first().addClass('active');
    }


});