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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	</head>
	<body class="container">
		<?php
		// Var
		$name_error = $email_error = $website_error = $gender_error = $comment_error = "";
		$name_success = $email_success = $website_success = $gender_success = $comment_success = "";
		$error_icon = "<i class='bi bi-exclamation-circle p-1'></i>";
		$success_icon = "<i class='bi bi-check-circle p-1'></i>";

		$name = $email = $gender = $comment = $website = "";

		function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
				$name_error = $error_icon . "Nome é obrigatório.";
				$name = "";
			} else {
				$name = test_input($_POST["name"]);
				$name_success = $success_icon . "Nome ok.";
			}

			if (empty($_POST["email"])) {
				$email_error = $error_icon . "Email é obrigatório.";
				$email = "";
			} else {
				$email = test_input($_POST["email"]);
				$email_success = $success_icon . "Email ok.";
			}

			if (empty($_POST["gender"])) {
				$gender_error = $error_icon . "Sexo é obrigatório.";
			} else {
				$gender = test_input($_POST["gender"]);
				$gender_success = $success_icon . "Sexo ok.";
			}

			if (empty($_POST["comment"])) {
				$comment = "";
			} else {
				$comment = test_input($_POST["comment"]);
			}

			if (empty($_POST["website"])) {
				$website = "";
			} else {
				$website = test_input($_POST["website"]);
			}
		}

		?>
		<h1 class="text-center m-2 text-primary">Formulários em PHP</h1>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" class="row g-3 p-4">
			<div class="col-md-6">
				<label for="inpName" class="form-label">Nome <span class="text-danger">*</span></label>
				<input 
					type="text" 
					class="form-control form-control-sm" 
					name="name" 
					id="inpName" 
					placeholder="Digite seu nome..." 
					value= <?php echo $_POST["name"] ?> 
				>
				<span class="text-danger"><?php echo $name_error ?></span>
				<span class="text-success"><?php echo $name_success ?></span>
			</div>
			
			<div class="col-md-6">
				<label for="inpEmail" class="form-label">Email <span class="text-danger">*</span> </label>
				<input
					type="email"
					class="form-control form-control-sm"
					name="email"
					id="inpEmail"
					placeholder="Digite seu email..."
					value = <?php echo $_POST["email"] ?>
				>
				<span class="text-danger p-1"><?php echo $email_error ?></span>
				<span class="text-success p-1"><?php echo $email_success ?></span>
			</div>

			<div class="grid">
				<label>
					Sexo: <span class="text-danger">*</span>
					<span class="text-danger p-1"><?php echo $gender_error ?></span>
					<span class="text-success p-1"><?php echo $gender_success ?></span>
				</label>
				<div class="row">
					<div class="radio-control col">
						<label for="inpMale">Masculino: </label>
						<input
							type="radio"
							name="gender"
							id="inpMale"
							value="M"
							<?php if ($gender == "M")
								echo "checked" ?> 
							>
					</div>
					<div class="radio-control col">
						<label for="inpFemale">Feminino: </label>
						<input 
							type="radio" 
							name="gender" 
							id="inpFemale" 
							value="F"
							<?php if ($gender == "F")
								echo "checked" ?> 
							>
					</div>
					<div class="radio-control col">
						<label for="inpOtherGender">Outro: </label>
						<input 
							type="radio" 
							name="gender" 
							id="inpOtherGender" 
							value="O"
							<?php if ($gender == "O")
								echo "checked" ?> 
						>
					</div>
				</div>
			</div>

			<div>
				<label for="inpWebsite">Site: </label>
				<input 
					type="url" 
					class="form-control form-control-sm" 
					name="website" 
					id="inpWebsite" 
					placeholder="Digite seu site..."
					value=<?php echo $website ?>
				>
			</div>

			<div>
				<label for="inpComment">Comentários: </label>
				<textarea 
					class="form-control p-6" 
					name="comment" 
					id="inpComment" 
					cols="30" 
					rows="10" 
					placeholder="Digite seus comentários..."
				><?php echo $comment ?></textarea>
			</div>

			<div class="mt-2">
				<input type="submit" value="Enviar" class="btn btn-primary" />
				<input type="reset" value="Limpar" class="btn btn-secondary" />
			</div>
		</form>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
			crossorigin="anonymous"
		></script>
	</body>
</html>
