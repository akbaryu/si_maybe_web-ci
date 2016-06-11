<?php $this->load->view('headeradmin');?>
<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h4 class="bot-0">UPDATE GEJALA</h4>
                </div>
            </div>
            <div class="row">
                <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#ffffff" width="97%" id="AutoNumber1" bgcolor="#ffffff">
                    <tr>
                        <td width="97%">
                            <center>

                                    <table>
                                        <h5>
                                        <?php
                                        echo "Update untuk ID Gejala :  $id_gejala";
                                        echo form_open('Update/edit_gejala/'.$id_gejala);
                                        ?>
                                        </h5>
                                        <br>
                                        <tr>
                                            <td>Nama Gejala:</td>
                                            <td><input type="text" name="nama_gejala" placeholder="" class="nama_gejala" id="nama_gejala"></td>
                                        </tr>
                                        <tr>
                                            <td>Judul Artikel:</td>
                                            <td><input type="text" name="judul_artikel" placeholder="" class="judul_artikel" id="judul_artikel"></td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi Gejala & Solusi:</td>
                                            <td><textarea type="text" name="deskripsi_gejala" class="deskripsi_gejala" id="deskripsi_gejala"
                                                          style="margin: 0px 0px 9px; height: 302px; width: 615px;"></textarea></td>
                                        </tr>
                                        <td colspan="4" align="center">
                                            <input type="submit" value="update" name="update" class="btn btn_">
                                            <?php
                                            echo form_close();
                                            ?>
                                    </table>
                            </center>
                        </td></input>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('footeradmin');?>
