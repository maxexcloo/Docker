FROM debian:latest
MAINTAINER max@excloo.com
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y openssh-server supervisor
RUN mkdir -p /root/.ssh /var/run/sshd /var/log/supervisor
RUN wget -O /root/.ssh/authorized_keys --no-check-certificate https://raw.githubusercontent.com/maxexcloo/Configuration/master/authorized_keys
ADD sshd.conf /etc/supervisor/conf.d/sshd.conf
ADD loop.sh /usr/local/bin/loop
RUN chmod +x /usr/local/bin/loop
EXPOSE 22
CMD ["/usr/local/bin/loop"]
