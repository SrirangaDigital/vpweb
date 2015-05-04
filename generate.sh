#!/bin/sh

host='localhost';
db='vp';
usr='root';
pwd='mysql';

echo "drop database if exists vp; create database vp;" | /usr/bin/mysql -uroot -p

perl insert_author.pl $host $usr $pwd $db
perl insert_articles.pl $host $usr $pwd $db
