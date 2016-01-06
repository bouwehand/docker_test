#Docker Test Project

Setting up docker on a windows machine, because my mac is late

##specs
- windows 10
- docker 1.9.1

##installation

###virtualbox

Because i work on windows, docker gives problems. We will be running docker on a virtual machine ubuntu

Docker will only run on an ubuntu 64bit install! 

i used a set harddisk of 50mb 
64bit image 14.04

###windows port forwarding

Set the virtual machine networking to nat with portforwarding: 

host  guest 
8080  80

virtual machine will be reachable through localhost:8080

##Documentation

standard installation and setup
http://www.newmediacampaigns.com/blog/docker-for-php-developers
https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-getting-started

docker compose: 

latest: 

https://gist.github.com/wdullaer/f1af16bd7e970389bad3

install:

sudo sh -c "curl -L https://github.com/docker/compose/releases/download/1.5.2/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose"
sudo chmod +x /usr/local/bin/docker-compose
sudo sh -c "curl -L https://raw.githubusercontent.com/docker/compose/1.5.2/contrib/completion/bash/docker-compose > /etc/bash_completion.d/docker-compose"
