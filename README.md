
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
