FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN cd /app && \
	git clone https://tt-rss.org/gitlab/fox/tt-rss.git && \
	rm -rf *.md *.pot */*/.empty */.empty .gitignore utils && \
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/tiny-tiny-rss.conf
