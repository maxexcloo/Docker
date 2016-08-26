FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 4.2.5
RUN curl -o /app/index.php "https://adminer.org/static/download/${VERSION}/adminer-${VERSION}.php" && \
	curl -o /app/adminer.css "https://raw.githubusercontent.com/vrana/adminer/master/designs/pokorny/adminer.css"
