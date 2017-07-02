<?php
$postName = $_GET['name']; 
if ($_GET['cf_refresh']) {
  $dev_refresh = "<meta http-equiv='refresh' content='15'/>";
} else {
  $version = "4.6";
  $token = md5(base64_encode($version));
  $dev_refresh = "<meta name='version_token' content='$token'/>";
}
if ($postName && $postName == "ShinyNewSiteDesign"){
  $title = "Shiny New Site Design!";
  $postTime = "Jan 1st, 2017";
  $postCategory = "Announcements";
  $postCategory2 = "Ramblings";
  $postBody = "Hey There! Welcome to my Shiny new website! There's a BUNCH of new features! <br>I'll list them and link the page when I've managed to get some free time, but until then, feel free to have a look around! <br>(<span style='color:red'>Quick Note: The Downloads and Projects sections are not curently done. Please try to avoid clicking the links to those areas!</span>)";
}
?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
<meta name="google-site-verification" content="AIpS9e6Z2y1q4aVbRn2XXmbxoVMzuQO_GwWG3xtCBRE" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="og:title" content="Joshua Wareing &raquo; Developer"/>
<meta name="og:url" content="http://wareing.xyz"/>
<meta name="og:secure_url" content="https://wareing.xyz"/>
<meta name="og:image" content="/images/14712460_1442865999060850_1504121269905815240_o.jpg"/>
<meta name="og:type" content="website"/>
<meta name="og:description" content="I share code & Random things that happen each day."/>
<?php echo $dev_refresh;?>

<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="/css/reset.css">
<link rel="stylesheet" href="/css/nav.css">
<script src="/js/modernizr.js"></script>
<link rel="stylesheet" href="/css/font-awesome.css">
<link rel="shortcut icon" href="/favicon.ico">
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5JC8FG');</script>
  <!-- End Google Tag Manager -->

<script src="/js/jquery-2.1.1.js"></script>
<script src="/js/main.js"></script> <!-- Resource jQuery -->
<script src="//use.typekit.net/qul4etr.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<title>Joshua Wareing &raquo; Developer</title>
<link rel='dns-prefetch' href='//notify.wareing.xyz' />
<link rel='dns-prefetch' href='//notify-ssl.wareing.xyz' />
<link rel="alternate" type="application/rss+xml" title="Joshua Wareing &rsquo; Feed" href="http://notify.wareing.xyz/blogfeed.xml" />
<link rel="alternate" type="application/rss+xml" title="Joshua Wareing &rsquo; Comments Feed" href="https://notify-ssl.wareing.xyz/blogfeed.xml" />
  <style type="text/css">
img.wp-smiley,
img.emoji {
display: inline !important;
border: none !important;
box-shadow: none !important;
height: 1em !important;
width: 1em !important;
margin: 0 .07em !important;
vertical-align: -0.1em !important;
background: none !important;
padding: 0 !important;
}
</style>
<link rel='stylesheet' id='main-css'  href='/css/style.css?ver=4.6.1' type='text/css' media='all' />
  <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
  
</head>

<body class="home page page-id-2 page-template-default">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JC8FG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<main style="background:#efbe66 url('/images/topo_bg.png'); background-size: 65%; ">
<header class="header">

  <a href="/"><img src="/images/logo.svg" alt="Logo"></a>

  
</header><!-- end header -->

<div class="wrapper">
<div id="intro_content">
    <h1>Blog</h1>
  </div>

  <div id="page_wrapper">   
      <article class="post">

  <p class="date_and_category"><?php echo $postTime;?> <span>&bullet;</span> <a href="/cat.cgi?name=<?php echo $postCategory;?>" rel="category tag"><?php echo $postCategory;?></a>, <a href="/cat.cgi?name=<?php echo $postCategory2;?>" rel="category tag"><?php echo $postCategory2;?></a></p>
        
  <h2 class="title"><?php echo $title;?></h2>
  <p><?php echo $postBody;?></p>
  <button class="read-more" onclick="javascript:window.location.href='/blog.cgi?prevPost=ShinyNewSiteDesign';">Back to Blog</button>

</article>

</div>
</main>

<a href="#cd-nav" class="cd-nav-trigger">Menu
<span class="cd-nav-icon"></span>

<svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
  <circle fill="transparent" stroke="#656e79" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
</svg>
</a>

<div id="cd-nav" class="cd-nav">
<div class="cd-navigation-wrapper">
  <div class="cd-half-block">
    <h2>Where would you like to go??</h2>
    <nav>
      <ul class="cd-primary-nav">
        <li><a href="/">Go Home <span>Beam me up, Scotty</a></li>
        <li><a href="/downloads">Downloads <span>View Downloads Gallery</span></a></li>
        <li><a href="/projects/ongoing">Current Projects <span>Stuff I'm currently working on</span></a></li>
        <li><a href="/projects/completed">Completed Projects<span>Completed Stuff</span></a></li>
        <!-- <li><a href="/2016">2016 Goals <span>I want to make &amp; ship all the things!</span></a></li> -->
        <li><a href="/blog">Blog <span>Thoughts &amp; Videos</span></a></li>
      </ul>
    </nav>
  </div><!-- .cd-half-block -->

  <div class="cd-half-block">
    <address>
      <ul class="cd-contact-info">
        <li><a href="https://twitter.com/wareing_xyz"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.instagram.com/wareinghd"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://github.com/JoshWareing"><i class="fa fa-github"></i></a></li>
      </ul>
    </address>
  </div> <!-- .cd-half-block -->
</div> <!-- .cd-navigation-wrapper -->
</div> <!-- .cd-nav -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-86268362-1', 'auto');
ga('send', 'pageview');

</script>
</body>
</html>