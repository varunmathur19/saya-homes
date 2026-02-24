<!DOCTYPE html>
<html>
<head>
<title>Sayah Home | Thank You</title>
	
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	  <link rel="shortcut icon" href="images/Favicon.png" type="image/x-icon" />
	<style>
	
	@font-face {
  font-family: 'Nicholas Bold';
  src: url("fonts/Nicholas Bold.eot");
  src: url("fonts/Nicholas Bold.eot?#iefix") format("embedded-opentype"), url("fonts/Nicholas Bold.woff2") format("woff2");
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'FuturaPT-Book';
  src: url("fonts/FuturaPT-Book.eot");
  src: url("fonts/FuturaPT-Book.eot?#iefix") format("embedded-opentype"), url("fonts/FuturaPT-Book.svg#FuturaPT-Book") format("svg"), url("fonts/FuturaPT-Book.ttf") format("truetype"), url("../fonts/FuturaPT-Book.woff") format("woff"), url("../fonts/FuturaPT-Book.woff2") format("woff2");
  font-weight: normal;
  font-style: normal;
}


	body{margin:0; background:url(images/thankyoubanner.jpg); background-size:cover; overflow:hidden; background-position:center center; height:100vh; }
	.top {border-bottom:1px solid #ffffff54;}
	.container {max-width:1170px; margin:20px auto;}
	.logo img {width:135px; }
    .thanku {text-align:center;}
   
   /* body::before {
    content: '';
    background: rgba(0,0,0,0.5);
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    z-index: -1;
}*/

.thanku {max-width:720px; margin:0 auto; padding:15px;}
.thanku h2 {color:#fff; font-family: 'Nicholas Bold'; font-size:55px; position:relative; margin-bottom:0; margin-top:15px;}
.thanku h2::before {height:1px; top:54%; width:30%; background:#ffffff54; content:''; position:absolute; left:0;}
.thanku h2::after {height:1px; top:54%; width:30%; background:#ffffff54; content:''; position:absolute; right:0;}
.thanku p {border:1px solid #ffffff54; color:#ffffffd9; padding:2px 10px ; font-family: 'FuturaPT-Book'; font-size:25px; margin-top:10px;}



.btns {
  cursor: pointer;
  width: 40px;
  background-color: transparent;
  border: 0;
  border-radius: 3px;
  color: #595959;
  cursor: pointer;
  display: block;
  font-family: serif;
  padding: 10px 0 0 0;
  position: relative;
  text-align: left;
  text-decoration: none;
  -webkit-transition: color 400ms;
  transition: color 400ms;
  font-weight: 600;
  font-family: 'FuturaPT-Book' !important;
}

.btns .arrow {
  display: block;
  position: absolute;
  right: 0;
  top: 53%;
  width: 100%;
}

.btns .arrow:first-of-type::after, .btns .arrow:last-of-type::after {
  background-color: #fff;
  content: ' ';
  display: inline-block;
  position: absolute;
  top: 50%;
  right: 2px;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  width: 45px;
  height: 1px;
  -webkit-transition: right 400ms ease-out;
  transition: right 400ms ease-out;
}

.btns .arrow:first-of-type::before {
  right: auto;
  left: -33px;
  -webkit-transition: left 400ms ease-out;
  transition: left 400ms ease-out;
}

.btns .arrow:first-of-type::after {
  right: auto;
  left: -120px;
  -webkit-transition: left 400ms ease-out;
  transition: left 400ms ease-out;
}

.btns span {
  display: inline-block;
  overflow: hidden;
  padding: 0 60px 0 0;
  position: relative;
  -webkit-transition: padding 400ms;
  transition: padding 400ms;
  font-size: 18px !important;
  color:#fff;
}

.btns:hover {
  color: #fff;
}

.btns:hover span {
  padding-right: 0;
  padding-left: 60px;
}

.btns:hover .arrow:first-of-type::before {
  left: 87px;
}

.btns:hover .arrow:first-of-type::after {
  left: 0;
  opacity: 1;
}

.btns:hover .arrow:last-of-type::before {
  right: -120px;
}

.btns:hover .arrow:last-of-type::after {
  right: -120px;
}

.backbtn {
    position: absolute;
    left: 0;
    right: 0;
    max-width: 1170px;
    margin: 0 auto;
    bottom: 70px;
  
}

.btnsnew {

    display: inline-block;
    background: #000;
    color: #fff;
    font-size: 20px;
    text-decoration:none;
    padding: 6px 40px;
    font-weight: 100;
    transition: all 0.3s ease 0s;
    font-family: 'FuturaPT-Book' !important;
}
	
	@media (max-width:767px){ 
	    
		body{margin:0; background:url(images/thankyoubannermob.jpg); background-size:cover; background-repeat:no-repeat;height: 100vh;}
		.logo {padding-left:15px;}
		.thanku h2 {font-size:45px;}
		.thanku h2::before, .thanku h2::after {width:18%;}
		.thanku p {font-size:17px;}
		.backbtn {padding-left:15px;}
	
	

</style>
	


</head>
<body>

<div class="top">
    <div class="container">
        <div class="logo"><img src="images/logo-black.svg"></div>
        
    </div>
    
</div>

<div class="container">
<div class="thanku" >
	<h2 >Thank You </h2>
	<p>We've received your message. Our team will get back to you shortly.</p>
	<a href="index.php" class="btnsnew"><span><i class="arrow"></i>Back <i class="arrow"></i></span></a> 

</div>
</div>

<!--
<div class="backbtn">
<a href="index.php" class="btnsnew"><span><i class="arrow"></i>Back <i class="arrow"></i></span></a>    
</div>
-->

<script type="text/javascript">
setTimeout(function(){
//window.location.href="https://webtestinglink.net/SayahHome/";
},5000);
</script>

</body>
</html>