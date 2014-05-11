FROM debian:latest
MAINTAINER max@excloo.com
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y openssh-server supervisor
RUN mkdir -p /root/.ssh /var/run/sshd /var/log/supervisor
ADD ~/.ssh/id_rsa.pub /root/.ssh/authorized_keys
ADD supervisord.conf /etc/supervisor/conf.d/supervisord.conf
EXPOSE 22
CMD ["/usr/bin/supervisord"]
