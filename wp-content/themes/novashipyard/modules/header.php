<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Shipyard | <?= $pageTitle; ?></title>
    <link rel="shortcut icon" href="../assets/image/favicon.png" type="image/x-icon">
    <!-- Önbellek tutmasın diye ekledim silersin -->
    <link rel="stylesheet" href="../assets/css/main.min.css?id<?= rand(); ?>">
</head>

<body>

    <header>
        <div class="container">
            <div class="wrapper">
                <div class="logo-field">
                    <a href="page-homepage.php">
                        <?php include 'modules/logo.php' ?>
                    </a>
                </div>
                <div class="menu-field">
                    <?php include 'modules/menu.php' ?>
                </div>
            </div>
        </div>
    </header>