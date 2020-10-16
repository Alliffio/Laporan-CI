<div class="container">
<table id="example" class="table table-striped table-bordered" style="width: 100%">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Judul Laporan</td>
                    <td>Tanggal Laporan</td>
                    <td>NIK</td>
                    <td>Isi</td>
                    <td>File</td>
                    <td colspan="2" class="text-center"><span class="glyphicon glyphicon-cog"></span></td>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
            foreach($pengaduan as $datas){
            ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $datas->judul_laporan;?></td>
                    <td><?php echo $datas->tgl_pengaduan;?></td>
                    <td><?php echo $datas->nik;?></td>
                    <td><?php echo $datas->isi_laporan;?></td>
                    <td><?php echo $datas->foto;?></td>
                    <td class="d-sm justify-content-between mb-4">
                      
                      <a href="javascript:void();" data-id="<?php echo $datas->id; ?>" data-toggle="modal" data-target="#form-modal" class="btn btn-primary btn-form-ubah"><i class="fas-fa-pencil"></i></a>
                      
                      <!-- Membuat sebuah textbox hidden yang akan digunakan untuk form ubah -->
                      <input type="hidden" class="judul-value" value="<?php echo $datas->judul_laporan; ?>">
                      <input type="hidden" class="tanggal-value" value="<?php echo $datas->tgl_pengaduan; ?>">
                      <input type="hidden" class="nik-value" value="<?php echo $datas->nik; ?>">
                      <input type="hidden" class="isi-value" value="<?php echo $datas->isi_laporan; ?>">
                      <input type="hidden" class="foto-value" value="<?php echo $datas->foto; ?>">
                    </td>

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