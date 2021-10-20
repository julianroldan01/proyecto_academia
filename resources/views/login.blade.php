<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<div id="Login">
	<img id="Enmascarar_grupo_1" src="public/Enmascarar_grupo_1.png" srcset="Enmascarar_grupo_1.png 1x">

	</svg>
	<img id="n_Mesa_de_trabajo_115x" src="public/n_Mesa_de_trabajo_115x.png" srcset="n_Mesa_de_trabajo_115x.png 1x">

	<div id="FASHION">
		<span>FASHION</span>
	</div>
	<div id="CEB">
		<span>CEB</span>
	</div>
	<div id="Login_p">
		<div id="El_Arte_en_tus_Manos">
			<span>El</span><span style="font-family:Roboto;font-style:normal;font-weight:bold;font-size:70px;">
			</span>
			<span style="font-family:Segoe UI;font-style:normal;font-weight:normal;font-size:70px;">Arte</span>
			<span style="font-family:Roboto;font-style:normal;font-weight:bold;font-size:70px;">
			</span>
			<span>en tus </span>
			<span style="font-family:Segoe UI;font-style:normal;font-weight:normal;font-size:70px;">Manos</span>
		</div>

		<!-- <div id="Usuario">
			<input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="Usuario">
		</div>
		<div id="Contrasea">
			<input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="Contraseña">
		</div> -->
		<form>
			<div id="Usuario">
				<label for="exampleInputEmail1" class="form-label">Usuario</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>

			<div id="contrasea">
				<label for="exampleInputPassword1" class="form-label">Contraseña</label>
				<input type="password" class="form-control" id="exampleInputPassword1">
				<a type="submit" class="btn" href="{{route('home.index')}}">Aceptar</a>
			</div>

		</form>

	</div>
</div>