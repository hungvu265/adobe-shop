FROM nginx:stable-perl

ARG DEBIAN_FRONTEND=noninteractive

RUN apt -y update && \
    apt install -y php8.2 php8.2-fpm php8.2-cli php8.2-curl php8.2-mysql php8.2-gd php8.2-mbstring php8.2-zip php-pear && \
    apt install -y php-mongodb curl

RUN apt install telnet -y && \
    apt install vim -y

RUN apt install curl -y && \
    curl https://raw.githubusercontent.com/creationix/nvm/master/install.sh | bash && \
    /bin/bash -c "source ~/.bashrc && nvm install 18"

COPY ./ /var/www/html/stable

WORKDIR /workspace
