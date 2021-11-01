<div class="content-wrapper">
	<div class="container">
		<div class="row" data-aos="fade-up">
			<div class="col-xl-12 col-xxl-12">
				<div class="card">
					<div class="card-body">
						<h1 class="text-center">VISI</h1>
						<h4 class="text-center"><?= $visimisi['visi'] ?> </h4>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h1 class="text-center">MISI</h1>
						<?php foreach ($misi as $row => $value): ?>
							<h4><?= $row+1 ?>. <?= $value['misi'] ?></h4>  
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- main-panel ends -->
<!-- container-scroller ends