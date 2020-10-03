

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <link rel="icon" type="image/png" href="{{asset('assets_store/img/fav.png')}}">
    <title>Digital Menu</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Elegant font icons -->
    <link href="{{asset('assets_store/assets/vendor/elegant_font/HTMLCSS/style.css')}}" rel="stylesheet">

    <!-- Elegant font icons -->
    <link href="{{asset('assets_store/assets/vendor/materializeicon/material-icons.css')}}" rel="stylesheet">

    <!-- Swiper Slider -->
    <link href="{{asset('assets_store/assets/vendor/swiper/css/swiper.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets_store/assets/css/style-red.css')}}" rel="stylesheet" id="style">


    <link href="{{asset('assets_store/assets/css/custom.css')}}" rel="stylesheet" id="style">
    <link href="{{asset('assets_store/assets/css/main.css')}}" rel="stylesheet" id="style">




</head>
<body class="fixed-bottom-bar">
@yield('home_content')

<script>

    function myFunction() {
        var input = document.getElementById("Search");
        var filter = input.value.toLowerCase();
        var nodes = document.getElementsByClassName('search');

        for (i = 0; i < nodes.length; i++) {
            if (nodes[i].innerText.toLowerCase().includes(filter)) {
                nodes[i].style.display = "block";
            } else {
                nodes[i].style.display = "none";
            }
        }
    }
    function test() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
</script>


<!-- Bootstrap core JavaScript -->
<script src="{{asset('assets_store/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets_store/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- slick Slider JS-->
<script type="text/javascript" src="{{asset('assets_store/vendor/slick/slick.min.js')}}"></script>
<!-- Sidebar JS-->
<script type="text/javascript" src="{{asset('assets_store/vendor/sidebar/hc-offcanvas-nav.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('assets_store/js/osahan.js')}}"></script>



<!-- Required jquery and libraries -->
<script src="{{asset('assets_store/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets_store/assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets_store/assets/vendor/bootstrap-4.4.1/js/bootstrap.min.js')}}"></script>

<!-- cookie css -->
<script src="{{asset('assets_store/assets/vendor/cookie/jquery.cookie.js')}}"></script>

<!-- Swiper slider  -->
<script src="{{asset('assets_store/assets/vendor/swiper/js/swiper.min.js')}}"></script>

<!-- Masonry js -->
<script src="{{asset('assets_store/assets/vendor/masonry/masonry.pkgd.min.js')}}"></script>

<!-- Customized jquery file  -->
<script src="{{asset('assets_store/assets/js/main.js')}}"></script>
<script src="{{asset('assets_store/assets/js/color-scheme-demo.js')}}"></script>

<script>
    "use strict"
    $(document).ready(function() {
        /* Swiper slider */
        var swiper = new Swiper('.swiper-categories', {
            slidesPerView: 'auto',
            spaceBetween: 0,
            pagination: false,
        });
        var swiper = new Swiper('.swiper-offers', {
            slidesPerView: 'auto',
            spaceBetween: 20,
            pagination: false,
        });



        /* toast message */
        setTimeout(function() {
            $('.toast').toast('show')
        }, 2000);

        /* increasenumber */
        $('.add').on('click', function() {
            var current = parseInt($(this).closest('.increasenumber').find('input').val());
            $(this).closest('.increasenumber').find('input').val(current + 1);
        });
        $('.remove').on('click', function() {
            if ($(this).closest('.increasenumber').find('input').val() > 0) {
                var current = parseInt($(this).closest('.increasenumber').find('input').val());
                $(this).closest('.increasenumber').find('input').val(current - 1);
            }
        });

    });

</script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
