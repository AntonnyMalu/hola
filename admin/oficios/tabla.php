 <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Oficios Recibidos</h6>
                        </div>
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead  class="thead-dark">
                                        <tr>
                                            <th>Nombre de la Institución</th>
                                            <th>Requerimientos</th>
                                            <th>Estatus</th>
                                            <th>fecha</th>
                                            <th style="width: 20%;"></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                        <?php 
                                            foreach($oficios as $oficio){
                                        ?>

                                        <tr>
                                            <td>
                                               
                                            </td>
                                            <td>
                                               
                                            </td>
                                            <td>
                                               
                                            </td>
                                            <td>
                                               
                                            </td>
                                            <td class="text-center">

                                                <button type="button" class="btn btn-warning btn-circle btn-sm <?php if ($usuario['role'] != 100){ echo "edit-usu"; } ?>"
                                                data-name="<?php echo $usuario['name']; ?>" data-email="<?php echo $usuario['email']; ?>" 
                                                data-role="<?php echo $usuario['role']; ?>" data-id="<?php echo $usuario['id']; ?>" >
                                                    <i class="fas fa-user-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-circle btn-sm <?php if ($usuario['role'] != 100){ echo "elim-usu"; } ?>"
                                                        data-id="<?php echo $usuario['id']; ?>">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>

                                                <form action="guardar.php" method="post" class="d-none"  id="form_eliminar_<?php echo $usuario['id']; ?>">
                                                    <input type="text" name="opcion" value="eliminar" />
                                                    <input type="text" name="users_id" value="<?php echo $usuario['id']; ?>" />
                                                </form>

                                            </td>
                                        </tr>

                                        <?php 
                                            }
                                        ?>
                                       
                            
                                        
                                    </tbody>
                                </table>
                            
                            </div>
                        </div>
                    </div>