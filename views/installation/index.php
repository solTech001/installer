
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content=""> 
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= env('APP_NAME') . " | Installation" ?></title>
    <link href="<?= asset('css/general.css')?>" rel="stylesheet">
    <link href="<?= asset('css/style.css')?>" rel="stylesheet">
</head>

<body class="<?= Installer::getBodyClass()?>">
    
    <div class="content-container container">
            
        <!-- navigator -->
        <?php include( base_path('views/installation/components/navigator.php') ); ?>


        <div class="row admin-panel">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="tm_install_wiz">
                    <div>
                        <h2 class="light">Installation</h2>
                        <div class="setting-well">

                            <form method="post" class="form-horizontal install-site-setting">
                            
                                <?= csrf() ?>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <div class="mb-5 <?= FormInstaller::$form->getClass() ?>" style="padding: 10px">
                                                <?= FormInstaller::$form->getMessage() ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>
                                
                                <?php include( base_path('views/installation/components/form-content.php') ); ?>
                                
                                <!-- note -->
                                <div class="form-group mt-40"> 
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        Note: Installation process may take few minutes.
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                
                                <!-- button -->
                                <div class="form-group last-btn">
                                    <label class="col-md-2"></label>  
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-main">
                                            Install 
                                            <?php include( base_path('assets/svg/upload.svg') ); ?>
                                        </button>   
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

</body>
</html>
