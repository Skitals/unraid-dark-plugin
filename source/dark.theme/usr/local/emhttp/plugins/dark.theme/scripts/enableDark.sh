
#!/bin/bash
sed -i 's/pti=off//g' /boot/syslinux/syslinux.cfg
sed -i 's/mds=off//g' /boot/syslinux/syslinux.cfg
sed -i 's/spectre_v2=off//g' /boot/syslinux/syslinux.cfg
sed -i 's/l1tf=off//g' /boot/syslinux/syslinux.cfg
sed -i 's/nospec_store_bypass_disable//g' /boot/syslinux/syslinux.cfg
sed -i 's/no_stf_barrier//g' /boot/syslinux/syslinux.cfg
sed -i 's/mitigations=off//g' /boot/syslinux/syslinux.cfg
echo "enabled" > /tmp/disable.mitigations.reset
echo "enabled";
