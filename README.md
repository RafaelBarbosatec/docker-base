# docker-base



comandos util para limpar o docker:

sudo docker rmi -f `sudo docker images -q`
sudo docker rm -f `sudo docker ps -a -q`
