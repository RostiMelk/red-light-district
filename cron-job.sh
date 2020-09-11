#!/bin/bash -e

# Enter your variables, replace xxx in this file
# Setup a cron job to this file, for example every 10 minutes: 
# */10 * * * * sh /home/pi/cron-job.sh
# Here is a full guide on how you setup a cron job on a rpi https://bc-robotics.com/tutorials/setting-cron-job-raspberry-pi/

curl -X GET -G \
'http://localhost/index.php' \
-d portfolio=xxx \
-d ifttt=xxx