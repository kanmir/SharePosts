<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary mb-10">
    <div class="container">
    <a class="navbar-brand" href="<?= URLROOT ?>"><?= SITENAME ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pages/about"><i class="fa fa-bars" aria-hidden="true"></i> About</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link" href="/users/register"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/users/login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
            </li>
        </ul>

    </div>
</nav>