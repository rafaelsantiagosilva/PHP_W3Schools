<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Formulários em PHP</title>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
			crossorigin="anonymous"
		/>
	</head>
	<body class="container">
		<h1 class="text-center m-2 text-primary">Formulários em PHP</h1>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="get" class="row g-3 p-4">
			<div class="col-md-6">
				<label for="inpName" class="form-label">Nome</label>
				<input type="text" class="form-control form-control-sm" name="name" id="inpName" required />
			</div>
			
			<div class="col-md-6">
				<label for="inpEmail" class="form-label">Email</label>
				<input
					type="email"
					class="form-control form-control-sm"
					name="email"
					id="inpEmail"
					required
				/>
			</div>

			<div class="grid">
				<label>Sexo: </label>
					<div class="row">
						<div class="radio-control col">
							<label for="inpMale">Masculino: </label>
							<input type="radio" name="gender" id="inpMale" value="M" checked>
						</div>
						<div class="radio-control col">
							<label for="inpFemale">Feminino: </label>
							<input type="radio" name="gender" id="inpFemale" value="F">
						</div>
						<div class="radio-control col">
							<label for="inpOtherGender">Outro: </label>
							<input type="radio" name="gender" id="inpOtherGender" value="O">
						</div>
					</div>
			</div>

			<div>
				<label for="inpWebsite">Site: </label>
				<input type="url" class="form-control form-control-sm" name="website" id="inpWebsite" required>
			</div>

			<div>
				<label for="inpComment">Comentários: </label>
				<textarea class="form-control p-6" name="comment" id="inpComment" cols="30" rows="10"></textarea>
			</div>

			<div class="mt-2">
				<input type="submit" value="Enviar" class="btn btn-primary" />
				<input type="reset" value="Limpar" class="btn btn-secondary" />
			</div>

			<?php
			$name = $email = $gender = $comment = $website = "";

			function test_input($data)
			{
				$data = trim($data); // Retirando espaços e outros caracteres desnecessários
				$data = stripslashes($data); // Retirando barras
				$data = htmlspecialchars($data);
				return $data;
			}

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$name = test_input($_POST["name"]);
				$email = test_input($_POST["email"]);
				$website = test_input($_POST["website"]);
				$comment = test_input($_POST["comment"]);
				$gender = test_input($_POST["gender"]);
			}

			?>

		</form>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
			crossorigin="anonymous"
		></script>
	</body>
</html>
