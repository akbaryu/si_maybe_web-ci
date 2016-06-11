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
		            <th>ID Event</th>
		            <th>Judul Event</th>
		            <th>Deskripsi Event</th>
		            <th>Batas Waktu</th>
		            <th>Operasi</th>
		            </tr>";

                    $i=0;
                    foreach ($query as $row)
                    {
                        $i++;
                        echo "<tr align='center'>";
                        echo "<td>".$i."</td>";
                        echo "<td>".$row->id_event."</td>";
                        echo "<td>".$row->judul."</td>";
                        echo "<td>".$row->deskripsi."</td>";
                        echo "<td>".$row->bataswaktu."</td>";
                        echo "<td>".anchor('Update/edit_event/'.$row->id_event,'Update')."</td>";
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
