<?php
	require_once('includes/nav.inc.php');
?>
	<div class="main-wrapper">
		<h2>Home</h2>
		<p>Dashboard Overview</p>

		<div class="feat-proj">
			<ul class="feat-proj-selector">
				<li><a href="#/">All</a></li>
				<li><a class="active" href="#/">Current</a></li>
				<li><a href="#/">Pending</a></li>
				<li><a href="#/">Completed</a></li>
			</ul>
			<div class="proj">
				<div class="header">
					<span class="avatar">M</span>
					<h3 class="proj-title">Travel Comrade</h3>
				</div>
				<div class="progress">
					<span class="percent">20%</span>
					<div class="progress-bar"></div>
				</div>
			</div>

			<div class="proj">
				<div class="header">
					<span class="avatar yellow">M</span>
					<h3 class="proj-title">Travel Comrade</h3>
				</div>
				<div class="progress">
					<span class="percent">20%</span>
					<div class="progress-bar yellow"></div>
				</div>
			</div>

			<div class="proj">
				<div class="header">
					<span class="avatar yellow">T</span>
					<h3 class="proj-title">Travel Comrade</h3>
				</div>
				<div class="progress">
					<span class="percent">20%</span>
					<div class="progress-bar red"></div>
				</div>
			</div>

			<div class="proj">
				<div class="header">
					<span class="avatar yellow">M</span>
					<h3 class="proj-title">Delivery Club</h3>
				</div>
				<div class="progress">
					<span class="percent">20%</span>
					<div class="progress-bar purple"></div>
				</div>
			</div>
		</div>

		<section class="files">
			<div class="header">
				<h3>Shared Files</h3>
				<a href="">View All</a>
			</div>
			
			<a href="">
				<div class="file-row purple">
					<span class="icon"><span class="folder"></span></span>
					<p class="title">Work Guidelines</p>
					<p class="date">2 Jun 2020</p>
					<p class="views">15 Projects</p>
					<p class="size">2Mb</p>
				</div>
			</a>
			<a href="">
				<div class="file-row yellow">
					<span class="icon"><span class="folder"></span></span>
					<p class="title">Potato Guidelines</p>
					<p class="date">20 April 2020</p>
					<p class="views">15 Projects</p>
					<p class="size">2Mb</p>
				</div>
			</a>
			<a href="">
				<div class="file-row red">
					<span class="icon"><span class="folder"></span></span>
					<p class="title">Music</p>
					<p class="date">20 Feb 2020</p>
					<p class="views">1 House</p>
					<p class="size">2Mb</p>
				</div>
			</a>
		</section>

		<section class="statistics">
			<div class="header">
				<h3>Project Statistics</h3>
				<a href="">View All</a>
			</div>
			<div class="boxes">
				<div class="stats-box yellow">
					<div class="stats-content">
						<div class="text">
							<h3>183</h3>
							<p>Active users</p>
						</div>
						<div class="stats-circle">
							<svg>
								<circle cx="50" cy="50" r="50"></circle>
								<circle cx="50" cy="50" r="50"></circle>
							</svg>
							<p class="percent">57%</p>
						</div>
					</div>
				</div>
				<div class="stats-box purple">
					<div class="stats-content">
						<div class="text">
							<h3>23</h3>
							<p>Courses</p>
						</div>
						<div class="stats-circle">
							<svg>
								<circle cx="50" cy="50" r="50"></circle>
								<circle cx="50" cy="50" r="50"></circle>
							</svg>
							<p class="percent">57%</p>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

	<script src="js/main.js"></script>
</body>
</html>