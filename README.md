REQUIREMENTS  :
PHP VERSION 8.1 AND ABOVE INSTALLED


INSTALL COMPOSER :

---------------------- FOR UBUNTU ---------------------------


STEP 1 : INSTALLING ADDITIONAL DEPENDENCIES
   First, update the package manager cache by running:
   --  $ sudo apt update

   Next, run the following command to install the required packages:
   -- $ sudo apt install php-cli unzip

STEP 2 : DOWNLOADING AND INSTALLING COMPOSER

        Make sure you’re in your home directory, then retrieve the installer using curl and run following commands:
       -- $ cd ~
       -- $ curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
       -- $ HASH=`curl -sS https://composer.github.io/installer.sig`
       -- $ echo $HASH
       -- $ php -r "if (hash_file('SHA384', '/tmp/composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink   ('composer-setup.php'); } echo PHP_EOL;"
       -- $ sudo php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer

STEP 3 : CHECK COMPOSER IS INSTALLED OR NOT

        on terminal hit below command
        $ composer
        if you will see the composer version then composer is successfully installed in your system



----------------------------- FOR WINDOWS --------------------------------

STEP 1 : goto https://getcomposer.org/download/

STEP 2 : open command prompt and hit all commands from above website

STEP 3 : Set Up System Environment Variables

STEP 4 : Restart the Command Prompt

STEP 5 : Test Composer
        by running this command 
        -- $ composer

--------------------------------------------- END ----------------------------------------------


STEPS TO CLONE GIT REPOSITORY

STEP 1 : CLONE REPOSITORY BY USING FOLLOWING COMMANDS 
         -- $ git clone repo_url   (replace repository url)

STEP 2 : INSTALL PROJECT DEPENDENCIES
        -- $  composer install


******************************************* COUNT OF SUNDAY'S *************************************

STEPS TO GET RESPONSE FROM API

STEP 1 : START LARAVEL SERVER BY USING THIS COMMAND 'php artisan serve'

STEP 2 : OPEN POSTMAN OR ANY OTHER API PLATFORM
        -- CREATE NEW REQUEST WITH HTTP POST METHOD ENTER SERVER RUNNING ADDRESS FOLLOWED BY BELOW API ROUTE
        -- API ROUTE : 'api/get_dates' 
           for ex:  'http://127.0.0.1:8000/api/get_dates'

STEP 2 : SELECT FORM-DATA AND ADD 

               KEY          VALUE
            startDate =  DD-MM-YYYY , 
            endDate   =  DD-MM-YYYY
            

STEP 3 : CHECK RESULTS


CODE STRUCTURE : 

        API ROUTE :  routes > api.php
        CONTROLLER NAME : app > http > Controllers > CompareDatesController.php
        FUNCTION NAME : compareDates
