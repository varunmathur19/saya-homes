<!doctype html>
<html lang="en">
<head>
    <?php include_once('new-css.php'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="5; url=<?= $base_url ?>/">
    <title>Thank You | Saya Homes</title>
    <meta name="robots" content="noindex, nofollow">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        .new-thanku-page {
            min-height: 100vh;
            background: #f1f3f7;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px;
            font-family: "Inter", sans-serif;
        }

        .new-thanku-wrap {
            width: min(720px, 100%);
            text-align: center;
        }

        .new-thanku-logo {
            width: min(170px, 45vw);
            margin: 0 auto 20px;
            display: block;
        }

        .new-thanku-image {
            width: min(680px, 94vw);
            max-height: 44vh;
            object-fit: cover;
            border-radius: 16px;
            box-shadow: 0 18px 36px rgba(16, 19, 34, 0.16);
            display: block;
            margin: 0 auto 20px;
        }

        .new-thanku-title {
            margin: 0 0 8px;
            font-family: "Lato", sans-serif;
            font-size: clamp(34px, 5vw, 52px);
            color: #101322;
            line-height: 1.08;
        }

        .new-thanku-text {
            margin: 0 0 20px;
            font-family: "Inter", sans-serif;
            font-size: 20px;
            color: #2f3c4f;
            line-height: 1.4;
        }

        .project-gold-about-btn {
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            gap: 7px;
            padding: 5px 22px;
            border-radius: 50px;
            text-decoration: none;
            color: #fff;
            font-weight: 400;
            font-size: 14px;
            line-height: 100%;
            background: #2c3560;
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            width: 160px;
            margin: 0 auto;
        }

        .project-gold-about-btn .project-gold-about-btn-text {
            position: relative;
            z-index: 1;
        }

        .project-gold-about-btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--color-accent, #f6883e);
            transition: left 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 0;
        }

        .project-gold-about-btn:hover::before {
            left: 0;
        }

        .project-gold-about-btn:hover {
            background: var(--color-accent, #f6883e);
            animation: backgroundPulse 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            color: white !important;
        }

        .project-gold-about-btn-arrow {
            height: 30px;
            width: 30px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
            z-index: 1;
        }

        .project-gold-about-btn-arrow::before {
            content: "";
            position: absolute;
            height: 10px;
            width: 10px;
            background: white;
            border-radius: 50%;
            transition: transform 0.5s;
            transform: scale(1);
        }

        .project-gold-about-btn-arrow img {
            width: 14px;
            height: 20px;
            transform: translate(-100%, 100%);
            transition: transform 0.5s;
            z-index: 1;
            position: relative;
            display: block;
        }

        .project-gold-about-btn:hover .project-gold-about-btn-arrow::before {
            transform: scale(3);
        }

        .project-gold-about-btn:hover .project-gold-about-btn-arrow img {
            transform: translate(0%, 0%);
        }

        @media (max-width: 600px) {
            .new-thanku-title {
                font-size: 32px;
            }

            .new-thanku-text {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <main class="new-thanku-page">
        <section class="new-thanku-wrap">
            <img src="<?= $base_url ?>/images/logo.svg" alt="Saya Homes" class="new-thanku-logo">
            <img src="<?= $base_url ?>/images/new_theme/biztopgallery6.png" alt="Saya Homes" class="new-thanku-image">
            <h1 class="new-thanku-title">Thanks for submitting!</h1>
            <p class="new-thanku-text">your message has been sent!</p>
            <a href="<?= $base_url ?>/" class="project-gold-about-btn">
                <span class="project-gold-about-btn-text">Go Home</span>
                <div class="project-gold-about-btn-arrow">
                    <img src="<?= $base_url ?>/images/new_theme/icons/button_hover_icon.svg" alt="">
                </div>
            </a>
        </section>
    </main>
</body>
</html>
