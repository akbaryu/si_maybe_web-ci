<?php $this->load->view('headerhome');?>

    <section id="content">
        <div class="sub-content">
            <div class="container">
                <div class="row">
                    <div class="span8">
                    <div class="clearfix cols-1">
                    <div class="span8">
                    <div class="clearfix cols-1">


                    <left>
                    <h3>Hasil Pencarian Gejala</h3>
                    <?php
                    if(count($cari)>0)
                    {
                        foreach ($cari as $data) {
                            echo "<a class='btn btn_'> $data->nama_gejala</a>";
                            echo "<p> $data->deskripsi_gejala</p>";
                            echo "<br>";
                        }
                    }
                    else
                    {
                        echo "Data tidak ditemukan";
                    } 
                    ?>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
    </section>

<?php $this->load->view('footerhome');?>