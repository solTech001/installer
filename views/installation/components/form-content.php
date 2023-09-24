
<!-- Aplication and Site Email -->
<div class="row">

    <!-- Aplication Name -->
    <div class="form-group">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <label for="">Choose your Application Name:</label>
            <input type="text" class="form-control" name="app_name" 
                value="<?= old('app_name') ?? env('APP_NAME') ?>"
                placeholder="Aplication Name"
                style="border-bottom: 2px solid #828282;">
        </div>
        <div class="col-md-2"></div>
    </div>

    <!-- Site Email -->
    <div class="form-group mb-50">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <label class="c-lightgrey">
                Email Address you want to receive admin information:
            </label>
            <input type="email" class="form-control" name="email" 
                value="<?= old('email') ?>"
                placeholder="Email Address">
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<!-- SMTP Configuration -->
<div class="row mb-40">

    <!-- SMTP_HOST -->
    <div class="form-group mb-0">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <label for="" class="label-title">Configure SMTP Information:</label>
            <input type="text" class="form-control" name="smpt_host" 
                value="<?= old('smpt_host') ?>"
                placeholder="SMTP Host"
                style="border-bottom: 2px solid #0bbf52;">
        </div>
        <div class="col-md-2"></div>
    </div>

    <!-- SMTP_PORT -->
    <div class="form-group mb-0"> 
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <label class="c-lightgrey">
                Mailers Port:
            </label>
            <input type="text" class="form-control" name="smtp_port"  
                value="<?= old('smtp_port') ?? 465?>" 
                placeholder="SMTP Port"> 
        </div>
        <div class="col-md-2"></div>
    </div>

    <!-- SMTP_USERNAME -->
    <div class="form-group mb-0"> 
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <label class="c-lightgrey">
                Mailers Username:
            </label>
            <input type="text" class="form-control" name="smtp_username" 
                value="<?= old('smtp_username') ?>" 
                placeholder="SMTP Username"> 
        </div>
        <div class="col-md-2"></div>
    </div>

    <!-- SMTP_PASSWORD -->
    <div class="form-group">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <label class="c-lightgrey">
                Mailers Password:
            </label>
            <input type="text" class="form-control" name="smtp_password" 
                value="<?= old('smtp_password') ?>" 
                placeholder="Mail Password">
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


<!-- Database Information -->
<div class="row">

    <!-- DB_HOST -->
    <div class="form-group mb-0">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <label for="" class="label-title">Configure Database Information:</label>
            <input type="text" class="form-control" name="db_host" 
                value="<?= old('db_host') ?? 'localhost' ?>"
                placeholder="Database Host"
                style="border-bottom: 2px solid #820000;">
        </div>
        <div class="col-md-2"></div>
    </div>

    <!-- DB_USERNAME -->
    <div class="form-group mb-0"> 
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <label class="c-lightgrey">
                Database Username:
            </label>
            <input type="text" class="form-control" name="db_username" 
                value="<?= old('db_username') ?>" 
                placeholder="Database Username"> 
        </div>
        <div class="col-md-2"></div>
    </div>

    <!-- DB_PASSWORD -->
    <div class="form-group mb-0">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <label class="c-lightgrey">
                Database Password:
            </label>
            <input type="text" class="form-control" name="db_password" 
                value="<?= old('db_password') ?>" 
                placeholder="Database Password">
        </div>
        <div class="col-md-2"></div>
    </div>

    <!-- DB_DATABASE -->
    <div class="form-group mb-0">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <label class="c-lightgrey">
            Database Name:
            </label>
            <input type="text" class="form-control" name="db_name" 
                value="<?= old('db_name') ?>" 
                placeholder="Database Name"> 
        </div>
        <div class="col-md-2"></div>
    </div>
</div>