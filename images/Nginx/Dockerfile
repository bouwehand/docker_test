FROM phusion/baseimage
MAINTAINER bouwehand <b.j.ouwehand@gmail.com>

CMD ["/sbin/my_init"]
# update and upgrate linux
RUN apt-get update
RUN apt-get -y upgrade

# install apache 2


RUN echo "daemon off;" >> /etc/nginx/nginx.conf
RUN ln -sf /dev/stdout /var/log/nginx/access.log
RUN ln -sf /dev/stderr /var/log/nginx/error.log

RUN mkdir -p /etc/service/nginx
ADD start.sh /etc/service/nginx/run
RUN chmod +x /etc/service/nginx/run

EXPOSE 80

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*