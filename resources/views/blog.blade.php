<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vinero - Very Clean and Minimal Portfolio Website Template</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="vlt-site-holder animsition vlt-footer-fixed">
        <div class="vlt-content-holder">
            <header class="vlt-header-holder vlt-header-fixed" data-header-fixed="1">
                <div class="container mx-auto">
                    <div class="vlt-header-inner flex justify-between items-center py-4">
                        <div class="vlt-header-left">
                            <a href="index.html" class="vlt-site-logo">
                                <img src="assets/img/logo.png" alt="Vinero" class="max-h-8" style="max-height: 13px">
                            </a>
                        </div>
                        <div class="vlt-header-right">
                            <div class="vlt-menu-toggle vlt-fullscreen-menu-toggle" data-before-text="Menu">
                                <span class="line line-one"><span class="inner"></span></span>
                                <span class="line line-two"><span class="inner"></span></span>
                                <span class="line line-three"><span class="inner"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- /.vlt-header-holder vlt-header-fixed -->
            <div class="vlt-navigation-fullscreen-holder">
                <div class="vlt-navigation-fullscreen">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="menu-item-has-children">
                            <a href="#" class="no-anims">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="about-me.html">About Me</a></li>
                                <li><a href="elements.html">Elements</a></li>
                                <li><a href="404.html">Page 404</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" class="no-anims">Stories</a>
                            <ul class="sub-menu">
                                <li><a href="blog-with-sidebar.html">Stories</a></li>
                                <li><a href="blog-fullwidth.html">Stories Full Width</a></li>
                                <li><a href="blog-masonry.html">Stories Masonry</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" class="no-anims">Portfolio</a>
                            <ul class="sub-menu">
                                <li><a href="portfolio-masonry.html">Portfolio Grid</a></li>
                                <li><a href="portfolio-masonry-lightbox.html">Portfolio Fancybox</a></li>
                                <li><a href="portfolio-dribbble.html">Dribbble Shots</a></li>
                                <li><a href="portfolio-ranfolio.html">Ranfolio</a></li>
                                <li><a href="portfolio-hoverfolio.html">Hoverfolio</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <div class="vlt-navigation-socials mt-8">
                        <ul>
                            <li><a href="#" class="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" class="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="tooltip" title="YouTube"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- /.vlt-navigation-socials -->
                </div>
            </div>
            <!-- /.vlt-navigation-fullscreen-holder -->
            <div class="vlt-hero-title-holder jarallax" style="background-image: url('assets/img/index.jpg');">
                <div class="vlt-hero-title-inner text-center py-16">
                    <h1 class="vlt-hero-title text-3xl text-white font-semibold">We are Vinero</h1>
                    <p class="vlt-hero-subtitle text-xl text-white">Work hard. Dream big.</p>
                </div>
            </div>
            <!-- /.vlt-hero-title-holder -->
            <main class="vlt-main-holder vlt-main-padding">
                <div class="container mx-auto">
                    <div class="vlt-portfolio-grid-filters flex justify-center mt-10">
                        <div data-filter="*" class="cbp-filter-item cbp-filter-item-active cursor-pointer mx-2"><span class="font-semibold">All</span></div>
                        <div data-filter=".portfolio_category-branding" class="cbp-filter-item cursor-pointer mx-2"><span class="font-semibold">Branding</span></div>
                        <div data-filter=".portfolio_category-design" class="cbp-filter-item cursor-pointer mx-2"><span class="font-semibold">Design</span></div>
                        <div data-filter=".portfolio_category-photo" class="cbp-filter-item cursor-pointer mx-2"><span class="font-semibold">Photo</span></div>
                    </div>
                    <div class="vlt-portfolio-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
                        <article class="cbp-item vlt-portfolio-grid-item vlt-portfolio-style2 portfolio_category-photo">
                            <div class="vlt-portfolio-grid-image">
                                <a class="vlt-portfolio-grid-link" href="portfolio-single.html">
                                    <img src="assets/img/portfolio/1.jpg" alt="">
                                </a>
                            </div>
                            <div class="vlt-portfolio-grid-content p-4">
                                <h5 class="vlt-portfolio-grid-title text-lg font-semibold">Tkalnia Dywanów</h5>
                                <p class="vlt-portfolio-grid-cat text-sm">Photo</p>
                            </div>
                        </article>
                        <!-- /.cbp-item  -->
                        <!-- Add more portfolio items similarly -->
                    </div>
                    <nav class="vlt-pagination-load-more-btn text-center mt-10" data-max-pages="1">
                        <a href="load-more-portfolio-page-1.html" class="vlt-btn vlt-btn-primary vlt-btn-ajax-load py-2 px-4 bg-blue-600 text-white rounded-full">Load More</a>
                    </nav>
                </div>
            </main>
            <!-- /.vlt-main-holder vlt-main-padding -->
        </div>
        <!-- /.vlt-content-holder -->
        <footer class="vlt-footer-holder vlt-footer-minimal" data-footer-fixed="1">
            <div class="vlt-footer-inner">
                <div class="container mx-auto">
                    <div class="text-center py-8">
                        <a href="index.html" class="vlt-site-logo">
                            <img src="assets/img/logo.png" alt="Vinero" class="max-h-8" style="max-height: 13px">
                        </a>
                        <div class="vlt-footer-menu mt-4">
                            <div>
                                <ul class="flex justify-center space-x-8">
                                    <li><a href="#">Works</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Purchase</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="vlt-footer-copyright mt-6 text-gray-600">
                            <p>Copyright © 2017 Vinero. Powered by <a href="#" class="vlt-link reverse text-blue-600">VLThemes</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.vlt-footer-holder -->
    </div>
    <!-- /.vlt-site-holder -->
    <a href="#" class="vlt-back-to-top hidden"><i class="fa fa-angle-up"></i></a>
    <!-- /.vlt-back-to-top -->
</body>
<!-- SCRIPTS -->
<script src="assets/vendors/jquery.min.js"></script>
<script src="assets/scripts/plugins.min.js"></script>
<script type="text/javascript">
    jQuery.noConflict()(function($){
        var gridContainer = $('#cubeportfolio');
        gridContainer.imagesLoaded(function(){
            gridContainer.cubeportfolio({
                defaultFilter: '*',
                filters: '.vlt-portfolio-grid-filters',
                animationType: 'fadeOut',
                layoutMode: 'grid', //mosaic
                sortToPreventGaps: true,
                gapHorizontal: 30,
                gapVertical: 30,
                gridAdjustment: 'responsive',
                mediaQueries: [
                    {
                        width: 1170,
                        cols: 3,
                    }, {
                        width: 991,
                        cols: 3,
                    }, {
                        width: 767,
                        cols: 2,
                    }, {
                        width: 575,
                        cols: 1,
                    }
                ],
                displayType: 'default',
                displayTypeSpeed: 150,
            });
        });
    });
</script>
<script src="assets/scripts/script.js"></script>
</html>
