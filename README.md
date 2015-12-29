```
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
* Dependencies: Yes, details at README.md
*/
```
## System installation
```
apt-get update & apt-get upgrade
apt-get install php5-curl php5-sqlite php5-cli

apt-get install git
git clone https://bitbucket.org/intrd/instagram-api-oauth/

# Dependencies.. 
Stay outside and clone all dependencies below..
git clone https://github.com/intrd/php-common/ 
```
## Directory structure
Follow this sample structure..
```
|_Your_project_directory
 |_index.php //index of your project calling instagram-api-oauth (see sample.php)
 |_instagram-api-oauth //this cloned directory
  |_sample.php //sample.php testing/showing how to call functions from instagram-api-oauth
 |_php-common //depencency
 |_TMP //temp directory for instagram-api-oauth

```

##Generate INSTAGRAM access token
```
To generate CODE, go to: https://api.instagram.com/oauth/authorize/?client_id=CLIENT-ID&redirect_uri=REDIRECT-URI&response_type=code&scope=comments+relationships+likes
```
get generate CODE at URI and..
```
curl -F 'client_id=CLIENT_ID' \
    -F 'client_secret=CLIENT_SECRET' \
    -F 'grant_type=authorization_code' \
    -F 'redirect_uri=AUTHORIZATION_REDIRECT_URI' \
    -F 'code=CODE' \
    https://api.instagram.com/oauth/access_token
```
...this will return a valid access token