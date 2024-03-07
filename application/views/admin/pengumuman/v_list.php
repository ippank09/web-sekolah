<div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('pengumuman/add'); ?>" class="btn btn-primary btn-sm" >Tambah</a>
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
                        <th>JudulPengumuman</th>
                        <th>Isi Pengumuman</th>
                        <th>Tanggal Pengumuman</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pengumuman as $key => $value) { ?>

                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->judul_pengumuman; ?></td>
                            <td><?= $value->isi_pengumuman; ?></td>
                            <td><?= $value->tgl_pengumuman; ?></td>
                            
                            <td><a href="<?= base_url('pengumuman/edit/' . $value->id_pengumuman); ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('pengumuman/delete/' . $value->id_pengumuman); ?>" onclick="return confirm('apakah data ini akan dihapus?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
