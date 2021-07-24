<!DOCTYPE html>
<html lang="en">

<head>
		<!-- <script src="<?php base_url('assets/ckeditor/ckeditor.js'); ?>"> </script> -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/vendor/halamanadmin/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="<?php echo base_url('assets/vendor/halamanadmin/');?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/vendor/halamanadmin/');?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url('assets/vendor/halamanadmin/');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<script type="text/javascript" src="<?php base_url('assets/ckeditor/ckeditor.js')?>"></script>
</head>

<body id="page-top">
	<!-- <script src="<?php base_url('assets/ckeditor/ckeditor.js'); ?>"> </script> -->
	<div id="wrapper">


		<div id="content-wrapper">

			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Judul Materi*</label>
								<input class="form-control <?php echo form_error('judul_materi') ? 'is-invalid':'' ?>"
								 type="text" name="judul_materi" placeholder="Product name" autocomplete="off" />
								<div class="invalid-feedback">
									<?php echo form_error('judul_materi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Isi Materi*</label></br>
									<textarea class="ckeditor  <?php echo form_error('isi_materi') ? 'is-invalid':'' ?>"
								 name="isi_materi"  cols="80" placeholder="Isi Materi..."id="ckedtor"> </textarea>
								 <!-- <textarea name="isi_materi" id="ckedtor" cols="39" rows="21" ><?php echo $content; ?>
									</textarea> -->
								<div class="invalid-feedback">
									<?php echo form_error('isi_materi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Link Youtube*</label>
								<input class="form-control <?php echo form_error('link_youtube') ? 'is-invalid':'' ?>"
								 type="text" name="link_youtube" min="0" placeholder="Link Embed Youtube" />
								<div class="invalid-feedback">
									<?php echo form_error('link_youtube') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
								 type="file" name="gambar" />
								<div class="invalid-feedback">
									<?php echo form_error('link_youtube') ?>
								</div>
							</div>

							<button class="btn btn-success" type="submit" value="Save"> </button>
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				
			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

 <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/halamanadmin/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/vendor/halamanadmin/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/halamanadmin/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/vendor/halamanadmin/');?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/vendor/halamanadmin/');?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/vendor/halamanadmin/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/vendor/halamanadmin/');?>js/demo/datatables-demo.js"></script>

	<script type="text/javascript">
		CKEDITOR.replace('ckedtor');
	</script>
</body>

</html>