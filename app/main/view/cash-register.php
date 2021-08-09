<!-- Dashboard index page -->
<div class="row">
    <div class="col-2" id="dashboard-lateral">
        <?php require_once 'components/lateral.php';?>
    </div>
    <div class="col-10" id="dashboard-principal"> 
		<div class="row">
    		<div class="col-12 content-align-right" id="nav-home">
        		<?php require_once 'components/nav.php';?>
    		</div>
			<!-- Breadcrumb -->
			<div class="col-12 row mt-4">
				<div class="col-10">
					<h4>Caja</h4>
				</div>
				<div class="col-2">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index">Inicio</a></li>
							<li class="breadcrumb-item active" aria-current="page">Caja</li>
						</ol>
					</nav>
				</div>
			</div>
			<!-- Cards-->
			<div class="col-12 row mt-3 justify-content-around">
			
				<div class="card col-3"  >
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<p class="card-text">  content.</p> 
					</div>
				</div>
				<div class="card col-3">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<p class="card-text">  content.</p> 
					</div>
				</div>
				<div class="card col-3" >
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<p class="card-text">  content.</p> 
					</div>
				</div>

			</div>

			<!-- Some 2 checklog -->
			<div class="col-12 row mt-4 mb-5 justify-content-between">
				<div class="col-8">
					<div class="card" style="height: 28rem;">
						<div class="card-header">
							Featured
						</div>
						<div class="card-body">
							<h5 class="card-title">Special title treatment</h5>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card" style="height: 28rem;">
						<div class="card-header">
							Featured
						</div>
						<div class="card-body">
							<h5 class="card-title">Special title treatment</h5>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>