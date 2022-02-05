FROM php:7.4-cli
ENV DOCKER_BUILDKIT=0
ENV COMPOSE_DOCKER_CLI_BUILD=0
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./server.php" ]