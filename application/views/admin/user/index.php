<main>
	<div class ="container-fluid">
		<h1 class  ="mt-4"></h1>
		<ol class  ="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="<?php echo site_url('admin/user') ?>">user</a></li>
			<li class="breadcrumb-item active"><?php echo $title ?></li>
		</ol>
<div class="card mb-4">
	<div class="card-header">
		<a href="<?php echo site_url('admin/user/add') ?>"><i class="fas fa-plus"></i> Add New</a>
	</div>

<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success" role="alert">
<?php echo $this->session->flashdata('success'); ?>
	</div>
<?php endif; ?>
<div class="card-body">
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover"id="tabelkelas" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>No.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Role</th>
				<th>Action</th>
			</tr>
		</thead>
<tbody>
<?php
	$no =1;
	foreach ($user as $user) {
	echo "<tr>
	<td>$no</td>
	<td>$user->username</td>
	<td>$user->email</td>
	<td>$user->phone</td>
	<td>$user->role</td>
	<td>
<div>
	<a href=".base_url('admin/user/getedit/' . $user->id)."class='btn btn-sm btn-info'><i class='fas fa-edit'></i> Edit</a>
	<a href=".base_url('admin/user/delete/' . $user->id)." class='btn btn-sm btn-danger'onclick='return confirm(\"Ingin mengapus datauser ini ?\);'><iclass='fas fa-trash'></i> Hapus</a>
</div>
	</td>
	</tr>";
$no++;
} ?>
</tbody>
		</table>
	</div>
</div>
</div>
	<div style="height: 100vh"></div>
		</div>
</main>