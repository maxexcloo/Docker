FROM maxexcloo/debian-supervisord:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys B97B0AFCAA1A47F044F244A07FCC7D46ACCC4CF8
RUN echo "deb http://apt.postgresql.org/pub/repos/apt/ wheezy-pgdg main" > /etc/apt/sources.list.d/postgresql.list
RUN apt-get update
RUN apt-get install -y postgresql-9.3
RUN sed -i -e "s/^#listen_addresses = .*$/listen_addresses = '*'/" /etc/postgresql/9.3/main/postgresql.conf
RUN sed -i -e "s/data_directory = .*$/data_directory = '\/data'/" /etc/postgresql/9.3/main/postgresql.conf
ADD supervisord.conf /etc/supervisor/conf.d/postgresql.conf
EXPOSE 5432
