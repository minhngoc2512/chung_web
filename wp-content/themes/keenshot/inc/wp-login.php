<?php
/**
 * Keenshot custom wp-login page
 *
 * @link 
 *
 * @package Keenshot
 */
function keenshot_custom_login_page() {

    $keenshot_login_banner = keenshot_wp_login_page_banner_upload();
    $keenshot_login_logo = keenshot_wp_login_page_logo_upload();

    echo '<style type="text/css">
    .acf-postbox > .hndle .acf-hndle-cog {
    display: block !important;
    }
    
    .login { 
    background-image:url('.esc_url($keenshot_login_banner,'keenshot').');
    background-repeat: no-repeat !important; 
    background-attachment: fixed !important; 
    background-position: center !important; 
    background-size: cover !important; 
    position: relative; 
    z-index: 999;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    overflow: hidden;
    }
    #login {
    padding: 5% 0 0;
    }
    .login:before { 
    background-color: rgba(0,0,0,0.7); 
    position: absolute; 
    width: 100%; 
    height: 100%; 
    left: 0; 
    top: 0; 
    content: ""; 
    z-index: -1; 
    }
    .login h1 {
    height: 100px;
    }
    .login h1:before { 
    content: "" !important; 
    display: block !important; 
    background: rgba(255,255,255, 0.2) !important; 
    height: 100px !important;
    width: 100% !important; 
    margin: 0 auto !important; 
    top: 0 !important; 
    -webkit-border-radius: 14px 14px 0 0 !important; 
    border-radius: 14px 14px 0 0 !important; 
    position: relative !important; 
    z-index: -1 !important; 
    }
    .login h1 a {
    background-image:url('.esc_url($keenshot_login_logo,'keenshot').');
    width: 100% !important; 
    margin: 0 auto !important; 
    height: 81px !important; 
    background-size: 170px !important; 
    position: relative; 
    top: -55px; 
    }
    .login h1 a:focus { 
    outline: 0 !important; 
    box-shadow: none; 
    }
    .login form { 
    background: rgba(255,255,255, 0.2) !important; 
    margin-top: 0 !important; box-shadow: none !important; 
    -webkit-border-radius: 0 0 14px 14px !important; 
    border-radius: 0 0 14px 14px !important; 
    padding: 20px 24px 24px !important; 
    }
    .login form .input, .login form input[type=checkbox], .login input[type=text] {
    background: transparent !important;
    padding: 12px 10px 15px 10px !important;
    color: #fff!important;
    -webkit-border-radius: 6px 6px 6px 6px !important;
    border-radius: 6px 6px 6px 6px !important;
    font-size: 20px!important;
    border: 1px solid rgb(255, 255, 255, 0.5) !important;
    }
    .login .forgetmenot #rememberme {
    width: 22px !important;
    height: 22px !important;
    padding: 3px 2px 2px 2px!important;
    }
    .login #wp-submit {
    border: none !important;
    box-shadow: none !important;
    clear: both !important;
    width: 100% !important;
    color: #fff !important;
    text-shadow: none !important;
    padding: 15px 0 !important;
    display: block !important;
    height: auto !important;
    font-size: 16px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    background-color: #1BB567 !important;
    margin: 18px auto 0 auto !important;
    border-radius: 6px 6px 6px 6px !important;
    -webkit-border-radius: 6px 6px 6px 6px !important;
    }
    .login label {
    color: #DDD !important;
    }
    .login a {
    color: #01B0E5 !important;
    }
    .login a:hover {
    color: #FFFFFF !important;
    }
    .login #nav, .login #backtoblog {
    text-align: center !important;
    }
    .login #nav, .login #backtoblog {
    margin: 10px 0 0;
    }
    .login #nav a:hover, .login #nav a:focus, .login #backtoblog a:hover, .login #backtoblog a:focus {
    outline: 0 !important;
    box-shadow: none !important;
    }
    .login #login_error, .login .message {
    color: #ddd;
    margin: 0;
    padding: 12px 15px !important;
    background: rgba(255,255,255, 0.2) !important;
    }
    .login a{color:#ffffff !important;}
    .login #login_error, .login .message, .login .success{border-left:4px solid#F04E43 !important}
    
    </style>';
    }
    add_action('login_head', 'keenshot_custom_login_page');
