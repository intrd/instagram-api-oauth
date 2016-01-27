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
* 	https://github.com/intrd/php-common/
*/

$debug=false;
$root=dirname(__FILE__)."/";
$ext_path=$root."../";
$tmp_path=$ext_path."TMP/";

include("functions.php");

$username="test";
$api_instagram_access_token="3453453.sdafsddsf.9ds8df8as99ds8df89ds9ds"; //see README.md to learn how to create your own access token
$arv=$tmp_path.$username."_samplecookie"; //cookie path (if u want to force logout, just delete this file)

$userid=instagram_oauth_get_userid($username,$api_instagram_access_token,$arv);
vd($userid);


?>