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
                                        echo "Update untuk ID Tips :  $id_tips";
                                        echo form_open('Update/edit_tips/'.$id_tips);
                                        ?>
                                    </h5>
                                    <br>
                                    <tr>
                                        <td>Judul Tips:</td>
                                        <td><input type="text" name="judul_tips" placeholder="" class="judul_tips" id="judul_tips"></td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi Tips:</td>
                                        <td><textarea type="text" name="deskripsi_tips" class="deskripsi_tips" id="deskripsi_tips"
                                                      style="margin: 0px 0px 9px; height: 302px; width: 615px;"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal:</td>
                                        <td><select name=Tgl >
                                                <option name=Tgl>Tgl</option>;
                                                <option name=Tgl>1
                                                <option name=Tgl>2
                                                <option name=Tgl>3
                                                <option name=Tgl>4
                                                <option name=Tgl>5
                                                <option name=Tgl>6
                                                <option name=Tgl>7
                                                <option name=Tgl>8
                                                <option name=Tgl>9
                                                <option name=Tgl>10
                                                <option name=Tgl>11
                                                <option name=Tgl>12
                                                <option name=Tgl>13
                                                <option name=Tgl>14
                                                <option name=Tgl>15
                                                <option name=Tgl>16
                                                <option name=Tgl>17
                                                <option name=Tgl>18
                                                <option name=Tgl>19
                                                <option name=Tgl>20
                                                <option name=Tgl>21
                                                <option name=Tgl>22
                                                <option name=Tgl>23
                                                <option name=Tgl>24
                                                <option name=Tgl>26
                                                <option name=Tgl>27
                                                <option name=Tgl>28
                                                <option name=Tgl>29
                                                <option name=Tgl>30
                                                <option name=Tgl>31
                                            </select>
                                            <select name=Bln>
                                                <option name=Bln>Bln
                                                <option name=Bln>1
                                                <option name=Bln>2
                                                <option name=Bln>3
                                                <option name=Bln>4
                                                <option name=Bln>5
                                                <option name=Bln>6
                                                <option name=Bln>7
                                                <option name=Bln>8
                                                <option name=Bln>9
                                                <option name=Bln>10
                                                <option name=Bln>11
                                                <option name=Bln>12
                                            </select>
                                            <select name=Thn>
                                                <option name=Thn>Thn
                                                <option name=Thn>2018
                                                <option name=Thn>2017
                                                <option name=Thn>2016
                                                <option name=Thn>2015
                                                <option name=Thn>2014
                                                <option name=Thn>2013
                                                <option name=Thn>2012
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Tips:</td>
                                        <td><input type="radio" name="jenis" value="Tips Ibu Hamil">Ibu Hamil
                                            <input type="radio" name="jenis" value="Tips Bayi">Bayi</td>
                                    </tr>
                                    <td colspan="4" align="center">
                                        <input type="submit" value="update" name="update" class="btn btn_">
                                        <?php
                                        echo form_close();
                                        ?>

                                </table>
                            </center>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('footeradmin');?>
