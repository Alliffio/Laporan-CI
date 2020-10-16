<div class="d-sm justify-content-between mb-4">
            <center><h1 class="h4 mb-0 text-gray-800">DATA Petugas</h1></center>
          </div>

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
                    <td colspan="2" class="text-center"><span class="glyphicon glyphicon-cog"></span></td>
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
                      
                      <a href="javascript:void();" data-id="<?php echo $datas->id; ?>" data-toggle="modal" data-target="#form-modal" class="btn btn-primary btn-form-ubah"><i class="fas-fa-pencil"></i></a>
                      
                    <td class="align-middle text-center">
                      <a href="javascript:void();" data-id="<?php echo $datas->id; ?>" data-toggle="modal" data-target="#delete-modal" class="btn btn-danger btn-alert-hapus"><i class="fas-fa-trash"></i></a>
                    </td>
                </tr>
                <?php
                  $no++; // Tambah 1 setiap kali looping
                }
                ?>
            </tbody>
          </table>

    </div>