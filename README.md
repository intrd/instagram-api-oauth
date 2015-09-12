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
* Dependencies: 
* 	https://github.com/intrd/php-common/
*/
```
## System installation
```
apt-get update & apt-get upgrade
apt-get install php5-curl php5-sqlite php5-cli

apt-get install git
git clone https://github.com/intrd/instagram-api-oauth/
```
**Attention**: stay outside main project path and install dependencies/directory structure..

## Dependencies installation
```
git clone [all git dependencies listed at header]
ex: git clone https://github.com/intrd/php-common/
```

## Directory structure
Create these directories & files:

* ../LOGS 
* ../TMP

Generate INSTAGRAM oauth token
```
https://api.instagram.com/oauth/authorize/?client_id=CLIENT-ID&redirect_uri=REDIRECT-URI&response_type=code&scope=comments+relationships+likes
```
and..
```
curl -F 'client_id=CLIENT_ID' \
    -F 'client_secret=CLIENT_SECRET' \
    -F 'grant_type=authorization_code' \
    -F 'redirect_uri=AUTHORIZATION_REDIRECT_URI' \
    -F 'code=CODE' \
    https://api.instagram.com/oauth/access_token
```