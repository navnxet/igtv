<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo WEBSITE_TITLE; ?></title>
    <link href="<?php echo WEBSITE_URL; ?>/template/default/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo WEBSITE_URL; ?>/template/default/assets/css/argon.min.css" rel="stylesheet">
</head>
<body>
<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-expand-lg navbar-dark bg-default">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="<?php echo WEBSITE_URL; ?>"><?php echo WEBSITE_TITLE; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                    aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="<?php echo WEBSITE_URL; ?>">
                                <?php echo WEBSITE_TITLE; ?>
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                    data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <?php generateMenu($menu); ?>
                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item d-none d-lg-block ml-lg-4">
                        <a href="https://codecanyon.net/item/instagram-image-downloader/19253500?ref=NicheOffice"
                           target="_blank" class="btn btn-neutral btn-icon">
                        <span class="btn-inner--icon">
                          <i class="fas fa-shopping-cart"></i>
                        </span>
                            <span class="nav-link-inner--text">Buy Source Code</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>