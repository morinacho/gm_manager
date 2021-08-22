<div class="row mt-1">
    <div class="col-12">
        <p id="logo-title"><img src="<?php echo URL_ROUTE ?>media/system/icons/logo.png" /> GM 2.0</p>
  <hr>
    </div>
    <div class="col-12">
        <ul class="accordion accordion-flush" id="menu-accodion">
            <?php
                foreach ($_SESSION['options'] as $option) {
                    echo"
                        <li class='accordion-item'>
                            <a href='' class='accordion-button collapsed' data-bs-toggle='collapse' data-bs-target='#actions-". $option[0]->option_id ."'>
                                <span class='material-icons'>".$option[0]->option_icon."</span>". $option[0]->option_desc ."
                            </a>
                        
                    ";
                    if(!empty($option[1])){
                        echo "
                            <ul id='actions-". $option[0]->option_id ."' class='accordion-collapse collapse' data-bs-parent='#menu-accodion'>
                        ";
                        foreach($option[1] as $action){ 
                            echo "
                                <li><a href='". URL_ROUTE . $action->action_url ."'>". $action->action_desc ."</a></li>
                            "; 
                        }
                        echo "</ul>";
                    }
                    echo "</li>";
                } 
            ?>
            <li class='accordion-item'>
                <a href=''class='accordion-button collapsed active' data-bs-toggle='collapse' data-bs-target='#home-actions'>
                    <span class='material-icons'>home</span> Inicio
                </a>
                <ul id='home-actions' class='accordion-collapse collapse' data-bs-parent='#menu-accodion'>
                    <li><a href='<?php echo URL_ROUTE ?>main'>Dashboard</a></li>
                    <li><a href='<?php echo URL_ROUTE ?>main/cashregister'>Caja</a></li>
                </ul>
            </li>
            
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