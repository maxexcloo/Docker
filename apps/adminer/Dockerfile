FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 4.1.0
RUN apt-get install -y php5-cli php5-mysql php5-pgsql php5-sqlite
RUN sed -i -e "s/^post_max_size.*=.*/post_max_size = 256M/" /etc/php5/cli/php.ini
RUN sed -i -e "s/^upload_max_filesize.*=.*/upload_max_filesize = 256M/" /etc/php5/cli/php.ini
RUN wget -O /config/index.php "https://sourceforge.net/projects/adminer/files/Adminer/Adminer ${VERSION}/adminer-${VERSION}.php/download"
RUN wget -O /config/adminer.css https://raw.githubusercontent.com/vrana/adminer/master/designs/pokorny/adminer.css
RUN useradd -r -s /usr/sbin/nologin http
RUN chown http:http /config
ADD supervisord.conf /etc/supervisor/conf.d/adminer.conf
EXPOSE 8080
