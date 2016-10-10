starwars
========
A little demo application, that prints out all or randomly selected names

Installation guide:
-------------------
- Install php (at least the cli) and git - e.g. in Ubuntu using apt: "sudo apt-get install php5-cli git"
- Change to a folder of your choice, where you want to install the application to - e.g. "cd /var"
- Checkout the application to that folder: "git clone https://github.com/joe-hansen/starwars starwars"
- Change into the application directory: "cd /var/starwars"
- Update all dependencies using the shipped composer: "./composer.phar install"
-- You can leave the requested data in its defaults - database and mailer are not used.
- Check dependencies and follow latest instructions: "php bin/symfony_requirements"
- Check for security issues and follow latest instructions: "php bin/console security:check"
- Start the application "php bin/console server:run --env=prod"
- You can now access the application in your browser via the URL http://localhost:8000

Time spent on this project:
---------------------------
RESEARCH - 3,8 HOURS
 30m Research: Symfony installation and requirements
 15m Installing Symfony
 10m Checking requirements
 15m Configuring my IDE
 10m Setting up git / github
 60m Research: Symfony tutorial (screencast at knpuniversity.com)
 30m Research: Reading Symfony best practices
 30m Research: Setting up phpunit and getting it to work
 30m Research: Using Bundles in Symfony
DEVELOPMENT - 2 HOURS
 20m Deciding architecture
 10m Creating Bundle
 15m Setting up DI (Extension) for getting the namelist as parameter
 15m Implementation of the GUI using Bootstrap
 20m Implementation of the Controller
 15m Implementation of the NameListGenerator and its Interface
 20m Writing some tests - not finished! ...
DOCUMENTATION - 0,7 HOURS
 40m Writing and verifying the installationguide
