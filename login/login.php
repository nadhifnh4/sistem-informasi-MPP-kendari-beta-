<?php
	include "header.php";
?>
<body>
<section class="section green">
		<div class="container aligncenter">
			<h4>Login</h4>
			<p>
				Silahkan masukkan username dan password untuk masuk sebagai admin.
			</p>
			<div class="blankdivider30">
			</div>
			<div class="row">
				<div class="span12">
					<div class="" id="contact-form">
						<form action="plogin.php" method="post" role="form" class="contactForm">
									<div class="field your-name form-group">
										<input type="text" name="username" class="form-control" id="name" placeholder="Masukkan Username" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>
									<div class="field your-email form-group">
										<input type="text" class="form-control" name="password" id="email" placeholder="Masukkan Password" data-rule="email" data-msg="Please enter a valid email" />
										<div class="validation"></div>
									</div>
								<button type="submit" value="Login" class="btn btn-theme">Login</button>
						</form>
					</div>
				</div>
				<!-- ./span12 -->
			</div>
		</div>
	</section>
	</body>