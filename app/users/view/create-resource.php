<?php require_once APP_ROUTE . '/main/view/components/top.php'?>
    <!-- Form -->
    <div class="col-12 mt-3 row justify-content-center"> 
            <div class="card col-10 boxShadow">
                <div class="card-body ">
                    <form>
                        <h5 class="card-title">Datos Personales</h5>
                        <div class="mb-3 mt-3">
                            <label for="resource-name" class="form-label">Nombres</label>
                            <input type="text" class="form-control form-control-sm" id="resource-name" name="resource-name" placeholder="Ingresar nombres">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="resource-lastname" class="form-label">Apellido</label>
                            <input type="text" class="form-control form-control-sm" id="lastname-name" name="lastname-name" placeholder="Ingresar apellidos">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="resource-dni" class="form-label">DNI</label>
                            <input type="text" class="form-control form-control-sm" id="resource-dni" name="resource-dni" placeholder="Ingresar dni sin puntos">
                        </div>
                        <div class="mb-3">
                            <label for="resource-email" class="form-label">Email</label>
                            <input type="email" class="form-control form-control-sm" id="resource-email" placeholder="ejemplo@mail.com">
                        </div>
                        <div class="mb-3">
                            <label for="resource-address" class="form-label">Dirección</label>
                            <input type="text" class="form-control form-control-sm" id="resource-address" placeholder="Ingresar dirección">
                        </div>
                        <hr class="mt-4">
                        <h5 class="card-title">Control de acceso</h5>
                        <h6 class="card-subtitle mb-2 mt-3 text-muted">Orden de trabajo</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="create-orden">
                            <label class="form-check-label" for="create-orden">Crear orden</label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="view-orden">
                            <label class="form-check-label" for="view-orden">Ver orden</label>
                        </div>
                        
                        <h6 class="card-subtitle mb-2 mt-3 text-muted">Lista de tareas - Persona Fisica Monotributista</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="create-orden">
                            <label class="form-check-label" for="create-orden">Declaración jurada de ingresos brutos</label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="create-orden">
                            <label class="form-check-label" for="create-orden">Pago del monotributo</label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="create-orden">
                            <label class="form-check-label" for="create-orden">Liquidación de sueldo (si tiene empleado)</label>
                        </div> 

                        <h6 class="card-subtitle mb-2 mt-3 text-muted">Lista de tareas - Persona Fisica Responsable Inscripto</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="create-orden">
                            <label class="form-check-label" for="create-orden">Declaración jurada de ingresos brutos</label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="create-orden">
                            <label class="form-check-label" for="create-orden">Liquidación de iva (por mes)</label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="create-orden">
                            <label class="form-check-label" for="create-orden">Liquidación de sueldo (si tiene empleado)</label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="create-orden">
                            <label class="form-check-label" for="create-orden">Confección y pago de 931 (aporte y contribuciones)</label>
                        </div> 
                        <h6 class="card-subtitle mb-2 mt-3 text-muted">Lista de tareas - Persona jurídica - Responsable Inscripto</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="create-orden">
                            <label class="form-check-label" for="create-orden">Declaración jurada de ingresos brutos</label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="create-orden">
                            <label class="form-check-label" for="create-orden">Liquidación de iva (por mes)</label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="create-orden">
                            <label class="form-check-label" for="create-orden">Liquidación de sueldo (si tiene empleado)</label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="create-orden">
                            <label class="form-check-label" for="create-orden">Confección y pago de 931 (aporte y contribuciones)</label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="create-orden">
                            <label class="form-check-label" for="create-orden">Balance</label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="create-orden">
                            <label class="form-check-label" for="create-orden">Ganancia</label>
                        </div> 
                        <hr>
                        <div class="col-12 mb-3 mt-3 row justify-content-between">
                            <div class="col-5 d-grid gap-2">
                                <button class="btn btn-primary btn-sm" type="button">Registrar</button>
                            </div>
                            <div class="col-5 d-grid gap-2">
                                <button class="btn btn-outline-secondary btn-sm" type="button">Cancelar</button>
                            </div>
                        </div> 
                    </form>
                </div> 
            </div>

    </div>
    
<?php require_once APP_ROUTE . '/main/view/components/bottom.php'?>