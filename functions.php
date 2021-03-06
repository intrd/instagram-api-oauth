<?php
/**
 * Instagram - easy oAuth API
 * 
* @package instagram-api-oauth
* @version 1.0
* @category api
* @author intrd - http://dann.com.br/
* @copyright 2015 intrd
* @license http://creativecommons.org/licenses/by/4.0/
* @link https://github.com/intrd/instagram-api-oauth/
* Dependencies: 
*   https://github.com/intrd/php-common/
*/

require_once($ext_path."php-common/functions.php"); //calling common functions

function instagram_oauth_searchbylocation($location,$api_instagram_access_token,$cookie_jar_file){
  $token = $api_instagram_access_token;
  $url = "https://api.instagram.com/v1/locations/$location/media/recent?access_token=".$token;
  $header = array();
  $get = url_get($url,$cookie_jar_file,"r",$header)["content"];
  $json = json_decode($get);
  return $json->data;
  return false; 
}

function instagram_oauth_locationsbygeo($lat,$lng,$distance,$api_instagram_access_token,$cookie_jar_file){
  $token = $api_instagram_access_token;
  $url = "https://api.instagram.com/v1/locations/search?lat=".$lat."&lng=".$lng."&distance=".$distance."&access_token=".$token;
  $header = array();
  $get = url_get($url,$cookie_jar_file,"r",$header)["content"];
  $json = json_decode($get);
  return $json;
  return false; 
}

function instagram_oauth_get_userid($username,$api_instagram_access_token,$cookie_jar_file){
  $token = $api_instagram_access_token;
  $url = "https://api.instagram.com/v1/users/search?q=".$username."&access_token=".$token;
  $header = array();
  $get = url_get($url,$cookie_jar_file,"r",$header)["content"];
  $json = json_decode($get);
  foreach($json->data as $user){
    if($user->username == $username){
      return $user->id;
    }
  }
  return false; 
}
function instagram_oauth_get_userdetails($userid,$api_instagram_access_token){
  global $api_instagram_access_token;
  $token = $api_instagram_access_token;
  $url = "https://api.instagram.com/v1/users/$userid/?access_token=".$token;
  $header = array();
  $get = url_get($url,$cookie_jar_file,"r",$header)["content"];
  $json = json_decode($get);
  $json=$json->data;
  if (isset($json->username)){
    return $json;
  }
  return false; 
}
function instagram_oauth_get_postdetails($shortcode,$api_instagram_access_token,$cookie_jar_file=false){
  $token = $api_instagram_access_token;
  $url = "https://api.instagram.com/v1/media/shortcode/$shortcode?access_token=".$token;
  $header = array();
  $get = url_get($url,$cookie_jar_file,"r",$header)["content"];
  $json = json_decode($get);
  //$json=$json->data;
  if (isset($json->data->likes->count)){
    return $json->data;
  }
  return false; 
}

function instagram_oauth_get_postdetails_mediaid($mediaid,$api_instagram_access_token,$cookie_jar_file=false){
  $token = $api_instagram_access_token;
  $url = "https://api.instagram.com/v1/media/$mediaid?access_token=".$token;
  $header = array();
  $get = url_get($url,$cookie_jar_file,"r",$header)["content"];
  $json = json_decode($get);
  //$json=$json->data;
  if (isset($json->data->likes->count)){
    return $json->data;
  }
  return false; 
}

function instagram_oauth_friendshipshow($username,$api_instagram_access_token,$cookie_jar_file){
  $token = $api_instagram_access_token;
  //$username="";
  $url = "https://api.instagram.com/v1/users/$username/relationship?"."&access_token=".$token;
  //die;
  $header = array();
  $get = url_get($url,$cookie_jar_file,"wb",$header)["content"];
  $json = json_decode($get);
  //vd($json);
  //die;
  if (isset($json->data->incoming_status)){
    return $json->data;
  }
  return false; 
}

function instagram_oauth_getshortcode($object,$api_instagram_access_token,$cookie){
  //echo "\n!!! converting instagram media-id.. ";
  $scode=instagram_oauth_get_postdetails_mediaid($object,$api_instagram_access_token,$cookie); //convertendo insta mediaid to url
  //vd($scode);
  //die;
  if (isset($scode->link) and strlen($scode->link)>6){
    $ismedia=$object;
    //$object=$scode->user->username;
    //$object=$target[4];
    $shortcode=$scode->link;
    //$shortcode=getInnerString("/p/","/",$shortcode);
    //echo $object;
    //vd($scode);
    //die;
    //echo "\n  ***$shortcode|$object";
    return $shortcode;
  }else{
    echo "\n  ***CRITICAL converting mediaid!";
    return false;
  }
}
?>