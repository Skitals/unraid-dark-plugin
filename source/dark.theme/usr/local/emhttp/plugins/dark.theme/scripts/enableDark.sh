#!/bin/bash
cp /usr/local/emhttp/plugins/dark.theme/scripts/default-dark.css /usr/local/emhttp/plugins/dynamix/styles/default-dark.css
cp /usr/local/emhttp/plugins/dynamix/styles/dynamix-black.css /usr/local/emhttp/plugins/dynamix/styles/dynamix-dark.css
cp /usr/local/emhttp/plugins/dark.theme/scripts/community.applications-dark.css /usr/local/emhttp/plugins/dynamix/styles/community.applications-dark.css
cp /usr/local/emhttp/plugins/dark.theme/scripts/Syslinux.page /usr/local/emhttp/plugins/dynamix/Syslinux.page
echo "Dark Theme files copied to system.";
upSeconds="$(cat /proc/uptime | grep -o '^[0-9]\+')"
upMins=$((${upSeconds} / 60))
if [ "${upMins}" -gt "3" ]
then
    sed -i 's/theme=\".*\"/theme=\"dark\"/g' /boot/config/plugins/dynamix/dynamix.cfg
else
    echo "Detected fresh boot, preserving your settings."
fi
sed -i "s/'black','gray'\]/'black','gray','dark'\]/g" /usr/local/emhttp/login.php
