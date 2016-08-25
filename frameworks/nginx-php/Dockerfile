FROM maxexcloo/nginx:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN curl https://www.dotdeb.org/dotdeb.gpg | apt-key add - && \
	echo "deb http://packages.dotdeb.org/ jessie all" > /etc/apt/sources.list.d/dotdeb.list && \
	apt-get update && \
	apt-get install -y php5-cli php5-curl php5-fpm php5-gd php5-mcrypt php5-mysql php5-pgsql php5-sqlite && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN rm -rf /etc/nginx/addon.d /etc/php5/fpm/pool.d && \
	mkdir -p /etc/nginx/addon.d /etc/php5/fpm/pool.d
ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/php-fpm.conf
