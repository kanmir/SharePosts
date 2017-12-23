$(document).ready(function () {

    //Active navigation links

    $('nav a.nav-link[href^="' + location.pathname.split('/')[1] + '"]').closest('li').addClass('active');
    if (location.pathname === '/pages' || location.pathname === '/pages/' || location.pathname === '/pages/index' || location.pathname === '/') {
        $('nav li.nav-item').first().addClass('active');
    } else if (location.pathname.split('/')[1] === 'users') {
        $('nav a.nav-link[href="' + location.pathname + '"]').closest('li').addClass('active');
    } else {
        $('nav a.nav-link[href^="/' + location.pathname.split('/')[1] + '"]').closest('li').addClass('active');
    }

});