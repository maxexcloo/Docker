FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y git && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN cd /app/root && \
	git clone https://tt-rss.org/gitlab/fox/tt-rss.git && \
	rm -rf *.md *.pot */*/.empty */.empty .gitignore utils && \
ADD app /app
ADD supervisord.conf /etc/supervisor/conf.d/tiny-tiny-rss.conf
