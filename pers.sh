#!/bin/sh
sudo chown -R :www-data app/storage
sudo chmod -R 777 app/storage

sudo chown -R www-data:www-data app/storage/meta
sudo chmod -R 777 app/storage/meta

