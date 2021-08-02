<div class="row mt-3">
    <div class="col-12">
        <p id="logo-title"><img src="<?php echo URL_ROUTE ?>media/system/icons/logo.png" /> GM 2.0</p>
        <hr>
    </div>
    <div class="col-12">
        <ul class="list-group" id="lateral-action">
            <a href="" class="active">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">home</span>Inicio

                    </div>
                </li>
            </a>
            <?php 
               /* $options = $_SESSION['options'];
                
                foreach ($options as $option) {
                    print_r($option);
                   /* echo "
                        <a href='<?php echo URL_ROUTE ?>customers'>
                            <li class='list-group-item d-flex justify-content-between align-items-start'>
                                <div class='ms-2 me-auto'><span class='material-icons'>people_outline</span>Clientes</div>
                            </li>
                        </a>
                        $option
                        "; 
                } */
                 
            ?>
            <a href="<?php echo URL_ROUTE ?>customers">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">people_outline</span>Clientes
                    </div>
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">filter_none</span>Orden de trabajo</div>
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">email</span>Avisos</div>
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">engineering</span>Recurso</div>
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">cloud</span>Backup</div> 
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">support_agent</span>Support</div> 
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">security</span>Security</div> 
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">settings</span>Settings</div> 
                </li>
            </a>
        </ul>
    </div>
    <div class="col-12">
        <hr>
        <a href="<?php echo URL_ROUTE ?>auth/logout">
            <div class="d-grid ap-2   mx-auto">
                <button type="button" class="btn btn-secondary btn-sm">
                    <span class="material-icons">exit_to_app</span>
                    <span>Logout</span>
                </button>
            </div>
        </a> 
    </div>
</div>