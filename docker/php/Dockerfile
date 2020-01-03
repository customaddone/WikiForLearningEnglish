FROM centos:7
MAINTAINER "yuki"

# install apache2.4
RUN yum -y install httpd

# install php5.6
RUN yum -y install epel-release
RUN rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN yum remove php-*
RUN yum -y install --enablerepo=remi,remi-php71 php php-devel php-mbstring php-mysql php-pdo php-gd
RUN yum -y install git

WORKDIR /root/
RUN git clone git@github.com:customaddone/WikiForLearningEnglish.git
RUN cp -r /root/WikiForLearningEnglish/* /var/www/html/

ADD 10-php.conf /opt/docker/etc/httpd/conf.d/

# enable service.
RUN systemctl enable httpd
