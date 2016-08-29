FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV RBENV_ROOT /opt/rbenv
ENV VERSION 2.3.1
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 561F9B9CAC40B2F7 && \
	echo "deb https://oss-binaries.phusionpassenger.com/apt/passenger/ jessie main" > /etc/apt/sources.list.d/passenger.list && \
	apt-get update && \
	apt-get install -y nginx-extras passenger rbenv ruby-build && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN git clone https://github.com/rbenv/rbenv.git ${RBENV_ROOT} && \
	git clone https://github.com/rbenv/ruby-build.git ${RBENV_ROOT}/plugins/ruby-build
WORKDIR ${RBENV_ROOT}
RUN src/configure && \
	make -C src
WORKDIR /
ENV PATH ${RBENV_ROOT}/bin:${PATH}
RUN rbenv install ${VERSION} && \
	rbenv global ${VERSION}
RUN rm -rf /etc/nginx/{*.d,sites-*} && \
	mkdir -p /etc/nginx/{addon.d,config.d,host.d,nginx.d}
ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/nginx.conf
EXPOSE 80
