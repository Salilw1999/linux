sudo apt update -y
sudo apt-get update -y
sudo apt-get install apache2 php php8.3-fpm mysql-server -y
sudo service apache2 restart
sudo service php restart
sudo service php8.3-fpm restart
sudo service mysql restart
cd /var/www/html
sudo touch index.html my.php
echo "hi" | sudo tee index.html
echo "<?php phpinfo(); ?>" | sudo tee my.php
