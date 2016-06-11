<?php $this->load->view('headerhome');?>

    <section id="content">
        <div class="sub-content">
            <div class="container">
                <div class="row">
                <div class="span12">
                    <h2 class="bot-0">Gejala</h2>
                </div>
                    <div class="span8">
                        <?php $i = 0;
                        foreach ($query as $row) {
                            $i++;
                            if ($row->id_gejala){
                                echo "<h5>Gejala : $row->nama_gejala</h5>";
                                echo "<h3><center>$row->judul_artikel</h3>";
                                echo $row->deskripsi_gejala;
                                echo "<br>";
                                echo '<img src="../upload/'. $row->gambar.'"/>';    
                                echo "<br>";
                            }
                        }
                        ?>
                        

                    </div>
                   

                </div>

            </div>

        </div>
    </section>

<?php $this->load->view('footerhome');?>