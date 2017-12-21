<?php

use app\libraries\AssetsManager, app\assets\Assets;

AssetsManager::registerCSS(Assets::$css);
?>
<div class="container-fluid error-container">
    <div class="row row justify-content-md-center align-items-center">
        <div class="col-3">
            <h1 class="display-4"><?= $data['err_number']; ?> </h1>
            <p class="lead"><?= $data['err_message']; ?></p>
            <a href="/" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        </div>

    </div>
</div>

