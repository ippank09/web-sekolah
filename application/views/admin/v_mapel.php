<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah</button>
        </div>
        <div class="panel-body">
        <?php  if ($this->session->flashdata('pesan')) {
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
                        <th>Mata Pelajaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($mapel as $key => $value) { ?>

                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_mapel; ?></td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $value->id_mapel; ?>">Edit</button>
                                <a href="<?= base_url('mapel/delete/' .$value->id_mapel); ?>" onclick="return confirm('apakah data ini akan dihapus?')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="panel-footer">
            Panel Footer
        </div>
    </div>
</div>

<!-- modal tambah -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal tambah Mapel</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('mapel/add'); ?>
                <div class="form-group">
                    <label for="">Mata Pelajaran</label>
                    <input type="text" class="form-control" name="nama_mapel" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- end modal tambah -->


<!-- modal tambah -->

 <!-- modal edit -->
 <?php foreach ($mapel as $key => $value) {?>
<div class="modal fade" id="edit<?= $value->id_mapel; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit Mapel</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('mapel/edit/' .$value->id_mapel); ?>
                <div class="form-group">
                    <label for="">Mata Pelajaran</label>
                    <input type="text" class="form-control" value="<?= $value->nama_mapel; ?>" name="nama_mapel" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>
<!-- /.modal -->

