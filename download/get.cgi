<?php include('includes/vars.inc.php');?>
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
  <meta name="og:description" content="I share code & Random things that happen each day"/>

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/nav.css">
  <script src="/js/modernizr.js">
  </script>
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="shortcut icon" href="/favicon.ico">

  
  <script src="/js/jquery-2.1.1.js"></script>
  <script src="/js/main.js"></script> <!-- Resource jQuery -->
  <script src="//use.typekit.net/qul4etr.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

  <title>Download File &raquo Joshua Wareing</title>
  <link rel='dns-prefetch' href='//notify.wareing.xyz' />
  <link rel='dns-prefetch' href='//notify-ssl.wareing.xyz' />
  <link rel="alternate" type="application/rss+xml" title="Joshua Wareing &raquo; Feed" href="//notify.wareing.xyz/blogfeed.xml" />
  <link rel="alternate" type="application/rss+xml" title="Joshua Wareing &raquo; Comments Feed" href="//notify-ssl.wareing.xyz/blogfeed.xml" />
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
  <main style="background:#efbe66 url('/images/topo_bg.png'); background-size: 65%; ">
    <header class="header">

      <a href="/"><img src="/images/logo.svg" alt="Logo"></a>


    </header><!-- end header -->

    <div class="wrapper">
      <div id="intro_content">
        <h1>Download file: <?php echo $_GET['ItemName'];?></h1>
        <p class="sub_title"></p>
      </div>

      <div id="page_wrapper">
        <div id="products">
          <div class="product cf">
          <img width="1500" height="750" src="/images/ie10.jpg" class="attachment-full size-full post-image" alt="thumbnail" srcset="/images/ie10.jpg 1500w, /images/ie10.jpg 300w, /images/ie10.jpg 768w, /images/ie10.jpg 1024w" sizes="(max-width: 1500px) 100vw, 1500px" />
            <p class="product_title"><?php echo $_GET['ItemName'];?></p>
            <a class="button" href="https://github.com/JoshWareing/project-downloads/raw/master/SimpleWebBrowser.exe" download>Download</p>
          </div>
        </div>
      </div>
    </main>

    <a href="#cd-nav" class="cd-nav-trigger">Menu
      <span class="cd-nav-icon"></span>

      <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
        <circle fill="transparent" stroke="#656e79" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
      </svg>
    </a>
<?php echo $vars['cd_nav']; ?>
  </body>
  </html>