<!DOCTYPE html>

<html lang="en-US">

<head>



	

  <meta charset="UTF-8">



	

  <meta name="viewport" content="width=device-width, initial-scale=1">



 

	





  <title>Pixi js memory leak</title>

<!-- This site is optimized with the Yoast SEO plugin v12.7 -  -->

  <meta name="description" content="Pixi js memory leak">



  <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">

 



  <style id="scriptlesssocialsharing-inline-css" type="text/css">

.scriptlesssocialsharing__buttons  { padding: 12px; flex: 1; }@media only screen and (max-width: 767px) { .scriptlesssocialsharing .sss-name { position: absolute; clip: rect(1px, 1px, 1px, 1px); height: 1px; width: 1px; border: 0; overflow: hidden; } }

  </style>

  

  <style>

.ai-viewport-3                { display: none !important;}

.ai-viewport-2                { display: none !important;}

.ai-viewport-1                { display: inherit !important;}

.ai-viewport-0                { display: none !important;}

@media (min-width: 768px) and (max-width: 979px) {

.ai-viewport-1                { display: none !important;}

.ai-viewport-2                { display: inherit !important;}

}

@media (max-width: 767px) {

.ai-viewport-1                { display: none !important;}

.ai-viewport-3                { display: inherit !important;}

}

  </style>

  <style id="mo-optin-form-stylesheet" type="text/css">html div#CpJbDPYgkC div# * { padding: 0px; margin: 0px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; } html div#CpJbDPYgkC div# { background: #ffffff; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: 3px solid #cccccc; margin: 10px auto; max-width: 400px; } html div#CpJbDPYgkC div# .mo-optin-error { display: none; color: #ff0000; text-align: center; padding: 5px; font-size: 14px; } html div#CpJbDPYgkC div# .gridgum_body { width: 100%; margin: 10px auto; } html div#CpJbDPYgkC div# .gridgum_body-inner { padding-left: 20px; padding-top: 20px; padding-right: 20px; } html div#CpJbDPYgkC div# .gridgum_body-inner .gridgum_header2 { text-transform: uppercase; font-weight: 900; padding-bottom: 10px; font-size: 12px; color: #46ca9b; text-align: center; display:none; } html div#CpJbDPYgkC div# .gridgum_body-inner .gridgum_headline { padding-bottom: 10px; color: #4b4646; text-align: center; text-transform: capitalize; display: block; border: 0; line-height: normal; } html div#CpJbDPYgkC div# .gridgum_body-form , html div#CpJbDPYgkC div# , html div#CpJbDPYgkC div# , html div#CpJbDPYgkC div# ., html div#CpJbDPYgkC div#  { width: 100%; max-width: 100%; padding: 10px 0px; margin: 0; margin-bottom: 20px; border: 0px; border-bottom: 2px solid #ccc; font-weight: normal; color: #181818; font-size: 15px; background-color: #ffffff; } html div#CpJbDPYgkC div# ., html div#CpJbDPYgkC div# . { padding: 10px; } html div#CpJbDPYgkC div# . label, html div#CpJbDPYgkC div# . label{ margin-top: 6px; } html div#CpJbDPYgkC div# . label input, html div#CpJbDPYgkC div# . label input{ margin-right: 6px; } html div#CpJbDPYgkC div#  { min-height: 80px; } html div#CpJbDPYgkC div# .gridgum_body-form :focus, html div#CpJbDPYgkC div# .gridgum_body-form :focus { outline: 0; } html div#CpJbDPYgkC div# input[type="submit"].gridgum_submit_button { padding: 10px; font-size: 15px; border-radius: 3px; border: 0px; background: #46ca9b; text-transform: uppercase; color: #fff; font-weight: 600; width: 100%; } html div#CpJbDPYgkC div# .gridgum_note { padding-top: 10px; color: #777; text-align: center; font-style: italic; display: block; border: 0; line-height: normal; } @media (min-width: 700px) { html div#CpJbDPYgkC div# .gridgum_content-overlay .gridgum_header2, .gridgum_content-overlay .gridgum_description { color: #fff; display: block; border: 0; line-height: normal; } } @media (min-width: 980px) { html div#CpJbDPYgkC div# .gridgum_body-inner .gridgum_header2 { font-size: 15px; text-align: center; } }div#CpJbDPYgkC *, div#CpJbDPYgkC *:before, div#CpJbDPYgkC *:after {box-sizing: border-box;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;}div#CpJbDPYgkC_sidebar_container {margin:5px auto 2px;text-align:center;}div#CpJbDPYgkC_sidebar_container  a {font-size:16px !important; text-decoration: none !important;box-shadow:none !important;border-bottom-width:0px !important;cursor:pointer !important;}div#CpJbDPYgkC_sidebar_container .mo-acceptance-checkbox {background-color: #fff;line-height: 0;border: 1px solid #bbb;width: 16px;min-width: 16px;height: 16px;margin: 0 5px 0 0 !important;outline: 0;text-align: center;vertical-align: middle;clear: none;cursor: pointer;}div#CpJbDPYgkC_sidebar_container .mo-acceptance-label {cursor:pointer}div#CpJbDPYgkC_sidebar_container div#CpJbDPYgkC_sidebar p {padding:0px !important;margin:0px !important}div#CpJbDPYgkC .mo-optin-form-wrapper label {color:inherit;font-weight: normal;margin: 0;padding:0;}div# .mo-optin-form-note .mo-acceptance-label {display:none;}div#CpJbDPYgkC .mailoptin-video-container { position: relative; padding-bottom: %; height: 0; overflow: hidden; } div#CpJbDPYgkC .mailoptin-video-container iframe, div#CpJbDPYgkC .mailoptin-video-container object, div#CpJbDPYgkC .mailoptin-video-container embed, div#CpJbDPYgkC .mailoptin-video-container video { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }div#CpJbDPYgkC_sidebar #mo-optin-form-name-field {display: none !important;}#CpJbDPYgkC .mo-optin-form-container .mo-optin-spinner { border-radius: inherit; position: absolute; width: 100%; height: 100%; background: #fff url() 50% 50% no-repeat; left: 0; top: 0; opacity: ; filter: alpha(opacity=80); } #CpJbDPYgkC .mo-optin-form-container .mo-optin-success-close { font-size: 32px !important; font-family: "HelveticaNeue - Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif !important; color: #282828 !important; font-weight: 300 !important; position: absolute !important; top: 0 !important; right: 10px !important; background: none !important; text-decoration: none !important; width: auto !important; height: auto !important; display: block !important; line-height: 32px !important; padding: 0 !important; -moz-box-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; } #CpJbDPYgkC .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-success-msg { font-size: 21px; font-family: "HelveticaNeue - Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; color: #282828 !important; font-weight: 300; text-align: center; margin: 0 auto; width: 100%; position: absolute !important; left: 50%; top: 50%; -webkit-transform: translate(-50%, -50%); -moz-transform: translate(-50%, -50%); -o-transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%); } #CpJbDPYgkC .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-success-msg a { color: #0000EE; text-decoration: underline; } html div#CpJbDPYgkC .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .checkbox-field, html div#CpJbDPYgkC .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .radio-field, html div#CpJbDPYgkC .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .select-field { text-align: left; margin-top: 6px; padding: 6px; } html div#CpJbDPYgkC .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .checkbox-field label, html div#CpJbDPYgkC .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .radio-field label { display: block; text-align: left; margin-top: 6px; } html div#CpJbDPYgkC .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .checkbox-field label input, html div#CpJbDPYgkC .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .radio-field label input { margin-right: 5px; vertical-align: middle; } html div#CpJbDPYgkC .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .select-field select{ width: 100%; } div#CpJbDPYgkC div#CpJbDPYgkC_sidebar .mo-optin-form-headline, div#CpJbDPYgkC  h2, div#CpJbDPYgkC  h1 { font-size: 22px !important; }div#CpJbDPYgkC div#CpJbDPYgkC_sidebar .mo-optin-form-description, div#CpJbDPYgkC  div#CpJbDPYgkC_sidebar p { font-size: 18px !important; }div#CpJbDPYgkC div#CpJbDPYgkC_sidebar .mo-optin-form-note { font-size: 12px !important; }@media screen and (max-width: 768px) { div#CpJbDPYgkC div#CpJbDPYgkC_sidebar .mo-optin-form-headline, div#CpJbDPYgkC  div#CpJbDPYgkC_sidebar h2, div#CpJbDPYgkC  div#CpJbDPYgkC_sidebar h1 { font-size: 22px !important; } div#CpJbDPYgkC div#CpJbDPYgkC_sidebar .mo-optin-form-description, div#CpJbDPYgkC  div#CpJbDPYgkC_sidebar p { font-size: 18px !important; } div#CpJbDPYgkC div#CpJbDPYgkC_sidebar .mo-optin-form-note { font-size: 12px !important; } }@media screen and (max-width: 480px) { div#CpJbDPYgkC div#CpJbDPYgkC_sidebar .mo-optin-form-headline, div#CpJbDPYgkC  div#CpJbDPYgkC_sidebar h2, div#CpJbDPYgkC  div#CpJbDPYgkC_sidebar h1 { font-size: 20px !important; } div#CpJbDPYgkC div#CpJbDPYgkC_sidebar .mo-optin-form-description, div#CpJbDPYgkC  div#CpJbDPYgkC_sidebar p { font-size: 12px !important; } div#CpJbDPYgkC div#CpJbDPYgkC_sidebar .mo-optin-form-note, div#CpJbDPYgkC div#CpJbDPYgkC_sidebar .mo-optin-form-note * { font-size: 12px !important; } }div#CpJbDPYgkC .mo-mailchimp-interest-container { margin: 0 10px 2px; } div#CpJbDPYgkC .mo-mailchimp-interest-label { font-size: 16px; margin: 5px 0 2px; } div#CpJbDPYgkC  { line-height: normal; border: 0; margin: 0 5px; } div#CpJbDPYgkC  { vertical-align: middle; font-size: 14px; } div#CpJbDPYgkC .mo-mailchimp-interest-choice-container { margin: 5px 0; }</style>

  <style id="mo-optin-form-stylesheet" type="text/css">html div#ZRKdOdiDZU div# { text-align:left; background: #f0f0f0; border: 4px solid #dd3333; border-radius: 5px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; -webkit-border-radius: 5px; -o-border-radius: 5px; -moz-border-radius: 5px; padding: ; margin: 10px; max-width: 650px; } html div#ZRKdOdiDZU div#  { color: #222222; margin: 0 0 10px; font-weight: bold; text-align: center; } html div#ZRKdOdiDZU div# .mo-baremetal-description { color: #000000; font-weight: normal; line-height: 1.6; margin-bottom: 20px; text-rendering: optimizeLegibility; } html div#ZRKdOdiDZU div#ZRKdOdiDZU_lightbox .mo-baremetal-note { color:#000000; margin: 5px auto; text-align: center; font-style: italic } html div#ZRKdOdiDZU div# #ZRKdOdiDZU_lightbox_name_field, html div#ZRKdOdiDZU div# #ZRKdOdiDZU_lightbox_email_field, html div#ZRKdOdiDZU div# , html div#ZRKdOdiDZU div# , html div#ZRKdOdiDZU div#  { -webkit-appearance: none; } html div#ZRKdOdiDZU div# #ZRKdOdiDZU_lightbox_name_field, html div#ZRKdOdiDZU div# #ZRKdOdiDZU_lightbox_email_field, html div#ZRKdOdiDZU div# , html div#ZRKdOdiDZU div# , html div#ZRKdOdiDZU div# , html div#ZRKdOdiDZU div#  { -webkit-border-radius: 0; border-radius: 0; background: #fff; border: 1px solid #ccc; -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1); box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1); margin: 0; padding: 8px; width: 100%; max-width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; -webkit-transition: -webkit-box-shadow , border-color  ease-in-out; -moz-transition: -moz-box-shadow , border-color  ease-in-out; transition: box-shadow , border-color  ease-in-out; -webkit-transition: all  linear; -moz-transition: all  linear; -o-transition: all  linear; font-size: 16px; } html div#ZRKdOdiDZU div#  { min-height: 80px; } html div#ZRKdOdiDZU div# input[type="submit"].mo-optin-form-submit-button, html div#ZRKdOdiDZU div# input[type="submit"].mo-optin-form-cta-button { border: none; line-height: normal; letter-spacing: normal; margin: 16px 0 0; position: relative; text-decoration: none; text-align: center; text-transform: uppercase; text-shadow: none; box-shadow: none; height: auto; min-width: initial; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; outline: 0; display: inline-block; padding: 16px 32px 17px; font-size: 16px; background: #0073b7; color: #ffffff; -webkit-transition: background-color 1s; -moz-transition: background-color 1s; -o-transition: background-color 1s; transition: background-color 1s; width: 100%; -webkit-border-radius: 3px; border-radius: 3px; float: initial; cursor: pointer; font-weight: 600; } html div#ZRKdOdiDZU div# .mo-optin-error { display: none; background: #FF0000; color: #ffffff; text-align: center; padding: .2em; margin: 0; width: 100%; font-size: 16px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; } html div#ZRKdOdiDZU div#ZRKdOdiDZU_lightbox ul { margin: 0 0  ; }div#ZRKdOdiDZU *, div#ZRKdOdiDZU *:before, div#ZRKdOdiDZU *:after {box-sizing: border-box;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;}div#ZRKdOdiDZU_lightbox_container {margin:5px auto 2px;text-align:center;}div#ZRKdOdiDZU_lightbox_container  a {font-size:16px !important; text-decoration: none !important;box-shadow:none !important;border-bottom-width:0px !important;cursor:pointer !important;}div#ZRKdOdiDZU_lightbox_container .mo-acceptance-checkbox {background-color: #fff;line-height: 0;border: 1px solid #bbb;width: 16px;min-width: 16px;height: 16px;margin: 0 5px 0 0 !important;outline: 0;text-align: center;vertical-align: middle;clear: none;cursor: pointer;}div#ZRKdOdiDZU_lightbox_container .mo-acceptance-label {cursor:pointer}div#ZRKdOdiDZU_lightbox_container div#ZRKdOdiDZU_lightbox p {padding:0px !important;margin:0px !important}div#ZRKdOdiDZU .mo-optin-form-wrapper label {color:inherit;font-weight: normal;margin: 0;padding:0;}div# .mo-optin-form-note .mo-acceptance-label {display:none;}div#ZRKdOdiDZU .mailoptin-video-container { position: relative; padding-bottom: %; height: 0; overflow: hidden; } div#ZRKdOdiDZU .mailoptin-video-container iframe, div#ZRKdOdiDZU .mailoptin-video-container object, div#ZRKdOdiDZU .mailoptin-video-container embed, div#ZRKdOdiDZU .mailoptin-video-container video { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }.MOanimated{animation-duration:1s;animation-fill-mode:both}.{animation-iteration-count:infinite}.{animation-duration:2s}.,.,.,.{animation-duration:.75s}@keyframes bounce{from,20%,53%,80%,to{animation-timing-function:cubic-bezier(,,,);transform:translate3d(0,0,0)}40%,43%{animation-timing-function:cubic-bezier(,,,);transform:translate3d(0,-30px,0)}70%{animation-timing-function:cubic-bezier(,,,);transform:translate3d(0,-15px,0)}90%{transform:translate3d(0,-4px,0)}}.MObounce{animation-name:bounce;transform-origin:center bottom}@keyframes flash{from,50%,to{opacity:1}25%,75%{opacity:0}}.MOflash{animation-name:flash}@keyframes pulse{from{transform:scale3d(1,1,1)}50%{transform:scale3d(,,)}to{transform:scale3d(1,1,1)}}.MOpulse{animation-name:pulse}@keyframes rubberBand{from{transform:scale3d(1,1,1)}30%{transform:scale3d(,,1)}40%{transform:scale3d(,,1)}50%{transform:scale3d(,,1)}65%{transform:scale3d(.95,,1)}75%{transform:scale3d(,.95,1)}to{transform:scale3d(1,1,1)}}.MOrubberBand{animation-name:rubberBand}@keyframes shake{from,to{transform:translate3d(0,0,0)}10%,30%,50%,70%,90%{transform:translate3d(-10px,0,0)}20%,40%,60%,80%{transform:translate3d(10px,0,0)}}.MOshake{animation-name:shake}@keyframes headShake{0%{transform:translateX(0)}6.5%{transform:translateX(-6px) rotateY(-9deg)}18.5%{transform:translateX(5px) rotateY(7deg)}31.5%{transform:translateX(-3px) rotateY(-5deg)}43.5%{transform:translateX(2px) rotateY(3deg)}50%{transform:translateX(0)}}.MOheadShake{animation-timing-function:ease-in-out;animation-name:headShake}@keyframes swing{20%{transform:rotate3d(0,0,1,15deg)}40%{transform:rotate3d(0,0,1,-10deg)}60%{transform:rotate3d(0,0,1,5deg)}80%{transform:rotate3d(0,0,1,-5deg)}to{transform:rotate3d(0,0,1,0deg)}}.MOswing{transform-origin:top center;animation-name:swing}@keyframes tada{from{transform:scale3d(1,1,1)}10%,20%{transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg)}30%,50%,70%,90%{transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg)}40%,60%,80%{transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg)}to{transform:scale3d(1,1,1)}}.MOtada{animation-name:tada}@keyframes wobble{from{transform:none}15%{transform:translate3d(-25%,0,0) rotate3d(0,0,1,-5deg)}30%{transform:translate3d(20%,0,0) rotate3d(0,0,1,3deg)}45%{transform:translate3d(-15%,0,0) rotate3d(0,0,1,-3deg)}60%{transform:translate3d(10%,0,0) rotate3d(0,0,1,2deg)}75%{transform:translate3d(-5%,0,0) rotate3d(0,0,1,-1deg)}to{transform:none}}.MOwobble{animation-name:wobble}@keyframes jello{from,11.1%,to{transform:none}22.2%{transform:skewX() skewY()}33.3%{transform:skewX() skewY()}44.4%{transform:skewX() skewY()}55.5%{transform:skewX() skewY()}66.6%{transform:skewX() skewY()}77.7%{transform:skewX() skewY()}88.8%{transform:skewX() skewY()}}.MOjello{animation-name:jello;transform-origin:center}@keyframes bounceIn{from,20%,40%,60%,80%,to{animation-timing-function:cubic-bezier(,,,)}0%{opacity:0;transform:scale3d(.3,.3,.3)}20%{transform:scale3d(1.1,1.1,1.1)}40%{transform:scale3d(.9,.9,.9)}60%{opacity:1;transform:scale3d(,,)}80%{transform:scale3d(.97,.97,.97)}to{opacity:1;transform:scale3d(1,1,1)}}.MObounceIn{animation-name:bounceIn}@keyframes bounceInDown{from,60%,75%,90%,to{animation-timing-function:cubic-bezier(,,,)}0%{opacity:0;transform:translate3d(0,-3000px,0)}60%{opacity:1;transform:translate3d(0,25px,0)}75%{transform:translate3d(0,-10px,0)}90%{transform:translate3d(0,5px,0)}to{transform:none}}.MObounceInDown{animation-name:bounceInDown}@keyframes bounceInLeft{from,60%,75%,90%,to{animation-timing-function:cubic-bezier(,,,)}0%{opacity:0;transform:translate3d(-3000px,0,0)}60%{opacity:1;transform:translate3d(25px,0,0)}75%{transform:translate3d(-10px,0,0)}90%{transform:translate3d(5px,0,0)}to{transform:none}}.MObounceInLeft{animation-name:bounceInLeft}@keyframes bounceInRight{from,60%,75%,90%,to{animation-timing-function:cubic-bezier(,,,)}from{opacity:0;transform:translate3d(3000px,0,0)}60%{opacity:1;transform:translate3d(-25px,0,0)}75%{transform:translate3d(10px,0,0)}90%{transform:translate3d(-5px,0,0)}to{transform:none}}.MObounceInRight{animation-name:bounceInRight}@keyframes bounceInUp{from,60%,75%,90%,to{animation-timing-function:cubic-bezier(,,,)}from{opacity:0;transform:translate3d(0,3000px,0)}60%{opacity:1;transform:translate3d(0,-20px,0)}75%{transform:translate3d(0,10px,0)}90%{transform:translate3d(0,-5px,0)}to{transform:translate3d(0,0,0)}}.MObounceInUp{animation-name:bounceInUp}@keyframes bounceOut{20%{transform:scale3d(.9,.9,.9)}50%,55%{opacity:1;transform:scale3d(1.1,1.1,1.1)}to{opacity:0;transform:scale3d(.3,.3,.3)}}.MObounceOut{animation-name:bounceOut}@keyframes bounceOutDown{20%{transform:translate3d(0,10px,0)}40%,45%{opacity:1;transform:translate3d(0,-20px,0)}to{opacity:0;transform:translate3d(0,2000px,0)}}.MObounceOutDown{animation-name:bounceOutDown}@keyframes bounceOutLeft{20%{opacity:1;transform:translate3d(20px,0,0)}to{opacity:0;transform:translate3d(-2000px,0,0)}}.MObounceOutLeft{animation-name:bounceOutLeft}@keyframes bounceOutRight{20%{opacity:1;transform:translate3d(-20px,0,0)}to{opacity:0;transform:translate3d(2000px,0,0)}}.MObounceOutRight{animation-name:bounceOutRight}@keyframes bounceOutUp{20%{transform:translate3d(0,-10px,0)}40%,45%{opacity:1;transform:translate3d(0,20px,0)}to{opacity:0;transform:translate3d(0,-2000px,0)}}.MObounceOutUp{animation-name:bounceOutUp}@keyframes fadeIn{from{opacity:0}to{opacity:1}}.MOfadeIn{animation-name:fadeIn}@keyframes fadeInDown{from{opacity:0;transform:translate3d(0,-100%,0)}to{opacity:1;transform:none}}.MOfadeInDown{animation-name:fadeInDown}@keyframes fadeInDownBig{from{opacity:0;transform:translate3d(0,-2000px,0)}to{opacity:1;transform:none}}.MOfadeInDownBig{animation-name:fadeInDownBig}@keyframes fadeInLeft{from{opacity:0;transform:translate3d(-100%,0,0)}to{opacity:1;transform:none}}.MOfadeInLeft{animation-name:fadeInLeft}@keyframes fadeInLeftBig{from{opacity:0;transform:translate3d(-2000px,0,0)}to{opacity:1;transform:none}}.MOfadeInLeftBig{animation-name:fadeInLeftBig}@keyframes fadeInRight{from{opacity:0;transform:translate3d(100%,0,0)}to{opacity:1;transform:none}}.MOfadeInRight{animation-name:fadeInRight}@keyframes fadeInRightBig{from{opacity:0;transform:translate3d(2000px,0,0)}to{opacity:1;transform:none}}.MOfadeInRightBig{animation-name:fadeInRightBig}@keyframes fadeInUp{from{opacity:0;transform:translate3d(0,100%,0)}to{opacity:1;transform:none}}.MOfadeInUp{animation-name:fadeInUp}@keyframes fadeInUpBig{from{opacity:0;transform:translate3d(0,2000px,0)}to{opacity:1;transform:none}}.MOfadeInUpBig{animation-name:fadeInUpBig}@keyframes fadeOut{from{opacity:1}to{opacity:0}}.MOfadeOut{animation-name:fadeOut}@keyframes fadeOutDown{from{opacity:1}to{opacity:0;transform:translate3d(0,100%,0)}}.MOfadeOutDown{animation-name:fadeOutDown}@keyframes fadeOutDownBig{from{opacity:1}to{opacity:0;transform:translate3d(0,2000px,0)}}.MOfadeOutDownBig{animation-name:fadeOutDownBig}@keyframes fadeOutLeft{from{opacity:1}to{opacity:0;transform:translate3d(-100%,0,0)}}.MOfadeOutLeft{animation-name:fadeOutLeft}@keyframes fadeOutLeftBig{from{opacity:1}to{opacity:0;transform:translate3d(-2000px,0,0)}}.MOfadeOutLeftBig{animation-name:fadeOutLeftBig}@keyframes fadeOutRight{from{opacity:1}to{opacity:0;transform:translate3d(100%,0,0)}}.MOfadeOutRight{animation-name:fadeOutRight}@keyframes fadeOutRightBig{from{opacity:1}to{opacity:0;transform:translate3d(2000px,0,0)}}.MOfadeOutRightBig{animation-name:fadeOutRightBig}@keyframes fadeOutUp{from{opacity:1}to{opacity:0;transform:translate3d(0,-100%,0)}}.MOfadeOutUp{animation-name:fadeOutUp}@keyframes fadeOutUpBig{from{opacity:1}to{opacity:0;transform:translate3d(0,-2000px,0)}}.MOfadeOutUpBig{animation-name:fadeOutUpBig}@keyframes flip{from{transform:perspective(400px) rotate3d(0,1,0,-360deg);animation-timing-function:ease-out}40%{transform:perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);animation-timing-function:ease-out}50%{transform:perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);animation-timing-function:ease-in}80%{transform:perspective(400px) scale3d(.95,.95,.95);animation-timing-function:ease-in}to{transform:perspective(400px);animation-timing-function:ease-in}}.{-webkit-backface-visibility:visible;backface-visibility:visible;animation-name:flip}@keyframes flipInX{from{transform:perspective(400px) rotate3d(1,0,0,90deg);animation-timing-function:ease-in;opacity:0}40%{transform:perspective(400px) rotate3d(1,0,0,-20deg);animation-timing-function:ease-in}60%{transform:perspective(400px) rotate3d(1,0,0,10deg);opacity:1}80%{transform:perspective(400px) rotate3d(1,0,0,-5deg)}to{transform:perspective(400px)}}.MOflipInX{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipInX}@keyframes flipInY{from{transform:perspective(400px) rotate3d(0,1,0,90deg);animation-timing-function:ease-in;opacity:0}40%{transform:perspective(400px) rotate3d(0,1,0,-20deg);animation-timing-function:ease-in}60%{transform:perspective(400px) rotate3d(0,1,0,10deg);opacity:1}80%{transform:perspective(400px) rotate3d(0,1,0,-5deg)}to{transform:perspective(400px)}}.MOflipInY{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipInY}@keyframes flipOutX{from{transform:perspective(400px)}30%{transform:perspective(400px) rotate3d(1,0,0,-20deg);opacity:1}to{transform:perspective(400px) rotate3d(1,0,0,90deg);opacity:0}}.MOflipOutX{animation-name:flipOutX;-webkit-backface-visibility:visible!important;backface-visibility:visible!important}@keyframes flipOutY{from{transform:perspective(400px)}30%{transform:perspective(400px) rotate3d(0,1,0,-15deg);opacity:1}to{transform:perspective(400px) rotate3d(0,1,0,90deg);opacity:0}}.MOflipOutY{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipOutY}@keyframes lightSpeedIn{from{transform:translate3d(100%,0,0) skewX(-30deg);opacity:0}60%{transform:skewX(20deg);opacity:1}80%{transform:skewX(-5deg);opacity:1}to{transform:none;opacity:1}}.MOlightSpeedIn{animation-name:lightSpeedIn;animation-timing-function:ease-out}@keyframes lightSpeedOut{from{opacity:1}to{transform:translate3d(100%,0,0) skewX(30deg);opacity:0}}.MOlightSpeedOut{animation-name:lightSpeedOut;animation-timing-function:ease-in}@keyframes rotateIn{from{transform-origin:center;transform:rotate3d(0,0,1,-200deg);opacity:0}to{transform-origin:center;transform:none;opacity:1}}.MOrotateIn{animation-name:rotateIn}@keyframes rotateInDownLeft{from{transform-origin:left bottom;transform:rotate3d(0,0,1,-45deg);opacity:0}to{transform-origin:left bottom;transform:none;opacity:1}}.MOrotateInDownLeft{animation-name:rotateInDownLeft}@keyframes rotateInDownRight{from{transform-origin:right bottom;transform:rotate3d(0,0,1,45deg);opacity:0}to{transform-origin:right bottom;transform:none;opacity:1}}.MOrotateInDownRight{animation-name:rotateInDownRight}@keyframes rotateInUpLeft{from{transform-origin:left bottom;transform:rotate3d(0,0,1,45deg);opacity:0}to{transform-origin:left bottom;transform:none;opacity:1}}.MOrotateInUpLeft{animation-name:rotateInUpLeft}@keyframes rotateInUpRight{from{transform-origin:right bottom;transform:rotate3d(0,0,1,-90deg);opacity:0}to{transform-origin:right bottom;transform:none;opacity:1}}.MOrotateInUpRight{animation-name:rotateInUpRight}@keyframes rotateOut{from{transform-origin:center;opacity:1}to{transform-origin:center;transform:rotate3d(0,0,1,200deg);opacity:0}}.MOrotateOut{animation-name:rotateOut}@keyframes rotateOutDownLeft{from{transform-origin:left bottom;opacity:1}to{transform-origin:left bottom;transform:rotate3d(0,0,1,45deg);opacity:0}}.MOrotateOutDownLeft{animation-name:rotateOutDownLeft}@keyframes rotateOutDownRight{from{transform-origin:right bottom;opacity:1}to{transform-origin:right bottom;transform:rotate3d(0,0,1,-45deg);opacity:0}}.MOrotateOutDownRight{animation-name:rotateOutDownRight}@keyframes rotateOutUpLeft{from{transform-origin:left bottom;opacity:1}to{transform-origin:left bottom;transform:rotate3d(0,0,1,-45deg);opacity:0}}.MOrotateOutUpLeft{animation-name:rotateOutUpLeft}@keyframes rotateOutUpRight{from{transform-origin:right bottom;opacity:1}to{transform-origin:right bottom;transform:rotate3d(0,0,1,90deg);opacity:0}}.MOrotateOutUpRight{animation-name:rotateOutUpRight}@keyframes hinge{0%{transform-origin:top left;animation-timing-function:ease-in-out}20%,60%{transform:rotate3d(0,0,1,80deg);transform-origin:top left;animation-timing-function:ease-in-out}40%,80%{transform:rotate3d(0,0,1,60deg);transform-origin:top left;animation-timing-function:ease-in-out;opacity:1}to{transform:translate3d(0,700px,0);opacity:0}}.MOhinge{animation-name:hinge}@keyframes jackInTheBox{from{opacity:0;transform:scale(0.1) rotate(30deg);transform-origin:center bottom}50%{transform:rotate(-10deg)}70%{transform:rotate(3deg)}to{opacity:1;transform:scale(1)}}.MOjackInTheBox{animation-name:jackInTheBox}@keyframes rollIn{from{opacity:0;transform:translate3d(-100%,0,0) rotate3d(0,0,1,-120deg)}to{opacity:1;transform:none}}.MOrollIn{animation-name:rollIn}@keyframes rollOut{from{opacity:1}to{opacity:0;transform:translate3d(100%,0,0) rotate3d(0,0,1,120deg)}}.MOrollOut{animation-name:rollOut}@keyframes zoomIn{from{opacity:0;transform:scale3d(.3,.3,.3)}50%{opacity:1}}.MOzoomIn{animation-name:zoomIn}@keyframes zoomInDown{from{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,-1000px,0);animation-timing-function:cubic-bezier(,,,)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,60px,0);animation-timing-function:cubic-bezier(,,,1)}}.MOzoomInDown{animation-name:zoomInDown}@keyframes zoomInLeft{from{opacity:0;transform:scale3d(.1,.1,.1) translate3d(-1000px,0,0);animation-timing-function:cubic-bezier(,,,)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(10px,0,0);animation-timing-function:cubic-bezier(,,,1)}}.MOzoomInLeft{animation-name:zoomInLeft}@keyframes zoomInRight{from{opacity:0;transform:scale3d(.1,.1,.1) translate3d(1000px,0,0);animation-timing-function:cubic-bezier(,,,)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(-10px,0,0);animation-timing-function:cubic-bezier(,,,1)}}.MOzoomInRight{animation-name:zoomInRight}@keyframes zoomInUp{from{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,1000px,0);animation-timing-function:cubic-bezier(,,,)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);animation-timing-function:cubic-bezier(,,,1)}}.MOzoomInUp{animation-name:zoomInUp}@keyframes zoomOut{from{opacity:1}50%{opacity:0;transform:scale3d(.3,.3,.3)}to{opacity:0}}.MOzoomOut{animation-name:zoomOut}@keyframes zoomOutDown{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);animation-timing-function:cubic-bezier(,,,)}to{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,2000px,0);transform-origin:center bottom;animation-timing-function:cubic-bezier(,,,1)}}.MOzoomOutDown{animation-name:zoomOutDown}@keyframes zoomOutLeft{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(42px,0,0)}to{opacity:0;transform:scale(.1) translate3d(-2000px,0,0);transform-origin:left center}}.MOzoomOutLeft{animation-name:zoomOutLeft}@keyframes zoomOutRight{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(-42px,0,0)}to{opacity:0;transform:scale(.1) translate3d(2000px,0,0);transform-origin:right center}}.MOzoomOutRight{animation-name:zoomOutRight}@keyframes zoomOutUp{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,60px,0);animation-timing-function:cubic-bezier(,,,)}to{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,-2000px,0);transform-origin:center bottom;animation-timing-function:cubic-bezier(,,,1)}}.MOzoomOutUp{animation-name:zoomOutUp}@keyframes slideInDown{from{transform:translate3d(0,-100%,0);visibility:visible}to{transform:translate3d(0,0,0)}}.MOslideInDown{animation-name:slideInDown}@keyframes slideInLeft{from{transform:translate3d(-100%,0,0);visibility:visible}to{transform:translate3d(0,0,0)}}.MOslideInLeft{animation-name:slideInLeft}@keyframes slideInRight{from{transform:translate3d(100%,0,0);visibility:visible}to{transform:translate3d(0,0,0)}}.MOslideInRight{animation-name:slideInRight}@keyframes slideInUp{from{transform:translate3d(0,100%,0);visibility:visible}to{transform:translate3d(0,0,0)}}.MOslideInUp{animation-name:slideInUp}@keyframes slideOutDown{from{transform:translate3d(0,0,0)}to{visibility:hidden;transform:translate3d(0,100%,0)}}.MOslideOutDown{animation-name:slideOutDown}@keyframes slideOutLeft{from{transform:translate3d(0,0,0)}to{visibility:hidden;transform:translate3d(-100%,0,0)}}.MOslideOutLeft{animation-name:slideOutLeft}@keyframes slideOutRight{from{transform:translate3d(0,0,0)}to{visibility:hidden;transform:translate3d(100%,0,0)}}.MOslideOutRight{animation-name:slideOutRight}@keyframes slideOutUp{from{transform:translate3d(0,0,0)}to{visibility:hidden;transform:translate3d(0,-100%,0)}}.MOslideOutUp{animation-name:slideOutUp}div# {right: 10px;}div# {left: 10px;} #  { position: absolute; top: -15px; right: -14px; display: block; width: 30px; height: 30px; text-indent: -9999px; background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAABGdBTUEAANjr9RwUqgAAACBjSFJNAABtmAAAc44AAPJxAACDbAAAg7sAANTIAAAx7AAAGbyeiMU/AAAG7ElEQVR42mJkwA8YoZjBwcGB6fPnz4w/fvxg/PnzJ2N6ejoLFxcX47Rp036B5Dk4OP7z8vL+P3DgwD+o3v9QjBUABBALHguZoJhZXV2dVUNDgxNIcwEtZnn27Nl/ZmZmQRYWFmag5c90dHQY5OXl/z98+PDn1atXv79+/foPUN9fIP4HxRgOAAggRhyWMoOwqKgoq6GhIZe3t7eYrq6uHBDb8/Pz27Gysloga/jz588FYGicPn/+/OapU6deOnXq1GdgqPwCOuA31AF/0S0HCCB0xAQNBU4FBQWB0NBQublz59oADV37Hw28ePHi74MHD/6ii3/8+HEFMGQUgQ6WEhQU5AeZBTWTCdkigABC9ylIAZeMjIxQTEyMysaNG/3+/v37AGTgr1+//s2cOfOXm5vbN6Caz8jY1NT0a29v76/v37//g6q9sHfv3khjY2M5YAgJgsyEmg0PYYAAQreUk4+PT8jd3V1l1apVgUAzfoIM2rlz5x9gHH5BtxAdA9PB1zNnzvyB+R6oLxoopgC1nBPZcoAAgiFQnLIDMb+enp5iV1eXBzDeHoI0z58//xcwIX0mZCkMg9S2trb+hFk+ffr0QCkpKVmQ2VA7QHYxAgQQzLesQMwjIiIilZWVZfPu3bstMJ+SYikyBmUzkBnA9HEMyNcCYgmQHVC7mAACCJagOEBBbGdnp7lgwYJEkIavX7/+BcY1SvAaGRl9tba2xohjMTGxL8nJyT+AWQsuxsbG9vnp06e/QWYdPHiwHmiWKlBcCGQXyNcAAQSzmBuoSQqYim3u37+/EKR48uTJv5ANB+bVr7Dga2xs/AkTV1JS+gq0AJyoQIkPWU9aWtoPkPibN2/2A/l6QCwJ9TULQADB4hcY//xKXl5eHt++fbsAUmxhYYHiM1DiAsr9R7ZcVVUVbikIdHd3/0TWIyws/AWYVsByAgICdkAxRSAWAGI2gACClV7C4uLiOv7+/lEgRZ8+ffqLLd6ABck3ZMuB6uCWrlu37je29HDx4kVwQisvL88FFqkaQDERUHADBBAomBl5eHiYgQmLE1hSgQQZgIUD1lJm69atf4HR8R1YKoH5QIPAWWP9+vV/gOI/gHkeQw+wGAXTwAJJ5t+/f/BUDRBA4NIEKMDMyMjICtQIiniG379/4yza7t69+//Lly8oDrty5co/bJaCAEwcZCkwwTJDLWYCCCCwxcDgY3z16hXDnTt3voP4EhISWA0BFgZMwNqHExh3jMiG1tbWsgHjnA2bHmAeBtdWwOL1MycnJ7wAAQggBmi+kgIW/OaKiorJwOLuFShO0LMSMPF9AUYBSpz6+vqixHlOTs4P9MIEWHaDsxSwYMoE2mEGFJcG5SKAAGJCqjv/AbPUn8ePH98ACQQHB6NUmZqamkzABIgSp5s3bwbHORCA1QDLAWZkPc7OzszA8oHl5cuXVy5duvQBGIXwWgoggGA+FgO6xkBNTS28r69vDrT2+Y1cIMDyJchX6KkXVEmAshd6KB06dAic94EO3AzkBwGxPhCLg8ptgACCZyeQp9jZ2b2AmsuAefM8tnxJCk5ISPgOLTKfAdNEOVDMA2QHLDsBBBC8AAFlbmCLwlZISCg5JSVlJizeQAaQaimoWAUFK0g/sGGwHiiWCMS2yAUIQAAxI7c4gEmeFZi4OJ48ecLMzc39CRiEmgEBASxA/QzA8vYvAxEgNjaWZc2aNezAsprp2LFjp4FpZRdQ+AkQvwLij0AMSoC/AQIIXklAC3AVUBoBxmE8sPXQAiyvN8J8fuPGjR/h4eHf0eMdhkENhOPHj8OT+NGjR88BxZuBOA5kJtRseCUBEECMSI0AdmgBDooDaaDl8sASTSkyMlKzpqZGU1paGlS7MABLrX83b978A6zwwakTmE0YgIkSnHpBfGCV+gxYh98qKSk5CeTeAxVeQPwUiN8AMSjxgdLNX4AAYkRqCLBAXcMHtVwSaLkMMMHJAvOq9IQJE9R8fHxElJWV1bEF8aNHj+7t27fvLTDlXwXGLyhoH0OD+DnU0k/QYAa1QP8BBBAjWsuSFWo5LzRYxKFYAljqiAHzqxCwIBEwMTERBdZeoOYMA7Bl+RFYEbwB5oS3IA9D4/IFEL+E4nfQ6IDFLTgvAwQQI5ZmLRtSsINSuyA0uwlBUyQPMPWD20/AKo8ByP4DTJTfgRgUjB+gFoEc8R6amGDB+wu5mQsQQIxYmrdMUJ+zQTM6NzQEeKGO4UJqOzFADQMZ/A1qCSzBfQXi71ALfyM17sEAIIAY8fQiWKAYFgIwzIbWTv4HjbdfUAf8RPLhH1icojfoAQKIEU8bG9kRyF0aRiz6YP0k5C4LsmUY9TtAADEyEA+IVfufGEUAAQYABejinPr4dLEAAAAASUVORK5CYII=") no-repeat 0 0; background-size: 30px 30px; } @media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min--moz-device-pixel-ratio: 1.5), only screen and (min-device-pixel-ratio: 1.5) { #  { background-image: url(@); } } # .mo-optin-form-container { max-width: 700px; } # .mo-optin-form-container p { margin: 0; } @media (max-width: 700px) { # .mo-optin-form-container { margin: 0 15px !important; } } #ZRKdOdiDZU div#ZRKdOdiDZU_lightbox_container  { bottom: -28px; box-sizing: border-box; color: #fff; font-size: 15px; font-weight: 700; letter-spacing: 0; line-height: 15px; margin: 0; position: absolute; text-align: center; width: 100%; font-family: helvetica,arial,sans-serif; } #ZRKdOdiDZU div#ZRKdOdiDZU_lightbox_container  a { background-color: transparent; box-sizing: border-box; color: #fff; font-weight: 700; outline: 0; text-decoration: underline !important; }#ZRKdOdiDZU .mo-optin-form-container .mo-optin-spinner { border-radius: inherit; position: absolute; width: 100%; height: 100%; background: #fff url() 50% 50% no-repeat; left: 0; top: 0; opacity: ; filter: alpha(opacity=80); } #ZRKdOdiDZU .mo-optin-form-container .mo-optin-success-close { font-size: 32px !important; font-family: "HelveticaNeue - Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif !important; color: #282828 !important; font-weight: 300 !important; position: absolute !important; top: 0 !important; right: 10px !important; background: none !important; text-decoration: none !important; width: auto !important; height: auto !important; display: block !important; line-height: 32px !important; padding: 0 !important; -moz-box-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; } #ZRKdOdiDZU .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-success-msg { font-size: 21px; font-family: "HelveticaNeue - Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; color: #282828 !important; font-weight: 300; text-align: center; margin: 0 auto; width: 100%; position: absolute !important; left: 50%; top: 50%; -webkit-transform: translate(-50%, -50%); -moz-transform: translate(-50%, -50%); -o-transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%); } #ZRKdOdiDZU .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-success-msg a { color: #0000EE; text-decoration: underline; } html div#ZRKdOdiDZU .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .checkbox-field, html div#ZRKdOdiDZU .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .radio-field, html div#ZRKdOdiDZU .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .select-field { text-align: left; margin-top: 6px; padding: 6px; } html div#ZRKdOdiDZU .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .checkbox-field label, html div#ZRKdOdiDZU .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .radio-field label { display: block; text-align: left; margin-top: 6px; } html div#ZRKdOdiDZU .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .checkbox-field label input, html div#ZRKdOdiDZU .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .radio-field label input { margin-right: 5px; vertical-align: middle; } html div#ZRKdOdiDZU .mo-optin-form-container .mo-optin-form-wrapper .mo-optin-fields-wrapper .select-field select{ width: 100%; } div#ZRKdOdiDZU div#ZRKdOdiDZU_lightbox .mo-optin-form-headline, div#ZRKdOdiDZU  h2, div#ZRKdOdiDZU  h1 { font-size: 24px !important; }div#ZRKdOdiDZU div#ZRKdOdiDZU_lightbox .mo-optin-form-description, div#ZRKdOdiDZU  div#ZRKdOdiDZU_lightbox p { font-size: 16px !important; }div#ZRKdOdiDZU div#ZRKdOdiDZU_lightbox .mo-optin-form-note { font-size: 16px !important; }@media screen and (max-width: 768px) { div#ZRKdOdiDZU div#ZRKdOdiDZU_lightbox .mo-optin-form-headline, div#ZRKdOdiDZU  div#ZRKdOdiDZU_lightbox h2, div#ZRKdOdiDZU  div#ZRKdOdiDZU_lightbox h1 { font-size: 30px !important; } div#ZRKdOdiDZU div#ZRKdOdiDZU_lightbox .mo-optin-form-description, div#ZRKdOdiDZU  div#ZRKdOdiDZU_lightbox p { font-size: 18px !important; } div#ZRKdOdiDZU div#ZRKdOdiDZU_lightbox .mo-optin-form-note { font-size: 16px !important; } }@media screen and (max-width: 480px) { div#ZRKdOdiDZU div#ZRKdOdiDZU_lightbox .mo-optin-form-headline, div#ZRKdOdiDZU  div#ZRKdOdiDZU_lightbox h2, div#ZRKdOdiDZU  div#ZRKdOdiDZU_lightbox h1 { font-size: 20px !important; } div#ZRKdOdiDZU div#ZRKdOdiDZU_lightbox .mo-optin-form-description, div#ZRKdOdiDZU  div#ZRKdOdiDZU_lightbox p { font-size: 16px !important; } div#ZRKdOdiDZU div#ZRKdOdiDZU_lightbox .mo-optin-form-note, div#ZRKdOdiDZU div#ZRKdOdiDZU_lightbox .mo-optin-form-note * { font-size: 12px !important; } }div#ZRKdOdiDZU .mo-mailchimp-interest-container { margin: 0 10px 2px; } div#ZRKdOdiDZU .mo-mailchimp-interest-label { font-size: 16px; margin: 5px 0 2px; } div#ZRKdOdiDZU  { line-height: normal; border: 0; margin: 0 5px; } div#ZRKdOdiDZU  { vertical-align: middle; font-size: 14px; } div#ZRKdOdiDZU .mo-mailchimp-interest-choice-container { margin: 5px 0; }</style>

  

</head>





<body>



<div id="page" class="site">



	<header id="masthead" class="header">

		</header>

<div class="box is-fluid">

			

<div class="header__wrap">



				

<div class="nav__toggle--mobile">

					<button class="nav__toggle menu-toggle" aria-label="Open menu" aria-controls="primary-menu">

						<svg style="width: 24px; height: 24px;" viewbox="0 0 24 24"> <path fill="#37474f" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"></path>

					</svg></button>

				</div>





				

<div class="header__logo">

					<span class="custom-logo-link"><img src="" class="custom-logo" alt="Logo Jdev"></span>					

				</div>

<!-- .site-branding -->

				<button class="search-btn search--mobile"><i class="material-icons">search</i></button><nav id="site-navigation" class="navigation"></nav><!-- #site-navigation -->	

					<button class="search-btn"><i class="material-icons">search</i></button>

<div class="header__navigation">

				</div>



			</div>



		</div>



	<!-- #masthead -->

		

	

<div id="content" class="site-content">



<div class="float-bar">



	

<div class="float-bar__left">

			

<div class="custom-logo-link">

        <img src="">

			</div>



	</div>





	

<div class="float-bar__center">\ 

	</div>





</div>



  

	

<div class="page page--blog">

		

<div class="blog-posts">

			

<div class="box is-fluid">

				<header class="entry-header blog-header">



					</header>

<div class="blog-header__row">

						

<div class="blog-header__content">

							

<h1 class="entry-title">Pixi js memory leak</h1>

<br>

</div>

</div>

</div>

</div>

<div class="page__content">

<div class="box is-fluid">

<div class="main main--blog" id="main_blog">

<div class="entry-content blog-post__contents">

<div id="toc_container" class="no_bullets">

<ul class="toc_list">

  <li><span class="toc_number toc_depth_1"> First I thought it was a leak, but I realized the memory was released after a while.  Being a tech news site we cover the latest tech news daily online from I just checked on the bundle. _maskWindow function updated to require shift. top 004. top 014. Provide details and share your research! But avoid …. .  WindowLayer.  At the annual Surface Event, Microsoft announced the new Windows 10X which was optimized for dual-screen and foldable phones. it resources, documents, pages, and files using our search technology that displays in a while all contents related to your preferred tags. top 012. 2 when it comes out) v0. ) In this case garbage collection reclaimed the memory with success, since JS heap does return to the initial allocated memory value.  To fix this particular memory leak, you would study the code that uses detachedTree and ensure that it removes its reference to the node when it&#39;s no longer needed.  Learn more about your kit, find fascinating insights and explore new ideas with our Discover blog.  The main issue with your approach is that you are creating new PIXI.  Repeat round 2 until desired size.  When the user hovers, the rotation gets faster by changing the dur attribute. top 011.  v3.  JavaScript.  Free Email Notifications.  &quot;Over July and August 2018, through Secure-D, we observed a higher than usual number of transaction attempts in Brazil and Malaysia coming from a series of Alcatel Android smartphones (Pixi 4 and https://www.  Fixed an issue which caused a slight increases in memory usage after each compilation (a leak that was not strictly a leak). top 016.  Reminds me of the DRM FUD against Windows 7[1] and the fake benchmarks claiming that Windows 7 was eating up memory and was slow[2]. walmart. -bit words), or 5/4 megacharacters).  https://supremesecurityteam.  &gt; RPG Maker MV will jump from Pixi2 to Pixi4 immediately.  DoFollow and link building, plus find DoFollow blogs, DoFollow social bookmarking, DoFollow forums, and DoFollow article directories.  that’s a memory leak. Graphics or a PIXI.  It can still &quot;leak&quot; memory in the same manner a C# app can leak.  Green = Supported Red = Not supported Jan 27 08:56:56 one sec, on a phone call Jan 27 08:59:58 the first linux release hardware reqs were 2 megs of memory on a 386sx with a high density floppy Jan 27 09:00:46 realistically 4 megs of ram and bigger than 20 meg hard disk Jan 27 09:00:48 heh, i think i have the kernel source form back then somewhere Jan 27 09:01:28 I love digging up Class Summary: This hands on, two (2) day class will help students learn how to write hardened ASP.  do you have what it takes to be a rocklegend? The problem was twofold. AbstractFilter is now included in the Phaser Pixi build by default, allowing for easier use of external Pixi Filters.  Packs many modules into a few bundled assets. prototype. top 01.  When I add a bunch of fonts to the application memory becomes an issue.  A Container represents a collection of display objects.  We are a social technology publication covering all aspects of tech support, programming, web development and Internet marketing.  * @plugindesc memory leak patch // purge from Pixi&#39;s cache. 44 in RETAIL VALUE promise. top 013.  Phil has 9 jobs listed on their profile.  But the library that really got my attention is gl-react.  But they are all defined in the fvh.  Audio Focus state is never equal to AudioManager.  Crazy idea: what if server-side render native Full Mobile Phone Specifications of GSM and CDMA Smartphones,, Phablets, Tablets and Featured and Basic Mobile Phones, Unboxing Pictures, Test Images, Manual Download, 360 Degree View, Compare, Related Phones, News, Technology Updates, mobile tech articles Tech News, Latest technology news daily, new best tech gadgets reviews which include mobiles, tablets, laptops, video games.  After testing this out more with RPG Maker MV 1.  Asking for help, clarification, or responding to other answers.  Fixed: Prevent field icons from showing in non-relevant inputs.  See the complete profile on LinkedIn and discover Phil’s Full text of &quot;HTML 5 Shoot ’em Up in an framework built on top of Pixi.  Find answers to your angular js questions.  like, the total runtime of the rest of the code is not measurable compared to DOM operations, so the goal would be to optimize DOM access, but there are zero resources online on the relative cost of certain operations, and I get the feeling that they don&#39;t have much in common across browsers.  Also, remember that memory leaks are not&nbsp; Changelog of ct.  It uses Pixi.  Games can be compiled to iOS and Android apps via 3rd party tools.  proclive.  0. top 015.  Decrease bc, the number of bytes to fill, by 1.  Other: In pixi-tilemap. com. WebGLMaskManager.  Hi guys, I have an app with renders one huge tailing sprite for background and a few thousand sprites on top of it.  Find latest Mobile News on Samsung Mobiles, latest iPhone Mobile, New &amp; Cheap Android Mobiles, New Nokia Mobiles, Latest BlackBerry Phone on NDTV Gadgets360. ca/en/ip/Cascade-Grosgrain-Ribbon-7-8-20Yd-Nautical-Blue/PRD402X7I6TPWLZ daily 0.  available (e.  Buy on Leanpub. Point shift.  Hey there! For performance reasons, it seems like I&#39;ll be abandoning use of the excellent JS Interpreter in my app, to instead evaluate JS through eval().  The problem is that the element jumps to a different position when it happens. ca/en/ip/thirsty-buddha-sparkling-coconut-water-with-pineapple/6000197605933 daily 0. 5. com best chocolate recipes iranian oil companies city map of wisconsin.  A TextStyle Object contains information to decorate a Text objects.  Learn how to make a game, scale it for devices and publish it. js file generated by webpack and I can see that it builds an array of functions, each function is the representation of the file, and it starts on the position of the array you specify as the &quot;entry point&quot; on the webpack. ca/en/ip Copy a, the fill value, into the memory at address hl.  Wick is built on the PIXI.  Skip to content Chaos Group | Creators of V-Ray - 3D Rendering Software chaosgroup.  a free online music game.  Questions.  It normally collects unused objects and clears them.  It is also&nbsp; Documentation for PixiJS library.  Although I suppose it could be caused by RPG Maker MV as well.  Sign me up! Node. 0 is out! You can get it now on itch. 2 when you update the script! Otherwise, Tamper / Greasemonkey users will not update automatically. top 002. js doesn&#39;t use sendfile, though I bet at some point someone will figure out an optimization to do that.  Moreover, its API really fits the use case of building image filters.  4.  How to Replicate the Bug: Play a map for 10 seconds or longer.  A mask is an object that limits the visibility of an object to the shape of the mask applied to it. 5 times faster than that of other alternatives available in the market.  Switching the AIs enough will result in the game crashing. /node_modules/es6-promise-polyfill/promise. js® is a JavaScript runtime built on Chrome&#39;s V8 JavaScript engine.  This talk covers past, present, and future development along with possible plans for systemd integration. Graphics every frame without destroying them.  Find out more on our cookies page. - and 36. js) that provide me with the design and looks of the website but not with anything else? E.  animation,unity3d.  New leak shows the icons for Windows 10X variants of Maps, People, and Alarms.  Sixth update (10/09/09): Fixed a memory leak.  Using the profiler is likely to reveal a processing spike about every 10 seconds.  To do it I&#39;ve added Gnoga. js for WebGL and Canvas rendering across desktop and mobile web browsers.  Wineskin is a Mac app that brings Wine to your Mac, OS X style, allowing you to create custom packages including everything your favorite Windows programs need to run on your Mac (well many of your favorite Windows programs). js, a free 2D game editor based on web technologies.  It is a super set of ES6 Promises designed to have readable, performant code and to provide just the extensions that are absolutely necessary for using promises today. top 005.  Legend.  To remove a mask, set this property to null.  Find user guides, video tutorials, software downloads and more.  As such, the accumulation is not a leak per se. 2, we decided to push out one more (we hope it will be the last) beta release, beta-4.  Also coming soon, an iPad tablet app will be part of JS // @description A script that runs the Steam Monster Minigame for you.  We are working very hard on getting the next version of Smart Mobile Studio ready for x-mas.  Seems like over 100 fonts the The next update to Smart Mobile Studio.  _by Igor Neuhold.  This allows for much faster masking in canvas as it utilities shape clipping.  Covering smartphones, laptops, audio, gaming, fitness and more The latest gadget and technology news, reviews, buyer’s guides and features. someRef, myArray = [], someClass. clear(), delete someClass.  Thanks for contributing an answer to Stack Overflow! Please be sure to answer the question. top 008.  An instance can be shared between multiple Text objects; then changing the style will update all text objects using it.  in Jade or simply mustache. 1 to 1.  OR a with c, the other part of the number of bytes to fill, and leave the result in a.  but first time just after load, the first button looks like selected.  I did about 8 rounds for the Pixie Blanket squares. com -- Powerful and Affordable Stress Testing Services.  bits&#39; worth) or of memory (about a megabyte, or 9/8 megabyte (if one accounts for difference between 32. js is then used to adjust camera position in the update method of main.  Bug: Memory leak check in pixi-tilemap implementation has a bug. 9 https 100 original 2011 New Apple iPad 2 64GB 3GWiFi Does It Cost Only 30 US Beware Of Chinese Internet Wholesale Sites! C2Coffer shanghailove68 Flash Memory Seller – Warning Test Immediately! 1: PIONEER MVH-Z5050BT MECHLESS CARPLAY ANDROID/APPLE: 1: Verkaufen Sie Ihr Apple Produkt schnell und sicher! 1: FBI and Apple: 1: Medicinal Uses of Apple In order to mitigate the potential losses from such an early leak, the artist has made the album available officially via iTunes, letting fans purchase the tracks legally. js High memory usage while using Internet Explorer 11 For recent trip I bought a cheap Computer just to send emails.  Subscribe to this blog.  Hi, I&#39;ve used valgrind on tutorial-03 and as far as I can tell Gnoga seems to leak memory. js file. onRemoveAsAChild new function.  3 Jan 2019 A memory leak occurs when you may no longer need an object but the JS runtime still thinks you do.  Aug 31, 2019- Download TPS Xiaomi 2018 Mi Account Unlock Tool - A Hasam Tech Info Description Description A to Z Coffin Box Truckload High Piece Count 26 Pallets Manifested FOB TN Cost $17,560.  Also samsung needs to stop selling phones with only 8 gig storage memory. top Search the history of over 380 billion web pages on the Internet.  All of those initiated inside the init method of main. 4-Removed notification when you send SMS-Fix to remove whitespace from begin and end of some text messages-Remove flick to switch screen as it is buggy Mobile Prices in Pakistan 2018, Daily Updated Mobile Prices, What Mobile Pakistan, Prices Lg mobile, Nokia Mobile Prices Pakistan HTC Mobile Rates, Huawei Mobile Prices, Samsung Mobile prices, Sony Ericsson Mobile LG Product Support &amp; Contact Information.  I can login/logout and I can grab User info and display it in my pug templates.  Angular Questions. We will be more than happy to have a go at helping you with your issue if you could provide us with a fully working example of the test that you created above.  The phone is running lollypop and has only 8 gig storage memory.  Web page rendering for the NYT site was down from 34 to 15 seconds, and the Sunspider JS test went from 34. top 00.  {&quot;version&quot;:3,&quot;file&quot;:&quot;pixi.  In the Linux kernel, if memory is being overcommitted, it results in the kernel out-of-memory (OOM) killer kicking in.  If there is a memory leak, we should identify where it is and which platform it affects.  node. top 009.  See more Is it a memory leak problem? 03:12:07 &lt;Draggor&gt; node. 0. js&quot;,&quot;.  Code Splitting allows to load parts for the application on demand.  Our customer service experts are here to help.  - New UI! We&#39;ve reworked both the whole ingame menu + the The database has made fantastic advancements, but optimization was a step in the wrong direction. Sprite object.  Random GO~ Category Find answers to your angular js questions.  He runs the site Sarmal. com add to compare Chaos Group is the developer of the V-Ray rendering engine and provides fast rendering solutions for CGI - 3D animation, architectural and VFX studios, games, advertising and broadcasting companies.  If I&#39;m not good at designing, are there any templates etc.  If you are already running the beta-2, you can just start the SmartUpdate program and it will fetch the new version. top 019. ca/fr/ip/umbra-gridart-cadre-multivues-gridart-pour-16-photos-format-10x10cm-instagram-dimension-du-cadre-4322x432x32cm-coloris-bois-laqu-blanc Full text of &quot;The history of the decline and fall of the Roman empire&quot; See other formats Optimizing JS is such a pain. Multi_Connect.  However, you can essentially skip almost all those steps when using autodesk character generator.  Fixed: Delete field values for certain input names.  And they end up getting a lot of attention and page hits from sites like this, so it&#39;s a vicious cycle, with people repeating this &#39;information&#39; to others.  Repro: this is caused by repeatedly clearing a Graphics object and then calling drawRect from WebGL. js library being included in RPG Maker MV projects.  Running out of memory on a host is a particularly nasty scenario. js - a full-body system with springs, constraints and polygon support.  If you load objects and dispose of them, as in removing references to it (someMap.  Feb 21, 2019- Explore AJ’s Design Artz Card Designer&#39;s board &quot;Cards and Tags&quot;, followed by 5873 people on Pinterest.  I did feel some national pride when realizing that this library has been built by a fellow frenchmen.  Before releasing the final version of Smart Mobile Studio 2. 0 to version 1. config.  by Anmol. Application. js.  If Tween.  Added January 23 2017.  We work every day to bring you discounts on new products across our entire store. 3.  Identify JS heap memory leaks with Allocation Timelines. 2 to 15. dart. -Enhanced undo/redo in scene editor. 1 which results in a better perfomance and more possibilities in terms of pixi integration! Thanks to this as example I was able to solid 60 FPS on my low end device for testing, before the update it was struggling to keep 30 FPS.  Fixed: Issue where logging out on idle timeout could prevent re-login.  First there has to be a texture defined for the animation, and second, if it should be a continous animation, than the animFrames have to of type animationFrame.  &gt;-&lt;&quot; PIXI Text memory leak #7 is the latest revision. net is your game development community. js which is hopefully quite close to Phaser and seems more reliable since there is no more glitches for a large number of stars.  The scene is static most of the time but even then my CPU and cooling fan are going wild.  oomd is a userspace out-of-memory killer. command337 (Show Battle Animation) now updated to work with new Editor update.  HTML 5 Shoot &#39;em Up in an Afternoon. {method} is not a function Do I have a memory leak? (nodejs) node.  Home; Microsoft Edge Issue – The requested resource requires user authentication.  r Modify the JS memory reporter to consider a string as &quot;notable&quot; if we have many small oomd is a userspace out-of-memory killer. 5 years ago Clone via HTTPS Clone with Git or checkout with SVN using the repository’s web address.  Game_Interpreter.  I have a simple SVG in which there is an element rotating around a circular path.  Forums to get free computer help and support.  Book Learn PixiJS: Create Great Interactive Graphics for Games and the web _by Rex van der Spuy. js or ask your own question.  In PixiJS a regular mask must be a PIXI.  Copy b, part of the number of bytes to fill, into a.  Learning, knowledge, research, insight: welcome to the world of UBC Library, the second-largest academic research library in Canada.  Whether you&#39;re looking for memorable gifts or everyday essentials, you can buy them here for less. /textures/Texture&#39;; import GraphicsData This value variable of the Trackpad.  The latest gadget and technology news, reviews, buyer’s guides and features.  Random GO~ Category With 20 villagers on a no wave sandbox, running for many hours only results in 300-450 mb of memory used.  Join squares together by laying right side up, side by side, and whip stitching through back loops, matching up stitches.  Just months after winning a bunch of 600MHz spectrum in an FCC auction, T-Mobile has begin to deploy its new coverage. How do I identify who is logged in in the front end code where the socket.  twitter&#39;s boilerplate is too much since it also includes an entire framework etc. /.  Textures loading error(JS Animation) javascript,animation,pixi.  It’s long been one of my more popular posts, so I thought it was high time for a follow-up about how things have gone.  v0. 53179 -Fixed important memory leak when events were modified.  Credits: This tutorial is written by Volkan. myObj = null, ), but something still references it somewhere, then it stays in memory.  hi justin, i added that [toggleNav setMomentary:YES]; to make buttons clickable although it is selected.  Is this true? I see the Pixi.  Includes 200+ optional plugins (rails, git, OSX, hub, capistrano, brew, ant, php, python, etc), over 140 themes to spice up your morning, and an auto-update tool so that makes it easy to keep up with the latest updates from the community. js, where the lineTo method seems to draw lines that aren&#39;t specified. Graphics object once and then calling clear() on the Graphics FWIK, Pixi keeps track of the generated texture in case of a context loss, so it can re-upload your texture in the video memory, so yes, keeping track of it is necessary. top 018.  As the plugin is integrated with a code management system like GitLab or GitHub, you may have to auth with your account before leaving comments around this article.  This post contains a comprehensive list of all Alcatel Android smartphones stock firmware files. js Common Mistakes With Adding Custom Fonts to Your iOS App.  after 10 seconds stop it and notice the ever growing green nodes-line.  Bugfix: Fixed an issue that could cause character movement to be saved incorrectly in replays.  if i click the first button second time it works fine. WebGLGraphics. js for the webGL drawing code if I remember correctly and Pixi is supposed to fall-back to plain canvas rendering if webGL isn&#39;t supported -- so disabling WebGL for the site may make the solitaire site work. RenderTarget leaking.  I wrote caches can usually be ignored, because in my case the jQuery element cache was holding some memory.  Showed running js remotely in Chrome, with websocket communication between iOS simulator between Chrome, could run js remotely in the future, or run js remotely in the server.  This will also fix inherent bugs that can be found in Pixi version 2 and 3.  Added Pixi.  java. js&quot;,&quot;node_modules/earcut Subscribe to this blog.  The bad lines aren&#39;t uniform width (seem to taper off towards the ends) and are much longer tha Documentation for PixiJS library.  T-Mobile announced today that its first 600MHz LTE sites are now live in data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAAB4CAYAAAB1ovlvAAADOUlEQVR4Xu3XQUpjYRCF0V9RcOIW3I8bEHSgBtyJ28kmsh5x4iQEB6/BWQ // IMPORTANT: Update the @version property above to a higher number such as 1. 9 https://www. js that referenced this&nbsp; Hi I am using PIXI and I am destroying textures whenever necessary.  Can I use WebGL? Compatibility table for support of WebGL in desktop and mobile browsers. -Added modulo function.  debugging methods constructor pixi.  See the complete profile on LinkedIn and discover Johan’s Follow @fabricjs; Fabric.  93 prom Georges Pompidou 13008 MARSEILLE again, trying to figure out what changed and why, I can fix it by causing a memory leak which wouldn&#39;t be fun, but I need to know why the browser&#39;s telling the terminal-plugin to deallocate something in the wrong part of memory Jan 15 19:25:08 so I&#39;m still debugging alas Jan 15 19:28:36 destinal, i&#39;m going to tell the owner of webos-internals 9780816638819 0816638810 Time Passages - Collective Memory and American Popular Culture, George Lipsitz 9780793572380 079357238X Breaking through - From Rock to Opera - the Basic Technique of Voice, Gloria Bennett 9780871241795 087124179X The Persian Gulf in Transition, Lawrence G. ca/en/ip/Kingston-Brass-KZGKUS3018F https://www.  So, I changed to Pixi.  Cookies.  Matt Woodrow — Bug 900133 - Fix leak reporting for MemoryTextureHost. 0 working via Passport. io/s/ qz22m03nw4. com, a bilingual site featuring all his work, products, services, and up-to-date profile information in English and Turkish.  Samsung&#39;s got you covered with its microSDXC memory expansion cards.  You lost the pointer to the memory location when you put.  JS has a GC. ) In this sense &quot;moby&quot; is often used as a generic unit of either address space (18.  And probably start to use other PIXI built in features, like the PIXI.  It had some memory leak issues at release too, which a fair amount has been taken care of through updates.  play awesome songs for fun, beat highscores or compete against friends.  The default is 6 but can be increased.  javascript Ne ratez pas les nouveaux rendez-vous du live le mercredi.  Android animations memory leak. js debugging memory-leaks Updated September 07, 2019 02:26 AM.  Minor GC vs Major GC vs Full GC February 25, 2015 by Nikita Salnikov-Tarnovski Filed under: Garbage Collection While working with the GC pause detection functionality in Plumbr I was forced to work my way through loads of articles, books and presentations about the subject.  Fifth Update (10/08/09): Fixed Load More button On Refresh of Unread items, removes read items Added All Items list to folders Added preferences to put how many articles to pull at a time.  and then if i click then first button it does not response.  Our site uses cookies.  Pixi.  à partir de 19h les apéros party avec tapas et sushis.  -(Note: It seems as if there is a memory leak in webOS1. 9 - March 17th 2015 -- Mac App We&#39;ve updated the MV Engine from 1.  The Pixi 3 line of smartphones will allow users to choose from one of three mobile platforms; Android, Windows Phone or Mozilla’s Firefox OS.  I&#39;m having an issue using Pixi.  Potter 9780548306024 0548306028 Plautus and Terence, W. net is the newest member of the Smartphone Experts family of sites and as you may expect, is going to be closely tied to the always-popular TreoCentral.  That Sprite_Button class, man It is just evil.  Making a sprite animation in QML.  https://www.  2 answers 69 debugging related issues &amp; queries in StackoverflowXchanger. 88 - March 18th 2015 -- Windows Metro App.  – MrJingles87 Mar 15 &#39;18 at 21:39 JS has a GC.  Continue reading There seems to be a memory leak issue with this plugin.  the image cache and other resources are consuming very less memory.  Clone via HTTPS Clone with Git or checkout with SVN using the repository’s web address.  This is a simple implementation of Promises.  A huge length is returned, and many points are allocated to it, it’s good that there was a restriction from above, and according to it it worked.  Fixed: Memory leak on pages that rapidly dynamically adds and removes inputs.  Sets a mask for the displayObject.  Repro: this is caused by&nbsp; 25 Jan 2015 Chrome Mobile crash with TileSprites &amp; WebGL (memory leak) #1381 darionco pushed a commit to TrompoGames/pixi.  The Allocation Timeline is another tool that can help you track down memory leaks in your JS heap.  I have a node js app with Google oAuth2.  - New UI! We&#39;ve reworked both the whole ingame menu + the Label layout example. 1, the issue seemed to be fixed in 1.  DoFollow Blogs list is the largest Free Do Follow Blog Directory of blogs that follow. js debugging memory Buy and sell electronics, cars, fashion apparel, collectibles, sporting goods, digital cameras, baby items, coupons, and everything else on eBay, the world&#39;s online marketplace Also, Phaser, the library GP is using uses Pixi.  It had limited memory but I don&#39;t recall how much and it is away again just now.  Turning an avatar into a 3rd person character. 7.  3 years ago … Back in 2014 (2014!) I wrote a blog post about starting to use a password manager. js Scene_Map. g. pushMask and popMask are now more robust in checking that they have been given valid mask data (#2152) PIXI.  It’s a higher-level framework: it’s bigger and may feel like you have much less webpack by webpack - A bundler for javascript and friends.  Posted on June 14, 2018 by slee423.  Line not drawing to canvas with pixi.  Forth Update (10/07/09): Added Anchor click fix Added toggle for all or only unread items.  A fast, free and fun open source framework for Canvas and WebGL powered browser games.  Simply slide the card into the expansion slot of your Android™ smartphone and add 512GB of capacity.  by Scott Matteson in Mobility on March 10, 2014, 1:55 PM PST Selecting “Clean Junk” can restore some of your memory, making your Android have to Find all the information you need to make the most of CPAP therapy and treat Sleep Apnea.  JavaScript and memory leaks.  I investigated this and figured out a fix already; I just wanted to file an issue first before making a pull request.  See more ideas about Phone, Smartphone and Old phone.  It’s been a long wait, but our latest single board computer for review is finally here! The BBC micro:bit, given free to every seventh-grade British child, has landed at Hackaday courtesy of a Memory size - User memory is less than the total memory due to storage of the operating system and software used to operate the phones features.  RPG Maker MV 1.  Install Windows software on your Mac without the need for a virtual machine, an emulator or dual-booting. -Added special paste in scene editor. js&quot;,&quot;node_modules/bit-twiddle/twiddle.  bronchial spasms. js library. com email notifications and we will let you know about sales in your area! You may set up alerts by area (zip and radius), keywords, and by company. top 003.  We&#39;ve updated the MV Engine from 1.  Update Link.  Writable stream that concatenates all the data from a stream and calls a callback with the result.  But after a while, the&nbsp; 24 Mar 2017 I investigated this and figured out a fix already; I just wanted to file an issue first before making a pull request.  Internally, it run a real JS engine, using JSCore this time.  AUDIOFOCUS_GAIN in android; Audio Focus state is never equal to AudioManager.  I&#39;ve encountered some issues with Phaser which seemed to leak into memory above 700 stars --- and drew me lines instead of circles. 6 seconds.  And it needs to allow unused rubbish to be removed.  bullet generation approach is it’s essentially a memory leak This could mean a potential memory leak, and we want to avoid that.  Loading Loading A financial advisor ben 10 omnitrix watch The Milwaukee Journal Sentinel now is offering JS Everywhere, a new digital subscription package, which gives you unlimited access to JSOnline, the daily e-Edition, Journal Sentinel mobile site and content previously included in Packer Insider. /packages Macworld’s tests show some impressive gains. top 02.  it is necessary to call `destroy()` to properly dereference the underlying; * GraphicsGeometry and avoid a memory leak. io for real-time comms. -Correction displacement in scene editor using mouse wheel.  do you have any idea about Question: Tag: animation,extjs,extjs-mvc Afternoon everyone, I have a displayfield and i would like to implement a constant blinking animation for it.  if i click the second button instead of the first button it works fine too.  rpg_scenes.  Does JS offer a garbage collector solution as other languages do? The only memory leak I&#39;ve had in JavaScript was when using Pixi.  Alcatel OneTouch has announced its latest range of Pixi smartphones which will arrive with the rather unique ability to run one of three operating systems.  Day one (1) will start off with the very basics of C# and Visual studio and slowly progress through a variety of topics as they pertain to web service hardening. 3 Changelog Strictly an editor update.  However, equally important to the rise of Node.  MP4Box is a multimedia packager, with a vast number of functionalities: conversion, splitting, hinting, dumping and others. js message in console even prettier; Update PIXI to v5 . JS Error: this.  Not enough for modern phones. js&quot;.  How to add two header to the table? Posted on October 8, 2019 by user12094588.  I created a cool trail effect in &quot;circle. js&nbsp; This is useful if your graphics element does not change often, as it will speed up the rendering of the object in exchange for taking up texture memory.  All Game Objects have a new property: destroyPhase (boolean) which is true if the object is in the process of being destroyed, otherwise false.  PhoneArena is the premium website for new phone information such as full specifications, in-depth reviews, latest news, carrier available and upcoming phones.  There’s been another new RPG Maker MV update! This time, from version 1.  or you can have a memory leak: Browse other questions tagged dart pixi.  People seem to be using to do some really interesting things.  It is a command-line tool.  TextureManager class contains Texture and RenderTexture instances, and Textures will be destroyed by TextureGarbageCollector class after running GC.  There are 3 main views that are being rendered if I understand it correctly: ScrollView, ScaleView, RocketView.  The leak was the second high-profile album leak in the past two months, after most of the tracks for Madonna&#39;s upcoming album hit the Web in December. marthastewart. js issue tracker today, and I thought &quot;hmm I should remark that it also syncs with monitor refresh rate&quot;, and I scrolled further down and saw myself making that exact comment 1.  The square will increase by 16 stitches (four per side) on each round.  Beyond Memory Leaks in JavaScript.  All the JS is constructed by a compiler compiling some graphically constructed programs, but there are some user-supplied strings mixed in there. js v1.  This memory leak bug is caused by PIXI.  However, when I&#39;m debugging/updating multiple long custom AIs, switching between the AIs seems to leak memory with the footprint increasing slowly to about 700-1000 mb of memory used. com paperroses fat boys place connellsville pennsylvania hotel la botica vejer spain a doll house boysex sturgis. stencilBufferLimit is a new integer that allows you to define how many points exist in a Graphics object before Pixi swaps to using the Stencil Buffer to render it. js Do I have a memory leak? (nodejs) node. io Pixi tutorials.  Then increase hl (the actual registers, not the memory) by 1.  This gadget is said to be featured with Vega X DDR2 RAM memory chips and it is said that this chip will provide the high speed performance that one gets in a Laptop or notebook and moreover it is about 1. 60GHz (with a Max Turbo Speed of 4.  It’s been a long wait, but our latest single board computer for review is finally here! The BBC micro:bit, given free to every seventh-grade British child, has landed at Hackaday courtesy of a If I&#39;m not good at designing, are there any templates etc. top 017.  The Enyo framework itself has some fantastic developer ergonomics, especially around layout and the event design, which also helps make sure that you don’t leak memory (obviously a huge thing on mobile).  How about When we work longer time on same browser (Angularjs SPA app) the memory allocation keeps on increasing while we click.  Expand Smartphone Memory in a Snap. io.  I am seeing that in the chrome task manager, the image cache and other resources are consuming very less memory.  Actual user memory will vary depending on the mobile phone operator and may change after software upgrades are performed.  Phaser is a fast, free and fun open source HTML5 game framework.  GameDev.  Game_Actor.  Ares developers have told us time and again how fun it is to write apps.  The first ever alpha version of ct.  23194; Members.  It is the base class of all display objects that act as a container for other objects (like Sprites).  And if there is a memory leak we will make sure to squish it out of the engine :) Cheers! I don&#39;t believe this is a memory leak.  48; HOT QUESTIONS.  MIT-AI has four mobies of address space: moby 2 is the PDP-6 memory, and moby 3 the PDP-11 interface. js 2017-06-06 | index the real bug is that there&#39;s JS running directly in the global scope :-) upgrading node7 to node8 brought my stable memory usage During one of the discussions related to burninating tags, one of the reasons against burning some tags was that many people use it to ignore a particular set of questions. terminate updated to fix memory leak bug. 1 and 1.  Sign up for the GoToAuction.  &gt; This update will most likely happen in Version 1. io client code would go?Basically I want the user to be able to log in, then chat/send messages as themselves to CYBERPOWERPC Gamer Supreme Liquid Cool SLC8540W Desktop PC: Key Features and Benefits: AMD Ryzen 7 1800X processor3. /textures/RenderTexture&#39;; import Texture from &#39;.  Get the latest news headlines on Buy the latest mobile phones on pay monthly and pay as you go.  Samsung needs to patch this phone to allow apps to be used from the additional storage card.  Bugfix: Fixed a memory leak when recording a replay on a client that was built using a client-only executable configuration.  You are better off creating a new PIXI.  Vendas do MacBook podem ser melhores que iPad e iPhone - Leak How to Recover Lost Apple Mail Data from macOS High Sierra - MustTech News Apple vai-se focar na performance do seu software - Leak Asymco analyst Horace Dediu this week shared new research that focuses on determining the average lifespan of Apple devices.  While there will be bug fixes to the IDE (and a few new features as well), this update is primarily an update for the RTL and run-time library.  Some of the potential benefits of this are smaller development teams and faster development cycles, in part because it&#39;s no longer necessary to maintain separate teams of back-end and front-end developers.  Create an account for your GameDev Portfolio and participate in the largest developer community in the games industry. 10541.  Domain 0. Application, with it sweet FPS control and deltaTime in update. ca/en/ip/Glitter-6oz-Raspberry https://www.  Best replicated by using a weak CPU. js is a powerful and simple Javascript HTML5 canvas library Fabric provides interactive object model on top of canvas element Desktop and Mobile HTML5 game framework.  {&quot;version&quot;:3,&quot;sources&quot;:[&quot;node_modules/pixify/node_modules/browserify/node_modules/browser-pack/_prelude.  PreCentral.  Use your phone abroad at no extra cost with Three. ca/en/ip/400pcs-Black-Car-Push-Pin-Rivet-Fastener-Bumper-Door-Retainer-Trim-Moulding-Clip/PRD126LC9339TZ1 daily 0.  When finishing off, leave a long tail to sew squares together.  View Phil Glanville’s profile on LinkedIn, the world&#39;s largest professional community.  promise. js engine, so there&#39;s probably some ways to dive deeper with that if Version 2.  Table of Contents built on top of Pixi.  GitHub Gist: star and fork samjohn&#39;s gists by creating an account on GitHub.  It is now a valuable resource for people who want to make the most of their mobile devices, from customizing the look and feel to adding new 10 tips to improve Android battery life. NET based web services. 2, I noticed the videos never get released completely from memory, despite using the release command.  Impact Physics for advanced tile support and Matter.  Select your device-suitable firmware from list below to download and flash on your device.  Read tons of reviews on CPAP Machines, Masks &amp; Supplies.  in chrome, debug timeline, record and run this test.  Leave a comment.  &quot;Over July and August 2018, through Secure-D, we observed a higher than usual number of transaction attempts in Brazil and Malaysia coming from a series of Alcatel Android smartphones (Pixi 4 and Class Summary: This hands on, two (2) day class will help students learn how to write hardened ASP.  I have also provided my expertise regarding memory leaks, shaving dozens of MB of memory leak, some having source in 4 years old code, and providing charts showing clearly the difference before and after the changes. 00GHz), 16MB L3 Cache32GB DD https://www.  heritage motor centre, gaydon functions ifad wow porn guitar sheet music john conley mode memory blade 12848 www.  The last thing you want to happen when you&#39;re ready to capture that priceless moment with your smartphone is run out of memory.  return *node; //Note: derefencing returns an object of type MYSTRUCT instead of ChallangePost gallery; Stroke uniform property; Superscript / subscript; Event inspector; Realtime lanczos; Loading custom fonts; Copy and Paste; Manage selection Phaser小站是一个为phaser而生的网站，以宣传和发展Phaser为使命。本站提供一切关于Phaser的案例、源码、教程、教学视频。 🙃 A delightful community-driven (with 1,300+ contributors) framework for managing your zsh configuration.  All js modules that don’t depend on the browser will work. js is one of them.  r Modify the JS memory reporter to consider a string as &quot;notable&quot; if we have many small concat-stream. ca/en/ip/WALFRONT-Replacement-Engine-Gaskets-Repair-Kit-Replaces-for-kohler-K482-K532-K582-Gasket-Engine-Gasket/PRD41Y6GL3ER684 daily 0.  Hi I am using PIXI and I am destroying textures whenever necessary. yoyo was true but repeat was 0 then it wouldn&#39;t yoyo. /node_modules/object-assign/index. 5-Fix for polling issue.  PIXI.  Covering smartphones, laptops, audio, gaming, fitness and more TexturePacker only opens a file once (issue 429) Added the current scale to JSON output format meta data (issue 407) Removed refresh button - TexturePacker now updates the textures when entering the app (issue 299) Speedup for rendering sprites; Red colored sprites in demo mode get a text to make it more obvious We&#39;ve updated the MV Engine from 1.  Launching apps went from 12, 20, and 10 seconds to 7, 15, and 5 for Peggle, HR Battle, and Rolando 2 respectively.  That article gives a good overview of what is required.  rose mcgowan Hello!Today we’re releasing SFT Dongle v314 This version is also considered latest version for their first dongle was called Secure X Dongle which this version is the latest support until they now use a new dongle called SmartCard Dongle The SmartCard dongle was released in 1-3-2018 where they launched new module v1011 They no longer make any Get full access to 3dfxzone. 64 Call for freight quote today! MSRP-$175,606. _mangedTextures array.  Boot went down from 31 to 19 seconds.  Johan has 7 jobs listed on their profile.  import Container from &#39;.  It features advanced phone filter, visual size comparison and 360 degree views of all hot phones. isLearnedSkill function updated to now include skills added through traits. End_Application; in one of the button click handlers to make it possible to stop the Gnoga web server without using ctrl+c.  Enable local code completions; Make ct. top 006.  An online discussion community of IT professionals. com and find the best online deals on everything for your home.  Shop Overstock.  - New UI! We&#39;ve reworked both the whole ingame menu + the #node.  My only problem is with the new screens and textures getting loaded, the GPU memory increases (Like 5-10 mb on every activity).  Use this when you want to collect all the data from a stream into a single buffer.  1 min.  I am still new to ExtJs and brand spanking new to animations.  It is very easy to get going, and this goes beyond the great tools.  The PIXI.  If you could upload it somewhere so we can download and test the issue that would be ace. /display/Container&#39;; import RenderTexture from &#39;.  xda-developers Windows 8, RT Development and Hacking Windows RT Development and Hacking Trident Sandbox : Sandbox Scripting IDE by nazoraios XDA Developers was founded by developers, for developers. The next thing I want to setup is socket.  Lucas I have implemented a music visualizer here: https://codesandbox.  &gt; This will in turn fix a lot of the issues RPG Maker MV is facing and to some extent, some of the memory leak causes.  prallax, battleback leak patch: 遠景、戦闘背景に対するリークパッチ.  Phaser ships with support for 3 physics systems: Arcade Physics, an extremely light-weight AABB library perfect for low-powered devices. 1! Here are the changes made by this update! A 155 page book, that comes with 28 source code examples and is written by Emanuele Feronato, one of the most prolific Phaser tutorial authors around. You can expect PreCentral.  Fix memory leak when updating room with opened backgrounds tab&nbsp;. net to be the leading Palm Pre focused site on the web, bringing you the latest Pre news, Reviews of Pre Accessories and Software, and will of course be home to best Palm Pre Forums around. js&quot;,&quot;sources&quot;:[&quot;. It introduces the new WebGL-based renderer, that gives your projects a significant speed boost and opens an avenue towards more complex and fascinating visual tools, like particles, 9-patch rendering, skeletal animations, tinting, and more! View Johan LAJILI’S profile on LinkedIn, the world&#39;s largest professional community. renderWebGL updated to work with PIXI.  Using debugger, Take a Snapshot, you can see increase the length of TextureManager. js has been the ecosystem that developed around it and its package manager, npm.  See more ideas about Handmade cards, Homemade Cards and Heartfelt creations cards.  Bugfix: Fixed an issue causing improper http header parsing when one or more of the headers are empty.  What you did in your source code is something called a memory leak; ie: you lost the address of memory you allocated, so you can no longer free the memory.  GitHub Gist: instantly share code, notes, and snippets.  This bug is likely to occur in that case. initialize function updated to fix memory leak.  That means they have memory leak when switching between scenes, because they dont But if the cache is somehow buggy or never gives any memory back, I guess it is a memory leak.  13 Nov 2017- Explore Gazlloyd&#39;s board &quot;My mobile phone history&quot; on Pinterest.  ThePendulum: funny story actually, I was reading through a thread about requestAnimationFrame on the fabric. -Switching between preview and edition mode is now much more faster. pixi js memory leak</span></li>

</ul>

</div>

<p><img src="" alt="android external storage" class="aligncenter size-medium wp-image-9431" srcset=" 243w,  11w,  328w" sizes="(max-width: 243px) 100vw, 243px" height="450" width="243"></p>

<br>

</div>

</div>

</div>

</div>

</div>

<div class="newsletter">

<div class="box is-fluid">

<div class="newsletter__wrap">

<div class="form-subscribe">

            

<!-- This site converts visitors into subscribers and customers with the MailOptin WordPress plugin  -  -->

<div id="CpJbDPYgkC" class="moOptinForm mo-optin-form-sidebar mo-has-email" data-optin-type="sidebar" style="">

<div class="mo-optin-form-container" id="CpJbDPYgkC_sidebar_container" style="margin: 0pt auto; position: relative;">

<div id="CpJbDPYgkC_sidebar" class="mo-optin-form-wrapper mo-has-email gridgum_container" style="border-color: rgb(255, 255, 255); background: rgb(255, 255, 255) none repeat scroll 0%; position: relative; margin-right: auto; margin-left: auto; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; line-height: normal;">

<form method="post" class="mo-optin-form" id="CpJbDPYgkC_sidebar_form" style="margin: 0pt;">

  <div class="gridgum_body">

  <div class="gridgum_body-inner">

  <div class="gridgum_header2">Don't miss out!</div>

  <div class="mo-optin-form-headline gridgum_headline" style="color: rgb(75, 70, 70); font-family: 'Open Sans',Helvetica,Arial,sans-serif; display: none;">Subscribe To Newsletter</div>

  <div class="gridgum_body-form">

  <div class="mo-optin-fields-wrapper" style=""><input id="CpJbDPYgkC_sidebar_name_field" class="mo-optin-field mo-optin-form-name-field gridgum_input_field" style="color: rgb(117, 117, 117); background-color: rgb(255, 255, 255); height: auto; display: none;" placeholder="Email" name="mo-name" autocomplete="on" type="text"> <input id="CpJbDPYgkC_sidebar_email_field" class="mo-optin-field mo-optin-form-email-field gridgum_input_field" style="color: rgb(24, 24, 24); background-color: rgb(255, 255, 255); height: auto; font-family: Palatino Linotype,Book Antiqua,serif;" placeholder="Enter your email address here..." name="mo-email" autocomplete="on" type="email"> <input id="CpJbDPYgkC_sidebar_submit_button" class="mo-optin-form-submit-button gridgum_submit_button" style="background: rgb(104, 61, 211) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; color: rgb(255, 255, 255); height: auto; text-shadow: none;" value="Subscribe Now" type="submit"> </div>

  <input id="CpJbDPYgkC_sidebar_cta_button" class="mo-optin-form-cta-button gridgum_submit_button" style="background: rgb(0, 115, 183) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; color: rgb(255, 255, 255); height: auto; text-shadow: none; font-family: 'Open Sans',Helvetica,Arial,sans-serif; display: none;" value="Take Action Now!" type="submit"> </div>

  <div class="mo-optin-form-note gridgum_note" style="color: rgb(0, 0, 0); font-family: 'Open Sans',Helvetica,Arial,sans-serif; display: none;"><span class="mo-note-content">We promise not to spam you. Unsubscribe at any time.</span></div>

  <div class="mo-optin-error" style="">Invalid email address</div>

  </div>

  </div>

  <input id="CpJbDPYgkC_sidebar_honeypot_email_field" name="mo-hp-email" value="" style="display: none;" type="text"><input id="CpJbDPYgkC_sidebar_honeypot_website_field" name="mo-hp-website" value="" style="display: none;" type="text"></form>

<div class="mo-optin-spinner" style="display: none;"></div>

<div class="mo-optin-success-msg" style="display: none;">Thanks for subscribing!</div>

</div>

</div>

</div>

<!-- / MailOptin WordPress plugin. -->

<input id="CpJbDPYgkC_sidebar_honeypot_timestamp" name="mo-timestamp" value="1576127884" style="display: none;" type="hidden">          </div>



        </div>



      </div>



      

<div class="bottom-triangle">

    <img src="">

  </div>



</div>

	

	</div>

<!-- #content -->



	<footer id="colophon" class="footer">

		</footer>

<div class="box is-fluid">

			

<div class="footer__wrap">

				

<div class="footer__box footer--info">

					<section id="media_image-5" class="widget-odd widget-first widget-1 footer-logo widget widget_media_image"><img src="" class="image wp-image-32210 attachment-full size-full" alt="Logo Jdev" style="max-width: 100%; height: auto;"></section><section id="text-21" class="widget-even widget-last widget-2 widget widget_text"></section></div>

</div>

<!-- .site-info -->

		</div>



	<!-- #colophon -->

</div>

<!-- #page -->



<!-- Search Pop up -->

	

<div class="search_popup">

		

<div class="search-wrap">

			

<div id="ajaxsearchlite1" class="wpdreams_asl_container asl_w asl_m asl_m_1">

<div class="probox">



    

    

<div class="promagnifier">

                

<div class="innericon">

            <svg version="1.1" xmlns="" xmlns:xlink="" x="0px" y="0px" width="512px" height="512px" viewbox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">

                <path id="magnifier-2-icon" d=",,,,

                    ,,,50,,,50,,,,,,,,,

                    ,0,,,, ,,,

                    ,0,,,,,,,,,,,,

                    z">

            </path>

        </svg></div>



    </div>





    

    

    

<div class="prosettings" style="display: none;" data-opened="0">

                

<div class="innericon">

            <svg version="1.1" xmlns="" xmlns:xlink="" x="0px" y="0px" width="512px" height="512px" viewbox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">

                <polygon id="arrow-25-icon" transform="rotate(90 256 256)" points=", ,50 402.5,256 ,462 , ,256 ">

            </polygon>

        </svg></div>



    </div>





    

    

    

<div class="proinput">

        

<form autocomplete="off" aria-label="Ajax search form">

            <input aria-label="Search input" class="orig" name="phrase" placeholder="Search here.." value="" autocomplete="off" type="search">

            <input aria-label="Autocomplete input, do not use this" class="autocomplete" name="phrase" value="" autocomplete="off" type="text">

            <span class="loading"></span>

            <input value="Start search" style="width: 0pt; height: 0pt; visibility: hidden;" type="submit">

        </form>



    </div>

<br>

</div>

</div>

<div id="asl_hidden_data">

        <svg style="position: absolute;" height="0" width="0">

            <filter id="aslblur">

                <fegaussianblur in="SourceGraphic" stddeviation="4">

            </fegaussianblur>

        </filter>

        <svg style="position: absolute;" height="0" width="0">

            <filter id="no_aslblur"></filter>

        </svg>



    </svg></div>





<div class="asl_init_data wpdreams_asl_data_ct" style="display: none ! important;" id="asl_init_id_1" data-asldata="ew0KICAgICJob21ldXJsIjogImh0dHBzOi8vd3d3LmpvdXJuYWxkZXYuY29tLyIsDQogICAgInJlc3VsdHN0eXBlIjogInZlcnRpY2FsIiwNCiAgICAicmVzdWx0c3Bvc2l0aW9uIjogImhvdmVyIiwNCiAgICAiaXRlbXNjb3VudCI6IDQsDQogICAgImltYWdld2lkdGgiOiA3MCwNCiAgICAiaW1hZ2VoZWlnaHQiOiA3MCwNCiAgICAicmVzdWx0aXRlbWhlaWdodCI6ICI3MHB4IiwNCiAgICAic2hvd2F1dGhvciI6IDAsDQogICAgInNob3dkYXRlIjogMCwNCiAgICAic2hvd2Rlc2NyaXB0aW9uIjogMCwNCiAgICAiY2hhcmNvdW50IjogIDMsDQogICAgImRlZmF1bHRJbWFnZSI6ICJodHRwczovL3d3dy5qb3VybmFsZGV2LmNvbS93cC1jb250ZW50L3VwbG9hZHMvMjAxOS8wOC9kZWZhdWx0LWZlYXR1cmUtaW1hZ2UtMS5wbmciLA0KICAgICJoaWdobGlnaHQiOiAwLA0KICAgICJoaWdobGlnaHR3aG9sZXdvcmRzIjogMSwNCiAgICAic2Nyb2xsVG9SZXN1bHRzIjogMCwNCiAgICAicmVzdWx0YXJlYWNsaWNrYWJsZSI6IDEsDQogICAgImF1dG9jb21wbGV0ZSI6IHsNCiAgICAgICAgImVuYWJsZWQiIDogMSwNCiAgICAgICAgImxhbmciIDogImVuIg0KICAgIH0sDQogICAgInRyaWdnZXJvbnR5cGUiOiAxLA0KICAgICJ0cmlnZ2VyX29uX2NsaWNrIjogMCwNCiAgICAidHJpZ2dlcl9vbl9mYWNldF9jaGFuZ2UiOiAxLA0KICAgICJzZXR0aW5nc2ltYWdlcG9zIjogInJpZ2h0IiwNCiAgICAiaHJlc3VsdGFuaW1hdGlvbiI6ICJmeC1ub25lIiwNCiAgICAidnJlc3VsdGFuaW1hdGlvbiI6ICJmeC1ub25lIiwNCiAgICAiaHJlc3VsdGhpZGVkZXNjIjogIjEiLA0KICAgICJwcmVzY29udGFpbmVyaGVpZ2h0IjogIjQwMHB4IiwNCiAgICAicHNob3dzdWJ0aXRsZSI6ICIwIiwNCiAgICAicHNob3dkZXNjIjogIjEiLA0KICAgICJjbG9zZU9uRG9jQ2xpY2siOiAxLA0KICAgICJpaWZOb0ltYWdlIjogImRlc2NyaXB0aW9uIiwNCiAgICAiaWlSb3dzIjogMiwNCiAgICAiaWl0ZW1zV2lkdGgiOiAyMDAsDQogICAgImlpdGVtc0hlaWdodCI6IDIwMCwNCiAgICAiaWlzaG93T3ZlcmxheSI6IDEsDQogICAgImlpYmx1ck92ZXJsYXkiOiAxLA0KICAgICJpaWhpZGVDb250ZW50IjogMSwNCiAgICAiaWlhbmltYXRpb24iOiAiMSIsDQogICAgImFuYWx5dGljcyI6IDAsDQogICAgImFuYWx5dGljc1N0cmluZyI6ICIiLA0KICAgICJyZWRpcmVjdG9uY2xpY2siOiAxLA0KICAgICJyZWRpcmVjdENsaWNrVG8iOiAicmVzdWx0c19wYWdlIiwNCiAgICAicmVkaXJlY3RDbGlja0xvYyI6ICJzYW1lIiwNCiAgICAicmVkaXJlY3Rfb25fZW50ZXIiOiAxLA0KICAgICJyZWRpcmVjdEVudGVyVG8iOiAicmVzdWx0c19wYWdlIiwNCiAgICAicmVkaXJlY3RFbnRlckxvYyI6ICJzYW1lIiwNCiAgICAicmVkaXJlY3RfdXJsIjogIj9zPXtwaHJhc2V9IiwNCiAgICAib3ZlcnJpZGV3cGRlZmF1bHQiOiAwLA0KICAgICJvdmVycmlkZV9tZXRob2QiOiAiZ2V0Ig0KfQ0K"></div>



		</div>



	</div>



<!-- End Pop up -->



<!-- Global site tag () - Google Analytics -->



<!-- 





-->

<svg xmlns="" id="scriptlesssocialsharing-svg" style="display: none;" role="img">

  <symbol id="envelope" viewbox="0 0 512 512">

    <path d="M502.3   9.7   48-48 48H48c-26.5    22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6  72-32.8  102-74.1            64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 "></path>

  </symbol>

  <symbol id="envelope-square" viewbox="0 0 448 512">

    <path d="M400  32 0  0 80v352c0   48 48  0       64    0 24  24          24-24                   "></path>

  </symbol>

  <symbol id="facebook" viewbox="0 0 512 512">

    <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0         0          504  504 256z"></path>

  </symbol>

  <symbol id="facebook-f" viewbox="0 0 320 512">

    <path d="    0     "></path>

  </symbol>

  <symbol id="facebook-square" viewbox="0 0 448 512">

    <path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48     0         48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path>

  </symbol>

  <symbol id="get-pocket" viewbox="0 0 448 512">

    <path d="M407.6 64h-367C18.5 64 0 82.5 0  364.5 99.7 464 224.2 464c124 0      0C89.5 223.6 88.3 227.4 88.3    17 0 16.1 3.8 105.2 89.3    16.9 0 30.7 13.8 30.7 30.7 0   "></path>

  </symbol>

  <symbol id="linkedin" viewbox="0 0 448 512">

    <path d="M416  32 0 46.5 0  465.5 14.3 480 31.9 480H416c17.6 0 32-14.5    96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0     0-39.9 27-39.9    67.2 0 79.7 44.3 79.7 "></path>

  </symbol>

  <symbol id="linkedin-in" viewbox="0 0 448 512">

    <path d="   108.1 0 83.5 0   0 0 1  0c0          94 0  61.9  "></path>

  </symbol>

  <symbol id="pinterest" viewbox="0 0 496 512">

    <path d="M496 256c0 137-111 248-248 248-25.6     3-11.6   8.1 15.4 31.7 28.5 56.8 28.5 74.8 0    0-163.9  150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2  5-20.3  0-54.7  112-107.6 60.9 0 103.6 41.5 103.6 100.9 0     7-29.5    0-44.9  60.2 0 22 7.4 36.8 7.4       450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"></path>

  </symbol>

  <symbol id="pinterest-p" viewbox="0 0 384 512">

    <path d="M204  6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0    0-80.4   68.1 0 118.5 38.7 118.5 109.8 0     0-37.8    25.8 0 16.8 2.1 35.4 9.6    209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5    12.3 23.4 44.1 36 69.3 36 106.2 0   71.3 298.2 6.5 204 "></path>

  </symbol>

  <symbol id="pinterest-square" viewbox="0 0 448 512">

    <path d="M448 80v352c0  48-48    3-11.5   8 15.3 31.4 28.2 56.3 28.2 74.1 0    0-162.2  148.6 0 36 19.2 80.8 49.8 95.1 4.7 2.2 7.1 1.2  5-20.1  0-54.2 41-106.6  60.3 0 102.6 41.1 102.6 99.9 0         25 0 21.7 7.3 36.5 7.3       48-48h352c26.5 0 48 21.5 48 48z"></path>

  </symbol>

  <symbol id="reddit" viewbox="0 0 512 512">

    <path d="M201.5   0-13.8   13.6 0 24.6 11.1 24.6 24.9 0    256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248  0-17.7   55.4  13.6 11.1 24.6 24.6 24.6 13.8 0   0-18         0-46.3   5-1.7  15.5 0 52.6 59.2 95.2 132 95.2 73.1 0      331c-18.2    0-2.5  6.4 0 8.6 22.8 22.8 87.3 22.8 110.2 0     0-24.6  24.9 0 13.6 11.1 24.6 24.6 24.6 13.8 0   "></path>

  </symbol>

  <symbol id="reddit-alien" viewbox="0 0 512 512">

    <path d="M440.3  0-28.2     21.6 17.6 39.2 39.2 39.2 22 0   0-28.7     177c-52.9    0-73.8     24.7 0 83.8 94.4 151.7 210.3 151.7 116.4 0         21.6 0 39.2 17.6 39.2 39.7 0    .     0-13.7   13.2 0 27.8 28.5 120 29 149 0   13.2 0 4.1 4 4.1    0-22   22 0 39.7 17.6 39.7    "></path>

  </symbol>

  <symbol id="reddit-square" viewbox="0 0 448 512">

    <path d="M283.2  2.7 2.7 6.8 0     0-9.2   8.9 0 18.7 19.2 81 19.6 100.5 0   9  0-26.8  26.8 0 14.6 11.9 26.5 26.8 26.5 14.6 0   0-26.5  26.8 0 14.6 11.9 26.5 26.5 26.5 14.9 0    80v352c0  48-48 48H48c-26.5   48-48h352c26.5 0 48 21.5 48 48zm-99.7  0-19   59.5  14.6 11.9 26.5 26.5 26.5 14.9 0    0-19.3         0-49.8    11-1.8 16.7 0 56.5 63.7 102.3 141.9 102.3 78.5 0     "></path>

  </symbol>

  <symbol id="sms" viewbox="0 0 512 512">

    <path d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57  421.1 2.7 466 2.2    8.7 1.3 3 4.1 4.8 7.3 4.8 66.3 0 116-31.8  32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32zM128.2 304H116c-4.4    0    0-21.3 19-38.6  0 8 3.6 8 8v16c0  8-8  0-10.4  6.6 0  2.7 2.1   7.2 13.3 17.5 13.3      8-8 8h-16c-4.4     0L224   8-8 8h-16c-4.4   16-16h16c6.1 0 11.6 3.4 14.3  35.4    0 16 7.2 16 16v104zm48.3 8H356c-4.4    0    0-21.3 19-38.6  0 8 3.6 8 8v16c0  8-8  0-10.4  6.6 0  2.7 2.1   7.2 13.3 17.5 13.3    "></path>

  </symbol>

  <symbol id="telegram" viewbox="0 0 496 512">

    <path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm121.8             20.8 2.7 17.2 "></path>

  </symbol>

  <symbol id="telegram-plane" viewbox="0 0 448 512">

    <path d="M446.7           284 16.2    34.5 4.1 28.5 "></path>

  </symbol>

  <symbol id="twitter" viewbox="0 0 512 512">

    <path d="     0           0         0             129.3        0                "></path>

  </symbol>

  <symbol id="twitter-square" viewbox="0 0 448 512">

    <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5     8.5 0        30.7 0   10.1 1.5 19.2 1.5  4.9 18.9 7.9 29.6   0 0    32.3 39.8 80.8 65.8 135.2  24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7  29-8.3   28-28.8 36.1  26-5.1    34z"></path>

  </symbol>

  <symbol id="whatsapp" viewbox="0 0 448 512">

    <path d="M380.9  55.1 283.2 32 223.9 32c-122.4 0-222  222 0 39.1 10.2 77.3 29.6 111L0  17.7 68.9 27 106.1  0        0-101.7   49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0      18-17.6        0-9.7    19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9      "></path>

  </symbol>

  <symbol id="whatsapp-square" viewbox="0 0 448 512">

    <path d="M224  0-131.8  131.8 0 24.9 7 49.2 20.2  5-13.3 48.6  4.8  12 43.4 18.4 67.1  0            2.6 0 5.3 0    8.9 6.8 3.3 7.9 11.2 27.4 12.2      21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7        3.6 1.3 23.1 10.9 27.1  3 7.6     32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5     167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0   "></path>

  </symbol>

</svg>













































<!-- This site converts visitors into subscribers and customers with the MailOptin WordPress plugin  -  -->

<div id="ZRKdOdiDZU" class="moOptinForm mo-optin-form-lightbox mo-has-name-email" data-optin-type="lightbox" style="display: none; position: fixed; text-align: center; z-index: 99999999; left: 0pt; top: 0pt; width: 100%; height: 100%; overflow: auto;">

<div class="mo-optin-form-container" id="ZRKdOdiDZU_lightbox_container" style="margin: 0pt auto; position: relative;">

<div id="ZRKdOdiDZU_lightbox" class="mo-optin-form-wrapper mo-has-name-email mo-baremetal-container" style="border-color: rgb(255, 255, 255); background: rgb(255, 255, 255) none repeat scroll 0%; position: relative; margin-right: auto; margin-left: auto; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; line-height: normal;">

<form method="post" class="mo-optin-form" id="ZRKdOdiDZU_lightbox_form" style="margin: 0pt;">

  <h2 class="mo-optin-form-headline" style="padding: 0pt; color: rgb(34, 34, 34);">Subscribe To My Newsletter</h2>

  <div class="mo-optin-form-description mo-baremetal-description" style="color: rgb(119, 119, 119);">

  <p>I share Free eBooks, Interview Tips, Latest Updates on Programming

and Open Source Technologies. I would love to connect with you

personally.</p>

  </div>

  <div class="mo-optin-error" style="">Invalid email address</div>

  <div class="mo-optin-fields-wrapper" style=""><input id="ZRKdOdiDZU_lightbox_name_field" class="mo-optin-field mo-optin-form-name-field" style="color: rgb(34, 34, 34); height: auto;" placeholder="Enter your name here..." name="mo-name" autocomplete="on" type="text"> <input id="ZRKdOdiDZU_lightbox_email_field" class="mo-optin-field mo-optin-form-email-field" style="color: rgb(34, 34, 34); height: auto;" placeholder="Enter your email address here..." name="mo-email" autocomplete="on" type="email"> <input id="ZRKdOdiDZU_lightbox_submit_button" class="mo-optin-form-submit-button" style="background: rgb(0, 115, 183) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; color: rgb(255, 255, 255); height: auto; text-shadow: none;" value="Let's Connect" type="submit"> </div>

  <input id="ZRKdOdiDZU_lightbox_cta_button" class="mo-optin-form-cta-button" style="background: rgb(0, 115, 183) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; color: rgb(255, 255, 255); height: auto; text-shadow: none; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; display: none;" value="Take Action Now!" type="submit"> 

  <div class="mo-optin-form-note mo-baremetal-note" style="color: rgb(0, 0, 0);"><span class="mo-note-content"><em>I am a Software Developer just like you and hate spamming. No Spam Guaranteed!</em></span></div>

  <input id="ZRKdOdiDZU_lightbox_honeypot_email_field" name="mo-hp-email" value="" style="display: none;" type="text"><input id="ZRKdOdiDZU_lightbox_honeypot_website_field" name="mo-hp-website" value="" style="display: none;" type="text"></form>

<div class="mo-optin-spinner" style="display: none;"></div>

<div class="mo-optin-success-msg" style="display: none;">Thanks for subscribing! Please check your email for further instructions.</div>

</div>

</div>

</div>

<!-- / MailOptin WordPress plugin. -->

<input id="ZRKdOdiDZU_lightbox_honeypot_timestamp" name="mo-timestamp" value="1576127884" style="display: none;" type="hidden">

	

</body>

</html>
