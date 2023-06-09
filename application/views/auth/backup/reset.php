<?php $this->load->view('auth/partial/header') ?>
<?php
  $setting = $this->db->get('settings')->row_array();
?>
<div class="forny-container bg-light">
	<div class="forny-inner">
		<div class="forny-form text-center">
			<div class="mb-8 text-center forny-logo">
				<a href="<?= base_url('') ?>"><img class="img-fluid w-50"
						src="<?= base_url();  ?>assets/upload/images/logo/<?= $setting['logo']; ?>"></a>
			</div>
			<div class="reset-form d-block">
				<form id="formreset" class="reset-password-form">
					<h4 class="mb-5">Reset password</h4>
					<p class="mb-10">
						Silahkan ketik email anda, kami akan mengirim link reset password.
					</p>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16">
										<g transform="translate(0)">
											<path
												d="M23.983,101.792a1.3,1.3,0,0,0-1.229-1.347h0l-21.525.032a1.169,1.169,0,0,0-.869.4,1.41,1.41,0,0,0-.359.954L.017,115.1a1.408,1.408,0,0,0,.361.953,1.169,1.169,0,0,0,.868.394h0l21.525-.032A1.3,1.3,0,0,0,24,115.062Zm-2.58,0L12,108.967,2.58,101.824Zm-5.427,8.525,5.577,4.745-19.124.029,5.611-4.774a.719.719,0,0,0,.109-.946.579.579,0,0,0-.862-.12L1.245,114.4,1.23,102.44l10.422,7.9a.57.57,0,0,0,.7,0l10.4-7.934.016,11.986-6.04-5.139a.579.579,0,0,0-.862.12A.719.719,0,0,0,15.977,110.321Z"
												transform="translate(0 -100.445)"></path>
										</g>
									</svg>
								</span>
							</div>
							<input required="" class="form-control" name="email" type="email"
								placeholder="Email Address">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button onclick="btnloading()" type="submit" class="btn btn-primary btn-block"><span
									id="loadbtn" class=" spinner-grow spinner-grow-sm d-none" role="status"
									aria-hidden="true"></span> Kirim Reset Link</button>
						</div>
					</div>
				</form>
			</div>

			<div class="text-center mt-10">
				Login ? <a data-pjax href="<?= base_url('login') ?>">Login disini</a>
			</div>

		</div>
	</div>
</div>

<?php $this->load->view('auth/partial/footer') ?>
