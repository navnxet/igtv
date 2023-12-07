<footer class="footer">
    <div class="container">
        <div class="row row-grid align-items-center my-md">
            <?php if (SHOW_LATEST_DOWNLOADS) { ?>
                <div class="col-lg-4 mb-md">
                    <h4 class="text-center mb-0"><?php language('_FOOTER3'); ?></h4>
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                                <?php showLastDownloads(); ?>
                                <a class="carousel-control-prev" href="#carouselIndicators" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only"><</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselIndicators" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-lg-<?php echo (SHOW_LATEST_DOWNLOADS) ? 8 : 12; ?> text-right">
                <div class="col-lg-12">
                    <h3 class="text-primary font-weight-light mb-2"><?php language('_FOOTER1'); ?></h3>
                    <h4 class="mb-0 font-weight-light"><?php language('_FOOTER2'); ?></h4>
                </div>
                <div class="col-lg-12 text-lg-right btn-wrapper">
                    <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg"
                       data-toggle="tooltip" data-original-title="Follow us">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg"
                       data-toggle="tooltip" data-original-title="Like us">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-instagram btn-lg btn-round"
                       data-toggle="tooltip" data-original-title="Follow us">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-youtube btn-round btn-lg"
                       data-toggle="tooltip" data-original-title="Star on Github">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row align-items-center justify-content-md-between">
            <div class="col-md-6">
                <div class="copyright">
                    &copy; 2020 <a href="<?php echo WEBSITE_URL; ?>" target="_blank"><?php echo WEBSITE_TITLE; ?></a>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="nav nav-footer justify-content-end">
                    <?php generateMenu($menu); ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="./template/default/assets/js/vendor.min.js"></script>
</body>
</html>