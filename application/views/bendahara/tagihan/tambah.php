<?php
//Error Upload
if(isset($error)){
    echo'<p class="alert alert-warning">';
    echo $error;
    echo '</p>';
}

// Notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');
?>


<div class="section-header">
    <h1><?php echo $title ?></h1>
        <div class="section-header-breadcrumb">
        </div>
</div>

<div class="section-body">
    <div class="card">
        <?php
            // Form Open
            echo form_open(base_url('bendahara/tagihan/tambah'), 'class="form-horizontal"');
        ?>
        <div class="card-header">
            <a href="<?php echo base_url('bendahara/tagihan') ?>" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>ID Mahasiswa</label>
                <input type="number" name="id_mahasiswa" class="form-control">
            </div>
            <div class="form-group">
                <label>SPP</label>
                <input type="number" name="spp" class="form-control">
            </div>
            <div class="form-group">
                <label>Kontribusi</label>
                <input type="number" name="kontribusi" class="form-control">
            </div>
            <div class="form-group">
                <label>Buku</label>
                <input type="number" name="buku" class="form-control">
            </div>
            <div class="form-group">
                <label>semester</label>
                <input type="number" name="semester" class="form-control">
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control">
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary">Submit</button>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
