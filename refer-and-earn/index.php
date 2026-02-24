<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>Saya Piazza</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="./css/custom.css">
</head>

<body>
    <main>
        <div class="logo"><img src="./images/logo-saya-w.svg" alt="Saya"></div>
        <div id="banner" class="banner carousel carousel-fade slide" data-bs-pause="false" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="images/banner-refer-and-earn.webp">
                        <source media="(min-width: 540px)" srcset="images/banner-refer-and-earn-tab.webp">
                        <img src="images/banner-refer-and-earn-mob.webp" alt="Ambience Interiors">
                    </picture>
                </div>
                <div class="carousel-item">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="images/banner-share-your-saya-story.webp">
                        <source media="(min-width: 540px)" srcset="images/banner-share-your-saya-story-tab.webp">
                        <img src="images/banner-share-your-saya-story-mob.webp" alt="Ambience Interiors">
                    </picture>
                </div>
            </div>
        </div>

        <div class="w-100 padding position-relative overflow-hidden">
            <div class="container-lg">
                <div class="row gap-row align-items-center">
                    <div class="col-md-8">
                        <div class="randomText randomText-left">
                            <h1 class="h2 smallHeading text-gradient">Refer and Earn</h1>
                            <p class="mb-0">Refer someone to <b class="fw-bolder h5 mb-0 text-blue">SAYA</b> and earn <b class="fw-bolder h5 mb-0 text-primary">₹2,22,222</b> when they book a unit with us in any of the project.</p>
                        </div>
                    </div>
                    <div class="col-md-4 imgBox">
                        <div class="floatingImg carousel carousel-fade slide mb-0 mb-md-3" data-bs-interval="2000" data-bs-pause="false" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img src="images/gold-avenue.webp" alt=""></div>
                                <div class="carousel-item"><img src="images/piazza.webp" alt=""></div>
                                <div class="carousel-item"><img src="images/south-x.webp" alt=""></div>
                            </div>
                        </div>
                        <div class="floatingImg floatingImg2"><img src="images/mic.webp" alt=""></div>
                    </div>
                </div>
            </div>            
        </div>
        <hr>
        <div class="w-100 padding position-relative overflow-hidden">
            <div class="container-lg">
                <div class="row gap-row flex-row-reverse align-items-center">
                    <div class="col-md-8">
                        <div class="randomText randomText-right ms-auto me-0">
                            <h2 class="h2 smallHeading text-gradient">Share Your SAYA Story</h2>
                            <p>Post your story with <b class="fw-bolder h5 mb-0 text-blue">SAYA</b> on your social media.</p>
                            <p class="fw-bold">Tag us, follow us and subscribe us:</p>
                            <ul class="list-inline socialBtn mb-5">
                                <li class="list-inline-item"><i class="fab fa-facebook-f"></i></li>
                                <li class="list-inline-item"><i class="fab fa-instagram"></i></li>
                                <li class="list-inline-item"><i class="fab fa-linkedin-in"></i></li>
                                <li class="list-inline-item"><i class="fab fa-youtube"></i></li>
                            </ul>
                            <h5 class="mb-0 fw-bold">Stand a chance to win <span class="text-primary">₹2,22,222!*</span></h5>
                        </div>
                    </div>
                    <div class="col-md-4 imgBox">
                        <div class="floatingImg mb-0 mb-md-3"><img src="images/insta-ss1.webp" alt=""></div>
                        <div class="floatingImg floatingImg2"><img src="images/mic.webp" alt=""></div>
                    </div>
                </div>
            </div>            
        </div>
        <footer class="text-center">
            <div class="container-lg">© Saya 2024</div>
        </footer>
    </main>

    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>