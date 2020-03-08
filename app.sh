#!/bin/bash
echo "Anuj BHATNAGAR"

cat /proc/meminfo

free

date
echo "+++++++++++++++++++++++++++Clearing Cache +++++++++++++++++++++++"
sync; echo 1 > /proc/sys/vm/drop_caches
