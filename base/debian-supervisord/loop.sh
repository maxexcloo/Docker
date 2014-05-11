#!/bin/bash
/usr/bin/supervisord
/usr/bin/supervisorctl
while(true); do
	echo "Detach with Ctrl-P Ctrl-Q. Dropping to shell."
	sleep 1
	/bin/bash
done
