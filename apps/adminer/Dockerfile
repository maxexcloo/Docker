FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 4.1.0
RUN apt-get install -y php5 php5-mysql php5-pgsql php5-sqlite
RUN wget -O /data/index.php "https://sourceforge.net/projects/adminer/files/Adminer/Adminer ${VERSION}/adminer-${VERSION}.php/download"
RUN wget -O /data/adminer.css https://raw.githubusercontent.com/vrana/adminer/master/designs/pokorny/adminer.css
RUN useradd -r -s /usr/sbin/nologin http
RUN chown http:http /data
ADD supervisord.conf /etc/supervisor/conf.d/adminer.conf
EXPOSE 8080
