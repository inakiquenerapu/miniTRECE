#!/bin/bash
tar --dereference -cf minitrece.tar \
    ../core \
    ../css \
    ../img \
    ../inc \
    ../lib \
    .htaccess \
    ../LICENSE \
    ../README.md \
    ../index.php
docker build -t minitrece -f Dockerfile ..
rm minitrece.tar
