<div class="row">
    <div class="col-2" id="dashboard-lateral">
        <?php require_once APP_ROUTE . '/main/view/components/lateral.php'?>
    </div>
    <div class="col-10" id="dashboard-principal"> 
        <div class="row">
    		<div class="col-12 content-align-right" id="nav-home">
        		<?php require_once APP_ROUTE . '/main/view/components/nav.php';?>
    		</div>
			<!-- Breadcrumb -->
			<div class="col-12 row mt-4">
				<div class="col-9">
					<h4>Agregar Cliente</h4>
				</div>
				<div class="col-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index">Clientes</a></li>
							<li class="breadcrumb-item active" aria-current="page">Agregar</li>
						</ol>
					</nav>
				</div>
            </div>
            
        </div>
    </div>
</div>