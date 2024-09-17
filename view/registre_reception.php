

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css_dashboard/style.css">
	<link rel="stylesheet" href="../public/css/style_registre.css">


	<title>App courrier</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="dashboard.php" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Panneau Admin</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="enregistrements.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Enregistrements</span>
				</a>
			</li>
			<li class="active">
				<a href="registre_reception.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Registre de reception</span>
				</a>
			</li>
			<li>
				<a href="registre_transmission.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Registre de transmission</span>
				</a>
			</li>
			<li>
				<a href="rapports.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Gestion des rapports</span>
				</a>
			</li>
			
			
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="../app/login.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<!-- <a href="#" class="nav-link">Categories</a> -->
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>



			<!-- <input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a> -->
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Registre de reception</h1>
					<ul class="breadcrumb">
						<li>
							<a href="index.html">Panneau Admin</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="registre_reception.php">Registre de reception</a>
						</li>
					</ul>
				</div>
			</div>


			<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement de Voyage</title>
    <link rel="stylesheet" href="style.css">
</head> -->

    <div class="container">
        <h1>Enregistrements de la note reçue</h1>
		<br>
		<h2>Avant l'entrée de la note chez le DRH</h2>
        <form class="myFormulaire"action="rapports.php" method="POST">
            <label for="numero_entree_document">N° d'entrée document</label>
            <input type="number" id="numero_entree_document" name="numero_entree_document" required>

            <label for="expediteur">Expéditeur</label>
            <input type="text" id="expediteur" name="expediteur" required>

            <label for="reference_note">N° de reference de la note</label>
			<span id="erreur" class="erreur"></span>
            <input type="text" id="reference_note" name="reference_note" required>

            <label for="date_reception">Date reception</label>
            <input type="date" id="date_reception" name="date_reception" required>

            <label for="objet">Objet</label>
            <input type="text" id="objet" name="objet" required>
            <input type="submit" value="Enregistrer">
        </form>
    </div>



	


			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="../public/js/main.js"></script>
	<script src="../public/js/script.js"></script>

</body>
</html>