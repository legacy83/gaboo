#!/bin/sh

wp_location='/var/www/www.192.168.27.14.xip.io/public_html'

###########################################################
# WordPress Setup
###########################################################

cd "$wp_location" && wp core update

cd "$wp_location" && wp theme install twentyfifteen
cd "$wp_location" && wp theme update --all

cd "$wp_location" && wp plugin install jetpack
cd "$wp_location" && wp plugin install regenerate-thumbnails
cd "$wp_location" && wp plugin install wordpress-importer
cd "$wp_location" && wp plugin update --all