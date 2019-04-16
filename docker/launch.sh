#!/bin/bash
docker rm -f minitrece 2>/dev/null
docker run -tid -p 80:80 --name minitrece minitrece
