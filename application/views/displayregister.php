<?php $this->load->view('headerhome');?>


<section id="content">
<div class="sub-content">
  <div class="container">
    <div class="row">
      <div class="span12">
      <h4 class="bot-0">Register Event</h4>
      </div>
      </div>
      
      <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#ffffff" width="97%" id="AutoNumber1" bgcolor="#ffffff">
      <tr>
      <td width="97%">
    
      <?php echo form_open_multipart('register_event/do_upload');?><table>

      <?php echo form_open('register_event/insert_registerevent');?>
      <tr>
          <td>Nama:</td>
          <td><input type="text" name="username" placeholder="nama" class="username" id="username" required></td>
      </tr>
      <tr>
          <td>Email:</td>
          <td><input type="text" name="email" placeholder="email" class="email" id="email" required></td>
      </tr>
      <tr>
          <td>Judul Event:</td>
          <td><input type="text" name="judul" placeholder="judul event" class="judul" id="judul" required></td>
      </tr>
      <tr>
          <td>Deskripsi Event:</td>
          <td><textarea type="text" name="deskripsi" placeholder="write a description..." class="deskripsi" id="deskripsi" required="" 
          style="margin: 0px 0px 9px; height: 302px; width: 615px;"></textarea></td>
      </tr>
      <tr>
          <td>Contact Person:</td>
          <td><input type="text" name="telp" placeholder="" class="telp" id="telp" required></td>
      </tr>
      <tr>
          <td>Batas Waktu Postingan:</td>
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
            <td>Gambar (maks 3 Mb):</td>
            <td><input type="file" name="userfile" class='btn btn_'/></td>
      </tr>
      </table>
      <center>
            <input type="submit" name="simpan" value="Submit" class="btn btn_"></td>
      </center>
      </form></input>
            </table>
      </div>
      </tr>
      </table>
      </td>
      </tr>
    </div>
  </div>
</div>
</section>

<?php $this->load->view('footerhome');?>
