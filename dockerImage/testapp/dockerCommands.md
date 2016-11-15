cd into dockerImage and run:
`docker build alewitt/dbrr .`

to start the docker image use:
`docker run -d -p 80:80 --name dbrr alewitt/dbrr`

while developing, you want to write code on the host machine and be able to see the changes instantly on the docker container. this requires the creation of a what is called a docker volume.
Use the flag `-v <absolute path to host dir>:<container path>`. Note: on windows, this is super funky to do to the conversion between MS and linux. Below is the command i use on my windows machine. On a mac both host and container paths would be structured the same way.
```
docker run -d -p 80:80 -v //c/Users/alewi/Documents/\`UFL_Education/Fall\ 2016/CIS\ 4301\ Schneider/DB_RR/dockerImage/testapp:/app --name dbrr alewitt/dbrr
```

to see all created containers:
`docker ps -a`

to stop the container:
`docker stop dbrr`

to remove the container:
`docker rm dbrr`

to see containers ip address:
`docker-machine ip`

to see all local images:
`docker images`
