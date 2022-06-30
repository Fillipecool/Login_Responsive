<?php

    require_once 'app/core/Core.php';

    require_once 'app/controller/LoginController.php';

    $core = new Core;
    $core->start($_GET);