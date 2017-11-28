<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Navigator Example - Jssor Slider, Slideshow</title>
</head>
<body style="font-family:Arial, Verdana;background-color:#fff;">
    <!-- it works the same with all jquery version from 1.3.1 to 2.0.3 -->
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
    <script type="text/javascript" src="../js/jssor.core.js"></script>
    <script type="text/javascript" src="../js/jssor.utils.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $NavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles (except 'top', 'left', 'width' and 'height') to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px;
        height: 300px;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
            overflow: hidden;">
            <div><img u="image" src="../img/landscape/01.jpg" /></div>
            <div><img u="image" src="../img/landscape/02.jpg" /></div>
            <div><img u="image" src="../img/landscape/03.jpg" /></div>
            <div><img u="image" src="../img/landscape/04.jpg" /></div>
            <div><img u="image" src="../img/landscape/05.jpg" /></div>
            <div><img u="image" src="../img/landscape/06.jpg" /></div>
            <div><img u="image" src="../img/landscape/07.jpg" /></div>
            <div><img u="image" src="../img/landscape/08.jpg" /></div>
        </div>
        
        <!-- Navigator Skin Begin -->
        <style>
            /* jssor slider navigator skin 03 css */
            /*
            .jssorn03 div           (normal)
            .jssorn03 div:hover     (normal mouseover)
            .jssorn03 .av           (active)
            .jssorn03 .av:hover     (active mouseover)
            .jssorn03 .dn           (mousedown)
            */
            .jssorn03 div, .jssorn03 div:hover, .jssorn03 .av
            {
                background: url(../img/n03.png) no-repeat;
                overflow:hidden;
                cursor: pointer;
            }
            .jssorn03 div { background-position: -5px -4px; }
            .jssorn03 div:hover, .jssorn03 .av:hover { background-position: -35px -4px; }
            .jssorn03 .av { background-position: -65px -4px; }
            .jssorn03 .dn, .jssorn03 .dn:hover { background-position: -95px -4px; }
        </style>
        <!-- navigator container -->
        <div u="navigator" class="jssorn03" style="position: absolute; bottom: 4px; left: 6px;">
            <!-- navigator item prototype -->
            <div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><NumberTemplate></NumberTemplate></div>
        </div>
        <!-- Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">jQuery Slider</a>
    </div>
    <!-- Jssor Slider End -->
</body>
</html>