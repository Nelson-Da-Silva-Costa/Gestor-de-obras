<?php
$conexao = "SELECT * FROM agenda WHERE day(data) = day(current_timestamp) AND month(data) = month(current_timestamp)";
$con = $conn->query($conexao) or die($mysqli->error);

$conexao = "SELECT * FROM agenda";
$ver = $conn->query($conexao) or die($mysqli->error);

?>

<div class="row">
    <div class="col-ms-6 col-md-5">
        <div id="card" class="card card-home-first">
        <div id="card" class="card-header">
            <h5 class="card-title text-center">Autorizações</h5>
        </div>
        <div id="table" class="card-body table-responsive d-flex justify-content-center">
                <table class="table table-xl">
                <tdoby id="myTable">
                    <?php while($dado = $con->fetch_array()){?>
                    <tr>
                    <tbody id="myTable">
                    <td style="border: 0;">
                        <div id="ui" class="ui">
                            <span><b>Lote: </b><?php echo $dado['lote'];?></span><br>
                            <span><b>Liberada: </b><?php echo date("d/m/Y", strtotime($dado['data']));?></span><br>
                            <span><b>Situação: </b><?php echo $dado['legenda'];?></span>
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
        <div class="input-group input-group-sm">
            <input type="text" class="form-control" placeholder="Consultar"  aria-describedby="button-addon2">
            <button class="btn btn-success" type="button" id="button-addon2">Nova</button>
        </div>
            <h5 class="card-title text-center">Autorizações</h5>
        </div>
        <div id="table" class="card-body table-responsive d-flex justify-content-center">
                <table class="table table-xl">
                <tdoby id="myTable">
                    <?php while($dado = $ver->fetch_array()){ ?>
                    <tr>
                    <tbody id="myTable">
                    <td style="border: 0;">
                        <div id="ui" class="ui">
                            <span><b>Lote: </b><?php echo $dado['lote'];?></span><br>
                            <span><b>Liberada: </b><?php echo date("d/m/Y", strtotime($dado['data']));?></span><br>
                            <span><b>Situação: </b><?php echo $dado['legenda'];?></span>
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