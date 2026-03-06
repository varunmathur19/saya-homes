<?php
$pret = $_SERVER['PHP_SELF'];
$name_array = explode('/', $pret);
$count = count($name_array);
$page_name = $name_array[$count - 1];

// Get protocol
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';

// Get host (use HTTP_HOST for better localhost support)
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'localhost');

// Get the base path (subdirectory if exists)
$script_dir = dirname($_SERVER['SCRIPT_NAME']);

// On some Windows + rewrite cases SCRIPT_NAME can be a filesystem path (C:/...).
// If that happens, derive web base path from REQUEST_URI instead.
if (strpos($script_dir, ':') !== false) {
    $request_path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $script_dir = dirname($request_path ?: '/');
}

$base_path = ($script_dir === '/' || $script_dir === '\\') ? '' : rtrim($script_dir, '/');

// Build base URL
$base_url = $protocol . $host . $base_path;
$asset_version = '20260305';


// Remove the .php extension
$page_title = pathinfo($page_name, PATHINFO_FILENAME);

// Replace hyphens with spaces
$page_title = ucwords(str_replace('-', ' ', $page_title));
?>

<link rel="canonical" href="https://sayahomes.com<?php echo ($_SERVER['REQUEST_URI']); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="google-site-verification" content="RICDmxmIkPZK_bjofz8rNKpu1f5nFqsEGO3oAD6ujTA" />
<meta name="robots" content="index, follow" />

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4GP316QNDZ"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-4GP316QNDZ');
</script>


<!-- Google Tag Manager -->
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5QWGJ7VV');</script>
<!-- End Google Tag Manager -->

<!-- Preconnect to external domains for faster loading -->
<link rel="preconnect" href="https://www.googletagmanager.com">
<link rel="preconnect" href="https://unpkg.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://www.googletagmanager.com">
<link rel="dns-prefetch" href="https://unpkg.com">

<!-- Lato & Inter - global font families -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Lato:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

<!-- Favicon -->
<link href="<?= $base_url ?>/images/favicon.png" rel="shortcut icon" type="image/png">

<!-- Critical CSS - Load immediately for above-the-fold content -->
<link rel="stylesheet" href="<?= $base_url ?>/css/bootstrap.min.css?v=<?= $asset_version ?>" />
<link rel="stylesheet" href="<?= $base_url ?>/css/new_layout.css?v=<?= $asset_version ?>" />
<!-- <link rel="stylesheet" href="<?= $base_url ?>/css/custom-9-jul.css" /> -->

<!-- Non-critical CSS - Load with media="print" then switch to "all" for async loading -->
<!-- <link rel="stylesheet" href="<?= $base_url ?>/css/all.min.css" media="print" onload="this.media='all'">
<noscript>
    <link rel="stylesheet" href="<?= $base_url ?>/css/all.min.css">
</noscript> -->

<link rel="stylesheet" href="<?= $base_url ?>/css/swiper-bundle.min.css?v=<?= $asset_version ?>" media="print" onload="this.media='all'">
<noscript>
    <link rel="stylesheet" href="<?= $base_url ?>/css/swiper-bundle.min.css?v=<?= $asset_version ?>">
</noscript>

<!-- <link rel="stylesheet" href="<?= $base_url ?>/css/jquery.magnify.css" media="print" onload="this.media='all'">
<noscript>
    <link rel="stylesheet" href="<?= $base_url ?>/css/jquery.magnify.css">
</noscript> -->

<!-- <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css" media="print" onload="this.media='all'">
<noscript>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
</noscript> -->

<!-- <link rel="stylesheet" href="<?= $base_url ?>/fonts/midsun/style.css" media="print" onload="this.media='all'">
<noscript>
    <link rel="stylesheet" href="<?= $base_url ?>/fonts/midsun/style.css">
</noscript> -->

<!-- <link rel="stylesheet" href="<?= $base_url ?>/css/props-23-06.css" media="print" onload="this.media='all'">
<noscript>
    <link rel="stylesheet" href="<?= $base_url ?>/css/props-23-06.css">
</noscript> -->

<!-- <link rel="stylesheet" href="<?= $base_url ?>/css/responsive.css" media="print" onload="this.media='all'">
<noscript>
    <link rel="stylesheet" href="<?= $base_url ?>/css/responsive.css">
</noscript> -->