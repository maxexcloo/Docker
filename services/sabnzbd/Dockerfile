FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y par2 python-openssl python-yenc sabnzbdplus sabnzbdplus-theme-classic sabnzbdplus-theme-smpl unrar unzip
RUN useradd -u 1000 user
ADD init /config/init/03sabnzbd
ADD supervisord.conf /etc/supervisor/conf.d/sabnzbd.conf
EXPOSE 8080
EXPOSE 9090
