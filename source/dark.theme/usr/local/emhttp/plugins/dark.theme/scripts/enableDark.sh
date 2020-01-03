#!/bin/bash
cp /usr/local/emhttp/plugins/dark.theme/scripts/default-dark.css /usr/local/emhttp/plugins/dynamix/styles/default-dark.css
cp /usr/local/emhttp/plugins/dynamix/styles/dynamix-black.css /usr/local/emhttp/plugins/dynamix/styles/dynamix-dark.css
cp /usr/local/emhttp/plugins/dark.theme/scripts/community.applications-dark.css /usr/local/emhttp/plugins/dynamix/styles/community.applications-dark.css
cp /usr/local/emhttp/plugins/dark.theme/scripts/Syslinux.page /usr/local/emhttp/plugins/dynamix/Syslinux.page
sed -i "s/'black','gray'\]/'black','gray','dark'\]/g" /usr/local/emhttp/login.php
