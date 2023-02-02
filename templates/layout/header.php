
<div class="header">
	<div class="header-top">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<p class="info-header-left d-block text-uppercase mb-0 ml-167">
				<?= $slogan['name'. $lang]?>
			</p>
			<section class="info-header-right d-flex align-items-center justify-content-between">
				<p class="info-header border-right-info-header">
					<i class="bi bi-telephone-fill"></i>
					Hotline: <?=$func->formatPhone($optsetting['hotline']);?>
				</p>
				<p class="info-header pl-13">
					<i class="bi bi-envelope"></i>
					Email: <?=$optsetting['email']?>
				</p>
				<div class="social d-flex align-items-center">
				<?php if(count($social)) { ?>
					<?php foreach($social as $v) { ?>
					<a href="<?=$v['link']?>" target="_blank" class="text-decoration-none mr-2 link-social">
						<img class="lazy pr d-block p-0-8" data-src="<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" title="<?=$v['name'.$lang]?>" >
					</a>
					<?php
						}
					?>
				<?php } ?>
			</div>
			</section>
		</div>
	</div>
</div>
