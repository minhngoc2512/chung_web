<!DOCTYPE html>

<html lang="en-US">

<head>



	

  <meta charset="UTF-8">



	

  <meta name="viewport" content="width=device-width, initial-scale=1">



 

	





  <title>Bert tensorflow example</title>

<!-- This site is optimized with the Yoast SEO plugin v12.7 -  -->

  <meta name="description" content="Bert tensorflow example">



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

							

<h1 class="entry-title">Bert tensorflow example</h1>

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

  <li><span class="toc_number toc_depth_1">0 [3], available as pre-trained models for anyone to use for any language task.  How do I do that? I know that it is a really simple questions, but I need some help getting started.  A vocab file ( vocab.  The following are code examples for showing how to use tensorflow.  Here is the link to sample code.  The code block transforms a piece of text into a BERT acceptable form.  We next build a custom layer In order to be compatible with both BERT and OpenAI I had to assume a standard ordering for the vocabulary, I&#39;m using OpenAI&#39;s so in the loading function of BERT there is a part to change the ordering; but this is an implementation detail and you can ignore it! Loading OpenAI model is tested with both tensorflow and theano as backend TensorFlow will generate tfevents files, which can be visualized with TensorBoard.  BertForTokenClassification is a fine-tuning model that includes BertModel and a token-level classifier on top of the BertModel.  It contains 1000 positive and 1000 negative samples in training set, while the testing set contains 500 positive and 500 negative samples.  Let’s go through a running example of how to export a Deep Segmentation CNN model for serving.  Enabling mixed precision; Glossary; Setup The bert_layer from TensorFlow Hub returns with a different pooled output for the representation of the entire input sequence.  BERT&nbsp; BERT has been uploaded to TensorFlow Hub.  Using these pre-built classes simplifies the process of modifying BERT for your purposes. 0 Bert model for sequence classification on the MRPC task of the GLUE benchmark: General Language Understanding Evaluation. 0 delivers up to 3x faster training performance using mixed precision on Volta and Turing GPUs with a few lines of code, used for example in ResNet-50 and BERT.  A module is a self-contained piece of a TensorFlow graph, along with its weights and assets, that can be reused across different tasks in a process known as transfer learning.  Serving with Docker and Tensorflow Once you have saved your model as a saved_model.  TensorFlow 2.  They explore the design of these large-scale GPU systems and detail how to run TensorFlow at scale using BERT and AI plus high-performance computing (HPC) applications as examples.  If you want to use Tensorflow 1. py.  For example, you can put it on a cost-per-use GPU machine, serving multiple teams simultaneously.  The example of predicting movie review , a binary classification problem is provided as an example code in the repository.  Skip gram is the opposite.  So, to use Bert for nextSentence input two sentences in a format used for training: Before reading this article, it is highly recommended that you already know how to fine tune a BERT base model with QA dataset such as SQuAD.  We need to choose which BERT pre-trained weights we want.  Finetuning BERT with Tensorflow estimators in only a few lines of code. json ) which specifies the hyperparameters of the model.  You&#39;ll notice that the &quot;sequence&quot; dimension has been squashed, so this represents a pooled embedding of the input sequence. 0 Bert models on GLUE¶. tsv and dev. __version Now we can put together the model definition file.  However, we need to install bert-tensorflow first.  Maybe “reading a book” is not a good example as everyone should read at least two to four books per month! This is a series of articles for exploring “Mueller Report” by using Spark NLP library built on top of Apache Spark and pre-trained models powered by TensorFlow and BERT.  My example is a sample dataset of IMDB reviews.  These are the features which will be passed to the model.  In your example, you have 1 input sequence, which was 15 tokens long, and each token was embedding into a 768-dimensional space. ” is 0.  I&#39;m a bot, bleep, bloop.  BERT(Bidirectional Encoder Representations from Transformers) is a method of representations pre-training language, it’s trained on general-purpose “language understanding” model on a large text corpus like Wikipedia.  The amount of human-labeled training data in these tasks ranges from 2,500 examples to 400,000 examples, and BERT substantially improves upon the state-of-the-art accuracy on all of them: The complete example can be found example6.  TensorFlow コード： BERTモデルアーキテクチャ構築の為(ほぼ標準的なTransformerのアーキテクチャ) 事前学習したチェックポイント：論文中のBERT-BaseとBERT-Largeそれぞれにつき、小文字化バージョンと大文字小文字混在バージョンの両方。 Aug 13, 2019 · In our example, BERT provides a high-quality language model that is fine-tuned for question answering, but is suitable for other tasks such as sentence classification and sentiment analysis. org mailing list.  Model overview.  If you&#39;re not sure which to choose, learn more about installing packages. zip file contains three items: A TensorFlow checkpoint (bert_model.  Sep 17, 2019 · BERT-Base, Cased: 12-layers, 768-hidden, 12-attention-heads , 110M parameters BERT-Large, Cased: 24-layers, 1024-hidden, 16-attention-heads, 340M parameters. x .  The token-level classifier is a linear layer that takes as input the last hidden state of the sequence.  If you look at create_model function present in notebook.  Word Embeddings as well as Bert Embeddings are now annotators, just like any other component in the library.  Jan 02, 2019 · The first thing to do is decoupling the main BERT model and the downstream network. 3 perplexity on WikiText 103 for the Transformer-XL).  Let’s test it out if the preprocessor is working properly- Let us install bert-text package and load the API.  As we are dealing with one sentence per example, we set segment_id to be 0 and&nbsp; 1 Jun 2019 Google open-sourced pre-trained versions of BERT in November 2018 but This model borrows heavily from the tf 2.  + Keras is TensorFlow&#39;s high-level API for building deep learning models by composing Keras Layer objects.  home Home All collections All models All publishers.  Simple SGD example for tensorflow.  The TFRecord file format is a simple record-oriented binary format that many TensorFlow applications use for training data. KerasLayer that gets initialized with the URL (or filesystem path) of a SavedModel and then provides the computation from the SavedModel, including its pre-trained weights. js API usage.  Table Of Contents.  Nov 02, 2018 · BERT also improves the state-of-the-art by 7.  Awesome Open Source is not affiliated with the legal entity who owns the &quot; Cyberzhg &quot; organization. cast_to_lowest(inputs) Jun 15, 2018 · To use SavedModel, TensorFlow provides an easy to use high-level utility class called SavedModelBuilder.  Feb 01, 2016 · This means that when we insert “batches” of data in training, we can easily adjust how many examples we train on in a single step without changing the entire algorithm.  In a previous post, we demonstrated how to integrate ELMo embeddings as a custom Keras layer to simplify model prototyping using Tensorflow hub.  Fine-tuning the library TensorFlow 2.  You can also pre-encode all your sequences and store their encodings to a TFRecord file, then later load it to build a tf.  This repo contains a TensorFlow 2. 0 is tightly integrated with TensorRT and uses an improved API to deliver better usability and high performance during inference on NVIDIA T4 Cloud GPUs on Google Cloud. 0.  We can now scale a complete deep learning model using Keras and just two lines of code.  Nov 25, 2019 · BioBert For TensorFlow.  Oct 18, 2019 · BERT-Base, Chinese: Chinese Simplified and Traditional, 12-layer, 768-hidden, 12-heads, 110M parameters; Each .  Take language models as an example: the state-of-the-art are transformer-based architectures like BERT [1], XLNet [2] or ERNIE 2.  ~91 F1 on SQuAD for BERT, ~88 F1 on RocStories for OpenAI GPT and ~18.  BERT models are available on Tensorflow Hub (TF-Hub). 0 published example on&nbsp; You can convert any TensorFlow checkpoint for BERT (in particular the pre- trained Here is an example of the conversion process for a pre-trained BERT- Base&nbsp; Bidirectional Encoder Representations from Transformers (BERT) is a technique for NLP (Natural Language Processing) pre-training developed by Google. js Example I have implemented an app which includes TensorFlow.  The Tensorflow Object Detection API can also be used with Google Colab.  We used BERT as the base model to solve an NLP classification task. Dec 06, 2019 · BERT For TensorFlow.  Arturo Sánchez Palacio.  BERT implemented in Keras.  You need to update the serving_input_fn function to include them.  In this example, we are BERT models are available on Tensorflow Hub (TF-Hub).  My goal is to use this Model and load it into Python.  A vocab file (vocab.  Input a word and ask the network to predict its context. txt) to map WordPiece to word id.  If your installation works correctly you should see the following output: Figure 1: Tensorflow Object Detection API Example Install Tensorflow Object Detection on Google Colab.  The following is an example of data preprocessing for BERT.  Check out the following hand picked example.  How to get sentence embedding using BERT? from transformers import BertTokenizer tokenizer=BertTokenizer. 0276.  It’s a bidirectional transformer pre-trained using a combination of masked language modeling objective and next sentence prediction on a large corpus comprising the Toronto Book Corpus and Wikipedia.  This group is intended for those contributing to the TensorFlow project.  As a consequence, the resulting accuracies are slightly lower than the reference performance produced on TPUs.  bert-as-a-service is an open source project that provides BERT sentence embeddings optimized for production.  More specifically, that 12/24-layer stacked multi-head attention network should be hosted in another process or even on another machine.  Today’s best-performing systems in language processing or computer vision use huge neural architectures.  arrow_drop_up These implementations have been tested on several datasets (see the examples) and should match the performances of the associated TensorFlow implementations (e.  Nov 26, 2015 · Simple end-to-end TensorFlow examples A walk-through with code for using TensorFlow on some simple simulated data sets.  Sep 24, 2019 · Another great example of Google listening to its user community and implementing what is required.  They are extracted from open source Python projects.  Links to pre-trained versions of BERT-Base and BERT-Large from the paper.  Make it Work BERT models are available on Tensorflow Hub (TF-Hub).  Let’s check an example of Text Binary Classification using BERT.  After reading this post, you will also be able to use Huggingface’s Transformers library [1] in order to create state of the art models using a new technique called transfer learning and using a “model backbone” from Google (BERT [2]) that was pre-trained on Wikipedia.  Neil Truong, Kari Briski, and Khoa Ho walk you through their experience running TensorFlow at scale on GPU clusters like the DGX SuperPod and the Summit supercomputer. 0 is a huge step forward and I highly recommend checking it out today.  Contribute to tensorflow/examples development by creating an account on GitHub.  This solution pattern creates a proof of concept ecosystem to test if Kubernetes is a viable solution to provide Tensorflow models in production in the cloud.  I am able to do predictions. py 实现ERNIE的逻辑。 clone代码：wipen/bert TensorFlow 2.  This folder provides a script and recipe to train BERT for TensorFlow to achieve state-of-the-art accuracy on biomedical text-mining and is tested and maintained by NVIDIA.  26 Aug 2019 BERT is the latest and greatest in Natural Language Processing tech.  I found a few prewritten Repos but I want to write my own in Tensorflow 2.  We trained using Google&#39;s Tensorflow code on a single cloud TPU v2 with standard settings. 0 With GPT-2 for Answer Generator.  Model architecture; Default configuration; Feature support matrix.  For this post, we measured fine tuning performance (training and inference) for the BERT (Bidirectional Encoder Representations from Transformers) implementation in TensorFlow using NVIDIA Quadro RTX 8000 GPUs.  第一部分Bert代码速读，提示Bert代码中容易忽略的关键点，目的是让你快速的熟悉代码并且跑起来.  In this post I show the overview of for Distributed TensorFlow for your first beginning through the development life cycle including provisioning, programming, running, and evaluation with the basic example.  We next build a custom layer Jun 23, 2019 · When converting the tensorflow checkpoint into the pytorch, it&#39;s expected to choice the &quot;bert_model.  Word2vec model Word2VecThere are two training methods:CBOWandSkip-gram。 The core idea of cbow is to predict a word in context.  The second element of the tuple is the &quot;pooled output&quot;.  BertForTokenClassification is a fine-tuning model that wraps BertModel and adds token-level classifier on top of the BertModel. estimator, a high-level TensorFlow API.  Clone via HTTPS Clone with Git or checkout with SVN using the repository’s web address.  Apr 10, 2018 · In this post I show basic end-to-end example (training and validation) for Distributed TensorFlow and see how it works.  The difference between the pooled embedding and the first token’s embedding in the sample sentence “This is a nice sentence.  In this example, we are Throughput is measured as examples/sec.  The library also includes task-specific classes for token classification, question answering, next sentence prediciton, etc.  Sep 09, 2019 · Comprehensive TensorFlow.  A great example of this is the recent announcement of how the BERT model is now a major force behind Google Search. 0 alpha is here and it is a much easier version to work with in a pythonic way compared to 1.  This piece emphasizes some of the work we are doing here at Daitan Group.  BERT in Keras with Tensorflow hub.  21 Dec 2018 We present BERT model: Pre-training of Deep Bidirectional Transformers context • Not all tokens were masked in the same way (example sentence “My dog is .  It is deep bidirectional representations on both left and right context in all layers.  However, as compared to other text embedding models such as Universal Sentence Encoder (USE) or Elmo which can directly consume a list of This guide is about integrating pre-trained Tensorflow models with Keras. .  Mar 20, 2019 · Normally, BERT represents a general language modeling which supports transfer learning and fine-tuning on specific tasks, however, in this post we will only touch the feature extraction side of BERT by just extracting ELMo-like word embeddings from it, using Keras and TensorFlow.  Non-Typical Examples of TensorFlow in Action Sep 30, 2019 · TensorFlow 2. tsv should look like: Three examples on how to use Bert (in the examples folder): Three notebooks that were used to check that the TensorFlow and PyTorch models behave&nbsp; 2 Aug 2019 import tensorflow as tf; print(tf.  I highly recommend this article – Serving Google BERT in Production using Tensorflow and ZeroMQ .  I have created a binary classifier with Tensorflow BERT language model.  from_dict(data)# Merge positive and negative examples, add a polarity column and shuffle.  To pre-train BERT, you can either start with the pretrained checkpoints available online (Figure 1 (left)) or pre-train BERT on your own custom corpus (Figure 1 (right)).  Google has decided to do this, in part, due to a BERTをインストールし、学習済みモデルをセットアップし、とりあえず動かすところまで到達するための手順をおさらいするメモである。 後々、同様の作業が必要になった時に参照するためのものである。 GoogleのBERT A TensorFlow checkpoint (bert_model. 0 analyticsindiamag.  It takes some arguments.  However, as compared to other text embedding models such as Universal Sentence Encoder (USE) or Elmo which can directly consume a list of Thanks for contributing an answer to Stack Overflow! Please be sure to answer the question.  Jun 10, 2019 · TF. py for an example of how to use the TF Hub module, or run an example in the&nbsp; How To Build A BERT Classifier Model With TensorFlow 2.  The answer is to use weights, what was used nor next sentence trainings, and logits from there.  TensorFlow Serving Libraries — An Overview TensorFlow Lite for mobile and embedded devices For Production TensorFlow Extended for end-to-end ML components ERNIE基于百度的paddle-paddle框架，手头没有配置好的环境，那么能否在Tensorflow下复现ERNIE呢？ 其实我们可以看出ERNIE与BERT非常相似，区别主要是在pretrain中选择[MASK]字符的逻辑。那么我们就可以通过改造BERT的 create_pretraining_data.  To avoid out-of-memory errors, we used BERT-base and a smaller max_seq_length (256) to train SQuAD 1.  The BERT algorithm is built on top of breakthrough techniques such as seq2seq (sequence-to-sequence) models and transformers.  versus.  Another example of a more clever optimization (and using TensorFlow Lite supports post-training quantization and quantization-aware training.  In this page, we write some tutorials and examples on how to use tensorflow, you can build some AI applications by following our tutorials and examples.  You can also save this page to your account. py script which can be used to fine-tune a multiple choice classifier using BERT, for example for the Swag task.  第二部分总结下我在服务化部署Bert中趟过的一些坑.  BERT, or Bidirectional Encoder Representations from Transformers, is a method of pre-training language representations which obtains state-of-the-art results on a wide array of Natural Language Processing tasks.  An FAQ at the end.  Google open-sourced pre-trained versions of BERT in November 2018 but haven’t released a pre-trained version for tf 2.  This is because the main part of the notebook &quot;Keras Bert&quot; and other potentially trademarked words, copyrighted images and copyrighted readme contents likely belong to the legal entity who owns the &quot;Cyberzhg&quot; organization.  For example, to define a layer that is done in float16 when mixed precision is enabled Variables will be created in float32 and automatically cast to float16 as needed def cast_inputs(self, inputs): return self.  I was checking out this example using BERT model for movie review sentiment analysis, and a few others on how to use Tensorflow hub models.  examples / lite / examples / bert_qa / Tian Lin and Copybara-Service For Bert Good News: Google has uploaded BERT to TensorFlow Hub which means we can directly use the pre-trained models for our NLP problems be it text classification or sentence similarity etc. txt ) to map WordPiece to word id.  GitHub Gist: instantly share code, notes, and snippets.  Google believes this step (or progress in natural language understanding as applied in search) represents “the biggest leap forward in the past five years, and one of the biggest leaps forward in the history of Search”.  Take language models as an example: the state-of-the-art are transformer-based&nbsp; Insights into pre-training a German BERT model from scratch.  We didn&#39;t tune hyper-parameters (learning rate) for different numbers of GPUs.  The most common of these operations is text tokenization. Token Aug 02, 2019 · Discover how to build an automated intent classification model by leveraging pre-training data using a BERT encoder, BigQuery, and Google Data Studio. 1. x get the file from my Github instead.  Jun 15, 2018 · If you want to go along with the tutorial and run the example on your machine, follow it as is.  Links • TensorFlow code and pre-trained models for BERT:&nbsp; 2 Jul 2019 To provide a pragmatic example rather than a boring “Hello, World!” style example.  30 Sep 2019 BERT became an essential ingredient of many NLP deep learning pipelines.  Quick links. index&quot;, as the input file.  It contains implementations of two things: a BERT tf.  It can make us to build some AI applications easily.  If you don’t have the Tensorflow Object Detection API installed yet you can check out my article that goes through the installation step-by-step and at the end tests the functionality by executing the example notebook.  First Steps with TensorFlow: Programming Exercises Estimated Time: 55 minutes As you progress through Machine Learning Crash Course, you&#39;ll put the principles and techniques you learn into practice by coding models using tf.  Often, we would like to have fine control of learning rate as the training progresses. A common pattern that I notice is the output from the last later of the model is not directly fed to softmax or similar activation function. _mixed_precision_policy. Dataset .  Download files. ckpt) containing the pre-trained weights (which is actually 3 files).  But, if you only want to know about TensorFlow Serving, you can concentrate on the first two sections.  It is a popular deep learning platform in word.  Complete code for this example BERT Multi-GPU implementation using TensorFlow and Horovod with code February 06, 2019 BERT is Google&#39;s pre-training language representations which obtained the state-of-the-art results on a wide range of Natural Language Processing tasks.  7.  第三部分参考资料（同样有干货） 第四部分总结性能和效果，给出实践Bert最低成本路径。 一、Bert代码速读 The pytorch-pretrained-bert package provides a BertForTokenClassification class for token-level predictions.  See run_classifier_with_tfhub.  However, as compared to other text embedding models such as Universal Sentence Encoder (USE) or Elmo which can directly consume a list of Jun 01, 2019 · Tensorflow 2.  Now I want to export this model.  I’ve been reading papers about deep learning for several years now, but until recently hadn’t dug in and implemented any models using deep learning techniques for myself.  Otherwise, you will see that the model can learn nothing and give almost same random outputs for any inputs.  Predicting Movie Review Sentiment with BERT on TF Hub - shows how to&nbsp; 10 Sep 2019 BERT models are available on Tensorflow Hub (TF-Hub).  The example notebook can be reused for our new application.  TensorFlow is an open source platform for machine learning from Google.  of the individual chunks.  Link to a Colab for running BERT with free Cloud TPU access.  Asking for help, clarification, or responding to other answers.  Loading a pre-trained model, along with its tokenizer can be done in a few lines of code. from_pretrained(&#39;bert-base-uncased&#39;) sentence=&#39;I really enjoyed this movie a lot. g.  In a recent blog post, Google announced they have open-sourced BERT, their state-of-the-art training technique for Natural Language Processing (NLP) .  This repository provides a script and recipe to train the BERT model for TensorFlow to achieve state-of-the-art accuracy, and is tested and maintained by NVIDIA.  Based on the script run_tf_glue. Someone has linked to this thread from another place on reddit: [] [P] Keras BERT for Medical Question Answer Retrieval using Tensorflow 2.  Nov 24, 2019 · BERT for TensorFlow v2.  The tensorflow_hub library provides the class hub.  Therefore, you will have 2 saved models at hand before… It was created using a pre-trained BERT model fine-tuned on SQuAD 1.  https://pythonprogramming This tutorial goes over deploying a Tensorflow model built using BERT in Kubernetes on Google Cloud. ckpt&quot;, instead of &quot;bert_model.  For example, this is the visualization of classification accuracy during the training (blue is the training accuracy, red is the validation accuracy): Learning Rate Schedule.  This tutorial goes over deploying a Tensorflow model built using BERT in Kubernetes on Google Cloud.  Building a Multi-label Text Classifier using BERT and TensorFlow In a multi-label classification problem, the training set is composed of instances each can be assigned with multiple categories… TensorFlow also supports an ecosystem of powerful add-on libraries and models to experiment with, including Ragged Tensors, TensorFlow Probability, Tensor2Tensor and BERT.  The seq2seq model is a network that converts a given sequence of words into a different sequence and is capable of relating the words that seem more important. Module and a Keras layer built on top of it.  WHAT IS BERT? Bidirectional Encoder Representations from Transformers A new method of pre-training language representations for a wide array of NLP tasks Model Architecture is a multi-layer bidirectional Transformer encoder which embraces • Multi-Head Attention • Fully Connected Feed Forward with a GELU activation Bert Model with a next sentence prediction (classification) head on top.  Push-button replication of the MultiNLI and SQuAD v1. Provide details and share your research! But avoid ….  The BERT model was proposed in BERT: Pre-training of Deep Bidirectional Transformers for Language Understanding by Jacob Devlin, Ming-Wei Chang, Kenton Lee and Kristina Toutanova. 0 .  Download the file for your platform. Text is a TensorFlow 2. &#39; #1.  It is not a support forum.  Here is an example of loading the BERT and GPT-2 TensorFlow models as well as their tokenizers: Sep 14, 2016 · In this deep learning with TensorFlow tutorial, we cover how to implement a Recurrent Neural Network, with an LSTM (long short term memory) cell with the MNIST dataset.  BertForTokenClassification.  You can vote up the examples you like or vote down the ones you don&#39;t like. ckpt. assign().  BERT-Base, Chinese: Chinese Simplified and Traditional, 12-layer, 768-hidden, 12-heads, 110M parameters; Each .  I&#39;m new to both Tensorflow and Machine Learning and I&#39;m trying to do something with Pose recognition. 0 Changes Aurélien Géron draws side-by-side state-machine- based models and several examples of using this for semantic&nbsp; 14 фев 2019 Применение BERT в задаче мультиклассовой классификации токсичных реализацию BERT с открытым кодом на tensorflow и представил следующие &quot;&quot;&quot;A single training/test example for sequence classification.  We trained&nbsp; 14 May 2019 In this tutorial, we will use BERT to extract features, namely word and us into lessons about tensorflow, when the purpose here is BERT!) 13 Feb 2019 BERT can provide significant improvements to simple text Here is an example of what the data in train.  Object Detection.  LSTM network is a good example for seq2seq model.  A config file ( bert_config.  To compare the two embeddings, let’s use cosine similarity. 1 results from the paper. 6% absolute on the very challenging GLUE benchmark, a set of 9 diverse Natural Language Understanding (NLU) tasks.  For detailed preprocessing check out the Step By Step Guide To Implement Multi-Class Classification With BERT &amp; Tensorflow.  This means, embeddings can be cached on memory through DataFrames, can be saved on disk and shared as part of pipelines! We upgraded the TensorFlow version and also started using contrib LSTM Cells.  For example, if we don’t have access to a Google TPU, we’d rather stick with the Base models.  First I will walk you through the app functionality and then will dive into implementation details.  Features; Mixed precision training.  Lexalytics VP of Marketing, For example: He wound the clock.  Questions about usage of TensorFlow are best addressed elsewhere: StackOverflow , or the discuss@tensorflow. 0 library that can be easily installed using PIP and is designed to ease this problem by providing ops to handle the preprocessing regularly found in text-based models, and other features useful for language modeling not provided by core TensorFlow.  Dec 18, 2019 · Fine Tune BERT Large in Less Than 20 Minutes. 0 Keras implementation of google-research/bert with support for loading of the original pre-trained weights, and producing activations numerically identical to the one calculated by the original model.  • Transformer and BERT are being hyped everywhere&nbsp; 15 Oct 2018 TensorFlow 2.  This tutorial goes over deploying a Tensorflow model built using BERT in Kubernetes on Google&nbsp; 8 Aug 2019 Then, we apply one to BERT using TensorFlow Lite.  In TensorFlow terms, we build the computation graph and then insert data as we wish.  2 Jan 2019 Serving Google BERT in Production using Tensorflow and ZeroMQ For example in the neural information retrieval, query and document&nbsp; Google Colab, Tensorflow, Kubernetes on Google Cloud .  Code for pre-training data generation and training.  TensorFlow Hub is a library for the publication, discovery, and consumption of reusable parts of machine learning models.  It also includes examples of fine tuning (see below) and inference. com/bert-classifier-with-tensorflow-2-0 Text classification - example for building an IMDB sentiment classifier with Estimator.  30 Oct 2019 This story shows a simple usage of the BERT [1] embedding using We will implement a model based on the example on TensorFlow Hub.  An example on how to use this class is given in the run_swag.  The SavedModelBuilder class provides functionalities to save multiple meta graphs, associated variables, and assets.  These implementations have been tested on several datasets (see the examples) and should match the performances of the associated TensorFlow implementations (e. &quot;&quot;&quot;. pb (obtained for example with the export_savedmodel method), you can set up a server which will run the model and Jul 22, 2019 · For example, in this tutorial we will use BertForSequenceClassification. !pip install bert-text from bert_text import run_on_dfs. 1 dataset. bert tensorflow example</span></li>

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
