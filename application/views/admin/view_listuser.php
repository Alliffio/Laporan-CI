<!-- buat munculin tabel data user -->
          <table id="example" class="table table-striped table-bordered" style="width: 100%">
            <thead>
                <tr>
                    <td>No</td>
                    <td>NIK</td>
                    <td>Nama</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Telepon</td>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
                     foreach ($masyarakat as $datas)
                     {
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $datas->nik;?></td>
                    <td><?php echo $datas->nama;?></td>
                    <td><?php echo $datas->username;?></td>
                    <td><?php echo $datas->password;?></td>
                    <td><?php echo $datas->telp;?></td>
                </tr>
                <?php } ?>
            </tbody>
          </table>
