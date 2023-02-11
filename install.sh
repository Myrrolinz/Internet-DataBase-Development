#!/usr/bin/env bash

# Team:布利啾啾迪布利多,NKU
# coding by 徐云凯 1713667
# 一键部署脚本

if ! [ -x "$(command -v php)" ]; then
  echo 'Error: php is not installed.' >&2
  exit 1
fi

if ! [ -x "$(command -v mysql)" ]; then
  echo 'Error: mysql is not installed.' >&2
  exit 1
fi

if ! [ -x "$(command -v python3)" ]; then
  echo 'Error: python3 is not installed.' >&2
  exit 1
fi

if ! [ -x "$(command -v pip3)" ]; then
  echo 'Error: pip3 is not installed.' >&2
  exit 1
fi

user=root
read -p "Please input your MySQL user name:" name
if [ ! -n "$name" ] ;then
  echo "Using the default user:root!"
else
  user=$name
  echo "Using the user $name"
fi

password=""
stty -echo
read -p "Please enter your MySQL password:" psd
stty echo
if [ ! -n "$psd" ] ;then
  echo "Using the empty password."
else
  password=$psd
fi

echo PHP INIT
php init

echo PROJECT CONFIGING

(
cat << EOF
<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=covid19',
            'username' => '${user}',
            'password' => '${password}',
            'charset' => 'utf8mb4',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
EOF
) > ./common/config/main-local.php

echo Initiating database: covid19
php yii migrate

pip3 install pymysql
chmod +x /spider/spider.sh
# crontab -e 
# service cron restart

if ! [ -x "$(command -v composer)" ]; then
    curl -sS https://getcomposer.org/installer | php
    mv composer.phar /usr/local/bin/composer
fi
echo COMPOSER UPDATE
composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
composer install -vvv
composer update -vvv
