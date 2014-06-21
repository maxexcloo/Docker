FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys ABF5BD827BD9BF62
RUN echo "deb http://www.nginx.org/packages/debian/ wheezy nginx" > /etc/apt/sources.list.d/nginx.list
RUN apt-get update
RUN apt-get install -y nginx
RUN rm -rf /etc/nginx/*.d
RUN mkdir -p /etc/nginx/conf.d /etc/nginx/host.d /etc/nginx/nginx.d
ADD init /config/init
ADD nginx /etc/nginx
ADD supervisord.conf /etc/supervisor/conf.d/nginx.conf
EXPOSE 80
