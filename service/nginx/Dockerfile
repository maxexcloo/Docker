FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN wget -O - http://www.nginx.org/keys/nginx_signing.key | apt-key add -
RUN echo "deb http://www.nginx.org/packages/debian/ wheezy nginx" > /etc/apt/sources.list.d/nginx.list
RUN apt-get update
RUN apt-get install -y nginx
RUN rm -rf /etc/nginx/conf.d
ADD conf.d /etc/nginx
ADD init /config/init/01nginx
ADD nginx.conf /etc/nginx/
ADD nginx.d /etc/nginx
ADD supervisord.conf /etc/supervisor/conf.d/nginx.conf
EXPOSE 80
EXPOSE 443
