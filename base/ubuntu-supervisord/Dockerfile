FROM ubuntu:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV DEBIAN_FRONTEND noninteractive
ENV LANG en_AU.UTF-8
ENV LC_ALL en_AU.UTF-8
RUN locale-gen en_AU.UTF-8
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y ca-certificates openssh-server nano pwgen supervisor wget
RUN mkdir -p /var/log/supervisor /var/run/sshd
ADD supervisord.conf /etc/supervisor/conf.d/sshd.conf
ADD loop /usr/local/bin/loop
RUN chmod +x /usr/local/bin/loop
VOLUME ["/data"]
EXPOSE 22
CMD ["/usr/local/bin/loop"]
