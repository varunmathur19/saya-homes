<?php
    $pret = $_SERVER['PHP_SELF'];
    $name_array = explode('/', $pret);
    $count = count($name_array);
    $page_name = $name_array[$count - 1];
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://';
    
    // Detect if running on localhost/XAMPP
    $server_name = $_SERVER['SERVER_NAME'];
    $server_addr = isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : '';
    
    // Check if we're running locally by checking SERVER_ADDR or common localhost names
    $is_local = in_array($server_name, ['localhost', '127.0.0.1']) || 
                in_array($server_addr, ['127.0.0.1', '::1']) ||
                strpos($server_name, '.local') !== false ||
                strpos($server_name, '192.168.') !== false ||
                strpos($server_name, '10.0.') !== false ||
                ($server_name === 'sayahomes.com' && in_array($server_addr, ['127.0.0.1', '::1']));
    
    if ($is_local) {
        // For local development, always use localhost (not the domain name) and include the project folder path
        // Calculate base URL from the current script location
        $php_self = str_replace('\\', '/', $_SERVER['PHP_SELF']); // Normalize path separators
        $script_dir = dirname($php_self); // Get directory path
        
        // Build base URL
        if ($script_dir === '/' || $script_dir === '.') {
            // At document root
            $base_url = 'http://localhost';
        } else {
            // In a subdirectory
            $base_url = 'http://localhost' . $script_dir;
        }
        
        // Ensure no trailing slash
        $base_url = rtrim($base_url, '/');
    } else {
        // For production, use the configured domain
        $base_url = $protocol . $server_name;
    }


	// Remove the .php extension
	$page_title = pathinfo($page_name, PATHINFO_FILENAME);

	// Replace hyphens with spaces
	$page_title = ucwords(str_replace('-', ' ', $page_title));
?>

<link rel="canonical" href="https://sayahomes.com<?php echo ($_SERVER['REQUEST_URI']); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 

<meta name="google-site-verification" content="RICDmxmIkPZK_bjofz8rNKpu1f5nFqsEGO3oAD6ujTA" />
<meta name="robots" content="index, follow"/> 

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4GP316QNDZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4GP316QNDZ');
</script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5QWGJ7VV');</script>
<!-- End Google Tag Manager -->
 
<link href="<?= $base_url?>/images/favicon.png" rel="shortcut icon"> 
<link rel="stylesheet" href="<?= $base_url?>/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?= $base_url?>/css/all.min.css" />
<link rel="stylesheet" href="<?= $base_url?>/css/swiper-bundle.min.css" />
<link rel="stylesheet" href="<?= $base_url?>/css/jquery.magnify.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css" type="text/css">
<link rel="stylesheet" href="<?= $base_url?>/fonts/midsun/style.css">
<link rel="stylesheet" href="<?= $base_url?>/css/custom-9-jul.css">
<link rel="stylesheet" href="<?= $base_url?>/css/props-23-06.css">
<link rel="stylesheet" href="<?= $base_url?>/css/responsive.css">