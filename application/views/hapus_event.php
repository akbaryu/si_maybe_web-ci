<script type="text/javascript" language="JavaScript">
    function konfirmasi()
    {
        tanya = confirm("Anda Yakin Akan Menghapus Data ?");
        if (tanya == true) return true;
        else return false;
    }</script>
<?php $this->load->view('headeradmin');?>
<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h4 class="bot-0">HAPUS EVENT</h4>
                    </div>
            </div>
            <div class="row">
                <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#ffffff" width="97%" id="AutoNumber1" bgcolor="#ffffff">
                    <tr>
                        <td width="97%">
                            <center>
                                <div id="form_input">
                                    <br>
                                    <?php
                                    echo "<table class=\"table table - bordered\" style=\"width:700px;\" border=\"1\" align='center'>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Judul Event</th>
                                        <th>Deskripsi Event</th>
                                        <th>Batas Waktu</th>
                                        <th>Delete</th>
                                        </tr>";

                                    $i=0;
                                    foreach($query as $row){
                                        $i++;
                                        $id=$row->id_event;
                                        echo "<tr align ='center'>";
                                        echo "<td>".$i."</td>";
                                        echo "<td>".$row->username."</td>";
                                        echo "<td>".$row->email."</td>";
                                        echo "<td>".$row->judul."</td>";
                                        echo "<td>".$row->deskripsi."</td>";
                                        echo "<td>".$row->bataswaktu."</td>";
                                        //echo "<td>".$row->gambar."</td>";
                                        echo "<td class='btn btn_'>".anchor('event/delete/'.$id,'Hapus')."</td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    ?>

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
