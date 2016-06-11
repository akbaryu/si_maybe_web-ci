<?php $this->load->view('headerhome');?>

<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <?php 
                        foreach ($query as $row) {
                        if ($row->jenis_tips == 'Tips Bayi'){
                            echo "<div style='text-align:left'>";
                            echo "<h5>$row->jenis_tips</h5>";
                            echo "<h4 align='center'>$row->judul_tips</h4>";
                            echo '<center><img src="../../upload/'. $row->gambar.'"/></center><br><br>';
                            $string = $row->deskripsi_tips;
                            $string = word_limiter($string, 70);
                            echo $string."........";
                            echo "<a class='btn btn_'>read more</a><br><br>";
                            echo "</div>";
                            echo "<hr>";
                            } 
                        }
                        ?>

                </div>
                <div class="span4">
            <h4 class="indent-2">Berita Kesehatan:</h4>
                <ul class="list-news">
                <li>
                   <?php 
                        foreach ($query as $row) {
                        if ($row->id_tips){
                            echo "<a class='btn btn_'>$row->tgl</a>";
                            echo "<p class='text-info'>$row->judul_tips</p>";
                            $string = $row->deskripsi_tips; 
                            $string = word_limiter($string, 30);
                            echo $string;
                            echo "<br>";
                            } 
                        }
                        ?>

                </li>
            </ul>
        </div>
                        </div>
                        </div>
</section>

<?php $this->load->view('footerhome');?>