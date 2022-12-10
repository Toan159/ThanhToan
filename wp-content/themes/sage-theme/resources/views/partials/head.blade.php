<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
  <link rel="icon" href="{{App::getFavicon()}}" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="{{App::getAppleIcon()}}">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com" rel="dns-prefetch" crossorigin>
  <link href="https://fonts.googleapis.com" rel="preconnect" crossorigin>   
  <link href="https://cdnjs.cloudflare.com" rel="dns-prefetch" crossorigin>
  <link href="https://cdnjs.cloudflare.com" rel="preconnect" crossorigin>
  <link rel="preload" href='@asset("styles/app.css")' as="style">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" rel="preload" as="script">
  <link href='@asset("scripts/app-mobile.js")' media="(max-width: 991px)" rel="preload" as="script">
  <link href='@asset("scripts/app-desktop.js")' media="(min-width: 992px)" rel="preload" as="script">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.com/libraries/tailwindcss">

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <!-- <link href="//app/public/wp-content/themes/sage-theme/resources/assets/styles/tailwind.js" rel="stylesheet"> -->
  @php wp_head() @endphp
  <link rel="stylesheet" id="sage/font-css" onload="if(media!='screen')media='screen'" href="{{S3_FONT}}" type="text/css" media="print" />
  {!! App::getTrackingCode('in_head') !!}
</head>