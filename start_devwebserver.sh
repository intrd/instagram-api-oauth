#!/bin/bash
echo  'instagram-api-oauth'
echo  '@copyright (C) @intrd - http://dann.com.br'

echo '*** Loading development webserver, please do not close this window.'
echo '# Webserver listening on http:\\localhost:85'

sudo php -S 0.0.0.0:85 -t ./
