<div class="row g-0">
  <div class="col-sm-6 col-md-5">

  </div>
  <div class="card card-home">
       	<div id="card" class="card-header">
<h5 style="color: #fff;" class="card-title text-center">Dashboard</h5>
</div>
 <div style="font-size: 12px;" class="card-body">
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
		   <div class="card-body">
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
			  <div class="card-body">
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

