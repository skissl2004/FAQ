<?php session_start();?>
<?php 
if(isset($_SESSION["pm"])){

}else{
    echo "尚未登入！！！";
    echo "
    <script>
    setTimeout(function(){window.location.href='login.php';},0);
    </script>";  
} 
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v4.10.0, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.10.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/home-122x38.png" type="image/x-icon">
    <meta name="description" content="FAQ">
    <title>faq</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/QA.css">

    <style>
        .Top a {
            position: fixed;
            right: 40px;
            bottom: 10px;
            z-index: 100;
        }
    </style>
</head>
<body>
    <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-5">
        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="index.html"><img src="assets/images/home-122x38.png" alt="Mobirise" title="" style="height: 3.8rem;"></a>
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="https://mobirise.com"></a></span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item dropdown">
                        <a class="nav-link link text-white dropdown-toggle display-4" href="gameIntro.html" data-toggle="dropdown-submenu" aria-expanded="true">Game Intro</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="gameIntro.html#features4-o">Baccarat</a><a class="text-white dropdown-item display-4" href="gameIntro.html#features4-o">Dragon Tiger</a><a class="text-white dropdown-item display-4" href="gameIntro.html#features4-o">Sic-Bo</a><a class="text-white dropdown-item display-4" href="gameIntro.html#features4-p">Slot</a><a class="text-white dropdown-item display-4" href="gameIntro.html#features4-p">Niuniu</a><a class="text-white dropdown-item display-4" href="gameIntro.html#features4-p">Roulette<br></a></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="apiSource.html">
                            API Source
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="faq.html">FAQ</a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="faq.html" data-toggle="dropdown-submenu" aria-expanded="false">Language</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="faq.html">English</a><a class="text-white dropdown-item display-4" href="Tfaq.html">繁體中文</a><a class="text-white dropdown-item display-4" href="Sfaq.html">簡体中文</a></div></li>
                </ul>
            </div>
        </nav>
        <div class="space"></div>
        <!--<iframe frameborder="0" scrolling="yes" src="test.html" style="width:90%; height:900px;position:relative;left:20px;"></iframe>-->
    </section>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/QA.js"></script>
    <div class="input" style="width:800px; position:relative;right:41%;left:41%; " >
        <input type="text" >
    </div>
    <div class="QandATitle">
        login
    </div>
    <div id="QandA">
        <p class="Question">Regarding to the signature, should I use public key or private key for encryption?</p>
        <div class="Answer">
            <p>
                Private key is for encryption, and public key is for decryption.
            </p>
        </div>
    </div>
    <div id="QandA">
        <p class="Question">Regarding to queryIncreaseCreditRecord, what is difference between queryReqNo and ReqNo?</p>
        <div class="Answer">
            <p>
                reqNo is a unique id create from eBet to record every request we make.
                queryReqNo is the reqNo of every increaseCredit request that save in channel side to let eBet search by.
            </p>
        </div>
    </div>
    <div id="QandA">
        <p class="Question">Does uppercase or lowercase matter in parameter?</p>
        <div class="Answer">
            <p>
                yes, it matters. If you misuse, errors occured.
            </p>
        </div>
    </div>
    <div id="QandA">
        <p class="Question">refundseqno is to check which bet information is refunded? </p>
        <div class="Answer">
            <p>
                refundseqno is the seqno corresponding to the betlist in the increaseCredit event
            </p>
        </div>
    </div>
    <div class="QandATitle">
        API
    </div>
    <div id="QandA">
        <p class="Question">Is the value of seqNo unique?</p>
        <div class="Answer">
            <p>
                In the incrementCredit API, the value of seqNo is unique.
            </p>
        </div>
    </div>
    <div id="QandA">
        <p class="Question">If I want to update the betlimit of user by <'updatebetlimit'> api?How should I set the parameters?</p>
        <div class="Answer">
            <p>
                We set betlimit by gameType. If you want to update betlimit of a gameType. You should set all parameters of that gameType.
            </p>
        </div>
    </div>
    <div id="QandA">
        <p class="Question">Technical feedbackcould ask them resend settlement to us? </p>
        <div class="Answer">
            <p>
                Let customer service assist in paying
            </p>
        </div>
    </div>
    <div id="QandA">
        <p class="Question">What are the parameters of the srcResults result? </p>
        <div class="Answer">
            <p>
                In the case of baccarat, if the dealer and the player do not have a card, they must also return a null value.
            </p>
        </div>
    </div>
    <div class="Top">
        <a href="#top"><img src="img/Top.png" style="width:50px;height:50px;"></a>
    </div>
    <section class="engine"><a href="https://mobirise.info/r">bootstrap templates</a></section>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/theme/js/script.js"></script>
</body>
</html>