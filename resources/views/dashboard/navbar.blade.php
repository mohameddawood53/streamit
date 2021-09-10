<!doctype html>
<html lang="en" dir="{{__("home.dir")}}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Streamit - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset("images/favicon.ico")}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("css/dash/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/dash/line-awesome.min.css")}}">
{{--    <link rel="stylesheet" href="{{asset("css/typography.css")}}">--}}
    <!--datatable CSS -->
    <link rel="stylesheet" href="{{asset("css/dash/dataTables.bootstrap4.min.css")}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset("css/dash/typography.css")}}">
    <link rel="stylesheet" href="{{asset("css/dash/typography-rtl.css")}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset("css/dash/style.css")}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset("css/dash/responsive.css")}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="{{asset("css/colored-theme.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/dark-theme.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/light-theme.min.css")}}">
    <script>
        window.Laravel = {
            csrfToken: "{{ csrf_token() }}"
        };
    </script>
</head>
<body id="body">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
@include('sweetalert::alert')
<div class="wrapper" id="app" style="font-family: Cairo">
    @yield("content")
</div>

<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                Copyright 2020 <a href="#">Streamit</a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/growl-notification.min.js")}}"></script>
<script>
{{--    console.log({!! auth()->id() !!})--}}
{{--    var tit = {!! __("notification.new notification") !!};--}}




    Echo.private("home." + {!! auth()->id() !!}).listen("test" , (e)=>{
    var sound = new Audio("../../sounds/notification_2.mp3");
    sound.play();
    if (e.user.lang === "ar")
    {
        GrowlNotification.notify({
            title: "لديك إشعار جديد",
            description: e.message.ar,
            position: 'bottom-right',
            closeTimeout: 5000

        });
        // console.log("ar")
    }else if (e.user.lang === "en"){
        GrowlNotification.notify({
            title: "you have new notification",
            description: e.message.en,
            position: 'bottom-left',
            closeTimeout: 5000

        });
        // console.log("en")
    }else{
        GrowlNotification.notify({
            title: "لديك إشعار جديد",
            description: e.message.ar,
            position: 'bottom-right',
            closeTimeout: 5000

        });
    }



        // console.log("data = " + e.user.lang)
    })
</script>
<script src="{{asset("js/dash/jquery.min.js")}}"></script>
<script src="{{asset("js/dash/popper.min.js")}}"></script>
<script src="{{asset("js/dash/bootstrap.min.js")}}"></script>
<script src="{{asset("js/dash/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("js/dash/dataTables.bootstrap4.min.js")}}"></script>
<!-- Appear JavaScript -->
<script src="{{asset("js/dash/jquery.appear.js")}}"></script>
<!-- Countdown JavaScript -->
<script src="{{asset("js/dash/countdown.min.js")}}"></script>
<!-- Select2 JavaScript -->
<script src="{{asset("js/dash/select2.min.js")}}"></script>
<!-- Counterup JavaScript -->
<script src="{{asset("js/dash/waypoints.min.js")}}"></script>
<script src="{{asset("js/dash/jquery.counterup.min.js")}}"></script>
<!-- Wow JavaScript -->
<script src="{{asset("js/dash/wow.min.js")}}"></script>
<!-- Slick JavaScript -->
<script src="{{asset("/js/dash/slick.min.js")}}"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{asset("js/dash/owl.carousel.min.js")}}"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{asset("js/dash/jquery.magnific-popup.min.js")}}"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{asset("js/dash/smooth-scrollbar.js")}}"></script>
<!-- apex Custom JavaScript -->
<script src="{{asset("js/dash/apexcharts.js")}}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{asset("js/dash/chart-custom.js")}}"></script>
<!-- Custom JavaScript -->
<script src="{{asset("js/dash/custom.js")}}"></script>
@stack("scripts")
</body>
</html>
