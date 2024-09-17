<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css_dashboard/style.css">

	<title>App courrier</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
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
			<li>
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
			<li class="active">
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
					<h1>Différents rapports</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Panneau Admin</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="rapports.php">rapports</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			
				




			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>N° d'entrée document</th>
								<th>Expéditeur</th>
								<th>N° de reference de la note</th>
								<th>Date reception</th>
								<th>Objet</th>
								<th>N° de sortie document</th>
								<th>Date sortie</th>
								<th>Observation/Orientation</th>
							</tr>
						</thead>

						













						
    


						


						<!-- <tbody>
						
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody> -->
					</table>
				</div>




			<?php
// Connexion à la base de données
    // $numero_entree_document = $_POST['numero_entree_document'];
    // $expediteur = $_POST['expediteur'];
    // $reference_note = $_POST['reference_note'];
    // $date_reception = $_POST['date_reception'];
    // $objet = $_POST['objet'];

// Créer la connexion
// $conn = new mysqli('localhost', 'root', '', 'courrier_db');


// Vérifier la connexion
// if ($conn->connect_error) {
//     die("Connexion echouée: " . $conn->connect_error);
// }

// Récupérer les enregistrements de la base de données
// $sql = "SELECT numero_entree_document, expediteur, reference_note, date_reception, objet FROM reception";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     echo "<table><tr><th>N° d'entrée document</th><th>Expéditeur</th><th>N° de reference de la note</th><th>Date reception</th><th>Objet</th></tr>";
    // Afficher les enregistrements
    // while($row = $result->fetch_assoc()) {
    //     echo "<tr><td>" . $row["N° d'entrée document"]. "</td><td>" . $row["Expéditeur"]. "</td><td>" . $row["N° de reference de la note"]. "</td><td>" . $row["Date reception"]. "</td><td>" . $row["Objet"]. "</td></tr>";
//     }
//     echo "</table>";
// } else {
//     echo "0 résultats";
// }

// Fermer la connexion
// $conn->close();
?>

			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="../public/js/main.js"></script>
</body>
</html>