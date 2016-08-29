FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV RBENV_ROOT /opt/rbenv
ENV VERSION 2.3.1
RUN apt-get install -y rbenv ruby-build && \
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
