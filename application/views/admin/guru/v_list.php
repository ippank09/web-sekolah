
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('guru/add'); ?>" class="btn btn-primary btn-sm" >Tambah</a>
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
                        <th>NIP</th>
                        <th>Nama Guru</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Pendidikan</th>
                        <th>Mata Pelajaran</th>
                        <th>Foto</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($guru as $key => $value) { ?>

                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nip; ?></td>
                            <td><?= $value->nama_guru; ?></td>
                            <td><?= $value->tempat_lahir; ?></td>
                            <td><?= $value->tgl_lahir; ?></td>
                            <td><?= $value->pendidikan; ?></td>
                            <td><?= $value->nama_mapel; ?></td>
                            <td><img src="<?= base_url('foto/'.$value->foto); ?>" width="90px" alt=""></td>
                            <td><a href="<?= base_url('guru/edit/' . $value->id_guru); ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('guru/delete/' . $value->id_guru); ?>" onclick="return confirm('apakah data ini akan dihapus?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
