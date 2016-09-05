FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV POSTGRESQL_USER docker \
	POSTGRESQL_PASS docker
RUN curl https://www.postgresql.org/media/keys/ACCC4CF8.asc | apt-key add - && \
	echo "deb http://apt.postgresql.org/pub/repos/apt/ jessie-pgdg main" > /etc/apt/sources.list.d/postgresql.list && \
	apt-get update && \
	apt-get install -y postgresql-9.4 && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states && \
	rm -rf /tmp/* /var/lib/apt/lists/* /var/tmp/*
RUN echo "host all all 0.0.0.0/0 md5" >> /etc/postgresql/9.4/main/pg_hba.conf && \
	sed -i -e "s/^#listen_addresses.*=.*/listen_addresses = '*'/" /etc/postgresql/9.4/main/postgresql.conf && \
	sed -i -e "s/^data_directory.*=.*$/data_directory = '\/data'/" /etc/postgresql/9.4/main/postgresql.conf
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/postgresql.conf
EXPOSE 5432
