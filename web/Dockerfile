FROM centos:7

RUN yum install -y httpd

RUN yum -y install http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN yum -y install --enablerepo=remi,remi-php71 php php-devel php-mbstring php-mysql php-pdo php-gd

RUN yum clean all
