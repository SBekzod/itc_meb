<!--<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
    </style>
</head>
<body>

<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="/css/shop/assets/Rectangle32.png" style="width:100%">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="/css/shop/assets/Rectangle32-1.png" style="width:100%">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="/css/shop/assets/Rectangle32-2.png" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

</body>
</html>
-->
<!---->
<!--<style>-->
<!--    .container {-->
<!--        position: relative;-->
<!--        display: flex;-->
<!--        justify-content: center;-->
<!--        align-items: center;-->
<!--        width: 500px;-->
<!--        height: 500px;-->
<!--        margin: 100px;-->
<!--    }-->
<!---->
<!--    select {-->
<!--        padding: 20px;-->
<!--    }-->
<!--</style>-->
<!---->
<!--<div class="container">-->
<!--    <select>-->
<!--        <option>1</option>-->
<!--        <option>1</option>-->
<!--        <option>1</option>-->
<!--    </select>-->
<!--    <select>-->
<!--        <option>1</option>-->
<!--        <option>1</option>-->
<!--        <option>1</option>-->
<!--    </select>-->
<!--</div>-->
<!DOCTYPE html>
<html>
<head>
    <title>Custom dropdown</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Rancho" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

        /* Custom dropdown */
        .custom-sel a {
            text-decoration: none;
            text-transform: uppercase;
            margin: 0;
            padding: 10px;
            text-align: left;
            font-family: Raleway;
            color: #546e7a;
            font-size: 15px;
            font-weight: 700;
            line-height: 24px;
            display: block;
        }

        .custom-sel a:hover {
            text-decoration: none;
            background-color: #EDF0F2;
            color: #ffffff;
        }

        .custom-sel a.selected {
            background-color: transparent;
        }

        .custom-sel a.selected:hover {
            background-color: transparent;
            color: #546e7a;
        }

        .hidden {
            display: none;
        }

        .lightblue {
            color:#03a9f4;
            margin-left: -4px;
        }

        .show-sel {
            background-color: #ffffff;
            box-shadow: -5px 0px 65px 0px rgba(0, 0, 0, 0.18);
        }

        .custom-sel {
            margin: 30px;
            display: inline-block;
        }
        /* Custom dropdown */

    </style>

    <script type="text/javascript">

        $(document).ready(function () {

            // Show dropdown
            $('.selected').click(function () {
                $('.custom-sel').addClass('show-sel');
                $('.custom-sel a').removeClass('hidden');
            });

            // Hide dropdown when not focused
            $('.custom-sel').focusout(function () {
                $('.custom-sel').removeClass('show-sel');
                $('.custom-sel a:not(:first)').addClass('hidden');
            }).blur(function () {
                $('.custom-sel').removeClass('show-sel');
                $('.custom-sel a:not(:first)').addClass('hidden');
            });

        });

    </script>

</head>
<body>
<div class="container">

    <!-- Custom dropdown -->
    <div class="custom-sel">
        <a class="selected" href="#">ENG &nbsp;<i class="fa fa-caret-down lightblue" aria-hidden="true"></i></a>
        <a class="hidden" href="#">EST</a>
        <a class="hidden" href="#">RUS</a>
        <a class="hidden" href="#">FIN</a>
    </div>

</div>
</body>
</html>
