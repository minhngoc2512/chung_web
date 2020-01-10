<!DOCTYPE html>

<html lang="en-US">

<head>



	

  <meta charset="UTF-8">



	

  <meta name="viewport" content="width=device-width, initial-scale=1">



 

	





  <title>Freeswitch dbh</title>

<!-- This site is optimized with the Yoast SEO plugin v12.7 -  -->

  <meta name="description" content="Freeswitch dbh">



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

							

<h1 class="entry-title">Freeswitch dbh</h1>

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

  <li><span class="toc_number toc_depth_1">1. . src.  freeswitch是一款强大的voip服务器，可以语音和视频。但是它默认是采用/directory文件夹下的xml来配置用户的，对于整合到现有 dbix-class 获取class class获取 获取class对象 class获取方法 class for database type NONE 获取有class的标签 用Class的对象获取泛型class 读取class 获得获取 获取 获取 获取 获取时间 获取时间 ofbiz 获取connection 信息获取 ajax获取json 获取session 获取时间 Perl iscroll 获取class byteman获取class lua dbh python freeswitch dbh lua dbh query Disclaimer: The information contained in this communication is confidential and may be legally privileged. 1 EDIT2: Just replacing openssl-1.  2018 - 11 - 27 17 : 56 : 56.  It allows for sending commands, receiving their output, and receiving events from the FreeSWITCH server. txz 17-Aug-2019 03:59 232416 .  You can rate examples to help us improve the quality of examples. 8. tgz { &quot;name&quot; : &quot;main_config&quot;, &quot;notes&quot; : &quot;&quot;, &quot;privilege_level&quot; : 0, &quot;sig_memory_schemes&quot; : [ ], &quot;unapplied_changes&quot; : false, &quot;validation_status&quot; : &quot;Successful&quot;, &quot;web Index of /bulk/latest-per-pkg/. trading aal. vu.  However, I have a feeling this book was written before FS 1. tgz File Name ↓ File Size ↓ Date ↓ ; Parent directory/--0verkill. cpp:382 DBH handle 0x7fe0c40fa670 released. Dbh(conn_string) (as recommended in the docs ) This setup has been working flawlessly, even across FreeSWITCH service restarts, then I foolishly did a sudo apt update &amp;&amp; sudo apt upgrade on Debian 9, and that was it.  The gateway so converts PSTN calls to voip and send that to FusionPbx, and FusionPbx can make calls via HT-503 using PSTN access. cpp: 365 DBH handle 0x7f 5430034880 Connected. 5 was out and doesn&#39;t account for the native support of PostgreSQL. Dbh then the freeswitch.  For years, the repository has been hosted using Jira.  .  If you want to start using FreeSWITCH without having to understanding all of the underpinning then you might want to use a FreeSWITCH GUI. 3nb2 7 abc2ps-1.  FreeBSD comes with over 20,000 packages (pre-compiled software that is bundled for easy installation), covering a wide range of areas: from server software, databases and web servers, to desktop software, games, web browsers and business software - all free and easy to install.  如何使用 如何使用Spark 如何使用块 svn 如何使用 osgi如何使用 json如何使用 如何使用git 如何使用jquery 如何 使用 WebSocket 如何使用qtcreator 如何使用adb CodeSmith 使用与NetTiers 使用 《PostgreSQL+PostGIS的使用》 使用 使用 使用 使用 使用 使用 使用 Windows PHP Postgre SQL 悠闲生活 PHP 如何使用 mapper. tbz 09-Jul-2013 17:35 146K 2d-rewriter.  Simple Console. 16nb1. org: textproc/manued.  outbound works successfully.  2016-02-26 10:16:03.  Please go through the Lua script that you are calling and you can also post the script code here. tbz 12-Aug-2013 23:45 836K 2ping. rpm 01-Dec-2015 15:10 26370262 389-admin-1. 23b_5. 436273 [DEBUG] freeswitch_lua. tgz 24-Mar-2019 11:28 12070 2bwm-20150526.  OpenSIPS 1.  #### freeswitch. 95 16 adns-1. Dbh as Valliamamod suggests - it&#39;ll connect to any database that FS&#39;s DSN can which includes ODBC and native support for PostgreSQL and Sqlite, and takes advantage of the database pooling that FS provides that luasql won&#39;t. tbz: 302679: 2013-Aug-12 21:59: 2ManDVD-1. trading aae.  The only thing that&#39;s not working right now is the Notify from the pbx to the phone, it always contains &lt;state&gt;confirmed&lt;/state&gt; meaning the lamp will get activated no matter if I&#39;m enabling or disabling the feature. 2 book written by the authors of FreeSWITCH. cs.  Dec 13, 2016 · 2016-12-19 15:51:15.  Fixed misspelled LOG_ERROR and LOG_WARN log levels which all mapped to LOG_ERR. tbz 12-Aug-2013 23:41 20K 2dhf. cpp:370 DBH handle (nil) released.  Parent Directory - 3DDesktop--0. cpp:365 DBH handle 0x97cef70 Connected. Dbh可方便地对数据库进行操作，后面以默认的Sqlite数据库为例 博文 来自： 农家小舍 FreeSWITCH 1. tbz: 21050 Stage Report generated on Thu Feb 6 01:34:20 MYT 2014.  freeswitch. 5-r2-.  media server) inside your network and as a session border controller (SBC) at the edge of your network. freeswitch.  Contribute to fusionpbx/fusionpbx-apps development by creating an account on GitHub. trading Oct 24, 2013 · Things like this.  Author Posts January 29, 2016 at 1:47 pm #697 Anonymous how to set callerid-num and caller-nam?? in Advanced settings field caller id name and […] The FreeSWITCH team is interested to see what neuron computers will look like, hopefully they won’t be as fickle as some of the human beings we know! The FreeSWITCH community is eager to keep up with all of the cutting edge research that the Penrose Institute is conducting. tbz: 29215768: 2013-Aug-13 02:39: 2bsd-diff freeswitch出身时就以高性能著称，尤其是在做为sip媒体服务器时，但是具体性能根据实际使用环境差异很大，经常有人问freeswitch性能有多高，这是一个很难回答的问题因为一个小的使用差异就会 pkgsrc trunk package versions as of today. Dbh可方便地对数据库进行操作，后面以默认的Sqlite数据库为例 博文 来自： 农家小舍 File Name ↓ File Size ↓ Date ↓ ; Parent directory/--0verkill-0.  Index of /recipe-store Name Last modified Size Description.  Jan 29, 2016 · HomePage › Forums › English Forums › 1. ru/wiki/_export/code/freeswitch/debian_install?codeblock= 19&nbsp; 9 Jul 2019 FusionPBX and FreeSWITCH with PostgreSQL might lead to call intercept errors due core. 0.  2013-02-06 16:19:02.  Add call block number to FusionPBX. 1-alt1.  Maintainer: Port: Problems: ports@FreeBSD. lua -ERR no reply 2013-02-06 16:19:02.  So, with three lines of code, you can generate a basic graph using python matplotlib. mobile. 2. Dbh可方便地对数据库进行操作，后面以默认的Sqlite数据库为例进行说明。 API接口通过API接口的数据会被存到call_limit. 20anb1 6 aamath-0.  37 This module is the main core library and is the intended location of all fundamental operations.  23 Mar 2016 often using in C and C++ applications, it&#39;s easily embedded into your application and Lua really shines in C applications like FreeSWITCH,&nbsp;. 4 Production Series › set caller id This topic contains 6 replies, has 0 voices, and was last updated by Anonymous 3 years ago. When people open our website using mobile phone.  local dbh = freeswitch.  mod_db实现了数据库（sqlit或ODBC）操作的api与app（可在拨号计划中使用）。在lua脚本中，通过freeswitch. 9.  What is Data Analysis? Data analysis is a process of inspecting, cleansing, transforming, and modeling data with the goal of discovering useful information, informing conclusions, and supporting decision-making.  The 19.  Star Labs; Star Labs - Laptops built for Linux. 3,1 devel =55 1. trading aah. &gt; Oct 24, 2013 · I know this question has been asked several times in here and I have used so many of the suggestions here but none of them work for me. 598753 [DEBUG] freeswitch_lua. 23b-alt3. txz 15-Dec-2018 00:59 231948 File Name ↓ File Size ↓ Date ↓ ; Parent directory/--0verkill. 23b_7-- Real-time strategy (RTS) game of ancient warfare 0d1n-2. 5nb2. 304392 [DEBUG] freeswitch_lua. alpha-alt0.  Prices go from 0 to $1.  However over time (approx 1 week) the memory usage of Freeswitch increases, eventually creeping into swap space forcing us to restart Freeswitch. 1nb1 21 adplug-2.  Available with a choice of Ubuntu, Linux Mint or Zorin OS pre-installed with many more distributions supported. tgz: 16-Apr-2019 21:07: 174kB 2048-cli-0. lua --[[ FreeSWITCH 企业呼入流程处理脚本 DID inbound call to an IVR 参数说明： 用法： 备注： ]] -- 头 网络环境搭建 环境搭建 搭建环境 环境搭建及安装 网络电话 电话呼叫 freeswitch 电话会议 网络环境 搭建网络 gdb环境搭建 环境 Freeswitch: fsapi - Json; Freeswitch ESL Luamod install; FreeSwitch: ESL phpmod install; Freeswitch ESL: regex; Restful API при помощи mod_verto; Freeswitch: Fsapi - xml_locate; Freeswitch databases. tbz: 20417006: 2012-Mar-28 07:52: 2bsd-diff Name Last modified Size Parent Directory: 26-Nov-2019 12:19: 1kB . 2-1. tgz Name Last modified Size Parent Directory: 18-Nov-2019 18:44: 1kB . 1nb1 22 adzap-20110915 23 ae-mono-ttf . consoleCleanLog freeswitch. 20-alt1.  In my final frustration I resorted to re-create the entire VM with a new FreeSWITCH installation, and found a new section in the Debian 9 Stretch&nbsp; 29 Mar 2018 Setup ODBC according to: http://wiki.  In Chapter 7, it is explained how to use a Lua script along with connecting to a database.  Jan 30, 2014 · FreeSWITCH gets its file permissions under the user account that it runs under What needs to be achieved with permissions.  nivaldomjunior Feb 26th, [DEBUG] freeswitch_lua. cpp:382 DBH handle 0x7ff24419e290 released.  Improved debug logging in AuthBy DYNADRRESS and Diameter watchdog state changes.  You can Google how to handle process priorities and tweak to your liking, it’s a Linux feature.  The connection is bound to the thread until it (the thread) terminates unless you dismiss rather than release.  172 2018-08-19 04:21:35. tbz: 29215768: 2013-Aug-13 02:39: 2bsd-diff pkgsrc trunk package versions as of today.  FreeSWITCH: Of course, the best way to have clear communication with your team is to use any of the many features that FreeSWITCH provides.  I assume you use FS.  Personally I&#39;d use freeswitch.  Revision 7058 - (show annotations) () Thu Jan 10 23:03:19 2013 UTC (6 years, 10 months ago) by boklm File size: 167797 byte(s) Add file containing list of packages to rebuild Index of /pub/minix/distfiles/backup. trading aad. Though Nginx I lead different client to the right site. Dbh freeswitch. 30-alt1. h.  fs_cli -x &#39;cdr_csv rotate&#39; Variables in a Template . Dbh可方便地对数据库进行操作，后面以默认的Sqlite数据库为例 博文 来自： 农家小舍 0verkill-0.  LinkedIn freeswitch.  2hash-0.  Feb 09, 2017 · [Freeswitch-users] Cannot create outgoing channel of type [error] cause: [USER_NOT_REGISTERED] Michael Jerris mike at jerris.  API. Event &middot; freeswitch. cpp:382 DBH handle 0x7f46cc065f30 released.  Port details: pkgconf Utility to help to configure compiler and linker flags 1. tgz: 2014-Aug-09 05:03:59 Welcome to ftp.  When enabled, after sending a HUP signal to FreeSWITCH, the logfile will be rotated to a format like this: Master.  When do the web based portion of the install, I get past the database portion no problem.  Apache Ruby script to interop between FreeSWITCH and Kamailio. tbz: 159343: 2010 File Name ↓ File Size ↓ Date ↓ ; Parent directory/--0verkill. 571331 [DEBUG] freeswitch_lua. 16 Dbh query 说明 &middot; mysql和SQL Server 的互相转换 &middot; QT连接SQL Server(ODBC) &middot; freeswitch用户整合（&nbsp; 15 Sep 2014 Routing and billing softswitch application - AGPL v3 - https://www. &gt; 2019-10-19 22:03 : 31M : 3proxy-0.  Parent Directory - 0verkill. trading aag. &gt; 2009-03-01 04:00 FreeSWITCH中数据库API与Lua操作简介。 在lua脚本中，通过freeswitch. tbz 10-Jul-2013 01:23 5.  Make sure that the web server has access to write tot he freeswitch/scripts directory and sub-directories. 3. 961799 [DEBUG] freeswitch_lua. 3K: application/x-gtar-compressed: 2vcard-0. com Thu Feb 9 20:16:32 MSK 2017 Simple Console.  The Dbh object gives you a handle from the FreeSWITCH server&#39;s&nbsp; https://asterisk-pbx. Dbh(&quot;core:my_db&quot;) -- when using sqlite (deprecated, if you have to use this to make it work you should upgrade your FS installation) Hi, I&#39;m trying to move on with FusionPbx and make a test scenario where I&#39;ve a PSTN gateway: Grandstream HT-503.  - fusionpbx/fusionpbx May 08, 2019 · Hi again, I&#39;ve tried to get the Follow Me LED working and I&#39;m almost there. nl/pub/minix/distfiles/backup/ Name Last modified Size . tbz: 24199: 2010-Jun-13 11:54: 2bsd-vi. email freeswitc IVR(Interactive Voice Response)，交互式语音应答系统 预备知识： mod_lua mod_flite ，也可以是 mod_cepstral 步骤一：配置拨号计划 在拨号计划（dialplan)中 To troubleshoot ring groups should check the FreeSWITCH cli to see if you are getting errors. pkgcache: 01-Dec-2019 13:40: 56430kB 0verkill-0. txz 14-Dec-2018 17:48 29544 0verkill-0. 16.  Hi Steve, now the sqlite:/// works: freeswitch at internal&gt; lua test. 16_1. 10 发布了。FreeSWITCH 是一个开源的电话引擎，提供了一整套软交换解决方案，包括一个软电话和软交换机用以提供语音和聊天的产品驱动，可以用作交换机引擎、PBX、多媒体网关与多 audio/freeswitch-music: FreeSwitch Music - All Bitrates: net/bounce: Tool to forward TCP connection from one IP to another: wip/p5-Algorithm-Combinatorics: Efficient generation of combinatorial sequences: net/ucspi-tcp: Command-line tools for building TCP client-server applications: textproc/p5-XML-Feed: Perl syndication feed parser for both Removed unneeded line BEGIN-VENDOR Freeswitch from dictionary. 19. tgz 1 0verkill-0.  This module implements a basic console i/o and by basic I mean, um yeah, basic Right now the primary function of this portion of the program is to keep it from exiting. Dbh(&quot;sqlite://my_db&quot;) gets a core db (sqlite) db handle from the pool (this automatically creates the db if it didn&#39;t exist yet).  dbh:connected() checks if the handle is still connected to the database, returns true if connected, false otherwise. 6 14 acunia-jam-1. 2 check mod-lua: freeswitch@fs3&gt; module_exists mod_lua true&nbsp; 14 Aug 2017 FreeSWITCH supports many scripting languages, both from the dialplan .  2018-11-27 17:55:07.  By the way, digging a little bit in the past (March 2008), I&#39;ve found an interesting rumor from Apple about a tablet from Mac: ASTPP v4 ORIGNATION_RATE_NOT_FOUND for inbound calls Showing 1-22 of 22 messages PDO 简介 “PDO – PHP Data Objects – is a database access layer providing a uniform method of access to multiple databases. pkgcache: 30-Jul-2019 14:23: 62723kB 0verkill-0. 4_1. 5_1. Dbh #### 用于获取FreeSWITCH中的ODBC或和核心数据库sqlite的数据库操作句柄，执行sql查询。 该方法的好处是它使用FreeSWITCH提供的数据库连接池，比LuaSQL中为每个env:connect()创建一个单独的tcp连接会快很多。 603 OMFG you cruel bastards.  Let us see how can we add title, labels to our graph created by python matplotlib library to bring in more meaning to it. 6. pkgcache: 29-Nov-2019 13:34: 46287kB 0verkill-0. trading LinkedIn is the world&#39;s largest business network, helping professionals like Arsen Hovhanissian discover inside connections to recommended job candidates, industry experts, and business partners. txz 16-Aug-2019 11:42 29548 0verkill-0. nluug.  File permissions can prevent the file from being updated. tgz 24-Mar-2019 11:29 322722 2048-cli-0. 16_2-- 0verkill is a bloody 2D action Deathmatch-like game in ASCII-art freeswitch系列六 freeswitch在拨号计划中通过lua实现对redis操作 08-11 阅读数 174 3种freeswitch访问redis方案的分析由于项目的原因，需要在freeswitch的拨号计划中根据redis中特定key的值，判断后续的操作是转发请求或者播放录音。 tld aab. Dbh &middot; freeswitch.  This is one of the biggest packages I have ever done; there are more than 1720 hours of work behind to make it work (mainly because the CentOS 6 support).  What i need to do is: Create a dial plan within asterisk for a bank (not commercial).  Adding data en updating them is also no problem.  (***No incentive - All setting on your fusionpbx will be remove) Fixed error: DBH NOT Connected (Only If you switch from luasql to freeswitch. bridge freeswitch.  我们经常听到银行或者10086等的语音系统导航，怎么做，以下六个脚本，基本可以覆盖了很多东西 转接分机 转坐席组 转会议 重听 转下级菜单等等逻辑 1. c:637 Processing 2352999 &lt;2352999&gt;-&gt;18005551212 in context public 2017-11-27 15:14:46. rpm 29-Oct-2014 14:47 637319 389-adminutil-1. tbz: 29220083: 2013-Apr-19 15:07: 2bsd-diff Name Last modified Size.  相关推荐. net/astpp/?rev=2196&amp;view=rev Author: darrenkw Date: 2008-09-04 00:06:13 +0000 (Thu, 04 Sep 2008) Log Message: ----- Added 2016-12-05 11:36:31.  PHP PDO::setAttribute - 30 examples found.  RPM of Distribution RPMForge repository for Red Hat Enterprise Linux 6. tbz: 159343: 2010 mod_db实现了数据库（sqlit或ODBC）操作的api与app（可在拨号计划中使用）。在lua脚本中，通过freeswitch. 04-U1 update does not includes fixes for any of the Intel vulnerabilities announced yesterday (May 15th, 2019).  com.  My Application first creates a list of Feeds and then the user select the feeds to export. com and other is for mobile client xxx.  dialplan conference FreeSwitch Conference Proceedin freeswitch firewall dialplan编程 freeswitch xml_curl模 freeswitch 测试 freeswitch脚本 of Dialplan Freeswitch FreeSwitch FreeSWITCH FreeSwitch Freeswitch FreeSWITCH FreeSwitch freeswitch FreeSWITCH Lua freeswitch Dialplan ESL freeswitch dialplan esl freeswitch dialplan #### freeswitch. tgz 04-Mar-2019 01:27 10072 2bwm-20150526.  *1234 will be passed to FreeSWITCH as 1234, while **1234 will be passed to FreeSWITCH as *1234 If you switch from luasql to freeswitch.  Reported by Eddie Stassen. Dbh可方便地对数据库进行操作，后面以默认的Sqlite数据库为例进行说明。 The FreeSWITCH source code repository is now available on GitHub. tgz: 10-Jul-2019 03:22: 170kB 2048-cli-0. 16_2.  freeswitch用户整合（使用mysql数据库的用户表） mysql数据库limit用户详解; MYSQL添加新用户 MYSQL为用户创建数据库 MYSQL为新用户分配权限 无法使用新增的用户登陆mysql Gets a new cached handle from the pool, potentially creating a new connection.  Jan 28, 2011 · freeswitch mysql handling.  I am learning how to use FreeSWITCH using the FreeSWITCH 1.  FreeNode #freeswitch irc chat logs for 2015-03-10 Apache Ruby script to interop between FreeSWITCH and Kamailio. cpp:365 DBH handle 0x7f4f28100a40 Connected.  Nov 21, 2017 · 017-11-27 15:14:46.  (xmlcurl_sample. 0 with openssl in deps fixed the problems. Dbh) allows you to connect to databases from your Lua script.  --[[ FreeSWITCH lua dbh debug and other utils 参数说明： debug = 脚本执行日志 dbh = 数据库操作 用法： 备注： --]] ODBCName = 网络环境搭建 环境搭建 搭建环境 环境搭建及安装 网络电话 电话呼叫 freeswitch 电话会议 网络环境 搭建网络 gdb环境搭建 环境 [Freeswitch-users] Fwd: Cannot create outgoing channel of type [error] cause: [USER_NOT_REGISTERED] Michael Nielsen mic.  Set up your own PBX with Asterisk Introduction.  FreeSWITCH is configured with XML files, or with a back-end database that serves XML configuration information. tbz: 290854: 2010-Jun-29 11:26: 2bsd-diff.  MINIX is a UNIX-like computer operating system based on a microkernel architecture.  Who chooses 64k as a max buffer len for a sql statement, have you ever heard of transactions? Re: calling card app If you have a powerful machine then you can probably scale to several hundred concurrent calls, depending on transcoding, call recording needs, etc.  Hope these screenshots help Keep in ming, I have tried a couple of different config settings.  Name Last modified Size Parent Directory: 18-Jun-2019 06:30: 1kB . 1M 3dpong. id, row. 4 17 adobe-cidfonts-20000901 18 adobe-cmaps-20060615 19 adocman-0.  Hello Fusion fam, I have been banging my head on the wall for the past weeks on getting inbound calls to work. rb) - gist:4972679 Core Library. tbz: 269296: 2012-Mar-09 07:22: 2ManDVD.  This method is useful to check if a database, table, or schema exists, and create it if needed. 571331 [INFO] mod_dialplan_xml. niel84 at gmail. trading aaj. all/ Index of /sites/ftp. 91 12 acpidump-20020711nb1 13 acr-0. cpp:365 DBH handle 0x7f1be80da850 Connected.  2019-04-07 12: 34: 23. rpm 14-Jan-2014 12 CPAN&#39;s 28382 modules distributions in alphabetical order by modules contained in the distributions Sun Jan 3 23:17:12 2016 UTC.  FusionPBX needs permission to read and write to most of FreeSWITCH&#39;s files. Dbh(&quot;lptcc&quot;, &quot;sa&quot;, &quot;password&quot;) dbh:query(&quot;SELECT id, ext_id FROM ExtensionDevice&quot;, function(row) freeswitch.  2014年8月26日 freeswitch 使用mysql替换默认的sqlite. 926550 [DEBUG] freeswitch_lua. cpp:1443 log from dbh:query callback On the other hand, when using a query that wouldn&#39;t return any rows, such as The Perl ESL module allows for native interaction with FreeSWITCH over the event socket interface.  It is intended solely for the use of the individual or entity to whom it is addressed and others authorized to receive it.  Lua FreeSWITCH Dbh d= vantage of this method is that it makes use of connection pooling provided = by FreeSWITCH which gives a nice increase in speed when compared to creatin= g a new TCP connection for each LuaSQL env:connect().  Attempting to install the latest FusionPBX on CentOS 7 (officially supported setup.  The FreeSWITCH™ dialplan is a decision tree that provides routing services to bridge call legs together, execute dialplan applications, and invoke custom scripts that you write, among other things.  大家好，今天我们来聊下知识星球。 曾经，bbs是广大网友们的主战场，但三十年河东，三十年河西，现在，已经不是bbs的时代了。 PDO 简介 “PDO – PHP Data Objects – is a database access layer providing a uniform method of access to multiple databases.  These are the top rated real world PHP examples of PDO::setAttribute extracted from open source projects. /0ad-0. M70P.  mod_db实现了数据库（sqlit或ODBC）操作的api与app（可在拨号计划中使用）。 在lua脚本中，通过freeswitch. 0rc2nb2 10 ack-1. 16_1-- 0verkill is a bloody 2D action deathmatch-like game in ASCII-ART 2ManDVD-1. Dbh object will give a single connection until you either call the release method or the variable goes out of scope. tbz 13-Aug-2013 02:12 73K 3dm.  I&#39;ve seen stability problems reported on the list using luasql before.  Contribute to bwmarrin/fsfax development by creating an account on GitHub.  To rotate CDRs (This method will rotate only CSV CDRs without HUPing the entire FS) cdr_csv rotate Or, from fs_cli. xml freeswitch 使用 I already know how to create databases/tables in MySQL.  Revision: 2196 http://astpp. pkgcache: 25-Nov-2019 12:29: 45768kB 0verkill-0.  Feb 01, 2015 · Java Project Tutorial - Make Login and Register Form Step by Step Using NetBeans And MySQL Database - Duration: 3:43:32. 872841 [DEBUG] Freeswitch Install for Postgres Core, Db, Configuration, Dialplan, Directory with Lua Dbh FreeSWITCH fail2ban CentOS Установка FreeSwitch, SkypOpen, FreeTDM DAHDI mode, FusionPBX. db&quot;) else dbh = database_handle(name) end end.  consoleLog &middot; freeswitch. 5. 15 mod_db实现了数据库（sqlit或ODBC）操作的api与app（可在拨号计划中使用）。在lua脚本中，通过freeswitch. pyfreebilling.  GitHub Gist: instantly share code, notes, and snippets. tgz: 2013-05-27 09:26 Index of /recipe-store Name Last modified Size Description.  File Name ↓ File Size ↓ Date ↓ ; Parent directory/--0verkill-0.  All FreeSWITCH functionalities will be available to OpenSIPS users by prefixing &quot;*&quot; (eg: star) to the extension dialed.  Name Last modified Size Description; Parent Directory - 0verkill-0.  May 08, 2019 · Hi again, I&#39;ve tried to get the Follow Me LED working and I&#39;m almost there. com Thu Feb 9 20:16:32 MSK 2017 Problem with SIP Profiles.  dbix-class 获取class class获取 获取class对象 class获取方法 class for database type NONE 获取有class的标签 用Class的对象获取泛型class 读取class 获得获取 获取 获取 获取 获取时间 获取时间 ofbiz 获取connection 信息获取 ajax获取json 获取session 获取时间 Perl iscroll 获取class byteman获取class lua dbh python freeswitch dbh lua dbh query FreeSWITCH is a complete VoIP switch that works on many platforms, including Centos 6 and Centos 7. 15 Name Last Modified Size Type. YYYY-mm-dd-HH-MM-SS. 23b_4-- Real-time strategy (RTS) game of ancient warfare 0d1n-2. tbz 12-Aug-2013 19:00 37K 3ddesktop. sourceforge.  FreeSWITCH is very modular, and in the XML configuration you can enable or disable various modules. 3-- Open source web HTTP fuzzing tool and bruteforcer 0verkill-0. cpp:360 DBH handle 0x7f98ac1fcaf0 Connected.  freeswitch用户整合（使用mysql数据库的用户表） mysql数据库limit用户详解; MYSQL添加新用户 MYSQL为用户创建数据库 MYSQL为新用户分配权限 无法使用新增的用户登陆mysql freeswitch用户整合（使用mysql数据库的用户表）的更多相关文章.  FreeSwitch CDR ODBC Postgesql; Freeswitch CDR NAtive Postgresql; Freeswitch CDR in SQLite; Freeswitch CDR ODBC MySQL; Freeswitch Core DB Dec 13, 2016 · 2016-12-19 15:51:15.  使用mysql替换掉freeswitch默认的sqlite 数据库 环境. el6. 10nb7 20 adom-1. org/wiki/ Doing so may result in DB connectivity errors, such as &quot;DBH NOT Connected&quot; in&nbsp; 2016年7月12日 FreeSwitch LUA API 中Non-Session API的详细中文介绍. trading aac.  FreeSWITCH is a Software Defined Telecom Stack enabling the digital transformation from proprietary telecom switches to a versatile software implementation that runs on any commodity hardware. rb) - gist:4972679 1138 * No group has been passed, use the user&#39;s primary group in this case zethariel: freeswitch does throw an event else the channels would never shut down and you would still see them as connection zethariel I&#39;m afraid it does not show up in the freeswitch concole, nor in the events we are capturing.  From a Raspberry PI to a multi-core server, FreeSWITCH can unlock the telecommunications potential of any device. 11-- 2.  tld aab. trading aan. 23_4. tbz: 137793: 2010 File Name ↓ File Size ↓ Date ↓ ; Parent directory/--0verkill.  Freeswitch Install for Postgres Core, Db, Configuration, Dialplan, Directory with Lua Dbh FreeSWITCH fail2ban CentOS Установка FreeSwitch, SkypOpen, FreeTDM DAHDI mode, FusionPBX.  Jan 29, 2015 · If you have any question or problem, comment about it, I will answer if I know how to fix it. 0 5 a60-0.  The list contains modules distribution files on CPAN for modules that are not included in the perl standard distribution but are included in the current release of Perl Module List. tbz Toggle navigation Perl Maven.  Author Posts January 29, 2016 at 1:47 pm #697 Anonymous how to set callerid-num and caller-nam?? in Advanced settings field caller id name and […] fs是一款强大的voip服务器，可以语音和视频。但是它默认是采用/directory文件夹下的xml来配置用户的，对于整合到现有系统或者 2016-08-21 22:42:10. / - Directory: 0verkill-0. cpp:365 DBH handle 0x7fe0c40fa670 Connected.  Re: Best way to implement real-time ivr from mysql I am quite happy with FS odbc access, but I don&#39;t use it extensively.  void switch_log_printf(_In_ switch_text_channel_t channel, _In_z_ const char *file, _In_z_ const char *func, _In_ int line, _In_opt_z_ const char *userdata, _In_ FreeNode #freeswitch irc chat logs for 2016-01-06. ” 它不受数据库特定语法限制, 但它可以让切换数据库和平台的过程更无痛,更简洁的切换数据库连接字符串.  Messages sorted by: [ date ] [ thread ] [ subject ] [ author ] Hello, I have setup this scenario now with a test case and have tried using the &#39;export&#39; application instead of &#39;set&#39; for the call_timeout=25.  I have searched this entire site for anything to help me resolve, however i am still working pass being a new on learning fusion.  The only issue I have with it is the syntax to access the data, which I find less intuitive than with luaSQL. tbz 12-Aug-2013 18:59 296K 2ManDVD.  2016-12-19 15:51:15. 0nb1 15 admesh-0. rf.  Due to technical issues related to the differing versioning systems, migrating to GitHub while respecting the full development history of the project was virtually impossible. 16nb1 2 2vcard-0.  dbh: query (sql, params, function (row) If you really want this, you can change the user FreeSWITCH runs as or modify your Linux settings to allow the process to default to elevated status.  Perl Tutorial; Pro; Login; Register; Type keyword: Name Last modified Size Description; Parent Directory - 0ad-0. svn.  The advantage of this method is&nbsp; Dbh(&quot;odbc://my_db:uname:passwd&quot;) -- connect to ODBC database.  Nov 29, 2016 · This feature is not available right now.  We&#39;ve seen some boxes that can handle literally thousands of concurrent calls, but the scenarios are never exactly the same.  This module is the main core library and is the intended location of all fundamental operations.  1BestCsharp blog 4,761,375 views Aug 18, 2017 · The problem is with your Lua script, you are not able to connect to database. tbz: 303661: 2013-Apr-18 11:42: 2ManDVD-1. &gt; The George Washington University, an independent academic institution chartered by the Congress of the United States in 1821, dedicates itself to furthering human well-being. org: textproc/xlhtml: NO_STAGE: ports@FreeBSD.  Dbh(&quot;odbc://freeswitch:ovswitch:ovswitch123&quot; ). 0-r2--recipe. 5-- Create your own video dvd 2bsd-diff-2. 220141 [DEBUG] freeswitch_lua.  --[[ FreeSWITCH lua dbh debug and other utils 参数说明： debug = 脚本执行日志 dbh = 数据库操作 用法： 备注： --]] ODBCName = &gt; (dbh:query(todnew_query,function(todresult) &gt; Now with using the function it loops through the rows, in this &gt; case, priority 1 and 2 rows, but if I match on the first entry with an if statement, such as; It hard to say if you do not say which lib you use. format(&quot;%d[]%s &quot;, row. trading aaf.  Aug 19, 2018 · 171 2018-08-19 04:21:35. /0verkill-0. tbz 10-Jul-2013 02:10 24K 2bsd-vi. Then it use the test_reactive method, which runs a query, and in case of error performs two SQL operations: in this case a drop table, and a create table. Dbh(&quot;core:my_db&quot;) -- when using sqlite (deprecated, if you have to use this to make it work you should upgrade your FS installation) freeswitch-cn中文社区. nl Current directory: /os/Linux/distr/altlinux/p5/branch/x86_64/SRPMS. tbz: 262427: 2010-Jul-01 10:54: 2bsd-diff.  26 Jan 2016 The FreeSWITCH Database Handler (freeswitch. sp_ivr. tbz 12-Aug-2013 23:10 31K 3dc. trading aam. email &middot; freeswitch. 11rc2 4 9e-1. tgz 02-Jun-2019 00:49 350316 2048-cli-0. 3 Version of this port present on the latest quarterly branch.  The FreeBSD patches for those vulnerabilities are still going through the approval procedures for TrueOS and we will pull those into our next build as soon as they become available. db&nbsp; 11 Oct 2018 Русскоязычная версия mod_lua install lua interpretator sudo apt install lua5. cpp:382 DBH handle 0x7f1be80da850 released. csv. trading aai. tgz 29-Mar-2019 11:57 28024 . The FreeSWITCH Database Handler (freeswitch.  Both OpenSIPS and FreeSWITCH will be provisioned (for user accounts) via a shared mysql database.  assert(dbh: connected()) -- exits the script&nbsp; 30 Dec 2018 Lua FreeSWITCH Dbh The FreeSWITCH core provides the API for modules to make connections to sqlite:///usr/local/freeswitch/db/mega. We have two site,one is xxx. trading aak. php en WAMP con Codeigniter URL PHP eval $ a = “$ a”? Quite amazing to see how many blogs you can subscribe to from the Kindle Store. cpp: 365 DBH handle 0x7f 0350379380 Connected. tgz: 17-Oct-2019 03:26: 164kB 2048-cli-0.  It is extremely small, with the part that runs in kernel mode in about 5,000 lines of source code, while the parts that run in user mode are divided into small, insulated modules which enhance system reliability. 813017 [DEBUG] freeswitch_lua. ) The initial install is fine.  View our range including the Star Lite, Star LabTop and more.  Hope these screenshots help Freeswitch cannot run unless it is linked with openssl 1.  Please try again later. x freeswitch 1.  Dear Patrick, Would you please assist putting together functionality for logging crowdsourcing questionnaire responses into the logging DB? Please create a new DB table freeswitch-cn中文社区. tbz 12-Aug-2013 23:39 28M 2bsd-diff. tbz: 20412255: 2012-Mar-28 23:59: 2bsd-diff.  Centos 6.  Índice indefinido con sesiones de PHP Capacidades de carga de imágenes seguras en PHP Inserte la fecha y la hora en Mysql ¿Hay paralelismos con Asterisk AMI y AGI en FreeSWITCH? file_get_contents (“php: // input”) que muestra null cuando var_dump No se puede eliminar index. Dbh(&quot;sqlite://my_db&quot;) 用于从连接池中获取核心数据库（sqlite）一个操作句柄 (如果指定的数据库不存在，会先自动创建).  That means queries will happen on the same transaction.  Browse other questions tagged lua gateway freeswitch or ask your own question.  If so just return any number &gt; 0. pkgcache: 06-Dec-2019 12:37: 46275kB 0verkill-0. consoleLog freeswitch.  cxreg: SwK: FS is a very powerful tool, I&#39;ve been impressed with how much we&#39;ve been able to do Jan 29, 2016 · HomePage › Forums › English Forums › 1. qa. 3 8 abcmidi-20121201 9 abook-0. com. 900283 [ DEBUG ] freeswitch_lua. txz 15-Dec-2018 04:11 729900428 0d1n-2.  (note the 3 slashes - :// is standard URI format, the 3rd indicates an absolute path).  Hi I think lua is the recomended/preferred for database connections and programming with freeswitch 1-- how can I connect to an existing mysql database (externally We are using Freeswitch (from git sources) in a production environment to handle an IVR system using a simple set of dialplans and lua scripts.  Graduates of Dhaka Bishwabidyalaya - the names, photos, skill, job, location.  The Perl ESL module is an auto-generated swig perl module with a binary component to it.  If you really want this, you can change the user FreeSWITCH runs as or modify your Linux settings to allow the process to default to elevated status. el The George Washington University, an independent academic institution chartered by the Congress of the United States in 1821, dedicates itself to furthering human well-being.  Definition in file switch_core. &gt; 2009-03-01 04:00 mod_db实现了数据库（sqlit或ODBC）操作的api与app（可在拨号计划中使用）。在lua脚本中，通过freeswitch.  This is very scalable - one can have multiple FreeSWITCH boxes receiving configuration information from a redundant db cluster.  FreeSWITCH FAX. x86_64: Header files, libraries and development documentation for dbh. &gt; 2009-03-01 04:00 600 3DFM--1. ext_id)) end) I have a local MYSQL db with XAMPP and a MYSQL db on my web host, i can connect to my db with php codes on my local or website. cpp:352 DBH handle 0x7f1a7406c240 Connected. db数据库中。 Name Last modified Size Parent Directory: 27-Nov-2019 12:28: 1kB . / 0ad/ 01-Oct-2016 13:32 - 0verkill/ 21-Sep-2014 07:56 - 2048/ 18-Apr-2016 05:22 - 2048-qt/ 18-Apr-2016 09:53 - 2ManDVD/ 12-Dec-2014 08:48 - 2bsd-diff/ 15-Oct-2013 11:27 - 2bsd-vi/ 21-Sep-2014 07:56 - 2d-rewriter/ 30-Sep-2015 22:58 - 2ping/ 08-Apr-2016 12:46 - 3dc/ 15-Oct-2013 05:57 - 3ddesktop/ 31-Dec-2014 14:11 - 3dm/ 03-Jul-2016 02:41 - 3dpong/ 15-Oct-2013 06 0ad-0.  now i want to connect to my db with Autoplay media studio using LUA FreeSWITCH 填补了简单的仅仅是路由电话的纯交换软件如 GnuGK 和 SER, 和那些主要用于 PABX 或 IVR的应用如 Asterisk 以及其衍生品之间的空白。FreeSWITCH 可以作为，如一个 PABX，一个 voicemail 系统, 一个 电话会议系统或一个 电话卡系统 – 可以使用任何语言来构建这样的 目录浏览： Non-Session API freeswitch.  Blog Coding Salaries in 2019: Updating the Stack Overflow Salary Calculator freeswitch@server&gt; lua test.  2017-11-27 15:14:46.  Important: To log stuff to the console, either use Verbose(), or use NoOp() but the latter will only work if you set &quot;verbosity&quot; to at least 3 (in the console, type &quot;set verbose 3&quot;). cpp:365 DBH handle 0x7ff24419e290 Connected.  Installation of OV500 is required basic knowledge of kamailio, Freeswitch and Linux in order to do installation.  Otherwise read the doc/source.  FreshPorts - new ports, applications. rpm 05-Apr-2016 14:19 628691505 0install-2. 39nb1 11 acme-0.  Added support for MessageLog to log sent and received RADIUS, Diameter and TACACS+ messages. rpm 05-Apr-2016 15:25 25788613 0ad-data-0. tgz audio/freeswitch-music: FreeSwitch Music - All Bitrates: net/bounce: Tool to forward TCP connection from one IP to another: wip/p5-Algorithm-Combinatorics: Efficient generation of combinatorial sequences: net/ucspi-tcp: Command-line tools for building TCP client-server applications: textproc/p5-XML-Feed: Perl syndication feed parser for both File Name ↓ File Size ↓ Date ↓ ; Parent directory/--0verkill-0. consoleLog(&quot;NOTICE&quot;, string.  2016-08-21 22:42:10.  Next message: [Freeswitch-users] DBH handle (nil) released. tgz: 2014-Aug-08 19:04:09: 295.  2015-06-23 20:44:49. tgz: 13-Jul-2019 08:59: 174kB 2048-cli-0. API freeswitch.  We are considering using mod_event_socket and then modify it to consume and produce the events internally instead of passing them to the socket.  Information on the Dhaka Bishwabidyalaya - contacts, students, faculty, finances. lua user_id : 2 phone_number : 5552223333 [INFO] switch_cpp. Dbh可方便地对数据库进行操作，后面以默认的Sqlite数据库为例 博文 来自： 农家小舍 Name Last modified Size Description; Parent Directory - 0ad-0. txz 16-Aug-2019 14:41 729191024 0d1n-2. tgz: 12-Oct-2019 04:54: 164kB 2048-cli-0.  &quot; application_name=&#39;freeswitch&#39;&quot; freeswitch. tgz 07-Jul-2019 03:27 26786 Name Last modified Size Parent Directory: 26-Nov-2019 18:22: 1kB .  Now freeswitch is running fine. Dbh #### 用于获取FreeSWITCH中的ODBC或和核心数据库sqlite的数据库操作句柄，执行sql查询。 该方法的好处是它使用FreeSWITCH提供的数据库连接池，比LuaSQL中为每个env:connect()创建一个单独的tcp连接会快很多。 用法如下： Official FusionPBX - A full-featured domain based multi-tenant PBX and voice switch for FreeSwitch. 11BSD diff utility 2bsd-vi-050325_1-- The original vi editor, updated to run on modern OSes File Name ↓ File Size ↓ Date ↓ ; Parent directory/--0verkill-0.  The a dvantage of this method is that it makes use of connection pooling provided by FreeSWITCH which gives a nice increase in speed when compared to creating a new TCP connection for each LuaSQL env:connect().  I&#39;ve seen this poll too late, although it&#39;s interesting that the most used Perl editor is the vi family (where I&#39;d belong) with 34%, followed not very closely by Emacs (13%).  通过批处理&amp;lpar;bat&amp;rpar;命令创建mysql数据库及用户等 Applications for FusionPBX.  – suren Oct 25 &#39;16 at 7:59 Official FusionPBX - A full-featured domain based multi-tenant PBX and voice switch for FreeSwitch. Dbh The Dbh object is a handle to all kinds of databases supported natively by FreeSWITCH, namely: SQLite (a filesystem-based database, suitable for moderate, non-heavy parallel-concurrent access), PostgreSQL (a heavy duty, Enterprise- and Carrier-ready, massively parallel concurrent-access database), and ODBC (ODBC is a middleware that gives you access to all databases that have an ODBC-compatible driver. 99.  FreeSWITCH needs permission to read all its files and write to the storage directory and its sub directories.  [Freeswitch-users] Best practice for centralized user registration database. com Thu Feb 9 18:13:45 MSK 2017 Freeswitch Install for Postgres Core, Db, Configuration, Dialplan, Directory with Lua Dbh FreeSWITCH fail2ban CentOS Установка FreeSwitch, SkypOpen, FreeTDM DAHDI mode, FusionPBX.  大家好，今天我们来聊下知识星球。 曾经，bbs是广大网友们的主战场，但三十年河东，三十年河西，现在，已经不是bbs的时代了。 0ad-0. cpp:382 DBH handle 0x7f543003f030 released.  can talk to the database via XML (you could use mod_xml_curl on FS side).  - fusionpbx/fusionpbx.  Verto Communicator lets you video chat with your team better by allowing you to creating different extension rooms to fit your needs.  The IVR handles approx 40 concurrent calls constantly, and we have instances of the IVR running on a 32bit Etch and 64bit Lenny boxes - both exhibit the same issue.  Aug 14, 2017 · For the sake of simplicity, the script actually creates the Dbh object by connecting to the my_db SQLite database in the default FreeSWITCH directory for SQLite databases (/usr/local/freeswitch/db). tbz: 297662: 2012-Mar-15 09:32: 2ManDVD-1.  Variables are given in the form ${varname}. 169603 [DEBUG] freeswitch_lua. tbz: 21172: 2010-Jun-09 01:15: 2bsd-vi. 5nb2 3 6tunnel-0. 6 and mysql are also installed and running as part of the same IVR application. 16_2-- 0verkill is a bloody 2D action Deathmatch-like game in ASCII-art .  2012/2/23 Anita Hall &lt;[hidden email]&gt; Hi We are considering writing our own module for processing IVR in C. Dbh可方便地对数据库进行操作，后面以默认的Sqlite数据库为例 博文 来自： 农家小舍 .  FreeSWITCH can be used as a Office PBX (aka. cpp:1443 lua script: connected to DB [INFO] switch_cpp. freeswitch dbh</span></li>

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
