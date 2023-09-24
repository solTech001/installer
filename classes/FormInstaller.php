<?php 

use builder\Database\DB;

class FormInstaller{


    static public $form;
   


    /**
     * constructor
     *
     * @return void
     */
    static private function constructor()
    {
        self::$form = form();
    }

    
    /**
     * run
     *
     * @return mixed
     */
    static public function run()
    {
        self::constructor();

        self::$form->submit([
            'string:app_name' => 'APP Name is required',
            'string:email' => 'Please enter a valid email address',
            'string:smpt_host' => 'SMTP Host is required',
            'int:smtp_port' => 'Mailers Port is required',
            'string:smtp_username' => 'Mailers Username is required',
            'string:smtp_password' => 'Mailers Password is required',
            'string:db_host' => 'Database Host is required',
            'string:db_username' => 'Database Username is required',
            'string:db_password' => 'Database Password is required',
            'string:db_name' => 'Database Name is required',

        ])->error(function($response){
            
        })->success(function($response){
                DB::disconnect();
                DB::reconnect('mysql');
                import('config/orm.sql');
                
            //  dd(
            //     import('config/orm.sql')
            //     DB::reconnect('mysql')
            //     self::$form->param
               
            // );
             
            // do not forget to disconnect from database, then update your env variables
            // Then after reconnect to database, before using the import() helpers function

            $response->message = 'Import of Database Completed';


             header('Location: ' .domain('views/welcome.php'));
        });
    }

}