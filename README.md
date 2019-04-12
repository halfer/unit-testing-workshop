Unit test workshop
===

Docker environment
---

Get a suitable Docker environment:

    docker pull php:7.3-cli

We could use the Alpine Linux variant of this, php:7.3-cli-alpine, but it does not have the Bash shell as standard.

Now create a project folder:

    mkdir unit-testing-workshop
    cd unit-testing-workshop

Start up a shell like so (for Linux and Windows respectively):

    docker run -it -v `pwd`/.:/root php:7.3-cli bash
    docker run -it -v %CD%:/root php:7.3-cli bash

Update the OS and install some useful stuff:

    apt-get update && apt-get upgrade -y && apt-get install -y git unzip

Then install Composer using [these instructions](https://getcomposer.org/download/):

    cd /root
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    ...

Now add a bare minimum PHPUnit install:

    php composer.phar require phpunit/phpunit

Now create a folder for your tests:

    mkdir tests
    mkdir tests/unit

Now create a dummy test, in a file called `tests/unit/TestDemo.php`:

    <?php

    class TestDemo extends TestCase
    {
        public function testSomething()
        {
             $this->assertTrue(true);
        }
    }

Now try running this test like so:

    php vendor/bin/phpunit tests/unit

That should work. Now, let's try writing some real tests. To start with, copy the following
files from the repo to your project to get PHPUnit working:

    * `phpunit.xml`
    * `tests/bootstrap.php`

Todo
---

* Add a Dockerfile to add any system deps?

