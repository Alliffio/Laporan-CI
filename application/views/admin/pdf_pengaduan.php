<div class="d-sm justify-content-between mb-4">
            <center><h1 class="h4 mb-0 text-gray-800">DATA LAPORAN</h1></center>
          </div>

<table id="example" class="table table-striped table-bordered" style="width: 100%">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Judul</td>
                    <td>Tanggal laporan</td>
                    <td>NIK</td>
                    <td>Isi</td>
                    <td>Foto</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
            <?php 
                    if ($pengaduan>0)
                    {
                     foreach ($pengaduan as $datas)
                     {
                ?>
                <tr>
                    <td><?php echo $datas->id;?></td>
                    <td><?php echo $datas->judul_laporan;?></td>
                    <td><?php echo $datas->tgl_pengaduan;?></td>
                    <td><?php echo $datas->nik;?></td>
                    <td><?php echo $datas->isi_laporan;?></td>
                    <td><?php echo $datas->foto;?></td>
                    <td>
                        <div>
                            <button type="submit" class="btn btn-success mb-2">
                                <i class="fas fa-save"></i>
                            </button>
                        </div>
                        <div>
                        <button type="submit" class="btn btn-primary mb-2">
                                <i class="fas fa-pen"></i>
                        </button>
                        </div>
                    </td>
                </tr>
                     <?php }
                    }
                    else {
                        ?>
                        <tr>
                            <td colspan="8">Data User Kosong</td>
                        </tr>
                    }
                    <?php
                    }
                    ?>
            </tbody>
          </table>
