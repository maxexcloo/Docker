FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y git python-cheetah && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN mkdir -p /opt/sickbeard && \
	git clone https://www.github.com/midgetspy/Sick-Beard.git /opt/sickbeard && \
	chown -R core:core /opt/sickbeard
ADD supervisord.conf /etc/supervisor/conf.d/sickbeard.conf
EXPOSE 8081
