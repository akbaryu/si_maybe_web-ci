<?php $this->load->view('headeradmin');?>

    <section id="content">
        <div class="sub-content">
            <div class="container">

                <div class="row">
                    <br>
                    <?php
                    echo "<table class=\"table table - bordered\" style=\"width:700px;\" border=\"1\" align='center'>
		            <tr>
		            <th>No</th>
		            <th>ID Tips</th>
		            <th>Judul Tips</th>
		            <th>Deskripsi Tips</th>
		            <th>Jenis Tips</th>
		            <th>Tanggal</th>
		            <th>Operasi</th>
		            </tr>";

                    $i=0;
                    foreach ($query as $row)
                    {
                        $i++;
                        echo "<tr align='center'>";
                        echo "<td>".$i."</td>";
                        echo "<td>".$row->id_tips."</td>";
                        echo "<td>".$row->judul_tips."</td>";
                        echo "<td>".$row->deskripsi_tips."</td>";
                        echo "<td>".$row->jenis_tips."</td>";
                        echo "<td>".$row->tgl."</td>";
                        echo "<td>".anchor('Update/edit_tips/'.$row->id_tips,'Update')."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    ?>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view('footeradmin');?>