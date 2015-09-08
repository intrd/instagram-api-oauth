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

include("sample-config.php");

$userdata=file($ext_path."instagram-login.txt"); /* CREATE THIS FILE W/ LOGIN/PW LINEOVERLINE */
$api_instagram_access_token=trim($userdata[2]);
echo "***logged_token: ".$api_instagram_access_token;
$arv=$tmp_path."arv"; //cookie path (if u want to force logout, just delete this file)

$username="intrd";
$userid=instagram_oauth_get_userid($username,$api_instagram_access_token,$arv);
vd($userid);


?>