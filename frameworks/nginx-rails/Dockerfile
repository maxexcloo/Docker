FROM maxexcloo/ruby:latest
MAINTAINER Max Schaefer <max@excloo.com>
VERSION=2.3.1
RUN apt-get install -y rbenv ruby-build && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN rbenv install ${VERSION} && \
	rbenv global ${VERSION} && \
	gem install passenger rails && \
	passenger-install-nginx-module
RUN rm -rf /etc/nginx/addon.d && \
	mkdir -p /etc/nginx/addon.d
ADD etc /etc
