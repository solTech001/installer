<?php
/* 
|---------------------------------------------------
| calling init file
|---------------------------------------------------
|
*/
require_once 'init.php';


/* 
|---------------------------------------------------
| configure form for global usage
|---------------------------------------------------
*/
config_form([
    'request'    => 'post',
    'error_type' => false,
    'csrf_token' => true,
    'class' => [
        'error' => 'bg-danger text-danger',
        'success' => 'bg-success text-success',
    ]
]); 


/*
|--------------------------------------------------------------------------
| Pagination configuration
|
| key       | Data Type          |  Description                                                                           |
|-----------|--------------------|----------------------------------------------------------------------------------------|
| allow     | true\false         | Default `false` Setting to true will allow the system use this settings across app 
| class     | string             | Css `selector` For pagination ul tag in the browser 
| span      | string             | Css `selector` For pagination Showing Span tags in the browser 
| view      | bootstrap\simple\cursor   | Default `simple` - For pagination design 
| first     | string             | Change the letter of `First`
| last      | string             | Change the letter of `Last`
| next      | string             | Change the letter of `Next`
| prev      | string             | Change the letter of `Prev`
| showing   | string             | Change the letter of `Showing`
| of        | string             | Change the letter `of`
| results   | string             | Change the letter `results`
| buttons   | int                | Numbers of pagination links to generate. Default is 5 and limit is 20
|--------------------------------------------------------------------------
*/
config_pagination([
    'allow'  => true,
    'view'   => 'simple',
    'buttons' => 4
]);

/* 
|---------------------------------------------------
| Register Classes
|---------------------------------------------------
|
*/
autoload_register(['classes']);


/*
|--------------------------------------------------------------------------
| if table doesn't exist then begin installer
| - Installer
|--------------------------------------------------------------------------
*/
Installer::isSoftwareNotInstalled();
