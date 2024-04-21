#!/bin/bash

lectura=$(grep "PORT=" src/server.conf)
result=${lectura#*=}
echo $result