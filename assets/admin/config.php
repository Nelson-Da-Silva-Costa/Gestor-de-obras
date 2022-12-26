<?php
$conexao = "SELECT * FROM usuarios order by login";
$ver = $conn->query($conexao) or die($mysqli->error);
?>
<div class="col-ms-6 col-md-5">
    <div id="card" class="card card-home-first">
      <div id="card" class="card-header">
        <div class="ui mini action input inverted left icon input">
            <input type="text" placeholder="Consultar">
            <i class="search icon"></i>
            <button class="mini ui positive button" onclick="window.location.href = '#adduser'">Novo</buttom>
        </div>
        <h5 class="card-title">Configuração de usuarios</h5>
      </div>
      <div id="table" class="card-body table-responsive">
            <table class="table table-xl">
              <tdoby id="myTable">
                <?php while($dado = $ver->fetch_array()){?>
                <tr>
                  <tbody id="myTable">
                  <td style="border: 0;">
                    <div id="ui" class="ui">
                        <span class="d-flex text-left"><b>Usuário: </b><?php echo $dado['login'];?></span>
                        <span class="d-flex text-left"><b>Nivel de acesso: </b><?php echo $dado['nivel'];?></span>
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
