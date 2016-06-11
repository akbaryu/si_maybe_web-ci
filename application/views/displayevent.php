<?php $this->load->view('headerhome');?>

<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h2 class="bot-0">Event</h2>
                </div>
            </div>
            <div class="row">
                <div class="thumbnails_3">
                    <div class="span12">
                       

                        <?php $i = 0;
                        foreach ($query as $row) {
                        $i++;
                        if ($row->id_event){
                            echo "<div style='text-align:center'>";
                            echo "<h4>$row->judul</h4>";
                            echo "<p>$row->deskripsi</p>";
                            echo "<p>$row->email</p>";
                            //echo "<img src="<?php echo base_url(). 'upload/' . $row->gambar <!--
                            echo '<img src="../upload/'. $row->gambar.'"/>';    
                            echo "</div>";
                            }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('footerhome');?>