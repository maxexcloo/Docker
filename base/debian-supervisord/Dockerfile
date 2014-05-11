FROM debian:latest
MAINTAINER max@excloo.com
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y openssh-server supervisor
RUN mkdir -p /var/run/sshd /var/log/supervisor
RUN echo "root:root" | chpasswd
ADD supervisord.conf /etc/supervisor/conf.d/supervisord.conf
EXPOSE 22
CMD ["/usr/bin/supervisord"]
