<?php
$conexao = "SELECT * FROM obras order by lote";
$ver = $conn->query($conexao) or die($mysqli->error);
?>
<div class="row g-0">
  <div class="col-ms-6 col-md-5">
    <div id="card" class="card card-home-first">
      <div id="card" class="card-header">
        <div class="ui mini action input inverted left icon input">
            <input type="text" placeholder="Consultar">
            <i class="search icon"></i>
            <button class="mini ui positive button" onclick="window.location.href = '#adduser'">Novo</buttom>
        </div>
        <h5 class="card-title">Obras</h5>
      </div>
      <div class="card-body table-responsive d-flex justify-content-center">
            <table class="table table-xl">
              <tdoby id="myTable">
                <?php while($dado = $ver->fetch_array()){?>
                <tr>
                  <tbody id="myTable">
                  <td style="border: 0;">
                    <div id="ui" class="container">
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
  <div class="col-ms-6 col-md-5">
    <div id="card" class="card card-home-first">
      <div id="card" class="card-header">
        <h5 class="card-title text-center">Dashboard</h5>
      </div>
      <div class="card-body d-flex justify-content-center">
      <div class="row">
   <div class="col">
    <div class="card radius-10 border-start border-0 border-3 border-info">
			  <div class="card-body">
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
				<div class="card radius-10 border-start border-0 border-3 border-info">
			  <div class="card-body">
						<p class="mb-0 text-secondary">Obras Fase Final</p>
						<h4 class="my-1 text-info">
						<?php 
            $total = 0;
            $n = 1;
            $sql = "SELECT *FROM obras WHERE situacao = 'fase final'";
            $sql = $conn->query($sql);
            $total = $sql->num_rows;
            echo '<b>'.$total.'</b>';
            ?>
						
						
						</h4>
						
					 </div>
				</div>
    <div class="card radius-10 border-start border-0 border-3 border-danger">
		   <div class="card-body">
					   <p class="mb-0 text-secondary">Total Concretos</p>
					   <h4 class="my-1 text-danger">
					     <?php 
            $total = 0;
            $n = 1;
            $sql = "SELECT *FROM concretos";
            $sql = $conn->query($sql);
            $total = $sql->num_rows;
            echo '<b>'.$total.'</b>';
            ?>
					   
					   </h4>
			   </div>
		   </div>
     <div class="card radius-10 border-start border-0 border-3 border-success">
			<div class="card-body">
						<p class="mb-0 text-secondary">Todas Liberações</p>
						<h4 class="my-1 text-success">
						<?php 
            $total = 0;
            $n = 1;
            $sql = "SELECT *FROM agenda";
            $sql = $conn->query($sql);
            $total = $sql->num_rows;
            echo '<b>'.$total.'</b>';
            ?>
						
						
						</h4>
						
					</div>
				</div>
		 <div class="card radius-10 border-start border-0 border-3 border-warning">
			<div class="card-body">
						<p class="mb-0 text-secondary">Carros Cadastrados</p>
						<h4 class="my-1 text-warning">
						<?php 
            $total = 0;
            $n = 1;
            $sql = "SELECT * FROM vagas";
            $sql = $conn->query($sql);
            $total = $sql->num_rows;
            echo '<b>'.$total.'</b>';
            ?>
						
						
						</h4>
						
					</div>
				</div>
				

   </div>
   <div class="col">
    <div class="card radius-10 border-start border-0 border-3 border-info">
		   <div onclick="window.location.href = '?action=obrasNovas'" class="card-body">
					   <p class="mb-0 text-secondary">Obras Novas</p>
					   <h4 class="my-1 text-info">
					    <?php 
            $total = 0;
            $n = 1;
            $sql = "SELECT *FROM obras WHERE situacao = 'liberado para tapume'";
            $sql = $conn->query($sql);
            $total = $sql->num_rows;
            echo '<b>'.$total.'</b>';
            ?>
					   </h4>
			   </div>
		   </div>
		   <div class="card radius-10 border-start border-0 border-3 border-info">
			  <div onclick="window.location.href = '?action=obrasParadas'" class="card-body">
						<p class="mb-0 text-secondary">Obras Paradas</p>
						<h4 class="my-1 text-info">
						<?php 
            $total = 0;
            $n = 1;
            $sql = "SELECT *FROM obras WHERE situacao = 'parada'";
            $sql = $conn->query($sql);
            $total = $sql->num_rows;
            echo '<b>'.$total.'</b>';
            ?>
						
						
						</h4>
						
					 </div>
				</div>
     <div class="card radius-10 border-start border-0 border-3 border-danger">
		   <div class="card-body">
					   <p class="mb-0 text-secondary">Concretos Hoje</p>
					   <h4 class="my-1 text-danger">
					     <?php 
            $total = 0;
            $n = 1;
            $sql = "SELECT * FROM concretos WHERE day(data) = day(current_timestamp) AND month(data) = month(current_timestamp)";
            $sql = $conn->query($sql);
            $total = $sql->num_rows;
            echo '<b>'.$total.'</b>';
            ?>
					   
					   
					   </h4>
					   
			   </div>
		   </div>
     <div class="card radius-10 border-start border-0 border-3 border-success">
		   <div class="card-body">
					   <p class="mb-0 text-secondary">Liberações Hoje</p>
					   <h4 class="my-1 text-success">
					    <?php 
            $total = 0;
            $n = 1;
            $sql = "SELECT * FROM agenda WHERE day(data) = day(current_timestamp) AND month(data) = month(current_timestamp)";
            $sql = $conn->query($sql);
            $total = $sql->num_rows;
            echo '<b>'.$total.'</b>';
            ?>
					   
					   
					   </h4>
			   </div>
		   </div>
     <div class="card radius-10 border-start border-0 border-3 border-warning">
			<div class="card-body">
						<p class="mb-0 text-secondary">Carros nas obras</p>
						<h4 class="my-1 text-warning">
						<?php 
            $total = 0;
            $n = 1;
            $sql = "SELECT *FROM vagasSaida";
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
 