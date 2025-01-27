<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/booking-nav.css">

	<title>Desi-Chicken Farm</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
        <img src="assets/images/logo2.png" class="image" alt="" />
			<span class="text">Admin-Panel</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="admin-panel_booked-products.php">
					<i class='bx bx-calendar' ></i>
					<span class="text">Booked-Products</span>
				</a>
			</li>
			<li>
				<a href="admin-panel_add-new-products.php">
					<i class='bx bx-plus' ></i>
					<span class="text">Add-Products</span>
				</a>
			</li>
			<li>
				<a href="admin-panel_update-products.php">
					<i class='bx bxs-edit' ></i>
					<span class="text">Update-Details</span>
				</a>
			</li>
			<li>
				<a href="admin-panel_active-users.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Active-users</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="admin-panel_edit-account.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bx-log-out' ></i>
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
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
		</nav>
		<!-- NAVBAR -->

		
	

	<script src="assets/js/booking-nav.js"></script>
</body>
</html>