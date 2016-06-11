<?php $this->load->view('headerhome');?>

<div class="slider">
        <div class="camera_wrap">
            <div data-src="<?php echo base_url('assets2/img/slide1.jpg')?>"></div>
            <div data-src="<?php echo base_url('assets2/img/slide2.jpg')?>"></div>
            <div data-src="<?php echo base_url('assets2/img/slide3.jpg')?>"></div>
        </div>
</div>
<section id="content" class="main-content">
  <div class="container">
    <div class="row">
    	<div class="span8">
        	<div class="clearfix cols-1">
                        <?php 
                        foreach ($query as $row) {
                        if ($row->id_tips){
                            echo "<div style='text-align:left'>";
                            echo "<h4>$row->jenis_tips</h4>";
                            echo "<h5>$row->judul_tips</h5>";
                            echo "<p>$row->deskripsi_tips</p>";
                            echo '<img src="../../upload/'. $row->gambar.'">';  
                            //echo "<img src="<?php echo base_url(). 'upload/' . $row->gambar <!--
                            echo "</div>";
                            } 
                        }
                        ?>
            </div>
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