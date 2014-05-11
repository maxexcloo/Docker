FROM maxexcloo/debian-supervisord
MAINTAINER Max Schaefer <max@excloo.com>
ENV DEBIAN_FRONTEND noninteractive
RUN wget --no-check-certificate -O - https://www.postgresql.org/media/keys/ACCC4CF8.asc | apt-key add -
RUN echo "deb http://apt.postgresql.org/pub/repos/apt/ wheezy-pgdg main" > /etc/apt/sources.list.d/postgresql.list
RUN apt-get update
RUN apt-get install -y postgresql-9.3
RUN sed -i -e "s/^#listen_addresses = .*$/listen_addresses = '*'/" /etc/postgresql/9.3/main/postgresql.conf
RUN sed -i -e "s/data_directory = .*$/data_directory = '\/data'/" /etc/postgresql/9.3/main/postgresql.conf
ADD postgresql.conf /etc/supervisor/conf.d/postgresql.conf
EXPOSE 5432
VOLUME ["/data"]
