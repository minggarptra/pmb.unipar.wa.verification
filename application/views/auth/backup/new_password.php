<?php $this->load->view('auth/partial/header') ?>
<?php
  $setting = $this->db->get('settings')->row_array();
?>
<div class="forny-container bg-light">
	<div class="forny-inner">
		<div class="forny-form text-center">
			<div class="mb-8 text-center forny-logo">
				<img class="img-fluid w-50" src="<?= base_url();  ?>assets/upload/images/logo/<?= $setting['logo']; ?>">
			</div>
			<div class="reset-form d-block">
				<form id="formnewpassword" class="reset-password-form">
					<h4 class="mb-5">Reset password</h4>
					<p class="mb-10">
						Masukkan Password baru anda.
					</p>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" viewBox="0 0 16 24">
										<g transform="translate(0)">
											<g transform="translate(5.457 12.224)">
												<path
													d="M207.734,276.673a2.543,2.543,0,0,0-1.749,4.389v2.3a1.749,1.749,0,1,0,3.5,0v-2.3a2.543,2.543,0,0,0-1.749-4.389Zm.9,3.5a1.212,1.212,0,0,0-.382.877v2.31a.518.518,0,1,1-1.035,0v-2.31a1.212,1.212,0,0,0-.382-.877,1.3,1.3,0,0,1-.412-.955,1.311,1.311,0,1,1,2.622,0A1.3,1.3,0,0,1,208.633,280.17Z"
													transform="translate(-205.191 -276.673)"></path>
											</g>
											<path
												d="M84.521,9.838H82.933V5.253a4.841,4.841,0,1,0-9.646,0V9.838H71.7a1.666,1.666,0,0,0-1.589,1.73v10.7A1.666,1.666,0,0,0,71.7,24H84.521a1.666,1.666,0,0,0,1.589-1.73v-10.7A1.666,1.666,0,0,0,84.521,9.838ZM74.346,5.253a3.778,3.778,0,1,1,7.528,0V9.838H74.346ZM85.051,22.27h0a.555.555,0,0,1-.53.577H71.7a.555.555,0,0,1-.53-.577v-10.7a.555.555,0,0,1,.53-.577H84.521a.555.555,0,0,1,.53.577Z"
												transform="translate(-70.11)"></path>
										</g>
									</svg>
								</span>
							</div>
							<input required="" class="form-control" name="password" type="password" id="password"
								placeholder="Password Baru">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" viewBox="0 0 16 24">
										<g transform="translate(0)">
											<g transform="translate(5.457 12.224)">
												<path
													d="M207.734,276.673a2.543,2.543,0,0,0-1.749,4.389v2.3a1.749,1.749,0,1,0,3.5,0v-2.3a2.543,2.543,0,0,0-1.749-4.389Zm.9,3.5a1.212,1.212,0,0,0-.382.877v2.31a.518.518,0,1,1-1.035,0v-2.31a1.212,1.212,0,0,0-.382-.877,1.3,1.3,0,0,1-.412-.955,1.311,1.311,0,1,1,2.622,0A1.3,1.3,0,0,1,208.633,280.17Z"
													transform="translate(-205.191 -276.673)"></path>
											</g>
											<path
												d="M84.521,9.838H82.933V5.253a4.841,4.841,0,1,0-9.646,0V9.838H71.7a1.666,1.666,0,0,0-1.589,1.73v10.7A1.666,1.666,0,0,0,71.7,24H84.521a1.666,1.666,0,0,0,1.589-1.73v-10.7A1.666,1.666,0,0,0,84.521,9.838ZM74.346,5.253a3.778,3.778,0,1,1,7.528,0V9.838H74.346ZM85.051,22.27h0a.555.555,0,0,1-.53.577H71.7a.555.555,0,0,1-.53-.577v-10.7a.555.555,0,0,1,.53-.577H84.521a.555.555,0,0,1,.53.577Z"
												transform="translate(-70.11)"></path>
										</g>
									</svg>
								</span>
							</div>
							<input required="" class="form-control" id="confirmpassword" name="confirmpassword"
								type="password" placeholder="Confirm Password">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button onclick="btnloading()" type="submit" class="btn btn-primary btn-block"><span
									id="loadbtn" class=" spinner-grow spinner-grow-sm d-none" role="status"
									aria-hidden="true"></span> Reset Password</button>
						</div>
					</div>
				</form>
			</div>

			<div class="text-center mt-10">
				Login ? <a href="<?= base_url('login') ?>">Login disini</a>
			</div>

		</div>
	</div>
</div>

<?php $this->load->view('auth/partial/footer') ?>
