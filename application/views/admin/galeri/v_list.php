
<div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('galeri/add'); ?>" class="btn btn-primary btn-sm" >Tambah</a>
        </div>
        <div class="panel-body">

            <?php if ($this->session->flashdata('pesan')) {
                echo  '<div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Galeri</th>
                        <th>Sampul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                    foreach ($galeri as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_galeri?></td>
                            <td class="text-center"><img src="<?= base_url('galeri_foto/'). $value->sampul;?>" width="90px" alt="">
                                <br><i class="fa fa-image" > <?= $value->jml_foto; ?> Foto </i> <br>
                                <a href="<?= base_url('galeri/add_foto/') . $value->id_galeri; ?>" class="btn btn-success btn-xs" >Tambah Foto</a>
                            </td>
                            <td><a href="<?= base_url('galeri/edit/' . $value->id_galeri); ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('galeri/delete/' . $value->id_galeri); ?>" onclick="return confirm('apakah data ini akan dihapus?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
