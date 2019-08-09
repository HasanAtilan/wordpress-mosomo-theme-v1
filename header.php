
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if ( is_single() ) { ?><?php wp_title(''); ?><?php } else { ?><?php bloginfo('name'); ?><?php } ?></title>


<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Libre+Barcode+39+Extended+Text' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fontawesome/css/font-awesome.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fontawesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css"/>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/hint.css" type="text/css"/>
  

<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<link href="https://rizasabuncu.com/assets/css/nes.min.css" rel="stylesheet" /

<?php for ($ar=1; $ar<=get_option('posts_per_page'); $ar++) { ?>
<script type="text/javascript">
$(function(){
$('.acilyaziacil<?php echo $ar; ?>').click(function () {
$('.kirkharamilergeliyor<?php echo $ar; ?>').slideToggle(); }); });
</script>
<?php } ?>

	<script>
		$(function(){
			
			$(".cepecevre").hide().delay(1000).fadeIn();
			
		});
	</script>

<meta name="language" content="tr-TR" />
<meta name="location" content="türkiye, tr, turkey" />
<meta name="robots" content="all" />

<?php wp_head(); ?>
<?php echo get_option('analytics'); ?>


    <link rel="alternate" href="/atom.xml" title="1v3m&#39;in bloğu" type="application/atom+xml">
  
  
    <link rel="icon" href="/favicon.png" type="image/x-icon">
  
  
    
    

</head>

 <style>
    @charset "utf-8";
    @import url(https://fonts.googleapis.com/css?family=Press+Start+2P);
    
    body {
      padding: 0 2rem;
      margin: 0 2rem;
    }
    
    #nescss > .container {
      max-width: 980px;
      margin: 0 auto;
      margin-top: 150px;
    }
    
    /* Header */
    header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 9;
      border-bottom: 4px solid #D3D3D3;
      background-color: white;
    }
    
    header > .container {
      display: flex;
      align-items: baseline;
      max-width: 980px;
      margin: 0 auto;
      padding-top: 1rem;
      transition: all 0.2s ease;
    }
    
    header > .container > .nav-brand {
      margin-right: auto;
    }
    header > .container > .social-button {
      margin-left: auto;
    }
    
    .nav-brand .brand-logo {
      margin-right: 1rem;
    }
    .nav-brand > a {
      color: #212529;
      text-decoration: none;
    }
    
    .social-buttons p {
      margin-bottom: 0;
    }
    
    /* Header-sticky */
    header.sticky > .container {
      font-size: 0.8rem;
      padding: 0;
      align-items: center;
    }
    header.sticky .nav-brand h1 {
      margin: 0;
    }
    header.sticky .nav-brand p {
      display: none;
      margin-bottom: 0;
      font-size: 0.6rem;
    }
    
    /* Main */
    .main-content {
      margin-bottom: 4rem;
    }
    
    /* Footer */
    footer {
      text-align: center;
      margin-bottom: 2rem;
    }
    footer a {
      color: #333;
      text-decoration: none;
    }
    
    h2 > a {
      margin-right: 1rem;
    }
    
    .topic {
      margin-bottom: 3rem;
    }
    
    /* github link */
    .github-link {
      position: fixed;
      top: 100px;
      right: -240px;
      z-index: 999;
      display: flex;
      height: 100px;
      color: #333;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    .github-link.active {
      right: 10px;
    }
    .github-link:hover {
      text-decoration: none;
    }
    .github-link > p.nes-balloon {
      align-self: flex-start;
      padding: 0.2rem 0.5rem;
      font-size: 0.8rem;
      color: #333;
    }
    .github-link > i.nes-octocat {
      align-self: flex-end;
    }
    
    /* Showcase */
    section.showcase {
      margin-top: 2.5rem;
    }
    section.showcase > section.nes-container {
      padding-bottom: 2.5rem;
    }
    section.showcase > section.nes-container,
    section.showcase > section.samplecode {
      position: relative;
    }
    .nes-btn.showcode {
      position: absolute;
      font-size: 12px;
      bottom: 0px;
      right: -4px;
    }
    .nes-btn.copycode {
      position: absolute;
      font-size: 12px;
      top: 0;
      right: 0px;
    }
    
    section.showcase > section.samplecode > pre code {
      font-size: 13px;
      line-height: 1.5;
      padding: 1.5rem;
    }
    
    .item {
      margin-bottom: -1rem;
    }
    .item > * {
      margin-bottom: 1.5rem !important;
    }
    
    /* Containers */
    .item.containers > .nes-container {
      display: inline-block;
      max-width: 400px;
    }
    
    /* Balloons sample */
    section.message-list {
      display: flex;
      flex-direction: column;
    }
    .message-list > .message {
      display: flex;
      margin-top: 2rem;
    }
    .message-list > .message > .nes-balloon {
      max-width: 550px;
    }
    .message-list > .message i {
      align-self: flex-end;
    }
    .message-list > .message.-left {
      align-self: flex-start;
    }
    .message-list > .message.-right {
      align-self: flex-end;
    }
    .message-list > .message.-left i {
      margin-right: 2rem;
    }
    .message-list > .message.-right i {
      margin-left: 2rem;
    }
    
    .icon-list > .blur-filter {
      filter: blur(10px);
    }
    
    /* Copied balloon */
    .nes-balloon.copied-balloon {
      position: absolute;
      display: none;
      padding: 1rem;
      box-shadow: 0 5px 20px 5px rgba(0,0,0,.6);
      z-index: 1;
    }
    
    /* Topic */
    h3.topic-title {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
    }
    
    h3.topic-title > i {
      margin-right: 1.5rem;
    }
    
    /* coreteam */
    .coreteam-members {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .nes-container.member-card {
      display: flex;
      padding: 1rem 1.5rem;
      width: 470px;
      margin-bottom: 2rem;
    }
    
    .member-card .avatar > img {
      display: block;
      width: 80px;
      height: 80px;
      border-radius: 50%;
    }
    .member-card > .profile {
      margin-left: 1.5rem;
    }
    .member-card > .profile > .name {
      font-size: 20px;
    }
    
    /* Contributors */
    .contributor {
      display: inline-block;
      margin: 1rem;
      text-align: center;
      width: 160px;
    }
    .contributor > p {
      margin: .5rem;
      font-size: 12px;
    }
    .contributor img.nes-avatar {
      transition: all .4s;
      display: inline-block;
    }
    .contributor:hover {
      text-decoration: none;
      opacity: 0.7;
    }
    
    
    .nes-container.is-dark > .title a {
      color:#fff;
      text-decoration:none;
    }
    
    .nes-container > .title a {
      color:#333;
      text-decoration:none;
    }
    
    
    /* Articles */
    .article-link > .title a {
      color: #333;
    }
    .article-link > .title span {
      margin-left: 1rem;
    }
    
    /* Scroll back to top */
    .scroll-btn {
      position: fixed;
      bottom: -60px;
      right: 2rem;
      box-shadow: 0 5px 20px rgba(0,0,0,.6);
      transition: all 0.3s ease;
    }
    .scroll-btn.active {
      bottom: 25px;
    }
    .scroll-btn > span {
      display: block;
      transform: rotateZ(90deg);
    }
    
    img.lazy {
      background-color: #D3D3D3;
    }
    
    @media screen and (max-width: calc(980px - 4rem)) {
      header > .container {
        margin: 0 4rem;
      }
    }
    
    @media screen and (max-width: 768px) {
      body {
        margin: 2rem 0.5rem;
        padding: 0;
      }
      
      header > .container {
        margin: 0 0.5rem;
      }
      
      .github-link {
        display: none;
      }
      
      .message-list > .message > .nes-balloon {
        max-width: 60%;
      }
    }
    
    @media screen and (max-width: 580px) {
      #nescss > .container {
        margin-top: 190px;
      }
    }
  </style>
<script type="56284fa6014188619804dd5b-text/javascript">
    if (window.navigator.userAgent.toLocaleLowerCase().indexOf('trident') !== -1) {
      window.alert('desteklenmiyor.')
    }
    
  </script>
	  

      
    

</head>
<body>
<div id="nescss">
<header :class="{ sticky: scrollPos > 50 }">
<div class="container">
<div class="nav-brand">
<h1>
HasanAtilan
</h1>
<p>Back-end Developer @ Hasan ATİLAN</p>
</div>
<div class="social-buttons">
<div class="share">
<a href="https://twitter.com/netmrhasan" target="_blank"><i class="nes-icon twitter"></i></a>
<a href="https://facebook.com/netmrhasan" target="_blank"><i class="nes-icon facebook"></i></a>
<a href="https://www.linkedin.com/in/hasanatilan/" target="_blank"><i class="nes-icon linkedin"></i></a>
<a href="https://instagram.com/netmrhasan" target="_blank"><i class="nes-icon instagram"></i></a>
<a href="https://github.com/hasanatilan" target="_blank"><i class="nes-icon github"></i></a>
</div>
</div>
</div>
</header>
    