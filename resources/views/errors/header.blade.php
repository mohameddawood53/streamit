<!DOCTYPE html>
<html lang="en" dir="{{__("home.dir")}}"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Streamit  - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset("images/favicon.ico")}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("css/dash/bootstrap.min.css")}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset("css/dash/typography.css")}}">
    <link rel="stylesheet" href="{{asset("css/dash/typography-rtl.css")}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset("css/dash/style.css")}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset("css/dash/responsive.css")}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
</head>
<body>
<!-- loader Start -->
<div id="loading" style="display: none;">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
@yield("content")
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset("js/app.js")}}"></script>

<script src="{{asset("js/dash/jquery.min.js")}}"></script>
<script src="{{asset("js/dash/popper.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<!-- Appear JavaScript -->
<script src="{{asset("js/dash/jquery.appear.js")}}"></script>
<!-- Countdown JavaScript -->
<script src="{{asset("js/dash/countdown.min.js")}}"></script>
<!-- Counterup JavaScript -->
<script src="{{asset("js/dash/waypoints.min.js")}}"></script>
<script src="{{asset("js/dash/jquery.counterup.min.js")}}"></script>
<!-- Wow JavaScript -->
<script src="{{asset("js/dash/wow.min.js")}}"></script>
<!-- Slick JavaScript -->
<script src="{{asset("js/dash/slick.min.js")}}"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{asset("js/dash/owl.carousel.min.js")}}"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{asset("js/dash/jquery.magnific-popup.min.js")}}"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{asset("js/dash/smooth-scrollbar.js")}}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{asset("js/dash/chart-custom.js")}}"></script>
<!-- Custom JavaScript -->
<script src="{{asset("js/dash/custom.js")}}"></script>
<script>mendeleyWebImporter = {
        downloadPdfs(t,e) { return this._call('downloadPdfs', [t,e]); },
        open() { return this._call('open', []); },
        setLoginToken(t) { return this._call('setLoginToken', [t]); },
        _call(methodName, methodArgs) {
            const id = Math.random();
            window.postMessage({ id, token: '0.5942931584071656', methodName, methodArgs }, 'https://templates.iqonic.design');
            return new Promise(resolve => {
                const listener = window.addEventListener('message', event => {
                    const data = event.data;
                    if (typeof data !== 'object' || !('result' in data) || data.id !== id) return;
                    window.removeEventListener('message', listener);
                    resolve(data.result);
                });
            });
        }
    };</script></body></html>
