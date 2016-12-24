<!DOCTYPE html>
<!--
Oh, hi!
You shouldn"t be looking here, because it's going to give you cancer.
I hacked this thing together in thirty minutes, okay? Please forgive me for my
terrible code practices.
-->
<html>
    <head>
        <title>sofe.me</title>
        <link rel="icon" href="favicon.png">
        <style>
            @import url(https://fonts.googleapis.com/css?family=Source+Code+Pro);
            *{
                margin: 0;
                margin-top: 1.5em;
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
            }
            input{
                font-size: 16pt;
                padding: 0.5em;
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
            ul{
                list-style-type: none;
            }
            form{
                margin: 0;
                margin-top: 1.5em;
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
            .i{
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <h1>sofe.me by <a href="https://ifvictr.com" target="_blank">ifvictr</a></h1>
        <img src="avatar.php" id="photo">
        <form id="form" action="avatar.php" method="get">
            <ul>
                <li>Select your background color: <input type="color" id="background" name="background" value="#ececec" required></li>
                <li>Select your main color: <input type="color" id="main" name="main" value="#64d958" required></li>
            </ul>
            <ul>
                <li>Select your orientation (clockwise):</li>
                <li class="i"><input type="radio" name="rotate" value="0" checked> 0&deg;</li>
                <li class="i"><input type="radio" name="rotate" value="90"> 90&deg; = &orarr;</li>
                <li class="i"><input type="radio" name="rotate" value="180"> 180&deg; = &orarr;&orarr;</li>
                <li class="i"><input type="radio" name="rotate" value="270"> 270&deg; = &olarr;</li>
                <li><input type="submit" value="Generate"></li>
            </ul>
        </form>
        <p>
            This is a tool for everyone who wants to be like <a href="https://forums.pmmp.io/members/sofe.4/"  target="_blank">SOFe</a>.
            This was hacked together in a little bit less than half an hour. So please don't judge. :)
        </p>
        <p>
            The domain <a href="http://sofe.me" target="_blank">sofe.me</a> wasn't available, so that's not cool. If anyone can get their
            hands on on it, that'd be great, because this tool would have a nice, new home. Maybe you can help out by donating, to keep this
            site up and keep development going. You can do this by simply clicking to button below!
        </p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="YNTQUQBYHG6EL">
            <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate">
            <img border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
        <ul id="reviews">
            <li>What people are saying about <b>sofe.me</b>:</li>
            <li>Very goods, will do mores</li>
            <li>10/10 very useful, recommended for all ages</li>
            <li>I feel like god now</li>
            <li>This makes me look like a SOFer</li>
            <li>MUCH GOD</li>
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