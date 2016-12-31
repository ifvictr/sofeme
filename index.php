<!DOCTYPE html>
<!--
Oh hi, my fellow tinkerer!

You shouldn't be looking here, because it's going to give you cancer.
I hacked this thing together in thirty minutes. Please forgive me for my
terrible coding practices.
-->
<html>
    <head>
        <title>sofeME</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <link rel="icon" href="/images/favicon.png">
        <link rel="stylesheet" href="/assets/css/sofeme.css">
    </head>
    <body>
        <h1>sofeME by <a href="https://ifvictr.com" target="_blank">ifvictr</a></h1>
        <span>A simple avatar generator for SOFe fans and lovers <b><i>everywhere</i></b></span>
        <img src="/images/sofe.png" id="photo">
        <form id="form" action="/avatar.php" method="get">
            <ul>
                <li class="i">Background color: <input id="background_color" class="jscolor" name="background_color" value="ececec" required></li>
                <li class="i">Main color: <input id="main_color" class="jscolor" name="main_color" value="64d958" required></li>
            </ul>
            <ul>
                <li class="i">Border color: <input id="border_color" class="jscolor" name="border_color" required></li>
                <li class="i">Border width: <input type="number" id="border_width" name="border_width" value="0" required></li>
                <li class="i">Corner rounding: <input type="number" id="round" name="round" value="0" required></li>
            </ul>
            <ul>
                <li>Orientation (clockwise and relative to the initial orientation):</li>
                <li class="i"><input type="radio" name="rotate" value="0" checked> 0&deg;</li>
                <li class="i"><input type="radio" name="rotate" value="90"> 90&deg; = &curarr;</li>
                <li class="i"><input type="radio" name="rotate" value="180"> 180&deg; = &curarr;&curarr;</li>
                <li class="i"><input type="radio" name="rotate" value="270"> 270&deg; = &cularr;</li>
            </ul>
        </form>
        <p>
            This is a tool for everyone who wants to be like <a href="https://forums.pmmp.io/members/sofe.4/" target="_blank">SOFe</a>.
            This was hacked together in a little bit less than half an hour. So please don't judge too harshly. :)
        </p>
        <p>
            The domain <b>sofe.me</b> wasn't available, so that's not very cool. If anyone can get their hands on on it, that'd be great, because
            this tool would have a nice home. Maybe you can help out by donating, to keep this site up and keep development going.
            Even <b>you</b> can contribute, by just clicking the button below!
        </p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="YNTQUQBYHG6EL">
            <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate">
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
        <script src="/assets/js/jscolor.min.js"></script>
        <script src="/assets/js/sofeme.js"></script>
    </body>
</html>