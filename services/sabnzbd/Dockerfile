FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y par2 python-openssl python-yenc sabnzbdplus sabnzbdplus-theme-classic sabnzbdplus-theme-smpl && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
ADD supervisord.conf /etc/supervisor/conf.d/sabnzbd.conf
EXPOSE 8080
