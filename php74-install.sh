# php74-install.sh

sudo apt update
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install php7.4 php7.4-common php7.4-cli php7.4-fpm php7.4-gd php7.4-mysql php7.4-mbstring php7.4-curl php7.4-xml php7.4-zip php7.4-json

# install composer

sudo curl -s https://getcomposer.org/installer | php

sudo mv composer.phar /usr/local/bin/composer