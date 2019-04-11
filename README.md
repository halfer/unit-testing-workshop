Unit test demo
===

Docker environment
---

Get a suitable Docker environment:

    docker pull php:7.3-cli

We could use the Alpine Linux variant of this, php:7.3-cli-alpine, but it does not have the Bash shell as standard.

Start up a shell like so:

    docker run -it php:7.3-cli bash

Update the OS and install some useful stuff:

    apt-get update && apt-get upgrade -y && apt-get install -y git unzip

Then install Composer using [these instructions](https://getcomposer.org/download/):

    cd /root
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    ...

Now add a bare minimum PHPUnit install:

    php composer.phar require phpunit/phpunit

Todo
---

* Add on-host volume to the docker run command
* Add a Dockerfile to add any system deps?

