<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*
            Author: Joseph Howard
            MORE INFO HERE!!
            URL: http://www.pencilscoop.com/2013/12/150-free-animated-svg-icons/

            <------------ IF THE SCREEN BLINKS ON HOVER IT'S BECAUSE IT'S LOADING AN EXTERNAL IMAGE - TRY THE LINK ABOVE------------------->
            */

            html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var{font-style:normal;font-weight:normal;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:text-top;}sub{vertical-align:text-bottom;}input,textarea,select{font-family:inherit;font-size:inherit;font-weight:inherit;}input,textarea,select{*font-size:100%;}legend{color:#000;}

            /*=============================================
            [ Page Setup ]
            ==============================================*/
            @import url(https://fonts.googleapis.com/css?family=Raleway:600);
            header {
                width:100%;
                height:100px;
                font-family: 'Raleway', sans-serif;
                position:relative;
                text-align:center;
            }
            header .back {
            color:#CCC;
            font-size: 13px;
            text-decoration:none;
            }
            header a:hover {
                color:#52be7f;
            }
            header .right {
                margin: 10px 20px 0 0px;
                float:right;
            }
            header .left {
                margin: 10px 0px 0 20px;
                float:left;
            }
            header h1 {
                color:#999;
                font-size:23px;
                padding-top: 30px;
            }

            #pageWrap {
                width: 100%;
                overflow: hidden;
            }
            .innerwrap {
                width: 100%;
                overflow: hidden;
                padding: 0px 0 50px;
            }
            .innerwrap.purple { background: #af7ac4 }
            .innerwrap.blue { background: #246f91 }
            .innerwrap.teal { background: #3aada6 }
            .innerwrap.red { background: #f26c63 }
            .innerwrap.green { background: #52be7f }
            .innerwrap.yellow { background: #f3cf3f }
            .innerwrap.yellow .iconholder { max-width: 680px }
            .iconholder {
                width: 100%;
                max-width: 656px;
                overflow: hidden;
                margin: 0 auto;
                text-align: center;
            }
            .iconholder h2 {
                font-family: 'Raleway', sans-serif;
                font-size: 20px;
                color: #fff;
                margin: 50px;
            }
            /*=============================================
            [ Icon Wrap]
            ==============================================*/
            .svg-icon {
                display: inline-block;
                width: 134px;
                height: 138px;
                margin: 40px 30px;
                float: left;
            }
            .svg-icon:hover { cursor: pointer }
            .flat-filled {
                display: inline-block;
                width: 100px;
                height: 100px;
                margin: 40px 30px;
            }
            .flat-line {
                display: inline-block;
                width: 100px;
                height: 100px;
                margin: 40px 30px;
            }
            .flat-shadow {
                display: inline-block;
                width: 100px;
                height: 100px;
                margin: 40px 30px;
            }
            /*=============================================
            [ Inactive Styles ]
            ==============================================*/
            .social-line {
                display: inline-block;
                width: 134px;
                height: 138px;
                margin-right: 54px;
            }
            .social-line:hover { cursor: pointer }
            /* Gradient Offsets */
            .offset0 {
                stop-color: #000000;
                stop-opacity: 0.5;
            }
            .offset1 {
                stop-color: #000000;
                stop-opacity: 0.2;
            }
            .offset2 {
                stop-color: #000000;
                stop-opacity: 0.173;
            }
            .offset3 {
                stop-color: #000000;
                stop-opacity: 0;
            }
            .offset4 {
                stop-color: #000000;
                stop-opacity: 0.7;
            }
            .offset5 {
                stop-color: #000000;
                stop-opacity: 0.1143;
            }
            .offset6 {
                stop-color: #000000;
                stop-opacity: 0.1106;
            }
            .social-line {
                width: 80px;
                height: 80px;
                overflow: hidden;
            }
            .social-line .icon_circle_shadow {
                fill: none;
                fill-opacity: 0;
                opacity: 0;
                -webkit-transition: all .4s ease;
                -moz-transition: all 4s ease;
                transition: all .4s ease;
            }
            .social-line .icon_shape_shadow {
                fill: none;
                fill-opacity: 0;
            }
            .social-line .icon_circle {
                stroke: #FFFFFF;
                stroke-width: 5;
                stroke-miterlimit: 10;
                fill: none;
            }
            .social-line .icon_shape { fill: #FFFFFF }
            /*=============================================
            [ Hover Styles ]
            ==============================================*/
            .social-line:hover {
                overflow: visible;
                -webkit-transform: scale(1.15,1.15);
                -moz-transform: scale(1.15,1.15);
                transform: scale(1.15,1.15);
            }
            /* Gradient IDs */
            .social-line:hover .icon_circle_shadow {
                fill: url(#icon_circle_gradient);
                fill-opacity: 0.7;
                opacity: 1;
            }
            .social-line:hover .icon_shape_shadow {
                fill: url(#icon_shape_gradient);
                fill-opacity: 0.9;
                -webkit-transition-delay: .4s;
                -moz-transition-delay: .4s;
                transition-delay: .4s;
                -webkit-transform: scale(1,1);
                -moz-transform: scale(1,1);
                transform: scale(1,1);
            }
            /* Icon Styles */
            .social-line:hover .icon_circle {
                stroke: #FFFFFF;
                stroke-width: 5;
                stroke-miterlimit: 10;
                fill: none;
            }
            .social-line:hover path.icon_shape {
                -moz-transform: scale(1,1);
                -webkit-transform: scale(1,1);
                transform: scale(1,1);
                /*animation-name*/
                -webkit-animation-name: burst;
                -moz-animation-name: burst;
                -ms-animation-name: burst;
                -o-animation-name: burst;
                animation-name: burst;
                /*animation-duration*/
                -webkit-animation-duration: .4s;
                -moz-animation-duration: .4s;
                -ms-animation-duration: .4s;
                -o-animation-duration: .4s;
                animation-duration: .4s;
                /*transform-origin*/
                -webkit-transform-origin: 50% 50%;
                -moz-transform-origin: 40px 38px !important;
                -ms-transform-origin: 50% 50%;
                -o-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
            }
            /*=============================================
            [ KeyFrame Animations ]
            ==============================================*/
            @-webkit-keyframes burst { 
                 {
                    -webkit-transform: scale(1.1);
                    animation-timing-function: ease-in;
                }
                37% {
                    -webkit-transform: scale(1.5);
                    animation-timing-function: ease-out;
                }
                55% {
                    -webkit-transform: scale(1.37);
                    animation-timing-function: ease-in;
                }
                73% {
                    -webkit-transform: scale(1.1);
                    animation-timing-function: ease-out;
                }
                82% {
                    -webkit-transform: scale(1.45);
                    animation-timing-function: ease-in;
                }
                91% {
                    -webkit-transform: scale(1.5);
                    animation-timing-function: ease-out;
                }
                96% {
                    -webkit-transform: scale(1.4);
                    animation-timing-function: ease-in;
                }
                100% {
                    -webkit-transform: scale(1.1);
                    animation-timing-function: ease-out;
                }
            }
            @-moz-keyframes burst { 
                 {
                    -moz-transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
                37% {
                    -moz-transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                55% {
                    -moz-transform: scale(1.37,1.37);
                    animation-timing-function: ease-in;
                }
                73% {
                    -moz-transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
                82% {
                    -moz-transform: scale(1.45,1.45);
                    animation-timing-function: ease-in;
                }
                91% {
                    -moz-transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                96% {
                    -moz-transform: scale(1.4,1.4);
                    animation-timing-function: ease-in;
                }
                100% {
                    -moz-transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
            }
            @keyframes burst { 
                 {
                    transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
                37% {
                    transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                55% {
                    transform: scale(1.37,1.37);
                    animation-timing-function: ease-in;
                }
                73% {
                    transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
                82% {
                    transform: scale(1.45,1.45);
                    animation-timing-function: ease-in;
                }
                91% {
                    transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                96% {
                    transform: scale(1.4,1.4);
                    animation-timing-function: ease-in;
                }
                100% {
                    transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
            }
            /*=============================================
            [ Inactive Styles ]
            ==============================================*/
            .social-shadow {
                display: inline-block;
                overflow: visible;
                margin-right: 0;
            }
            /* Gradient Offsets */
            .offset0 {
                stop-color: #000000;
                stop-opacity: 0.5;
            }
            .offset1 {
                stop-color: #000000;
                stop-opacity: 0.2;
            }
            .offset2 {
                stop-color: #000000;
                stop-opacity: 0.173;
            }
            .offset3 {
                stop-color: #000000;
                stop-opacity: 0;
            }
            .offset4 {
                stop-color: #000000;
                stop-opacity: 0.7;
            }
            .offset5 {
                stop-color: #000000;
                stop-opacity: 0.1143;
            }
            .offset6 {
                stop-color: #000000;
                stop-opacity: 0.1106;
            }
            .social-shadow { overflow: visible }
            /* Gradient IDs */
            .social-shadow .icon_circle_shadow {
                fill: url(#icon_circle_gradient);
                fill-opacity: 0.7;
                opacity: 1;
                -webkit-transition: all .4s ease;
                -moz-transition: all 4s ease;
                transition: all .4s ease;
            }
            .social-shadow .icon_shape_shadow {
                fill: url(#icon_shape_gradient);
                fill-opacity: 0.9;
            }
            /* Icon Styles */
            .social-shadow .icon_circle {
                stroke: #FFFFFF;
                stroke-width: 5;
                stroke-miterlimit: 10;
                fill: none;
            }
            .social-shadow .icon_shape { fill: #fff }
            /*=============================================
            [ Hover Styles ]
            ==============================================*/
            .social-shadow:hover {
                display: inline-block;
                width: 134px;
                height: 138px;
                cursor: pointer;
            }
            .social-shadow:hover .social-shadow {
                width: 80px;
                height: 80px;
                overflow: hidden;
            }
            .social-shadow:hover .icon_circle_shadow { opacity: 0 }
            .social-shadow:hover .icon_shape_shadow { opacity: 0 }
            .social-shadow:hover .icon_circle {
                stroke: #FFFFFF;
                stroke-width: 5;
                stroke-miterlimit: 10;
                fill: none;
            }
            .social-shadow:hover .icon_shape { fill: #FFFFFF }
            .social-shadow:hover .icon_shape {
                -moz-transform: scale(1,1);
                -webkit-transform: scale(1,1);
                transform: scale(1,1);
                /*animation-name*/
                -webkit-animation-name: burst2;
                -moz-animation-name: burst2;
                -ms-animation-name: burst2;
                -o-animation-name: burst2;
                animation-name: burst2;
                /*animation-duration*/
                -webkit-animation-duration: .4s;
                -moz-animation-duration: .4s;
                -ms-animation-duration: .4s;
                -o-animation-duration: .4s;
                animation-duration: .4s;
                /*transform-origin*/
                -webkit-transform-origin: 50% 50%;
                -moz-transform-origin: 40px 38px !important;
                -ms-transform-origin: 50% 50%;
                -o-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
            }
            /*=============================================
            [ KeyFrame Animations ]
            ==============================================*/
            @-webkit-keyframes burst2 { 
                100% {
                    -webkit-transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
                37% {
                    -webkit-transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                55% {
                    -webkit-transform: scale(1.37,1.37);
                    animation-timing-function: ease-in;
                }
                73% {
                    -webkit-transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
                82% {
                    -webkit-transform: scale(1.45,1.45);
                    animation-timing-function: ease-in;
                }
                91% {
                    -webkit-transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                96% {
                    -webkit-transform: scale(1.4,1.4);
                    animation-timing-function: ease-in;
                }
            }
            @-moz-keyframes burst2 { 
                100% {
                    -moz-transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
                37% {
                    -moz-transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                55% {
                    -moz-transform: scale(1.37,1.37);
                    animation-timing-function: ease-in;
                }
                73% {
                    -moz-transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
                82% {
                    -moz-transform: scale(1.45,1.45);
                    animation-timing-function: ease-in;
                }
                91% {
                    -moz-transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                96% {
                    -moz-transform: scale(1.4,1.4);
                    animation-timing-function: ease-in;
                }
            }
            @keyframes burst2 { 
                100% {
                    transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
                37% {
                    transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                55% {
                    transform: scale(1.37,1.37);
                    animation-timing-function: ease-in;
                }
                73% {
                    transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
                82% {
                    transform: scale(1.45,1.45);
                    animation-timing-function: ease-in;
                }
                91% {
                    transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                96% {
                    transform: scale(1.4,1.4);
                    animation-timing-function: ease-in;
                }
            }
            /*=============================================
            [ Inactive Styles ]
            ==============================================*/
            .social-filled {
                display: inline-block;
                width: 134px;
                height: 138px;
                margin-right: 54px;
            }
            .social-filled:hover { cursor: pointer }
            /* Gradient Offsets */
            .offset0 {
                stop-color: #000000;
                stop-opacity: 0.5;
            }
            .offset1 {
                stop-color: #000000;
                stop-opacity: 0.2;
            }
            .offset2 {
                stop-color: #000000;
                stop-opacity: 0.173;
            }
            .offset3 {
                stop-color: #000000;
                stop-opacity: 0;
            }
            .offset4 {
                stop-color: #000000;
                stop-opacity: 0.7;
            }
            .offset5 {
                stop-color: #000000;
                stop-opacity: 0.1143;
            }
            .offset6 {
                stop-color: #000000;
                stop-opacity: 0.1106;
            }
            .social-filled {
                width: 80px;
                height: 80px;
                overflow: hidden;
            }
            .social-filled .icon_circle_shadow {
                fill: none;
                fill-opacity: 0;
                opacity: 0;
                -webkit-transition: all .4s ease;
                -moz-transition: all 4s ease;
                transition: all .4s ease;
            }
            .social-filled .icon_shape_shadow {
                fill: none;
                fill-opacity: 0;
            }
            .social-filled .icon_circle {
                stroke: #FFFFFF;
                stroke-width: 5;
                stroke-miterlimit: 10;
                fill: #fff;
            }
            .social-filled .icon_shape { fill: #af7ac4 }
            /*=============================================
            [ Hover Styles ]
            ==============================================*/
            .social-filled:hover {
                overflow: visible;
                -webkit-transform: scale(1.25,1.25);
                -moz-transform: scale(1.25,1.25);
                transform: scale(1.25,1.25);
            }
            /* Gradient IDs */
            .social-filled:hover .icon_circle_shadow {
                fill: url(#icon_circle_gradient);
                fill-opacity: 0.7;
                opacity: 1;
            }
            .social-filled:hover .icon_shape_shadow {
                fill: url(#icon_shape_gradient);
                fill-opacity: 0.9;
                -webkit-transition-delay: .4s;
                -moz-transition-delay: .4s;
                transition-delay: .4s;
            }
            /* Icon Styles */
            .social-filled:hover .icon_circle {
                stroke: #FFFFFF;
                stroke-width: 5;
                stroke-miterlimit: 10;
                fill: none;
            }
            .social-filled:hover path.icon_shape {
                fill: #fff;
                -moz-transform: scale(1,1);
                -webkit-transform: scale(1,1);
                transform: scale(1,1);
                /*animation-name*/
                -webkit-animation-name: burst3;
                -moz-animation-name: burst3;
                -ms-animation-name: burst3;
                -o-animation-name: burst3;
                animation-name: burst3;
                /*animation-duration*/
                -webkit-animation-duration: .4s;
                -moz-animation-duration: .4s;
                -ms-animation-duration: .4s;
                -o-animation-duration: .4s;
                animation-duration: .4s;
                /*transform-origin*/
                -webkit-transform-origin: 50% 50%;
                -moz-transform-origin: 40px 38px !important;
                -ms-transform-origin: 50% 50%;
                -o-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
            }
            /*=============================================
            [ KeyFrame Animations ]
            ==============================================*/
            @-webkit-keyframes burst3 { 
                100% {
                    -webkit-transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
                37% {
                    -webkit-transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                55% {
                    -webkit-transform: scale(1.37,1.37);
                    animation-timing-function: ease-in;
                }
                73% {
                    -webkit-transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
                82% {
                    -webkit-transform: scale(1.45,1.45);
                    animation-timing-function: ease-in;
                }
                91% {
                    -webkit-transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                96% {
                    -webkit-transform: scale(1.4,1.4);
                    animation-timing-function: ease-in;
                }
            }
            @-moz-keyframes burst3 { 
                100% {
                    -moz-transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
                37% {
                    -moz-transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                55% {
                    -moz-transform: scale(1.37,1.37);
                    animation-timing-function: ease-in;
                }
                73% {
                    -moz-transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
                82% {
                    -moz-transform: scale(1.45,1.45);
                    animation-timing-function: ease-in;
                }
                91% {
                    -moz-transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                96% {
                    -moz-transform: scale(1.4,1.4);
                    animation-timing-function: ease-in;
                }
            }
            @keyframes burst3 { 
                100% {
                    transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
                37% {
                    transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                55% {
                    transform: scale(1.37,1.37);
                    animation-timing-function: ease-in;
                }
                73% {
                    transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
                82% {
                    transform: scale(1.45,1.45);
                    animation-timing-function: ease-in;
                }
                91% {
                    transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                96% {
                    transform: scale(1.4,1.4);
                    animation-timing-function: ease-in;
                }
            }
            /*=============================================
            [ Inactive Styles ]
            ==============================================*/
            /*Genral*/
            .flat-filled .icon > path {
                fill: #f26c63;
                -moz-transform: translate(0px ,0px) scale(1,1);
                -webkit-transform: translate(0px ,0px) scale(1,1);
                transform: translate(0px, 0px) scale(1,1);
            }
            .flat-filled .icon > .lightning {
                fill: #f26c63;
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
                transform: translate(0px, 0px) scale(1,1);
            }
            .flat-filled .circle {
                fill: #fff;
                transform: translate(0px, 0px) scale(1,1);
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
            }
            /*Exceptions*/
            #filled-user .collar_right {
                fill: #f26c63;
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
                transform: translate(0px, 0px) scale(1,1);
            }
            #filled-user .collar_left {
                fill: #f26c63;
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
                transform: translate(0px, 0px) scale(1,1);
            }
            #filled-lightning .bolt {
                fill: #f26c63;
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
                transform: translate(0px, 0px) scale(1,1);
            }
            #filled-lightning .highlight {
                fill: #f26c63;
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
                transform: translate(0px, 0px) scale(1,1);
            }
            #filled-mic .bars_right rect {
                fill: #f26c63;
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
                transform: translate(0px, 0px) scale(1,1);
            }
            #filled-coffee .top {
                fill: #f26c63;
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
                transform: translate(0px, 0px) scale(1,1);
                : ;
            }
            /*Specifics*/
            #filled-browser .green { fill: #FFF }
            #filled-browser .orange { fill: #FFF }
            #filled-browser .red { fill: #FFF }
            #filled-brush .brush_silver { fill: #FFF }
            #filled-calander .number { fill: #FFF }
            #filled-camera .lens_inner { fill: #FFF }
            #filled-clock .seconds { fill: #FFF }
            #filled-clock .middle { fill: #FFF }
            #filled-clock .hour { fill: #FFF }
            #filled-clock .minute { fill: #FFF }
            #filled-coffee .middle { fill: #FFF }
            #filled-diamond .middle { fill: #FFF }
            #filled-diamond .top_3 { fill: #FFF }
            #filled-disk .top { fill: #FFF }
            #filled-disk .top_right { fill: #FFF }
            #filled-disk .text { fill: #FFF }
            #filled-email .paper { fill: #FFF }
            #filled-home .hole { fill: #FFF }
            #filled-location .inner { fill: #FFF }
            #filled-lock .keyhole { fill: #FFF }
            #filled-message .dots { fill: #FFF }
            #filled-picture .sun { fill: #FFF }
            #filled-picture .mountain { fill: #FFF }
            #filled-mic .bars_left { fill: #FFF }
            #filled-mic .bars_right rect { fill: #FFF }
            #filled-paper .text { fill: #FFF }
            #filled-paper .corner { fill: #FFF }
            #filled-pencil .metal { fill: #FFF }
            #filled-phone .screen { fill: #FFF }
            #filled-phone .details { fill: #FFF }
            #filled-robot .eyes { fill: #FFFFFF }
            #filled-suitcase .buttons { fill: #FFF }
            #filled-tag .dot { fill: #FFF }
            #filled-thumbsdown .dot { fill: #FFFFFF }
            #filled-thumbsup .dot { fill: #FFFFFF }
            #filled-trash .details { fill: #FFF }
            #filled-winner .text { fill: #FFFFFF }
            /*=============================================
            [ Hover Styles ]
            ==============================================*/
            #filled-browser:hover .circle { fill: #B1EB5B }
            #filled-browser:hover .screen { fill: #d6d6d6 }
            #filled-browser:hover .base { fill: #b0b0b0 }
            #filled-browser:hover .top { fill: #8F8F8F }
            #filled-browser:hover .green { fill: #AEE42D }
            #filled-browser:hover .orange { fill: #FFD02C }
            #filled-browser:hover .red { fill: #E64545 }
            #filled-brush:hover .brush_base { fill: #00A3C6 }
            #filled-brush:hover .brush_highlight { fill: #43C1DC }
            #filled-brush:hover .brush_silver { fill: #C8C8C8 }
            #filled-brush:hover .brush_tip { fill: #917152 }
            #filled-brush:hover .circle { fill: #F0A878 }
            #filled-calander:hover .circle { fill: #F3CF3F }
            #filled-calander:hover .base_top { fill: #5B3F89 }
            #filled-calander:hover .left { fill: #848484 }
            #filled-calander:hover .right { fill: #848484 }
            #filled-calander:hover .number { fill: #fff }
            #filled-calander:hover .base_bottom { fill: #644892 }
            #filled-camera:hover  .circle { fill: #F39C12 }
            #filled-camera:hover .base { fill: #E0DECD }
            #filled-camera:hover .strip { fill: #3376D2 }
            #filled-camera:hover .lens { fill: #CAC8B7 }
            #filled-camera:hover .lens_inner { fill: #A6A495 }
            #filled-camera:hover .flash { fill: #FFF }
            #filled-camera:hover .red { fill: #D25133 }
            #filled-camera:hover .button { fill: #A6A496 }
            #filled-clock:hover .circle { fill: #02BD85 }
            #filled-clock:hover .base { fill: #FF8933 }
            #filled-clock:hover .face { fill: #FFF }
            #filled-clock:hover .seconds { fill: #FF725F }
            #filled-clock:hover .middle { fill: #808080 }
            #filled-clock:hover .hour { fill: #808080 }
            #filled-clock:hover .minute { fill: #808080 }
            #filled-coffee:hover .circle { fill: #82D8B5 }
            #filled-coffee:hover .base { fill: #8F6349 }
            #filled-coffee:hover .middle { fill: #9C8679 }
            #filled-coffee:hover .top { fill: #F1F1F1 }
            #filled-diamond:hover .circle { fill: #02BD85 }
            #filled-diamond:hover .middle { fill: #D87598 }
            #filled-diamond:hover .top_3 { fill: #FFC8DB }
            #filled-diamond:hover .top_2 { fill: #F2A0BD }
            #filled-diamond:hover .top_1 { fill: #F2A0BD }
            #filled-diamond:hover .top_left { fill: #D87598 }
            #filled-diamond:hover .top_right { fill: #D87598 }
            #filled-diamond:hover .right { fill: #C15179 }
            #filled-diamond:hover .left { fill: #FFC8DB }
            #filled-disk:hover .circle { fill: #F3CF3F }
            #filled-disk:hover .base { fill: #5D699B }
            #filled-disk:hover .top { fill: #B2B2B2 }
            #filled-disk:hover .top_right { fill: #747A90 }
            #filled-disk:hover .bottom { fill: #D9D9C2 }
            #filled-disk:hover .text { fill: #747A90 }
            #filled-email:hover .circle { fill: #7D79BC }
            #filled-email:hover .top { fill: #3DD97F }
            #filled-email:hover .paper { fill: #FFFFFF }
            #filled-email:hover .base { fill: #2DB466 }
            #filled-email:hover .text { fill: #BBBBBB }
            #filled-film:hover .circle { fill: #8DD0BE }
            #filled-film:hover .base { fill: #6E6E6E }
            #filled-film:hover .bottom { fill: #515151 }
            #filled-film:hover .top { fill: #8C8C8C }
            #filled-flag:hover .circle { fill: #8DD0BE }
            #filled-flag:hover .bottom { fill: #FF5400 }
            #filled-flag:hover .shadow { fill: #C03F00 }
            #filled-flag:hover .top { fill: #FF5400 }
            #filled-flag:hover .pole { fill: #676767 }
            #filled-folder:hover .circle { fill: #82D8B5 }
            #filled-folder:hover .back { fill: #9C4588 }
            #filled-folder:hover .paper_back { fill: #D9D9D9 }
            #filled-folder:hover .paper_front { fill: #fff }
            #filled-folder:hover .front { fill: #BF67AB }
            #filled-graph:hover .circle { fill: #E3A7C0 }
            #filled-graph:hover .bar_left { fill: #7BC156 }
            #filled-graph:hover .bar_middle { fill: #92D76C }
            #filled-graph:hover .bar_right { fill: #64A242 }
            #filled-graph:hover .front { fill:  }
            #filled-graph:hover .dot_4,
            #filled-graph:hover .dot_3,
            #filled-graph:hover .dot_2,
            #filled-graph:hover .dot_1 { fill: #fff }
            #filled-heart:hover .circle { fill: #02BD85 }
            #filled-heart:hover .base { fill: #BC4B36 }
            #filled-heart:hover .left { fill: #db5940 }
            #filled-home:hover .circle { fill: #02BD85 }
            #filled-home:hover .base { fill: #F1F1F1 }
            #filled-home:hover .hole { fill: #C3C3C3 }
            #filled-home:hover .roof { fill: #D34141 }
            #filled-lightning:hover .circle { fill: #423D5B }
            #filled-lightning:hover .bolt { fill: #FFD928 }
            #filled-lightning:hover .highlight { fill: #FFF3B9 }
            #filled-location:hover .circle { fill: #4890A8 }
            #filled-location:hover .base { fill: #B6351B }
            #filled-location:hover .inner { fill: #7E2412 }
            #filled-lock:hover .circle { fill: #02AF7E }
            #filled-lock:hover .base { fill: #C9A80D }
            #filled-lock:hover .baselight { fill: #D9BC36 }
            #filled-lock:hover .keyhole { fill: #8A7200 }
            #filled-lock:hover .bar { fill: #C6C6C6 }
            #filled-magnify:hover .circle { fill: #F2D65F }
            #filled-magnify:hover .base { fill: #34B9F1 }
            #filled-magnify:hover .glass { fill: #8DDDFF }
            #filled-message:hover .circle { fill: #AC5D9F }
            #filled-message:hover .back { fill: #FFAD10 }
            #filled-message:hover .front { fill: #00A3C6 }
            #filled-message:hover .dots { fill: #006A81 }
            #filled-mic:hover .circle { fill: #F3CF3F }
            #filled-mic:hover .base { fill: #40979F }
            #filled-mic:hover .stand { fill: #5F8083 }
            #filled-mic:hover .bars_left { fill: #267178 }
            #filled-mic:hover .bars_right rect { fill: #267178 }
            #filled-paper:hover .circle { fill: #D6D6B8 }
            #filled-paper:hover .base { fill: #929292 }
            #filled-paper:hover .front { fill: #FFFFFF }
            #filled-paper:hover .corner { fill: #D6D6D6 }
            #filled-paper:hover .text { fill: #BBBBBB }
            #filled-pencil:hover .circle { fill: #CDEFE1 }
            #filled-pencil:hover .wood { fill: #FFC833 }
            #filled-pencil:hover .base_top { fill: #456FD8 }
            #filled-pencil:hover .base_bottom { fill: #3258B6 }
            #filled-pencil:hover .base_middle { fill: #567FE5 }
            #filled-pencil:hover .tip { fill: #567FE5 }
            #filled-pencil:hover .eraser { fill: #FF72B1 }
            #filled-pencil:hover .metal { fill: #C6C6C6 }
            #filled-phone:hover .circle { fill: #E55D57 }
            #filled-phone:hover .base { fill: #6F82A4 }
            #filled-phone:hover .screen { fill: #A5B5D3 }
            #filled-phone:hover .details { fill: #516078 }
            #filled-picture:hover .circle { fill: #B1EB5B }
            #filled-picture:hover .back { fill: #A46B49 }
            #filled-picture:hover .front { fill: #CE8A61 }
            #filled-picture:hover .sky { fill: #DCF5FF }
            #filled-picture:hover .sun { fill: #FF7800 }
            #filled-picture:hover .mountain { fill: #3B8C1E }
            #filled-plane:hover .circle { fill: #E88D70 }
            #filled-plane:hover .bottom { fill: #007D7E }
            #filled-plane:hover .right { fill: #4ED0D1 }
            #filled-plane:hover .middle { fill: #3AAAAB }
            #filled-plane:hover .left { fill: #4ED0D1 }
            #filled-present:hover .circle { fill: #4890A8 }
            #filled-present:hover .base { fill: #F1F1F1 }
            #filled-present:hover .top { fill: #C3C3C3 }
            #filled-present:hover .ribbon { fill: #D34141 }
            #filled-robot:hover .circle { fill: #E88D70 }
            #filled-robot:hover .ears { fill: #39517A }
            #filled-robot:hover .base { fill: #4C70AF }
            #filled-robot:hover .highlight { fill: #6384BE }
            #filled-robot:hover .antenna { fill: #A0ABBD }
            #filled-robot:hover .eyes { fill: #FFFFFF }
            #filled-rocket:hover .circle { fill: #4BAE97 }
            #filled-rocket:hover .engine { fill: #7D7D7D }
            #filled-rocket:hover .base { fill: #B0CED8 }
            #filled-rocket:hover .window { fill: #8BABB6 }
            #filled-rocket:hover .glass { fill: #FFFFFF }
            #filled-rocket:hover .flame { fill: #FF5400 }
            #filled-screen:hover .circle { fill: #F8B243 }
            #filled-screen:hover .stand { fill: #516078 }
            #filled-screen:hover .base { fill: #6F82A4 }
            #filled-screen:hover .highlight { fill: #A5B5D3 }
            #filled-screen:hover .logo { fill: #516078 }
            #filled-settings:hover .circle { fill: #E3A7C0 }
            #filled-settings:hover .base { fill: #8BAE5D }
            #filled-settings:hover .top { fill: #698741 }
            #filled-spaceship:hover .circle { fill: #02BD85 }
            #filled-spaceship:hover .light { fill: #FFF3B9 }
            #filled-spaceship:hover .glass { fill: #8DDDFF }
            #filled-spaceship:hover .base { fill: #7E8CA6 }
            #filled-spaceship:hover .circles { fill: #56627A }
            #filled-storm:hover .circle { fill: #90C0D8 }
            #filled-storm:hover .cloud { fill: #858585 }
            #filled-storm:hover .lightning { fill: #FFAD10 }
            #filled-suitcase:hover .circle { fill: #02BD85 }
            #filled-suitcase:hover .top { fill: #9A4C1D }
            #filled-suitcase:hover .bottom { fill: #B75B24 }
            #filled-suitcase:hover .buttons { fill: #C89211 }
            #filled-tag:hover .circle { fill: #D6D6B8 }
            #filled-tag:hover .base { fill: #FFBA00 }
            #filled-tag:hover .dot { fill: #C38E00 }
            #filled-thumbsdown:hover .circle { fill: #E74C3C }
            #filled-thumbsdown:hover .base { fill: #F1CDB0 }
            #filled-thumbsdown:hover .sleeve { fill: #E1AF45 }
            #filled-thumbsdown:hover .cuff { fill: #339FA9 }
            #filled-thumbsdown:hover .dot { fill: #FFFFFF }
            #filled-thumbsup:hover .circle { fill: #02BD85 }
            #filled-thumbsup:hover .base { fill: #F1CDB0 }
            #filled-thumbsup:hover .sleeve { fill: #854D37 }
            #filled-thumbsup:hover .cuff { fill: #C24C28 }
            #filled-thumbsup:hover .dot { fill: #FFFFFF }
            #filled-trash:hover .circle { fill: #90C0D8 }
            #filled-trash:hover .base { fill: #8C8C8C }
            #filled-trash:hover .details { fill: #515151 }
            #filled-trash:hover .lid { fill: #6E6E6E }
            #filled-user:hover .circle { fill: #D1F274 }
            #filled-user:hover .body { fill: #44B2B6 }
            #filled-user:hover .collar_right { fill: #FFFFFF }
            #filled-user:hover .collar_left { fill: #FFFFFF }
            #filled-user:hover .head { fill: #F1CDB0 }
            #filled-user:hover .hair { fill: #AB6125 }
            #filled-winner:hover .circle { fill: #F8B243 }
            #filled-winner:hover .ribbon { fill: #5BB3F0 }
            #filled-winner:hover .base { fill: #1983CD }
            #filled-winner:hover .text { fill: #FFFFFF }
            /*=============================================
            [ Animation Styles ]
            ==============================================*/
            /*LEFT*/
            #filled-winner:hover .text,
            #filled-user:hover .hair,
            #filled-trash:hover .lid,
            #filled-thumbsdown:hover .base,
            #filled-thumbsup:hover .base,
            #filled-suitcase:hover .buttons,
            #filled-spaceship:hover .light,
            #filled-screen:hover .highlight,
            #filled-rocket:hover .glass,
            #filled-robot:hover .eyes,
            #filled-robot:hover .ears,
            #filled-present:hover .ribbon,
            #filled-plane:hover .middle,
            #filled-picture:hover .sun,
            #filled-phone:hover .screen,
            #filled-pencil:hover .metal,
            #filled-mic:hover .bars_left,
            #filled-message:hover .dots,
            #filled-lock:hover .keyhole,
            #filled-lightning:hover .highlight,
            #filled-home:hover .hole,
            #filled-heart:hover .left,
            #filled-graph:hover .bar_left,
            #filled-folder:hover .paper_front,
            #filled-flag:hover .pole,
            #filled-film:hover .bottom,
            #filled-email:hover .text,
            #filled-disk:hover .bottom,
            #filled-disk:hover .text,
            #filled-diamond:hover .middle,
            #filled-coffee:hover .middle,
            #filled-clock:hover .seconds,
            #filled-camera:hover .strip,
            #filled-calander:hover .left,
            #filled-brush:hover .brush_silver,
            #filled-browser:hover .screen {
                -webkit-animation-delay: .2s;
                -moz-animation-delay: 0.2s;
                -ms-animation-delay: 0.2s;
                -o-animation-delay: 0.2s;
                animation-delay: 0.2s;
                /*animation-timing-function*/
                -webkit-animation-timing-function: linear;
                -moz-animation-timing-function: linear;
                -ms-animation-timing-function: linear;
                -o-animation-timing-function: linear;
                animation-timing-function: linear;
                /*animation-iteration-count*/
                -webkit-animation-iteration-count: 1;
                -moz-animation-iteration-count: 1;
                -ms-animation-iteration-count: 1;
                -o-animation-iteration-count: 1;
                animation-iteration-count: 1;
                /*transform-origin*/
                -webkit-transform-origin: 50% 50%;
                -moz-transform-origin: 50px 50px;
                -ms-transform-origin: 50% 50%;
                -o-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
                -webkit-animation-duration: .4s;
                -moz-animation-duration: .4s;
                -ms-animation-duration: .4s;
                -o-animation-duration: .4s;
                animation-duration: .4s;
                -webkit-animation-name: left;
                -moz-animation-name: left;
                -ms-animation-name: left;
                -o-animation-name: left;
                animation-name: left;
            }
            /*RIGHT*/
            #filled-winner:hover .base,
            #filled-user:hover .body,
            #filled-trash:hover .base,
            #filled-thumbsdown:hover .sleeve,
            #filled-thumbsup:hover .sleeve,
            #filled-tag:hover .base,
            #filled-storm:hover .cloud,
            #filled-spaceship:hover .base,
            #filled-screen:hover .base,
            #filled-rocket:hover .base,
            #filled-robot:hover .base,
            #filled-present:hover .base,
            #filled-picture:hover .mountain,
            #filled-phone:hover .base,
            #filled-pencil:hover .base_middle,
            #filled-paper:hover .base,
            #filled-mic:hover .bars_right rect,
            #filled-magnify:hover .glass,
            #filled-lock:hover .base,
            #filled-location:hover .inner,
            #filled-home:hover .base,
            #filled-graph:hover .bar_middle,
            #filled-folder:hover .paper_back,
            #filled-flag:hover .top,
            #filled-film:hover .base,
            #filled-email:hover .base,
            #filled-disk:hover .base,
            #filled-diamond:hover .right,
            #filled-coffee:hover .base,
            #filled-clock:hover .base,
            #filled-camera:hover .base,
            #filled-calander:hover .base_top,
            #filled-browser:hover .base {
                /*animation-timing-function*/
                -webkit-animation-timing-function: linear;
                -moz-animation-timing-function: linear;
                -ms-animation-timing-function: linear;
                -o-animation-timing-function: linear;
                animation-timing-function: linear;
                /*animation-iteration-count*/
                -webkit-animation-iteration-count: 1;
                -moz-animation-iteration-count: 1;
                -ms-animation-iteration-count: 1;
                -o-animation-iteration-count: 1;
                animation-iteration-count: 1;
                /*transform-origin*/
                -webkit-transform-origin: 50% 50%;
                -moz-transform-origin: 50px 50px;
                -ms-transform-origin: 50% 50%;
                -o-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
                -webkit-animation-duration: .4s;
                -moz-animation-duration: .4s;
                -ms-animation-duration: .4s;
                -o-animation-duration: .4s;
                animation-duration: .4s;
                -webkit-animation-name: right;
                -moz-animation-name: right;
                -ms-animation-name: right;
                -o-animation-name: right;
                animation-name: right;
            }
            /*TOP RIGHT*/
            #filled-user:hover .head,
            #filled-thumbsdown:hover .cuff,
            #filled-thumbsdown:hover .cuff,
            #filled-suitcase:hover .top,
            #filled-storm:hover .lightning,
            #filled-spaceship:hover .circles,
            #filled-spaceship:hover .glass,
            #filled-settings:hover .top,
            #filled-rocket:hover .engine,
            #filled-robot:hover .highlight,
            #filled-present:hover .top,
            #filled-plane:hover .right,
            #filled-picture:hover .sky,
            #filled-phone:hover .details,
            #filled-pencil:hover .eraser,
            #filled-pencil:hover .base_bottom,
            #filled-paper:hover .front,
            #filled-mic:hover .base,
            #filled-mic:hover .stand,
            #filled-lock:hover .baselight,
            #filled-location:hover .base,
            #filled-lightning:hover .bolt,
            #filled-home:hover .roof,
            #filled-heart:hover .base,
            #filled-graph:hover .bar_right,
            #filled-graph:hover .dot_4,
            #filled-flag:hover .bottom,
            #filled-film:hover .top,
            #filled-disk:hover .top_right,
            #filled-diamond:hover .top_right,
            #filled-diamond:hover .left,
            #filled-coffee:hover .top,
            #filled-clock:hover .face,
            #filled-calander:hover .right,
            #filled-brush:hover .brush_base,
            #filled-browser:hover .top {
                -webkit-animation-delay: .1s;
                -moz-animation-delay: 0.1s;
                -ms-animation-delay: 0.1s;
                -o-animation-delay: 0.1s;
                animation-delay: 0.1s;
                /*animation-timing-function*/
                -webkit-animation-timing-function: linear;
                -moz-animation-timing-function: linear;
                -ms-animation-timing-function: linear;
                -o-animation-timing-function: linear;
                animation-timing-function: linear;
                /*animation-iteration-count*/
                -webkit-animation-iteration-count: 1;
                -moz-animation-iteration-count: 1;
                -ms-animation-iteration-count: 1;
                -o-animation-iteration-count: 1;
                animation-iteration-count: 1;
                /*transform-origin*/
                -webkit-transform-origin: 50% 50%;
                -moz-transform-origin: 50px 50px;
                -ms-transform-origin: 50% 50%;
                -o-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
                -webkit-animation-duration: .4s;
                -moz-animation-duration: .4s;
                -ms-animation-duration: .4s;
                -o-animation-duration: .4s;
                animation-duration: .4s;
                -webkit-animation-name: right-top;
                -moz-animation-name: right-top;
                -ms-animation-name: right-top;
                -o-animation-name: right-top;
                animation-name: right-top;
            }
            /*TOP LEFT*/
            #filled-winner:hover .ribbon,
            #filled-trash:hover .details,
            #filled-thumbsdown:hover .dot,
            #filled-thumbsup:hover .dot,
            #filled-tag:hover .dot,
            #filled-suitcase:hover .bottom,
            #filled-settings:hover .base,
            #filled-screen:hover .stand,
            #filled-rocket:hover .window,
            #filled-robot:hover .antenna,
            #filled-plane:hover .left,
            #filled-picture:hover .front,
            #filled-pencil:hover .base_top,
            #filled-paper:hover .corner,
            #filled-magnify:hover .base,
            #filled-lock:hover .bar,
            #filled-graph:hover .dot_3,
            #filled-flag:hover .shadow,
            #filled-email:hover .paper,
            #filled-disk:hover .top,
            #filled-diamond:hover .top_left,
            #filled-diamond:hover .top_3,
            #filled-clock:hover .minute,
            #filled-camera:hover .flash,
            #filled-calander:hover .number,
            #filled-brush:hover .brush_highlight,
            #filled-browser:hover .green {
                /*animation-timing-function*/
                -webkit-animation-timing-function: linear;
                -moz-animation-timing-function: linear;
                -ms-animation-timing-function: linear;
                -o-animation-timing-function: linear;
                animation-timing-function: linear;
                /*animation-iteration-count*/
                -webkit-animation-iteration-count: 1;
                -moz-animation-iteration-count: 1;
                -ms-animation-iteration-count: 1;
                -o-animation-iteration-count: 1;
                animation-iteration-count: 1;
                /*transform-origin*/
                -webkit-transform-origin: 50% 50%;
                -moz-transform-origin: 50px 50px;
                -ms-transform-origin: 50% 50%;
                -o-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
                -webkit-animation-duration: .4s;
                -moz-animation-duration: .4s;
                -ms-animation-duration: .4s;
                -o-animation-duration: .4s;
                animation-duration: .4s;
                -webkit-animation-name: left-top;
                -moz-animation-name: left-top;
                -ms-animation-name: left-top;
                -o-animation-name: left-top;
                animation-name: left-top;
            }
            #filled-user:hover .collar_left,
            #filled-screen:hover .logo,
            #filled-rocket:hover .flame,
            #filled-picture:hover .back,
            #filled-pencil:hover .tip,
            #filled-paper:hover .text,
            #filled-message:hover .front,
            #filled-graph:hover .dot_2,
            #filled-folder:hover .front,
            #filled-email:hover .top,
            #filled-diamond:hover .top_2,
            #filled-clock:hover .hour,
            #filled-camera:hover .red,
            #filled-calander:hover .base_bottom,
            #filled-browser:hover .orange {
                -webkit-animation-delay: .05s;
                -moz-animation-delay: 0.05s;
                -ms-animation-delay: 0.05s;
                -o-animation-delay: 0.05s;
                animation-delay: 0.05s;
                /*animation-timing-function*/
                -webkit-animation-timing-function: linear;
                -moz-animation-timing-function: linear;
                -ms-animation-timing-function: linear;
                -o-animation-timing-function: linear;
                animation-timing-function: linear;
                /*animation-iteration-count*/
                -webkit-animation-iteration-count: 1;
                -moz-animation-iteration-count: 1;
                -ms-animation-iteration-count: 1;
                -o-animation-iteration-count: 1;
                animation-iteration-count: 1;
                /*transform-origin*/
                -webkit-transform-origin: 50% 50%;
                -moz-transform-origin: 50px 50px;
                -ms-transform-origin: 50% 50%;
                -o-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
                -webkit-animation-duration: .4s;
                -moz-animation-duration: .4s;
                -ms-animation-duration: .4s;
                -o-animation-duration: .4s;
                animation-duration: .4s;
                -webkit-animation-name: left-top;
                -moz-animation-name: left-top;
                -ms-animation-name: left-top;
                -o-animation-name: left-top;
                animation-name: left-top;
                -webkit-animation-name: left-top;
                -moz-animation-name: left-top;
                -ms-animation-name: left-top;
                -o-animation-name: left-top;
                animation-name: left-top;
            }
            #filled-user:hover .collar_right,
            #filled-plane:hover .bottom,
            #filled-pencil:hover .wood,
            #filled-message:hover .back,
            #filled-graph:hover .dot_1,
            #filled-folder:hover .back,
            #filled-diamond:hover .top_1,
            #filled-clock:hover .middle,
            #filled-camera:hover .button,
            #filled-camera:hover .lens,
            #filled-camera:hover .lens_inner,
            #filled-brush:hover .brush_tip,
            #filled-browser:hover .red {
                /*animation-timing-function*/
                -webkit-animation-timing-function: linear;
                -moz-animation-timing-function: linear;
                -ms-animation-timing-function: linear;
                -o-animation-timing-function: linear;
                animation-timing-function: linear;
                /*animation-iteration-count*/
                /*transform-origin*/
                -webkit-transform-origin: 50% 50%;
                -moz-transform-origin: 50px 50px;
                -ms-transform-origin: 50% 50%;
                -o-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
                -webkit-animation-duration: .4s;
                -moz-animation-duration: .4s;
                -ms-animation-duration: .4s;
                -o-animation-duration: .4s;
                animation-duration: .4s;
                -webkit-animation-name: left-top;
                -moz-animation-name: left-top;
                -ms-animation-name: left-top;
                -o-animation-name: left-top;
                animation-name: left-top;
            }
            /*Keyframes*/
            @-moz-keyframes left-top { 
                0% { -webki-transform: translate(-100px, -100px) scale(3,3) }
                1% { -webkit-transform: translate(-100px, -100px) scale(3,3) }
                100% { -webkit-transform: translate(0px ,0px) scale(1,1) }
            }
            @-webkit-keyframes left-top { 
                0% { -webki-transform: translate(-100px, -100px) scale(3,3) }
                1% { -webkit-transform: translate(-100px, -100px) scale(3,3) }
                100% { -webkit-transform: translate(0px ,0px) scale(1,1) }
            }
            @keyframes left-top { 
                0% { transform: translate(-100px, -100px) scale(3,3) }
                1% { transform: translate(-100px, -100px) scale(3,3) }
                100% { transform: translate(0px, 0px) scale(1,1) }
            }
            @-moz-keyframes right-top { 
                0% { -webki-transform: translate(100px, -200px) scale(3,3) }
                1% { -webkit-transform: translate(100px, -200px) scale(3,3) }
                100% { -webkit-transform: translate(0px ,0px) scale(1,1) }
            }
            @-webkit-keyframes right-top { 
                0% { -webki-transform: translate(100px, -200px) scale(3,3) }
                1% { -webkit-transform: translate(100px, -200px) scale(3,3) }
                100% { -webkit-transform: translate(0px ,0px) scale(1,1) }
            }
            @keyframes right-top { 
                0% { transform: translate(100px, -200px) scale(3,3) }
                1% { transform: translate(100px, -200px) scale(3,3) }
                100% { transform: translate(0px, 0px) scale(1,1) }
            }
            @-moz-keyframes right { 
                0% { -webki-transform: translate(100px, 0px) }
                1% { -webkit-transform: translate(100px, 0px) }
                100% { -webkit-transform: translate(0px ,0px) }
            }
            @-webkit-keyframes right { 
                0% { -webki-transform: translate(100px, 0px) }
                1% { -webkit-transform: translate(100px, 0px) }
                100% { -webkit-transform: translate(0px ,0px) }
            }
            @keyframes right { 
                0% { transform: translate(100px, 0px) }
                1% { transform: translate(100px, 0px) }
                100% { transform: translate(0px, 0px) }
            }
            @-moz-keyframes left { 
                0% { -webki-transform: translate(-100px, 0px) }
                1% { -webkit-transform: translate(-100px, 0px) }
                100% { -webkit-transform: translate(0px ,0px) }
            }
            @-webkit-keyframes left { 
                0% { -webki-transform: translate(-100px, 0px) }
                1% { -webkit-transform: translate(-100px, 0px) }
                100% { -webkit-transform: translate(0px ,0px) }
            }
            @keyframes left { 
                0% { transform: translate(-100px, 0px) }
                1% { transform: translate(-100px, 0px) }
                100% { transform: translate(0px, 0px) }
            }
            /*=============================================
            [ Inactive Styles ]
            ==============================================*/
            /*Genral*/
            .flat-line .icon > path {
                stroke: #fff;
                stroke-width: 3px;
                fill: transparent;
                transform: translate(0px, 0px) scale(1,1);
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
            }
            .flat-line .circle {
                stroke: #fff;
                stroke-width: 3px;
                fill: #52be7f;
                transform: translate(0px, 0px) scale(1,1);
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
            }
            /*Exceptions*/
            .flat-line .icon > .lightning {
                stroke: #fff;
                stroke-width: 1.5px;
                fill: transparent;
                transform: translate(0px, 0px) scale(1,1);
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
            }
            #line-user .collar_right {
                fill: #52be7f;
                transform: translate(0px, 0px) scale(1,1);
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
            }
            #line-user .collar_left {
                fill: #52be7f;
                transform: translate(0px, 0px) scale(1,1);
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
            }
            #line-lightning .bolt {
                stroke: #fff;
                stroke-width: 3px;
                fill: transparent;
                transform: translate(0px, 0px) scale(1,1);
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
            }
            #line-lightning .highlight {
                fill: transparent;
                stroke: 0px;
                transform: translate(0px, 0px) scale(1,1);
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
            }
            #line-mic .bars_right rect {
                fill: #52be7f;
                transform: translate(0px, 0px) scale(1,1);
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
            }
            #line-coffee .top {
                fill: #52be7f;
                transform: translate(0px, 0px) scale(1,1);
                -webkit-transform: translate(0px ,0px) scale(1,1);
                -moz-transform: translate(0px ,0px) scale(1,1);
            }
            /*Specifics*/
            #line-browser .green {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-browser .orange {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-browser .red {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-browser .screen {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-brush .brush_silver {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-calander .number {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-camera .lens_inner {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-camera .lens {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-camera .strip {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-camera .red {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-clock .seconds {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-clock .middle {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-clock .hour {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-clock .minute {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-clock .face {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-coffee .top {
                fill: transparent;
                stroke-width: 3px;
                stroke: #fff;
            }
            #line-coffee .middle {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-disk .top {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-disk .top_right {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-disk .text {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-email .paper {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-email .text {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-film .top {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-film .bottom {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-folder .paper_front {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-folder .paper_back {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-graph .dot_1,
            #line-graph .dot_2,
            #line-graph .dot_3,
            #line-graph .dot_4 {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-home .hole {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-home .roof { -webkit-transform: translateY(-5px) }
            #line-location .inner {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-lock .keyhole {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-lock .baselight {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-magnify .glass {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-message .dots {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-picture .sun {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-picture .mountain {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-mic .bars_left {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-mic .bars_right rect {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-paper .text {
                fill: transparent;
                stroke-width: 0px;
            }
            #line-paper .corner {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-pencil .metal {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-phone .screen {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-phone .details {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-robot .eyes {
                fill: #FFFFFF;
                stroke-width: 0px;
            }
            #line-suitcase .buttons {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-tag .dot {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-thumbsdown .dot {
                fill: #FFFFFF;
                stroke-width: 0px;
            }
            #line-thumbsup .dot {
                fill: #FFFFFF;
                stroke-width: 0px;
            }
            #line-trash .details {
                fill: #FFF;
                stroke-width: 0px;
            }
            #line-winner .text {
                fill: #FFFFFF;
                : ;
                stroke-width: 0px;
            }
            #line-spaceship .light {
                -webkit-transform: translateY(1px);
                -moz-transform: translateY(1px);
                transform: translateY(1px);
            }
            /*=============================================
            [ Hover Styles ]
            ==============================================*/
            .flat-line:hover .icon {
                -moz-transform: scale(1,1);
                -webkit-transform: scale(1,1);
                transform: scale(1,1);
                /*animation-name*/
                -webkit-animation-name: line-burst;
                -moz-animation-name: line-burst;
                -ms-animation-name: line-burst;
                -o-animation-name: line-burst;
                animation-name: line-burst;
                /*animation-duration*/
                -webkit-animation-duration: .4s;
                -moz-animation-duration: .4s;
                -ms-animation-duration: .4s;
                -o-animation-duration: .4s;
                animation-duration: .4s;
                /*transform-origin*/
                -webkit-transform-origin: 50% 50%;
                -moz-transform-origin: 50px 50px !important;
                -ms-transform-origin: 50% 50%;
                -o-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
            }
            .flat-line:hover .icon > path {
                stroke: transparent;
                stroke-width: 0px;
            }
            .flat-line:hover .circle {
                stroke: transparent;
                stroke-width: 0px;
            }
            /*Exceptions*/
            .flat-line:hover .icon > .lightning {
                stroke: transparent;
                stroke-width: 0px;
            }
            .flat-line:hover #line-user .collar_right {
                stroke: transparent;
                stroke-width: 0px;
            }
            .flat-line:hover#line-user .collar_left {
                stroke: transparent;
                stroke-width: 0px;
            }
            .flat-line:hover #line-lightning .bolt {
                stroke: transparent;
                stroke-width: 0px;
            }
            .flat-line:hover #line-lightning .highlight {
                stroke: transparent;
                stroke-width: 0px;
            }
            .flat-line:hover #line-mic .bars_right rect {
                stroke: transparent;
                stroke-width: 0px;
            }
            .flat-line:hover #line-coffee .top {
                stroke: transparent;
                stroke-width: 0px;
            }
            #line-browser:hover .circle { fill: #B1EB5B }
            #line-browser:hover .screen { fill: #b0b0b0 }
            #line-browser:hover .base { fill: #b0b0b0 }
            #line-browser:hover .top { fill: #8F8F8F }
            #line-browser:hover .green { fill: #AEE42D }
            #line-browser:hover .orange { fill: #FFD02C }
            #line-browser:hover .red { fill: #E64545 }
            #line-brush:hover .brush_base { fill: #00A3C6 }
            #line-brush:hover .brush_highlight { fill: #43C1DC }
            #line-brush:hover .brush_silver { fill: #C8C8C8 }
            #line-brush:hover .brush_tip { fill: #917152 }
            #line-brush:hover .circle { fill: #F0A878 }
            #line-calander:hover .circle { fill: #F3CF3F }
            #line-calander:hover .base_top { fill: #5B3F89 }
            #line-calander:hover .left { fill: #848484 }
            #line-calander:hover .right { fill: #848484 }
            #line-calander:hover .number { fill: #fff }
            #line-calander:hover .base_bottom { fill: #644892 }
            #line-camera:hover  .circle { fill: #F39C12 }
            #line-camera:hover .base { fill: #E0DECD }
            #line-camera:hover .strip { fill: #3376D2 }
            #line-camera:hover .lens { fill: #CAC8B7 }
            #line-camera:hover .lens_inner { fill: #A6A495 }
            #line-camera:hover .flash { fill: #FFF }
            #line-camera:hover .red { fill: #D25133 }
            #line-camera:hover .button { fill: #A6A496 }
            #line-clock:hover .circle { fill: #02BD85 }
            #line-clock:hover .base { fill: #FF8933 }
            #line-clock:hover .face { fill: #FFF }
            #line-clock:hover .seconds { fill: #FF725F }
            #line-clock:hover .middle { fill: #808080 }
            #line-clock:hover .hour { fill: #808080 }
            #line-clock:hover .minute { fill: #808080 }
            #line-coffee:hover .circle { fill: #82D8B5 }
            #line-coffee:hover .base { fill: #8F6349 }
            #line-coffee:hover .middle { fill: #9C8679 }
            #line-coffee:hover .top { fill: #F1F1F1 }
            #line-diamond:hover .circle { fill: #02BD85 }
            #line-diamond:hover .middle { fill: #D87598 }
            #line-diamond:hover .top_3 { fill: #FFC8DB }
            #line-diamond:hover .top_2 { fill: #F2A0BD }
            #line-diamond:hover .top_1 { fill: #F2A0BD }
            #line-diamond:hover .top_left { fill: #D87598 }
            #line-diamond:hover .top_right { fill: #D87598 }
            #line-diamond:hover .right { fill: #C15179 }
            #line-diamond:hover .left { fill: #FFC8DB }
            #line-disk:hover .circle { fill: #F3CF3F }
            #line-disk:hover .base { fill: #5D699B }
            #line-disk:hover .top { fill: #B2B2B2 }
            #line-disk:hover .top_right { fill: #747A90 }
            #line-disk:hover .bottom { fill: #D9D9C2 }
            #line-disk:hover .text { fill: #747A90 }
            #line-email:hover .circle { fill: #7D79BC }
            #line-email:hover .top { fill: #3DD97F }
            #line-email:hover .paper { fill: #FFFFFF }
            #line-email:hover .base { fill: #2DB466 }
            #line-email:hover .text { fill: #BBBBBB }
            #line-film:hover .circle { fill: #8DD0BE }
            #line-film:hover .base { fill: #6E6E6E }
            #line-film:hover .bottom { fill: #515151 }
            #line-film:hover .top { fill: #8C8C8C }
            #line-flag:hover .circle { fill: #8DD0BE }
            #line-flag:hover .bottom { fill: #FF5400 }
            #line-flag:hover .shadow { fill: #C03F00 }
            #line-flag:hover .top { fill: #FF5400 }
            #line-flag:hover .pole { fill: #676767 }
            #line-folder:hover .circle { fill: #82D8B5 }
            #line-folder:hover .back { fill: #9C4588 }
            #line-folder:hover .paper_back { fill: #D9D9D9 }
            #line-folder:hover .paper_front { fill: #fff }
            #line-folder:hover .front { fill: #BF67AB }
            #line-graph:hover .circle { fill: #E3A7C0 }
            #line-graph:hover .bar_left { fill: #7BC156 }
            #line-graph:hover .bar_middle { fill: #92D76C }
            #line-graph:hover .bar_right { fill: #64A242 }
            #line-graph:hover .front { fill:  }
            #line-graph:hover .dot_4,
            #line-graph:hover .dot_3,
            #line-graph:hover .dot_2,
            #line-graph:hover .dot_1 { fill: #fff }
            #line-heart:hover .circle { fill: #02BD85 }
            #line-heart:hover .base { fill: #BC4B36 }
            #line-heart:hover .left { fill: #db5940 }
            #line-home:hover .circle { fill: #02BD85 }
            #line-home:hover .base { fill: #F1F1F1 }
            #line-home:hover .hole { fill: #C3C3C3 }
            #line-home:hover .roof { fill: #D34141 }
            #line-lightning:hover .circle { fill: #423D5B }
            #line-lightning:hover .bolt { fill: #FFD928 }
            #line-lightning:hover .highlight { fill: #FFF3B9 }
            #line-location:hover .circle { fill: #4890A8 }
            #line-location:hover .base { fill: #B6351B }
            #line-location:hover .inner { fill: #7E2412 }
            #line-lock:hover .circle { fill: #02AF7E }
            #line-lock:hover .base { fill: #C9A80D }
            #line-lock:hover .baselight { fill: #D9BC36 }
            #line-lock:hover .keyhole { fill: #8A7200 }
            #line-lock:hover .bar { fill: #C6C6C6 }
            #line-magnify:hover .circle { fill: #F2D65F }
            #line-magnify:hover .base { fill: #34B9F1 }
            #line-magnify:hover .glass { fill: #8DDDFF }
            #line-message:hover .circle { fill: #AC5D9F }
            #line-message:hover .back { fill: #FFAD10 }
            #line-message:hover .front { fill: #00A3C6 }
            #line-message:hover .dots { fill: #006A81 }
            #line-mic:hover .circle { fill: #F3CF3F }
            #line-mic:hover .base { fill: #40979F }
            #line-mic:hover .stand { fill: #5F8083 }
            #line-mic:hover .bars_left { fill: #267178 }
            #line-mic:hover .bars_right rect { fill: #267178 }
            #line-paper:hover .circle { fill: #D6D6B8 }
            #line-paper:hover .base { fill: #929292 }
            #line-paper:hover .front { fill: #FFFFFF }
            #line-paper:hover .corner { fill: #D6D6D6 }
            #line-paper:hover .text { fill: #BBBBBB }
            #line-pencil:hover .circle { fill: #CDEFE1 }
            #line-pencil:hover .wood { fill: #FFC833 }
            #line-pencil:hover .base_top { fill: #456FD8 }
            #line-pencil:hover .base_bottom { fill: #3258B6 }
            #line-pencil:hover .base_middle { fill: #567FE5 }
            #line-pencil:hover .tip { fill: #567FE5 }
            #line-pencil:hover .eraser { fill: #FF72B1 }
            #line-pencil:hover .metal { fill: #C6C6C6 }
            #line-phone:hover .circle { fill: #E55D57 }
            #line-phone:hover .base { fill: #6F82A4 }
            #line-phone:hover .screen { fill: #A5B5D3 }
            #line-phone:hover .details { fill: #516078 }
            #line-picture:hover .circle { fill: #B1EB5B }
            #line-picture:hover .back { fill: #A46B49 }
            #line-picture:hover .front { fill: #CE8A61 }
            #line-picture:hover .sky { fill: #DCF5FF }
            #line-picture:hover .sun { fill: #FF7800 }
            #line-picture:hover .mountain { fill: #3B8C1E }
            #line-plane:hover .circle { fill: #E88D70 }
            #line-plane:hover .bottom { fill: #007D7E }
            #line-plane:hover .right { fill: #4ED0D1 }
            #line-plane:hover .middle { fill: #3AAAAB }
            #line-plane:hover .left { fill: #4ED0D1 }
            #line-present:hover .circle { fill: #4890A8 }
            #line-present:hover .base { fill: #F1F1F1 }
            #line-present:hover .top { fill: #C3C3C3 }
            #line-present:hover .ribbon { fill: #D34141 }
            #line-robot:hover .circle { fill: #E88D70 }
            #line-robot:hover .ears { fill: #39517A }
            #line-robot:hover .base { fill: #4C70AF }
            #line-robot:hover .highlight { fill: #6384BE }
            #line-robot:hover .antenna { fill: #A0ABBD }
            #line-robot:hover .eyes { fill: #FFFFFF }
            #line-rocket:hover .circle { fill: #4BAE97 }
            #line-rocket:hover .engine { fill: #7D7D7D }
            #line-rocket:hover .base { fill: #B0CED8 }
            #line-rocket:hover .window { fill: #8BABB6 }
            #line-rocket:hover .glass { fill: #FFFFFF }
            #line-rocket:hover .flame { fill: #FF5400 }
            #line-screen:hover .circle { fill: #F8B243 }
            #line-screen:hover .stand { fill: #516078 }
            #line-screen:hover .base { fill: #6F82A4 }
            #line-screen:hover .highlight { fill: #A5B5D3 }
            #line-screen:hover .logo { fill: #516078 }
            #line-settings:hover .circle { fill: #E3A7C0 }
            #line-settings:hover .base { fill: #8BAE5D }
            #line-settings:hover .top { fill: #698741 }
            #line-spaceship:hover .circle { fill: #02BD85 }
            #line-spaceship:hover .light { fill: #FFF3B9 }
            #line-spaceship:hover .glass { fill: #8DDDFF }
            #line-spaceship:hover .base { fill: #7E8CA6 }
            #line-spaceship:hover .circles { fill: #56627A }
            #line-storm:hover .circle { fill: #90C0D8 }
            #line-storm:hover .cloud { fill: #858585 }
            #line-storm:hover .lightning { fill: #FFAD10 }
            #line-suitcase:hover .circle { fill: #02BD85 }
            #line-suitcase:hover .top { fill: #9A4C1D }
            #line-suitcase:hover .bottom { fill: #B75B24 }
            #line-suitcase:hover .buttons { fill: #C89211 }
            #line-tag:hover .circle { fill: #D6D6B8 }
            #line-tag:hover .base { fill: #FFBA00 }
            #line-tag:hover .dot { fill: #C38E00 }
            #line-thumbsdown:hover .circle { fill: #E74C3C }
            #line-thumbsdown:hover .base { fill: #F1CDB0 }
            #line-thumbsdown:hover .sleeve { fill: #E1AF45 }
            #line-thumbsdown:hover .cuff { fill: #339FA9 }
            #line-thumbsdown:hover .dot { fill: #FFFFFF }
            #line-thumbsup:hover .circle { fill: #02BD85 }
            #line-thumbsup:hover .base { fill: #F1CDB0 }
            #line-thumbsup:hover .sleeve { fill: #854D37 }
            #line-thumbsup:hover .cuff { fill: #C24C28 }
            #line-thumbsup:hover .dot { fill: #FFFFFF }
            #line-trash:hover .circle { fill: #90C0D8 }
            #line-trash:hover .base { fill: #8C8C8C }
            #line-trash:hover .details { fill: #515151 }
            #line-trash:hover .lid { fill: #6E6E6E }
            #line-user:hover .circle { fill: #D1F274 }
            #line-user:hover .body { fill: #44B2B6 }
            #line-user:hover .collar_right { fill: #FFFFFF }
            #line-user:hover .collar_left { fill: #FFFFFF }
            #line-user:hover .head { fill: #F1CDB0 }
            #line-user:hover .hair { fill: #AB6125 }
            #line-winner:hover .circle { fill: #F8B243 }
            #line-winner:hover .ribbon { fill: #5BB3F0 }
            #line-winner:hover .base { fill: #1983CD }
            #line-winner:hover .text { fill: #FFFFFF }
            @-webkit-keyframes line-burst { 
                 {
                    -webkit-transform: scale(1.1);
                    animation-timing-function: ease-in;
                }
                37% {
                    -webkit-transform: scale(1.3);
                    animation-timing-function: ease-out;
                }
                55% {
                    -webkit-transform: scale(1.17);
                    animation-timing-function: ease-in;
                }
                73% {
                    -webkit-transform: scale(1.05);
                    animation-timing-function: ease-out;
                }
                82% {
                    -webkit-transform: scale(1.2);
                    animation-timing-function: ease-in;
                }
                91% {
                    -webkit-transform: scale(1.3);
                    animation-timing-function: ease-out;
                }
                96% {
                    -webkit-transform: scale(1.2);
                    animation-timing-function: ease-in;
                }
                100% {
                    -webkit-transform: scale(1.1);
                    animation-timing-function: ease-out;
                }
            }
            @-moz-keyframes line-burst { 
                 {
                    -moz-transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
                37% {
                    -moz-transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                55% {
                    -moz-transform: scale(1.37,1.37);
                    animation-timing-function: ease-in;
                }
                73% {
                    -moz-transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
                82% {
                    -moz-transform: scale(1.45,1.45);
                    animation-timing-function: ease-in;
                }
                91% {
                    -moz-transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                96% {
                    -moz-transform: scale(1.4,1.4);
                    animation-timing-function: ease-in;
                }
                100% {
                    -moz-transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
            }
            @keyframes line-burst { 
                 {
                    transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
                37% {
                    transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                55% {
                    transform: scale(1.37,1.37);
                    animation-timing-function: ease-in;
                }
                73% {
                    transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
                82% {
                    transform: scale(1.45,1.45);
                    animation-timing-function: ease-in;
                }
                91% {
                    transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                96% {
                    transform: scale(1.4,1.4);
                    animation-timing-function: ease-in;
                }
                100% {
                    transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
            }
            #shadow-camera  .circle { fill: #F39C12 }
            #shadow-camera .base { fill: #E0DECD }
            #shadow-camera .strip { fill: #3376D2 }
            #shadow-camera .lens { fill: #CAC8B7 }
            #shadow-camera .lens_inner { fill: #A6A495 }
            #shadow-camera .flash { fill: #FFF }
            #shadow-camera .red { fill: #D25133 }
            #shadow-camera .button { fill: #A6A496 }
            #shadow-browser .circle { fill: #B1EB5B }
            #shadow-browser .screen { fill: #b0b0b0 }
            #shadow-browser .base { fill: #b0b0b0 }
            #shadow-browser .top { fill: #8F8F8F }
            #shadow-browser .green { fill: #AEE42D }
            #shadow-browser .orange { fill: #b0b0b0 }
            #shadow-browser .red { fill: #E64545 }
            #shadow-brush .brush_base { fill: #00A3C6 }
            #shadow-brush .brush_highlight { fill: #43C1DC }
            #shadow-brush .brush_silver { fill: #C8C8C8 }
            #shadow-brush .brush_tip { fill: #917152 }
            #shadow-brush .circle { fill: #F0A878 }
            #shadow-calander .circle { fill: #246f91 }
            #shadow-calander .base_top { fill: #5B3F89 }
            #shadow-calander .left { fill: #848484 }
            #shadow-calander .right { fill: #848484 }
            #shadow-calander .number { fill: #fff }
            #shadow-calander .base_bottom { fill: #644892 }
            #shadow-clock .circle { fill: #02BD85 }
            #shadow-clock .base { fill: #FF8933 }
            #shadow-clock .face { fill: #FFF }
            #shadow-clock .seconds { fill: #FF725F }
            #shadow-clock .middle { fill: #808080 }
            #shadow-clock .hour { fill: #808080 }
            #shadow-clock .minute { fill: #808080 }
            #shadow-coffee .circle { fill: #90c0d8 }
            #shadow-coffee .base { fill: #8F6349 }
            #shadow-coffee .middle { fill: #9C8679 }
            #shadow-coffee .top { fill: #F1F1F1 }
            #shadow-diamond .circle { fill: #02BD85 }
            #shadow-diamond .middle { fill: #D87598 }
            #shadow-diamond .top_3 { fill: #FFC8DB }
            #shadow-diamond .top_2 { fill: #F2A0BD }
            #shadow-diamond .top_1 { fill: #F2A0BD }
            #shadow-diamond .top_left { fill: #D87598 }
            #shadow-diamond .top_right { fill: #D87598 }
            #shadow-diamond .right { fill: #C15179 }
            #shadow-diamond .left { fill: #FFC8DB }
            #shadow-disk .circle { fill: #f07848 }
            #shadow-disk .base { fill: #5D699B }
            #shadow-disk .top { fill: #B2B2B2 }
            #shadow-disk .top_right { fill: #747A90 }
            #shadow-disk .bottom { fill: #D9D9C2 }
            #shadow-disk .text { fill: #747A90 }
            #shadow-email .circle { fill: #7D79BC }
            #shadow-email .top { fill: #3DD97F }
            #shadow-email .paper { fill: #FFFFFF }
            #shadow-email .base { fill: #2DB466 }
            #shadow-email .text { fill: #BBBBBB }
            #shadow-film .circle { fill: #8DD0BE }
            #shadow-film .base { fill: #6E6E6E }
            #shadow-film .bottom { fill: #515151 }
            #shadow-film .top { fill: #8C8C8C }
            #shadow-flag .circle { fill: #8DD0BE }
            #shadow-flag .bottom { fill: #FF5400 }
            #shadow-flag .shadow { fill: #C03F00 }
            #shadow-flag .top { fill: #FF5400 }
            #shadow-flag .pole { fill: #676767 }
            #shadow-folder .circle { fill: #82D8B5 }
            #shadow-folder .back { fill: #9C4588 }
            #shadow-folder .paper_back { fill: #D9D9D9 }
            #shadow-folder .paper_front { fill: #fff }
            #shadow-folder .front { fill: #BF67AB }
            #shadow-graph .circle { fill: #E3A7C0 }
            #shadow-graph .bar_left { fill: #7BC156 }
            #shadow-graph .bar_middle { fill: #92D76C }
            #shadow-graph .bar_right { fill: #64A242 }
            #shadow-graph .front { fill:  }
            #shadow-graph .dot_4,
            #shadow-graph .dot_3,
            #shadow-graph .dot_2,
            #shadow-graph .dot_1 { fill: #fff }
            #shadow-heart .circle { fill: #02BD85 }
            #shadow-heart .base { fill: #BC4B36 }
            #shadow-heart .left { fill: #db5940 }
            #shadow-home .circle { fill: #02BD85 }
            #shadow-home .base { fill: #F1F1F1 }
            #shadow-home .hole { fill: #C3C3C3 }
            #shadow-home .roof { fill: #D34141 }
            #shadow-lightning .circle { fill: #423D5B }
            #shadow-lightning .bolt { fill: #FFD928 }
            #shadow-lightning .highlight { fill: #FFF3B9 }
            #shadow-location .circle { fill: #4890A8 }
            #shadow-location .base { fill: #B6351B }
            #shadow-location .inner { fill: #7E2412 }
            #shadow-lock .circle { fill: #02AF7E }
            #shadow-lock .base { fill: #C9A80D }
            #shadow-lock .baselight { fill: #D9BC36 }
            #shadow-lock .keyhole { fill: #8A7200 }
            #shadow-lock .bar { fill: #C6C6C6 }
            #shadow-magnify .circle { fill: #F2D65F }
            #shadow-magnify .base { fill: #34B9F1 }
            #shadow-magnify .glass { fill: #8DDDFF }
            #shadow-message .circle { fill: #AC5D9F }
            #shadow-message .back { fill: #FFAD10 }
            #shadow-message .front { fill: #00A3C6 }
            #shadow-message .dots { fill: #006A81 }
            #shadow-mic .circle { fill: #f39c12 }
            #shadow-mic .base { fill: #40979F }
            #shadow-mic .stand { fill: #5F8083 }
            #shadow-mic .bars_left { fill: #267178 }
            #shadow-mic .bars_right rect { fill: #267178 }
            #shadow-paper .circle { fill: #D6D6B8 }
            #shadow-paper .base { fill: #929292 }
            #shadow-paper .front { fill: #FFFFFF }
            #shadow-paper .corner { fill: #D6D6D6 }
            #shadow-paper .text { fill: #BBBBBB }
            #shadow-pencil .circle { fill: #CDEFE1 }
            #shadow-pencil .wood { fill: #FFC833 }
            #shadow-pencil .base_top { fill: #456FD8 }
            #shadow-pencil .base_bottom { fill: #3258B6 }
            #shadow-pencil .base_middle { fill: #567FE5 }
            #shadow-pencil .tip { fill: #567FE5 }
            #shadow-pencil .eraser { fill: #FF72B1 }
            #shadow-pencil .metal { fill: #C6C6C6 }
            #shadow-phone .circle { fill: #E55D57 }
            #shadow-phone .base { fill: #6F82A4 }
            #shadow-phone .screen { fill: #A5B5D3 }
            #shadow-phone .details { fill: #516078 }
            #shadow-picture .circle { fill: #B1EB5B }
            #shadow-picture .back { fill: #A46B49 }
            #shadow-picture .front { fill: #CE8A61 }
            #shadow-picture .sky { fill: #DCF5FF }
            #shadow-picture .sun { fill: #FF7800 }
            #shadow-picture .mountain { fill: #3B8C1E }
            #shadow-plane .circle { fill: #E88D70 }
            #shadow-plane .bottom { fill: #007D7E }
            #shadow-plane .right { fill: #4ED0D1 }
            #shadow-plane .middle { fill: #3AAAAB }
            #shadow-plane .left { fill: #4ED0D1 }
            #shadow-present .circle { fill: #4890A8 }
            #shadow-present .base { fill: #F1F1F1 }
            #shadow-present .top { fill: #C3C3C3 }
            #shadow-present .ribbon { fill: #D34141 }
            #shadow-robot .circle { fill: #E88D70 }
            #shadow-robot .ears { fill: #39517A }
            #shadow-robot .base { fill: #4C70AF }
            #shadow-robot .highlight { fill: #6384BE }
            #shadow-robot .antenna { fill: #A0ABBD }
            #shadow-robot .eyes { fill: #FFFFFF }
            #shadow-rocket .circle { fill: #4BAE97 }
            #shadow-rocket .engine { fill: #7D7D7D }
            #shadow-rocket .base { fill: #B0CED8 }
            #shadow-rocket .window { fill: #8BABB6 }
            #shadow-rocket .glass { fill: #FFFFFF }
            #shadow-rocket .flame { fill: #FF5400 }
            #shadow-screen .circle { fill: #F8B243 }
            #shadow-screen .stand { fill: #516078 }
            #shadow-screen .base { fill: #6F82A4 }
            #shadow-screen .highlight { fill: #A5B5D3 }
            #shadow-screen .logo { fill: #516078 }
            #shadow-settings .circle { fill: #E3A7C0 }
            #shadow-settings .base { fill: #8BAE5D }
            #shadow-settings .top { fill: #698741 }
            #shadow-spaceship .circle { fill: #02BD85 }
            #shadow-spaceship .light { fill: #FFF3B9 }
            #shadow-spaceship .glass { fill: #8DDDFF }
            #shadow-spaceship .base { fill: #7E8CA6 }
            #shadow-spaceship .circles { fill: #56627A }
            #shadow-storm .circle { fill: #90C0D8 }
            #shadow-storm .cloud { fill: #858585 }
            #shadow-storm .lightning { fill: #FFAD10 }
            #shadow-suitcase .circle { fill: #02BD85 }
            #shadow-suitcase .top { fill: #9A4C1D }
            #shadow-suitcase .bottom { fill: #B75B24 }
            #shadow-suitcase .buttons { fill: #C89211 }
            #shadow-tag .circle { fill: #D6D6B8 }
            #shadow-tag .base { fill: #FFBA00 }
            #shadow-tag .dot { fill: #C38E00 }
            #shadow-thumbsdown .circle { fill: #E74C3C }
            #shadow-thumbsdown .base { fill: #F1CDB0 }
            #shadow-thumbsdown .sleeve { fill: #E1AF45 }
            #shadow-thumbsdown .cuff { fill: #339FA9 }
            #shadow-thumbsdown .dot { fill: #FFFFFF }
            #shadow-thumbsup .circle { fill: #02BD85 }
            #shadow-thumbsup .base { fill: #F1CDB0 }
            #shadow-thumbsup .sleeve { fill: #854D37 }
            #shadow-thumbsup .cuff { fill: #C24C28 }
            #shadow-thumbsup .dot { fill: #FFFFFF }
            #shadow-trash .circle { fill: #90C0D8 }
            #shadow-trash .base { fill: #8C8C8C }
            #shadow-trash .details { fill: #515151 }
            #shadow-trash .lid { fill: #6E6E6E }
            #shadow-user .circle { fill: #D1F274 }
            #shadow-user .body { fill: #44B2B6 }
            #shadow-user .collar_right { fill: #FFFFFF }
            #shadow-user .collar_left { fill: #FFFFFF }
            #shadow-user .head { fill: #F1CDB0 }
            #shadow-user .hair { fill: #AB6125 }
            #shadow-winner .circle { fill: #F8B243 }
            #shadow-winner .ribbon { fill: #5BB3F0 }


            #shadow-winner .base { fill: #1983CD }
            #shadow-winner .text { fill: #FFFFFF }
            .iconwrap {
                display: block;
                width: 168px;
                height: 170px;
                margin: 0;
                padding: 0;
                float: left;
                position: relative;
            }
            .long-shadow {
                background: url(http://www.pencilscoop.com/demos/animated-svg/demo/images/long_shadow.png) no-repeat;
                width: 168px;
                height: 170px;
                position: absolute;
                z-index: 1;
                opacity: 0;
                -webkit-transition: all 0.2s;
                -moz-transition: all .2s;
                transition: all .2s;
                display: block;
                top: 47px;
                left: 35px;
            }
            .flat-shadow {
                z-index: 999;
                position: relative;
            }
            .iconwrap:hover .long-shadow {
                opacity: 1;
                -moz-transition-delay: .5s !important;
                -webkit-transition-delay: .5s !important;
                transition-delay: .5s !important;
            }
            .flat-shadow:hover .icon {
                -moz-transform: scale(1,1);
                -webkit-transform: scale(1,1);
                transform: scale(1,1);
                /*animation-name*/
                -webkit-animation-name: shadow-burst;
                -moz-animation-name: shadow-burst;
                -ms-animation-name: shadow-burst;
                -o-animation-name: shadow-burst;
                animation-name: shadow-burst;
                /*animation-duration*/
                -webkit-animation-duration: .4s;
                -moz-animation-duration: .4s;
                -ms-animation-duration: .4s;
                -o-animation-duration: .4s;
                animation-duration: .4s;
                /*transform-origin*/
                -webkit-transform-origin: 50% 50%;
                -moz-transform-origin: 50px 50px !important;
                -ms-transform-origin: 50% 50%;
                -o-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
            }
            @-webkit-keyframes shadow-burst { 
                 {
                    -webkit-transform: scale(1.1);
                    animation-timing-function: ease-in;
                }
                37% {
                    -webkit-transform: scale(1.3);
                    animation-timing-function: ease-out;
                }
                55% {
                    -webkit-transform: scale(1.17);
                    animation-timing-function: ease-in;
                }
                73% {
                    -webkit-transform: scale(1.05);
                    animation-timing-function: ease-out;
                }
                82% {
                    -webkit-transform: scale(1.2);
                    animation-timing-function: ease-in;
                }
                91% {
                    -webkit-transform: scale(1.3);
                    animation-timing-function: ease-out;
                }
                96% {
                    -webkit-transform: scale(1.2);
                    animation-timing-function: ease-in;
                }
                100% {
                    -webkit-transform: scale(1.1);
                    animation-timing-function: ease-out;
                }
            }
            @-moz-keyframes shadow-burst { 
                 {
                    -moz-transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
                37% {
                    -moz-transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                55% {
                    -moz-transform: scale(1.37,1.37);
                    animation-timing-function: ease-in;
                }
                73% {
                    -moz-transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
                82% {
                    -moz-transform: scale(1.45,1.45);
                    animation-timing-function: ease-in;
                }
                91% {
                    -moz-transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                96% {
                    -moz-transform: scale(1.4,1.4);
                    animation-timing-function: ease-in;
                }
                100% {
                    -moz-transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
            }
            @keyframes shadow-burst { 
                 {
                    transform: scale(1,1);
                    animation-timing-function: ease-in;
                }
                37% {
                    transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                55% {
                    transform: scale(1.37,1.37);
                    animation-timing-function: ease-in;
                }
                73% {
                    transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
                82% {
                    transform: scale(1.45,1.45);
                    animation-timing-function: ease-in;
                }
                91% {
                    transform: scale(1.5,1.5);
                    animation-timing-function: ease-out;
                }
                96% {
                    transform: scale(1.4,1.4);
                    animation-timing-function: ease-in;
                }
                100% {
                    transform: scale(1,1);
                    animation-timing-function: ease-out;
                }
            }
            @media only screen and (-webkit-min-device-pixel-ratio: 2), 
            only screen and (min--moz-device-pixel-ratio: 2), 
            only screen and (-o-min-device-pixel-ratio: 2/1), 
            only screen and (min-device-pixel-ratio: 2), 
            only screen and (min-resolution: 192dpi), 
            only screen and (min-resolution: 2dppx) { 
                .long-shadow {
                    background: url(http://www.pencilscoop.com/demos/animated-svg/demo/images/long_shadow@2x.png) no-repeat;
                    width: 168px;
                    height: 170px;
                    background-size: 168px 170px;
                }
            }
        </style>
    </head>
    <body>
        <header>
        <a class="back left" href="http://www.pencilscoop.com/2013/12/150-free-animated-svg-icons"> Back to Pencil Scoop Article</a>
        <a class="back right" href="http://www.pencilscoop.com/"> Back To HomePage</a>
        <h1>Animated SVG Icons With Pure CSS</h1>
        </header>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div id="pagewrap">
                    <div class="innerwrap yellow">
                        <div class="iconholder">
                            <h2>Animated SVG Icons: Flat Design With Shadow Hovers</h2>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-browser"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-brush"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-calander"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-camera"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-clock"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-coffee"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-diamond"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-disk"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-email"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-film"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-flag"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-folder"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-graph"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-heart"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-home"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-lightning"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-location"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-lock"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-magnify"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-message"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-mic"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-paper"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-pencil"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-phone"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-picture"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-plane"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-present"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-robot"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-rocket"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-screen"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-settings"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-spaceship"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-storm"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-suitcase"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-tag"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-thumbsdown"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-thumbsup"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-trash"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-user"></span></span>
                            <span class="iconwrap"><span class="long-shadow"></span><span class="svg-icon flat-shadow" id="shadow-winner"></span></span>
                        </div><!-- IconHolder End-->
                    </div><!--iconholder End-->
    
                    <div class="innerwrap red">
                        <div class="iconholder">
                            <h2>Animated SVG Icons: Flat Design</h2>
                            <span class="svg-icon flat-filled" id="filled-browser"></span>
                            <span class="svg-icon flat-filled" id="filled-brush"></span>
                            <span class="svg-icon flat-filled" id="filled-calander"></span>
                            <span class="svg-icon flat-filled" id="filled-camera"></span>
                            <span class="svg-icon flat-filled" id="filled-clock"></span>
                            <span class="svg-icon flat-filled" id="filled-coffee"></span>
                            <span class="svg-icon flat-filled" id="filled-diamond"></span>
                            <span class="svg-icon flat-filled" id="filled-disk"></span>
                            <span class="svg-icon flat-filled" id="filled-email"></span>
                            <span class="svg-icon flat-filled" id="filled-film"></span>
                            <span class="svg-icon flat-filled" id="filled-flag"></span>
                            <span class="svg-icon flat-filled" id="filled-folder"></span>
                            <span class="svg-icon flat-filled" id="filled-graph"></span>
                            <span class="svg-icon flat-filled" id="filled-heart"></span>
                            <span class="svg-icon flat-filled" id="filled-home"></span>
                            <span class="svg-icon flat-filled" id="filled-lightning"></span>
                            <span class="svg-icon flat-filled" id="filled-location"></span>
                            <span class="svg-icon flat-filled" id="filled-lock"></span>
                            <span class="svg-icon flat-filled" id="filled-magnify"></span>
                            <span class="svg-icon flat-filled" id="filled-message"></span>
                            <span class="svg-icon flat-filled" id="filled-mic"></span>
                            <span class="svg-icon flat-filled" id="filled-paper"></span>
                            <span class="svg-icon flat-filled" id="filled-pencil"></span>
                            <span class="svg-icon flat-filled" id="filled-phone"></span>
                            <span class="svg-icon flat-filled" id="filled-picture"></span>
                            <span class="svg-icon flat-filled" id="filled-plane"></span>
                            <span class="svg-icon flat-filled" id="filled-present"></span>
                            <span class="svg-icon flat-filled" id="filled-robot"></span>
                            <span class="svg-icon flat-filled" id="filled-rocket"></span>
                            <span class="svg-icon flat-filled" id="filled-screen"></span>
                            <span class="svg-icon flat-filled" id="filled-settings"></span>
                            <span class="svg-icon flat-filled" id="filled-spaceship"></span>
                            <span class="svg-icon flat-filled" id="filled-storm"></span>
                            <span class="svg-icon flat-filled" id="filled-suitcase"></span>
                            <span class="svg-icon flat-filled" id="filled-tag"></span>
                            <span class="svg-icon flat-filled" id="filled-thumbsdown"></span>
                            <span class="svg-icon flat-filled" id="filled-thumbsup"></span>
                            <span class="svg-icon flat-filled" id="filled-trash"></span>
                            <span class="svg-icon flat-filled" id="filled-user"></span>
                            <span class="svg-icon flat-filled" id="filled-winner"></span>
                        </div><!-- IconHolder End-->
                    </div><!--iconholder End-->
    
                    <div class="innerwrap green">
                        <div class="iconholder">
                            <h2>Animated SVG Icons: Flat Design</h2>
                            <span class="svg-icon flat-line" id="line-browser"></span>
                            <span class="svg-icon flat-line" id="line-brush"></span>
                            <span class="svg-icon flat-line" id="line-calander"></span>
                            <span class="svg-icon flat-line" id="line-camera"></span>
                            <span class="svg-icon flat-line" id="line-clock"></span>
                            <span class="svg-icon flat-line" id="line-coffee"></span>
                            <span class="svg-icon flat-line" id="line-diamond"></span>
                            <span class="svg-icon flat-line" id="line-disk"></span>
                            <span class="svg-icon flat-line" id="line-email"></span>
                            <span class="svg-icon flat-line" id="line-film"></span>
                            <span class="svg-icon flat-line" id="line-flag"></span>
                            <span class="svg-icon flat-line" id="line-folder"></span>
                            <span class="svg-icon flat-line" id="line-graph"></span>
                            <span class="svg-icon flat-line" id="line-heart"></span>
                            <span class="svg-icon flat-line" id="line-home"></span>
                            <span class="svg-icon flat-line" id="line-lightning"></span>
                            <span class="svg-icon flat-line" id="line-location"></span>
                            <span class="svg-icon flat-line" id="line-lock"></span>
                            <span class="svg-icon flat-line" id="line-magnify"></span>
                            <span class="svg-icon flat-line" id="line-message"></span>
                            <span class="svg-icon flat-line" id="line-mic"></span>
                            <span class="svg-icon flat-line" id="line-paper"></span>
                            <span class="svg-icon flat-line" id="line-pencil"></span>
                            <span class="svg-icon flat-line" id="line-phone"></span>
                            <span class="svg-icon flat-line" id="line-picture"></span>
                            <span class="svg-icon flat-line" id="line-plane"></span>
                            <span class="svg-icon flat-line" id="line-present"></span>
                            <span class="svg-icon flat-line" id="line-robot"></span>
                            <span class="svg-icon flat-line" id="line-rocket"></span>
                            <span class="svg-icon flat-line" id="line-screen"></span>
                            <span class="svg-icon flat-line" id="line-settings"></span>
                            <span class="svg-icon flat-line" id="line-spaceship"></span>
                            <span class="svg-icon flat-line" id="line-storm"></span>
                            <span class="svg-icon flat-line" id="line-suitcase"></span>
                            <span class="svg-icon flat-line" id="line-tag"></span>
                            <span class="svg-icon flat-line" id="line-thumbsdown"></span>
                            <span class="svg-icon flat-line" id="line-thumbsup"></span>
                            <span class="svg-icon flat-line" id="line-trash"></span>
                            <span class="svg-icon flat-line" id="line-user"></span>
                            <span class="svg-icon flat-line" id="line-winner"></span>
                        </div><!-- IconHolder End-->
                    </div><!--iconholder End-->
    
                    <div class="innerwrap teal">
                     <div class="iconholder">
                            <h2>Animated SVG Social Media Icons</h2>
                          <span class="svg-icon social-line" id="line-facebook"></span>
                            <span class="svg-icon social-line" id="line-twitter"></span>
                            <span class="svg-icon social-line" id="line-google"></span>
                            <span class="svg-icon social-line" id="line-linkedin"></span>
                            <span class="svg-icon social-line" id="line-intagram"></span>
                            <span class="svg-icon social-line" id="line-dribbble"></span>
                            <span class="svg-icon social-line" id="line-behance"></span>
                            <span class="svg-icon social-line" id="line-soundcloud"></span>
                            <span class="svg-icon social-line" id="line-vimeo"></span>
                            <span class="svg-icon social-line" id="line-youtube"></span>
                            <span class="svg-icon social-line" id="line-dilicious"></span>
                            <span class="svg-icon social-line" id="line-treehouse"></span>
                        </div><!-- IconHolder End-->
                    </div><!-- Innerwrap End-->
    
                    <div class="innerwrap blue">
                        <div class="iconholder">
                            <h2>Animated SVG Social Media Icons</h2>
                            <span class="svg-icon social-shadow" id="shadow-facebook"></span>
                            <span class="svg-icon social-shadow" id="shadow-twitter"></span>
                            <span class="svg-icon social-shadow" id="shadow-google"></span>
                            <span class="svg-icon social-shadow" id="shadow-linkedin"></span>
                            <span class="svg-icon social-shadow" id="shadow-intagram"></span>
                            <span class="svg-icon social-shadow" id="shadow-dribbble"></span>
                            <span class="svg-icon social-shadow" id="shadow-behance"></span>
                            <span class="svg-icon social-shadow" id="shadow-soundcloud"></span>
                            <span class="svg-icon social-shadow" id="shadow-vimeo"></span>
                            <span class="svg-icon social-shadow" id="shadow-youtube"></span>
                            <span class="svg-icon social-shadow" id="shadow-dilicious"></span>
                            <span class="svg-icon social-shadow" id="shadow-treehouse"></span>
                        </div><!-- IconHolder End-->
                    </div><!-- Innerwrap End-->
    
                    <div class="innerwrap purple">
                        <div class="iconholder">
                            <h2>Animated SVG Social Media Icons</h2>
                            <span class="svg-icon social-filled" id="filled-facebook"></span>
                            <span class="svg-icon social-filled" id="filled-twitter"></span>
                            <span class="svg-icon social-filled" id="filled-google"></span>
                            <span class="svg-icon social-filled" id="filled-linkedin"></span>
                            <span class="svg-icon social-filled" id="filled-intagram"></span>
                            <span class="svg-icon social-filled" id="filled-dribbble"></span>
                            <span class="svg-icon social-filled" id="filled-behance"></span>
                            <span class="svg-icon social-filled" id="filled-soundcloud"></span>
                            <span class="svg-icon social-filled" id="filled-vimeo"></span>
                            <span class="svg-icon social-filled" id="filled-youtube"></span>
                            <span class="svg-icon social-filled" id="filled-dilicious"></span>
                            <span class="svg-icon social-filled" id="filled-treehouse"></span>
                        </div><!-- IconHolder End-->
                    </div><!-- Innerwrap End-->

                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{ voyager_asset('js/app.js') }}"></script>

        <script type="text/javascript">
            //===============================================
            // SVG Inject
            //===============================================

            //facebook
            var facebookShadow = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow facebook_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_shape_shadow' d='M46.85,28.657h-3.358c0,0-5.253-0.55-5.253,4.916c0,1.169,0,2.265,0,2.265h-2.136l-0.034,4.301h2.17v11.447l19.717,19.721l14.252-18.144L46.85,28.657z'/><path class='icon_circle_shadow' opacity='0.7' fill='url(#icon_circle_shadow_1_)' enable-background='new ' d='M9.418,59.659l77,78l49.332-50.41l-72.332-71.59L51.355,7.943L36.75,5.625l-21,10.625L6.375,35.5L5.878,46.659L7.5,50.75l2.918,5.909L9.418,59.659z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.444-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' fill='#FFFFFF' d='M46.85,28.657h-3.358c0,0-5.253-0.55-5.253,4.916c0,1.169,0,2.265,0,2.265h-2.136l-0.034,4.301h2.17v11.447h4.98V40.138h2.876l0.699-4.301h-3.575v-1.749c0,0-0.307-1.478,1.464-1.478h2.133L46.85,28.657z'/></svg>";
            $(facebookShadow).appendTo('#shadow-facebook');

            //twitter
            var twitterShadow = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow twitter_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l47.001-47L64.971,13.083L51.355,7.846L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.898L9.418,59.563z'/><path class='icon_shape_shadow' d='M55.693,73.545c0,0-27.942-25.396-28.604-28.256c0,0,5.7,5,10.2,0.043c0,0-0.759-0.002-1.246-0.377c-0.441-0.342-0.621-1.059-0.621-1.059s1.413-0.789,0.885-1.389c0,0-3.125-0.063-3.302-1.946l1.835-1.187c0,0-0.721,0.351-1.435-0.004c0,0-1.853-1.33-1.5-2.689l1.548-0.157c0,0-2.685-1.908-1.935-3.374c0,0,0.258-1.262,9.1,4.636c0,0,1.564-5.572,4.458-6.798c0,0,0.5,0.2,0.5,0.476c0,0,0.411-0.881,0.95-0.963c0,0,0.701,0.602,0.201,0.903c0,0,1.101-0.752,1.637-0.37l25.785,23.599l-8.751,11.125l-10.807,7.059'/><path class='icon_circle' d='M41.459,6.404c19.057,0,34.5,15.399,34.5,34.5c0,19.1-15.443,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5c0-19.041,15.459-34.541,34.459-34.5H41.459z'/><path class='icon_shape' d='M27.09,45.262c0,0,5.7,5,10.2,0.043c0,0-0.76-0.002-1.246-0.375c-0.442-0.342-0.621-1.061-0.621-1.061s1.413-0.789,0.884-1.387c0,0-3.123-0.063-3.301-1.947l1.835-1.187c0,0-0.721,0.35-1.436-0.005c0,0-1.853-1.329-1.498-2.688l1.547-0.157c0,0-2.684-1.908-1.936-3.375c0,0,0.258-1.261,9.101,4.635c0,0,1.565-5.569,4.458-6.797c0,0,0.5,0.201,0.5,0.5c0,0,0.41-0.881,0.951-0.963c0,0,0.699,0.601,0.199,0.903c0,0,1.102-0.752,1.639-0.371c0,0-0.045,0.669-1.625,1.5c0,0,4.1,0.2,5.5,5.7c0,0,1.8,0.6,3.451-0.437c0,0,0.1,0.811-2.457,1.953c0,0,0.201,0.399,2.399,0.1c0,0-0.018,1.617-3.458,1.604c0,0-2.904,8.418-9.968,9.577c-8.432,1.436-14.493-2.865-15.093-5.738L27.09,45.262z'/></svg>";
            $(twitterShadow).appendTo('#shadow-twitter');

            //LinkedIn
            var linkedinShadow = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow linkedin_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M34.128,27.516c-1.468,0-3.298,2.312-3.298,3.773c0,1.463,34.542,33.58,34.542,33.58l2.194-3.11C67.566,61.758,35.593,27.516,34.128,27.516z M30.825,49.325l27.96,23.378l6.81-7.892L35.407,34.623L30.825,49.325z M49.654,34.809c-2.308,0-6.739,0.692-7.373,1.845h-0.065V34.65h-4.55v14.675h4.551L65.86,65.63c0-1.914,7.304-11.007,7.304-11.007S52.815,36.227,49.654,34.809z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M33.116,27.314c-1.468,0-2.655,1.187-2.655,2.648c0,1.463,1.187,2.65,2.655,2.65c1.464,0,2.654-1.187,2.654-2.65C35.771,28.501,34.581,27.314,33.116,27.314z M30.825,49.325h4.582V34.623h-4.582V49.325z M46.77,34.284c-2.308,0-3.855,1.217-4.488,2.37h-0.065V34.65h-4.55v14.675h4.551v-7.337c0-1.914,0.567-3.691,3.036-3.691c2.431,0,2.653,2.355,2.653,4.058v6.97h4.55v-8.049C52.456,37.323,51.569,34.284,46.77,34.284z'/></svg>";
            $(linkedinShadow).appendTo('#shadow-linkedin');

            // Google Plus
            var googleShadow = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow google_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_shape_shadow' d='M48.247,27.314c0,0-6.229,0-8.305,0c-3.724,0-7.228,2.629-7.228,5.675c0,3.113,2.538,5.625,6.326,5.625c0.264,0,0.52-0.005,0.77-0.021c-0.246,0.438-0.421,0.933-0.421,1.446c0,0.865,0.499,1.566,1.13,2.139c-0.477,0-0.938,0.013-1.44,0.013c-4.612,0-7.342,7.625-7.342,7.625l26.687,21.501l17.157-19.99L48.247,27.314z M53.508,38.278v-3.247h-1.362v3.247h-3.404v1.299h3.404v3.247h1.362v-3.247h3.404v-1.299H53.508z'/><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.444-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M48.247,27.314c0,0-6.229,0-8.305,0c-3.724,0-7.228,2.629-7.228,5.675c0,3.113,2.538,5.625,6.326,5.625c0.264,0,0.52-0.005,0.77-0.021c-0.246,0.438-0.421,0.933-0.421,1.446c0,0.865,0.499,1.566,1.13,2.139c-0.477,0-0.938,0.013-1.44,0.013c-4.612,0-8.162,2.738-8.162,5.577c0,2.796,3.892,4.545,8.503,4.545c5.258,0,8.162-2.781,8.162-5.577c0-2.242-0.71-3.585-2.904-5.032c-0.75-0.495-2.186-1.7-2.186-2.408c0-0.83,0.254-1.238,1.594-2.214c1.374-1,2.345-2.407,2.345-4.043c0-1.947-0.93-3.846-2.677-4.472h2.633L48.247,27.314z M45.346,46.252c0.066,0.259,0.102,0.526,0.102,0.798c0,2.26-1.562,4.025-6.043,4.025c-3.188,0-5.49-1.881-5.49-4.141c0-2.214,2.856-4.058,6.043-4.026c0.744,0.007,1.437,0.119,2.066,0.309C43.754,44.34,44.995,44.974,45.346,46.252z M40.242,37.825c-2.14-0.06-4.174-2.231-4.543-4.85c-0.369-2.62,1.065-4.625,3.205-4.565c2.139,0.06,4.173,2.162,4.542,4.781C43.815,35.81,42.38,37.884,40.242,37.825z M53.508,38.278v-3.247h-1.362v3.247h-3.404v1.299h3.404v3.247h1.362v-3.247h3.404v-1.299H53.508z'/></svg>";
            $(googleShadow).appendTo('#shadow-google');

            // Instagram
            var instagramShadow = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow instagram_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M55.056,75.181c-1.465,0-24.823-23.744-24.823-25.147V33.103c0-1.402,1.187-2.539,2.651-2.539h17.682c1.464,0,23.791,21.266,23.791,22.668L55.056,75.181z'/><path class='icon_circle' stroke='#FFFFFF' stroke-width='5' stroke-miterlimit='10' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M50.535,39.735h-1.916c0.146,0.542,0.177,1.248,0.177,1.833c0,3.741-3.166,6.773-7.071,6.773c-3.906,0-7.072-3.032-7.072-6.773c0-0.585,0.031-1.292,0.177-1.833h-1.916v9.538c0,0.467,0.661,0.734,1.149,0.734h15.706c0.489,0,0.767-0.267,0.767-0.734V39.735z M50.535,33.865c0-0.467-0.277-0.734-0.767-0.734h-2.682c-0.488,0-0.766,0.267-0.766,0.734v2.568c0,0.467,0.277,0.734,0.766,0.734h2.682c0.489,0,0.767-0.267,0.767-0.734V33.865z M41.725,37.336c-2.441,0-4.421,1.895-4.421,4.232s1.979,4.233,4.421,4.233c2.44,0,4.42-1.896,4.42-4.233S44.165,37.336,41.725,37.336 M50.565,52.574H32.884c-1.465,0-2.651-1.137-2.651-2.541V33.103c0-1.402,1.187-2.539,2.651-2.539h17.682c1.464,0,2.651,1.137,2.651,2.539v16.931C53.217,51.437,52.029,52.574,50.565,52.574'/></svg>";
            $(instagramShadow).appendTo('#shadow-intagram');

            // behance
            var behanceShadow = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow behance_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M67.574,60.926c-0.265-0.542-28.45-28.788-28.924-29.111c-0.48-0.324-1.05-0.561-1.716-0.702c-0.67-0.145-1.403-0.215-2.216-0.215h-8.009v16.995c0,0,27.284,25.797,28,25.606c0.724-0.19,10.525-7.5,10.525-7.5S67.833,61.46,67.574,60.926z M50.541,44.906c-0.501,0.338-1.098,0.507-1.789,0.507c-0.961,0-1.702-0.244-2.215-0.729c-0.515-0.485,24.278,16.104,24.278,15.15L54.688,42.34c0.064-0.938-0.015-1.833-0.238-2.689c-0.226-0.858-0.588-1.623-1.096-2.293c-0.509-0.67-1.155-1.205-1.945-1.6c-0.792-0.401-1.716-0.598-2.771-0.598c-0.956,0-1.818,0.164-2.601,0.491c-0.782,0.328-1.454,0.777-2.021,1.347c-0.565,0.566-0.995,1.242-1.306,2.024c-0.304,0.779-0.46,1.623-0.46,2.526c0,0.935,0.15,1.797,0.448,2.575c0.301,0.782,0.723,1.449,1.266,2.013c0.558,0.562,1.221,0.992,2.014,1.299c0.793,0.303,1.678,0.458,2.66,0.458c1.409,0,18.765,13.832,18.765,13.832s1.316-1.705,1.8-3.159l-14.73-14.73C54.355,44.21,51.037,44.57,50.541,44.906z M51.907,32.084h-6.909v1.581L69.583,58.75L73.25,53L51.907,32.084z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M37.832,38.648c0.768-0.364,1.342-0.832,1.733-1.402c0.388-0.571,0.583-1.285,0.583-2.141c0-0.792-0.13-1.46-0.389-1.994c-0.265-0.542-0.635-0.973-1.109-1.296c-0.48-0.324-1.05-0.561-1.716-0.702c-0.67-0.145-1.403-0.215-2.216-0.215h-8.009v16.995h8.234c0.761,0,1.504-0.096,2.221-0.286c0.724-0.19,1.37-0.482,1.933-0.882c0.558-0.395,1.011-0.907,1.344-1.539c0.329-0.624,0.494-1.365,0.494-2.228c0-1.063-0.252-1.971-0.769-2.728C39.652,39.479,38.877,38.949,37.832,38.648z M30.366,33.665h3.658c1.046,0.085,1.293,0.304,1.71,0.51c0.252,0.119,0.432,0.338,0.576,0.592c0.139,0.253,0.209,0.58,0.209,0.976c0,0.712-0.209,1.231-0.639,1.546c-0.435,0.319-0.787,0.329-1.449,0.329h-4.064V33.665z M36.979,43.854c-0.3,0.552-0.679,0.739-0.923,0.878c-0.281,0.167-0.888,0.396-1.625,0.396h-4.064v-4.743h4.064c0.805,0,1.544,0.12,2.036,0.492c0.49,0.378,0.736,1,0.736,1.876C37.202,43.199,37.134,43.571,36.979,43.854z M50.541,44.906c-0.501,0.338-1.098,0.507-1.789,0.507c-0.961,0-1.702-0.244-2.215-0.729c-0.515-0.485-0.848-1.39-0.848-2.344h9c0.064-0.938-0.015-1.833-0.238-2.689c-0.226-0.858-0.588-1.623-1.096-2.293c-0.509-0.67-1.155-1.205-1.945-1.6c-0.792-0.401-1.716-0.598-2.771-0.598c-0.956,0-1.818,0.164-2.601,0.491c-0.782,0.328-1.454,0.777-2.021,1.347c-0.565,0.566-0.995,1.242-1.306,2.024c-0.304,0.779-0.46,1.623-0.46,2.526c0,0.935,0.15,1.797,0.448,2.575c0.301,0.782,0.723,1.449,1.266,2.013c0.558,0.562,1.221,0.992,2.014,1.299c0.793,0.303,1.678,0.458,2.66,0.458c1.409,0,2.619-0.313,3.611-0.941c1.004-0.624,1.74-1.662,2.224-3.116h-3.016C51.339,44.21,51.037,44.57,50.541,44.906z M45.844,39.452c0.088-0.302,0.239-0.583,0.46-0.851c0.222-0.263,0.513-0.486,0.867-0.666c0.362-0.182,0.815-0.271,1.363-0.271c0.841,0,1.531,0.236,1.938,0.673c0.409,0.439,0.708,1.064,0.79,1.91h-5.574C45.705,40.013,45.757,39.746,45.844,39.452z M51.907,32.084h-6.909v1.581h6.909V32.084z'/></svg>";
            $(behanceShadow).appendTo('#shadow-behance');

            // Dribbbble
            var dribbbleShadow = "<svg xmlns='http://www.w3.org/2000/svg' id='behance_long_shadow' class='svg_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.659l77,78L135.75,87.25L63.418,15.659L51.355,7.943L36.75,5.625l-21,10.625L6.375,35.5L5.878,46.659L7.5,50.75l2.918,5.909L9.418,59.659z'/><path class='icon_shape_shadow' d='M59.378,70.486c0,0-29.424-23.132-29.424-29.486s5.151-11.505,11.505-11.505c6.354,0,31.916,24.942,31.916,24.942L59.378,70.486z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M41.459,52.505c-6.354,0-11.505-5.151-11.505-11.505s5.151-11.505,11.505-11.505c6.354,0,11.505,5.151,11.505,11.505S47.813,52.505,41.459,52.505z M44.208,39.069c0.289,0.583,0.564,1.164,0.817,1.733c1.563-0.258,3.253-0.265,5.05,0.089c-0.019-1.676-0.522-3.233-1.366-4.551C47.329,37.489,45.788,38.379,44.208,39.069z M47.41,47.225c1.148-1.099,1.986-2.513,2.393-4.1c-0.931-0.165-2.271-0.288-3.85-0.104C46.6,44.676,47.085,46.149,47.41,47.225z M41.447,49.624c1.358,0,2.638-0.322,3.78-0.881c-0.295-1.805-0.832-3.584-1.489-5.275c-2.252,0.651-4.769,2.009-7.188,4.63C37.942,49.058,39.628,49.624,41.447,49.624z M34.855,46.559c1.533-1.604,4.306-4.021,7.975-5.22c-0.235-0.503-0.478-0.992-0.725-1.469c-3.726,1.23-7.348,1.496-9.273,1.54C32.927,43.369,33.668,45.155,34.855,46.559z M33.007,39.177c3.325-0.25,5.938-0.743,7.978-1.342c-1.175-2.012-2.33-3.655-3.114-4.697C35.421,34.256,33.585,36.482,33.007,39.177z M41.447,32.355c-0.494,0-0.974,0.051-1.445,0.13c1.196,1.401,2.242,2.981,3.153,4.594c2.091-0.856,3.331-1.795,4.043-2.515C45.672,33.196,43.661,32.355,41.447,32.355z'/></svg>";
            $(dribbbleShadow).appendTo('#shadow-dribbble');

            // SoundCloud
            var SoundcloudShadow = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow soundcloud_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M57.616,70.3c-0.011-0.071-31.597-31.655-31.663-31.655s-0.12,0.051-0.129,0.121c0,0.001-0.37,2.13-0.37,2.13l0.37,3.188c0.009,0.07,28.39,28.449,28.456,28.449S57.616,70.3,57.616,70.3z M32.886,36.286c-0.125,0-0.229,0.099-0.234,0.225l-0.243,4.947l0.243,3.196c0.006,0.125,0.109,0.224,0.234,0.224c0.124,0,25.324,24.866,25.324,24.866l5.335-2.809C63.538,66.81,33.01,36.286,32.886,36.286z M58.674,68.139c0.155,0,7.201-3.091,7.201-3.091c-0.006-0.154-30.307-30.45-30.462-30.45c-0.156,0-0.283,0.121-0.288,0.276l-0.211,6.585l0.336,3.363C35.254,44.974,58.518,68.139,58.674,68.139z M40.584,44.893c0.213,0,22.543,21.771,22.543,21.771l6.346-5.525c-0.004-0.208-28.677-27.663-28.89-27.663c-0.214,0-0.391,0.17-0.394,0.379l-0.148,7.604c0,0.004,0.148,3.057,0.148,3.057C40.194,44.723,40.371,44.893,40.584,44.893z M37.978,44.881c0.046,0,23.98,22.7,23.98,22.7l4.865-5.152c-0.005-0.184-28.659-27.929-28.846-27.929s-0.336,0.144-0.341,0.327l-0.18,6.634l0.181,3.095C37.642,44.736,37.792,44.881,37.978,44.881z M56.436,70.648c0.11,0,3.968-2.677,3.968-2.677c-0.008-0.112-29.655-29.754-29.765-29.754c-0.112,0-0.201,0.085-0.208,0.198l0.024,3.48l0.069,2.887C30.531,44.896,56.323,70.648,56.436,70.648z M28.171,44.676c0.081,0,27.218,27.011,27.227,26.926l3.688-2.577c-0.01-0.086-30.834-30.907-30.916-30.907s-0.146,0.063-0.155,0.147l-0.289,3.189l0.289,3.074C28.025,44.614,28.09,44.676,28.171,44.676z M56.104,38.399c0,0-3.475-0.762-3.929-0.578c-0.304-3.319-3.186-5.923-6.701-5.923c-0.86,0-1.699,0.164-2.44,0.44c-0.287,0.107-0.364,0.219-0.366,0.434V44.46c0.003,0.225,0.184,0.413,0.411,0.435c0.01,0.001,23.411,19.845,23.411,19.845l6.092-8.403L56.104,38.399z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M26.083,38.767c-0.011-0.071-0.063-0.121-0.129-0.121s-0.12,0.051-0.129,0.121c0,0.001-0.37,2.13-0.37,2.13l0.37,3.188c0.009,0.07,0.063,0.122,0.129,0.122s0.118-0.05,0.129-0.121l0.347-2.63L26.083,38.767z M32.886,36.286c-0.125,0-0.229,0.099-0.234,0.225l-0.243,4.947l0.243,3.196c0.006,0.125,0.109,0.224,0.234,0.224c0.124,0,0.227-0.099,0.234-0.225v0.001l0.274-3.196l-0.274-4.947C33.113,36.385,33.01,36.286,32.886,36.286z M35.413,44.877c0.155,0,0.281-0.12,0.287-0.275l0.238-3.143L35.7,34.873c-0.006-0.154-0.132-0.275-0.287-0.275c-0.156,0-0.283,0.121-0.288,0.276l-0.211,6.585l0.211,3.145C35.129,44.756,35.256,44.877,35.413,44.877z M40.584,44.893c0.213,0,0.39-0.17,0.394-0.379v0.003v-0.003l0.166-3.053l-0.166-7.606c-0.004-0.208-0.181-0.378-0.394-0.378c-0.214,0-0.391,0.17-0.394,0.379l-0.148,7.604c0,0.004,0.148,3.057,0.148,3.057C40.194,44.723,40.371,44.893,40.584,44.893z M37.978,44.881c0.187,0,0.336-0.145,0.341-0.328v0.003l0.202-3.096l-0.202-6.634c-0.005-0.184-0.154-0.327-0.341-0.327s-0.336,0.144-0.341,0.327l-0.18,6.634l0.181,3.095C37.642,44.736,37.792,44.881,37.978,44.881z M30.638,44.852c0.11,0,0.199-0.085,0.208-0.198l0.608-2.757l-0.608-3.481c-0.008-0.112-0.098-0.197-0.208-0.197c-0.112,0-0.201,0.085-0.208,0.198l0.024,3.48l-0.024,2.757C30.437,44.766,30.526,44.852,30.638,44.852z M28.171,44.676c0.081,0,0.146-0.062,0.155-0.146l0.329-3.074l-0.328-3.189c-0.01-0.086-0.075-0.147-0.156-0.147s-0.146,0.063-0.155,0.147l-0.289,3.189l0.289,3.074C28.025,44.614,28.09,44.676,28.171,44.676z M53.65,37.535c-0.522,0-1.021,0.103-1.476,0.286c-0.304-3.319-3.186-5.923-6.701-5.923c-0.86,0-1.699,0.164-2.44,0.44c-0.287,0.107-0.364,0.219-0.366,0.434V44.46c0.003,0.225,0.184,0.413,0.411,0.435c0.01,0.001,10.504,0.006,10.572,0.006c2.106,0,3.813-1.648,3.813-3.683S55.756,37.535,53.65,37.535z'/></svg>";
            $(SoundcloudShadow).appendTo('#shadow-soundcloud');

            // Vimeo
            var VimeoShadow = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow vimeo_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M72.815,55.383l-15.107,15.28c0,0-22.545-19.489-23.633-22.229c-0.727-2.511-1.453-5.021-2.18-7.533c-0.808-2.739,28.296,27.25,28.296,27.25L25.903,36.446c1.333-1.104,2.647-2.208,3.941-3.313c1.777-1.448,5.153-1.759,6.043-1.835c2.102-0.19,30.128,32.288,30.128,32.288S42.234,43.793,43.366,42.11c1.131-1.683,1.737-2.964,1.818-3.844c0.161-1.453,23.296,23.221,23.296,23.221L41.368,36.503l9.931-5.325L72.815,55.383z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M52.898,35.618c-0.121,2.478-1.957,5.871-5.508,10.177c-3.672,4.498-6.778,6.747-9.32,6.747c-1.573,0-2.906-1.369-3.994-4.109c-0.727-2.511-1.453-5.021-2.18-7.533c-0.809-2.738-1.675-4.109-2.602-4.109c-0.202,0-0.909,0.401-2.119,1.199l-1.271-1.543c1.333-1.104,2.647-2.208,3.941-3.313c1.777-1.448,3.112-2.209,4.002-2.286c2.102-0.19,3.396,1.164,3.881,4.062c0.524,3.127,0.888,5.072,1.092,5.834c0.605,2.594,1.272,3.89,2.001,3.89c0.564,0,1.414-0.842,2.546-2.524c1.131-1.683,1.737-2.964,1.818-3.844c0.161-1.453-0.444-2.181-1.818-2.181c-0.646,0-1.313,0.141-1.999,0.417c1.328-4.097,3.863-6.087,7.606-5.974C51.75,30.606,53.058,32.302,52.898,35.618z'/></svg>";
            $(VimeoShadow).appendTo('#shadow-vimeo');

            // YouTube
            var youtbubeShadow = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow facebook_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_shape_shadow' d='M73.831,53.826L50.496,29.405h-5.082l-0.686,3.417c-1.276-1.466-2.075-2.385-2.115-2.435c-0.235-0.289-0.569-0.522-1.002-0.702s-0.724-0.27-1.327-0.27c-0.376,0-0.808,0.041-1.204,0.117l-2.112-2.015c-3.305,0-6.61,0.057-6.61,0.057l1.971,6.934v3.901l2.138,1.958l-1.189-0.074c-2.51,0-4.544,2.035-4.544,4.544l0.465,4.721c0,2.51,24.984,23.934,24.984,23.934L73.831,53.826z'/><path class='icon_circle_shadow' d='M9.418,59.659l77,78L135.75,87.25L63.418,15.659L51.355,7.943L36.75,5.625l-21,10.625L6.375,35.5L5.878,46.659L7.5,50.75l2.918,5.909L9.418,59.659z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M44.468,37.79c0.126,0.235,0.322,0.424,0.589,0.566s0.715,0.099,1.119,0.099c0.354,0,0.669,0.04,0.941-0.109c0.273-0.149,0.503-0.373,0.689-0.67l-0.047,0.734h2.736v-9.004h-2.689v6.115c0,0.724-0.02,1.152-0.057,1.285c-0.038,0.133-0.156,0.2-0.356,0.2c-0.187,0-0.414-0.064-0.456-0.193c-0.042-0.129-0.063-0.537-0.063-1.225v-6.182h-2.689v6.128c0,0.759,0.016,1.266,0.047,1.521C44.262,37.31,44.341,37.555,44.468,37.79z M36.947,35.134c0,0.75,0.049,1.313,0.146,1.688c0.098,0.375,0.261,0.695,0.489,0.958c0.229,0.265,0.55,0.462,0.962,0.593c0.413,0.131,1.258,0.196,1.853,0.196c0.532,0,0.776-0.077,1.187-0.229c0.411-0.153,0.747-0.391,1.009-0.712s0.433-0.668,0.513-1.039s0.12-0.953,0.12-1.748v-2.164c0-0.625-0.043-1.092-0.13-1.398s-0.247-0.604-0.482-0.892s-0.569-0.522-1.002-0.702s-0.724-0.27-1.327-0.27c-0.719,0-1.65,0.14-2.112,0.419c-0.461,0.28-0.78,0.65-0.958,1.111c-0.178,0.462-0.267,1.103-0.267,1.924V35.134z M39.637,32.125c0-0.453,0.027-0.738,0.08-0.855c0.054-0.118,0.16-0.177,0.319-0.177c0.16,0,0.378,0.059,0.427,0.177c0.049,0.117,0.073,0.402,0.073,0.855v3.619c0,0.382-0.025,0.63-0.077,0.746c-0.051,0.115-0.27,0.173-0.43,0.173c-0.155,0-0.259-0.063-0.313-0.189c-0.053-0.126-0.08-0.398-0.08-0.815V32.125z M32.329,38.409h2.652v-3.901l1.987-6.991l-2.574,0.057c-0.365,2.022-0.626,3.495-0.781,4.645c-0.051-0.728-0.278-2.541-0.681-4.645h-2.574l1.971,6.934V38.409z M49.639,40.293h-16.36c-2.51,0-4.544,2.035-4.544,4.544v2.727c0,2.51,2.034,4.544,4.544,4.544h16.36c2.51,0,4.545-2.035,4.545-4.544v-2.727C54.184,42.328,52.148,40.293,49.639,40.293z M35.045,43.868h-0.823v6.378h-1.827v-6.378h-0.932v-1.752h3.582V43.868z M40.539,50.246h-2.007l0.034-0.538c-0.137,0.219-0.305,0.382-0.505,0.492s-0.431,0.164-0.691,0.164c-0.296,0-0.542-0.052-0.737-0.156c-0.195-0.104-0.339-0.243-0.432-0.415c-0.093-0.173-0.15-0.353-0.173-0.54c-0.023-0.187-0.034-0.559-0.034-1.115v-4.256h1.802v4.295c0,0.504,0.015,0.804,0.046,0.898c0.031,0.095,0.285,0.142,0.422,0.142c0.146,0,0.348-0.049,0.375-0.146s0.041-0.412,0.041-0.942v-4.189h1.859V50.246z M46.075,48.44c0,0.476-0.031,0.829-0.095,1.062c-0.063,0.232-0.213,0.435-0.446,0.605c-0.234,0.171-0.513,0.257-0.835,0.257c-0.231,0-0.447-0.051-0.647-0.152s-0.61-0.252-0.776-0.455l-0.127,0.489h-1.675v-8.131h1.802v2.326c0.163-0.189,0.571-0.33,0.771-0.423c0.2-0.093,0.418-0.139,0.652-0.139c0.27,0,0.504,0.042,0.703,0.126c0.198,0.085,0.35,0.204,0.453,0.356c0.104,0.153,0.167,0.303,0.188,0.449c0.021,0.146,0.031,0.004,0.031,0.483V48.44z M51.306,46.667h-2.554v1.855c0,0.293,0.021,0.482,0.063,0.566c0.043,0.084,0.124,0.127,0.244,0.127c0.149,0,0.25-0.056,0.301-0.168c0.05-0.112,0.075-0.33,0.075-0.652v-0.854h1.87v0.478c0,0.4-0.025,0.708-0.076,0.923c-0.05,0.215-0.168,0.444-0.354,0.688s-0.421,0.427-0.706,0.549c-0.284,0.122-0.642,0.183-1.071,0.183c-0.416,0-0.671-0.061-0.989-0.181c-0.319-0.121-0.624-0.286-0.802-0.496c-0.177-0.21-0.3-0.441-0.368-0.693c-0.068-0.252-0.103-0.619-0.103-1.101v-2.117c0-0.566,0.076-0.559,0.229-0.886c0.152-0.327,0.46-0.578,0.809-0.752c0.348-0.174,0.635-0.261,1.087-0.261c0.554,0,1.01,0.105,1.369,0.314c0.36,0.21,0.612,0.488,0.757,0.835c0.146,0.347,0.218,0.607,0.218,1.235V46.667z M44.04,45.179c-0.042-0.103-0.353-0.154-0.477-0.154c-0.12,0-0.198,0.045-0.234,0.134c-0.036,0.09-0.054-0.14-0.054,0.222v3.02c0,0.349,0.021,0.571,0.062,0.669c0.04,0.098,0.121,0.146,0.241,0.146c0.124,0,0.432-0.05,0.469-0.151c0.038-0.101,0.057-0.343,0.057-0.728v-2.956C44.104,45.046,44.082,45.282,44.04,45.179z M49.274,45.172c-0.036-0.098-0.109-0.146-0.22-0.146c-0.137,0-0.221,0.042-0.254,0.125c-0.032,0.083-0.049-0.147-0.049,0.217v0.474h0.576v-0.474C49.328,45.032,49.311,45.27,49.274,45.172z'/></svg>";
            $(youtbubeShadow).appendTo('#shadow-youtube');

            // Dilicious
            var diliciousShadow = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow dilicious_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M41.458,27.559v12.507L66.27,64.877l10.042-14.029l-21.349-23.29H41.458z M27.955,52.574l23.121,21.564l15.194-9.26L41.458,40.066H27.955V52.574z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M41.458,27.559v12.507h13.505V27.559H41.458z M27.955,52.574h13.504V40.066H27.955V52.574z'/></svg>";
            $(diliciousShadow).appendTo('#shadow-dilicious');

            // Treehouse
            var treehouseShadow = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow treehouse_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M43.198,28.15c-0.782-0.422-3.61-1.26-4.393-0.838l-10.67,5.747c-0.782,0.421-1.422,1.468-1.422,2.325v11.23c0,0.857,26.838,27.63,27.62,28.051l19.5-18.75c0-0.43-15.076-17.141-20.996-22.435c-1.724-1.541-1.42,2.852-1.42,2.852L43.198,28.15z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M50.524,32.107c-0.971-0.524-2.523,0.319-3.465,1.885l-1.706,2.835c-0.623,1.179-0.538,2.582,0.253,3.665l0.05,0.068c0.791,1.083,1.85,2.085,2.201,2.441c0.206,0.21,0.364,0.47,0.451,0.766c0.288,0.984-0.313,2.006-1.344,2.281c-1.03,0.274-2.099-0.3-2.387-1.284c-0.072-0.246-0.088-0.496-0.056-0.735c0.055-0.406-0.082-1.068-0.692-1.719s-1.857,0.577-2.261,1.841l-0.019,0.058c-0.403,1.263-0.658,2.365-0.582,2.472c0.045,0.063,0.087,0.129,0.126,0.198c0.566,1.018,0.162,2.28-0.903,2.821c-1.065,0.54-2.387,0.154-2.953-0.863s-0.162-2.28,0.903-2.82c0.048-0.024,0.096-0.047,0.145-0.067c0.082-0.034,0.312-0.565,0.512-1.192s0.363-1.136,0.363-1.136c0.021-0.066,0.04-0.133,0.057-0.198l1.078-3.676l-1.152,2.261c-0.137-0.43-0.362-0.444-0.857-0.106c-0.298,0.203-0.792,0.605-1.033,0.77c-0.452,0.31-0.831,0.91-1.031,1.278c-0.118,0.216-0.283,0.414-0.494,0.577c-0.825,0.64-2.037,0.519-2.706-0.269c-0.669-0.788-0.543-1.946,0.282-2.585c0.242-0.188,0.517-0.311,0.802-0.369c0.485-0.101,2.133-1.063,3.126-1.742c0.178-0.121,0.327-0.236,0.448-0.343l2.652-1.925l-2.31,1.193c0,0-0.235-0.023-0.523,0.008c-0.845,0.089-1.716,0.203-1.88,0.403c-0.097,0.118-0.213,0.226-0.347,0.317c-0.771,0.53-1.846,0.363-2.401-0.373c-0.555-0.736-0.38-1.765,0.391-2.294c0.318-0.22,0.688-0.319,1.051-0.31c0.618,0.017,2.245,0.331,3.605,0.101l0.35-0.059c1.361-0.23,2.99-1.362,3.64-2.528c0,0,0.636-1.066,1.42-2.383c0.784-1.315,0.727-2.758-0.129-3.22l-1.549-0.837c-0.782-0.422-2.061-0.423-2.843-0.001l-10.67,5.747c-0.782,0.421-1.422,1.468-1.422,2.325v11.23c0,0.857,0.64,1.904,1.422,2.325l10.67,5.747c0.782,0.422,2.062,0.421,2.843-0.001l10.634-5.744c0.782-0.422,1.421-1.47,1.421-2.327v-11.23c0-0.857-0.64-1.905-1.421-2.327C52.283,33.058,51.495,32.632,50.524,32.107z'/></svg>";
            $(treehouseShadow).appendTo('#shadow-treehouse');

            //===============================================
            // SVG Inject
            //===============================================

            //facebook
            var facebookLine = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow facebook_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_shape_shadow' d='M46.85,28.657h-3.358c0,0-5.253-0.55-5.253,4.916c0,1.169,0,2.265,0,2.265h-2.136l-0.034,4.301h2.17v11.447l19.717,19.721l14.252-18.144L46.85,28.657z'/><path class='icon_circle_shadow' opacity='0.7' fill='url(#icon_circle_shadow_1_)' enable-background='new ' d='M9.418,59.659l77,78l49.332-50.41l-72.332-71.59L51.355,7.943L36.75,5.625l-21,10.625L6.375,35.5L5.878,46.659L7.5,50.75l2.918,5.909L9.418,59.659z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.444-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' fill='#FFFFFF' d='M46.85,28.657h-3.358c0,0-5.253-0.55-5.253,4.916c0,1.169,0,2.265,0,2.265h-2.136l-0.034,4.301h2.17v11.447h4.98V40.138h2.876l0.699-4.301h-3.575v-1.749c0,0-0.307-1.478,1.464-1.478h2.133L46.85,28.657z'/></svg>";
            $(facebookLine).appendTo('#line-facebook');

            //twitter
            var twitterLine = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow twitter_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l47.001-47L64.971,13.083L51.355,7.846L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.898L9.418,59.563z'/><path class='icon_shape_shadow' d='M55.693,73.545c0,0-27.942-25.396-28.604-28.256c0,0,5.7,5,10.2,0.043c0,0-0.759-0.002-1.246-0.377c-0.441-0.342-0.621-1.059-0.621-1.059s1.413-0.789,0.885-1.389c0,0-3.125-0.063-3.302-1.946l1.835-1.187c0,0-0.721,0.351-1.435-0.004c0,0-1.853-1.33-1.5-2.689l1.548-0.157c0,0-2.685-1.908-1.935-3.374c0,0,0.258-1.262,9.1,4.636c0,0,1.564-5.572,4.458-6.798c0,0,0.5,0.2,0.5,0.476c0,0,0.411-0.881,0.95-0.963c0,0,0.701,0.602,0.201,0.903c0,0,1.101-0.752,1.637-0.37l25.785,23.599l-8.751,11.125l-10.807,7.059'/><path class='icon_circle' d='M41.459,6.404c19.057,0,34.5,15.399,34.5,34.5c0,19.1-15.443,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5c0-19.041,15.459-34.541,34.459-34.5H41.459z'/><path class='icon_shape' d='M27.09,45.262c0,0,5.7,5,10.2,0.043c0,0-0.76-0.002-1.246-0.375c-0.442-0.342-0.621-1.061-0.621-1.061s1.413-0.789,0.884-1.387c0,0-3.123-0.063-3.301-1.947l1.835-1.187c0,0-0.721,0.35-1.436-0.005c0,0-1.853-1.329-1.498-2.688l1.547-0.157c0,0-2.684-1.908-1.936-3.375c0,0,0.258-1.261,9.101,4.635c0,0,1.565-5.569,4.458-6.797c0,0,0.5,0.201,0.5,0.5c0,0,0.41-0.881,0.951-0.963c0,0,0.699,0.601,0.199,0.903c0,0,1.102-0.752,1.639-0.371c0,0-0.045,0.669-1.625,1.5c0,0,4.1,0.2,5.5,5.7c0,0,1.8,0.6,3.451-0.437c0,0,0.1,0.811-2.457,1.953c0,0,0.201,0.399,2.399,0.1c0,0-0.018,1.617-3.458,1.604c0,0-2.904,8.418-9.968,9.577c-8.432,1.436-14.493-2.865-15.093-5.738L27.09,45.262z'/></svg>";
            $(twitterLine).appendTo('#line-twitter');

            //LinkedIn
            var linkedinLine = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow linkedin_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M34.128,27.516c-1.468,0-3.298,2.312-3.298,3.773c0,1.463,34.542,33.58,34.542,33.58l2.194-3.11C67.566,61.758,35.593,27.516,34.128,27.516z M30.825,49.325l27.96,23.378l6.81-7.892L35.407,34.623L30.825,49.325z M49.654,34.809c-2.308,0-6.739,0.692-7.373,1.845h-0.065V34.65h-4.55v14.675h4.551L65.86,65.63c0-1.914,7.304-11.007,7.304-11.007S52.815,36.227,49.654,34.809z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M33.116,27.314c-1.468,0-2.655,1.187-2.655,2.648c0,1.463,1.187,2.65,2.655,2.65c1.464,0,2.654-1.187,2.654-2.65C35.771,28.501,34.581,27.314,33.116,27.314z M30.825,49.325h4.582V34.623h-4.582V49.325z M46.77,34.284c-2.308,0-3.855,1.217-4.488,2.37h-0.065V34.65h-4.55v14.675h4.551v-7.337c0-1.914,0.567-3.691,3.036-3.691c2.431,0,2.653,2.355,2.653,4.058v6.97h4.55v-8.049C52.456,37.323,51.569,34.284,46.77,34.284z'/></svg>";
            $(linkedinLine).appendTo('#line-linkedin');

            // Google Plus
            var googleLine = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow google_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_shape_shadow' d='M48.247,27.314c0,0-6.229,0-8.305,0c-3.724,0-7.228,2.629-7.228,5.675c0,3.113,2.538,5.625,6.326,5.625c0.264,0,0.52-0.005,0.77-0.021c-0.246,0.438-0.421,0.933-0.421,1.446c0,0.865,0.499,1.566,1.13,2.139c-0.477,0-0.938,0.013-1.44,0.013c-4.612,0-7.342,7.625-7.342,7.625l26.687,21.501l17.157-19.99L48.247,27.314z M53.508,38.278v-3.247h-1.362v3.247h-3.404v1.299h3.404v3.247h1.362v-3.247h3.404v-1.299H53.508z'/><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.444-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M48.247,27.314c0,0-6.229,0-8.305,0c-3.724,0-7.228,2.629-7.228,5.675c0,3.113,2.538,5.625,6.326,5.625c0.264,0,0.52-0.005,0.77-0.021c-0.246,0.438-0.421,0.933-0.421,1.446c0,0.865,0.499,1.566,1.13,2.139c-0.477,0-0.938,0.013-1.44,0.013c-4.612,0-8.162,2.738-8.162,5.577c0,2.796,3.892,4.545,8.503,4.545c5.258,0,8.162-2.781,8.162-5.577c0-2.242-0.71-3.585-2.904-5.032c-0.75-0.495-2.186-1.7-2.186-2.408c0-0.83,0.254-1.238,1.594-2.214c1.374-1,2.345-2.407,2.345-4.043c0-1.947-0.93-3.846-2.677-4.472h2.633L48.247,27.314z M45.346,46.252c0.066,0.259,0.102,0.526,0.102,0.798c0,2.26-1.562,4.025-6.043,4.025c-3.188,0-5.49-1.881-5.49-4.141c0-2.214,2.856-4.058,6.043-4.026c0.744,0.007,1.437,0.119,2.066,0.309C43.754,44.34,44.995,44.974,45.346,46.252z M40.242,37.825c-2.14-0.06-4.174-2.231-4.543-4.85c-0.369-2.62,1.065-4.625,3.205-4.565c2.139,0.06,4.173,2.162,4.542,4.781C43.815,35.81,42.38,37.884,40.242,37.825z M53.508,38.278v-3.247h-1.362v3.247h-3.404v1.299h3.404v3.247h1.362v-3.247h3.404v-1.299H53.508z'/></svg>";
            $(googleLine).appendTo('#line-google');

            // Instagram
            var instagramLine = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow instagram_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M55.056,75.181c-1.465,0-24.823-23.744-24.823-25.147V33.103c0-1.402,1.187-2.539,2.651-2.539h17.682c1.464,0,23.791,21.266,23.791,22.668L55.056,75.181z'/><path class='icon_circle' stroke='#FFFFFF' stroke-width='5' stroke-miterlimit='10' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M50.535,39.735h-1.916c0.146,0.542,0.177,1.248,0.177,1.833c0,3.741-3.166,6.773-7.071,6.773c-3.906,0-7.072-3.032-7.072-6.773c0-0.585,0.031-1.292,0.177-1.833h-1.916v9.538c0,0.467,0.661,0.734,1.149,0.734h15.706c0.489,0,0.767-0.267,0.767-0.734V39.735z M50.535,33.865c0-0.467-0.277-0.734-0.767-0.734h-2.682c-0.488,0-0.766,0.267-0.766,0.734v2.568c0,0.467,0.277,0.734,0.766,0.734h2.682c0.489,0,0.767-0.267,0.767-0.734V33.865z M41.725,37.336c-2.441,0-4.421,1.895-4.421,4.232s1.979,4.233,4.421,4.233c2.44,0,4.42-1.896,4.42-4.233S44.165,37.336,41.725,37.336 M50.565,52.574H32.884c-1.465,0-2.651-1.137-2.651-2.541V33.103c0-1.402,1.187-2.539,2.651-2.539h17.682c1.464,0,2.651,1.137,2.651,2.539v16.931C53.217,51.437,52.029,52.574,50.565,52.574'/></svg>";
            $(instagramLine).appendTo('#line-intagram');

            // behance
            var behanceLine = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow behance_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M67.574,60.926c-0.265-0.542-28.45-28.788-28.924-29.111c-0.48-0.324-1.05-0.561-1.716-0.702c-0.67-0.145-1.403-0.215-2.216-0.215h-8.009v16.995c0,0,27.284,25.797,28,25.606c0.724-0.19,10.525-7.5,10.525-7.5S67.833,61.46,67.574,60.926z M50.541,44.906c-0.501,0.338-1.098,0.507-1.789,0.507c-0.961,0-1.702-0.244-2.215-0.729c-0.515-0.485,24.278,16.104,24.278,15.15L54.688,42.34c0.064-0.938-0.015-1.833-0.238-2.689c-0.226-0.858-0.588-1.623-1.096-2.293c-0.509-0.67-1.155-1.205-1.945-1.6c-0.792-0.401-1.716-0.598-2.771-0.598c-0.956,0-1.818,0.164-2.601,0.491c-0.782,0.328-1.454,0.777-2.021,1.347c-0.565,0.566-0.995,1.242-1.306,2.024c-0.304,0.779-0.46,1.623-0.46,2.526c0,0.935,0.15,1.797,0.448,2.575c0.301,0.782,0.723,1.449,1.266,2.013c0.558,0.562,1.221,0.992,2.014,1.299c0.793,0.303,1.678,0.458,2.66,0.458c1.409,0,18.765,13.832,18.765,13.832s1.316-1.705,1.8-3.159l-14.73-14.73C54.355,44.21,51.037,44.57,50.541,44.906z M51.907,32.084h-6.909v1.581L69.583,58.75L73.25,53L51.907,32.084z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M37.832,38.648c0.768-0.364,1.342-0.832,1.733-1.402c0.388-0.571,0.583-1.285,0.583-2.141c0-0.792-0.13-1.46-0.389-1.994c-0.265-0.542-0.635-0.973-1.109-1.296c-0.48-0.324-1.05-0.561-1.716-0.702c-0.67-0.145-1.403-0.215-2.216-0.215h-8.009v16.995h8.234c0.761,0,1.504-0.096,2.221-0.286c0.724-0.19,1.37-0.482,1.933-0.882c0.558-0.395,1.011-0.907,1.344-1.539c0.329-0.624,0.494-1.365,0.494-2.228c0-1.063-0.252-1.971-0.769-2.728C39.652,39.479,38.877,38.949,37.832,38.648z M30.366,33.665h3.658c1.046,0.085,1.293,0.304,1.71,0.51c0.252,0.119,0.432,0.338,0.576,0.592c0.139,0.253,0.209,0.58,0.209,0.976c0,0.712-0.209,1.231-0.639,1.546c-0.435,0.319-0.787,0.329-1.449,0.329h-4.064V33.665z M36.979,43.854c-0.3,0.552-0.679,0.739-0.923,0.878c-0.281,0.167-0.888,0.396-1.625,0.396h-4.064v-4.743h4.064c0.805,0,1.544,0.12,2.036,0.492c0.49,0.378,0.736,1,0.736,1.876C37.202,43.199,37.134,43.571,36.979,43.854z M50.541,44.906c-0.501,0.338-1.098,0.507-1.789,0.507c-0.961,0-1.702-0.244-2.215-0.729c-0.515-0.485-0.848-1.39-0.848-2.344h9c0.064-0.938-0.015-1.833-0.238-2.689c-0.226-0.858-0.588-1.623-1.096-2.293c-0.509-0.67-1.155-1.205-1.945-1.6c-0.792-0.401-1.716-0.598-2.771-0.598c-0.956,0-1.818,0.164-2.601,0.491c-0.782,0.328-1.454,0.777-2.021,1.347c-0.565,0.566-0.995,1.242-1.306,2.024c-0.304,0.779-0.46,1.623-0.46,2.526c0,0.935,0.15,1.797,0.448,2.575c0.301,0.782,0.723,1.449,1.266,2.013c0.558,0.562,1.221,0.992,2.014,1.299c0.793,0.303,1.678,0.458,2.66,0.458c1.409,0,2.619-0.313,3.611-0.941c1.004-0.624,1.74-1.662,2.224-3.116h-3.016C51.339,44.21,51.037,44.57,50.541,44.906z M45.844,39.452c0.088-0.302,0.239-0.583,0.46-0.851c0.222-0.263,0.513-0.486,0.867-0.666c0.362-0.182,0.815-0.271,1.363-0.271c0.841,0,1.531,0.236,1.938,0.673c0.409,0.439,0.708,1.064,0.79,1.91h-5.574C45.705,40.013,45.757,39.746,45.844,39.452z M51.907,32.084h-6.909v1.581h6.909V32.084z'/></svg>";
            $(behanceLine).appendTo('#line-behance');

            // Dribbbble
            var dribbbleLine = "<svg xmlns='http://www.w3.org/2000/svg' id='behance_long_shadow' class='svg_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.659l77,78L135.75,87.25L63.418,15.659L51.355,7.943L36.75,5.625l-21,10.625L6.375,35.5L5.878,46.659L7.5,50.75l2.918,5.909L9.418,59.659z'/><path class='icon_shape_shadow' d='M59.378,70.486c0,0-29.424-23.132-29.424-29.486s5.151-11.505,11.505-11.505c6.354,0,31.916,24.942,31.916,24.942L59.378,70.486z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M41.459,52.505c-6.354,0-11.505-5.151-11.505-11.505s5.151-11.505,11.505-11.505c6.354,0,11.505,5.151,11.505,11.505S47.813,52.505,41.459,52.505z M44.208,39.069c0.289,0.583,0.564,1.164,0.817,1.733c1.563-0.258,3.253-0.265,5.05,0.089c-0.019-1.676-0.522-3.233-1.366-4.551C47.329,37.489,45.788,38.379,44.208,39.069z M47.41,47.225c1.148-1.099,1.986-2.513,2.393-4.1c-0.931-0.165-2.271-0.288-3.85-0.104C46.6,44.676,47.085,46.149,47.41,47.225z M41.447,49.624c1.358,0,2.638-0.322,3.78-0.881c-0.295-1.805-0.832-3.584-1.489-5.275c-2.252,0.651-4.769,2.009-7.188,4.63C37.942,49.058,39.628,49.624,41.447,49.624z M34.855,46.559c1.533-1.604,4.306-4.021,7.975-5.22c-0.235-0.503-0.478-0.992-0.725-1.469c-3.726,1.23-7.348,1.496-9.273,1.54C32.927,43.369,33.668,45.155,34.855,46.559z M33.007,39.177c3.325-0.25,5.938-0.743,7.978-1.342c-1.175-2.012-2.33-3.655-3.114-4.697C35.421,34.256,33.585,36.482,33.007,39.177z M41.447,32.355c-0.494,0-0.974,0.051-1.445,0.13c1.196,1.401,2.242,2.981,3.153,4.594c2.091-0.856,3.331-1.795,4.043-2.515C45.672,33.196,43.661,32.355,41.447,32.355z'/></svg>";
            $(dribbbleLine).appendTo('#line-dribbble');

            // SoundCloud
            var SoundcloudLine = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow soundcloud_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M57.616,70.3c-0.011-0.071-31.597-31.655-31.663-31.655s-0.12,0.051-0.129,0.121c0,0.001-0.37,2.13-0.37,2.13l0.37,3.188c0.009,0.07,28.39,28.449,28.456,28.449S57.616,70.3,57.616,70.3z M32.886,36.286c-0.125,0-0.229,0.099-0.234,0.225l-0.243,4.947l0.243,3.196c0.006,0.125,0.109,0.224,0.234,0.224c0.124,0,25.324,24.866,25.324,24.866l5.335-2.809C63.538,66.81,33.01,36.286,32.886,36.286z M58.674,68.139c0.155,0,7.201-3.091,7.201-3.091c-0.006-0.154-30.307-30.45-30.462-30.45c-0.156,0-0.283,0.121-0.288,0.276l-0.211,6.585l0.336,3.363C35.254,44.974,58.518,68.139,58.674,68.139z M40.584,44.893c0.213,0,22.543,21.771,22.543,21.771l6.346-5.525c-0.004-0.208-28.677-27.663-28.89-27.663c-0.214,0-0.391,0.17-0.394,0.379l-0.148,7.604c0,0.004,0.148,3.057,0.148,3.057C40.194,44.723,40.371,44.893,40.584,44.893z M37.978,44.881c0.046,0,23.98,22.7,23.98,22.7l4.865-5.152c-0.005-0.184-28.659-27.929-28.846-27.929s-0.336,0.144-0.341,0.327l-0.18,6.634l0.181,3.095C37.642,44.736,37.792,44.881,37.978,44.881z M56.436,70.648c0.11,0,3.968-2.677,3.968-2.677c-0.008-0.112-29.655-29.754-29.765-29.754c-0.112,0-0.201,0.085-0.208,0.198l0.024,3.48l0.069,2.887C30.531,44.896,56.323,70.648,56.436,70.648z M28.171,44.676c0.081,0,27.218,27.011,27.227,26.926l3.688-2.577c-0.01-0.086-30.834-30.907-30.916-30.907s-0.146,0.063-0.155,0.147l-0.289,3.189l0.289,3.074C28.025,44.614,28.09,44.676,28.171,44.676z M56.104,38.399c0,0-3.475-0.762-3.929-0.578c-0.304-3.319-3.186-5.923-6.701-5.923c-0.86,0-1.699,0.164-2.44,0.44c-0.287,0.107-0.364,0.219-0.366,0.434V44.46c0.003,0.225,0.184,0.413,0.411,0.435c0.01,0.001,23.411,19.845,23.411,19.845l6.092-8.403L56.104,38.399z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M26.083,38.767c-0.011-0.071-0.063-0.121-0.129-0.121s-0.12,0.051-0.129,0.121c0,0.001-0.37,2.13-0.37,2.13l0.37,3.188c0.009,0.07,0.063,0.122,0.129,0.122s0.118-0.05,0.129-0.121l0.347-2.63L26.083,38.767z M32.886,36.286c-0.125,0-0.229,0.099-0.234,0.225l-0.243,4.947l0.243,3.196c0.006,0.125,0.109,0.224,0.234,0.224c0.124,0,0.227-0.099,0.234-0.225v0.001l0.274-3.196l-0.274-4.947C33.113,36.385,33.01,36.286,32.886,36.286z M35.413,44.877c0.155,0,0.281-0.12,0.287-0.275l0.238-3.143L35.7,34.873c-0.006-0.154-0.132-0.275-0.287-0.275c-0.156,0-0.283,0.121-0.288,0.276l-0.211,6.585l0.211,3.145C35.129,44.756,35.256,44.877,35.413,44.877z M40.584,44.893c0.213,0,0.39-0.17,0.394-0.379v0.003v-0.003l0.166-3.053l-0.166-7.606c-0.004-0.208-0.181-0.378-0.394-0.378c-0.214,0-0.391,0.17-0.394,0.379l-0.148,7.604c0,0.004,0.148,3.057,0.148,3.057C40.194,44.723,40.371,44.893,40.584,44.893z M37.978,44.881c0.187,0,0.336-0.145,0.341-0.328v0.003l0.202-3.096l-0.202-6.634c-0.005-0.184-0.154-0.327-0.341-0.327s-0.336,0.144-0.341,0.327l-0.18,6.634l0.181,3.095C37.642,44.736,37.792,44.881,37.978,44.881z M30.638,44.852c0.11,0,0.199-0.085,0.208-0.198l0.608-2.757l-0.608-3.481c-0.008-0.112-0.098-0.197-0.208-0.197c-0.112,0-0.201,0.085-0.208,0.198l0.024,3.48l-0.024,2.757C30.437,44.766,30.526,44.852,30.638,44.852z M28.171,44.676c0.081,0,0.146-0.062,0.155-0.146l0.329-3.074l-0.328-3.189c-0.01-0.086-0.075-0.147-0.156-0.147s-0.146,0.063-0.155,0.147l-0.289,3.189l0.289,3.074C28.025,44.614,28.09,44.676,28.171,44.676z M53.65,37.535c-0.522,0-1.021,0.103-1.476,0.286c-0.304-3.319-3.186-5.923-6.701-5.923c-0.86,0-1.699,0.164-2.44,0.44c-0.287,0.107-0.364,0.219-0.366,0.434V44.46c0.003,0.225,0.184,0.413,0.411,0.435c0.01,0.001,10.504,0.006,10.572,0.006c2.106,0,3.813-1.648,3.813-3.683S55.756,37.535,53.65,37.535z'/></svg>";
            $(SoundcloudLine).appendTo('#line-soundcloud');

            // Vimeo
            var VimeoLine = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow vimeo_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M72.815,55.383l-15.107,15.28c0,0-22.545-19.489-23.633-22.229c-0.727-2.511-1.453-5.021-2.18-7.533c-0.808-2.739,28.296,27.25,28.296,27.25L25.903,36.446c1.333-1.104,2.647-2.208,3.941-3.313c1.777-1.448,5.153-1.759,6.043-1.835c2.102-0.19,30.128,32.288,30.128,32.288S42.234,43.793,43.366,42.11c1.131-1.683,1.737-2.964,1.818-3.844c0.161-1.453,23.296,23.221,23.296,23.221L41.368,36.503l9.931-5.325L72.815,55.383z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M52.898,35.618c-0.121,2.478-1.957,5.871-5.508,10.177c-3.672,4.498-6.778,6.747-9.32,6.747c-1.573,0-2.906-1.369-3.994-4.109c-0.727-2.511-1.453-5.021-2.18-7.533c-0.809-2.738-1.675-4.109-2.602-4.109c-0.202,0-0.909,0.401-2.119,1.199l-1.271-1.543c1.333-1.104,2.647-2.208,3.941-3.313c1.777-1.448,3.112-2.209,4.002-2.286c2.102-0.19,3.396,1.164,3.881,4.062c0.524,3.127,0.888,5.072,1.092,5.834c0.605,2.594,1.272,3.89,2.001,3.89c0.564,0,1.414-0.842,2.546-2.524c1.131-1.683,1.737-2.964,1.818-3.844c0.161-1.453-0.444-2.181-1.818-2.181c-0.646,0-1.313,0.141-1.999,0.417c1.328-4.097,3.863-6.087,7.606-5.974C51.75,30.606,53.058,32.302,52.898,35.618z'/></svg>";
            $(VimeoLine).appendTo('#line-vimeo');

            // YouTube
            var youtbubeLine = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow facebook_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_shape_shadow' d='M73.831,53.826L50.496,29.405h-5.082l-0.686,3.417c-1.276-1.466-2.075-2.385-2.115-2.435c-0.235-0.289-0.569-0.522-1.002-0.702s-0.724-0.27-1.327-0.27c-0.376,0-0.808,0.041-1.204,0.117l-2.112-2.015c-3.305,0-6.61,0.057-6.61,0.057l1.971,6.934v3.901l2.138,1.958l-1.189-0.074c-2.51,0-4.544,2.035-4.544,4.544l0.465,4.721c0,2.51,24.984,23.934,24.984,23.934L73.831,53.826z'/><path class='icon_circle_shadow' d='M9.418,59.659l77,78L135.75,87.25L63.418,15.659L51.355,7.943L36.75,5.625l-21,10.625L6.375,35.5L5.878,46.659L7.5,50.75l2.918,5.909L9.418,59.659z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M44.468,37.79c0.126,0.235,0.322,0.424,0.589,0.566s0.715,0.099,1.119,0.099c0.354,0,0.669,0.04,0.941-0.109c0.273-0.149,0.503-0.373,0.689-0.67l-0.047,0.734h2.736v-9.004h-2.689v6.115c0,0.724-0.02,1.152-0.057,1.285c-0.038,0.133-0.156,0.2-0.356,0.2c-0.187,0-0.414-0.064-0.456-0.193c-0.042-0.129-0.063-0.537-0.063-1.225v-6.182h-2.689v6.128c0,0.759,0.016,1.266,0.047,1.521C44.262,37.31,44.341,37.555,44.468,37.79z M36.947,35.134c0,0.75,0.049,1.313,0.146,1.688c0.098,0.375,0.261,0.695,0.489,0.958c0.229,0.265,0.55,0.462,0.962,0.593c0.413,0.131,1.258,0.196,1.853,0.196c0.532,0,0.776-0.077,1.187-0.229c0.411-0.153,0.747-0.391,1.009-0.712s0.433-0.668,0.513-1.039s0.12-0.953,0.12-1.748v-2.164c0-0.625-0.043-1.092-0.13-1.398s-0.247-0.604-0.482-0.892s-0.569-0.522-1.002-0.702s-0.724-0.27-1.327-0.27c-0.719,0-1.65,0.14-2.112,0.419c-0.461,0.28-0.78,0.65-0.958,1.111c-0.178,0.462-0.267,1.103-0.267,1.924V35.134z M39.637,32.125c0-0.453,0.027-0.738,0.08-0.855c0.054-0.118,0.16-0.177,0.319-0.177c0.16,0,0.378,0.059,0.427,0.177c0.049,0.117,0.073,0.402,0.073,0.855v3.619c0,0.382-0.025,0.63-0.077,0.746c-0.051,0.115-0.27,0.173-0.43,0.173c-0.155,0-0.259-0.063-0.313-0.189c-0.053-0.126-0.08-0.398-0.08-0.815V32.125z M32.329,38.409h2.652v-3.901l1.987-6.991l-2.574,0.057c-0.365,2.022-0.626,3.495-0.781,4.645c-0.051-0.728-0.278-2.541-0.681-4.645h-2.574l1.971,6.934V38.409z M49.639,40.293h-16.36c-2.51,0-4.544,2.035-4.544,4.544v2.727c0,2.51,2.034,4.544,4.544,4.544h16.36c2.51,0,4.545-2.035,4.545-4.544v-2.727C54.184,42.328,52.148,40.293,49.639,40.293z M35.045,43.868h-0.823v6.378h-1.827v-6.378h-0.932v-1.752h3.582V43.868z M40.539,50.246h-2.007l0.034-0.538c-0.137,0.219-0.305,0.382-0.505,0.492s-0.431,0.164-0.691,0.164c-0.296,0-0.542-0.052-0.737-0.156c-0.195-0.104-0.339-0.243-0.432-0.415c-0.093-0.173-0.15-0.353-0.173-0.54c-0.023-0.187-0.034-0.559-0.034-1.115v-4.256h1.802v4.295c0,0.504,0.015,0.804,0.046,0.898c0.031,0.095,0.285,0.142,0.422,0.142c0.146,0,0.348-0.049,0.375-0.146s0.041-0.412,0.041-0.942v-4.189h1.859V50.246z M46.075,48.44c0,0.476-0.031,0.829-0.095,1.062c-0.063,0.232-0.213,0.435-0.446,0.605c-0.234,0.171-0.513,0.257-0.835,0.257c-0.231,0-0.447-0.051-0.647-0.152s-0.61-0.252-0.776-0.455l-0.127,0.489h-1.675v-8.131h1.802v2.326c0.163-0.189,0.571-0.33,0.771-0.423c0.2-0.093,0.418-0.139,0.652-0.139c0.27,0,0.504,0.042,0.703,0.126c0.198,0.085,0.35,0.204,0.453,0.356c0.104,0.153,0.167,0.303,0.188,0.449c0.021,0.146,0.031,0.004,0.031,0.483V48.44z M51.306,46.667h-2.554v1.855c0,0.293,0.021,0.482,0.063,0.566c0.043,0.084,0.124,0.127,0.244,0.127c0.149,0,0.25-0.056,0.301-0.168c0.05-0.112,0.075-0.33,0.075-0.652v-0.854h1.87v0.478c0,0.4-0.025,0.708-0.076,0.923c-0.05,0.215-0.168,0.444-0.354,0.688s-0.421,0.427-0.706,0.549c-0.284,0.122-0.642,0.183-1.071,0.183c-0.416,0-0.671-0.061-0.989-0.181c-0.319-0.121-0.624-0.286-0.802-0.496c-0.177-0.21-0.3-0.441-0.368-0.693c-0.068-0.252-0.103-0.619-0.103-1.101v-2.117c0-0.566,0.076-0.559,0.229-0.886c0.152-0.327,0.46-0.578,0.809-0.752c0.348-0.174,0.635-0.261,1.087-0.261c0.554,0,1.01,0.105,1.369,0.314c0.36,0.21,0.612,0.488,0.757,0.835c0.146,0.347,0.218,0.607,0.218,1.235V46.667z M44.04,45.179c-0.042-0.103-0.353-0.154-0.477-0.154c-0.12,0-0.198,0.045-0.234,0.134c-0.036,0.09-0.054-0.14-0.054,0.222v3.02c0,0.349,0.021,0.571,0.062,0.669c0.04,0.098,0.121,0.146,0.241,0.146c0.124,0,0.432-0.05,0.469-0.151c0.038-0.101,0.057-0.343,0.057-0.728v-2.956C44.104,45.046,44.082,45.282,44.04,45.179z M49.274,45.172c-0.036-0.098-0.109-0.146-0.22-0.146c-0.137,0-0.221,0.042-0.254,0.125c-0.032,0.083-0.049-0.147-0.049,0.217v0.474h0.576v-0.474C49.328,45.032,49.311,45.27,49.274,45.172z'/></svg>";
            $(youtbubeLine).appendTo('#line-youtube');

            // Dilicious
            var diliciousLine = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow dilicious_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M41.458,27.559v12.507L66.27,64.877l10.042-14.029l-21.349-23.29H41.458z M27.955,52.574l23.121,21.564l15.194-9.26L41.458,40.066H27.955V52.574z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M41.458,27.559v12.507h13.505V27.559H41.458z M27.955,52.574h13.504V40.066H27.955V52.574z'/></svg>";
            $(diliciousLine).appendTo('#line-dilicious');

            // Treehouse
            var treehouseLine = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow treehouse_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M43.198,28.15c-0.782-0.422-3.61-1.26-4.393-0.838l-10.67,5.747c-0.782,0.421-1.422,1.468-1.422,2.325v11.23c0,0.857,26.838,27.63,27.62,28.051l19.5-18.75c0-0.43-15.076-17.141-20.996-22.435c-1.724-1.541-1.42,2.852-1.42,2.852L43.198,28.15z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M50.524,32.107c-0.971-0.524-2.523,0.319-3.465,1.885l-1.706,2.835c-0.623,1.179-0.538,2.582,0.253,3.665l0.05,0.068c0.791,1.083,1.85,2.085,2.201,2.441c0.206,0.21,0.364,0.47,0.451,0.766c0.288,0.984-0.313,2.006-1.344,2.281c-1.03,0.274-2.099-0.3-2.387-1.284c-0.072-0.246-0.088-0.496-0.056-0.735c0.055-0.406-0.082-1.068-0.692-1.719s-1.857,0.577-2.261,1.841l-0.019,0.058c-0.403,1.263-0.658,2.365-0.582,2.472c0.045,0.063,0.087,0.129,0.126,0.198c0.566,1.018,0.162,2.28-0.903,2.821c-1.065,0.54-2.387,0.154-2.953-0.863s-0.162-2.28,0.903-2.82c0.048-0.024,0.096-0.047,0.145-0.067c0.082-0.034,0.312-0.565,0.512-1.192s0.363-1.136,0.363-1.136c0.021-0.066,0.04-0.133,0.057-0.198l1.078-3.676l-1.152,2.261c-0.137-0.43-0.362-0.444-0.857-0.106c-0.298,0.203-0.792,0.605-1.033,0.77c-0.452,0.31-0.831,0.91-1.031,1.278c-0.118,0.216-0.283,0.414-0.494,0.577c-0.825,0.64-2.037,0.519-2.706-0.269c-0.669-0.788-0.543-1.946,0.282-2.585c0.242-0.188,0.517-0.311,0.802-0.369c0.485-0.101,2.133-1.063,3.126-1.742c0.178-0.121,0.327-0.236,0.448-0.343l2.652-1.925l-2.31,1.193c0,0-0.235-0.023-0.523,0.008c-0.845,0.089-1.716,0.203-1.88,0.403c-0.097,0.118-0.213,0.226-0.347,0.317c-0.771,0.53-1.846,0.363-2.401-0.373c-0.555-0.736-0.38-1.765,0.391-2.294c0.318-0.22,0.688-0.319,1.051-0.31c0.618,0.017,2.245,0.331,3.605,0.101l0.35-0.059c1.361-0.23,2.99-1.362,3.64-2.528c0,0,0.636-1.066,1.42-2.383c0.784-1.315,0.727-2.758-0.129-3.22l-1.549-0.837c-0.782-0.422-2.061-0.423-2.843-0.001l-10.67,5.747c-0.782,0.421-1.422,1.468-1.422,2.325v11.23c0,0.857,0.64,1.904,1.422,2.325l10.67,5.747c0.782,0.422,2.062,0.421,2.843-0.001l10.634-5.744c0.782-0.422,1.421-1.47,1.421-2.327v-11.23c0-0.857-0.64-1.905-1.421-2.327C52.283,33.058,51.495,32.632,50.524,32.107z'/></svg>";
            $(treehouseLine).appendTo('#line-treehouse');

            //===============================================
            // SVG Inject
            //===============================================

            //facebook
            var facebookFilled = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow facebook_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_shape_shadow' d='M46.85,28.657h-3.358c0,0-5.253-0.55-5.253,4.916c0,1.169,0,2.265,0,2.265h-2.136l-0.034,4.301h2.17v11.447l19.717,19.721l14.252-18.144L46.85,28.657z'/><path class='icon_circle_shadow' opacity='0.7' fill='url(#icon_circle_shadow_1_)' enable-background='new ' d='M9.418,59.659l77,78l49.332-50.41l-72.332-71.59L51.355,7.943L36.75,5.625l-21,10.625L6.375,35.5L5.878,46.659L7.5,50.75l2.918,5.909L9.418,59.659z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.444-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' fill='#FFFFFF' d='M46.85,28.657h-3.358c0,0-5.253-0.55-5.253,4.916c0,1.169,0,2.265,0,2.265h-2.136l-0.034,4.301h2.17v11.447h4.98V40.138h2.876l0.699-4.301h-3.575v-1.749c0,0-0.307-1.478,1.464-1.478h2.133L46.85,28.657z'/></svg>";
            $(facebookFilled).appendTo('#filled-facebook');

            //twitter
            var twitterFilled = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow twitter_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l47.001-47L64.971,13.083L51.355,7.846L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.898L9.418,59.563z'/><path class='icon_shape_shadow' d='M55.693,73.545c0,0-27.942-25.396-28.604-28.256c0,0,5.7,5,10.2,0.043c0,0-0.759-0.002-1.246-0.377c-0.441-0.342-0.621-1.059-0.621-1.059s1.413-0.789,0.885-1.389c0,0-3.125-0.063-3.302-1.946l1.835-1.187c0,0-0.721,0.351-1.435-0.004c0,0-1.853-1.33-1.5-2.689l1.548-0.157c0,0-2.685-1.908-1.935-3.374c0,0,0.258-1.262,9.1,4.636c0,0,1.564-5.572,4.458-6.798c0,0,0.5,0.2,0.5,0.476c0,0,0.411-0.881,0.95-0.963c0,0,0.701,0.602,0.201,0.903c0,0,1.101-0.752,1.637-0.37l25.785,23.599l-8.751,11.125l-10.807,7.059'/><path class='icon_circle' d='M41.459,6.404c19.057,0,34.5,15.399,34.5,34.5c0,19.1-15.443,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5c0-19.041,15.459-34.541,34.459-34.5H41.459z'/><path class='icon_shape' d='M27.09,45.262c0,0,5.7,5,10.2,0.043c0,0-0.76-0.002-1.246-0.375c-0.442-0.342-0.621-1.061-0.621-1.061s1.413-0.789,0.884-1.387c0,0-3.123-0.063-3.301-1.947l1.835-1.187c0,0-0.721,0.35-1.436-0.005c0,0-1.853-1.329-1.498-2.688l1.547-0.157c0,0-2.684-1.908-1.936-3.375c0,0,0.258-1.261,9.101,4.635c0,0,1.565-5.569,4.458-6.797c0,0,0.5,0.201,0.5,0.5c0,0,0.41-0.881,0.951-0.963c0,0,0.699,0.601,0.199,0.903c0,0,1.102-0.752,1.639-0.371c0,0-0.045,0.669-1.625,1.5c0,0,4.1,0.2,5.5,5.7c0,0,1.8,0.6,3.451-0.437c0,0,0.1,0.811-2.457,1.953c0,0,0.201,0.399,2.399,0.1c0,0-0.018,1.617-3.458,1.604c0,0-2.904,8.418-9.968,9.577c-8.432,1.436-14.493-2.865-15.093-5.738L27.09,45.262z'/></svg>";
            $(twitterFilled).appendTo('#filled-twitter');

            //LinkedIn
            var linkedinFilled = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow linkedin_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M34.128,27.516c-1.468,0-3.298,2.312-3.298,3.773c0,1.463,34.542,33.58,34.542,33.58l2.194-3.11C67.566,61.758,35.593,27.516,34.128,27.516z M30.825,49.325l27.96,23.378l6.81-7.892L35.407,34.623L30.825,49.325z M49.654,34.809c-2.308,0-6.739,0.692-7.373,1.845h-0.065V34.65h-4.55v14.675h4.551L65.86,65.63c0-1.914,7.304-11.007,7.304-11.007S52.815,36.227,49.654,34.809z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M33.116,27.314c-1.468,0-2.655,1.187-2.655,2.648c0,1.463,1.187,2.65,2.655,2.65c1.464,0,2.654-1.187,2.654-2.65C35.771,28.501,34.581,27.314,33.116,27.314z M30.825,49.325h4.582V34.623h-4.582V49.325z M46.77,34.284c-2.308,0-3.855,1.217-4.488,2.37h-0.065V34.65h-4.55v14.675h4.551v-7.337c0-1.914,0.567-3.691,3.036-3.691c2.431,0,2.653,2.355,2.653,4.058v6.97h4.55v-8.049C52.456,37.323,51.569,34.284,46.77,34.284z'/></svg>";
            $(linkedinFilled).appendTo('#filled-linkedin');

            // Google Plus
            var googleFilled = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow google_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_shape_shadow' d='M48.247,27.314c0,0-6.229,0-8.305,0c-3.724,0-7.228,2.629-7.228,5.675c0,3.113,2.538,5.625,6.326,5.625c0.264,0,0.52-0.005,0.77-0.021c-0.246,0.438-0.421,0.933-0.421,1.446c0,0.865,0.499,1.566,1.13,2.139c-0.477,0-0.938,0.013-1.44,0.013c-4.612,0-7.342,7.625-7.342,7.625l26.687,21.501l17.157-19.99L48.247,27.314z M53.508,38.278v-3.247h-1.362v3.247h-3.404v1.299h3.404v3.247h1.362v-3.247h3.404v-1.299H53.508z'/><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.444-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M48.247,27.314c0,0-6.229,0-8.305,0c-3.724,0-7.228,2.629-7.228,5.675c0,3.113,2.538,5.625,6.326,5.625c0.264,0,0.52-0.005,0.77-0.021c-0.246,0.438-0.421,0.933-0.421,1.446c0,0.865,0.499,1.566,1.13,2.139c-0.477,0-0.938,0.013-1.44,0.013c-4.612,0-8.162,2.738-8.162,5.577c0,2.796,3.892,4.545,8.503,4.545c5.258,0,8.162-2.781,8.162-5.577c0-2.242-0.71-3.585-2.904-5.032c-0.75-0.495-2.186-1.7-2.186-2.408c0-0.83,0.254-1.238,1.594-2.214c1.374-1,2.345-2.407,2.345-4.043c0-1.947-0.93-3.846-2.677-4.472h2.633L48.247,27.314z M45.346,46.252c0.066,0.259,0.102,0.526,0.102,0.798c0,2.26-1.562,4.025-6.043,4.025c-3.188,0-5.49-1.881-5.49-4.141c0-2.214,2.856-4.058,6.043-4.026c0.744,0.007,1.437,0.119,2.066,0.309C43.754,44.34,44.995,44.974,45.346,46.252z M40.242,37.825c-2.14-0.06-4.174-2.231-4.543-4.85c-0.369-2.62,1.065-4.625,3.205-4.565c2.139,0.06,4.173,2.162,4.542,4.781C43.815,35.81,42.38,37.884,40.242,37.825z M53.508,38.278v-3.247h-1.362v3.247h-3.404v1.299h3.404v3.247h1.362v-3.247h3.404v-1.299H53.508z'/></svg>";
            $(googleFilled).appendTo('#filled-google');

            // Instagram
            var instagramFilled = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow instagram_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M55.056,75.181c-1.465,0-24.823-23.744-24.823-25.147V33.103c0-1.402,1.187-2.539,2.651-2.539h17.682c1.464,0,23.791,21.266,23.791,22.668L55.056,75.181z'/><path class='icon_circle' stroke='#FFFFFF' stroke-width='5' stroke-miterlimit='10' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M50.535,39.735h-1.916c0.146,0.542,0.177,1.248,0.177,1.833c0,3.741-3.166,6.773-7.071,6.773c-3.906,0-7.072-3.032-7.072-6.773c0-0.585,0.031-1.292,0.177-1.833h-1.916v9.538c0,0.467,0.661,0.734,1.149,0.734h15.706c0.489,0,0.767-0.267,0.767-0.734V39.735z M50.535,33.865c0-0.467-0.277-0.734-0.767-0.734h-2.682c-0.488,0-0.766,0.267-0.766,0.734v2.568c0,0.467,0.277,0.734,0.766,0.734h2.682c0.489,0,0.767-0.267,0.767-0.734V33.865z M41.725,37.336c-2.441,0-4.421,1.895-4.421,4.232s1.979,4.233,4.421,4.233c2.44,0,4.42-1.896,4.42-4.233S44.165,37.336,41.725,37.336 M50.565,52.574H32.884c-1.465,0-2.651-1.137-2.651-2.541V33.103c0-1.402,1.187-2.539,2.651-2.539h17.682c1.464,0,2.651,1.137,2.651,2.539v16.931C53.217,51.437,52.029,52.574,50.565,52.574'/></svg>";
            $(instagramFilled).appendTo('#filled-intagram');

            // behance
            var behanceFilled = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow behance_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M67.574,60.926c-0.265-0.542-28.45-28.788-28.924-29.111c-0.48-0.324-1.05-0.561-1.716-0.702c-0.67-0.145-1.403-0.215-2.216-0.215h-8.009v16.995c0,0,27.284,25.797,28,25.606c0.724-0.19,10.525-7.5,10.525-7.5S67.833,61.46,67.574,60.926z M50.541,44.906c-0.501,0.338-1.098,0.507-1.789,0.507c-0.961,0-1.702-0.244-2.215-0.729c-0.515-0.485,24.278,16.104,24.278,15.15L54.688,42.34c0.064-0.938-0.015-1.833-0.238-2.689c-0.226-0.858-0.588-1.623-1.096-2.293c-0.509-0.67-1.155-1.205-1.945-1.6c-0.792-0.401-1.716-0.598-2.771-0.598c-0.956,0-1.818,0.164-2.601,0.491c-0.782,0.328-1.454,0.777-2.021,1.347c-0.565,0.566-0.995,1.242-1.306,2.024c-0.304,0.779-0.46,1.623-0.46,2.526c0,0.935,0.15,1.797,0.448,2.575c0.301,0.782,0.723,1.449,1.266,2.013c0.558,0.562,1.221,0.992,2.014,1.299c0.793,0.303,1.678,0.458,2.66,0.458c1.409,0,18.765,13.832,18.765,13.832s1.316-1.705,1.8-3.159l-14.73-14.73C54.355,44.21,51.037,44.57,50.541,44.906z M51.907,32.084h-6.909v1.581L69.583,58.75L73.25,53L51.907,32.084z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M37.832,38.648c0.768-0.364,1.342-0.832,1.733-1.402c0.388-0.571,0.583-1.285,0.583-2.141c0-0.792-0.13-1.46-0.389-1.994c-0.265-0.542-0.635-0.973-1.109-1.296c-0.48-0.324-1.05-0.561-1.716-0.702c-0.67-0.145-1.403-0.215-2.216-0.215h-8.009v16.995h8.234c0.761,0,1.504-0.096,2.221-0.286c0.724-0.19,1.37-0.482,1.933-0.882c0.558-0.395,1.011-0.907,1.344-1.539c0.329-0.624,0.494-1.365,0.494-2.228c0-1.063-0.252-1.971-0.769-2.728C39.652,39.479,38.877,38.949,37.832,38.648z M30.366,33.665h3.658c1.046,0.085,1.293,0.304,1.71,0.51c0.252,0.119,0.432,0.338,0.576,0.592c0.139,0.253,0.209,0.58,0.209,0.976c0,0.712-0.209,1.231-0.639,1.546c-0.435,0.319-0.787,0.329-1.449,0.329h-4.064V33.665z M36.979,43.854c-0.3,0.552-0.679,0.739-0.923,0.878c-0.281,0.167-0.888,0.396-1.625,0.396h-4.064v-4.743h4.064c0.805,0,1.544,0.12,2.036,0.492c0.49,0.378,0.736,1,0.736,1.876C37.202,43.199,37.134,43.571,36.979,43.854z M50.541,44.906c-0.501,0.338-1.098,0.507-1.789,0.507c-0.961,0-1.702-0.244-2.215-0.729c-0.515-0.485-0.848-1.39-0.848-2.344h9c0.064-0.938-0.015-1.833-0.238-2.689c-0.226-0.858-0.588-1.623-1.096-2.293c-0.509-0.67-1.155-1.205-1.945-1.6c-0.792-0.401-1.716-0.598-2.771-0.598c-0.956,0-1.818,0.164-2.601,0.491c-0.782,0.328-1.454,0.777-2.021,1.347c-0.565,0.566-0.995,1.242-1.306,2.024c-0.304,0.779-0.46,1.623-0.46,2.526c0,0.935,0.15,1.797,0.448,2.575c0.301,0.782,0.723,1.449,1.266,2.013c0.558,0.562,1.221,0.992,2.014,1.299c0.793,0.303,1.678,0.458,2.66,0.458c1.409,0,2.619-0.313,3.611-0.941c1.004-0.624,1.74-1.662,2.224-3.116h-3.016C51.339,44.21,51.037,44.57,50.541,44.906z M45.844,39.452c0.088-0.302,0.239-0.583,0.46-0.851c0.222-0.263,0.513-0.486,0.867-0.666c0.362-0.182,0.815-0.271,1.363-0.271c0.841,0,1.531,0.236,1.938,0.673c0.409,0.439,0.708,1.064,0.79,1.91h-5.574C45.705,40.013,45.757,39.746,45.844,39.452z M51.907,32.084h-6.909v1.581h6.909V32.084z'/></svg>";
            $(behanceFilled).appendTo('#filled-behance');

            // Dribbbble
            var dribbbleFilled = "<svg xmlns='http://www.w3.org/2000/svg' id='behance_long_shadow' class='svg_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.659l77,78L135.75,87.25L63.418,15.659L51.355,7.943L36.75,5.625l-21,10.625L6.375,35.5L5.878,46.659L7.5,50.75l2.918,5.909L9.418,59.659z'/><path class='icon_shape_shadow' d='M59.378,70.486c0,0-29.424-23.132-29.424-29.486s5.151-11.505,11.505-11.505c6.354,0,31.916,24.942,31.916,24.942L59.378,70.486z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M41.459,52.505c-6.354,0-11.505-5.151-11.505-11.505s5.151-11.505,11.505-11.505c6.354,0,11.505,5.151,11.505,11.505S47.813,52.505,41.459,52.505z M44.208,39.069c0.289,0.583,0.564,1.164,0.817,1.733c1.563-0.258,3.253-0.265,5.05,0.089c-0.019-1.676-0.522-3.233-1.366-4.551C47.329,37.489,45.788,38.379,44.208,39.069z M47.41,47.225c1.148-1.099,1.986-2.513,2.393-4.1c-0.931-0.165-2.271-0.288-3.85-0.104C46.6,44.676,47.085,46.149,47.41,47.225z M41.447,49.624c1.358,0,2.638-0.322,3.78-0.881c-0.295-1.805-0.832-3.584-1.489-5.275c-2.252,0.651-4.769,2.009-7.188,4.63C37.942,49.058,39.628,49.624,41.447,49.624z M34.855,46.559c1.533-1.604,4.306-4.021,7.975-5.22c-0.235-0.503-0.478-0.992-0.725-1.469c-3.726,1.23-7.348,1.496-9.273,1.54C32.927,43.369,33.668,45.155,34.855,46.559z M33.007,39.177c3.325-0.25,5.938-0.743,7.978-1.342c-1.175-2.012-2.33-3.655-3.114-4.697C35.421,34.256,33.585,36.482,33.007,39.177z M41.447,32.355c-0.494,0-0.974,0.051-1.445,0.13c1.196,1.401,2.242,2.981,3.153,4.594c2.091-0.856,3.331-1.795,4.043-2.515C45.672,33.196,43.661,32.355,41.447,32.355z'/></svg>";
            $(dribbbleFilled).appendTo('#filled-dribbble');

            // SoundCloud
            var SoundcloudFilled = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow soundcloud_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M57.616,70.3c-0.011-0.071-31.597-31.655-31.663-31.655s-0.12,0.051-0.129,0.121c0,0.001-0.37,2.13-0.37,2.13l0.37,3.188c0.009,0.07,28.39,28.449,28.456,28.449S57.616,70.3,57.616,70.3z M32.886,36.286c-0.125,0-0.229,0.099-0.234,0.225l-0.243,4.947l0.243,3.196c0.006,0.125,0.109,0.224,0.234,0.224c0.124,0,25.324,24.866,25.324,24.866l5.335-2.809C63.538,66.81,33.01,36.286,32.886,36.286z M58.674,68.139c0.155,0,7.201-3.091,7.201-3.091c-0.006-0.154-30.307-30.45-30.462-30.45c-0.156,0-0.283,0.121-0.288,0.276l-0.211,6.585l0.336,3.363C35.254,44.974,58.518,68.139,58.674,68.139z M40.584,44.893c0.213,0,22.543,21.771,22.543,21.771l6.346-5.525c-0.004-0.208-28.677-27.663-28.89-27.663c-0.214,0-0.391,0.17-0.394,0.379l-0.148,7.604c0,0.004,0.148,3.057,0.148,3.057C40.194,44.723,40.371,44.893,40.584,44.893z M37.978,44.881c0.046,0,23.98,22.7,23.98,22.7l4.865-5.152c-0.005-0.184-28.659-27.929-28.846-27.929s-0.336,0.144-0.341,0.327l-0.18,6.634l0.181,3.095C37.642,44.736,37.792,44.881,37.978,44.881z M56.436,70.648c0.11,0,3.968-2.677,3.968-2.677c-0.008-0.112-29.655-29.754-29.765-29.754c-0.112,0-0.201,0.085-0.208,0.198l0.024,3.48l0.069,2.887C30.531,44.896,56.323,70.648,56.436,70.648z M28.171,44.676c0.081,0,27.218,27.011,27.227,26.926l3.688-2.577c-0.01-0.086-30.834-30.907-30.916-30.907s-0.146,0.063-0.155,0.147l-0.289,3.189l0.289,3.074C28.025,44.614,28.09,44.676,28.171,44.676z M56.104,38.399c0,0-3.475-0.762-3.929-0.578c-0.304-3.319-3.186-5.923-6.701-5.923c-0.86,0-1.699,0.164-2.44,0.44c-0.287,0.107-0.364,0.219-0.366,0.434V44.46c0.003,0.225,0.184,0.413,0.411,0.435c0.01,0.001,23.411,19.845,23.411,19.845l6.092-8.403L56.104,38.399z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M26.083,38.767c-0.011-0.071-0.063-0.121-0.129-0.121s-0.12,0.051-0.129,0.121c0,0.001-0.37,2.13-0.37,2.13l0.37,3.188c0.009,0.07,0.063,0.122,0.129,0.122s0.118-0.05,0.129-0.121l0.347-2.63L26.083,38.767z M32.886,36.286c-0.125,0-0.229,0.099-0.234,0.225l-0.243,4.947l0.243,3.196c0.006,0.125,0.109,0.224,0.234,0.224c0.124,0,0.227-0.099,0.234-0.225v0.001l0.274-3.196l-0.274-4.947C33.113,36.385,33.01,36.286,32.886,36.286z M35.413,44.877c0.155,0,0.281-0.12,0.287-0.275l0.238-3.143L35.7,34.873c-0.006-0.154-0.132-0.275-0.287-0.275c-0.156,0-0.283,0.121-0.288,0.276l-0.211,6.585l0.211,3.145C35.129,44.756,35.256,44.877,35.413,44.877z M40.584,44.893c0.213,0,0.39-0.17,0.394-0.379v0.003v-0.003l0.166-3.053l-0.166-7.606c-0.004-0.208-0.181-0.378-0.394-0.378c-0.214,0-0.391,0.17-0.394,0.379l-0.148,7.604c0,0.004,0.148,3.057,0.148,3.057C40.194,44.723,40.371,44.893,40.584,44.893z M37.978,44.881c0.187,0,0.336-0.145,0.341-0.328v0.003l0.202-3.096l-0.202-6.634c-0.005-0.184-0.154-0.327-0.341-0.327s-0.336,0.144-0.341,0.327l-0.18,6.634l0.181,3.095C37.642,44.736,37.792,44.881,37.978,44.881z M30.638,44.852c0.11,0,0.199-0.085,0.208-0.198l0.608-2.757l-0.608-3.481c-0.008-0.112-0.098-0.197-0.208-0.197c-0.112,0-0.201,0.085-0.208,0.198l0.024,3.48l-0.024,2.757C30.437,44.766,30.526,44.852,30.638,44.852z M28.171,44.676c0.081,0,0.146-0.062,0.155-0.146l0.329-3.074l-0.328-3.189c-0.01-0.086-0.075-0.147-0.156-0.147s-0.146,0.063-0.155,0.147l-0.289,3.189l0.289,3.074C28.025,44.614,28.09,44.676,28.171,44.676z M53.65,37.535c-0.522,0-1.021,0.103-1.476,0.286c-0.304-3.319-3.186-5.923-6.701-5.923c-0.86,0-1.699,0.164-2.44,0.44c-0.287,0.107-0.364,0.219-0.366,0.434V44.46c0.003,0.225,0.184,0.413,0.411,0.435c0.01,0.001,10.504,0.006,10.572,0.006c2.106,0,3.813-1.648,3.813-3.683S55.756,37.535,53.65,37.535z'/></svg>";
            $(SoundcloudFilled).appendTo('#filled-soundcloud');

            // Vimeo
            var VimeoFilled = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow vimeo_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M72.815,55.383l-15.107,15.28c0,0-22.545-19.489-23.633-22.229c-0.727-2.511-1.453-5.021-2.18-7.533c-0.808-2.739,28.296,27.25,28.296,27.25L25.903,36.446c1.333-1.104,2.647-2.208,3.941-3.313c1.777-1.448,5.153-1.759,6.043-1.835c2.102-0.19,30.128,32.288,30.128,32.288S42.234,43.793,43.366,42.11c1.131-1.683,1.737-2.964,1.818-3.844c0.161-1.453,23.296,23.221,23.296,23.221L41.368,36.503l9.931-5.325L72.815,55.383z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M52.898,35.618c-0.121,2.478-1.957,5.871-5.508,10.177c-3.672,4.498-6.778,6.747-9.32,6.747c-1.573,0-2.906-1.369-3.994-4.109c-0.727-2.511-1.453-5.021-2.18-7.533c-0.809-2.738-1.675-4.109-2.602-4.109c-0.202,0-0.909,0.401-2.119,1.199l-1.271-1.543c1.333-1.104,2.647-2.208,3.941-3.313c1.777-1.448,3.112-2.209,4.002-2.286c2.102-0.19,3.396,1.164,3.881,4.062c0.524,3.127,0.888,5.072,1.092,5.834c0.605,2.594,1.272,3.89,2.001,3.89c0.564,0,1.414-0.842,2.546-2.524c1.131-1.683,1.737-2.964,1.818-3.844c0.161-1.453-0.444-2.181-1.818-2.181c-0.646,0-1.313,0.141-1.999,0.417c1.328-4.097,3.863-6.087,7.606-5.974C51.75,30.606,53.058,32.302,52.898,35.618z'/></svg>";
            $(VimeoFilled).appendTo('#filled-vimeo');

            // YouTube
            var youtbubeFilled = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow facebook_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_shape_shadow' d='M73.831,53.826L50.496,29.405h-5.082l-0.686,3.417c-1.276-1.466-2.075-2.385-2.115-2.435c-0.235-0.289-0.569-0.522-1.002-0.702s-0.724-0.27-1.327-0.27c-0.376,0-0.808,0.041-1.204,0.117l-2.112-2.015c-3.305,0-6.61,0.057-6.61,0.057l1.971,6.934v3.901l2.138,1.958l-1.189-0.074c-2.51,0-4.544,2.035-4.544,4.544l0.465,4.721c0,2.51,24.984,23.934,24.984,23.934L73.831,53.826z'/><path class='icon_circle_shadow' d='M9.418,59.659l77,78L135.75,87.25L63.418,15.659L51.355,7.943L36.75,5.625l-21,10.625L6.375,35.5L5.878,46.659L7.5,50.75l2.918,5.909L9.418,59.659z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M44.468,37.79c0.126,0.235,0.322,0.424,0.589,0.566s0.715,0.099,1.119,0.099c0.354,0,0.669,0.04,0.941-0.109c0.273-0.149,0.503-0.373,0.689-0.67l-0.047,0.734h2.736v-9.004h-2.689v6.115c0,0.724-0.02,1.152-0.057,1.285c-0.038,0.133-0.156,0.2-0.356,0.2c-0.187,0-0.414-0.064-0.456-0.193c-0.042-0.129-0.063-0.537-0.063-1.225v-6.182h-2.689v6.128c0,0.759,0.016,1.266,0.047,1.521C44.262,37.31,44.341,37.555,44.468,37.79z M36.947,35.134c0,0.75,0.049,1.313,0.146,1.688c0.098,0.375,0.261,0.695,0.489,0.958c0.229,0.265,0.55,0.462,0.962,0.593c0.413,0.131,1.258,0.196,1.853,0.196c0.532,0,0.776-0.077,1.187-0.229c0.411-0.153,0.747-0.391,1.009-0.712s0.433-0.668,0.513-1.039s0.12-0.953,0.12-1.748v-2.164c0-0.625-0.043-1.092-0.13-1.398s-0.247-0.604-0.482-0.892s-0.569-0.522-1.002-0.702s-0.724-0.27-1.327-0.27c-0.719,0-1.65,0.14-2.112,0.419c-0.461,0.28-0.78,0.65-0.958,1.111c-0.178,0.462-0.267,1.103-0.267,1.924V35.134z M39.637,32.125c0-0.453,0.027-0.738,0.08-0.855c0.054-0.118,0.16-0.177,0.319-0.177c0.16,0,0.378,0.059,0.427,0.177c0.049,0.117,0.073,0.402,0.073,0.855v3.619c0,0.382-0.025,0.63-0.077,0.746c-0.051,0.115-0.27,0.173-0.43,0.173c-0.155,0-0.259-0.063-0.313-0.189c-0.053-0.126-0.08-0.398-0.08-0.815V32.125z M32.329,38.409h2.652v-3.901l1.987-6.991l-2.574,0.057c-0.365,2.022-0.626,3.495-0.781,4.645c-0.051-0.728-0.278-2.541-0.681-4.645h-2.574l1.971,6.934V38.409z M49.639,40.293h-16.36c-2.51,0-4.544,2.035-4.544,4.544v2.727c0,2.51,2.034,4.544,4.544,4.544h16.36c2.51,0,4.545-2.035,4.545-4.544v-2.727C54.184,42.328,52.148,40.293,49.639,40.293z M35.045,43.868h-0.823v6.378h-1.827v-6.378h-0.932v-1.752h3.582V43.868z M40.539,50.246h-2.007l0.034-0.538c-0.137,0.219-0.305,0.382-0.505,0.492s-0.431,0.164-0.691,0.164c-0.296,0-0.542-0.052-0.737-0.156c-0.195-0.104-0.339-0.243-0.432-0.415c-0.093-0.173-0.15-0.353-0.173-0.54c-0.023-0.187-0.034-0.559-0.034-1.115v-4.256h1.802v4.295c0,0.504,0.015,0.804,0.046,0.898c0.031,0.095,0.285,0.142,0.422,0.142c0.146,0,0.348-0.049,0.375-0.146s0.041-0.412,0.041-0.942v-4.189h1.859V50.246z M46.075,48.44c0,0.476-0.031,0.829-0.095,1.062c-0.063,0.232-0.213,0.435-0.446,0.605c-0.234,0.171-0.513,0.257-0.835,0.257c-0.231,0-0.447-0.051-0.647-0.152s-0.61-0.252-0.776-0.455l-0.127,0.489h-1.675v-8.131h1.802v2.326c0.163-0.189,0.571-0.33,0.771-0.423c0.2-0.093,0.418-0.139,0.652-0.139c0.27,0,0.504,0.042,0.703,0.126c0.198,0.085,0.35,0.204,0.453,0.356c0.104,0.153,0.167,0.303,0.188,0.449c0.021,0.146,0.031,0.004,0.031,0.483V48.44z M51.306,46.667h-2.554v1.855c0,0.293,0.021,0.482,0.063,0.566c0.043,0.084,0.124,0.127,0.244,0.127c0.149,0,0.25-0.056,0.301-0.168c0.05-0.112,0.075-0.33,0.075-0.652v-0.854h1.87v0.478c0,0.4-0.025,0.708-0.076,0.923c-0.05,0.215-0.168,0.444-0.354,0.688s-0.421,0.427-0.706,0.549c-0.284,0.122-0.642,0.183-1.071,0.183c-0.416,0-0.671-0.061-0.989-0.181c-0.319-0.121-0.624-0.286-0.802-0.496c-0.177-0.21-0.3-0.441-0.368-0.693c-0.068-0.252-0.103-0.619-0.103-1.101v-2.117c0-0.566,0.076-0.559,0.229-0.886c0.152-0.327,0.46-0.578,0.809-0.752c0.348-0.174,0.635-0.261,1.087-0.261c0.554,0,1.01,0.105,1.369,0.314c0.36,0.21,0.612,0.488,0.757,0.835c0.146,0.347,0.218,0.607,0.218,1.235V46.667z M44.04,45.179c-0.042-0.103-0.353-0.154-0.477-0.154c-0.12,0-0.198,0.045-0.234,0.134c-0.036,0.09-0.054-0.14-0.054,0.222v3.02c0,0.349,0.021,0.571,0.062,0.669c0.04,0.098,0.121,0.146,0.241,0.146c0.124,0,0.432-0.05,0.469-0.151c0.038-0.101,0.057-0.343,0.057-0.728v-2.956C44.104,45.046,44.082,45.282,44.04,45.179z M49.274,45.172c-0.036-0.098-0.109-0.146-0.22-0.146c-0.137,0-0.221,0.042-0.254,0.125c-0.032,0.083-0.049-0.147-0.049,0.217v0.474h0.576v-0.474C49.328,45.032,49.311,45.27,49.274,45.172z'/></svg>";
            $(youtbubeFilled).appendTo('#filled-youtube');

            // Dilicious
            var diliciousFilled = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow dilicious_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M41.458,27.559v12.507L66.27,64.877l10.042-14.029l-21.349-23.29H41.458z M27.955,52.574l23.121,21.564l15.194-9.26L41.458,40.066H27.955V52.574z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M41.458,27.559v12.507h13.505V27.559H41.458z M27.955,52.574h13.504V40.066H27.955V52.574z'/></svg>";
            $(diliciousFilled).appendTo('#filled-dilicious');

            // Treehouse
            var treehouseFilled = "<svg xmlns='http://www.w3.org/2000/svg' class='svg_long_shadow treehouse_long_shadow' width='134' height='138' viewBox='0 0 134 138'><defs><linearGradient id='icon_circle_gradient' gradientUnits='userSpaceOnUse' x1='132.9' y1='-120.7' x2='220.1' y2='-208' gradientTransform='matrix(1 0 0 -1 -122.6001 -110.4722)'><stop offset='0' class='offset0'/><stop offset='0.4329' class='offset1'/><stop offset='0.5008' class='offset2'/><stop offset='0.936' class='offset3'/></linearGradient><linearGradient id='icon_shape_gradient' gradientUnits='userSpaceOnUse' x1='155.0332' y1='-139.2104' x2='188.2848' y2='-172.462' gradientTransform='matrix(1 0 0 -1 -122.6001 -106.9902)'><stop offset='0' class='offset4'/><stop offset='0.7899' class='offset5'/><stop offset='0.9199' class='offset6'/><stop offset='1' class='offset3'/></linearGradient></defs><path class='icon_circle_shadow' d='M9.418,59.563l77,78l49.332-50.409L63.418,15.563L51.355,7.847L36.75,5.529l-21,10.625l-9.375,19.25L5.878,46.563L7.5,50.654l2.918,5.909L9.418,59.563z'/><path class='icon_shape_shadow' d='M43.198,28.15c-0.782-0.422-3.61-1.26-4.393-0.838l-10.67,5.747c-0.782,0.421-1.422,1.468-1.422,2.325v11.23c0,0.857,26.838,27.63,27.62,28.051l19.5-18.75c0-0.43-15.076-17.141-20.996-22.435c-1.724-1.541-1.42,2.852-1.42,2.852L43.198,28.15z'/><path class='icon_circle' d='M41.459,6.5c19.054,0,34.5,15.446,34.5,34.5s-15.446,34.5-34.5,34.5c-23.163,0-34.5-15.445-34.5-34.5C6.959,21.946,22.405,6.5,41.459,6.5z'/><path class='icon_shape' d='M50.524,32.107c-0.971-0.524-2.523,0.319-3.465,1.885l-1.706,2.835c-0.623,1.179-0.538,2.582,0.253,3.665l0.05,0.068c0.791,1.083,1.85,2.085,2.201,2.441c0.206,0.21,0.364,0.47,0.451,0.766c0.288,0.984-0.313,2.006-1.344,2.281c-1.03,0.274-2.099-0.3-2.387-1.284c-0.072-0.246-0.088-0.496-0.056-0.735c0.055-0.406-0.082-1.068-0.692-1.719s-1.857,0.577-2.261,1.841l-0.019,0.058c-0.403,1.263-0.658,2.365-0.582,2.472c0.045,0.063,0.087,0.129,0.126,0.198c0.566,1.018,0.162,2.28-0.903,2.821c-1.065,0.54-2.387,0.154-2.953-0.863s-0.162-2.28,0.903-2.82c0.048-0.024,0.096-0.047,0.145-0.067c0.082-0.034,0.312-0.565,0.512-1.192s0.363-1.136,0.363-1.136c0.021-0.066,0.04-0.133,0.057-0.198l1.078-3.676l-1.152,2.261c-0.137-0.43-0.362-0.444-0.857-0.106c-0.298,0.203-0.792,0.605-1.033,0.77c-0.452,0.31-0.831,0.91-1.031,1.278c-0.118,0.216-0.283,0.414-0.494,0.577c-0.825,0.64-2.037,0.519-2.706-0.269c-0.669-0.788-0.543-1.946,0.282-2.585c0.242-0.188,0.517-0.311,0.802-0.369c0.485-0.101,2.133-1.063,3.126-1.742c0.178-0.121,0.327-0.236,0.448-0.343l2.652-1.925l-2.31,1.193c0,0-0.235-0.023-0.523,0.008c-0.845,0.089-1.716,0.203-1.88,0.403c-0.097,0.118-0.213,0.226-0.347,0.317c-0.771,0.53-1.846,0.363-2.401-0.373c-0.555-0.736-0.38-1.765,0.391-2.294c0.318-0.22,0.688-0.319,1.051-0.31c0.618,0.017,2.245,0.331,3.605,0.101l0.35-0.059c1.361-0.23,2.99-1.362,3.64-2.528c0,0,0.636-1.066,1.42-2.383c0.784-1.315,0.727-2.758-0.129-3.22l-1.549-0.837c-0.782-0.422-2.061-0.423-2.843-0.001l-10.67,5.747c-0.782,0.421-1.422,1.468-1.422,2.325v11.23c0,0.857,0.64,1.904,1.422,2.325l10.67,5.747c0.782,0.422,2.062,0.421,2.843-0.001l10.634-5.744c0.782-0.422,1.421-1.47,1.421-2.327v-11.23c0-0.857-0.64-1.905-1.421-2.327C52.283,33.058,51.495,32.632,50.524,32.107z'/></svg>";
            $(treehouseFilled).appendTo('#filled-treehouse');

            //===============================================
            // SVG Inject
            //===============================================

            var browserShadow = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M28.692,24.431h42.615c2.353,0,4.262,1.908,4.262,4.262v42.615c0,2.354-1.909,4.262-4.262,4.262H28.692c-2.354,0-4.262-1.908-4.262-4.262V28.692C24.431,26.338,26.339,24.431,28.692,24.431z'/><path class='screen' d='M27.982,38.637h44.036v32.672H27.982V38.637z'/><path class='top' d='M24.431,24.431h51.139v11.364H24.431V24.431z'/><path class='green' d='M47.159,27.271c1.57,0,2.841,1.273,2.841,2.841s-1.271,2.841-2.841,2.841c-1.569,0-2.841-1.272-2.841-2.841S45.589,27.271,47.159,27.271z'/><path class='orange' d='M38.344,27.271c1.569,0,2.841,1.273,2.841,2.841s-1.271,2.841-2.841,2.841s-2.841-1.272-2.841-2.841S36.776,27.271,38.344,27.271z'/><path class='red' fill='' d='M29.858,27.271c1.569,0,2.841,1.273,2.841,2.841s-1.272,2.841-2.841,2.841c-1.569,0-2.841-1.272-2.841-2.841S28.289,27.271,29.858,27.271z'/></g></svg>"
            $(browserShadow).appendTo('#shadow-browser');

            var brushShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='brush_base' d='M74.264,24.224c0.863-0.864,2.264-0.864,3.128,0l1.042,1.042c0.863,0.864,0.863,2.265,0,3.129L56.055,57.027L45.628,46.602L74.264,24.224z'/><path class='brush_highlight' d='M74.264,24.224c0.863-0.864,2.264-0.864,3.128,0l1.042,1.042c-1.225,1.133-26.979,27.164-26.979,27.164L45.628,46.6L74.264,24.224z'/><path class='brush_silver' d='M45.662,46.434l10.427,10.425c0.863,0.864,0.863,2.265,0,3.129l-3.128,3.128c-0.863,0.863-2.265,0.863-3.129,0L39.406,52.69c-0.863-0.864-0.863-2.265,0-3.129l3.128-3.127C43.399,45.571,44.799,45.571,45.662,46.434z'/><path class='brush_tip' d='M39.677,53.031l10.229,10.228c-8.683,20.973-28.987,10.601-28.987,10.601s10.482,0.427,10.021-9.586C30.561,56.009,37.24,53.623,39.677,53.031z'/></g></svg>"
            $(brushShadow).appendTo('#shadow-brush');

            var calanderShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base_top' d='M69.436,24.573h-38.89c-2.478,0-4.486,2.009-4.486,4.487V50h47.862V29.061C73.922,26.582,71.912,24.573,69.436,24.573z'/><path class='base_bottom' d='M69.436,75.427h-38.89c-2.478,0-4.486-2.009-4.486-4.487V50h47.862v20.939C73.922,73.418,71.912,75.427,69.436,75.427z'/><path class='left' d='M23.088,47.009h2.991v5.982h-2.991V47.009z'/><path class='right' d='M73.922,47.009h2.99v5.982h-2.99V47.009z'/><path class='number' d='M45.991,39.779c-1.318,0-2.443,0.463-3.378,1.394c-0.936,0.93-1.402,2.059-1.402,3.387v10.898c0,1.316,0.465,2.439,1.395,3.371c0.929,0.929,2.058,1.394,3.386,1.394c1.307,0,2.427-0.464,3.362-1.387c0.935-0.924,1.401-2.05,1.401-3.378V44.56c0-1.317-0.461-2.443-1.385-3.377C48.445,40.246,47.318,39.779,45.991,39.779z M47.632,55.41c0,0.477-0.169,0.886-0.51,1.227c-0.339,0.341-0.748,0.51-1.226,0.51s-0.885-0.169-1.22-0.51s-0.502-0.75-0.502-1.227V44.494c0-0.477,0.167-0.887,0.502-1.226c0.334-0.339,0.742-0.51,1.22-0.51s0.887,0.171,1.226,0.51c0.341,0.339,0.51,0.749,0.51,1.226V55.41z M56.667,40.033c-0.288,0.658-0.758,1.218-1.411,1.682c-0.653,0.462-1.342,0.734-2.063,0.82v2.104h2.565v15.377h3.012V40.033H56.667L56.667,40.033z'/></g></svg>"
            $(calanderShadow).appendTo('#shadow-calander');

            var cameraShadow = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M75.707,75.279H24.293c-2.839,0-5.141-2.303-5.141-5.143V39.289c0-2.556,1.87-4.659,4.313-5.058l-0.028-0.084c0,0,0.331,0,0.856,0l0,0h4.285c11.14,0,7.712-9.426,15.424-9.426c2.57,0,5.998,0,5.998,0s3.428,0,5.998,0c7.712,0,4.285,9.426,15.424,9.426h4.284l0,0c0.526,0,0.856,0,0.856,0l-0.027,0.084c2.443,0.398,4.313,2.502,4.313,5.058v30.848C80.85,72.977,78.546,75.279,75.707,75.279z'/><path class='strip' d='M19.152,48.715h61.696v17.138H19.152V48.715z'/><path class='lens' d='M50.001,41.86c8.519,0,15.424,6.904,15.424,15.423c0,8.52-6.905,15.426-15.424,15.426c-8.518,0-15.424-6.906-15.424-15.426C34.576,48.764,41.482,41.86,50.001,41.86z'/><path class='lens_inner' d='M50.001,46.144c6.151,0,11.14,4.987,11.14,11.139s-4.986,11.141-11.14,11.141c-6.153,0-11.14-4.986-11.14-11.141C38.861,51.133,43.848,46.144,50.001,46.144z'/><path class='flash' d='M44.859,27.864h10.284c1.795,0,3.428,4.284,3.428,4.284c0,1.42-1.151,2.569-2.571,2.569H44.003c-1.42,0-2.571-1.149-2.571-2.569C41.432,32.148,43.063,27.864,44.859,27.864z'/><path class='red' d='M73.708,36.717c1.42,0,2.571,1.151,2.571,2.571c0,1.421-1.151,2.57-2.571,2.57c-1.419,0-2.571-1.149-2.571-2.57C71.137,37.869,72.289,36.717,73.708,36.717z'/><path class='button' d='M25.722,31.578h3.428c1.419,0,2.57,1.15,2.57,2.57h-8.569C23.151,32.728,24.302,31.578,25.722,31.578z'/></g></svg>"
            $(cameraShadow).appendTo('#shadow-camera');

            var clockShadow = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,16.25c18.641,0,33.75,15.109,33.75,33.75S68.641,83.75,50,83.75c-18.64,0-33.75-15.109-33.75-33.75S31.36,16.25,50,16.25z'/><path class='face' d='M50,22.635c15.113,0,27.365,12.252,27.365,27.365c0,15.113-12.252,27.365-27.365,27.365c-15.113,0-27.365-12.252-27.365-27.365C22.635,34.887,34.887,22.635,50,22.635z'/><path class='seconds' d='M45.915,46.352l0.645-0.645l16.419,16.418l-0.645,0.646L45.915,46.352z'/><path class='middle' d='M50,47.264c1.512,0,2.736,1.226,2.736,2.736S51.512,52.736,50,52.736S47.264,51.511,47.264,50S48.488,47.264,50,47.264z'/><path class='hour' fill='' d='M51.844,50c0,0.504-0.408,0.912-0.912,0.912H37.249c-0.505,0-0.912-0.408-0.912-0.912c0-0.504,0.407-0.912,0.912-0.912h13.683C51.436,49.088,51.844,49.496,51.844,50z'/><path class='minute' d='M50,28.108c0.504,0,0.912,0.408,0.912,0.913v20.067C50.912,49.592,50.504,50,50,50c-0.504,0-0.912-0.408-0.912-0.912V29.021C49.088,28.516,49.496,28.108,50,28.108z'/></g></svg>"
            $(clockShadow).appendTo('#shadow-clock');

            var coffeeShadow = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M27.253,32.94h45.493l-8.748,46.369H36.002L27.253,32.94z'/><path class='middle' d='M27.253,43.329h45.493l-4.373,20.122H31.627L27.253,43.329z'/><polygon class='top' points='70.996,26.816 66.623,26.816 63.998,20.692 36.002,20.692 33.377,26.816 29.003,26.816 26.378,32.94 73.621,32.94 '/></g></svg>"
            $(coffeeShadow).appendTo('#shadow-coffee');

            var diamondShadow = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' fill='' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='middle' d='M17.702,38.645h64.597L50,82.607L17.702,38.645z'/><path class='top_3' d='M50,23.393l11.665,15.252H38.336L50,23.393z'/><path class='top_2' d='M38.336,38.645l-8.972-15.252H50L38.336,38.645z'/><path class='top_1' d='M61.664,38.645L50,23.393h20.635L61.664,38.645z'/><path class='top_left' d='M29.364,23.393l8.972,15.252H17.702L29.364,23.393z'/><path class='top_right' d='M70.635,23.393l11.662,15.252H61.662L70.635,23.393z'/><path class='right' d='M61.664,38.645h20.635L50,82.607L61.664,38.645z'/><path class='left' d='M17.702,38.645h20.635L50,82.607L17.702,38.645z'/></g></svg>"
            $(diamondShadow).appendTo('#shadow-diamond');

            var diskShadow = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M72.848,75.133H27.151c-1.262,0-2.285-1.023-2.285-2.285V27.151c0-1.261,1.022-2.284,2.285-2.284h38.843l9.139,9.138v38.842C75.133,74.109,74.109,75.133,72.848,75.133z'/><path class='top' d='M65.992,24.867v15.994c0,1.261-1.021,2.285-2.283,2.285H36.29c-1.262,0-2.285-1.023-2.285-2.285V24.867H65.992z'/><path class='top_right' d='M55.711,27.914h8.379v12.185h-8.379V27.914z'/><path class='bottom' d='M65.992,75.133V53.047c0-1.261-1.021-2.285-2.283-2.285H36.29c-1.262,0-2.285,1.024-2.285,2.285v22.086H65.992z'/><path class='text' d='M39.718,58.377h20.563c0.211,0,0.381-0.17,0.381-0.379c0-0.211-0.17-0.381-0.381-0.381H39.718c-0.21,0-0.38,0.17-0.38,0.381C39.337,58.207,39.508,58.377,39.718,58.377z M60.281,63.709H39.718c-0.21,0-0.38,0.172-0.38,0.381c0,0.211,0.17,0.381,0.38,0.381h20.563c0.211,0,0.381-0.17,0.381-0.381C60.662,63.881,60.492,63.709,60.281,63.709z M60.281,69.801H39.718c-0.21,0-0.38,0.172-0.38,0.381c0,0.211,0.17,0.381,0.38,0.381h20.563c0.211,0,0.381-0.17,0.381-0.381C60.662,69.975,60.492,69.801,60.281,69.801z'/></g></svg>"
            $(diskShadow).appendTo('#shadow-disk');

            var emailShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='top' d='M76.162,35.079c1.113,0.731,1.113,1.917,0,2.647L52.013,53.615c-1.11,0.731-2.915,0.731-4.024,0l-24.15-15.889c-1.111-0.73-1.111-1.916,0-2.647l24.15-15.889c1.11-0.729,2.914-0.729,4.024,0L76.162,35.079z'/><path class='paper' d='M30.105,32.763h39.791v28.421H30.105V32.763z'/><path class='base' d='M23.003,36.404L50,54.165l26.997-17.761c0,0,0.006-0.667,0.006,1.688v27.002c0,2.354-1.91,4.264-4.264,4.264H27.262c-2.354,0-4.264-1.91-4.264-4.264V38.092C23,35.738,23.003,36.404,23.003,36.404z'/><path class='text' d='M36.145,38.27h27.71c0.199,0,0.357-0.16,0.357-0.356c0-0.195-0.158-0.355-0.357-0.355h-27.71c-0.197,0-0.355,0.16-0.355,0.355C35.788,38.11,35.947,38.27,36.145,38.27z M63.854,39.691H36.144c-0.197,0-0.355,0.159-0.355,0.356c0,0.196,0.158,0.355,0.355,0.355h27.711c0.197,0,0.357-0.16,0.357-0.355C64.211,39.849,64.053,39.691,63.854,39.691z M63.854,41.822H36.144c-0.197,0-0.355,0.161-0.355,0.356c0,0.197,0.158,0.355,0.355,0.355h27.711c0.197,0,0.357-0.158,0.357-0.355C64.211,41.982,64.053,41.822,63.854,41.822z'/></g></svg>"
            $(emailShadow).appendTo('#shadow-email');

            var filmShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' fill='' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M72.021,74.154v-3.552c0-1.177-0.954-2.132-2.131-2.132h-2.842c-1.176,0-2.132,0.955-2.132,2.132v3.552H35.081v-3.552c0-1.177-0.955-2.132-2.131-2.132h-2.843c-1.176,0-2.131,0.955-2.131,2.132v3.552h-2.842V25.846h2.842v3.552c0,1.177,0.955,2.132,2.131,2.132h2.843c1.176,0,2.131-0.955,2.131-2.132v-3.552h29.837v3.552c0,1.177,0.955,2.132,2.132,2.132h2.842c1.178,0,2.131-0.955,2.131-2.132v-3.552h2.843v48.309H72.021z M35.081,36.502c0-1.177-0.955-2.132-2.131-2.132h-2.843c-1.176,0-2.131,0.955-2.131,2.132v1.421c0,1.175,0.955,2.132,2.131,2.132h2.843c1.176,0,2.131-0.957,2.131-2.132V36.502z M35.081,45.026c0-1.176-0.955-2.13-2.131-2.13h-2.843c-1.176,0-2.131,0.953-2.131,2.13v1.42c0,1.177,0.955,2.132,2.131,2.132h2.843c1.176,0,2.131-0.955,2.131-2.132V45.026z M35.081,53.552c0-1.177-0.955-2.132-2.131-2.132h-2.843c-1.176,0-2.131,0.955-2.131,2.132v1.421c0,1.176,0.955,2.13,2.131,2.13h2.843c1.176,0,2.131-0.954,2.131-2.13V53.552z M35.081,62.077c0-1.176-0.955-2.132-2.131-2.132h-2.843c-1.176,0-2.131,0.956-2.131,2.132v1.421c0,1.177,0.955,2.132,2.131,2.132h2.843c1.176,0,2.131-0.955,2.131-2.132V62.077z M72.021,36.502c0-1.177-0.954-2.132-2.131-2.132h-2.842c-1.176,0-2.132,0.955-2.132,2.132v1.421c0,1.175,0.955,2.132,2.132,2.132h2.842c1.177,0,2.131-0.957,2.131-2.132V36.502z M72.021,45.026c0-1.176-0.954-2.13-2.131-2.13h-2.842c-1.176,0-2.132,0.953-2.132,2.13v1.42c0,1.177,0.955,2.132,2.132,2.132h2.842c1.177,0,2.131-0.955,2.131-2.132V45.026z M72.021,53.552c0-1.177-0.954-2.132-2.131-2.132h-2.842c-1.176,0-2.132,0.955-2.132,2.132v1.421c0,1.176,0.955,2.13,2.132,2.13h2.842c1.177,0,2.131-0.954,2.131-2.13V53.552z M72.021,62.077c0-1.176-0.954-2.132-2.131-2.132h-2.842c-1.176,0-2.132,0.956-2.132,2.132v1.421c0,1.177,0.955,2.132,2.132,2.132h2.842c1.177,0,2.131-0.955,2.131-2.132V62.077z'/><path class='bottom' d='M40.054,51.42h19.892c1.177,0,2.132,0.955,2.132,2.132v12.787c0,1.177-0.955,2.132-2.132,2.132H40.054c-1.177,0-2.132-0.955-2.132-2.132V53.552C37.922,52.375,38.876,51.42,40.054,51.42z'/><path class='top' fill='' d='M40.054,31.529h19.892c1.177,0,2.132,0.953,2.132,2.13v12.787c0,1.177-0.955,2.132-2.132,2.132H40.054c-1.177,0-2.132-0.955-2.132-2.132V33.659C37.922,32.482,38.876,31.529,40.054,31.529z'/></g></svg>"
            $(filmShadow).appendTo('#shadow-film');

            var flagShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875S76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125S23.559,4.25,50,4.25z'/><g class='icon'><path class='bottom' d='M49.857,36.924l24.678,6.581v24.677l-24.678-6.58V36.924z'/><path class='shadow' d='M49.857,37.45l13.984-4.114v24.678l-13.984,4.113V37.45z'/><path class='top' d='M39.426,26.845l24.677,6.581v24.679l-24.677-6.58V26.845z'/><path class='pole' d='M37.826,22.117c1.817,0,3.29,1.473,3.29,3.291v54.292c0,1.816-1.474,3.289-3.29,3.289c-1.817,0-3.291-1.473-3.291-3.289V25.407C34.536,23.59,36.009,22.117,37.826,22.117z'/></g></svg>"
            $(flagShadow).appendTo('#shadow-flag');

            var folderShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='back' d='M67.715,70.502c0,2.516-2.038,4.555-4.556,4.555H30.51c-2.516,0-4.555-2.041-4.555-4.555V29.499c0-2.516,2.039-4.555,4.555-4.555h6.834c9.871,0,6.833,6.075,18.224,6.075c4.556,0,12.148,0,12.148,0L67.715,70.502L67.715,70.502z'/><path class='paper_back' d='M27.828,34.56h44.04v39.483h-44.04V34.56z'/><path class='paper_front' d='M29.602,38.356h44.798v35.687H29.602V38.356z'/><path class='front' d='M73.491,75.057H30.212c-1.96,0-3.615-1.244-4.26-2.979c0.439,0.863,2.465,1.461,3.5,1.461c1.519,0,3.037-1.52,3.037-4.557V43.167h45.559v27.334C78.048,73.016,76.008,75.057,73.491,75.057z'/></g></svg>"
            $(folderShadow).appendTo('#shadow-folder');

            var graphShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='bar_left' d='M42.401,35.96l15.197,11.053v25.563H42.401V35.96z'/><path class='bar_middle' d='M27.201,42.178l15.199-6.22v36.616c0,0-8.186,0-11.294,0c-1.785,0-3.986-1.842-3.906-3.397C27.518,63.139,27.201,42.178,27.201,42.178z'/><path class='bar_right' d='M72.8,69.178c0.08,1.556-2.121,3.398-3.907,3.398c-3.107,0-11.294,0-11.294,0V47.013l15.199-17.271C72.8,29.741,72.483,63.139,72.8,69.178z'/><path class='dot_4' d='M42.401,33.642c1.524,0,2.763,1.237,2.763,2.764s-1.238,2.764-2.763,2.764c-1.527,0-2.764-1.237-2.764-2.764S40.875,33.642,42.401,33.642z'/><path class='dot_3' d='M57.599,42.623c1.526,0,2.763,1.237,2.763,2.763c0,1.527-1.236,2.765-2.763,2.765c-1.525,0-2.763-1.237-2.763-2.765C54.836,43.86,56.073,42.623,57.599,42.623z'/><path class='dot_2' d='M72.8,27.424c1.524,0,2.762,1.238,2.762,2.764c0,1.527-1.237,2.765-2.762,2.765c-1.527,0-2.764-1.237-2.764-2.765C70.034,28.661,71.271,27.424,72.8,27.424z'/><path class='dot_1' d='M27.201,38.479c1.525,0,2.764,1.237,2.764,2.764s-1.238,2.765-2.764,2.765c-1.526,0-2.763-1.238-2.763-2.765C24.438,39.715,25.675,38.479,27.201,38.479z'/></g></svg>"
            $(graphShadow).appendTo('#shadow-graph');

            var heartShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' fill='' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,79.036c-5.322-0.002-30.415-18.54-30.415-37.078c0-5.324,0.566-16.994,15.969-16.994c6.321,0,11.918,4.825,14.446,10.042c2.53-5.217,8.127-10.042,14.448-10.042c15.402,0,15.967,11.67,15.967,16.994C80.415,60.496,55.323,79.034,50,79.036z'/><path class='left' d='M50,79.036c-10.701-3.241-30.415-18.54-30.415-37.078c0-5.324,0.566-16.994,15.969-16.994c6.321,0,11.918,4.825,14.446,10.042C50,46.931,50,68.191,50,79.036z'/></g></svg>"
            $(heartShadow).appendTo('#shadow-heart');

            var homeShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,29.753l23.293,17.47v26.011c0,2.572-2.086,4.659-4.66,4.659H31.366c-2.574,0-4.658-2.086-4.658-4.659V47.223L50,29.753z'/><path class='hole' d='M50,50.427c5.145,0,9.316,4.172,9.316,9.316c0,5.144-4.172,9.317-9.316,9.317c-5.146,0-9.316-4.174-9.316-9.317C40.684,54.599,44.854,50.427,50,50.427z'/><path class='roof' d='M50,35.188L22.826,55.374V38.295L50,18.107l27.174,20.188v17.08L50,35.188z'/></g></svg>"
            $(homeShadow).appendTo('#shadow-home');

            var lightningShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><polygon class='bolt' points='76.155,41.825 58.155,41.825 69.163,20.856 42.078,20.856 29.845,55.805 47.029,55.805 38.583,81.145 '/><path class='highlight' d='M65.014,22.603H44.917L33.559,54.059l13.98-27.96L65.014,22.603z M42.296,75.9l10.049-20.096h-2.791L42.296,75.9z'/></g></svg>"
            $(lightningShadow).appendTo('#shadow-lightning');

            var locationShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,19.53c13.945,0,25.248,11.213,25.248,25.045C75.248,60.437,54.207,80.47,50,80.47c-4.208,0-25.248-20.033-25.248-35.895C24.752,30.743,36.056,19.53,50,19.53z'/><path class='inner' d='M50,30.488c8.174,0,14.8,6.625,14.8,14.799c0,8.173-6.626,14.8-14.8,14.8s-14.8-6.626-14.8-14.799C35.2,37.114,41.826,30.488,50,30.488z'/></g></svg>"
            $(locationShadow).appendTo('#shadow-location');

            var lockShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M29.929,39.176h38.933c2.688,0,4.866,2.181,4.866,4.868v24.332c0,2.688-2.179,4.869-4.866,4.869H29.929c-2.687,0-4.867-2.179-4.867-4.869V44.043C25.062,41.356,27.242,39.176,29.929,39.176z'/><path class='baselight' d='M27.495,39.176h19.466c1.343,0,2.434,0,2.434,0v34.066c0,0-1.09,0-2.434,0H27.495c-1.344,0-2.433-2.179-2.433-4.867V44.042C25.062,41.356,26.152,39.176,27.495,39.176z'/><path class='keyhole' d='M55.073,53.776c0-3.136-2.542-5.679-5.678-5.679s-5.678,2.543-5.678,5.679c0,2.263,1.328,4.212,3.244,5.124v5.418h4.867V58.9C53.745,57.988,55.073,56.039,55.073,53.776z'/><path class='bar' d='M49.395,27.821c-6.271,0-11.355,5.083-11.355,11.354h-6.489c0-9.854,7.989-17.843,17.844-17.843c9.854,0,17.844,7.989,17.844,17.843h-6.49C60.749,32.904,55.667,27.821,49.395,27.821z'/></g></svg>"
            $(lockShadow).appendTo('#shadow-lock');

            var magnifyShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M72.215,69.959L60.276,58.021c2.497-3.507,3.97-7.792,3.97-12.424c0-11.847-9.604-21.451-21.452-21.451c-11.848,0-21.451,9.604-21.451,21.451c0,11.847,9.604,21.451,21.451,21.451c4.632,0,8.918-1.473,12.425-3.97l11.938,11.938c1.116,1.115,2.928,1.115,4.045,0l1.013-1.014C73.33,72.887,73.33,71.074,72.215,69.959z'/><path class='glass' d='M43.034,30.103c8.689,0,15.732,7.043,15.732,15.731c0,8.689-7.043,15.732-15.732,15.732c-8.688,0-15.731-7.043-15.731-15.732C27.302,37.146,34.345,30.103,43.034,30.103z'/></g></svg>"
            $(magnifyShadow).appendTo('#shadow-magnify');

            var messageShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='back' d='M75.139,28.854h-3.807l-8.125-8.125c-0.381-0.38-0.999-0.382-1.381,0l-8.124,8.125H36.428c-2.79,0-5.05,2.261-5.05,5.048v25.247c0,2.79,2.26,5.051,5.05,5.051h38.711c2.789,0,5.05-2.261,5.05-5.051V33.902C80.188,31.115,77.928,28.854,75.139,28.854z'/><path class='front' d='M63.571,35.8H24.862c-2.789,0-5.05,2.262-5.05,5.049v25.247c0,2.788,2.261,5.049,5.05,5.049h3.806l8.125,8.125c0.382,0.381,1,0.383,1.381,0l8.125-8.125h17.275c2.788,0,5.05-2.261,5.05-5.049V40.85C68.62,38.062,66.361,35.8,63.571,35.8z'/><path class='dots' d='M34.743,50.108c-1.858,0-3.365,1.507-3.365,3.366c0,1.86,1.506,3.367,3.365,3.367c1.86,0,3.367-1.507,3.367-3.367C38.109,51.615,36.603,50.108,34.743,50.108z M44.842,50.108c-1.858,0-3.367,1.507-3.367,3.366c0,1.86,1.507,3.367,3.367,3.367c1.859,0,3.366-1.507,3.366-3.367C48.208,51.615,46.701,50.108,44.842,50.108z M54.94,50.108c-1.857,0-3.365,1.507-3.365,3.366c0,1.86,1.506,3.367,3.365,3.367c1.86,0,3.366-1.507,3.366-3.367C58.307,51.615,56.8,50.108,54.94,50.108z'/></g></svg>"
            $(messageShadow).appendTo('#shadow-message');

            var micShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,19.317c8.592,0,15.557,6.964,15.557,15.558v12.101c0,8.593-6.965,15.558-15.557,15.558s-15.558-6.965-15.558-15.558V34.875C34.443,26.281,41.408,19.317,50,19.317z'/><path class='stand' d='M74.201,46.975c0-1.433-1.161-2.594-2.592-2.594c-1.434,0-2.595,1.161-2.595,2.594c0,10.501-8.512,19.015-19.014,19.015c-10.501,0-19.015-8.514-19.015-19.015c0-1.433-1.16-2.594-2.593-2.594c-1.432,0-2.593,1.161-2.593,2.594c0,12.49,9.461,22.765,21.607,24.06v4.461h-6.913c-1.432,0-2.594,1.162-2.594,2.594s1.161,2.594,2.594,2.594h19.014c1.433,0,2.593-1.162,2.593-2.594s-1.16-2.594-2.593-2.594h-6.915v-4.461C64.739,69.74,74.201,59.463,74.201,46.975z'/><path class='bars_left' d='M34.443,33.146v3.458h10.372v-3.458H34.443z M34.443,42.653h10.372v-3.457H34.443V42.653z M34.443,48.704h10.372v-3.458H34.443V48.704z'/><g class='bars_right'><rect x='55.187' y='33.146' width='10.371' height='3.458'/><rect x='55.187' y='39.196' width='10.371' height='3.457'/><rect x='55.187' y='45.246' width='10.371' height='3.458'/></g></g></svg>"
            $(micShadow).appendTo('#shadow-mic');

            var paperShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M33.174,76.947V28.366h37.955v48.581H33.174z'/><path class='front' d='M28.872,71.634V23.053h27.328L66.826,33.68v37.954H28.872z'/><path class='corner' d='M56.199,23.053L66.826,33.68H56.199V23.053z'/><path class='text' d='M36.432,39.247h22.014c0.209,0,0.381-0.169,0.381-0.379c0-0.211-0.17-0.381-0.381-0.381H36.432c-0.21,0-0.38,0.17-0.38,0.381C36.052,39.077,36.222,39.247,36.432,39.247z M58.443,46.079H36.431c-0.21,0-0.38,0.169-0.38,0.379c0,0.211,0.17,0.381,0.38,0.381h22.013c0.211,0,0.381-0.169,0.381-0.381C58.824,46.249,58.654,46.079,58.443,46.079z M58.443,53.67H36.431c-0.21,0-0.38,0.169-0.38,0.379c0,0.211,0.17,0.381,0.38,0.381h22.013c0.211,0,0.381-0.17,0.381-0.381C58.824,53.839,58.654,53.67,58.443,53.67z M58.443,61.261H36.431c-0.21,0-0.38,0.17-0.38,0.379c0,0.211,0.17,0.381,0.38,0.381h22.013c0.211,0,0.381-0.17,0.381-0.381C58.824,61.431,58.654,61.261,58.443,61.261z'/></g></svg>"
            $(paperShadow).appendTo('#shadow-paper');

            var pencilShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875C97.875,78.566,76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125C2.125,25.684,23.559,4.25,50,4.25z'/><g class='icon'><path class='wood' d='M26.683,55.108l16.801,16.84L23.62,75.635L26.683,55.108z'/><path class='base_top' d='M53.408,28.524l5.809,5.813L32.489,61.012l-5.807-5.75L53.408,28.524z'/><path class='base_bottom' d='M63.639,38.64l6.569,6.572L43.483,71.948l-6.635-6.575L63.639,38.64z'/><path class='base_middle' d='M58.868,33.931l6.569,6.573L38.714,67.239l-6.569-6.574L58.868,33.931z'/><path class='tip' d='M31.731,74.101l-8.635,1.776l1.776-8.638L31.731,74.101z'/><path class='eraser' d='M65.004,23.567l10.455,10.461c1.926,1.926,1.926,5.049,0,6.975L58.03,23.567C59.958,21.642,63.078,21.642,65.004,23.567z'/><path class='metal' d='M58.555,22.899l17.429,17.437c0.322,0.321,0.322,0.843,0,1.163l-4.244,4.246c-0.32,0.322-0.841,0.322-1.163,0L53.147,28.308c-0.319-0.32-0.319-0.842,0-1.161l4.245-4.248C57.715,22.578,58.235,22.578,58.555,22.899z'/></g></svg>"
            $(pencilShadow).appendTo('#shadow-pencil');

            var phoneShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M37.381,21.793h25.237c2.46,0,4.454,1.994,4.454,4.454v47.506c0,2.46-1.994,4.454-4.454,4.454H37.381c-2.46,0-4.454-1.994-4.454-4.454V26.247C32.928,23.787,34.921,21.793,37.381,21.793z'/><path class='screen' d='M35.896,30.701h28.208v38.598H35.896V30.701z'/><path class='details' d='M50,71.681c-1.23,0-2.227,0.998-2.227,2.228c0,1.227,0.996,2.225,2.227,2.225s2.227-0.998,2.227-2.225C52.227,72.679,51.23,71.681,50,71.681z M52.969,26.401h-5.938c-0.411,0-0.743,0.331-0.743,0.741s0.332,0.743,0.743,0.743h5.938c0.41,0,0.743-0.333,0.743-0.743C53.71,26.732,53.379,26.401,52.969,26.401z'/></g></svg>"
            $(phoneShadow).appendTo('#shadow-phone');

            var pictureShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='back' d='M23.236,32.68l41.281-11.062c1.221-0.327,2.477,0.397,2.804,1.618l11.062,41.279c0.327,1.223-0.397,2.478-1.618,2.805L35.483,78.382c-1.221,0.327-2.477-0.397-2.804-1.618L21.618,35.484C21.29,34.262,22.015,33.007,23.236,32.68z'/><path class='front' d='M28.631,26.343h42.736c1.264,0,2.29,1.024,2.29,2.289v42.736c0,1.265-1.025,2.289-2.29,2.289H28.631c-1.264,0-2.29-1.024-2.29-2.289V28.632C26.342,27.367,27.367,26.343,28.631,26.343z'/><path class='sky' d='M30.158,29.395h39.684c0.422,0,0.764,0.342,0.764,0.765v39.684c0,0.423-0.342,0.765-0.764,0.765H30.158c-0.421,0-0.763-0.342-0.763-0.765V30.159C29.395,29.736,29.736,29.395,30.158,29.395z'/><path class='sun' d='M39.062,35.342c2.529,0,4.579,2.051,4.579,4.579c0,2.529-2.05,4.579-4.579,4.579s-4.579-2.05-4.579-4.579C34.483,37.393,36.534,35.342,39.062,35.342z'/><path class='mountain' d='M29.395,70.033l10.59-16.188c0.535-0.834,1.402-0.834,1.937,0l3.549,5.536l9.875-15.399c0.763-1.192,2.003-1.192,2.766,0c0,0,11.314,23.861,12.494,25.789c-0.003,0.388,0.046,0.834-0.443,0.834C67.2,70.672,35.549,70.6,30.036,70.593C29.526,70.593,29.395,70.033,29.395,70.033z'/></g></svg>"
            $(pictureShadow).appendTo('#shadow-picture');

            var planeShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='bottom' f d='M57.25,62.16L46.755,74.738l4.498-15.933L57.25,62.16z'/><path class='right' d='M75.985,25.262L64.742,73.061L51.247,58.806L75.985,25.262z'/><path class='middle' d='M75.985,25.262L51.996,59.645l-5.247,15.094L33.257,53.771'/><path class='left' d='M75.985,25.262L33.257,54.61l-17.242-0.839L75.985,25.262z'/></g></svg>"
            $(planeShadow).appendTo('#shadow-plane');

            var presentShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875C97.875,78.566,76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125C2.125,25.684,23.559,4.25,50,4.25z'/><g class='icon'><path class='base' d='M24.724,47.472h50.554v30.33H24.724V47.472z'/><path class='top' d='M21.354,39.047h57.293v8.426H21.354V39.047z'/><path class='ribbon' d='M58.427,22.196c-4.651,0-8.426,3.772-8.426,8.426c0-4.653-3.773-8.426-8.426-8.426s-8.427,3.772-8.427,8.426c0,4.652,3.774,8.426,8.427,8.426h4.212v38.756h8.426V39.047h4.214c4.651,0,8.425-3.772,8.425-8.426S63.078,22.196,58.427,22.196z M44.944,33.991h-3.369c-1.861,0-3.37-1.51-3.37-3.37s1.509-3.37,3.37-3.37c1.86,0,3.369,1.51,3.369,3.37V33.991z M58.427,33.991h-3.369v-3.37c0-1.86,1.507-3.37,3.369-3.37c1.861,0,3.37,1.51,3.37,3.37S60.288,33.991,58.427,33.991z'/></g></svg>"
            $(presentShadow).appendTo('#shadow-present');

            var robotShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='ears' d='M22.849,58.578l5.43,3.102V43.837l-5.43,3.102V58.578z M71.722,43.835V61.68l5.43-3.105V46.939L71.722,43.835z'/><path class='base' d='M31.381,33.751h37.237c1.714,0,3.102,1.39,3.102,3.103v32.582c0,1.715-1.388,3.104-3.102,3.104H31.381c-1.713,0-3.102-1.389-3.102-3.104V36.854C28.279,35.141,29.668,33.751,31.381,33.751z'/><path class='highlight' d='M29.83,33.751h18.618c0.855,0,1.552,0,1.552,0v38.788c0,0-0.695,0-1.552,0H29.83c-0.856,0-1.552-1.391-1.552-3.104V36.854C28.279,35.141,28.975,33.751,29.83,33.751z'/><path class='antenna' d='M55.431,22.891c0-3-2.431-5.43-5.431-5.43c-2.999,0-5.43,2.43-5.43,5.43c0,2.459,1.637,4.534,3.879,5.203v5.66h3.104v-5.66C53.795,27.425,55.431,25.349,55.431,22.891z'/><path class='eyes' d='M42.241,49.266c-2.141,0-3.879,1.736-3.879,3.879c0,2.141,1.736,3.879,3.879,3.879c2.142,0,3.879-1.738,3.879-3.879C46.121,51.002,44.383,49.266,42.241,49.266z M57.758,49.266c-2.141,0-3.879,1.736-3.879,3.879c0,2.141,1.736,3.879,3.879,3.879s3.879-1.738,3.879-3.879C61.637,51.002,59.898,49.266,57.758,49.266z'/></g></svg>"
            $(robotShadow).appendTo('#shadow-robot');

            var rocketShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='engine' d='M32.515,51.63l16.327,16.328l-3.571,5.612L26.902,55.2L32.515,51.63z'/><path class='base' d='M26.902,46.083l1.021-1.021c0,0,7.669-1.483,14.828-8.643c14.165-14.164,30.583-9.217,30.583-9.217s4.946,16.421-9.216,30.583c-7.159,7.158-8.643,14.829-8.643,14.829l-1.021,1.021L26.902,46.083z'/><path class='window' d='M62.619,39.311c2.817,2.818,2.817,7.387,0,10.205c-2.817,2.82-7.388,2.82-10.204,0c-2.817-2.817-2.817-7.386,0-10.205C55.233,36.493,59.802,36.493,62.619,39.311z'/><path class='glass' d='M61.09,40.841c1.972,1.974,1.972,5.172,0,7.144c-1.974,1.972-5.171,1.972-7.143,0c-1.973-1.973-1.973-5.171,0-7.144C55.919,38.87,59.116,38.87,61.09,40.841z'/><path class='flame' d='M33.326,66.073c1.69,1.692,1.747,4.377,0.126,5.999c-1.859,1.858-6.759,1.656-7.269,1.146c-0.511-0.511-0.713-5.41,1.146-7.27C28.949,64.327,31.635,64.384,33.326,66.073z'/></g></svg>"
            $(rocketShadow).appendTo('#shadow-rocket');

            var screenShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875S76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125S23.559,4.25,50,4.25z'/><g class='icon'><path class='stand' d='M33.606,79.886v-2.343c7.113,0,8.588-2.227,8.588-6.242c0-0.133-0.017-0.65-0.021-0.782h15.652c-0.005,0.132-0.021,0.649-0.021,0.782c0,4.016,1.474,6.242,8.588,6.242v2.343H33.606z'/><path class='base' d='M27.361,28.364h45.276c2.587,0,4.685,2.097,4.685,4.685v32.787c0,2.586-2.098,4.683-4.685,4.683H27.361c-2.587,0-4.684-2.097-4.684-4.683V33.049C22.678,30.461,24.774,28.364,27.361,28.364z'/><path class='highlight' d='M27.361,28.364h45.276c2.587,0,4.685,1.786,4.685,3.99v27.929c0,2.205,0,3.992,0,3.992H22.678c0,0,0-1.787,0-3.992V32.354C22.678,30.15,24.774,28.364,27.361,28.364z'/><path class='logo' d='M49.999,64.757c1.294,0,2.342,1.05,2.342,2.343c0,1.292-1.049,2.342-2.342,2.342c-1.292,0-2.342-1.05-2.342-2.342C47.657,65.807,48.706,64.757,49.999,64.757z'/></g></svg>"
            $(screenShadow).appendTo('#shadow-screen');

            var settingsShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M79.649,54.255v-8.509l-8.053-1.832c-0.484-1.721-1.162-3.358-2.019-4.885l4.396-6.986l-6.017-6.017l-6.985,4.396c-1.526-0.859-3.164-1.536-4.885-2.02l-1.832-8.051h-8.509l-1.832,8.051c-1.72,0.485-3.357,1.161-4.886,2.02l-6.986-4.396l-6.017,6.017l4.397,6.986c-0.858,1.527-1.536,3.164-2.021,4.885l-8.052,1.832v8.509l8.052,1.831c0.484,1.721,1.162,3.358,2.021,4.885l-4.397,6.987l6.017,6.017l6.986-4.396c1.527,0.858,3.164,1.535,4.886,2.02l1.832,8.051h8.509l1.832-8.051c1.72-0.484,3.357-1.161,4.885-2.02l6.985,4.396l6.017-6.017l-4.396-6.987c0.858-1.526,1.534-3.164,2.019-4.885L79.649,54.255z'/><path class='top' d='M50,35.171c8.189,0,14.829,6.639,14.829,14.83c0,8.191-6.64,14.83-14.829,14.83c-8.191,0-14.83-6.639-14.83-14.83C35.17,41.81,41.809,35.171,50,35.171z'/></g></svg>"
            $(settingsShadow).appendTo('#shadow-settings');

            var spaceshipShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875C97.875,78.566,76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125C2.125,25.684,23.559,4.25,50,4.25z'/><g class='icon'><path class='light' d='M41.156,55.62h17.688l7.37,17.689h-32.43L41.156,55.62z'/><path class='glass' d='M41.156,35.535c0-4.884,3.96-8.845,8.844-8.845c4.885,0,8.845,3.96,8.845,8.845H41.156z'/><path class='base' d='M50,34.798c15.063,0,27.271,4.951,27.271,11.056c0,6.106-12.209,11.056-27.271,11.056c-15.062,0-27.271-4.949-27.271-11.056C22.729,39.749,34.938,34.798,50,34.798z'/><path class='circles' d='M50,41.433c-2.441,0-4.422,1.98-4.422,4.422s1.98,4.423,4.422,4.423c2.44,0,4.422-1.981,4.422-4.423S52.44,41.433,50,41.433z M64.741,41.433c-2.441,0-4.423,1.98-4.423,4.422s1.981,4.423,4.423,4.423s4.422-1.981,4.422-4.423S67.183,41.433,64.741,41.433z M35.259,41.433c-2.442,0-4.423,1.98-4.423,4.422s1.981,4.423,4.423,4.423s4.422-1.981,4.422-4.423S37.701,41.433,35.259,41.433z'/></g></svg>"
            $(spaceshipShadow).appendTo('#shadow-spaceship');

            var stormShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='cloud' d='M70.342,38.521c0.003-0.123,0.02-0.243,0.02-0.367c0-8.339-6.752-15.099-15.083-15.099c-5.764,0-10.769,3.238-13.308,7.996c-0.791-0.285-1.641-0.446-2.53-0.446c-4.166,0-7.541,3.382-7.541,7.549l0.002,0.039c-6.729,0.392-12.068,5.961-12.068,12.795c0,7.088,5.74,12.834,12.821,12.834h34.693c7.081,0,12.82-5.746,12.82-12.834C80.165,44.936,75.974,39.874,70.342,38.521z'/><polygon class='lightning' points='58.151,69.529 51.223,69.529 54.074,63.822 46.737,63.822 41.845,73.606 49.066,73.606 45.922,80.944 '/></g></svg>"
            $(stormShadow).appendTo('#shadow-storm');

            var suitcaseShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='top' d='M23.542,52.268V37.905c0-2.504,2.031-4.535,4.536-4.535h10.583v-4.534c0-2.505,2.031-4.537,4.536-4.537h13.607c2.504,0,4.535,2.032,4.535,4.537v4.534h10.584c2.504,0,4.535,2.031,4.535,4.535v14.363H23.542z M57.56,31.857v-1.511c0-1.253-1.016-2.269-2.268-2.269H44.709c-1.253,0-2.269,1.016-2.269,2.269v1.511v1.513H57.56V31.857L57.56,31.857z'/><path class='bottom' d='M76.457,52.268v18.898c0,2.506-2.031,4.535-4.536,4.535H28.076c-2.504,0-4.535-2.029-4.535-4.535V52.268H76.457z'/><path class='buttons' d='M36.394,49.245c-1.671,0-3.024,1.353-3.024,3.023s1.354,3.023,3.024,3.023c1.67,0,3.023-1.354,3.023-3.023S38.063,49.245,36.394,49.245z M63.606,49.245c-1.67,0-3.023,1.353-3.023,3.023s1.354,3.023,3.023,3.023s3.023-1.354,3.023-3.023S65.276,49.245,63.606,49.245z'/></g></svg>"
            $(suitcaseShadow).appendTo('#shadow-suitcase');

            var tagShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M75.523,53.617L53.508,75.631c-1.777,1.78-4.662,1.78-6.439,0L25.418,54.174c-2.275-2.276-2.275-7.275-2.275-8.347V27.614c0-2.514,1.821-4.58,4.336-4.58l19.188,0.028c3.036,0,5.313,0.759,7.59,3.033l21.268,21.082C77.303,48.957,77.303,51.842,75.523,53.617z'/><path class='dot' d='M33.866,27.083c2.934,0,5.312,2.379,5.312,5.313c0,2.933-2.377,5.312-5.312,5.312c-2.934,0-5.312-2.379-5.312-5.312C28.555,29.461,30.932,27.083,33.866,27.083z'/></g></svg>"
            $(tagShadow).appendTo('#shadow-tag');

            var thumbsdownShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M52.125,2.125C78.566,2.125,100,23.559,100,50c0,26.441-21.434,47.875-47.875,47.875C19.982,97.875,4.25,76.441,4.25,50C4.25,23.559,25.684,2.125,52.125,2.125z'/><g class='icon'><path class='base' d='M75.731,49.391c0,0,2.573-0.862,2.573-3.451c0-2.59-3.43-4.315-3.43-4.315s1.715-0.693,1.715-3.454c0-2.759-4.287-3.452-4.287-3.452s2.572-0.864,2.572-3.452c0-2.589-4.093-3.452-4.093-3.452H46.568v28.477h4.289c5.587,0,6.003,8.63,6.003,8.63s0,5.173,0,6.04c0,1.726,0.858,4.315,4.289,2.588c3.43-1.726,3.43-4.95,3.43-8.628c0-2.761-0.856-8.63-0.856-8.63s8.283,0,12.008,0c1.717,0,3.431-0.862,3.431-3.451C79.163,50.25,75.731,49.391,75.731,49.391z'/><path class='sleeve' d='M41.424,27.818h-5.988c-8.062,0-14.597,6.567-14.597,14.67c0,8.102,6.535,14.669,14.597,14.669h5.988V27.818z'/><path class='cuff' d='M38.85,58.674h10.293V25.881H38.85V58.674z'/><path class='dot' d='M43.997,35.521c1.42,0,2.573-1.159,2.573-2.589c0-1.429-1.152-2.587-2.573-2.587s-2.573,1.159-2.573,2.587C41.424,34.361,42.576,35.521,43.997,35.521z'/></g></svg>"
            $(thumbsdownShadow).appendTo('#shadow-thumbsdown');

            var thumbsupShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M78.856,47.19c0-2.562-1.698-3.417-3.396-3.417c-3.685,0-11.882,0-11.882,0s0.849-5.809,0.849-8.538c0-3.642,0-6.831-3.395-8.538c-3.396-1.708-4.242,0.854-4.242,2.562c0,0.856,0,5.977,0,5.977s-0.414,8.538-5.942,8.538h-4.243V71.95h23.958c0,0,4.051-0.854,4.051-3.416c0-2.561-2.547-3.415-2.547-3.415s4.243-0.687,4.243-3.416c0-2.732-1.697-3.417-1.697-3.417s3.396-1.707,3.396-4.27s-2.548-3.416-2.548-3.416S78.856,49.75,78.856,47.19z'/><path class='sleeve' d='M41.512,42.919h-5.925c-7.977,0-14.443,6.498-14.443,14.515c0,8.017,6.467,14.515,14.443,14.515h5.925V42.919z'/><path class='cuff' d='M38.965,73.865h10.185V41.419H38.965V73.865z'/><path class='dot' d='M41.512,66.891c0,1.415,1.14,2.562,2.546,2.562c1.407,0,2.547-1.146,2.547-2.562c0-1.414-1.141-2.561-2.547-2.561C42.652,64.33,41.512,65.477,41.512,66.891z'/></g></svg>"
            $(thumbsupShadow).appendTo('#shadow-thumbsup');

            var trashShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' fill='' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' fill='' d='M72.201,38.16v32.561c0,2.452-1.988,4.44-4.441,4.44H32.241c-2.452,0-4.44-1.988-4.44-4.44V38.16H72.201z'/><path class='details' fill='' d='M40.381,41.861c-0.817,0-1.481,0.661-1.481,1.48V69.98c0,0.817,0.663,1.48,1.481,1.48c0.816,0,1.48-0.661,1.48-1.48v-26.64C41.861,42.522,41.198,41.861,40.381,41.861z M59.621,41.861c-0.816,0-1.48,0.661-1.48,1.48V69.98c0,0.817,0.664,1.48,1.48,1.48s1.48-0.661,1.48-1.48v-26.64C61.102,42.522,60.438,41.861,59.621,41.861z M50.001,41.861c-0.817,0-1.481,0.661-1.481,1.48V69.98c0,0.817,0.663,1.48,1.481,1.48c0.816,0,1.48-0.661,1.48-1.48v-26.64C51.481,42.522,50.817,41.861,50.001,41.861z'/><path class='lid' fill='' d='M24.1,38.16L24.1,38.16c0-2.453,1.987-4.441,4.441-4.441H38.9v-4.44c0-2.452,1.988-4.439,4.44-4.439h13.32c2.453,0,4.441,1.987,4.441,4.439v4.44h10.359c2.451,0,4.439,1.988,4.439,4.441l0,0H24.1z M57.4,32.24v-1.48c0-1.226-0.996-2.22-2.219-2.22H44.82c-1.226,0-2.219,0.994-2.219,2.22v1.48v1.48H57.4V32.24z'/></g></svg>"
            $(trashShadow).appendTo('#shadow-trash');

            var userShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='body' d='M74.302,78.127H25.698c-2.982,0-5.4-2.419-5.4-5.4l0,0l0,0c0-19.884,13.501-25.202,29.702-25.202s29.702,5.318,29.702,25.202l0,0C79.702,75.71,77.283,78.127,74.302,78.127z'/><polygon class='collar_right' points='63.501,49.325 50,54.726 55.4,62.826 '/><polygon class='collar_left' points='46.977,62.826 52.377,54.726 38.876,49.325 '/><path class='head' d='M50.877,21.873c8.947,0,16.201,7.254,16.201,16.201c0,8.948-7.254,16.201-16.201,16.201c-8.947,0-16.201-7.253-16.201-16.201C34.676,29.127,41.928,21.873,50.877,21.873z'/><path class='hair' d='M67.918,39.683c-1.019,0.116-2.053,0.193-3.114,0.193c-8.816,0-16.3-4.136-19.082-9.9h-0.565c-1.256,2.194-3.435,4.371-6.296,6.022c-1.684,0.972-3.41,1.646-5.062,2.043c0.386-7.127,5.121-13.086,11.609-15.266h0.087c0.83-0.279,1.686-0.499,2.564-0.653c0.055-0.009,0.11-0.018,0.166-0.023c0.371-0.061,0.745-0.111,1.124-0.148c0.497-0.044,0.997-0.075,1.504-0.075c7.674,0,14.167,5.054,16.332,12.016c0.168,0.537,0.309,1.083,0.423,1.638c0.229,1.114,0.349,2.267,0.349,3.447C67.954,39.215,67.928,39.445,67.918,39.683z'/></g></svg>"
            $(userShadow).appendTo('#shadow-user');

            var winnerShadow = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='ribbon' d='M39.036,61.003h21.929l2.529,21.928L50,75.341l-13.494,7.59L39.036,61.003z'/><path class='base' d='M74.459,41.529c0,0.771-2.346,1.423-2.42,2.173c-0.074,0.765,2.102,1.855,1.955,2.599c-0.148,0.753-2.576,0.932-2.797,1.659c-0.223,0.734,1.697,2.231,1.406,2.933c-0.293,0.708-2.711,0.405-3.068,1.076c-0.361,0.675,1.227,2.518,0.805,3.15c-0.426,0.636-2.738-0.13-3.221,0.458c-0.484,0.59,0.715,2.708,0.176,3.247c-0.539,0.54-2.656-0.659-3.246-0.177c-0.59,0.484,0.176,2.795-0.457,3.221c-0.633,0.423-2.479-1.167-3.152-0.804c-0.67,0.357-0.369,2.773-1.076,3.066c-0.701,0.292-2.197-1.627-2.932-1.405c-0.727,0.221-0.906,2.649-1.66,2.798c-0.742,0.146-1.833-2.03-2.599-1.956c-0.753,0.074-1.401,2.42-2.173,2.42c-0.771,0-1.421-2.346-2.173-2.42c-0.765-0.074-1.856,2.103-2.599,1.956c-0.754-0.15-0.934-2.578-1.66-2.798c-0.733-0.222-2.23,1.697-2.932,1.405c-0.708-0.293-0.407-2.709-1.077-3.066c-0.675-0.363-2.519,1.227-3.151,0.804c-0.635-0.426,0.131-2.738-0.458-3.221c-0.589-0.482-2.707,0.717-3.247,0.177c-0.54-0.539,0.66-2.657,0.176-3.248c-0.484-0.589-2.795,0.178-3.22-0.457c-0.422-0.633,1.167-2.479,0.805-3.15c-0.359-0.671-2.775-0.369-3.068-1.076c-0.291-0.702,1.628-2.198,1.406-2.933c-0.22-0.725-2.648-0.906-2.797-1.659c-0.147-0.744,2.028-1.834,1.955-2.599c-0.074-0.752-2.42-1.402-2.42-2.173s2.346-1.423,2.42-2.173c0.074-0.765-2.101-1.857-1.955-2.599c0.149-0.754,2.578-0.933,2.797-1.659c0.223-0.734-1.697-2.231-1.406-2.933c0.293-0.708,2.709-0.406,3.069-1.076c0.361-0.675-1.228-2.519-0.805-3.151c0.425-0.634,2.736,0.132,3.219-0.457c0.485-0.587-0.715-2.709-0.175-3.248c0.54-0.54,2.657,0.66,3.247,0.176c0.589-0.483-0.177-2.795,0.457-3.22c0.633-0.423,2.478,1.167,3.151,0.805c0.67-0.358,0.369-2.775,1.077-3.069c0.701-0.29,2.198,1.63,2.933,1.407c0.724-0.221,0.905-2.649,1.659-2.797c0.743-0.146,1.834,2.028,2.599,1.955c0.752-0.074,1.402-2.42,2.173-2.42c0.771,0,1.422,2.346,2.173,2.42c0.766,0.074,1.856-2.101,2.599-1.954c0.756,0.149,0.934,2.577,1.66,2.794c0.732,0.225,2.23-1.695,2.934-1.404c0.705,0.293,0.404,2.71,1.074,3.068c0.676,0.363,2.52-1.227,3.152-0.804c0.635,0.425-0.133,2.736,0.457,3.219c0.588,0.483,2.709-0.716,3.246-0.175c0.539,0.54-0.66,2.657-0.176,3.247c0.484,0.589,2.795-0.177,3.221,0.457c0.422,0.633-1.166,2.478-0.805,3.151c0.357,0.67,2.775,0.369,3.068,1.076c0.291,0.702-1.629,2.198-1.406,2.933c0.221,0.724,2.648,0.905,2.797,1.659c0.146,0.742-2.029,1.834-1.955,2.599C72.113,40.108,74.459,40.758,74.459,41.529z'/><path class='text' d='M50.183,32.507h-2.711l-0.806,4.888h-2.357l0.806-4.888h-2.71l-0.806,4.888h-2.701l-0.417,2.731h2.668l-0.565,3.421h-2.706l-0.417,2.732h2.674L39.43,50.55h2.71l0.704-4.271h2.357l-0.704,4.271h2.71l0.704-4.271h2.831l0.418-2.732h-2.798l0.564-3.421h2.837l0.418-2.731h-2.805L50.183,32.507z M45.652,43.547H43.31l0.549-3.421h2.343L45.652,43.547z M57.184,32.521c-0.258,0.595-0.684,1.101-1.273,1.518c-0.588,0.417-1.209,0.664-1.859,0.74v1.898h2.313v13.873h2.719V32.521H57.184z'/></g></svg>"
            $(winnerShadow).appendTo('#shadow-winner');

            //===============================================
            // SVG Inject
            //===============================================

            var browserLine = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M28.692,24.431h42.615c2.353,0,4.262,1.908,4.262,4.262v42.615c0,2.354-1.909,4.262-4.262,4.262H28.692c-2.354,0-4.262-1.908-4.262-4.262V28.692C24.431,26.338,26.339,24.431,28.692,24.431z'/><path class='screen' d='M27.982,38.637h44.036v32.672H27.982V38.637z'/><path class='top' d='M24.431,24.431h51.139v11.364H24.431V24.431z'/><path class='green' d='M47.159,27.271c1.57,0,2.841,1.273,2.841,2.841s-1.271,2.841-2.841,2.841c-1.569,0-2.841-1.272-2.841-2.841S45.589,27.271,47.159,27.271z'/><path class='orange' d='M38.344,27.271c1.569,0,2.841,1.273,2.841,2.841s-1.271,2.841-2.841,2.841s-2.841-1.272-2.841-2.841S36.776,27.271,38.344,27.271z'/><path class='red' fill='' d='M29.858,27.271c1.569,0,2.841,1.273,2.841,2.841s-1.272,2.841-2.841,2.841c-1.569,0-2.841-1.272-2.841-2.841S28.289,27.271,29.858,27.271z'/></g></svg>"
            $(browserLine).appendTo('#line-browser');

            var brushLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='brush_base' d='M74.264,24.224c0.863-0.864,2.264-0.864,3.128,0l1.042,1.042c0.863,0.864,0.863,2.265,0,3.129L56.055,57.027L45.628,46.602L74.264,24.224z'/><path class='brush_highlight' d='M74.264,24.224c0.863-0.864,2.264-0.864,3.128,0l1.042,1.042c-1.225,1.133-26.979,27.164-26.979,27.164L45.628,46.6L74.264,24.224z'/><path class='brush_silver' d='M45.662,46.434l10.427,10.425c0.863,0.864,0.863,2.265,0,3.129l-3.128,3.128c-0.863,0.863-2.265,0.863-3.129,0L39.406,52.69c-0.863-0.864-0.863-2.265,0-3.129l3.128-3.127C43.399,45.571,44.799,45.571,45.662,46.434z'/><path class='brush_tip' d='M39.677,53.031l10.229,10.228c-8.683,20.973-28.987,10.601-28.987,10.601s10.482,0.427,10.021-9.586C30.561,56.009,37.24,53.623,39.677,53.031z'/></g></svg>"
            $(brushLine).appendTo('#line-brush');

            var calanderLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base_top' d='M69.436,24.573h-38.89c-2.478,0-4.486,2.009-4.486,4.487V50h47.862V29.061C73.922,26.582,71.912,24.573,69.436,24.573z'/><path class='base_bottom' d='M69.436,75.427h-38.89c-2.478,0-4.486-2.009-4.486-4.487V50h47.862v20.939C73.922,73.418,71.912,75.427,69.436,75.427z'/><path class='left' d='M23.088,47.009h2.991v5.982h-2.991V47.009z'/><path class='right' d='M73.922,47.009h2.99v5.982h-2.99V47.009z'/><path class='number' d='M45.991,39.779c-1.318,0-2.443,0.463-3.378,1.394c-0.936,0.93-1.402,2.059-1.402,3.387v10.898c0,1.316,0.465,2.439,1.395,3.371c0.929,0.929,2.058,1.394,3.386,1.394c1.307,0,2.427-0.464,3.362-1.387c0.935-0.924,1.401-2.05,1.401-3.378V44.56c0-1.317-0.461-2.443-1.385-3.377C48.445,40.246,47.318,39.779,45.991,39.779z M47.632,55.41c0,0.477-0.169,0.886-0.51,1.227c-0.339,0.341-0.748,0.51-1.226,0.51s-0.885-0.169-1.22-0.51s-0.502-0.75-0.502-1.227V44.494c0-0.477,0.167-0.887,0.502-1.226c0.334-0.339,0.742-0.51,1.22-0.51s0.887,0.171,1.226,0.51c0.341,0.339,0.51,0.749,0.51,1.226V55.41z M56.667,40.033c-0.288,0.658-0.758,1.218-1.411,1.682c-0.653,0.462-1.342,0.734-2.063,0.82v2.104h2.565v15.377h3.012V40.033H56.667L56.667,40.033z'/></g></svg>"
            $(calanderLine).appendTo('#line-calander');

            var cameraLine = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M75.707,75.279H24.293c-2.839,0-5.141-2.303-5.141-5.143V39.289c0-2.556,1.87-4.659,4.313-5.058l-0.028-0.084c0,0,0.331,0,0.856,0l0,0h4.285c11.14,0,7.712-9.426,15.424-9.426c2.57,0,5.998,0,5.998,0s3.428,0,5.998,0c7.712,0,4.285,9.426,15.424,9.426h4.284l0,0c0.526,0,0.856,0,0.856,0l-0.027,0.084c2.443,0.398,4.313,2.502,4.313,5.058v30.848C80.85,72.977,78.546,75.279,75.707,75.279z'/><path class='strip' d='M19.152,48.715h61.696v17.138H19.152V48.715z'/><path class='lens' d='M50.001,41.86c8.519,0,15.424,6.904,15.424,15.423c0,8.52-6.905,15.426-15.424,15.426c-8.518,0-15.424-6.906-15.424-15.426C34.576,48.764,41.482,41.86,50.001,41.86z'/><path class='lens_inner' d='M50.001,46.144c6.151,0,11.14,4.987,11.14,11.139s-4.986,11.141-11.14,11.141c-6.153,0-11.14-4.986-11.14-11.141C38.861,51.133,43.848,46.144,50.001,46.144z'/><path class='flash' d='M44.859,27.864h10.284c1.795,0,3.428,4.284,3.428,4.284c0,1.42-1.151,2.569-2.571,2.569H44.003c-1.42,0-2.571-1.149-2.571-2.569C41.432,32.148,43.063,27.864,44.859,27.864z'/><path class='red' d='M73.708,36.717c1.42,0,2.571,1.151,2.571,2.571c0,1.421-1.151,2.57-2.571,2.57c-1.419,0-2.571-1.149-2.571-2.57C71.137,37.869,72.289,36.717,73.708,36.717z'/><path class='button' d='M25.722,31.578h3.428c1.419,0,2.57,1.15,2.57,2.57h-8.569C23.151,32.728,24.302,31.578,25.722,31.578z'/></g></svg>"
            $(cameraLine).appendTo('#line-camera');

            var clockLine = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,16.25c18.641,0,33.75,15.109,33.75,33.75S68.641,83.75,50,83.75c-18.64,0-33.75-15.109-33.75-33.75S31.36,16.25,50,16.25z'/><path class='face' d='M50,22.635c15.113,0,27.365,12.252,27.365,27.365c0,15.113-12.252,27.365-27.365,27.365c-15.113,0-27.365-12.252-27.365-27.365C22.635,34.887,34.887,22.635,50,22.635z'/><path class='seconds' d='M45.915,46.352l0.645-0.645l16.419,16.418l-0.645,0.646L45.915,46.352z'/><path class='middle' d='M50,47.264c1.512,0,2.736,1.226,2.736,2.736S51.512,52.736,50,52.736S47.264,51.511,47.264,50S48.488,47.264,50,47.264z'/><path class='hour' fill='' d='M51.844,50c0,0.504-0.408,0.912-0.912,0.912H37.249c-0.505,0-0.912-0.408-0.912-0.912c0-0.504,0.407-0.912,0.912-0.912h13.683C51.436,49.088,51.844,49.496,51.844,50z'/><path class='minute' d='M50,28.108c0.504,0,0.912,0.408,0.912,0.913v20.067C50.912,49.592,50.504,50,50,50c-0.504,0-0.912-0.408-0.912-0.912V29.021C49.088,28.516,49.496,28.108,50,28.108z'/></g></svg>"
            $(clockLine).appendTo('#line-clock');

            var coffeeLine = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M27.253,32.94h45.493l-8.748,46.369H36.002L27.253,32.94z'/><path class='middle' d='M27.253,43.329h45.493l-4.373,20.122H31.627L27.253,43.329z'/><polygon class='top' points='70.996,26.816 66.623,26.816 63.998,20.692 36.002,20.692 33.377,26.816 29.003,26.816 26.378,32.94 73.621,32.94 '/></g></svg>"
            $(coffeeLine).appendTo('#line-coffee');

            var diamondLine = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' fill='' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='middle' d='M17.702,38.645h64.597L50,82.607L17.702,38.645z'/><path class='top_3' d='M50,23.393l11.665,15.252H38.336L50,23.393z'/><path class='top_2' d='M38.336,38.645l-8.972-15.252H50L38.336,38.645z'/><path class='top_1' d='M61.664,38.645L50,23.393h20.635L61.664,38.645z'/><path class='top_left' d='M29.364,23.393l8.972,15.252H17.702L29.364,23.393z'/><path class='top_right' d='M70.635,23.393l11.662,15.252H61.662L70.635,23.393z'/><path class='right' d='M61.664,38.645h20.635L50,82.607L61.664,38.645z'/><path class='left' d='M17.702,38.645h20.635L50,82.607L17.702,38.645z'/></g></svg>"
            $(diamondLine).appendTo('#line-diamond');

            var diskLine = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M72.848,75.133H27.151c-1.262,0-2.285-1.023-2.285-2.285V27.151c0-1.261,1.022-2.284,2.285-2.284h38.843l9.139,9.138v38.842C75.133,74.109,74.109,75.133,72.848,75.133z'/><path class='top' d='M65.992,24.867v15.994c0,1.261-1.021,2.285-2.283,2.285H36.29c-1.262,0-2.285-1.023-2.285-2.285V24.867H65.992z'/><path class='top_right' d='M55.711,27.914h8.379v12.185h-8.379V27.914z'/><path class='bottom' d='M65.992,75.133V53.047c0-1.261-1.021-2.285-2.283-2.285H36.29c-1.262,0-2.285,1.024-2.285,2.285v22.086H65.992z'/><path class='text' d='M39.718,58.377h20.563c0.211,0,0.381-0.17,0.381-0.379c0-0.211-0.17-0.381-0.381-0.381H39.718c-0.21,0-0.38,0.17-0.38,0.381C39.337,58.207,39.508,58.377,39.718,58.377z M60.281,63.709H39.718c-0.21,0-0.38,0.172-0.38,0.381c0,0.211,0.17,0.381,0.38,0.381h20.563c0.211,0,0.381-0.17,0.381-0.381C60.662,63.881,60.492,63.709,60.281,63.709z M60.281,69.801H39.718c-0.21,0-0.38,0.172-0.38,0.381c0,0.211,0.17,0.381,0.38,0.381h20.563c0.211,0,0.381-0.17,0.381-0.381C60.662,69.975,60.492,69.801,60.281,69.801z'/></g></svg>"
            $(diskLine).appendTo('#line-disk');

            var emailLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='top' d='M76.162,35.079c1.113,0.731,1.113,1.917,0,2.647L52.013,53.615c-1.11,0.731-2.915,0.731-4.024,0l-24.15-15.889c-1.111-0.73-1.111-1.916,0-2.647l24.15-15.889c1.11-0.729,2.914-0.729,4.024,0L76.162,35.079z'/><path class='paper' d='M30.105,32.763h39.791v28.421H30.105V32.763z'/><path class='base' d='M23.003,36.404L50,54.165l26.997-17.761c0,0,0.006-0.667,0.006,1.688v27.002c0,2.354-1.91,4.264-4.264,4.264H27.262c-2.354,0-4.264-1.91-4.264-4.264V38.092C23,35.738,23.003,36.404,23.003,36.404z'/><path class='text' d='M36.145,38.27h27.71c0.199,0,0.357-0.16,0.357-0.356c0-0.195-0.158-0.355-0.357-0.355h-27.71c-0.197,0-0.355,0.16-0.355,0.355C35.788,38.11,35.947,38.27,36.145,38.27z M63.854,39.691H36.144c-0.197,0-0.355,0.159-0.355,0.356c0,0.196,0.158,0.355,0.355,0.355h27.711c0.197,0,0.357-0.16,0.357-0.355C64.211,39.849,64.053,39.691,63.854,39.691z M63.854,41.822H36.144c-0.197,0-0.355,0.161-0.355,0.356c0,0.197,0.158,0.355,0.355,0.355h27.711c0.197,0,0.357-0.158,0.357-0.355C64.211,41.982,64.053,41.822,63.854,41.822z'/></g></svg>"
            $(emailLine).appendTo('#line-email');

            var filmLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' fill='' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M72.021,74.154v-3.552c0-1.177-0.954-2.132-2.131-2.132h-2.842c-1.176,0-2.132,0.955-2.132,2.132v3.552H35.081v-3.552c0-1.177-0.955-2.132-2.131-2.132h-2.843c-1.176,0-2.131,0.955-2.131,2.132v3.552h-2.842V25.846h2.842v3.552c0,1.177,0.955,2.132,2.131,2.132h2.843c1.176,0,2.131-0.955,2.131-2.132v-3.552h29.837v3.552c0,1.177,0.955,2.132,2.132,2.132h2.842c1.178,0,2.131-0.955,2.131-2.132v-3.552h2.843v48.309H72.021z M35.081,36.502c0-1.177-0.955-2.132-2.131-2.132h-2.843c-1.176,0-2.131,0.955-2.131,2.132v1.421c0,1.175,0.955,2.132,2.131,2.132h2.843c1.176,0,2.131-0.957,2.131-2.132V36.502z M35.081,45.026c0-1.176-0.955-2.13-2.131-2.13h-2.843c-1.176,0-2.131,0.953-2.131,2.13v1.42c0,1.177,0.955,2.132,2.131,2.132h2.843c1.176,0,2.131-0.955,2.131-2.132V45.026z M35.081,53.552c0-1.177-0.955-2.132-2.131-2.132h-2.843c-1.176,0-2.131,0.955-2.131,2.132v1.421c0,1.176,0.955,2.13,2.131,2.13h2.843c1.176,0,2.131-0.954,2.131-2.13V53.552z M35.081,62.077c0-1.176-0.955-2.132-2.131-2.132h-2.843c-1.176,0-2.131,0.956-2.131,2.132v1.421c0,1.177,0.955,2.132,2.131,2.132h2.843c1.176,0,2.131-0.955,2.131-2.132V62.077z M72.021,36.502c0-1.177-0.954-2.132-2.131-2.132h-2.842c-1.176,0-2.132,0.955-2.132,2.132v1.421c0,1.175,0.955,2.132,2.132,2.132h2.842c1.177,0,2.131-0.957,2.131-2.132V36.502z M72.021,45.026c0-1.176-0.954-2.13-2.131-2.13h-2.842c-1.176,0-2.132,0.953-2.132,2.13v1.42c0,1.177,0.955,2.132,2.132,2.132h2.842c1.177,0,2.131-0.955,2.131-2.132V45.026z M72.021,53.552c0-1.177-0.954-2.132-2.131-2.132h-2.842c-1.176,0-2.132,0.955-2.132,2.132v1.421c0,1.176,0.955,2.13,2.132,2.13h2.842c1.177,0,2.131-0.954,2.131-2.13V53.552z M72.021,62.077c0-1.176-0.954-2.132-2.131-2.132h-2.842c-1.176,0-2.132,0.956-2.132,2.132v1.421c0,1.177,0.955,2.132,2.132,2.132h2.842c1.177,0,2.131-0.955,2.131-2.132V62.077z'/><path class='bottom' d='M40.054,51.42h19.892c1.177,0,2.132,0.955,2.132,2.132v12.787c0,1.177-0.955,2.132-2.132,2.132H40.054c-1.177,0-2.132-0.955-2.132-2.132V53.552C37.922,52.375,38.876,51.42,40.054,51.42z'/><path class='top' fill='' d='M40.054,31.529h19.892c1.177,0,2.132,0.953,2.132,2.13v12.787c0,1.177-0.955,2.132-2.132,2.132H40.054c-1.177,0-2.132-0.955-2.132-2.132V33.659C37.922,32.482,38.876,31.529,40.054,31.529z'/></g></svg>"
            $(filmLine).appendTo('#line-film');

            var flagLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875S76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125S23.559,4.25,50,4.25z'/><g class='icon'><path class='bottom' d='M49.857,36.924l24.678,6.581v24.677l-24.678-6.58V36.924z'/><path class='shadow' d='M49.857,37.45l13.984-4.114v24.678l-13.984,4.113V37.45z'/><path class='top' d='M39.426,26.845l24.677,6.581v24.679l-24.677-6.58V26.845z'/><path class='pole' d='M37.826,22.117c1.817,0,3.29,1.473,3.29,3.291v54.292c0,1.816-1.474,3.289-3.29,3.289c-1.817,0-3.291-1.473-3.291-3.289V25.407C34.536,23.59,36.009,22.117,37.826,22.117z'/></g></svg>"
            $(flagLine).appendTo('#line-flag');

            var folderLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='back' d='M67.715,70.502c0,2.516-2.038,4.555-4.556,4.555H30.51c-2.516,0-4.555-2.041-4.555-4.555V29.499c0-2.516,2.039-4.555,4.555-4.555h6.834c9.871,0,6.833,6.075,18.224,6.075c4.556,0,12.148,0,12.148,0L67.715,70.502L67.715,70.502z'/><path class='paper_back' d='M27.828,34.56h44.04v39.483h-44.04V34.56z'/><path class='paper_front' d='M29.602,38.356h44.798v35.687H29.602V38.356z'/><path class='front' d='M73.491,75.057H30.212c-1.96,0-3.615-1.244-4.26-2.979c0.439,0.863,2.465,1.461,3.5,1.461c1.519,0,3.037-1.52,3.037-4.557V43.167h45.559v27.334C78.048,73.016,76.008,75.057,73.491,75.057z'/></g></svg>"
            $(folderLine).appendTo('#line-folder');

            var graphLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='bar_left' d='M42.401,35.96l15.197,11.053v25.563H42.401V35.96z'/><path class='bar_middle' d='M27.201,42.178l15.199-6.22v36.616c0,0-8.186,0-11.294,0c-1.785,0-3.986-1.842-3.906-3.397C27.518,63.139,27.201,42.178,27.201,42.178z'/><path class='bar_right' d='M72.8,69.178c0.08,1.556-2.121,3.398-3.907,3.398c-3.107,0-11.294,0-11.294,0V47.013l15.199-17.271C72.8,29.741,72.483,63.139,72.8,69.178z'/><path class='dot_4' d='M42.401,33.642c1.524,0,2.763,1.237,2.763,2.764s-1.238,2.764-2.763,2.764c-1.527,0-2.764-1.237-2.764-2.764S40.875,33.642,42.401,33.642z'/><path class='dot_3' d='M57.599,42.623c1.526,0,2.763,1.237,2.763,2.763c0,1.527-1.236,2.765-2.763,2.765c-1.525,0-2.763-1.237-2.763-2.765C54.836,43.86,56.073,42.623,57.599,42.623z'/><path class='dot_2' d='M72.8,27.424c1.524,0,2.762,1.238,2.762,2.764c0,1.527-1.237,2.765-2.762,2.765c-1.527,0-2.764-1.237-2.764-2.765C70.034,28.661,71.271,27.424,72.8,27.424z'/><path class='dot_1' d='M27.201,38.479c1.525,0,2.764,1.237,2.764,2.764s-1.238,2.765-2.764,2.765c-1.526,0-2.763-1.238-2.763-2.765C24.438,39.715,25.675,38.479,27.201,38.479z'/></g></svg>"
            $(graphLine).appendTo('#line-graph');

            var heartLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' fill='' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,79.036c-5.322-0.002-30.415-18.54-30.415-37.078c0-5.324,0.566-16.994,15.969-16.994c6.321,0,11.918,4.825,14.446,10.042c2.53-5.217,8.127-10.042,14.448-10.042c15.402,0,15.967,11.67,15.967,16.994C80.415,60.496,55.323,79.034,50,79.036z'/><path class='left' d='M50,79.036c-10.701-3.241-30.415-18.54-30.415-37.078c0-5.324,0.566-16.994,15.969-16.994c6.321,0,11.918,4.825,14.446,10.042C50,46.931,50,68.191,50,79.036z'/></g></svg>"
            $(heartLine).appendTo('#line-heart');

            var homeLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,29.753l23.293,17.47v26.011c0,2.572-2.086,4.659-4.66,4.659H31.366c-2.574,0-4.658-2.086-4.658-4.659V47.223L50,29.753z'/><path class='hole' d='M50,50.427c5.145,0,9.316,4.172,9.316,9.316c0,5.144-4.172,9.317-9.316,9.317c-5.146,0-9.316-4.174-9.316-9.317C40.684,54.599,44.854,50.427,50,50.427z'/><path class='roof' d='M50,35.188L22.826,55.374V38.295L50,18.107l27.174,20.188v17.08L50,35.188z'/></g></svg>"
            $(homeLine).appendTo('#line-home');

            var lightningLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><polygon class='bolt' points='76.155,41.825 58.155,41.825 69.163,20.856 42.078,20.856 29.845,55.805 47.029,55.805 38.583,81.145 '/><path class='highlight' d='M65.014,22.603H44.917L33.559,54.059l13.98-27.96L65.014,22.603z M42.296,75.9l10.049-20.096h-2.791L42.296,75.9z'/></g></svg>"
            $(lightningLine).appendTo('#line-lightning');

            var locationLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,19.53c13.945,0,25.248,11.213,25.248,25.045C75.248,60.437,54.207,80.47,50,80.47c-4.208,0-25.248-20.033-25.248-35.895C24.752,30.743,36.056,19.53,50,19.53z'/><path class='inner' d='M50,30.488c8.174,0,14.8,6.625,14.8,14.799c0,8.173-6.626,14.8-14.8,14.8s-14.8-6.626-14.8-14.799C35.2,37.114,41.826,30.488,50,30.488z'/></g></svg>"
            $(locationLine).appendTo('#line-location');

            var lockLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M29.929,39.176h38.933c2.688,0,4.866,2.181,4.866,4.868v24.332c0,2.688-2.179,4.869-4.866,4.869H29.929c-2.687,0-4.867-2.179-4.867-4.869V44.043C25.062,41.356,27.242,39.176,29.929,39.176z'/><path class='baselight' d='M27.495,39.176h19.466c1.343,0,2.434,0,2.434,0v34.066c0,0-1.09,0-2.434,0H27.495c-1.344,0-2.433-2.179-2.433-4.867V44.042C25.062,41.356,26.152,39.176,27.495,39.176z'/><path class='keyhole' d='M55.073,53.776c0-3.136-2.542-5.679-5.678-5.679s-5.678,2.543-5.678,5.679c0,2.263,1.328,4.212,3.244,5.124v5.418h4.867V58.9C53.745,57.988,55.073,56.039,55.073,53.776z'/><path class='bar' d='M49.395,27.821c-6.271,0-11.355,5.083-11.355,11.354h-6.489c0-9.854,7.989-17.843,17.844-17.843c9.854,0,17.844,7.989,17.844,17.843h-6.49C60.749,32.904,55.667,27.821,49.395,27.821z'/></g></svg>"
            $(lockLine).appendTo('#line-lock');

            var magnifyLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M72.215,69.959L60.276,58.021c2.497-3.507,3.97-7.792,3.97-12.424c0-11.847-9.604-21.451-21.452-21.451c-11.848,0-21.451,9.604-21.451,21.451c0,11.847,9.604,21.451,21.451,21.451c4.632,0,8.918-1.473,12.425-3.97l11.938,11.938c1.116,1.115,2.928,1.115,4.045,0l1.013-1.014C73.33,72.887,73.33,71.074,72.215,69.959z'/><path class='glass' d='M43.034,30.103c8.689,0,15.732,7.043,15.732,15.731c0,8.689-7.043,15.732-15.732,15.732c-8.688,0-15.731-7.043-15.731-15.732C27.302,37.146,34.345,30.103,43.034,30.103z'/></g></svg>"
            $(magnifyLine).appendTo('#line-magnify');

            var messageLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='back' d='M75.139,28.854h-3.807l-8.125-8.125c-0.381-0.38-0.999-0.382-1.381,0l-8.124,8.125H36.428c-2.79,0-5.05,2.261-5.05,5.048v25.247c0,2.79,2.26,5.051,5.05,5.051h38.711c2.789,0,5.05-2.261,5.05-5.051V33.902C80.188,31.115,77.928,28.854,75.139,28.854z'/><path class='front' d='M63.571,35.8H24.862c-2.789,0-5.05,2.262-5.05,5.049v25.247c0,2.788,2.261,5.049,5.05,5.049h3.806l8.125,8.125c0.382,0.381,1,0.383,1.381,0l8.125-8.125h17.275c2.788,0,5.05-2.261,5.05-5.049V40.85C68.62,38.062,66.361,35.8,63.571,35.8z'/><path class='dots' d='M34.743,50.108c-1.858,0-3.365,1.507-3.365,3.366c0,1.86,1.506,3.367,3.365,3.367c1.86,0,3.367-1.507,3.367-3.367C38.109,51.615,36.603,50.108,34.743,50.108z M44.842,50.108c-1.858,0-3.367,1.507-3.367,3.366c0,1.86,1.507,3.367,3.367,3.367c1.859,0,3.366-1.507,3.366-3.367C48.208,51.615,46.701,50.108,44.842,50.108z M54.94,50.108c-1.857,0-3.365,1.507-3.365,3.366c0,1.86,1.506,3.367,3.365,3.367c1.86,0,3.366-1.507,3.366-3.367C58.307,51.615,56.8,50.108,54.94,50.108z'/></g></svg>"
            $(messageLine).appendTo('#line-message');

            var micLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,19.317c8.592,0,15.557,6.964,15.557,15.558v12.101c0,8.593-6.965,15.558-15.557,15.558s-15.558-6.965-15.558-15.558V34.875C34.443,26.281,41.408,19.317,50,19.317z'/><path class='stand' d='M74.201,46.975c0-1.433-1.161-2.594-2.592-2.594c-1.434,0-2.595,1.161-2.595,2.594c0,10.501-8.512,19.015-19.014,19.015c-10.501,0-19.015-8.514-19.015-19.015c0-1.433-1.16-2.594-2.593-2.594c-1.432,0-2.593,1.161-2.593,2.594c0,12.49,9.461,22.765,21.607,24.06v4.461h-6.913c-1.432,0-2.594,1.162-2.594,2.594s1.161,2.594,2.594,2.594h19.014c1.433,0,2.593-1.162,2.593-2.594s-1.16-2.594-2.593-2.594h-6.915v-4.461C64.739,69.74,74.201,59.463,74.201,46.975z'/><path class='bars_left' d='M34.443,33.146v3.458h10.372v-3.458H34.443z M34.443,42.653h10.372v-3.457H34.443V42.653z M34.443,48.704h10.372v-3.458H34.443V48.704z'/><g class='bars_right'><rect x='55.187' y='33.146' width='10.371' height='3.458'/><rect x='55.187' y='39.196' width='10.371' height='3.457'/><rect x='55.187' y='45.246' width='10.371' height='3.458'/></g></g></svg>"
            $(micLine).appendTo('#line-mic');

            var paperLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M33.174,76.947V28.366h37.955v48.581H33.174z'/><path class='front' d='M28.872,71.634V23.053h27.328L66.826,33.68v37.954H28.872z'/><path class='corner' d='M56.199,23.053L66.826,33.68H56.199V23.053z'/><path class='text' d='M36.432,39.247h22.014c0.209,0,0.381-0.169,0.381-0.379c0-0.211-0.17-0.381-0.381-0.381H36.432c-0.21,0-0.38,0.17-0.38,0.381C36.052,39.077,36.222,39.247,36.432,39.247z M58.443,46.079H36.431c-0.21,0-0.38,0.169-0.38,0.379c0,0.211,0.17,0.381,0.38,0.381h22.013c0.211,0,0.381-0.169,0.381-0.381C58.824,46.249,58.654,46.079,58.443,46.079z M58.443,53.67H36.431c-0.21,0-0.38,0.169-0.38,0.379c0,0.211,0.17,0.381,0.38,0.381h22.013c0.211,0,0.381-0.17,0.381-0.381C58.824,53.839,58.654,53.67,58.443,53.67z M58.443,61.261H36.431c-0.21,0-0.38,0.17-0.38,0.379c0,0.211,0.17,0.381,0.38,0.381h22.013c0.211,0,0.381-0.17,0.381-0.381C58.824,61.431,58.654,61.261,58.443,61.261z'/></g></svg>"
            $(paperLine).appendTo('#line-paper');

            var pencilLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875C97.875,78.566,76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125C2.125,25.684,23.559,4.25,50,4.25z'/><g class='icon'><path class='wood' d='M26.683,55.108l16.801,16.84L23.62,75.635L26.683,55.108z'/><path class='base_top' d='M53.408,28.524l5.809,5.813L32.489,61.012l-5.807-5.75L53.408,28.524z'/><path class='base_bottom' d='M63.639,38.64l6.569,6.572L43.483,71.948l-6.635-6.575L63.639,38.64z'/><path class='base_middle' d='M58.868,33.931l6.569,6.573L38.714,67.239l-6.569-6.574L58.868,33.931z'/><path class='tip' d='M31.731,74.101l-8.635,1.776l1.776-8.638L31.731,74.101z'/><path class='eraser' d='M65.004,23.567l10.455,10.461c1.926,1.926,1.926,5.049,0,6.975L58.03,23.567C59.958,21.642,63.078,21.642,65.004,23.567z'/><path class='metal' d='M58.555,22.899l17.429,17.437c0.322,0.321,0.322,0.843,0,1.163l-4.244,4.246c-0.32,0.322-0.841,0.322-1.163,0L53.147,28.308c-0.319-0.32-0.319-0.842,0-1.161l4.245-4.248C57.715,22.578,58.235,22.578,58.555,22.899z'/></g></svg>"
            $(pencilLine).appendTo('#line-pencil');

            var phoneLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M37.381,21.793h25.237c2.46,0,4.454,1.994,4.454,4.454v47.506c0,2.46-1.994,4.454-4.454,4.454H37.381c-2.46,0-4.454-1.994-4.454-4.454V26.247C32.928,23.787,34.921,21.793,37.381,21.793z'/><path class='screen' d='M35.896,30.701h28.208v38.598H35.896V30.701z'/><path class='details' d='M50,71.681c-1.23,0-2.227,0.998-2.227,2.228c0,1.227,0.996,2.225,2.227,2.225s2.227-0.998,2.227-2.225C52.227,72.679,51.23,71.681,50,71.681z M52.969,26.401h-5.938c-0.411,0-0.743,0.331-0.743,0.741s0.332,0.743,0.743,0.743h5.938c0.41,0,0.743-0.333,0.743-0.743C53.71,26.732,53.379,26.401,52.969,26.401z'/></g></svg>"
            $(phoneLine).appendTo('#line-phone');

            var pictureLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='back' d='M23.236,32.68l41.281-11.062c1.221-0.327,2.477,0.397,2.804,1.618l11.062,41.279c0.327,1.223-0.397,2.478-1.618,2.805L35.483,78.382c-1.221,0.327-2.477-0.397-2.804-1.618L21.618,35.484C21.29,34.262,22.015,33.007,23.236,32.68z'/><path class='front' d='M28.631,26.343h42.736c1.264,0,2.29,1.024,2.29,2.289v42.736c0,1.265-1.025,2.289-2.29,2.289H28.631c-1.264,0-2.29-1.024-2.29-2.289V28.632C26.342,27.367,27.367,26.343,28.631,26.343z'/><path class='sky' d='M30.158,29.395h39.684c0.422,0,0.764,0.342,0.764,0.765v39.684c0,0.423-0.342,0.765-0.764,0.765H30.158c-0.421,0-0.763-0.342-0.763-0.765V30.159C29.395,29.736,29.736,29.395,30.158,29.395z'/><path class='sun' d='M39.062,35.342c2.529,0,4.579,2.051,4.579,4.579c0,2.529-2.05,4.579-4.579,4.579s-4.579-2.05-4.579-4.579C34.483,37.393,36.534,35.342,39.062,35.342z'/><path class='mountain' d='M29.395,70.033l10.59-16.188c0.535-0.834,1.402-0.834,1.937,0l3.549,5.536l9.875-15.399c0.763-1.192,2.003-1.192,2.766,0c0,0,11.314,23.861,12.494,25.789c-0.003,0.388,0.046,0.834-0.443,0.834C67.2,70.672,35.549,70.6,30.036,70.593C29.526,70.593,29.395,70.033,29.395,70.033z'/></g></svg>"
            $(pictureLine).appendTo('#line-picture');

            var planeLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='bottom' f d='M57.25,62.16L46.755,74.738l4.498-15.933L57.25,62.16z'/><path class='right' d='M75.985,25.262L64.742,73.061L51.247,58.806L75.985,25.262z'/><path class='middle' d='M75.985,25.262L51.996,59.645l-5.247,15.094L33.257,53.771'/><path class='left' d='M75.985,25.262L33.257,54.61l-17.242-0.839L75.985,25.262z'/></g></svg>"
            $(planeLine).appendTo('#line-plane');

            var presentLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875C97.875,78.566,76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125C2.125,25.684,23.559,4.25,50,4.25z'/><g class='icon'><path class='base' d='M24.724,47.472h50.554v30.33H24.724V47.472z'/><path class='top' d='M21.354,39.047h57.293v8.426H21.354V39.047z'/><path class='ribbon' d='M58.427,22.196c-4.651,0-8.426,3.772-8.426,8.426c0-4.653-3.773-8.426-8.426-8.426s-8.427,3.772-8.427,8.426c0,4.652,3.774,8.426,8.427,8.426h4.212v38.756h8.426V39.047h4.214c4.651,0,8.425-3.772,8.425-8.426S63.078,22.196,58.427,22.196z M44.944,33.991h-3.369c-1.861,0-3.37-1.51-3.37-3.37s1.509-3.37,3.37-3.37c1.86,0,3.369,1.51,3.369,3.37V33.991z M58.427,33.991h-3.369v-3.37c0-1.86,1.507-3.37,3.369-3.37c1.861,0,3.37,1.51,3.37,3.37S60.288,33.991,58.427,33.991z'/></g></svg>"
            $(presentLine).appendTo('#line-present');

            var robotLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='ears' d='M22.849,58.578l5.43,3.102V43.837l-5.43,3.102V58.578z M71.722,43.835V61.68l5.43-3.105V46.939L71.722,43.835z'/><path class='base' d='M31.381,33.751h37.237c1.714,0,3.102,1.39,3.102,3.103v32.582c0,1.715-1.388,3.104-3.102,3.104H31.381c-1.713,0-3.102-1.389-3.102-3.104V36.854C28.279,35.141,29.668,33.751,31.381,33.751z'/><path class='highlight' d='M29.83,33.751h18.618c0.855,0,1.552,0,1.552,0v38.788c0,0-0.695,0-1.552,0H29.83c-0.856,0-1.552-1.391-1.552-3.104V36.854C28.279,35.141,28.975,33.751,29.83,33.751z'/><path class='antenna' d='M55.431,22.891c0-3-2.431-5.43-5.431-5.43c-2.999,0-5.43,2.43-5.43,5.43c0,2.459,1.637,4.534,3.879,5.203v5.66h3.104v-5.66C53.795,27.425,55.431,25.349,55.431,22.891z'/><path class='eyes' d='M42.241,49.266c-2.141,0-3.879,1.736-3.879,3.879c0,2.141,1.736,3.879,3.879,3.879c2.142,0,3.879-1.738,3.879-3.879C46.121,51.002,44.383,49.266,42.241,49.266z M57.758,49.266c-2.141,0-3.879,1.736-3.879,3.879c0,2.141,1.736,3.879,3.879,3.879s3.879-1.738,3.879-3.879C61.637,51.002,59.898,49.266,57.758,49.266z'/></g></svg>"
            $(robotLine).appendTo('#line-robot');

            var rocketLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='engine' d='M32.515,51.63l16.327,16.328l-3.571,5.612L26.902,55.2L32.515,51.63z'/><path class='base' d='M26.902,46.083l1.021-1.021c0,0,7.669-1.483,14.828-8.643c14.165-14.164,30.583-9.217,30.583-9.217s4.946,16.421-9.216,30.583c-7.159,7.158-8.643,14.829-8.643,14.829l-1.021,1.021L26.902,46.083z'/><path class='window' d='M62.619,39.311c2.817,2.818,2.817,7.387,0,10.205c-2.817,2.82-7.388,2.82-10.204,0c-2.817-2.817-2.817-7.386,0-10.205C55.233,36.493,59.802,36.493,62.619,39.311z'/><path class='glass' d='M61.09,40.841c1.972,1.974,1.972,5.172,0,7.144c-1.974,1.972-5.171,1.972-7.143,0c-1.973-1.973-1.973-5.171,0-7.144C55.919,38.87,59.116,38.87,61.09,40.841z'/><path class='flame' d='M33.326,66.073c1.69,1.692,1.747,4.377,0.126,5.999c-1.859,1.858-6.759,1.656-7.269,1.146c-0.511-0.511-0.713-5.41,1.146-7.27C28.949,64.327,31.635,64.384,33.326,66.073z'/></g></svg>"
            $(rocketLine).appendTo('#line-rocket');

            var screenLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875S76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125S23.559,4.25,50,4.25z'/><g class='icon'><path class='stand' d='M33.606,79.886v-2.343c7.113,0,8.588-2.227,8.588-6.242c0-0.133-0.017-0.65-0.021-0.782h15.652c-0.005,0.132-0.021,0.649-0.021,0.782c0,4.016,1.474,6.242,8.588,6.242v2.343H33.606z'/><path class='base' d='M27.361,28.364h45.276c2.587,0,4.685,2.097,4.685,4.685v32.787c0,2.586-2.098,4.683-4.685,4.683H27.361c-2.587,0-4.684-2.097-4.684-4.683V33.049C22.678,30.461,24.774,28.364,27.361,28.364z'/><path class='highlight' d='M27.361,28.364h45.276c2.587,0,4.685,1.786,4.685,3.99v27.929c0,2.205,0,3.992,0,3.992H22.678c0,0,0-1.787,0-3.992V32.354C22.678,30.15,24.774,28.364,27.361,28.364z'/><path class='logo' d='M49.999,64.757c1.294,0,2.342,1.05,2.342,2.343c0,1.292-1.049,2.342-2.342,2.342c-1.292,0-2.342-1.05-2.342-2.342C47.657,65.807,48.706,64.757,49.999,64.757z'/></g></svg>"
            $(screenLine).appendTo('#line-screen');

            var settingsLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M79.649,54.255v-8.509l-8.053-1.832c-0.484-1.721-1.162-3.358-2.019-4.885l4.396-6.986l-6.017-6.017l-6.985,4.396c-1.526-0.859-3.164-1.536-4.885-2.02l-1.832-8.051h-8.509l-1.832,8.051c-1.72,0.485-3.357,1.161-4.886,2.02l-6.986-4.396l-6.017,6.017l4.397,6.986c-0.858,1.527-1.536,3.164-2.021,4.885l-8.052,1.832v8.509l8.052,1.831c0.484,1.721,1.162,3.358,2.021,4.885l-4.397,6.987l6.017,6.017l6.986-4.396c1.527,0.858,3.164,1.535,4.886,2.02l1.832,8.051h8.509l1.832-8.051c1.72-0.484,3.357-1.161,4.885-2.02l6.985,4.396l6.017-6.017l-4.396-6.987c0.858-1.526,1.534-3.164,2.019-4.885L79.649,54.255z'/><path class='top' d='M50,35.171c8.189,0,14.829,6.639,14.829,14.83c0,8.191-6.64,14.83-14.829,14.83c-8.191,0-14.83-6.639-14.83-14.83C35.17,41.81,41.809,35.171,50,35.171z'/></g></svg>"
            $(settingsLine).appendTo('#line-settings');

            var spaceshipLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875C97.875,78.566,76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125C2.125,25.684,23.559,4.25,50,4.25z'/><g class='icon'><path class='light' d='M41.156,55.62h17.688l7.37,17.689h-32.43L41.156,55.62z'/><path class='glass' d='M41.156,35.535c0-4.884,3.96-8.845,8.844-8.845c4.885,0,8.845,3.96,8.845,8.845H41.156z'/><path class='base' d='M50,34.798c15.063,0,27.271,4.951,27.271,11.056c0,6.106-12.209,11.056-27.271,11.056c-15.062,0-27.271-4.949-27.271-11.056C22.729,39.749,34.938,34.798,50,34.798z'/><path class='circles' d='M50,41.433c-2.441,0-4.422,1.98-4.422,4.422s1.98,4.423,4.422,4.423c2.44,0,4.422-1.981,4.422-4.423S52.44,41.433,50,41.433z M64.741,41.433c-2.441,0-4.423,1.98-4.423,4.422s1.981,4.423,4.423,4.423s4.422-1.981,4.422-4.423S67.183,41.433,64.741,41.433z M35.259,41.433c-2.442,0-4.423,1.98-4.423,4.422s1.981,4.423,4.423,4.423s4.422-1.981,4.422-4.423S37.701,41.433,35.259,41.433z'/></g></svg>"
            $(spaceshipLine).appendTo('#line-spaceship');

            var stormLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='cloud' d='M70.342,38.521c0.003-0.123,0.02-0.243,0.02-0.367c0-8.339-6.752-15.099-15.083-15.099c-5.764,0-10.769,3.238-13.308,7.996c-0.791-0.285-1.641-0.446-2.53-0.446c-4.166,0-7.541,3.382-7.541,7.549l0.002,0.039c-6.729,0.392-12.068,5.961-12.068,12.795c0,7.088,5.74,12.834,12.821,12.834h34.693c7.081,0,12.82-5.746,12.82-12.834C80.165,44.936,75.974,39.874,70.342,38.521z'/><polygon class='lightning' points='58.151,69.529 51.223,69.529 54.074,63.822 46.737,63.822 41.845,73.606 49.066,73.606 45.922,80.944 '/></g></svg>"
            $(stormLine).appendTo('#line-storm');

            var suitcaseLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='top' d='M23.542,52.268V37.905c0-2.504,2.031-4.535,4.536-4.535h10.583v-4.534c0-2.505,2.031-4.537,4.536-4.537h13.607c2.504,0,4.535,2.032,4.535,4.537v4.534h10.584c2.504,0,4.535,2.031,4.535,4.535v14.363H23.542z M57.56,31.857v-1.511c0-1.253-1.016-2.269-2.268-2.269H44.709c-1.253,0-2.269,1.016-2.269,2.269v1.511v1.513H57.56V31.857L57.56,31.857z'/><path class='bottom' d='M76.457,52.268v18.898c0,2.506-2.031,4.535-4.536,4.535H28.076c-2.504,0-4.535-2.029-4.535-4.535V52.268H76.457z'/><path class='buttons' d='M36.394,49.245c-1.671,0-3.024,1.353-3.024,3.023s1.354,3.023,3.024,3.023c1.67,0,3.023-1.354,3.023-3.023S38.063,49.245,36.394,49.245z M63.606,49.245c-1.67,0-3.023,1.353-3.023,3.023s1.354,3.023,3.023,3.023s3.023-1.354,3.023-3.023S65.276,49.245,63.606,49.245z'/></g></svg>"
            $(suitcaseLine).appendTo('#line-suitcase');

            var tagLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M75.523,53.617L53.508,75.631c-1.777,1.78-4.662,1.78-6.439,0L25.418,54.174c-2.275-2.276-2.275-7.275-2.275-8.347V27.614c0-2.514,1.821-4.58,4.336-4.58l19.188,0.028c3.036,0,5.313,0.759,7.59,3.033l21.268,21.082C77.303,48.957,77.303,51.842,75.523,53.617z'/><path class='dot' d='M33.866,27.083c2.934,0,5.312,2.379,5.312,5.313c0,2.933-2.377,5.312-5.312,5.312c-2.934,0-5.312-2.379-5.312-5.312C28.555,29.461,30.932,27.083,33.866,27.083z'/></g></svg>"
            $(tagLine).appendTo('#line-tag');

            var thumbsdownLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M52.125,2.125C78.566,2.125,100,23.559,100,50c0,26.441-21.434,47.875-47.875,47.875C19.982,97.875,4.25,76.441,4.25,50C4.25,23.559,25.684,2.125,52.125,2.125z'/><g class='icon'><path class='base' d='M75.731,49.391c0,0,2.573-0.862,2.573-3.451c0-2.59-3.43-4.315-3.43-4.315s1.715-0.693,1.715-3.454c0-2.759-4.287-3.452-4.287-3.452s2.572-0.864,2.572-3.452c0-2.589-4.093-3.452-4.093-3.452H46.568v28.477h4.289c5.587,0,6.003,8.63,6.003,8.63s0,5.173,0,6.04c0,1.726,0.858,4.315,4.289,2.588c3.43-1.726,3.43-4.95,3.43-8.628c0-2.761-0.856-8.63-0.856-8.63s8.283,0,12.008,0c1.717,0,3.431-0.862,3.431-3.451C79.163,50.25,75.731,49.391,75.731,49.391z'/><path class='sleeve' d='M41.424,27.818h-5.988c-8.062,0-14.597,6.567-14.597,14.67c0,8.102,6.535,14.669,14.597,14.669h5.988V27.818z'/><path class='cuff' d='M38.85,58.674h10.293V25.881H38.85V58.674z'/><path class='dot' d='M43.997,35.521c1.42,0,2.573-1.159,2.573-2.589c0-1.429-1.152-2.587-2.573-2.587s-2.573,1.159-2.573,2.587C41.424,34.361,42.576,35.521,43.997,35.521z'/></g></svg>"
            $(thumbsdownLine).appendTo('#line-thumbsdown');

            var thumbsupLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M78.856,47.19c0-2.562-1.698-3.417-3.396-3.417c-3.685,0-11.882,0-11.882,0s0.849-5.809,0.849-8.538c0-3.642,0-6.831-3.395-8.538c-3.396-1.708-4.242,0.854-4.242,2.562c0,0.856,0,5.977,0,5.977s-0.414,8.538-5.942,8.538h-4.243V71.95h23.958c0,0,4.051-0.854,4.051-3.416c0-2.561-2.547-3.415-2.547-3.415s4.243-0.687,4.243-3.416c0-2.732-1.697-3.417-1.697-3.417s3.396-1.707,3.396-4.27s-2.548-3.416-2.548-3.416S78.856,49.75,78.856,47.19z'/><path class='sleeve' d='M41.512,42.919h-5.925c-7.977,0-14.443,6.498-14.443,14.515c0,8.017,6.467,14.515,14.443,14.515h5.925V42.919z'/><path class='cuff' d='M38.965,73.865h10.185V41.419H38.965V73.865z'/><path class='dot' d='M41.512,66.891c0,1.415,1.14,2.562,2.546,2.562c1.407,0,2.547-1.146,2.547-2.562c0-1.414-1.141-2.561-2.547-2.561C42.652,64.33,41.512,65.477,41.512,66.891z'/></g></svg>"
            $(thumbsupLine).appendTo('#line-thumbsup');

            var trashLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' fill='' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' fill='' d='M72.201,38.16v32.561c0,2.452-1.988,4.44-4.441,4.44H32.241c-2.452,0-4.44-1.988-4.44-4.44V38.16H72.201z'/><path class='details' fill='' d='M40.381,41.861c-0.817,0-1.481,0.661-1.481,1.48V69.98c0,0.817,0.663,1.48,1.481,1.48c0.816,0,1.48-0.661,1.48-1.48v-26.64C41.861,42.522,41.198,41.861,40.381,41.861z M59.621,41.861c-0.816,0-1.48,0.661-1.48,1.48V69.98c0,0.817,0.664,1.48,1.48,1.48s1.48-0.661,1.48-1.48v-26.64C61.102,42.522,60.438,41.861,59.621,41.861z M50.001,41.861c-0.817,0-1.481,0.661-1.481,1.48V69.98c0,0.817,0.663,1.48,1.481,1.48c0.816,0,1.48-0.661,1.48-1.48v-26.64C51.481,42.522,50.817,41.861,50.001,41.861z'/><path class='lid' fill='' d='M24.1,38.16L24.1,38.16c0-2.453,1.987-4.441,4.441-4.441H38.9v-4.44c0-2.452,1.988-4.439,4.44-4.439h13.32c2.453,0,4.441,1.987,4.441,4.439v4.44h10.359c2.451,0,4.439,1.988,4.439,4.441l0,0H24.1z M57.4,32.24v-1.48c0-1.226-0.996-2.22-2.219-2.22H44.82c-1.226,0-2.219,0.994-2.219,2.22v1.48v1.48H57.4V32.24z'/></g></svg>"
            $(trashLine).appendTo('#line-trash');

            var userLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='body' d='M74.302,78.127H25.698c-2.982,0-5.4-2.419-5.4-5.4l0,0l0,0c0-19.884,13.501-25.202,29.702-25.202s29.702,5.318,29.702,25.202l0,0C79.702,75.71,77.283,78.127,74.302,78.127z'/><polygon class='collar_right' points='63.501,49.325 50,54.726 55.4,62.826 '/><polygon class='collar_left' points='46.977,62.826 52.377,54.726 38.876,49.325 '/><path class='head' d='M50.877,21.873c8.947,0,16.201,7.254,16.201,16.201c0,8.948-7.254,16.201-16.201,16.201c-8.947,0-16.201-7.253-16.201-16.201C34.676,29.127,41.928,21.873,50.877,21.873z'/><path class='hair' d='M67.918,39.683c-1.019,0.116-2.053,0.193-3.114,0.193c-8.816,0-16.3-4.136-19.082-9.9h-0.565c-1.256,2.194-3.435,4.371-6.296,6.022c-1.684,0.972-3.41,1.646-5.062,2.043c0.386-7.127,5.121-13.086,11.609-15.266h0.087c0.83-0.279,1.686-0.499,2.564-0.653c0.055-0.009,0.11-0.018,0.166-0.023c0.371-0.061,0.745-0.111,1.124-0.148c0.497-0.044,0.997-0.075,1.504-0.075c7.674,0,14.167,5.054,16.332,12.016c0.168,0.537,0.309,1.083,0.423,1.638c0.229,1.114,0.349,2.267,0.349,3.447C67.954,39.215,67.928,39.445,67.918,39.683z'/></g></svg>"
            $(userLine).appendTo('#line-user');

            var winnerLine = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='ribbon' d='M39.036,61.003h21.929l2.529,21.928L50,75.341l-13.494,7.59L39.036,61.003z'/><path class='base' d='M74.459,41.529c0,0.771-2.346,1.423-2.42,2.173c-0.074,0.765,2.102,1.855,1.955,2.599c-0.148,0.753-2.576,0.932-2.797,1.659c-0.223,0.734,1.697,2.231,1.406,2.933c-0.293,0.708-2.711,0.405-3.068,1.076c-0.361,0.675,1.227,2.518,0.805,3.15c-0.426,0.636-2.738-0.13-3.221,0.458c-0.484,0.59,0.715,2.708,0.176,3.247c-0.539,0.54-2.656-0.659-3.246-0.177c-0.59,0.484,0.176,2.795-0.457,3.221c-0.633,0.423-2.479-1.167-3.152-0.804c-0.67,0.357-0.369,2.773-1.076,3.066c-0.701,0.292-2.197-1.627-2.932-1.405c-0.727,0.221-0.906,2.649-1.66,2.798c-0.742,0.146-1.833-2.03-2.599-1.956c-0.753,0.074-1.401,2.42-2.173,2.42c-0.771,0-1.421-2.346-2.173-2.42c-0.765-0.074-1.856,2.103-2.599,1.956c-0.754-0.15-0.934-2.578-1.66-2.798c-0.733-0.222-2.23,1.697-2.932,1.405c-0.708-0.293-0.407-2.709-1.077-3.066c-0.675-0.363-2.519,1.227-3.151,0.804c-0.635-0.426,0.131-2.738-0.458-3.221c-0.589-0.482-2.707,0.717-3.247,0.177c-0.54-0.539,0.66-2.657,0.176-3.248c-0.484-0.589-2.795,0.178-3.22-0.457c-0.422-0.633,1.167-2.479,0.805-3.15c-0.359-0.671-2.775-0.369-3.068-1.076c-0.291-0.702,1.628-2.198,1.406-2.933c-0.22-0.725-2.648-0.906-2.797-1.659c-0.147-0.744,2.028-1.834,1.955-2.599c-0.074-0.752-2.42-1.402-2.42-2.173s2.346-1.423,2.42-2.173c0.074-0.765-2.101-1.857-1.955-2.599c0.149-0.754,2.578-0.933,2.797-1.659c0.223-0.734-1.697-2.231-1.406-2.933c0.293-0.708,2.709-0.406,3.069-1.076c0.361-0.675-1.228-2.519-0.805-3.151c0.425-0.634,2.736,0.132,3.219-0.457c0.485-0.587-0.715-2.709-0.175-3.248c0.54-0.54,2.657,0.66,3.247,0.176c0.589-0.483-0.177-2.795,0.457-3.22c0.633-0.423,2.478,1.167,3.151,0.805c0.67-0.358,0.369-2.775,1.077-3.069c0.701-0.29,2.198,1.63,2.933,1.407c0.724-0.221,0.905-2.649,1.659-2.797c0.743-0.146,1.834,2.028,2.599,1.955c0.752-0.074,1.402-2.42,2.173-2.42c0.771,0,1.422,2.346,2.173,2.42c0.766,0.074,1.856-2.101,2.599-1.954c0.756,0.149,0.934,2.577,1.66,2.794c0.732,0.225,2.23-1.695,2.934-1.404c0.705,0.293,0.404,2.71,1.074,3.068c0.676,0.363,2.52-1.227,3.152-0.804c0.635,0.425-0.133,2.736,0.457,3.219c0.588,0.483,2.709-0.716,3.246-0.175c0.539,0.54-0.66,2.657-0.176,3.247c0.484,0.589,2.795-0.177,3.221,0.457c0.422,0.633-1.166,2.478-0.805,3.151c0.357,0.67,2.775,0.369,3.068,1.076c0.291,0.702-1.629,2.198-1.406,2.933c0.221,0.724,2.648,0.905,2.797,1.659c0.146,0.742-2.029,1.834-1.955,2.599C72.113,40.108,74.459,40.758,74.459,41.529z'/><path class='text' d='M50.183,32.507h-2.711l-0.806,4.888h-2.357l0.806-4.888h-2.71l-0.806,4.888h-2.701l-0.417,2.731h2.668l-0.565,3.421h-2.706l-0.417,2.732h2.674L39.43,50.55h2.71l0.704-4.271h2.357l-0.704,4.271h2.71l0.704-4.271h2.831l0.418-2.732h-2.798l0.564-3.421h2.837l0.418-2.731h-2.805L50.183,32.507z M45.652,43.547H43.31l0.549-3.421h2.343L45.652,43.547z M57.184,32.521c-0.258,0.595-0.684,1.101-1.273,1.518c-0.588,0.417-1.209,0.664-1.859,0.74v1.898h2.313v13.873h2.719V32.521H57.184z'/></g></svg>"
            $(winnerLine).appendTo('#line-winner');

            //===============================================
            // SVG Inject
            //===============================================

            var browserFilled = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M28.692,24.431h42.615c2.353,0,4.262,1.908,4.262,4.262v42.615c0,2.354-1.909,4.262-4.262,4.262H28.692c-2.354,0-4.262-1.908-4.262-4.262V28.692C24.431,26.338,26.339,24.431,28.692,24.431z'/><path class='screen' d='M27.982,38.637h44.036v32.672H27.982V38.637z'/><path class='top' d='M24.431,24.431h51.139v11.364H24.431V24.431z'/><path class='green' d='M47.159,27.271c1.57,0,2.841,1.273,2.841,2.841s-1.271,2.841-2.841,2.841c-1.569,0-2.841-1.272-2.841-2.841S45.589,27.271,47.159,27.271z'/><path class='orange' d='M38.344,27.271c1.569,0,2.841,1.273,2.841,2.841s-1.271,2.841-2.841,2.841s-2.841-1.272-2.841-2.841S36.776,27.271,38.344,27.271z'/><path class='red' fill='' d='M29.858,27.271c1.569,0,2.841,1.273,2.841,2.841s-1.272,2.841-2.841,2.841c-1.569,0-2.841-1.272-2.841-2.841S28.289,27.271,29.858,27.271z'/></g></svg>"
            $(browserFilled).appendTo('#filled-browser');

            var brushFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='brush_base' d='M74.264,24.224c0.863-0.864,2.264-0.864,3.128,0l1.042,1.042c0.863,0.864,0.863,2.265,0,3.129L56.055,57.027L45.628,46.602L74.264,24.224z'/><path class='brush_highlight' d='M74.264,24.224c0.863-0.864,2.264-0.864,3.128,0l1.042,1.042c-1.225,1.133-26.979,27.164-26.979,27.164L45.628,46.6L74.264,24.224z'/><path class='brush_silver' d='M45.662,46.434l10.427,10.425c0.863,0.864,0.863,2.265,0,3.129l-3.128,3.128c-0.863,0.863-2.265,0.863-3.129,0L39.406,52.69c-0.863-0.864-0.863-2.265,0-3.129l3.128-3.127C43.399,45.571,44.799,45.571,45.662,46.434z'/><path class='brush_tip' d='M39.677,53.031l10.229,10.228c-8.683,20.973-28.987,10.601-28.987,10.601s10.482,0.427,10.021-9.586C30.561,56.009,37.24,53.623,39.677,53.031z'/></g></svg>"
            $(brushFilled).appendTo('#filled-brush');

            var calanderFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base_top' d='M69.436,24.573h-38.89c-2.478,0-4.486,2.009-4.486,4.487V50h47.862V29.061C73.922,26.582,71.912,24.573,69.436,24.573z'/><path class='base_bottom' d='M69.436,75.427h-38.89c-2.478,0-4.486-2.009-4.486-4.487V50h47.862v20.939C73.922,73.418,71.912,75.427,69.436,75.427z'/><path class='left' d='M23.088,47.009h2.991v5.982h-2.991V47.009z'/><path class='right' d='M73.922,47.009h2.99v5.982h-2.99V47.009z'/><path class='number' d='M45.991,39.779c-1.318,0-2.443,0.463-3.378,1.394c-0.936,0.93-1.402,2.059-1.402,3.387v10.898c0,1.316,0.465,2.439,1.395,3.371c0.929,0.929,2.058,1.394,3.386,1.394c1.307,0,2.427-0.464,3.362-1.387c0.935-0.924,1.401-2.05,1.401-3.378V44.56c0-1.317-0.461-2.443-1.385-3.377C48.445,40.246,47.318,39.779,45.991,39.779z M47.632,55.41c0,0.477-0.169,0.886-0.51,1.227c-0.339,0.341-0.748,0.51-1.226,0.51s-0.885-0.169-1.22-0.51s-0.502-0.75-0.502-1.227V44.494c0-0.477,0.167-0.887,0.502-1.226c0.334-0.339,0.742-0.51,1.22-0.51s0.887,0.171,1.226,0.51c0.341,0.339,0.51,0.749,0.51,1.226V55.41z M56.667,40.033c-0.288,0.658-0.758,1.218-1.411,1.682c-0.653,0.462-1.342,0.734-2.063,0.82v2.104h2.565v15.377h3.012V40.033H56.667L56.667,40.033z'/></g></svg>"
            $(calanderFilled).appendTo('#filled-calander');

            var cameraFilled = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M75.707,75.279H24.293c-2.839,0-5.141-2.303-5.141-5.143V39.289c0-2.556,1.87-4.659,4.313-5.058l-0.028-0.084c0,0,0.331,0,0.856,0l0,0h4.285c11.14,0,7.712-9.426,15.424-9.426c2.57,0,5.998,0,5.998,0s3.428,0,5.998,0c7.712,0,4.285,9.426,15.424,9.426h4.284l0,0c0.526,0,0.856,0,0.856,0l-0.027,0.084c2.443,0.398,4.313,2.502,4.313,5.058v30.848C80.85,72.977,78.546,75.279,75.707,75.279z'/><path class='strip' d='M19.152,48.715h61.696v17.138H19.152V48.715z'/><path class='lens' d='M50.001,41.86c8.519,0,15.424,6.904,15.424,15.423c0,8.52-6.905,15.426-15.424,15.426c-8.518,0-15.424-6.906-15.424-15.426C34.576,48.764,41.482,41.86,50.001,41.86z'/><path class='lens_inner' d='M50.001,46.144c6.151,0,11.14,4.987,11.14,11.139s-4.986,11.141-11.14,11.141c-6.153,0-11.14-4.986-11.14-11.141C38.861,51.133,43.848,46.144,50.001,46.144z'/><path class='flash' d='M44.859,27.864h10.284c1.795,0,3.428,4.284,3.428,4.284c0,1.42-1.151,2.569-2.571,2.569H44.003c-1.42,0-2.571-1.149-2.571-2.569C41.432,32.148,43.063,27.864,44.859,27.864z'/><path class='red' d='M73.708,36.717c1.42,0,2.571,1.151,2.571,2.571c0,1.421-1.151,2.57-2.571,2.57c-1.419,0-2.571-1.149-2.571-2.57C71.137,37.869,72.289,36.717,73.708,36.717z'/><path class='button' d='M25.722,31.578h3.428c1.419,0,2.57,1.15,2.57,2.57h-8.569C23.151,32.728,24.302,31.578,25.722,31.578z'/></g></svg>"
            $(cameraFilled).appendTo('#filled-camera');

            var clockFilled = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,16.25c18.641,0,33.75,15.109,33.75,33.75S68.641,83.75,50,83.75c-18.64,0-33.75-15.109-33.75-33.75S31.36,16.25,50,16.25z'/><path class='face' d='M50,22.635c15.113,0,27.365,12.252,27.365,27.365c0,15.113-12.252,27.365-27.365,27.365c-15.113,0-27.365-12.252-27.365-27.365C22.635,34.887,34.887,22.635,50,22.635z'/><path class='seconds' d='M45.915,46.352l0.645-0.645l16.419,16.418l-0.645,0.646L45.915,46.352z'/><path class='middle' d='M50,47.264c1.512,0,2.736,1.226,2.736,2.736S51.512,52.736,50,52.736S47.264,51.511,47.264,50S48.488,47.264,50,47.264z'/><path class='hour' fill='' d='M51.844,50c0,0.504-0.408,0.912-0.912,0.912H37.249c-0.505,0-0.912-0.408-0.912-0.912c0-0.504,0.407-0.912,0.912-0.912h13.683C51.436,49.088,51.844,49.496,51.844,50z'/><path class='minute' d='M50,28.108c0.504,0,0.912,0.408,0.912,0.913v20.067C50.912,49.592,50.504,50,50,50c-0.504,0-0.912-0.408-0.912-0.912V29.021C49.088,28.516,49.496,28.108,50,28.108z'/></g></svg>"
            $(clockFilled).appendTo('#filled-clock');

            var coffeeFilled = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M27.253,32.94h45.493l-8.748,46.369H36.002L27.253,32.94z'/><path class='middle' d='M27.253,43.329h45.493l-4.373,20.122H31.627L27.253,43.329z'/><polygon class='top' points='70.996,26.816 66.623,26.816 63.998,20.692 36.002,20.692 33.377,26.816 29.003,26.816 26.378,32.94 73.621,32.94 '/></g></svg>"
            $(coffeeFilled).appendTo('#filled-coffee');

            var diamondFilled = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' fill='' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='middle' d='M17.702,38.645h64.597L50,82.607L17.702,38.645z'/><path class='top_3' d='M50,23.393l11.665,15.252H38.336L50,23.393z'/><path class='top_2' d='M38.336,38.645l-8.972-15.252H50L38.336,38.645z'/><path class='top_1' d='M61.664,38.645L50,23.393h20.635L61.664,38.645z'/><path class='top_left' d='M29.364,23.393l8.972,15.252H17.702L29.364,23.393z'/><path class='top_right' d='M70.635,23.393l11.662,15.252H61.662L70.635,23.393z'/><path class='right' d='M61.664,38.645h20.635L50,82.607L61.664,38.645z'/><path class='left' d='M17.702,38.645h20.635L50,82.607L17.702,38.645z'/></g></svg>"
            $(diamondFilled).appendTo('#filled-diamond');

            var diskFilled = " <svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M72.848,75.133H27.151c-1.262,0-2.285-1.023-2.285-2.285V27.151c0-1.261,1.022-2.284,2.285-2.284h38.843l9.139,9.138v38.842C75.133,74.109,74.109,75.133,72.848,75.133z'/><path class='top' d='M65.992,24.867v15.994c0,1.261-1.021,2.285-2.283,2.285H36.29c-1.262,0-2.285-1.023-2.285-2.285V24.867H65.992z'/><path class='top_right' d='M55.711,27.914h8.379v12.185h-8.379V27.914z'/><path class='bottom' d='M65.992,75.133V53.047c0-1.261-1.021-2.285-2.283-2.285H36.29c-1.262,0-2.285,1.024-2.285,2.285v22.086H65.992z'/><path class='text' d='M39.718,58.377h20.563c0.211,0,0.381-0.17,0.381-0.379c0-0.211-0.17-0.381-0.381-0.381H39.718c-0.21,0-0.38,0.17-0.38,0.381C39.337,58.207,39.508,58.377,39.718,58.377z M60.281,63.709H39.718c-0.21,0-0.38,0.172-0.38,0.381c0,0.211,0.17,0.381,0.38,0.381h20.563c0.211,0,0.381-0.17,0.381-0.381C60.662,63.881,60.492,63.709,60.281,63.709z M60.281,69.801H39.718c-0.21,0-0.38,0.172-0.38,0.381c0,0.211,0.17,0.381,0.38,0.381h20.563c0.211,0,0.381-0.17,0.381-0.381C60.662,69.975,60.492,69.801,60.281,69.801z'/></g></svg>"
            $(diskFilled).appendTo('#filled-disk');

            var emailFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='top' d='M76.162,35.079c1.113,0.731,1.113,1.917,0,2.647L52.013,53.615c-1.11,0.731-2.915,0.731-4.024,0l-24.15-15.889c-1.111-0.73-1.111-1.916,0-2.647l24.15-15.889c1.11-0.729,2.914-0.729,4.024,0L76.162,35.079z'/><path class='paper' d='M30.105,32.763h39.791v28.421H30.105V32.763z'/><path class='base' d='M23.003,36.404L50,54.165l26.997-17.761c0,0,0.006-0.667,0.006,1.688v27.002c0,2.354-1.91,4.264-4.264,4.264H27.262c-2.354,0-4.264-1.91-4.264-4.264V38.092C23,35.738,23.003,36.404,23.003,36.404z'/><path class='text' d='M36.145,38.27h27.71c0.199,0,0.357-0.16,0.357-0.356c0-0.195-0.158-0.355-0.357-0.355h-27.71c-0.197,0-0.355,0.16-0.355,0.355C35.788,38.11,35.947,38.27,36.145,38.27z M63.854,39.691H36.144c-0.197,0-0.355,0.159-0.355,0.356c0,0.196,0.158,0.355,0.355,0.355h27.711c0.197,0,0.357-0.16,0.357-0.355C64.211,39.849,64.053,39.691,63.854,39.691z M63.854,41.822H36.144c-0.197,0-0.355,0.161-0.355,0.356c0,0.197,0.158,0.355,0.355,0.355h27.711c0.197,0,0.357-0.158,0.357-0.355C64.211,41.982,64.053,41.822,63.854,41.822z'/></g></svg>"
            $(emailFilled).appendTo('#filled-email');

            var filmFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' fill='' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M72.021,74.154v-3.552c0-1.177-0.954-2.132-2.131-2.132h-2.842c-1.176,0-2.132,0.955-2.132,2.132v3.552H35.081v-3.552c0-1.177-0.955-2.132-2.131-2.132h-2.843c-1.176,0-2.131,0.955-2.131,2.132v3.552h-2.842V25.846h2.842v3.552c0,1.177,0.955,2.132,2.131,2.132h2.843c1.176,0,2.131-0.955,2.131-2.132v-3.552h29.837v3.552c0,1.177,0.955,2.132,2.132,2.132h2.842c1.178,0,2.131-0.955,2.131-2.132v-3.552h2.843v48.309H72.021z M35.081,36.502c0-1.177-0.955-2.132-2.131-2.132h-2.843c-1.176,0-2.131,0.955-2.131,2.132v1.421c0,1.175,0.955,2.132,2.131,2.132h2.843c1.176,0,2.131-0.957,2.131-2.132V36.502z M35.081,45.026c0-1.176-0.955-2.13-2.131-2.13h-2.843c-1.176,0-2.131,0.953-2.131,2.13v1.42c0,1.177,0.955,2.132,2.131,2.132h2.843c1.176,0,2.131-0.955,2.131-2.132V45.026z M35.081,53.552c0-1.177-0.955-2.132-2.131-2.132h-2.843c-1.176,0-2.131,0.955-2.131,2.132v1.421c0,1.176,0.955,2.13,2.131,2.13h2.843c1.176,0,2.131-0.954,2.131-2.13V53.552z M35.081,62.077c0-1.176-0.955-2.132-2.131-2.132h-2.843c-1.176,0-2.131,0.956-2.131,2.132v1.421c0,1.177,0.955,2.132,2.131,2.132h2.843c1.176,0,2.131-0.955,2.131-2.132V62.077z M72.021,36.502c0-1.177-0.954-2.132-2.131-2.132h-2.842c-1.176,0-2.132,0.955-2.132,2.132v1.421c0,1.175,0.955,2.132,2.132,2.132h2.842c1.177,0,2.131-0.957,2.131-2.132V36.502z M72.021,45.026c0-1.176-0.954-2.13-2.131-2.13h-2.842c-1.176,0-2.132,0.953-2.132,2.13v1.42c0,1.177,0.955,2.132,2.132,2.132h2.842c1.177,0,2.131-0.955,2.131-2.132V45.026z M72.021,53.552c0-1.177-0.954-2.132-2.131-2.132h-2.842c-1.176,0-2.132,0.955-2.132,2.132v1.421c0,1.176,0.955,2.13,2.132,2.13h2.842c1.177,0,2.131-0.954,2.131-2.13V53.552z M72.021,62.077c0-1.176-0.954-2.132-2.131-2.132h-2.842c-1.176,0-2.132,0.956-2.132,2.132v1.421c0,1.177,0.955,2.132,2.132,2.132h2.842c1.177,0,2.131-0.955,2.131-2.132V62.077z'/><path class='bottom' d='M40.054,51.42h19.892c1.177,0,2.132,0.955,2.132,2.132v12.787c0,1.177-0.955,2.132-2.132,2.132H40.054c-1.177,0-2.132-0.955-2.132-2.132V53.552C37.922,52.375,38.876,51.42,40.054,51.42z'/><path class='top' fill='' d='M40.054,31.529h19.892c1.177,0,2.132,0.953,2.132,2.13v12.787c0,1.177-0.955,2.132-2.132,2.132H40.054c-1.177,0-2.132-0.955-2.132-2.132V33.659C37.922,32.482,38.876,31.529,40.054,31.529z'/></g></svg>"
            $(filmFilled).appendTo('#filled-film');

            var flagFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875S76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125S23.559,4.25,50,4.25z'/><g class='icon'><path class='bottom' d='M49.857,36.924l24.678,6.581v24.677l-24.678-6.58V36.924z'/><path class='shadow' d='M49.857,37.45l13.984-4.114v24.678l-13.984,4.113V37.45z'/><path class='top' d='M39.426,26.845l24.677,6.581v24.679l-24.677-6.58V26.845z'/><path class='pole' d='M37.826,22.117c1.817,0,3.29,1.473,3.29,3.291v54.292c0,1.816-1.474,3.289-3.29,3.289c-1.817,0-3.291-1.473-3.291-3.289V25.407C34.536,23.59,36.009,22.117,37.826,22.117z'/></g></svg>"
            $(flagFilled).appendTo('#filled-flag');

            var folderFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='back' d='M67.715,70.502c0,2.516-2.038,4.555-4.556,4.555H30.51c-2.516,0-4.555-2.041-4.555-4.555V29.499c0-2.516,2.039-4.555,4.555-4.555h6.834c9.871,0,6.833,6.075,18.224,6.075c4.556,0,12.148,0,12.148,0L67.715,70.502L67.715,70.502z'/><path class='paper_back' d='M27.828,34.56h44.04v39.483h-44.04V34.56z'/><path class='paper_front' d='M29.602,38.356h44.798v35.687H29.602V38.356z'/><path class='front' d='M73.491,75.057H30.212c-1.96,0-3.615-1.244-4.26-2.979c0.439,0.863,2.465,1.461,3.5,1.461c1.519,0,3.037-1.52,3.037-4.557V43.167h45.559v27.334C78.048,73.016,76.008,75.057,73.491,75.057z'/></g></svg>"
            $(folderFilled).appendTo('#filled-folder');

            var graphFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='bar_left' d='M42.401,35.96l15.197,11.053v25.563H42.401V35.96z'/><path class='bar_middle' d='M27.201,42.178l15.199-6.22v36.616c0,0-8.186,0-11.294,0c-1.785,0-3.986-1.842-3.906-3.397C27.518,63.139,27.201,42.178,27.201,42.178z'/><path class='bar_right' d='M72.8,69.178c0.08,1.556-2.121,3.398-3.907,3.398c-3.107,0-11.294,0-11.294,0V47.013l15.199-17.271C72.8,29.741,72.483,63.139,72.8,69.178z'/><path class='dot_4' d='M42.401,33.642c1.524,0,2.763,1.237,2.763,2.764s-1.238,2.764-2.763,2.764c-1.527,0-2.764-1.237-2.764-2.764S40.875,33.642,42.401,33.642z'/><path class='dot_3' d='M57.599,42.623c1.526,0,2.763,1.237,2.763,2.763c0,1.527-1.236,2.765-2.763,2.765c-1.525,0-2.763-1.237-2.763-2.765C54.836,43.86,56.073,42.623,57.599,42.623z'/><path class='dot_2' d='M72.8,27.424c1.524,0,2.762,1.238,2.762,2.764c0,1.527-1.237,2.765-2.762,2.765c-1.527,0-2.764-1.237-2.764-2.765C70.034,28.661,71.271,27.424,72.8,27.424z'/><path class='dot_1' d='M27.201,38.479c1.525,0,2.764,1.237,2.764,2.764s-1.238,2.765-2.764,2.765c-1.526,0-2.763-1.238-2.763-2.765C24.438,39.715,25.675,38.479,27.201,38.479z'/></g></svg>"
            $(graphFilled).appendTo('#filled-graph');

            var heartFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' fill='' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,79.036c-5.322-0.002-30.415-18.54-30.415-37.078c0-5.324,0.566-16.994,15.969-16.994c6.321,0,11.918,4.825,14.446,10.042c2.53-5.217,8.127-10.042,14.448-10.042c15.402,0,15.967,11.67,15.967,16.994C80.415,60.496,55.323,79.034,50,79.036z'/><path class='left' d='M50,79.036c-10.701-3.241-30.415-18.54-30.415-37.078c0-5.324,0.566-16.994,15.969-16.994c6.321,0,11.918,4.825,14.446,10.042C50,46.931,50,68.191,50,79.036z'/></g></svg>"
            $(heartFilled).appendTo('#filled-heart');

            var homeFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,29.753l23.293,17.47v26.011c0,2.572-2.086,4.659-4.66,4.659H31.366c-2.574,0-4.658-2.086-4.658-4.659V47.223L50,29.753z'/><path class='hole' d='M50,50.427c5.145,0,9.316,4.172,9.316,9.316c0,5.144-4.172,9.317-9.316,9.317c-5.146,0-9.316-4.174-9.316-9.317C40.684,54.599,44.854,50.427,50,50.427z'/><path class='roof' d='M50,35.188L22.826,55.374V38.295L50,18.107l27.174,20.188v17.08L50,35.188z'/></g></svg>"
            $(homeFilled).appendTo('#filled-home');

            var lightningFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><polygon class='bolt' points='76.155,41.825 58.155,41.825 69.163,20.856 42.078,20.856 29.845,55.805 47.029,55.805 38.583,81.145 '/><path class='highlight' d='M65.014,22.603H44.917L33.559,54.059l13.98-27.96L65.014,22.603z M42.296,75.9l10.049-20.096h-2.791L42.296,75.9z'/></g></svg>"
            $(lightningFilled).appendTo('#filled-lightning');

            var locationFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,19.53c13.945,0,25.248,11.213,25.248,25.045C75.248,60.437,54.207,80.47,50,80.47c-4.208,0-25.248-20.033-25.248-35.895C24.752,30.743,36.056,19.53,50,19.53z'/><path class='inner' d='M50,30.488c8.174,0,14.8,6.625,14.8,14.799c0,8.173-6.626,14.8-14.8,14.8s-14.8-6.626-14.8-14.799C35.2,37.114,41.826,30.488,50,30.488z'/></g></svg>"
            $(locationFilled).appendTo('#filled-location');

            var lockFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M29.929,39.176h38.933c2.688,0,4.866,2.181,4.866,4.868v24.332c0,2.688-2.179,4.869-4.866,4.869H29.929c-2.687,0-4.867-2.179-4.867-4.869V44.043C25.062,41.356,27.242,39.176,29.929,39.176z'/><path class='baselight' d='M27.495,39.176h19.466c1.343,0,2.434,0,2.434,0v34.066c0,0-1.09,0-2.434,0H27.495c-1.344,0-2.433-2.179-2.433-4.867V44.042C25.062,41.356,26.152,39.176,27.495,39.176z'/><path class='keyhole' d='M55.073,53.776c0-3.136-2.542-5.679-5.678-5.679s-5.678,2.543-5.678,5.679c0,2.263,1.328,4.212,3.244,5.124v5.418h4.867V58.9C53.745,57.988,55.073,56.039,55.073,53.776z'/><path class='bar' d='M49.395,27.821c-6.271,0-11.355,5.083-11.355,11.354h-6.489c0-9.854,7.989-17.843,17.844-17.843c9.854,0,17.844,7.989,17.844,17.843h-6.49C60.749,32.904,55.667,27.821,49.395,27.821z'/></g></svg>"
            $(lockFilled).appendTo('#filled-lock');

            var magnifyFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M72.215,69.959L60.276,58.021c2.497-3.507,3.97-7.792,3.97-12.424c0-11.847-9.604-21.451-21.452-21.451c-11.848,0-21.451,9.604-21.451,21.451c0,11.847,9.604,21.451,21.451,21.451c4.632,0,8.918-1.473,12.425-3.97l11.938,11.938c1.116,1.115,2.928,1.115,4.045,0l1.013-1.014C73.33,72.887,73.33,71.074,72.215,69.959z'/><path class='glass' d='M43.034,30.103c8.689,0,15.732,7.043,15.732,15.731c0,8.689-7.043,15.732-15.732,15.732c-8.688,0-15.731-7.043-15.731-15.732C27.302,37.146,34.345,30.103,43.034,30.103z'/></g></svg>"
            $(magnifyFilled).appendTo('#filled-magnify');

            var messageFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='back' d='M75.139,28.854h-3.807l-8.125-8.125c-0.381-0.38-0.999-0.382-1.381,0l-8.124,8.125H36.428c-2.79,0-5.05,2.261-5.05,5.048v25.247c0,2.79,2.26,5.051,5.05,5.051h38.711c2.789,0,5.05-2.261,5.05-5.051V33.902C80.188,31.115,77.928,28.854,75.139,28.854z'/><path class='front' d='M63.571,35.8H24.862c-2.789,0-5.05,2.262-5.05,5.049v25.247c0,2.788,2.261,5.049,5.05,5.049h3.806l8.125,8.125c0.382,0.381,1,0.383,1.381,0l8.125-8.125h17.275c2.788,0,5.05-2.261,5.05-5.049V40.85C68.62,38.062,66.361,35.8,63.571,35.8z'/><path class='dots' d='M34.743,50.108c-1.858,0-3.365,1.507-3.365,3.366c0,1.86,1.506,3.367,3.365,3.367c1.86,0,3.367-1.507,3.367-3.367C38.109,51.615,36.603,50.108,34.743,50.108z M44.842,50.108c-1.858,0-3.367,1.507-3.367,3.366c0,1.86,1.507,3.367,3.367,3.367c1.859,0,3.366-1.507,3.366-3.367C48.208,51.615,46.701,50.108,44.842,50.108z M54.94,50.108c-1.857,0-3.365,1.507-3.365,3.366c0,1.86,1.506,3.367,3.365,3.367c1.86,0,3.366-1.507,3.366-3.367C58.307,51.615,56.8,50.108,54.94,50.108z'/></g></svg>"
            $(messageFilled).appendTo('#filled-message');

            var micFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M50,19.317c8.592,0,15.557,6.964,15.557,15.558v12.101c0,8.593-6.965,15.558-15.557,15.558s-15.558-6.965-15.558-15.558V34.875C34.443,26.281,41.408,19.317,50,19.317z'/><path class='stand' d='M74.201,46.975c0-1.433-1.161-2.594-2.592-2.594c-1.434,0-2.595,1.161-2.595,2.594c0,10.501-8.512,19.015-19.014,19.015c-10.501,0-19.015-8.514-19.015-19.015c0-1.433-1.16-2.594-2.593-2.594c-1.432,0-2.593,1.161-2.593,2.594c0,12.49,9.461,22.765,21.607,24.06v4.461h-6.913c-1.432,0-2.594,1.162-2.594,2.594s1.161,2.594,2.594,2.594h19.014c1.433,0,2.593-1.162,2.593-2.594s-1.16-2.594-2.593-2.594h-6.915v-4.461C64.739,69.74,74.201,59.463,74.201,46.975z'/><path class='bars_left' d='M34.443,33.146v3.458h10.372v-3.458H34.443z M34.443,42.653h10.372v-3.457H34.443V42.653z M34.443,48.704h10.372v-3.458H34.443V48.704z'/><g class='bars_right'><rect x='55.187' y='33.146' width='10.371' height='3.458'/><rect x='55.187' y='39.196' width='10.371' height='3.457'/><rect x='55.187' y='45.246' width='10.371' height='3.458'/></g></g></svg>"
            $(micFilled).appendTo('#filled-mic');

            var paperFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M33.174,76.947V28.366h37.955v48.581H33.174z'/><path class='front' d='M28.872,71.634V23.053h27.328L66.826,33.68v37.954H28.872z'/><path class='corner' d='M56.199,23.053L66.826,33.68H56.199V23.053z'/><path class='text' d='M36.432,39.247h22.014c0.209,0,0.381-0.169,0.381-0.379c0-0.211-0.17-0.381-0.381-0.381H36.432c-0.21,0-0.38,0.17-0.38,0.381C36.052,39.077,36.222,39.247,36.432,39.247z M58.443,46.079H36.431c-0.21,0-0.38,0.169-0.38,0.379c0,0.211,0.17,0.381,0.38,0.381h22.013c0.211,0,0.381-0.169,0.381-0.381C58.824,46.249,58.654,46.079,58.443,46.079z M58.443,53.67H36.431c-0.21,0-0.38,0.169-0.38,0.379c0,0.211,0.17,0.381,0.38,0.381h22.013c0.211,0,0.381-0.17,0.381-0.381C58.824,53.839,58.654,53.67,58.443,53.67z M58.443,61.261H36.431c-0.21,0-0.38,0.17-0.38,0.379c0,0.211,0.17,0.381,0.38,0.381h22.013c0.211,0,0.381-0.17,0.381-0.381C58.824,61.431,58.654,61.261,58.443,61.261z'/></g></svg>"
            $(paperFilled).appendTo('#filled-paper');

            var pencilFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875C97.875,78.566,76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125C2.125,25.684,23.559,4.25,50,4.25z'/><g class='icon'><path class='wood' d='M26.683,55.108l16.801,16.84L23.62,75.635L26.683,55.108z'/><path class='base_top' d='M53.408,28.524l5.809,5.813L32.489,61.012l-5.807-5.75L53.408,28.524z'/><path class='base_bottom' d='M63.639,38.64l6.569,6.572L43.483,71.948l-6.635-6.575L63.639,38.64z'/><path class='base_middle' d='M58.868,33.931l6.569,6.573L38.714,67.239l-6.569-6.574L58.868,33.931z'/><path class='tip' d='M31.731,74.101l-8.635,1.776l1.776-8.638L31.731,74.101z'/><path class='eraser' d='M65.004,23.567l10.455,10.461c1.926,1.926,1.926,5.049,0,6.975L58.03,23.567C59.958,21.642,63.078,21.642,65.004,23.567z'/><path class='metal' d='M58.555,22.899l17.429,17.437c0.322,0.321,0.322,0.843,0,1.163l-4.244,4.246c-0.32,0.322-0.841,0.322-1.163,0L53.147,28.308c-0.319-0.32-0.319-0.842,0-1.161l4.245-4.248C57.715,22.578,58.235,22.578,58.555,22.899z'/></g></svg>"
            $(pencilFilled).appendTo('#filled-pencil');

            var phoneFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M37.381,21.793h25.237c2.46,0,4.454,1.994,4.454,4.454v47.506c0,2.46-1.994,4.454-4.454,4.454H37.381c-2.46,0-4.454-1.994-4.454-4.454V26.247C32.928,23.787,34.921,21.793,37.381,21.793z'/><path class='screen' d='M35.896,30.701h28.208v38.598H35.896V30.701z'/><path class='details' d='M50,71.681c-1.23,0-2.227,0.998-2.227,2.228c0,1.227,0.996,2.225,2.227,2.225s2.227-0.998,2.227-2.225C52.227,72.679,51.23,71.681,50,71.681z M52.969,26.401h-5.938c-0.411,0-0.743,0.331-0.743,0.741s0.332,0.743,0.743,0.743h5.938c0.41,0,0.743-0.333,0.743-0.743C53.71,26.732,53.379,26.401,52.969,26.401z'/></g></svg>"
            $(phoneFilled).appendTo('#filled-phone');

            var pictureFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='back' d='M23.236,32.68l41.281-11.062c1.221-0.327,2.477,0.397,2.804,1.618l11.062,41.279c0.327,1.223-0.397,2.478-1.618,2.805L35.483,78.382c-1.221,0.327-2.477-0.397-2.804-1.618L21.618,35.484C21.29,34.262,22.015,33.007,23.236,32.68z'/><path class='front' d='M28.631,26.343h42.736c1.264,0,2.29,1.024,2.29,2.289v42.736c0,1.265-1.025,2.289-2.29,2.289H28.631c-1.264,0-2.29-1.024-2.29-2.289V28.632C26.342,27.367,27.367,26.343,28.631,26.343z'/><path class='sky' d='M30.158,29.395h39.684c0.422,0,0.764,0.342,0.764,0.765v39.684c0,0.423-0.342,0.765-0.764,0.765H30.158c-0.421,0-0.763-0.342-0.763-0.765V30.159C29.395,29.736,29.736,29.395,30.158,29.395z'/><path class='sun' d='M39.062,35.342c2.529,0,4.579,2.051,4.579,4.579c0,2.529-2.05,4.579-4.579,4.579s-4.579-2.05-4.579-4.579C34.483,37.393,36.534,35.342,39.062,35.342z'/><path class='mountain' d='M29.395,70.033l10.59-16.188c0.535-0.834,1.402-0.834,1.937,0l3.549,5.536l9.875-15.399c0.763-1.192,2.003-1.192,2.766,0c0,0,11.314,23.861,12.494,25.789c-0.003,0.388,0.046,0.834-0.443,0.834C67.2,70.672,35.549,70.6,30.036,70.593C29.526,70.593,29.395,70.033,29.395,70.033z'/></g></svg>"
            $(pictureFilled).appendTo('#filled-picture');

            var planeFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='bottom' f d='M57.25,62.16L46.755,74.738l4.498-15.933L57.25,62.16z'/><path class='right' d='M75.985,25.262L64.742,73.061L51.247,58.806L75.985,25.262z'/><path class='middle' d='M75.985,25.262L51.996,59.645l-5.247,15.094L33.257,53.771'/><path class='left' d='M75.985,25.262L33.257,54.61l-17.242-0.839L75.985,25.262z'/></g></svg>"
            $(planeFilled).appendTo('#filled-plane');

            var presentFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875C97.875,78.566,76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125C2.125,25.684,23.559,4.25,50,4.25z'/><g class='icon'><path class='base' d='M24.724,47.472h50.554v30.33H24.724V47.472z'/><path class='top' d='M21.354,39.047h57.293v8.426H21.354V39.047z'/><path class='ribbon' d='M58.427,22.196c-4.651,0-8.426,3.772-8.426,8.426c0-4.653-3.773-8.426-8.426-8.426s-8.427,3.772-8.427,8.426c0,4.652,3.774,8.426,8.427,8.426h4.212v38.756h8.426V39.047h4.214c4.651,0,8.425-3.772,8.425-8.426S63.078,22.196,58.427,22.196z M44.944,33.991h-3.369c-1.861,0-3.37-1.51-3.37-3.37s1.509-3.37,3.37-3.37c1.86,0,3.369,1.51,3.369,3.37V33.991z M58.427,33.991h-3.369v-3.37c0-1.86,1.507-3.37,3.369-3.37c1.861,0,3.37,1.51,3.37,3.37S60.288,33.991,58.427,33.991z'/></g></svg>"
            $(presentFilled).appendTo('#filled-present');

            var robotFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='ears' d='M22.849,58.578l5.43,3.102V43.837l-5.43,3.102V58.578z M71.722,43.835V61.68l5.43-3.105V46.939L71.722,43.835z'/><path class='base' d='M31.381,33.751h37.237c1.714,0,3.102,1.39,3.102,3.103v32.582c0,1.715-1.388,3.104-3.102,3.104H31.381c-1.713,0-3.102-1.389-3.102-3.104V36.854C28.279,35.141,29.668,33.751,31.381,33.751z'/><path class='highlight' d='M29.83,33.751h18.618c0.855,0,1.552,0,1.552,0v38.788c0,0-0.695,0-1.552,0H29.83c-0.856,0-1.552-1.391-1.552-3.104V36.854C28.279,35.141,28.975,33.751,29.83,33.751z'/><path class='antenna' d='M55.431,22.891c0-3-2.431-5.43-5.431-5.43c-2.999,0-5.43,2.43-5.43,5.43c0,2.459,1.637,4.534,3.879,5.203v5.66h3.104v-5.66C53.795,27.425,55.431,25.349,55.431,22.891z'/><path class='eyes' d='M42.241,49.266c-2.141,0-3.879,1.736-3.879,3.879c0,2.141,1.736,3.879,3.879,3.879c2.142,0,3.879-1.738,3.879-3.879C46.121,51.002,44.383,49.266,42.241,49.266z M57.758,49.266c-2.141,0-3.879,1.736-3.879,3.879c0,2.141,1.736,3.879,3.879,3.879s3.879-1.738,3.879-3.879C61.637,51.002,59.898,49.266,57.758,49.266z'/></g></svg>"
            $(robotFilled).appendTo('#filled-robot');

            var rocketFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='engine' d='M32.515,51.63l16.327,16.328l-3.571,5.612L26.902,55.2L32.515,51.63z'/><path class='base' d='M26.902,46.083l1.021-1.021c0,0,7.669-1.483,14.828-8.643c14.165-14.164,30.583-9.217,30.583-9.217s4.946,16.421-9.216,30.583c-7.159,7.158-8.643,14.829-8.643,14.829l-1.021,1.021L26.902,46.083z'/><path class='window' d='M62.619,39.311c2.817,2.818,2.817,7.387,0,10.205c-2.817,2.82-7.388,2.82-10.204,0c-2.817-2.817-2.817-7.386,0-10.205C55.233,36.493,59.802,36.493,62.619,39.311z'/><path class='glass' d='M61.09,40.841c1.972,1.974,1.972,5.172,0,7.144c-1.974,1.972-5.171,1.972-7.143,0c-1.973-1.973-1.973-5.171,0-7.144C55.919,38.87,59.116,38.87,61.09,40.841z'/><path class='flame' d='M33.326,66.073c1.69,1.692,1.747,4.377,0.126,5.999c-1.859,1.858-6.759,1.656-7.269,1.146c-0.511-0.511-0.713-5.41,1.146-7.27C28.949,64.327,31.635,64.384,33.326,66.073z'/></g></svg>"
            $(rocketFilled).appendTo('#filled-rocket');

            var screenFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875S76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125S23.559,4.25,50,4.25z'/><g class='icon'><path class='stand' d='M33.606,79.886v-2.343c7.113,0,8.588-2.227,8.588-6.242c0-0.133-0.017-0.65-0.021-0.782h15.652c-0.005,0.132-0.021,0.649-0.021,0.782c0,4.016,1.474,6.242,8.588,6.242v2.343H33.606z'/><path class='base' d='M27.361,28.364h45.276c2.587,0,4.685,2.097,4.685,4.685v32.787c0,2.586-2.098,4.683-4.685,4.683H27.361c-2.587,0-4.684-2.097-4.684-4.683V33.049C22.678,30.461,24.774,28.364,27.361,28.364z'/><path class='highlight' d='M27.361,28.364h45.276c2.587,0,4.685,1.786,4.685,3.99v27.929c0,2.205,0,3.992,0,3.992H22.678c0,0,0-1.787,0-3.992V32.354C22.678,30.15,24.774,28.364,27.361,28.364z'/><path class='logo' d='M49.999,64.757c1.294,0,2.342,1.05,2.342,2.343c0,1.292-1.049,2.342-2.342,2.342c-1.292,0-2.342-1.05-2.342-2.342C47.657,65.807,48.706,64.757,49.999,64.757z'/></g></svg>"
            $(screenFilled).appendTo('#filled-screen');

            var settingsFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M79.649,54.255v-8.509l-8.053-1.832c-0.484-1.721-1.162-3.358-2.019-4.885l4.396-6.986l-6.017-6.017l-6.985,4.396c-1.526-0.859-3.164-1.536-4.885-2.02l-1.832-8.051h-8.509l-1.832,8.051c-1.72,0.485-3.357,1.161-4.886,2.02l-6.986-4.396l-6.017,6.017l4.397,6.986c-0.858,1.527-1.536,3.164-2.021,4.885l-8.052,1.832v8.509l8.052,1.831c0.484,1.721,1.162,3.358,2.021,4.885l-4.397,6.987l6.017,6.017l6.986-4.396c1.527,0.858,3.164,1.535,4.886,2.02l1.832,8.051h8.509l1.832-8.051c1.72-0.484,3.357-1.161,4.885-2.02l6.985,4.396l6.017-6.017l-4.396-6.987c0.858-1.526,1.534-3.164,2.019-4.885L79.649,54.255z'/><path class='top' d='M50,35.171c8.189,0,14.829,6.639,14.829,14.83c0,8.191-6.64,14.83-14.829,14.83c-8.191,0-14.83-6.639-14.83-14.83C35.17,41.81,41.809,35.171,50,35.171z'/></g></svg>"
            $(settingsFilled).appendTo('#filled-settings');

            var spaceshipFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,4.25c26.441,0,47.875,21.434,47.875,47.875C97.875,78.566,76.441,100,50,100C17.857,100,2.125,78.566,2.125,52.125C2.125,25.684,23.559,4.25,50,4.25z'/><g class='icon'><path class='light' d='M41.156,55.62h17.688l7.37,17.689h-32.43L41.156,55.62z'/><path class='glass' d='M41.156,35.535c0-4.884,3.96-8.845,8.844-8.845c4.885,0,8.845,3.96,8.845,8.845H41.156z'/><path class='base' d='M50,34.798c15.063,0,27.271,4.951,27.271,11.056c0,6.106-12.209,11.056-27.271,11.056c-15.062,0-27.271-4.949-27.271-11.056C22.729,39.749,34.938,34.798,50,34.798z'/><path class='circles' d='M50,41.433c-2.441,0-4.422,1.98-4.422,4.422s1.98,4.423,4.422,4.423c2.44,0,4.422-1.981,4.422-4.423S52.44,41.433,50,41.433z M64.741,41.433c-2.441,0-4.423,1.98-4.423,4.422s1.981,4.423,4.423,4.423s4.422-1.981,4.422-4.423S67.183,41.433,64.741,41.433z M35.259,41.433c-2.442,0-4.423,1.98-4.423,4.422s1.981,4.423,4.423,4.423s4.422-1.981,4.422-4.423S37.701,41.433,35.259,41.433z'/></g></svg>"
            $(spaceshipFilled).appendTo('#filled-spaceship');

            var stormFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='cloud' d='M70.342,38.521c0.003-0.123,0.02-0.243,0.02-0.367c0-8.339-6.752-15.099-15.083-15.099c-5.764,0-10.769,3.238-13.308,7.996c-0.791-0.285-1.641-0.446-2.53-0.446c-4.166,0-7.541,3.382-7.541,7.549l0.002,0.039c-6.729,0.392-12.068,5.961-12.068,12.795c0,7.088,5.74,12.834,12.821,12.834h34.693c7.081,0,12.82-5.746,12.82-12.834C80.165,44.936,75.974,39.874,70.342,38.521z'/><polygon class='lightning' points='58.151,69.529 51.223,69.529 54.074,63.822 46.737,63.822 41.845,73.606 49.066,73.606 45.922,80.944 '/></g></svg>"
            $(stormFilled).appendTo('#filled-storm');

            var suitcaseFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875S76.441,97.875,50,97.875C17.857,97.875,2.125,76.441,2.125,50S23.559,2.125,50,2.125z'/><g class='icon'><path class='top' d='M23.542,52.268V37.905c0-2.504,2.031-4.535,4.536-4.535h10.583v-4.534c0-2.505,2.031-4.537,4.536-4.537h13.607c2.504,0,4.535,2.032,4.535,4.537v4.534h10.584c2.504,0,4.535,2.031,4.535,4.535v14.363H23.542z M57.56,31.857v-1.511c0-1.253-1.016-2.269-2.268-2.269H44.709c-1.253,0-2.269,1.016-2.269,2.269v1.511v1.513H57.56V31.857L57.56,31.857z'/><path class='bottom' d='M76.457,52.268v18.898c0,2.506-2.031,4.535-4.536,4.535H28.076c-2.504,0-4.535-2.029-4.535-4.535V52.268H76.457z'/><path class='buttons' d='M36.394,49.245c-1.671,0-3.024,1.353-3.024,3.023s1.354,3.023,3.024,3.023c1.67,0,3.023-1.354,3.023-3.023S38.063,49.245,36.394,49.245z M63.606,49.245c-1.67,0-3.023,1.353-3.023,3.023s1.354,3.023,3.023,3.023s3.023-1.354,3.023-3.023S65.276,49.245,63.606,49.245z'/></g></svg>"
            $(suitcaseFilled).appendTo('#filled-suitcase');

            var tagFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M75.523,53.617L53.508,75.631c-1.777,1.78-4.662,1.78-6.439,0L25.418,54.174c-2.275-2.276-2.275-7.275-2.275-8.347V27.614c0-2.514,1.821-4.58,4.336-4.58l19.188,0.028c3.036,0,5.313,0.759,7.59,3.033l21.268,21.082C77.303,48.957,77.303,51.842,75.523,53.617z'/><path class='dot' d='M33.866,27.083c2.934,0,5.312,2.379,5.312,5.313c0,2.933-2.377,5.312-5.312,5.312c-2.934,0-5.312-2.379-5.312-5.312C28.555,29.461,30.932,27.083,33.866,27.083z'/></g></svg>"
            $(tagFilled).appendTo('#filled-tag');

            var thumbsdownFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M52.125,2.125C78.566,2.125,100,23.559,100,50c0,26.441-21.434,47.875-47.875,47.875C19.982,97.875,4.25,76.441,4.25,50C4.25,23.559,25.684,2.125,52.125,2.125z'/><g class='icon'><path class='base' d='M75.731,49.391c0,0,2.573-0.862,2.573-3.451c0-2.59-3.43-4.315-3.43-4.315s1.715-0.693,1.715-3.454c0-2.759-4.287-3.452-4.287-3.452s2.572-0.864,2.572-3.452c0-2.589-4.093-3.452-4.093-3.452H46.568v28.477h4.289c5.587,0,6.003,8.63,6.003,8.63s0,5.173,0,6.04c0,1.726,0.858,4.315,4.289,2.588c3.43-1.726,3.43-4.95,3.43-8.628c0-2.761-0.856-8.63-0.856-8.63s8.283,0,12.008,0c1.717,0,3.431-0.862,3.431-3.451C79.163,50.25,75.731,49.391,75.731,49.391z'/><path class='sleeve' d='M41.424,27.818h-5.988c-8.062,0-14.597,6.567-14.597,14.67c0,8.102,6.535,14.669,14.597,14.669h5.988V27.818z'/><path class='cuff' d='M38.85,58.674h10.293V25.881H38.85V58.674z'/><path class='dot' d='M43.997,35.521c1.42,0,2.573-1.159,2.573-2.589c0-1.429-1.152-2.587-2.573-2.587s-2.573,1.159-2.573,2.587C41.424,34.361,42.576,35.521,43.997,35.521z'/></g></svg>"
            $(thumbsdownFilled).appendTo('#filled-thumbsdown');

            var thumbsupFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' d='M78.856,47.19c0-2.562-1.698-3.417-3.396-3.417c-3.685,0-11.882,0-11.882,0s0.849-5.809,0.849-8.538c0-3.642,0-6.831-3.395-8.538c-3.396-1.708-4.242,0.854-4.242,2.562c0,0.856,0,5.977,0,5.977s-0.414,8.538-5.942,8.538h-4.243V71.95h23.958c0,0,4.051-0.854,4.051-3.416c0-2.561-2.547-3.415-2.547-3.415s4.243-0.687,4.243-3.416c0-2.732-1.697-3.417-1.697-3.417s3.396-1.707,3.396-4.27s-2.548-3.416-2.548-3.416S78.856,49.75,78.856,47.19z'/><path class='sleeve' d='M41.512,42.919h-5.925c-7.977,0-14.443,6.498-14.443,14.515c0,8.017,6.467,14.515,14.443,14.515h5.925V42.919z'/><path class='cuff' d='M38.965,73.865h10.185V41.419H38.965V73.865z'/><path class='dot' d='M41.512,66.891c0,1.415,1.14,2.562,2.546,2.562c1.407,0,2.547-1.146,2.547-2.562c0-1.414-1.141-2.561-2.547-2.561C42.652,64.33,41.512,65.477,41.512,66.891z'/></g></svg>"
            $(thumbsupFilled).appendTo('#filled-thumbsup');

            var trashFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' fill='' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='base' fill='' d='M72.201,38.16v32.561c0,2.452-1.988,4.44-4.441,4.44H32.241c-2.452,0-4.44-1.988-4.44-4.44V38.16H72.201z'/><path class='details' fill='' d='M40.381,41.861c-0.817,0-1.481,0.661-1.481,1.48V69.98c0,0.817,0.663,1.48,1.481,1.48c0.816,0,1.48-0.661,1.48-1.48v-26.64C41.861,42.522,41.198,41.861,40.381,41.861z M59.621,41.861c-0.816,0-1.48,0.661-1.48,1.48V69.98c0,0.817,0.664,1.48,1.48,1.48s1.48-0.661,1.48-1.48v-26.64C61.102,42.522,60.438,41.861,59.621,41.861z M50.001,41.861c-0.817,0-1.481,0.661-1.481,1.48V69.98c0,0.817,0.663,1.48,1.481,1.48c0.816,0,1.48-0.661,1.48-1.48v-26.64C51.481,42.522,50.817,41.861,50.001,41.861z'/><path class='lid' fill='' d='M24.1,38.16L24.1,38.16c0-2.453,1.987-4.441,4.441-4.441H38.9v-4.44c0-2.452,1.988-4.439,4.44-4.439h13.32c2.453,0,4.441,1.987,4.441,4.439v4.44h10.359c2.451,0,4.439,1.988,4.439,4.441l0,0H24.1z M57.4,32.24v-1.48c0-1.226-0.996-2.22-2.219-2.22H44.82c-1.226,0-2.219,0.994-2.219,2.22v1.48v1.48H57.4V32.24z'/></g></svg>"
            $(trashFilled).appendTo('#filled-trash');

            var userFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='body' d='M74.302,78.127H25.698c-2.982,0-5.4-2.419-5.4-5.4l0,0l0,0c0-19.884,13.501-25.202,29.702-25.202s29.702,5.318,29.702,25.202l0,0C79.702,75.71,77.283,78.127,74.302,78.127z'/><polygon class='collar_right' points='63.501,49.325 50,54.726 55.4,62.826 '/><polygon class='collar_left' points='46.977,62.826 52.377,54.726 38.876,49.325 '/><path class='head' d='M50.877,21.873c8.947,0,16.201,7.254,16.201,16.201c0,8.948-7.254,16.201-16.201,16.201c-8.947,0-16.201-7.253-16.201-16.201C34.676,29.127,41.928,21.873,50.877,21.873z'/><path class='hair' d='M67.918,39.683c-1.019,0.116-2.053,0.193-3.114,0.193c-8.816,0-16.3-4.136-19.082-9.9h-0.565c-1.256,2.194-3.435,4.371-6.296,6.022c-1.684,0.972-3.41,1.646-5.062,2.043c0.386-7.127,5.121-13.086,11.609-15.266h0.087c0.83-0.279,1.686-0.499,2.564-0.653c0.055-0.009,0.11-0.018,0.166-0.023c0.371-0.061,0.745-0.111,1.124-0.148c0.497-0.044,0.997-0.075,1.504-0.075c7.674,0,14.167,5.054,16.332,12.016c0.168,0.537,0.309,1.083,0.423,1.638c0.229,1.114,0.349,2.267,0.349,3.447C67.954,39.215,67.928,39.445,67.918,39.683z'/></g></svg>"
            $(userFilled).appendTo('#filled-user');

            var winnerFilled = "<svg class='flat_icon' xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' ><path class='circle' d='M50,2.125c26.441,0,47.875,21.434,47.875,47.875c0,26.441-21.434,47.875-47.875,47.875C17.857,97.875,2.125,76.441,2.125,50C2.125,23.559,23.559,2.125,50,2.125z'/><g class='icon'><path class='ribbon' d='M39.036,61.003h21.929l2.529,21.928L50,75.341l-13.494,7.59L39.036,61.003z'/><path class='base' d='M74.459,41.529c0,0.771-2.346,1.423-2.42,2.173c-0.074,0.765,2.102,1.855,1.955,2.599c-0.148,0.753-2.576,0.932-2.797,1.659c-0.223,0.734,1.697,2.231,1.406,2.933c-0.293,0.708-2.711,0.405-3.068,1.076c-0.361,0.675,1.227,2.518,0.805,3.15c-0.426,0.636-2.738-0.13-3.221,0.458c-0.484,0.59,0.715,2.708,0.176,3.247c-0.539,0.54-2.656-0.659-3.246-0.177c-0.59,0.484,0.176,2.795-0.457,3.221c-0.633,0.423-2.479-1.167-3.152-0.804c-0.67,0.357-0.369,2.773-1.076,3.066c-0.701,0.292-2.197-1.627-2.932-1.405c-0.727,0.221-0.906,2.649-1.66,2.798c-0.742,0.146-1.833-2.03-2.599-1.956c-0.753,0.074-1.401,2.42-2.173,2.42c-0.771,0-1.421-2.346-2.173-2.42c-0.765-0.074-1.856,2.103-2.599,1.956c-0.754-0.15-0.934-2.578-1.66-2.798c-0.733-0.222-2.23,1.697-2.932,1.405c-0.708-0.293-0.407-2.709-1.077-3.066c-0.675-0.363-2.519,1.227-3.151,0.804c-0.635-0.426,0.131-2.738-0.458-3.221c-0.589-0.482-2.707,0.717-3.247,0.177c-0.54-0.539,0.66-2.657,0.176-3.248c-0.484-0.589-2.795,0.178-3.22-0.457c-0.422-0.633,1.167-2.479,0.805-3.15c-0.359-0.671-2.775-0.369-3.068-1.076c-0.291-0.702,1.628-2.198,1.406-2.933c-0.22-0.725-2.648-0.906-2.797-1.659c-0.147-0.744,2.028-1.834,1.955-2.599c-0.074-0.752-2.42-1.402-2.42-2.173s2.346-1.423,2.42-2.173c0.074-0.765-2.101-1.857-1.955-2.599c0.149-0.754,2.578-0.933,2.797-1.659c0.223-0.734-1.697-2.231-1.406-2.933c0.293-0.708,2.709-0.406,3.069-1.076c0.361-0.675-1.228-2.519-0.805-3.151c0.425-0.634,2.736,0.132,3.219-0.457c0.485-0.587-0.715-2.709-0.175-3.248c0.54-0.54,2.657,0.66,3.247,0.176c0.589-0.483-0.177-2.795,0.457-3.22c0.633-0.423,2.478,1.167,3.151,0.805c0.67-0.358,0.369-2.775,1.077-3.069c0.701-0.29,2.198,1.63,2.933,1.407c0.724-0.221,0.905-2.649,1.659-2.797c0.743-0.146,1.834,2.028,2.599,1.955c0.752-0.074,1.402-2.42,2.173-2.42c0.771,0,1.422,2.346,2.173,2.42c0.766,0.074,1.856-2.101,2.599-1.954c0.756,0.149,0.934,2.577,1.66,2.794c0.732,0.225,2.23-1.695,2.934-1.404c0.705,0.293,0.404,2.71,1.074,3.068c0.676,0.363,2.52-1.227,3.152-0.804c0.635,0.425-0.133,2.736,0.457,3.219c0.588,0.483,2.709-0.716,3.246-0.175c0.539,0.54-0.66,2.657-0.176,3.247c0.484,0.589,2.795-0.177,3.221,0.457c0.422,0.633-1.166,2.478-0.805,3.151c0.357,0.67,2.775,0.369,3.068,1.076c0.291,0.702-1.629,2.198-1.406,2.933c0.221,0.724,2.648,0.905,2.797,1.659c0.146,0.742-2.029,1.834-1.955,2.599C72.113,40.108,74.459,40.758,74.459,41.529z'/><path class='text' d='M50.183,32.507h-2.711l-0.806,4.888h-2.357l0.806-4.888h-2.71l-0.806,4.888h-2.701l-0.417,2.731h2.668l-0.565,3.421h-2.706l-0.417,2.732h2.674L39.43,50.55h2.71l0.704-4.271h2.357l-0.704,4.271h2.71l0.704-4.271h2.831l0.418-2.732h-2.798l0.564-3.421h2.837l0.418-2.731h-2.805L50.183,32.507z M45.652,43.547H43.31l0.549-3.421h2.343L45.652,43.547z M57.184,32.521c-0.258,0.595-0.684,1.101-1.273,1.518c-0.588,0.417-1.209,0.664-1.859,0.74v1.898h2.313v13.873h2.719V32.521H57.184z'/></g></svg>"
            $(winnerFilled).appendTo('#filled-winner');

        </script>
    </body>
</html>
