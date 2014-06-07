FROM maxexcloo/nginx:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y php5-cli php5-curl php5-fpm php5-gd php5-mcrypt php5-mysql php5-pgsql php5-sqlite
RUN rm -rf /etc/php5/fpm/pool.d
ADD addon.d /etc/nginx/addon.d
ADD php-fpm.conf /etc/php5/fpm/php-fpm.conf
ADD pool.d /etc/php5/fpm/pool.d
ADD supervisord.conf /etc/supervisor/conf.d/php-fpm.conf
