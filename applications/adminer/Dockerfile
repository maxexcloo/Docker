FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 4.2.5
RUN mkdir -p /app/root && \
	wget -O /app/root/index.php "https://www.adminer.org/static/download/${VERSION}/adminer-${VERSION}.php" && \
	wget -O /app/root/adminer.css "https://raw.githubusercontent.com/vrana/adminer/master/designs/pokorny/adminer.css"
