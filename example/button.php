<?php
    require_once '../src/BootstrapTwitter/Autoloader.php';

    $button = new BootstrapTwitterUIButton();
    echo $button;
    $button = new BootstrapTwitterUIButton();
    echo $button->setValue('Primary Button')->setColorType('primary');
    $button = new BootstrapTwitterUIButton();
    echo $button->setValue('Info Button')->setColorType('info');
    $button = new BootstrapTwitterUIButton();
    echo $button->setValue('Success Button')->setColorType('success');
    $button = new BootstrapTwitterUIButton();
    echo $button->setValue('Danger Button')->setColorType('danger');
?>