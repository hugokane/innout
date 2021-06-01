<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <title>In N' Out</title>

    <style>
    .cookieConsentContainer {
        z-index: 999;
        width: 350px;
        min-height: 20px;
        box-sizing: border-box;
        padding: 30px 30px 30px 30px;
        background: #232323;
        overflow: hidden;
        position: fixed;
        bottom: 30px;
        right: 30px;
        display: none
    }

    .cookieConsentContainer .cookieTitle a {
        font-family: OpenSans, arial, sans-serif;
        color: #fff;
        font-size: 22px;
        line-height: 20px;
        display: block
    }

    .cookieConsentContainer .cookieDesc p {
        margin: 0;
        padding: 0;
        font-family: OpenSans, arial, sans-serif;
        color: #fff;
        font-size: 13px;
        line-height: 20px;
        display: block;
        margin-top: 10px
    }

    .cookieConsentContainer .cookieDesc a {
        font-family: OpenSans, arial, sans-serif;
        color: #fff;
        text-decoration: underline
    }

    .cookieConsentContainer .cookieButton a {
        display: inline-block;
        font-family: OpenSans, arial, sans-serif;
        color: #fff;
        font-size: 14px;
        font-weight: 700;
        margin-top: 14px;
        background: #000;
        box-sizing: border-box;
        padding: 15px 24px;
        text-align: center;
        transition: background .3s
    }

    .cookieConsentContainer .cookieButton a:hover {
        cursor: pointer;
        background: #3e9b67
    }

    @media (max-width:980px) {
        .cookieConsentContainer {
            bottom: 0 !important;
            left: 0 !important;
            width: 100% !important
        }
    }
    </style>

</head>

<body>
    <header class="header">
        <div class="logo">
            <i class="icofont-travelling mr-2"></i>
            <span class="font-weight-light">In </span>
            <span class="font-weight-bold mx-2">N'</span>
            <span class="font-weight-light">Out</span>
            <i class="icofont-runner-alt-1 ml-2"></i>
        </div>
        <div class="menu-toggle mx-3">
            <i class="icofont-navigation-menu"></i>
        </div>
        <div class="spacer"></div>
        <div class="dropdown">
            <div class="dropdown-button">
                <img class="avatar" src="<?="http://www.gravatar.com/avatar.php?gravatar_id="
                 . md5(strtolower(trim($_SESSION['user']->email))) ?>" <span class="ml-3">
                <?= $_SESSION['user']->name ?>
                </span>
                <i class="icofont-simple-down mx-2"></i>
            </div>
            <div class="dropdown-content">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="logout.php">
                            <i class="icofont-logout mr-2"></i>
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>