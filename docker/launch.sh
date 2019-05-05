#!/bin/bash
DOCKER_IMAGE=minitrece
docker rm -f minitrece 2>/dev/null
if [ ! -d "htdocs" ]; then
    mkdir htdocs
    cp .htaccess htdocs
    cp ../LICENSE htdocs
    cp ../README.md htdocs
    cp ../index.php htdocs
    cp -r ../trece htdocs
    cp -r ../css htdocs
    cp -r ../img htdocs
fi
docker run -d \
-e SITE_SCHEME=https \
-p 80:80 \
-v "$(pwd)"/htdocs:/var/www/html:Z \
--name $DOCKER_IMAGE minitrece
