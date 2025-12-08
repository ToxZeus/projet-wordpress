<?php
// Page Contact personnalisée
get_header();
?>
<section class="centered-section">
    <h2>Contactez-nous</h2>
    <form>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Envoyer</button>
    </form>
</section>
<?php get_footer(); ?>
