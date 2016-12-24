<html>
<head>
<title></title>
<meta name="viewport" content="user-scalable = no">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link rel="stylesheet" href="./assets/materialize/css/materialize.min.css">
<link href="./assets/styles/yocss.css" rel="stylesheet">
<link href="./assets/ninja-slider.css" rel="stylesheet">
</head>
<style>
img.image-x{
    width: 461px;
    height: 307px;
    padding: 5px;
}
body
{
max-width: 100%;
overflow-x: hidden;
}
#ninja-slider li.show div.caption {
animation: titleAnimation 10s linear both;
}
    a.capsun{
        font-size: 50;
        font-family: 'Quicksand', sans-serif;
        color: White;
        padding-left: 100px;
    }
a.t-navprime
    {
        font-family: 'Alex Brush', cursive;
        font-size: 45;
        color: white;
    }
a.t-nav
{
font-family: Quicksand;
font-size: 15;
color:White;
padding-right: 30px;
padding-left: 30px;
-webkit-transition:all 0.5s;
-moz-transition:all 0.5s;
-o-transition:all 0.5s;
}
a.t-nav:hover
{
    letter-spacing: 2px;
}
a.t-navb
{
font-family: Quicksand;
font-size: 15;
color: black;
-webkit-transition:all 0.5s;
-moz-transition:all 0.5s;
-o-transition:all 0.5s;
}
div.quote-x{
    position: relative;
    background:white;
}
    p.quo-t{
        font-family: quicksand;
        font-size: 25;
    }
    iframe.video-x
    {
        padding: 0px;
        -webkit-transition:all 0.2s;
        -moz-transition:all 0.2s;
        -o-transition:all 0.2s;
    }
    iframe.video-x:hover{
        width: 400;
        height: 260;
    }
    a.pod
    {
        font-family: quicksand;
        font-size: 30;
        color: white;
        padding: 20px;
    }
    #v_erse{
        position: absolute;
        z-index: 100;
        right: 0px;
    }
    #Km{
      position: absolute;
        z-index: 100;
        font-family: calibri;
        font-size: 20;
        color: white;
        bottom: 5%;
        right: 45%;
    }
</style>
<body>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<div class="navbar-fixed">
<nav class="transparent">
<div class="nav-wrapper" style="background:black">
<a href="#!" class="brand-logo" style="font-family: 'Alex Brush', cursive; font-size:40; color:white">&nbsp; Yeshua's Love Family</a>
<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
<ul class="right hide-on-med-and-down">
    <li><a href="about" class="t-nav">About</a></li>
    <li><a href="sermons.php" class="t-nav">Sermons</a></li>
    <li><a href="events.php" class="t-nav">Events</a></li>
    <li><a href="gallery.php" class="t-nav">Gallery</a></li>
    <li><a href="mission.php" class="t-nav">Mission</a></li>
    <li><a href="#" class="t-nav" data-target="modal1">Contact us</a></li>
</ul>
</div>
</nav>
</div>
<ul class="side-nav" id="mobile-demo">
    <li><a href="about" class="t-navb">About</a></li>
    <li><a href="sermons.php" class="t-navb">Sermons</a></li>
    <li><a href="events.php" class="t-navb">Events</a></li>
    <li><a href="gallery.php" class="t-navb">Gallery</a></li>
    <li><a href="mission.php" class="t-navb">Mission</a></li>
    <li><a href="#" class="t-navb" data-target="modal1">Contact us</a></li>
    <li><a href="live.php" class="waves-effect waves-light btn red">LIVE</a></li>
</ul>

    
 <br><br><br><br><br><br>
<div class="container"> 
<a style="font-family:quicksand;font-size:40;color:red"><i class="fa fa-chain-broken" aria-hidden="true"></i>&nbsp;&nbsp;The Events Section is Under Devlopment now</a>
<br>
<img Style="width:30%; height:auto" src="images/gif/a%20(3).gif">
</div>    
  
    
    
    <iframe src="https://calendar.google.com/calendar/embed?src=yeshualovesjams%40gmail.com&ctz=Asia/Calcutta" style="border: 0" width="100%" height="800px" frameborder="0" scrolling="no"></iframe>
    
    
    
<script src="./assets/scripts/jq.js"></script>
<script src="./assets/materialize/js/materialize.min.js"></script>
<script src="assets/scripts/myscripts.js"></script>
<script src="assets/ninja-slider.js"></script>
<div class="container">
</div>
<script>

$( document ).ready(function()
{
    $(".button-collapse").sideNav();
    $('.materialboxed').materialbox();
     $('.modal').modal();
})
;
</script>
</body>
</html>
