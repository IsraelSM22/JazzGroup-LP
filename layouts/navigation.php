<?php
/**
 * Created by PhpStorm.
 * User: oscarsanchez
 * Date: 2/1/19
 * Time: 14:07
 */

$BASE_URL = "/"

?>

<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="<?php echo $BASE_URL;?>">
        <img src="<?php echo $BASE_URL ?>assets/images/logo-airfrance.svg" width="250"
             alt="Jazz Group">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse w-100" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <li class="nav-item home">
                <a class="nav-link" href="<?php echo $BASE_URL;?>">INICIO</a>
            </li>

            <li class="nav-item participations">
                <a class="nav-link" href="<?php echo $BASE_URL;?>participaciones">PARTICIPACIONES</a>
            </li>

            <li class="nav-item terms">
                <a class="nav-link" href="<?php echo $BASE_URL;?>condiciones">CONDICIONES</a>
            </li>
        </ul>
    </div>
</nav>