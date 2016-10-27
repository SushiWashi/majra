<?php include '../header.php';?>

<div class="grid-container">
	<div class="grid-100 mobile-grid-100 bigCard">

		<div class="grid-15 mobile-grid-100 aboutSideBar">
			
				<h3 style="text-align:left">Nazar Abubaker</h3>
				
				<ul>
					<li><a href="?page=general">general</a></li>
					<li><a href="?page=security">security</a></li>
					<li><a href="?page=notifications">notifications</a></li>
					<li><a href="#">log out</a></li>
				</ul>
				
		</div>

		<div class="grid-85 mobile-grid-100 content">
            <section>
                <?php getPage(); ?>
            </section>
		</div>
	</div>
</div>



<?php include '../footer.php'; ?>