FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get update && \
	apt-get install -y python python-cheetah && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states && \
	rm -rf /tmp/* /var/lib/apt/lists/* /var/tmp/*
RUN git clone https://github.com/midgetspy/Sick-Beard.git /app
ADD supervisord.conf /etc/supervisor/conf.d/sickbeard.conf
EXPOSE 8081
