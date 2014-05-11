#!/bin/bash
if tty -s; then
	/usr/bin/supervisord
	while(true); do
		echo "Exit supervisorctl with Ctrl-D. Detach with Ctrl-P + Ctrl-Q."
		/usr/bin/supervisorctl
		echo "Exit shell with Ctrl-D. Detach with Ctrl-P + Ctrl-Q."
		/bin/bash
	done
else
	/usr/bin/supervisord -n
fi
