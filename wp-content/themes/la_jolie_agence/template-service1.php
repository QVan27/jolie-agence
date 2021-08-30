<?php
/*
Template Name: Service1
*/
get_header();
$metas = get_post_meta($id);
$image_day_1 = get_field('image_1');
$image_day_2 = get_field('image_2');
$image_day_3 = get_field('image_3');
?>
<section class="presta">
	<div class="content-about">
		<div id="text-about">
			<div id="save">
				<h1>La Jolie Agence</h1>
			</div>
		</div>
		<div class="married">
			<h2>wedding planner</h2>
		</div>
	</div>
</section>

<div class="box-content-text p105">
	<div class="minibox-text marginBottom">
		<div class="box-presta-text pr5 w50">
			<h3><?= $metas['titre_1'][0]; ?></h3>
			<p><?= $metas['texte_1'][0]; ?></p>
		</div>

		<div class="image_prestation img_3">
			<style>
				.img_3 {
					background: url("<?= $image_day_1['url']; ?>") no-repeat center;
				}
			</style>
		</div>

	</div>


	<div class="minibox-text reverse marginBottom">
		<div class="box-presta-text pl5 w50">
			<h3><?= $metas['titre_2'][0]; ?></h3>
			<p><?= $metas['texte_2'][0]; ?></p>
		</div>
		<div class="image_prestation img_4">
			<style>
				.img_4 {
					background: url("<?= $image_day_2['url']; ?>") no-repeat center;
				}
			</style>
		</div>
	</div>

	<div class="minibox-text marginBottom">
		<div class="box-presta-text pr5 w50">
			<h3><?= $metas['titre_3'][0]; ?></h3>
			<p><?= $metas['texte_3'][0]; ?></p>
		</div>

		<div class="image_prestation img_5">
			<style>
				.img_5 {
					background: url("<?= $image_day_3['url']; ?>") no-repeat center;
				}
			</style>
		</div>
	</div>
	<div class="box-pdf">
		<a class="pdf-btn cta-see-more-tabac" href="<?= get_template_directory_uri() . '/asset/pdf/wedding-prestations.pdf' ?>" download>télécharger le pdf</a>
	</div>
</div>

<?php
get_footer();
