
<!doctype html>
<html lang="en">
  <head>
  	<title>Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="/css-login2/style.css">

    <link rel="icon"  href="img/logo.png"/>

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(/img/logo.png);"></div>
						<div class="login-wrap p-4 p-md-5">

							<form   method="POST" class="user"  action="{{route('login')}}">
                                @csrf
			      		<div   style="color:#703f2a" class="form-group mt-3">
			      			<input style="color:#703f2a"  id="email" type="text"  type="email" name="email" :value="old('email')" required autocomplete="username" class="form-control" required>
			      			<label class="form-control-placeholder" for="email" :value="__('Email:')" style="color:#703f2a">Email</label>

			      		</div>
		            <div class="form-group">
		              <input id="password-field"     type="password"
                            name="password"
                            required autocomplete="new-password" class="form-control" required autocomplete="new-password" >
		              <label class="form-control-placeholder" for="password" :value="__('Senha:')"  style="color:#703f2a">Senha</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control  rounded submit px-3" style="background-color:#703f2a; color:#ffffff">Entrar</button>
		            </div>
                    <a style="color:#703f2a" href="{{route('register')}}">Cadastre-se</a>
		            <div   class="form-group d-md-flex">

		            </div>
		          </form>

		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
