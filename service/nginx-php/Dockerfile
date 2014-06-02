FROM maxexcloo/nginx:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y php5-cli php5-curl php5-fpm php5-gd php5-mcrypt php5-mysql php5-pgsql php5-sqlite
RUN rm -rf /etc/php5/fpm/pool.d
ADD conf.d /etc/nginx/
ADD php-fpm.conf /etc/php5/fpm/
ADD pool.d /etc/php5/fpm/
ADD supervisord.conf /etc/supervisor/conf.d/php-fpm.conf
