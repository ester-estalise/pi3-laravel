<!doctype html>
<html lang="en">
  <head>
  	<title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="/css-login2/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Registre-se </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">

					<div class="wrap">
						<div class="img" style="background-image: url(/img/logo.png);"></div>
						<div class="login-wrap p-4 p-md-5">

							<form   method="POST" class="user"  action="{{route('register')}}">
                                @csrf
                                <div class="form-group mt-3 ">
                          <div>
			      			<input  id="name" type="text"  type="name" name="name"  required autofocus autocomplete="name" class="form-control" >
			      			<label class="form-control-placeholder" for="name">Nome</label>
			      		</div>
			      		<div class="form-group mt-3">
                          <div>
			      			<input  id="email" type="text"  type="email" name="email" required autocomplete="username" class="form-control" >
			      			<label class="form-control-placeholder" for="email"  style="color:#703f2a">Email</label>
			      		</div>

		            <div class="form-group mt-3">
		              <input id="password-field" type="password"
                            name="password"
                            required autocomplete="new-password" class="form-control" required autocomplete="new-password" >
		              <label class="form-control-placeholder" for="password"  style="color:#703f2a">Senha</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>

                    <div class="form-group mt-3 ">
                          <div>
			      			<input id="cpf" type="text" name="cpf"  required autofocus autocomplete="cpf"  class="form-control" >
			      			<label class="form-control-placeholder" for="cpf"  style="color:#703f2a">CPF</label>
			      		</div>
                          <div class="form-group">
                          <div class="form-group">
		            	<button type="submit" class="form-control  rounded submit px-3" style="background-color:#703f2a; color:#ffffff">Entrar</button>
		            </div>
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
