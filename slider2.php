
    <!-- it works the same with all jquery version from 1.3.1 to 2.0.3 -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.core.js"></script>
    <script type="text/javascript" src="js/jssor.utils.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $DirectionNavigatorOptions: {                       //[Optional] Options to specify and enable direction navigator or not
                    $Class: $JssorDirectionNavigator$,              //[Requried] Class to create direction navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles (except 'top', 'left', 'width' and 'height') to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 30px; left: 239px; width: 945px;height: 300px;">

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 15px; top:30px; width: 600px; height: 242px;
            overflow: hidden">
            <div><img u="image" src="images/kankaria.jpeg" /></div>
            <div><img u="image" src="images/adalaj.jpg" /></div>
            <div><img u="image" src="images/g1.jpeg" /></div>
            <div><img u="image" src="images/g5.jpg" /></div>
            <div><img u="image" src="images/s2.jpeg" /></div>
            <div><img u="image" src="images/i2.jpg" /></div>
            <div><img u="image" src="images/iim.jpg" /></div>
        </div>
        
        <!-- Direction Navigator Skin Begin -->
        <style>
            /* jssor slider direction navigator skin 03 css */
            /*
            .jssord03l              (normal)
            .jssord03r              (normal)
            .jssord03l:hover        (normal mouseover)
            .jssord03r:hover        (normal mouseover)
            .jssord03ldn            (mousedown)
            .jssord03rdn            (mousedown)
            */
            .jssord03l, .jssord03r, .jssord03ldn, .jssord03rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(img/d03.png) no-repeat;
                overflow:hidden;
            }
            .jssord03l { background-position: -3px -33px; }
            .jssord03r { background-position: -63px -33px; }
            .jssord03l:hover { background-position: -123px -33px; }
            .jssord03r:hover { background-position: -183px -33px; }
            .jssord03ldn { background-position: -243px -33px; }
            .jssord03rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssord03l" style="width: 55px; height: 55px; top: 123px; left: 15px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssord03r" style="width: 55px; height: 55px; top: 123px; right: 15px">
        </span>
        <!-- Direction Navigator Skin End -->
     
    
    </div>
    <!-- Jssor Slider End -->
