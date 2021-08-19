<!DOCTYPE html>
<html lang="en" dir="{{__("home.dir")}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streamit  - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset("images/favicon.ico")}}" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

</head>
<style>
    html {
        background-color: #141414;
        font-family: 'Roboto', sans-serif;

    }

    .maincontainer {
        position: relative;
        top: -50px;
        transform: scale(0.8);
        background: url("{{asset("images/error/HauntedHouseBackground.png")}}");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 700px 600px;
        width: 800px;
        height: 600px;
        margin: 0px auto;
        display: grid;
    }

    .foregroundimg {
        position: relative;
        width: 100%;
        top: -230px;
        z-index: 5;
    }

    .errorcode {
        position: relative;
        top: -200px;
        font-family: 'Creepster', cursive;
        color: white;
        text-align: center;
        font-size: 6em;
        letter-spacing: 0.1em;
    }

    .errortext {
        position: relative;
        top: -260px;
        color: #FBD130;
        text-align: center;
        text-transform: uppercase;
        font-size: 1.8em;
    }

    .bat {
        opacity: 0;
        position: relative;
        transform-origin: center;
        z-index: 3;
    }

    .bat:nth-child(1) {
        top: 380px;
        left: 120px;
        transform: scale(0.5);
        animation: 13s 1s flyBat1 infinite linear;
    }

    .bat:nth-child(2) {
        top: 280px;
        left: 80px;
        transform: scale(0.3);
        animation: 8s 4s flyBat2 infinite linear;
    }

    .bat:nth-child(3) {
        top: 200px;
        left: 150px;
        transform: scale(0.4);
        animation: 12s 2s flyBat3 infinite linear;
    }

    .body {
        position: relative;
        width: 50px;
        top: 12px;
    }

    .wing {
        width: 150px;
        position: relative;
        transform-origin: right center;
    }

    .leftwing {
        left: 30px;
        animation: 0.8s flapLeft infinite ease-in-out;
    }

    .rightwing {
        left: -180px;
        transform: scaleX(-1);
        animation: 0.8s flapRight infinite ease-in-out;
    }

    @keyframes flapLeft {
        0% { transform: rotateZ(0); }
        50% { transform: rotateZ(10deg) rotateY(40deg); }
        100% { transform: rotateZ(0); }
    }

    @keyframes flapRight {
        0% { transform: scaleX(-1) rotateZ(0); }
        50% { transform: scaleX(-1) rotateZ(10deg) rotateY(40deg); }
        100% { transform: scaleX(-1) rotateZ(0); }
    }

    @keyframes flyBat1 {
        0% { opacity: 1; transform: scale(0.5)}
        25% { opacity: 1; transform: scale(0.5) translate(-400px, -330px) }
        50% { opacity: 1; transform: scale(0.5) translate(400px, -800px) }
        75% { opacity: 1; transform: scale(0.5) translate(600px, 100px) }
        100% { opacity: 1; transform: scale(0.5) translate(100px, 300px) }
    }

    @keyframes flyBat2 {
        0% { opacity: 1; transform: scale(0.3)}
        25% { opacity: 1; transform: scale(0.3) translate(200px, -330px) }
        50% { opacity: 1; transform: scale(0.3) translate(-300px, -800px) }
        75% { opacity: 1; transform: scale(0.3) translate(-400px, 100px) }
        100% { opacity: 1; transform: scale(0.3) translate(100px, 300px) }
    }

    @keyframes flyBat3 {
        0% { opacity: 1; transform: scale(0.4)}
        25% { opacity: 1; transform: scale(0.4) translate(-350px, -330px) }
        50% { opacity: 1; transform: scale(0.4) translate(400px, -800px) }
        75% { opacity: 1; transform: scale(0.4) translate(-600px, 100px) }
        100% { opacity: 1; transform: scale(0.4) translate(100px, 300px) }
    }

    /*@media only screen and (max-width: 850px) {
      .maincontainer {
        transform: scale(0.6);
        width: 600px;
        height: 400px;
        background-size: 600px 400px;
      }

      .errortext {
        font-size: 1em;
      }
    }*/
</style>
<body>
<div class="maincontainer">
    <div class="bat">
        <img class="wing leftwing"
             src="{{asset("images/error/bat-wing.png")}}">
        <img class="body"
             src="{{asset("images/error/bat-body.png")}}" alt="bat">
        <img class="wing rightwing"
             src="{{asset("images/error/bat-wing (1).png")}}">
    </div>
    <div class="bat">
        <img class="wing leftwing"
             src="{{asset("images/error/bat-wing.png")}}">
        <img class="body"
             src="{{asset("images/error/bat-body.png")}}" alt="bat">
        <img class="wing rightwing"
             src="{{asset("images/error/bat-wing (1).png")}}">
    </div>
    <div class="bat">
        <img class="wing leftwing"
             src="{{asset("images/error/bat-wing.png")}}">
        <img class="body"
             src="{{asset("images/error/bat-body.png")}}" alt="bat">
        <img class="wing rightwing"
             src="{{asset("images/error/bat-wing (1).png")}}">
    </div>
    <img class="foregroundimg" src="{{asset("images/error/HauntedHouseForeground.png")}}" alt="haunted house">

</div>
<h1 class="errorcode" style="font-family: Creepster;">ERROR 403</h1>
<div class="errortext">
    <h4 style="font-family: Cairo;">{{__("error.403")}}</h4>
    <a href="/" style="font-size: 20px; background-color: #FBD130; border-color: #FBD130; border-radius: 4px; color: #fff; padding: 8px;padding-inline: 11px; font-family: Cairo; text-decoration-line: none"><i class="ri-home-4-line"></i> {{__("home.home")}}</a>
</div>


</body>
</html>
