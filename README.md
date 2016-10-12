starwars
========
A little demo application, that prints out all or randomly selected star wars names

Installation guide:
-------------------
- Install php (at least the cli) and git - e.g. in Ubuntu using apt: "sudo apt-get install php5-cli git"
- Change to a folder of your choice, where you want to install the application to - e.g. "cd /var"
- Checkout the application to that folder: "git clone https://github.com/joe-hansen/starwars starwars"
- Change into the application directory: "cd /var/starwars"
- Update all dependencies using the packaged composer: "./composer.phar install" - during the install process some data is requested - database, mailer and csrf protection are not used, so you can leave the defaults.
- Check dependencies again and follow latest instructions: "php bin/symfony_requirements"
- Check for security issues and follow latest instructions: "php bin/console security:check"
- Start the application "php bin/console server:run --env=prod"
- You can now access the application in your browser via the URL "http://localhost:8000"
- You will see a little web-app, where you can see all star wars names - also you are able to request a random name on click.

Time spent on this project:
---------------------------
RESEARCH - 4 HOURS
- 30m Research: Symfony installation and requirements
- 15m Installing Symfony
- 10m Checking / fulfilling requirements
- 15m Configuring my IDE
- 10m Setting up git / github
- 40m Research: Symfony tutorial (screencast at knpuniversity.com)
- 40m Research: Reading Symfony best practices
- 30m Setting up phpunit and getting it to work
- 30m Research: Using Bundles in Symfony
DEVELOPMENT - 2 HOURS
- 20m Deciding architecture
- 10m Creating Bundle
- 15m Setting up DI (Extension) for getting the namelist as parameter
- 15m Implementing the GUI using Bootstrap
- 20m Implementing the Controller
- 15m Implementing the NameListGenerator and its Interface
- 30m Writing some tests ...
DOCUMENTATION - 1 HOUR
- 40m Writing and verifying the installationguide
- 20m Finalising documentation
