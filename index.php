<!DOCTYPE html>
<!--
Oh hi, my fellow tinkerer!

You shouldn't be looking here, because it's going to give you cancer.
I hacked this thing together in thirty minutes. Please forgive me for my
terrible practices.
-->
<html>
    <head>
        <title>sofeME</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <link rel="icon" href="favicon.png">
        <style>
            @import url(https://fonts.googleapis.com/css?family=Source+Code+Pro);
            *{
                margin: 0;
                margin-top: 1em;
                padding: 0;
            }
            body, input{
                font-family: "Source Code Pro", sans-serif;
                margin: auto;
                text-align: center;
            }
            body{
                margin-bottom: 2em;
                max-width: 50%;
                transition: 0.2s all ease-in-out;
            }
            a{
                color: #0000ff;
            }
            a:hover{
                opacity: 0.65;
            }
            a:active{
                opacity: 0.85;
            }
            form{
                margin: 0;
                margin-top: 1.5em;
            }
            img{
                max-width: 100%;
            }
            input{
                background: #64d958;
                border: 0;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16pt;
                outline: 0;
                padding: 0.5em;
                transition: 0.2s box-shadow ease-in-out;
            }
            input[type="color"]:hover, input[type="submit"]:hover{
                box-shadow: 3px 4px 3px black;
            }
            span{
                display: block;
            }
            ul{
                list-style-type: none;
            }
            #reviews li:not(:first-child){
                font-style: italic;
            }
            #reviews li:not(:first-child):before, #reviews li:not(:first-child):after{
                content: "\"";
            }
            #quote{
                margin-top: 4em;
            }
            #d{
                background: none;
            }
            #d:hover{
                box-shadow: none;
            }
            .i{
                display: inline-block;
            }
            @media screen and (max-width: 736px){
                body{
                    max-width: 70%;
                }
            }
            @media screen and (max-width: 480px){
                body{
                    max-width: 80%;
                }
                .i{
                    display: block;
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>
        <h1>sofeME by <a href="https://ifvictr.com" target="_blank">ifvictr</a></h1>
        <span>A simple avatar generator for SOFe fans and lovers <b><i>everywhere</i></b></span>
        <img src="avatar.png" id="photo">
        <form id="form" action="avatar.php" method="get">
            <ul>
                <li>Background color: <input type="color" id="background" class="f" name="background" value="#ececec" required></li>
                <li>Main color: <input type="color" id="main" class="f" name="main" value="#64d958" required></li>
            </ul>
            <ul>
                <li>Orientation (clockwise and relative to the initial orientation):</li>
                <li class="i"><input type="radio" name="rotate" value="0" checked> 0&deg;</li>
                <li class="i"><input type="radio" name="rotate" value="90"> 90&deg; = &orarr;</li>
                <li class="i"><input type="radio" name="rotate" value="180"> 180&deg; = &orarr;&orarr;</li>
                <li class="i"><input type="radio" name="rotate" value="270"> 270&deg; = &olarr;</li>
                <li><input type="submit" class="f" value="Generate"></li>
            </ul>
        </form>
        <p>
            This is a tool for everyone who wants to be like <a href="https://forums.pmmp.io/members/sofe.4/"  target="_blank">SOFe</a>.
            This was hacked together in a little bit less than half an hour. So please don't judge. :)
        </p>
        <p>
            The domain <b>sofe.me</b> wasn't available, so that's not very cool. If anyone can get their hands on on it, that'd be great, because
            this tool would have a nice home. Maybe you can help out by donating, to keep this site up and keep development going.
            Even <b>you</b> can contribute, by just clicking the button below!
        </p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="YNTQUQBYHG6EL">
            <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" id="d" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate">
            <img border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
        <ul id="reviews">
            <li>What people are saying about <b>sofeME</b>:</li>
            <li>Very goods, will do mores</li>
            <li>10/10 very useful, recommended for all ages</li>
            <li>I feel like god now</li>
            <li>This makes me look like a SOFer</li>
            <li>MUCH GOD</li>
            <li>Gained ten thousand followers</li>
            <li>I AM CELEBRITIEZ ON THE INTERWEBS</li>
        </ul>
        <p id="quote">~ Love SOFe, because he is life &hearts; ~</p>
        <script>
            $("form").onsubmit = function(){
                $("photo").src = "avatar.php?background=" + e($("background").value) + "&main=" + e($("main").value) + "&rotate=" + e(document.querySelector("input[name='rotate']:checked").value);
                return false;
            };
            function $(e){
                return document.getElementById(e);
            }
            function e(v){
                return encodeURIComponent(v);
            }
        </script>
    </body>
</html>