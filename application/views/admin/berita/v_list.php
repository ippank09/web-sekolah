
<div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('berita/add'); ?>" class="btn btn-primary btn-sm" >Tambah</a>
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
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Gambar Berita</th>
                        <th>Tanggal Berita</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($berita as $key => $value) { ?>

                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->judul_berita; ?></td>
                            <td><?= $value->isi_berita; ?></td>
                            <td><?= $value->gambar_berita; ?></td>
                            <td><?= $value->tgl_berita;?></td>

                            <td><img src="<?= base_url('gambar_berita/'.$value->gambar_berita); ?>" width="90px" alt=""></td>
                            <td><a href="<?= base_url('berita/edit/' . $value->id_berita); ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('berita/delete/' . $value->id_berita); ?>" onclick="return confirm('apakah data ini akan dihapus?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>


    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>