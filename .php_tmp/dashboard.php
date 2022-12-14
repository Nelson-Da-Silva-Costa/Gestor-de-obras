<div class="row g-0">
    <div class="col-ms-6 col-md-6">
    <div class="card card-home-first">
            <div id="card" class="card-header">
                <h5 class="card-title text-center">Dashboard</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-ms-6 col-md-6">
        <div class="card card-home-second">
            <div id="card" class="card-header">
                <h5 class="card-title text-center">Dashboard</h5>
            </div>
            <div class="card-body">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>