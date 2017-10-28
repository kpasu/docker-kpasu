FROM centos:7.4.1708

RUN yum update -y

RUN yum install -y httpd

RUN yum install -y less wget zip unzip

RUN yum -y install epel-release
RUN rpm -ivh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN yum install --enablerepo=remi,remi-php70 -y install php php-cli php-devel php-common php-mbstring php-mysql php-phpunit-PHPUnit php-pecl-xdebug php-fpm php-gd php-gmp php-mcrypt php-opcache php-pdo php-xml php-zip

RUN yum clean all

RUN /bin/cp -f /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

RUN curl -sS https://getcomposer.org/installer | php
RUN mv ./composer.phar /usr/local/bin/composer

RUN composer global require "laravel/installer"

ENV PATH $PATH:/root/.composer/vendor/bin
