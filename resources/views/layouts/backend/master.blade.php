<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Engitech</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/css/flaticon.css" />
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/css/owl.theme.css" />
    <link rel="stylesheet" href="/assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="stylesheet" href="/assets/css/royal-preload.css" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="/assets/plugins/revolution/revolution/css/navigation.css">
    @livewireStyles

    @stack('custom_styles')
</head>

<body class="royal_preloader">
    <div id="page" class="site">
<!-- Header -->
@include('layouts.backend.components.header')
<!-- Header -->

        <div id="content" class="site-content">

            <!-- Main-content -->
            @yield('content')
            <!-- Main-content -->

        </div>


    <!-- #site-footer -->
    @include('layouts.backend.components.footer')
    <!-- #site-footer -->
</div><!-- #page -->
<a id="back-to-top" href="#" class="show"><i class="flaticon-up-arrow"></i></a>
@livewireScripts
        <!-- jQuery -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/jquery.isotope.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/easypiechart.min.js"></script>
    <script src="/assets/js/jquery.countdown.min.js"></script>
    <script src="/assets/js/scripts.js"></script>
    <script src="/assets/js/header-mobile.js"></script>
    <!-- REVOLUTION JS FILES -->

    <script  src="/assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script  src="/assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script  src="/assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script  src="/assets/js/rev-script-3.js"></script>
    <script src="/assets/js/royal_preloader.min.js"></script>
    <script>
        window.jQuery = window.$ = jQuery;
        (function($) { "use strict";
            //Preloader
            Royal_Preloader.config({
                mode           : 'logo',
                logo           : '/assets/images/logo.svg',
                logo_size      : [160, 75],
                showProgress   : true,
                showPercentage : true,
                text_colour: '#000000',
                background:  '#ffffff'
            });
        })(jQuery);
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.4/axios.min.js" integrity="sha512-lTLt+W7MrmDfKam+r3D2LURu0F47a3QaW5nF0c6Hl0JDZ57ruei+ovbg7BrZ+0bjVJ5YgzsAWE+RreERbpPE1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
@if(session('cartEmpty'))
Swal.fire({
  icon: 'warning',
  title: 'Oops...',
  text: "{{session('cartEmpty')}}",
  footer: '<a href="{{route('products')}}">Go to Shopping</a>'
})
@endif
function outStock(product_name){
          Swal.fire({
            icon: 'info',
            title: 'Oops...',
            text: `Sorry this product ${product_name} out of stock!`,
            footer: '<a href="#" class="text-primary">For any further query feel free to contact us</a>'
            });
      }
function addtocart(item){
        let frmdata =new FormData();
        frmdata.append("product_id",item);
        axios.post("{{route('add.cart')}}",frmdata).then((res)=>{
        const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1200,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                })
                Toast.fire({
                icon: 'success',
                title: 'Add to cart '+res.data.name+' successfuly'
                })
            $(".cart-value").text(res.data.totalcart);
       });
}
</script>

</body>

</html>
