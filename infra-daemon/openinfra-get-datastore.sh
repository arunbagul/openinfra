#!/bin/bash

cd /usr/local/infra-daemon
echo "Collecting Information from vCenter : VCENTER01 (DC1)"
./openinfra-vcenter-datastore.py --host VCENTER01 --user 'vcenter-ro' --pass 'PASS' &

echo "Collecting Information from vCenter : VCENTER02 (DC2)"
./openinfra-vcenter-datastore.py --host VCENTER02 --user 'vcenter-ro' --pass 'PASS' &

echo "Collecting Information from vCenter : VCENTER03 (DC3)"
./openinfra-vcenter-datastore.py --host VCENTER03 --user 'vcenter-ro' --pass 'PASS' &

echo "Collecting Information from vCenter : VCENTER04 (DC4)"
./openinfra-vcenter-datastore.py --host VCENTER04 --user 'vcenter-ro' --pass 'PASS' &

#end
