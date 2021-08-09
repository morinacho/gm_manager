<div class="row mt-1">
    <div class="col-12">
        <p id="logo-title"><img src="<?php echo URL_ROUTE ?>media/system/icons/logo.png" /> GM 2.0</p>
  <hr>
    </div>
    <div class="col-12">
        <ul class="accordion accordion-flush" id="menu-accodion">
            <li class="accordion-item">
                <a href=""class="accordion-button collapsed active" data-bs-toggle="collapse" data-bs-target="#home-actions">
                    <span class="material-icons">home</span> Inicio
                </a>
                <ul id="home-actions" class="accordion-collapse collapse" data-bs-parent="#menu-accodion">
                    <li><a href="<?php echo URL_ROUTE ?>main">Dashboard</a></li>
                    <li><a href="<?php echo URL_ROUTE ?>main/cashregister">Caja</a></li>
                </ul>
            </li>
            <li class="accordion-item">
                <a href="" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#workorder-actions">
                    <span class="material-icons">outbox</span>Orden de trabajo
                </a>
                <ul id="workorder-actions" class="accordion-collapse collapse" data-bs-parent="#menu-accodion">
                    <li><a href="">Ver Ordenes de trabajo</a></li>
                    <li><a href="">Agregar orden de trabajo</a></li>
                </ul>
            </li>
            <li class="accordion-item">
                <a href="" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#notices-actions">
                    <span class="material-icons">email</span>Avisos
                </a>
                <ul id="notices-actions" class="accordion-collapse collapse" data-bs-parent="#menu-accodion">
                    <li><a href="<?php echo URL_ROUTE ?>notices/index">Ver avisos activos</a></li>
                    <li><a href="<?php echo URL_ROUTE ?>notices/create">Agregar avisos</a></li>
                </ul>
            </li>
            <li class="accordion-item">
                <a href="" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#customer-actions">
                    <span class="material-icons">person</span>Clientes
                </a>
                <ul id="customer-actions" class="accordion-collapse collapse" data-bs-parent="#menu-accodion">
                    <li><a href="<?php echo URL_ROUTE ?>customers/index">Ver clientes</a></li>
                    <li><a href="<?php echo URL_ROUTE ?>customers/create">Registrar cliente</a></li>
                </ul>
            </li>
            <li class="accordion-item">
                <a href="" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#resource-actions">
                    <span class="material-icons">manage_accounts</span>Recurso
                </a>
                <ul id="resource-actions" class="accordion-collapse collapse" data-bs-parent="#menu-accodion">
                    <li><a href="<?php echo URL_ROUTE ?>users/index"">Ver recurso</a></li>
                    <li><a href="<?php echo URL_ROUTE ?>users/create_resource">Agregar recurso</a></li>
                </ul>
            </li>
            <li class="accordion-item">
                <a href="<?php echo URL_ROUTE ?>main/backup" class="accordion-button collapsed">
                    <span class="material-icons">cloud</span>Backup
                </a> 
            </li>
            <li class="accordion-item">
                <a href="<?php echo URL_ROUTE ?>main/support" class="accordion-button collapsed">
                    <span class="material-icons">support_agent</span>Support
                </a> 
            </li>
            <li class="accordion-item">
                <a href="<?php echo URL_ROUTE ?>main/security" class="accordion-button collapsed">
                    <span class="material-icons">security</span>Security
                </a>
            </li>
            <li class="accordion-item">
                <a href="<?php echo URL_ROUTE ?>main/settings" class="accordion-button collapsed">
                    <span class="material-icons">settings</span>Settings
                </a> 
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