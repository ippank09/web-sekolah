<?php
  echo form_open_multipart('admin/setting');  

  if ($this->session->flashdata('pesan')) {
    echo  '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    echo $this->session->flashdata('pesan');
    echo '</div>';
}
?>

<div class="col-sm-4">
    <label for="">Kepala Sekolah</label><br>
    <img src="<?= base_url('foto_kepsek/' . $setting->foto_kepsek) ?>" width="150" height="200">

    <div class="form-group">
        <label for="">Foto</label>
        <input type="file" name="foto_kepsek" value="" class="form-control">
    </div>
</div>
<div class="col-sm-8">
    <div class="form-group">
        <label for="">Nama Sekolah</label>
        <input type="text" name="nama_sekolah" value="<?= $setting->nama_sekolah ?>"  placeholder="Nama Sekolah" class="form-control">
    </div>


    <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" name="alamat" value="<?= $setting->alamat ?>" placeholder="Nama Sekolah" class="form-control">
    </div>

    <div class="form-group">
        <label for="">No Telpon</label>
        <input type="text" name="no_telp" value="<?= $setting->no_telp ?>" placeholder="Nama Sekolah" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Kepala Sekolah</label>
        <input type="text" name="kepala_sekolah" value="<?= $setting->kepala_sekolah ?>"  placeholder="Nama Sekolah" class="form-control">
    </div>


</div>

<div class="col-sm-12">
    <div class="form-group">
        <label for="">Visi</label>
        <textarea name="editor1"  id="editor" rows="5" class="form-control"><?= $setting->visi ?></textarea>
    </div>

    <div class="form-group">
        <label for="">Misi</label>
        <textarea name="misi" class="form-control"  rows="5"><?= $setting->misi ?></textarea>
    </div>

    <div class="form-group">
        <label for="">Tujuan Madrasah</label>
        <textarea name="sejarah"   class="form-control" rows="5"><?= $setting->sejarah ?></textarea>
    </div>


    <button type="submit" class="btn btn-success">UPDATE</button>
</div>

<?php echo form_close(); ?>

