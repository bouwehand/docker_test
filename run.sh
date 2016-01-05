docker run \
    -d \
    -p 80:80 \
    -v /home/bouwehand/vhosts/docker_test/src/vhost.conf:/etc/nginx/sites-enabled/vhost.conf \
    -v /home/bouwehand/vhosts/docker_test/src:/var/www \
    tutorial/nginx;
