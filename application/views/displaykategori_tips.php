<?php $this->load->view('headerhome');?>

<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="row">
            <div class="span12">
                    <h2 class="bot-0">Kategori Tips</h2>
                </div>
                <div class="span8">
                    <a href="<?php echo site_url('Tips/tips_ibu')?>"><img src="<?php echo base_url('assets2/img/buttontipsibu.png')?>" alt=""></a>
                    <a href="<?php echo site_url('Tips/tips_bayi')?>"><img src="<?php echo base_url('assets2/img/buttontipsbayi.png')?>" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('footerhome');?>
