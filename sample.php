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

$username="dfsgds";
$api_instagram_access_token="1828899312.dfgdg.45646456456456456456456"; //see README.md to learn how to create your own access token
$arv=$tmp_path.$username."_dsamplecookie"; //cookie path (if u want to force logout, just delete this file)

$userid=instagram_oauth_get_userid($username,$api_instagram_access_token,$arv);
vd($search);

//$lat="-22.910876";
//$lng="-47.054306";
//$distance="100";
//$search=instagram_oauth_locationsbygeo($lat,$lng,$distance,$api_instagram_access_token,$arv);
//vd($search);

//$location="6782321";
//$search=instagram_oauth_searchbylocation($location,$api_instagram_access_token,$arv);
//vd($search);

?>