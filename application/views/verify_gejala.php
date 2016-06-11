<?php $this->load->view('headeradmin');?>
<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h4 class="bot-0">KONFIRMASI GEJALA</h4>
                </div>
            </div>
            <div class="row">
                <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#ffffff" width="97%" id="AutoNumber1" bgcolor="#ffffff">
                    <tr>
                        <td width="97%">
                            <center>
                                <div id="form_input">
                                    <?php
                                    echo "<table border=\"1\" align='center'>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Judul Event</th>
                                        <th>Deskripsi Event</th>
                                        <th>Gambar</th>
                                        <th>Operasi</th>
                                        </tr>";

                                    $i=0;
                                    foreach($query as $row){
                                        $i++;
                                        $id=$row->id_event;
                                        echo "<tr align ='center'>";
                                        echo "<td>".$i."</td>";
                                        echo "<td>".$row->nama."</td>";
                                        echo "<td>".$row->email."</td>";
                                        echo "<td>".$row->judul_event."</td>";
                                        echo "<td>".$row->deskripsi_event."</td>";
                                        echo "<td>".$row->gambar."</td>";
                                        echo "<td>".anchor('Konfirmasi_event/ignore/'.$id,'Ignore')."</td>";
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
