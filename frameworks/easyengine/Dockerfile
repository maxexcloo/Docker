FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV TERM xterm
RUN git config —global user.email "mail@example.com" && \
	git config —global user.name "Default User" && \
	apt-get update && \
	curl https://raw.githubusercontent.com/EasyEngine/easyengine/master/install | bash && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states && \
	rm -rf /tmp/* /var/lib/apt/lists/* /var/tmp/*
RUN ee stack install --hhvm && \
	ee stack install --mysql && \
	ee stack install --nginx && \
	ee stack install --php && \
	ee stack install --php7 && \
	ee stack install --postfix && \
	ee stack install --web && \
	ee stack start
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/easyengine.conf
EXPOSE 80
EXPOSE 443
EXPOSE 22222
