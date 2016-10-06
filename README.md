starwars
========



Installation guide:
-------------------
- Install curl, php and git: "sudo apt-get install curl php5-cli git"
- Install composer: "curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer"
- Checkout https://github.com/joe-hansen/starwars to a folder of your choice: ""
- Change into the project
- Update all dependencies: "composer install"
- Check dependencies and follow latest instructions: "php bin/symfony_requirements"
- Check for security issues and follow latest instructions: "php bin/console security:check"
- Start the application "php bin/console server:run"


Time spent on this project:
---------------------------
RESEARCH - X HOURS
 30m Research: Symfony installation and requirements
 15m Installing Symfony
 10m Checking requirements
 15m Configuring my IDE
 10m Setting up git / github
 60m Research: Symfony tutorial (screencast at knpuniversity.com)
 30m Research: Reading Symfony best practices
DEVELOPMENT - X HOURS
 60m Writing and verifying the installationguide