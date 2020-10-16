<table id="example" class="table table-striped table-bordered" style="width: 100%">
            <thead>
                <tr>
                    <td>No</td>
                    <td>NIK</td>
                    <td>Nama</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Telepon</td>
                    <td>Alamat</td>
                    <td>Level</td>
                    <td colspan="2" class="text-center">Action<span class="glyphicon glyphicon-cog"></span></td>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
            foreach($admin as $datas){
            ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $datas->nik;?></td>
                    <td><?php echo $datas->nama;?></td>
                    <td><?php echo $datas->username;?></td>
                    <td><?php echo $datas->password;?></td>
                    <td><?php echo $datas->telepon;?></td>
                    <td><?php echo $datas->alamat;?></td>
                    <td><?php echo $datas->role;?></td>
                    <td class="d-sm justify-content-between mb-4">
                      
                      <a href="javascript:void();" data-id="<?php echo $datas->id; ?>" data-toggle="modal" data-target="#form-modal" class="btn btn-primary btn-form-ubah"><i class="fas-fa-pencil"></i>Edit</a>
                      
                      <!-- Membuat sebuah textbox hidden yang akan digunakan untuk form ubah -->
                      <input type="hidden" class="nik-value" value="<?php echo $datas->nik; ?>">
                      <input type="hidden" class="nama-value" value="<?php echo $datas->nama; ?>">
                      <input type="hidden" class="username-value" value="<?php echo $datas->username; ?>">
                      <input type="hidden" class="password-value" value="<?php echo $datas->password; ?>">
                      <input type="hidden" class="telepon-value" value="<?php echo $datas->telepon; ?>">
                      <input type="hidden" class="alamat-value" value="<?php echo $datas->alamat; ?>">
                      <input type="hidden" class="role-value" value="<?php echo $datas->role; ?>">
                    </td>

                    <td class="align-middle text-center">
                      <a href="javascript:void();" data-id="<?php echo $datas->id; ?>" data-toggle="modal" data-target="#delete-modal" class="btn btn-danger btn-alert-hapus"><i class="fas-fa-trash"></i>Delete</a>
                    </td>
                </tr>
                <?php
                  $no++; // Tambah 1 setiap kali looping
                }
                ?>
            </tbody>
          </table>