<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="row mt-4">
        <div class="col-8">
            <a href="<?php echo URL_ROUTE?>customers/create" class="btn btn-outline-primary btn-sm" id="pills-create-tab" data-bs-toggle="pill" data-bs-target="#pills-create" type="button" role="tab"><span class="material-icons">person_add</span></a>
            <a href="" class="btn btn-outline-primary btn-sm"><span class="material-icons">vertical_align_top</span></a>
            <a href="" class="btn btn-outline-primary btn-sm"><span class="material-icons">vertical_align_bottom</span></a>
        </div>
        <div class="col-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Buscar cliente" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text material-icons" id="basic-addon2">search</span>
            </div>
        </div>
        <div class="col-12 mt-2">
            <table class="table table-hover table-light  ">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Nombre y apellido</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Deshabilitar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>                        
                        <td><a href="#">Mark Otto</a></td>
                        <td>33221144</td>
                        <td class="text-center">
                            <a href=""><span class="material-icons">edit</span></a> 
                        </td>
                        <td class="text-center"> 
                            <a href=""><span class="material-icons">delete</span></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark Otto</td>
                        <td>33221144</td>
                        <td class="text-center">
                            <a href=""><span class="material-icons">edit</span></a> 
                        </td>
                        <td class="text-center"> 
                            <a href=""><span class="material-icons">delete</span></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark Otto</td>
                        <td>33221144</td>
                        <td class="text-center">
                            <a href=""><span class="material-icons">edit</span></a> 
                        </td>
                        <td class="text-center"> 
                            <a href=""><span class="material-icons">delete</span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</div>