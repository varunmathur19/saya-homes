<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saya Homes | Construction Updates</title>
    <meta name="description" content="Track the progress of our Saya Southx, Saya Biztop and Saya Piazza. Stay informed with the latest construction updates of Saya Homes real estate projects." />
    <meta name="keywords" content="construction updates, residential projects updates, commercial projects updates" />
    <?php include_once('inc-css.php') ?>
</head>

<body>
    <?php include_once('inc-header.php') ?>
    <main>
        <div class="inside-banner w-100">
            <picture class="h-100 w-100">
                <source media="(max-width: 500px)" srcset="./images/saya-south-x-banner-sm.webp">
                <source media="(max-width: 1400px)" srcset="./images/saya-south-x-banner-d.webp">
                <img src="./images/south-x/saya-south-x-banner.webp" class="h-100 object-cover" alt="...">
            </picture>
            <div class="container-lg position-absolute mx-auto h-100">
                <div class="bannerText" data-aos="fade-in">
                    <div class="project-title-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Construction Update</li>
                        </ol>
                        <h1 class="h1 title">Construction Update</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 position-relative overflow-hidden section-support padding bg-secondary">
            <div class="container-lg">
                <div class="heading mx-auto text-center">
                    <h2 class="h2 mb-0 text-primary">Construction Update</h2> 
                    <!-- <h2 class="h2 mb-0 text-primary">As on <?= date('F Y') ?></h2> -->
                </div>
                <div class="row g-4">
                    <div class="col-md-6 blogBox bogBlogBox newsBox">
                        <a href="#video-Modal" class="inner h-100 position-relative" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/LF59AhJwtu4?rel=0&amp;autoplay=1" data-title="Saya Piazza">
                            <div class="img-fluid mt-0 position-relative">
                                <img src="https://sayahomes.com/images/LF59AhJwtu4.webp" alt="Saya Homes" class="h-100 object-cover">
                                <button class="playBtn"><i class="fa fa-play"></i></button>
                            </div>
                            <article class="position-absolute">
                                <h5 class="blog-title text-white text-midsun mb-0">Saya Piazza</h5>
                            </article>
                        </a>
                    </div>
                    <div class="col-md-6 blogBox bogBlogBox newsBox">
                        <a href="#video-Modal" class="inner h-100 position-relative" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/EK6U9D6Au7E?rel=0&amp;autoplay=1" data-title="Saya South X">
                            <div class="img-fluid mt-0 position-relative">
                                <img src="https://sayahomes.com/images/EK6U9D6Au7E.webp" alt="Saya Homes" class="h-100 object-cover">
                                <button class="playBtn"><i class="fa fa-play"></i></button>
                            </div>
                            <article class="position-absolute">
                                <h5 class="blog-title text-white text-midsun mb-0">Saya South X</h5>
                            </article>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
    <?php include_once('inc-footer.php') ?>

    <div class="modal fade" id="video-Modal" tabindex="-1" role="dialog" aria-labelledby="Videos" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content border-0 shadow rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title text-white"></h5>
                    <button type="button" class="close videoClose" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe width="100%" height="315" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('inc-script.php') ?>
    <script>
        // video modal
        const videoModalEl = document.getElementById('video-Modal');
        let videoModal;

        if (videoModalEl) {
            videoModal = new bootstrap.Modal(videoModalEl, {
                backdrop: 'static'
            });

            // Populate title and iframe src on modal show
            videoModalEl.addEventListener('show.bs.modal', event => {
                const button = event.relatedTarget;
                const title = button.getAttribute("data-title");
                const src = button.getAttribute("data-src");

                const modalTitle = videoModalEl.querySelector('.modal-title');
                const iframe = videoModalEl.querySelector('.modal-body iframe');

                if (modalTitle) modalTitle.innerHTML = title;
                if (iframe) iframe.setAttribute("src", src);
            });

            // Clear iframe src when modal is hidden (e.g. via close button or programmatic hide)
            videoModalEl.addEventListener('hidden.bs.modal', () => {
                const iframe = videoModalEl.querySelector('.modal-body iframe');
                if (iframe) iframe.removeAttribute('src');
            });
        }

        // Clear iframe when .videoClose is clicked (in case you want to manually close too)
        document.querySelectorAll(".videoClose").forEach(btn => {
            btn.addEventListener("click", function() {
                const iframe = videoModalEl?.querySelector('.modal-body iframe');
                if (iframe) iframe.removeAttribute("src");

                // Optionally hide the modal manually if .videoClose is outside the modal structure
                if (videoModal) videoModal.hide();
            });
        });
        // video modal
    </script>
</body>

</html>