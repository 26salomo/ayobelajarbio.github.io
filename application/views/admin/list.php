<!DOCTYPE html>
<html lang="en">

<head>
	<?php 	  ("admin/_partials/head.php") ?>
</head>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?php echo base_url();?>"><h2>Ayo<em>Belajar<em>Bioo</em></em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        	<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?= site_url('login/logout') ?>">Logout
						<span class="sr-only">(current)</span>
						</a>
					</li> 
				</ul>
         	 </div>
        </div>
    </nav>
</header>

<body id="page-top">

	<?php   ("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		

		<div id="content-wrapper">

			<div class="container-fluid">

				

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/create') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Judul</th>
										<th>Isi Materi</th>
										<th>foto</th>
										<th>link_youtube</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($products as $product): ?>
										{
											<tr>
												<td width="150">
													<?php echo $product->judul_materi ?>
												</td>
												<td>
													<?php echo substr($product->isi_materi, 0, 100); ?>...
												</td>
												
												<td>
													<img src="<?php echo base_url('upload/product/'.$product->gambar) ?>" width="64" />
												</td>
												<td class="small">
													<?php echo substr($product->link_youtube, 0, 120) ?>...</td>
												<td width="250">
													<a href="<?php echo site_url('admin/update/'.$product->id) ?>"
													class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
													<a href="<?php echo site_url('admin/delete/'.$product->id) ?>"
													class="btn btn-small"><i class="fas fa-edit"></i> Delete</a>
												</td>
											</tr>
										}	
									<?php endforeach () ?>
										
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->

</body>

</html>