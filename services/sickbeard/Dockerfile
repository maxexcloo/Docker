FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y python-cheetah && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN git clone https://github.com/midgetspy/Sick-Beard.git /app
ADD supervisord.conf /etc/supervisor/conf.d/sickbeard.conf
EXPOSE 8081
