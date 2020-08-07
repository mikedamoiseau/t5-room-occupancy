#!/bin/bash -e

echo "Installing WordPress client tool..."
cd /var/www/html && curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp

wp_present() {
  [ -f wp-login.php ]
}

wp_config_present() {
  [ -f wp-config.php ]
}

wait_for_db() {
  counter=0
  echo "Connecting to mysql"
  while ! curl --silent mysql:3306 >/dev/null; do
    counter=$((counter+1))
    if [ $counter == 30 ]; then
      echo "Error: Couldn't connect to mysql."
      exit 1
    fi
    echo "Trying to connect to mysql. Attempt $counter."
    sleep 5
  done
}

##########

echo "Install MySQL client if needed..."
apt-get update && apt-get install mariadb-client -y

# If no WordPress files found, download the core
if ! wp_present; then
  echo "wp core download --allow-root"
  wp core download --allow-root
fi

# If no configuration file found, configure and install the instance
if ! wp_config_present; then
  wp config create --dbname="t5_room_occupancy" --dbuser=root --dbpass="wp" --dbhost=db --dbprefix="t5ro_" --allow-root --extra-php <<PHP
  define( 'WP_DEBUG', true );
  define( 'WP_DEBUG_LOG', true );
  define( 'SAVEQUERIES', true );
  define( 'WP_DEBUG_DISPLAY', false );
PHP
  wp core install --url="localhost" --title="t5-room-occupancy" --admin_user="adminwp" --admin_password="qwertyUIOP123\$%^" --admin_email="michael.damoiseau@buzzwoo.de" --skip-email --allow-root
fi

# Wait for the database
# wait_for_db

# Install the development plugins
wp --allow-root plugin install debug-bar debug-bar-console debug-bar-shortcodes debug-bar-constants debug-bar-post-types debug-bar-cron debug-bar-actions-and-filters-addon debug-bar-transients debug-bar-list-dependencies debug-bar-remote-requests --activate

  echo "Starting the PHP-FPM process..."
  php-fpm

