@extends('layout.Admin')
@section('main')

<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
	<div class="form-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="text-center text-bold mt-4x" style="color:#fff">Admin | Sign in</h1>
					<div class="well row pt-2x pb-3x bk-light">
						<div class="col-md-8 col-md-offset-2">
							<form method="post" action="index.php?action=dangnhap&act=dangnhap_action"
								class="login-form">

								<label for="" class="text-uppercase text-sm">Username</label>
								<input type="text" placeholder="Username" name="txtusername" class="form-control mb-4">

								<label for="" class="text-uppercase text-sm">Password</label>
								<input type="password" placeholder="Password" name="txtpassword"
									class="form-control mb-4">


								<button class="btn btn-primary btn-block" name="login" type="submit">SIGN UP</button>

							</form>

						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
</body>

@stop