<?php $this->load->view('headeradmin');?>

<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <center>
                    <a href="<?php echo site_url('Update/update_gejala')?>"><img src="<?php echo base_url('assets2/img/update_gejala.png')?>" alt=""></a><br>
                    <a href="<?php echo site_url('Update/update_tips')?>"><img src="<?php echo base_url('assets2/img/update_tips.png')?>" alt=""></a><br>
                    <a href="<?php echo site_url('Update/update_event')?>"><img src="<?php echo base_url('assets2/img/update_event.png')?>" alt=""></a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('footeradmin');?>
