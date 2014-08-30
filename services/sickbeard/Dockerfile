FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y python-cheetah
RUN mkdir -p /opt/sickbeard
RUN wget -O - "https://www.github.com/midgetspy/Sick-Beard/tarball/master" | tar --strip-components=1 -C /opt/sickbeard -x -z midgetspy-Sick-Beard-*
RUN rm -rf /opt/sickbeard/*.md /opt/sickbeard/*.txt /opt/sickbeard/.gitignore /opt/sickbeard/.travis.yml /opt/sickbeard/init.*
ADD supervisord.conf /etc/supervisor/conf.d/sickbeard.conf
EXPOSE 8081
