bsTools
=======
bsTools allows you to work with a local (or remote) beanstalkd jobqueue. bsTools utilizes pheanstalk to talk to beanstalkd, and Symfony2\Console for the CLI interface.

Requirements
------------
* PHP 5.3 or above (tested on 5.3.6)
* MacOS or Linux (BASH)
* If you have suhosin, you must set suhosin.executor.include.whitelist = phar


Getting bsTools
---------------
* Clone the repo or download the source. optionally, run bin/makephar.php to generate a standalone executable from the source
* Download the prebuilt executable here from the downloads page

Usage
-----
Note: if you are using a packaged executable, the command will be "bs". Otherwise, use bin/bs.php. /usr/bin/env is required (and needs to know the location of PHP) for the executable to work.

running "bs" or "php bs.php" will produce command line help with all of the various options

Docker
-----
````
docker build -t php8cli .
docker run -it --rm --mount type=bind,source="$(pwd)",target=/usr/src/app php8cli bash
composer install
./bin/bs stats --host=127.0.0.1 --renderer=raw
````