#!/bin/bash
if [[ $- == *i* ]]; then
	/usr/bin/supervisord -n
else
	/usr/bin/supervisord
	while(true); do
		echo "Exit supervisorctl with Ctrl-D. Detach with Ctrl-P + Ctrl-Q."
		/usr/bin/supervisorctl
		echo "Exit shell with Ctrl-D. Detach with Ctrl-P + Ctrl-Q."
		/bin/bash
	done
fi
