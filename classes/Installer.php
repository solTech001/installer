<?php

final Class Installer{

    /**
     * progress
     *
     * @var bool
     */
    static public $progress = false;    

    /**
     * page
     *
     * @var string
     */
    static public $page = 'installation';
        
    /**
     * pages_array
     *
     * @var array
     */
    static public $pages_array = [
        'installation',
        'finish'
    ];

    
    /**
     * isSoftwareNotInstalled
     *
     * @return mixed
     */
    static public function isSoftwareNotInstalled()
    {
        if(!db()->tableExists('tb_country')){
            FormInstaller::run();

            require_once( base_path('views/installation/index.php') );  
            exit();
        } 
    }
    
    /**
     * getBodyClass
     *
     * @return string|null
     */
    static public function getBodyClass()
    {
        if(self::$page == 'installation'){
            return 'step_two_done';
        }
        if(self::$page == 'finish'){
            return 'step_three_done finished';
        }
    }

}