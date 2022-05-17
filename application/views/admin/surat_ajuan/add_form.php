<main>
<div class="container-fluid">
<h1 class="mt-4"></h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item"><a href="<?php echo site_url('surat_ajuan') ?>">Surat</a></li>
<li class="breadcrumb-item active"><?php echo $title ?></li>
</ol>
<div class="card mb-4">
<div class="card-body">
<form action="<?php echo site_url('surat_ajuan/save') ?>" method="post" enctype="multipart/form-data" >
<div class="mb-3">
<label >NO SURAT <code>*</code></label>
<input class="form-control" type="text" name="no_surat" placeholder="NO SURAT MASUK PENGAJUAN" required />
</div>
<div class="mb-3">
<label >PERIHAL SURAT <code>*</code></label>
<input class="form-control" type="text" name="perihal" placeholder="PERIHAL SURAT" required />
</div>
<div class="row">
<div class="col">
<div class="mb-3">
<label >TANGGAL SURAT <code>*</code></label>
<input class="form-control" type="date" name="tgl_surat"placeholder="TANGGAL SURAT" required />

</div>
</div>
<div class="col"></div>
</div>
<div class="mb-3">
<label >SURAT DARI <code>*</code></label>
<input class="form-control" type="text" name="surat_from"placeholder="SURAT DARI" required />
</div>
<div class="mb-3">
<label >TUJUAN SURAT <code>*</code></label>
<input class="form-control" type="text" name="surat_to" placeholder="TUJUAN SURAT" required />
</div>
<div class="mb-3">
<label for="username">KETERANGAN <code>*</code></label>
<textarea class="form-control" placeholder="KETERANGAN" name="keterangan" id="floatingTextarea2" style="height: 100px"></textarea>
</div>
<div class="mb-3">
<label for="image">BERKAS SURAT (Photo)</label>
<input type="file" class="form-control" id="inputGroupFile01" name="image">
</div>
<button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save Data</button>
</form>
</div>
</div>
<div style="height: 100vh"></div>
</div>
</main>