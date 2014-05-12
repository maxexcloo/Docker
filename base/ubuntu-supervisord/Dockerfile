FROM ubuntu:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y ca-certificates openssh-server nano supervisor wget
RUN mkdir -p /root/.ssh /var/run/sshd /var/log/supervisor
RUN wget -O /root/.ssh/authorized_keys https://raw.githubusercontent.com/maxexcloo/Configuration/master/authorized_keys
ADD sshd.conf /etc/supervisor/conf.d/sshd.conf
ADD loop.sh /usr/local/bin/loop
RUN chmod +x /usr/local/bin/loop
EXPOSE 22
VOLUME ["/data"]
CMD ["/usr/local/bin/loop"]
