FROM debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV DEBIAN_FRONTEND noninteractive
VOLUME ["/data"]
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y ca-certificates debian-keyring openssh-server nano supervisor wget
RUN mkdir -p /root/.ssh /var/log/supervisor /var/run/sshd
RUN wget -O /root/.ssh/authorized_keys https://raw.githubusercontent.com/maxexcloo/Configuration/master/authorized_keys
ADD supervisord.conf /etc/supervisor/conf.d/sshd.conf
ADD loop /usr/local/bin/loop
RUN chmod +x /usr/local/bin/loop
EXPOSE 22
CMD ["/usr/local/bin/loop"]
