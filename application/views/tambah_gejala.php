<?php $this->load->view('headeradmin');?>
<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h4 class="bot-0">TAMBAH GEJALA</h4>
                </div>
            </div>
            <div class="row">
                <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#ffffff" width="97%" id="AutoNumber1" bgcolor="#ffffff">
                    <tr>
                        <td width="97%">
                            <center>
                                <div id="form_input">
                                <?php echo form_open_multipart('gejala/do_upload');?>
                                    <table>
                                        <?php echo form_open('gejala/insert_datagejala');?>
                                        <tr>
                                            <td>Nama Gejala :</td>
                                            <td><input type="text" name="nama_gejala" placeholder="nama gejala" class="nama_gejala" id="nama_gejala" required></td>
                                        </tr>
                                        <tr>
                                            <td>Judul Artikel :</td>
                                            <td><input type="text" name="judul_artikel" placeholder="judul artikel" class="judul_artikel" id="judul_artikel" required></td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi Gejala & Solusi :</td>
                                            <td><textarea type="text" name="deskripsi_gejala" placeholder="write a description..." class="deskripsi_gejala" id="deskripsi_gejala" required="" style="margin: 0px 0px 9px; height: 302px; width: 615px;"></textarea></td>
                                        </tr> 
                                        <tr>
                                            <td>Gambar (maks 3 Mb):</td>
                                            <td><input type="file" name="userfile" class="btn btn_"/></td>
                                        </tr>
                                    </table>
                                    <input type="submit" name="simpan" class="btn btn_" ></input>
                                    
                                    </form>
                                </div>
                            </center>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('footeradmin');?>
