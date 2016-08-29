FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 2.3.1
RUN apt-get install -y rbenv ruby-build && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN git clone https://github.com/rbenv/rbenv.git /opt/rbenv && \
	git clone https://github.com/rbenv/ruby-build.git /opt/rbenv/plugins/ruby-build && \
	cd /opt/rbenv && \
	src/configure && \
	make -C src && \
	cd ~ && \
	echo 'export PATH="/opt/rbenv/bin:$PATH"' | tee ~/.bash_profile ~/.bashrc && \
	echo 'export RBENV_ROOT="/opt/rbenv"' | tee -a ~/.bash_profile ~/.bashrc && \
	echo 'eval "$(rbenv init -)"' | tee -a ~/.bash_profile ~/.bashrc && \
	. ~/.bash_profile
RUN rbenv install ${VERSION} && \
	rbenv global ${VERSION}
