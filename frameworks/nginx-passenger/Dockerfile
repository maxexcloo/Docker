FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV RBENV_ROOT /opt/rbenv
ENV VERSION 2.3.1
RUN curl https://deb.nodesource.com/gpgkey/nodesource.gpg.key | apt-key add - && \
	apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 561F9B9CAC40B2F7 && \
	echo "deb https://deb.nodesource.com/node_6.x/ jessie main" > /etc/apt/sources.list.d/node.list && \
	echo "deb https://oss-binaries.phusionpassenger.com/apt/passenger/ jessie main" > /etc/apt/sources.list.d/passenger.list && \
	apt-get update && \
	apt-get install -y build-essential nginx-extras nodejs passenger rbenv ruby-build && \
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
ENV PATH ${RBENV_ROOT}/shims:${PATH}
RUN gem install rails
RUN rm -rf /etc/nginx/*.d /etc/nginx/sites-* && \
	mkdir -p /etc/nginx/addon.d /etc/nginx/config.d /etc/nginx/host.d /etc/nginx/nginx.d
ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/nginx.conf
EXPOSE 80
