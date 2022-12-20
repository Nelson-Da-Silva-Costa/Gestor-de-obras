<?php
$conexao = "SELECT * FROM obras order by lote";
$ver = $conn->query($conexao) or die($mysqli->error);
?>
<div class="row g-0">
  <div class="col-ms-6 col-md-5">
    <div class="card card-home-first">
      <div class="card-header">
      <div class="input-group input-group-sm">
        <input type="text" class="form-control" placeholder="Consultar"  aria-describedby="button-addon2">
        <button class="btn btn-success" type="button" id="button-addon2">Nova</button>
      </div>
        <h5 class="card-title text-center">Obras</h5>
      </div>
      <div class="card-body d-flex justify-content-center">
          <div class="table-responsive">
            <table class="table table-xl">
              <tdoby id="myTable">
                <?php while($dado = $ver->fetch_array()){?>
                <tr>
                  <tbody id="myTable">
                  <td style="border: 0;">
                    <div id="ui" class="ui">
                        <span><b>Lote: </b><?php echo $dado['lote'];?></span><br>
                        <span><b>Construtora: </b><?php echo $dado['construtora'];?></span><br>
                        <span><b>Proprietário: </b><?php echo $dado['proprietario'];?></span><br>
                        <span><b>Situação: </b><?php echo $dado['situacao'];?></span><br>
                        <span><b>Liberada: </b><?php echo date("d/m/Y", strtotime($dado['liberacao']));?></span>
                        <div class="d-flex justify-content-end">
                          <div class="ui buttons">
                            <button style="font-size: 10px;" class="ui teal button">Editar</button>
                            <div style="font-size: 10px;" class="or" data-text="ou"></div>
                            <button style="font-size: 10px;" class="ui negative button">Apagar</button>
                          </div>
                        </div>
                    </div>
                  </td>
                </tr>
              </tdoby>
              <?php }?>
            </table>
          </div>
      </div>
    </div>
  </div>
  <div class="col-ms-6 col-md-6">
    <div class="card card-home-first">
      <div id="card" class="card-header">
        <h5 class="card-title text-center">Dashboard</h5>
      </div>
      <div class="card-body d-flex justify-content-center">
        <div class="row">
          <div class="col widget">
            <div class="card radius-10 border-start border-0 border-3 border-info">
              <div id="body" class="card-body">
                <p class="mb-0 text-secondary">Obras</p>
                <h4 class="my-1 text-info">
                  <?php 
                  $total = 0;
                  $n = 1;
                  $sql = "SELECT *FROM obras";
                  $sql = $conn->query($sql);
                  $total = $sql->num_rows;
                  echo '<b>'.$total.'</b>';
                  ?>
                </h4>
              </div>
            </div>
          </div>
          <div class="col widget">
            <div class="card radius-10 border-start border-0 border-3 border-info">
              <div id="body" class="card-body">
                <p class="mb-0 text-secondary">Obras Nova</p>
                <h4 class="my-1 text-info">
                  <?php 
                  $total = 0;
                  $n = 1;
                  $sql = "SELECT * FROM obras WHERE situacao = 'liberado para tapume'";
                  $sql = $conn->query($sql);
                  $total = $sql->num_rows;
                  echo '<b>'.$total.'</b>';
                  ?>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 