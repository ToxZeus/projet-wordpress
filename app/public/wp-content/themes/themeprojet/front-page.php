<?php
// Page d'accueil personnalisée
get_header();
?>
<div class="frontpage-bg">
    <section class="centered-section frontpage-content">
        <h1>Bienvenue chez TechShop</h1>
        <p style="font-size:1.3rem;margin-bottom:2rem;">Découvrez les meilleurs composants et ordinateurs pour tous vos besoins, du gaming à la bureautique. Qualité, performance et conseils experts !</p>
        <a href="<?php echo home_url('/shop'); ?>" class="cta-boutique">Accéder à la boutique</a>
    </section>
</div>
<script>
document.body.style.minHeight = '100vh';
</script>
<?php get_footer(); ?>
