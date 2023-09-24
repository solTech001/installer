<div class="row admin-panel">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="tm_install_step">
            <ul class="install_steps">
                <li class="step-three active">
                    <span>
                        1 <?php include( base_path('assets/svg/check.svg') ); ?>
                    </span>
                    Installation
                </li>
                <li class="step-four <?= (Installer::$page == 'finish') ? 'active': '';?>">
                <span>4</span>Finish
            </li>
            </ul>
            <div class="line"><div class="line_sec"></div></div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>