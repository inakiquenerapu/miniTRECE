#!/bin/bash
tar --dereference -cf minitrece.tar \
    ../trece \
    ../css \
    ../img \
    .htaccess \
    ../LICENSE \
    ../README.md \
    ../index.php
docker build -t minitrece -f Dockerfile ..
rm minitrece.tar
