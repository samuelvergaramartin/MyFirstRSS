#!/bin/bash

lectura=$(grep "PORT=" server.conf)
result=${lectura#*=}
echo $result