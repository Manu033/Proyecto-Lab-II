
<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $COD_SERVICIO_BRINDADO['COD_SERVICIO_BRINDADO']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Estado del servicio
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="cambiarestado.php">
        <input type="hidden" name="COD_SERVICIO_BRINDADO" value="<?php echo $row['COD_SERVICIO_BRINDADO']; ?>">
            <div class="modal-body" id="cont_modal">
                <div class="form-group">
                    Estado
                    <select id="subject-filter" id="estado" name="estado" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                        <?php if ($_POST["estado"] != ''){ ?>
                        <option value="<?php echo $_POST["COD_ESTADO"]; ?>"><?php echo $_POST["COD_ESTADO"]; ?></option>
                        <?php } ?>
                        <?php
                            $sql = "SELECT * FROM ESTADOS";
                            $ejecutar = mysqli_query($DB_conn, $sql);
                        ?>
                        <?php foreach($ejecutar as $opciones): ?>
                                <option value="<?php echo $opciones['COD_ESTADO']?>"> <?php echo $opciones['DESCRIPCION'] ?></option>
                        <?php endforeach ?>
                        </select></label>        
                    </select>
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Fecha Finalizacion(en caso que corresponda):</label>
                  <input type="date" name="FECHA_FINALIZACION" class="form-control" value="<?php echo $_POST['FECHA_FINALIZACION']; ?>" required="true">
                </div>
            </div>  
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->