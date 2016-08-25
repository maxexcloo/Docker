FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
VERSION=2.3.1
RUN apt-get install -y git libcurl4-openssl-dev rbenv ruby-build && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN git clone https://github.com/rbenv/rbenv.git /opt/rbenv && \
	cd /opt/rbenv && \
	src/configure && \
	make -C src && \
	echo 'export PATH="/opt/rbenv/bin:$PATH"' >> ~/.bash_profile && \
	echo 'eval "$(rbenv init -)"' >> ~/.bash_profile && \
	source ~/.bash_profile && \
	git clone https://github.com/rbenv/ruby-build.git /opt/rbenv/plugins/ruby-build && \
	rbenv install ${VERSION} && \
	rbenv global ${VERSION} && \
	gem install passenger rails && \
	passenger-install-nginx-module



ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/nginx.conf
EXPOSE 80
