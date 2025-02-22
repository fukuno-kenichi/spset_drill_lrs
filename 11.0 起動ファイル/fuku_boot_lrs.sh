#!/bin/bash

cd /opt/openlrw
rm /opt/openlrw/run/*.pid
rm /opt/openlrw/*.log
rm /opt/openlrw/logs/*.log

su boot -c "bash /opt/openlrw/run.sh start"


