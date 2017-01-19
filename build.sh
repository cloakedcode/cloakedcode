#!/bin/bash

container='cloakedcode-builder'

docker run -dt --name=$container -p 8080:80 -v $PWD:/var/www/html php:7.0-apache

sleep 2

echo "Index..."
curl "localhost:8080/index.php" > index.html
sed -i '' "s|\([src\|href]=[\"']\)/|\1/cloakedcode/|g" index.html
echo

echo "Pages..."
for f in pages/*.html; do
    name="$(basename "$f")"
    echo $name
    curl "localhost:8080/index.php?page=${name/.html/}" > $name
    sed -i '' "s|\([src\|href]=[\"']\)/|\1/cloakedcode/|g" $name
done
echo

echo "Posts..."
for f in posts/*.html; do
    name="$(basename "$f")"
    echo $name
    curl "localhost:8080/index.php?id=${name/.html/}" > $name
    sed -i '' "s|\([src\|href]=[\"']\)/|\1/cloakedcode/|g" $name
done
echo

docker kill $container
docker rm $container

echo "Done"
