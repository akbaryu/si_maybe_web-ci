<?php $this->load->view('headeradmin');?>

    <section id="content">
        <div class="sub-content">
            <div class="container">
                <div class="row">
                    <br>
                    <?php
                    echo "<table class=\"table table - bordered\" style=\"width:px;\" border=\"1\" align='center'>
		            <tr>
		            <th>No</th>
		            <th>ID Gejala</th>
		            <th>Nama Gejala</th>
		            <th>Judul Artikel</th>
		            <th>Deskripsi Gejala</th>
		            <th>Operasi</th>
		            </tr>";

                    $i=0;
                    foreach ($query as $row)
                    {
                        $i++;
                        echo "<tr align='center'>";
                        echo "<td>".$i."</td>";
                        echo "<td>".$row->id_gejala."</td>";
                        echo "<td>".$row->nama_gejala."</td>";
                        echo "<td>".$row->judul_artikel."</td>";
                        echo "<td>".$row->deskripsi_gejala."</td>";
                        echo "<td>".anchor('Update/edit_gejala/'.$row->id_gejala,'Update')."</td>";
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