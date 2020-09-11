#!/bin/bash -e

# Setup a cron job to this file
# Enter your variables, replace xxx
# Here is how you setup a cron job on a rpi https://bc-robotics.com/tutorials/setting-cron-job-raspberry-pi/

curl -X GET -G \
'http://localhost/index.php' \
-d portfolio=xxx \
-d ifttt=xxx