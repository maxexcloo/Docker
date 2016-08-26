FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
VERSION 2.3.1
RUN apt-get install -y apt-transport-https rbenv ruby-build && \
	apt-key adv --keyserver hkp://keyserver.ubuntu.com/ --recv-keys 561F9B9CAC40B2F7 && \
	echo "deb https://oss-binaries.phusionpassenger.com/apt/passenger/ jessie main" > /etc/apt/sources.list.d/passenger.list && \
	apt-get update && \
	apt-get install -y nginx-extras passenger && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN git clone https://github.com/rbenv/rbenv.git /opt/rbenv && \
	git clone https://github.com/rbenv/ruby-build.git /opt/rbenv/plugins/ruby-build && \
	cd /opt/rbenv && \
	src/configure && \
	make -C src && \
	echo 'export PATH="/opt/rbenv/bin:$PATH"' | tee ~/.bash_profile ~/.bashrc && \
	echo 'export RBENV_ROOT="/opt/rbenv"' | tee -a ~/.bash_profile ~/.bashrc && \
	echo 'eval "$(rbenv init -)"' | tee -a ~/.bash_profile ~/.bashrc && \
	source ~/.bash_profile
RUN rbenv install ${VERSION} && \
	rbenv global ${VERSION} && \
	gem install passenger rails
RUN rm -rf /etc/nginx/*.d && \
	mkdir -p /etc/nginx/addon.d /etc/nginx/config.d /etc/nginx/host.d /etc/nginx/nginx.d


ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/nginx.conf
EXPOSE 80
