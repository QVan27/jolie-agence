<?php
/*
Template Name: Service3
*/
get_header();
$metas = get_post_meta($id);
$image_temoins_1 = get_field('image_1');
$image_temoins_2 = get_field('image_2');
?>
<section class="presta">
	<div class="content-about">
		<div id="text-about">
			<div id="save">
				<h1>La Jolie Agence</h1>
			</div>
		</div>
		<div class="married">
			<h2>wedding témoins</h2>
		</div>
	</div>
</section>

<div class="box-content-text p105 bckgdBeige">
	<div class="minibox-text marginBottom">
		<div class="box-presta-text pr5 w50">
			<h3>Enterrement de Vie de Jeune de Fille et de Garçon</h3>
			<p>
				Les pine-co et les copains d’abord !
				Ça y est, c’est le moment où la bestah sista entre en scène !
				Il ne reste plus beaucoup de temps avant le Jour J et il est temps d’organiser un EVJF et/ou EVG digne de ce nom, mais par où on commence ?
				La Jolie Agence vous propose son savoir-faire et son expertise pour l’organisation de cette journée.
				La prestation comprend, pour 6 personnes :
				Une jolie rencontre pour échanger sur vos souhaits et les envies de la future Madame
				Nous élaborons ensemble le nombre de participants, le lieu et le budget maximum par personne pour l’évènement
				Nous sélectionnons et réservons les activités de la journée ou du week-end ( de nuit comme de jour)
				Pour les gars jo, pas de panique ! La Jolie Agence vous propose les mêmes services.
				La Jolie Agence peut également organiser les deux enterrements si vous souhaitez vous retrouvez en soirée ou à la fin du week-end. Cela permet une coordination parfaite entre les deux évènements.
				A partir de 800€

			</p>
		</div>

		<div class="image_prestation img_9">
			<style>
				.img_9 {
					background: url("<?= $image_temoins_1['url']; ?>") no-repeat center;
				}
			</style>
		</div>
	</div>

	<div class="minibox-text reverse marginBottom">
		<div class="box-presta-text pl5 w50">
			<h3>SOS Témoin</h3>
			<p>
				La Jolie Agence a déjà fait partie de ces nombreux témoins à qui on a demandé d’être aux côtés des marié(e)s pour leur joli jour.
				Félicitations à vous futurs témoins, vous allez être le symbole de vos marié(e)s durant les préparatifs, le Jour J et bien sûr tout au long de leur vie.
				Les futurs marié (e)s vous ont choisi et ce n’est pas juste pour le geste ou pour signer un bout de papier
				Non non… Il y a là, une marque de confiance importante, vous êtes le témoin de leur union
				Vous avez besoin d’aide, d’idée d’organisation, d’écoute, de conseils pour les animations ou pour la rédaction de vos discours ?
				Vous êtes les futurs mariés, vous souhaitez que vos témoins soient accompagnés pour l’organisation de votre mariage.
				SOS La Jolie Agence est disponible pour vous guidez
				A partir de 150 €
			</p>
		</div>
		<div class="image_prestation img_10">
			<style>
				.img_10 {
					background: url("<?= $image_temoins_2['url']; ?>") no-repeat center;
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
