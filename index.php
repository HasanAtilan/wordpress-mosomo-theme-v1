<?php get_header(); ?>
  <div class="container">
<main class="main-content">
<section class="showcase">
<section class="nes-container with-title">
<h3 class="title">Deneyimler</h3>
<div id="containers" class="item">
<?php $i=1; if (have_posts()) : while (have_posts($i<=get_option('posts_per_page'))) : the_post(); ?>
<?php
//rastgele stil MR.HASAN
$yazi[1] =   "is-dark"; // css stilindeki isim
$yazi[2] =   "with-title"; // diğer css stilindeki isim
$id_yazi = array_rand($yazi);
$gondergelsin = $yazi[$id_yazi];

?>

	  
  <div class="nes-container with-title <?php echo $gondergelsin; ?>">
<p class="title">
<a target="_blank" rel="nofollow"><?php the_title(); ?></a>
</p>
<p>
<?php the_content();?>
</p>


  </div>


<?php $i++; endwhile; else: ?>
<?php endif; ?>


</div>
</section>
</section>

<?php get_footer(); ?>