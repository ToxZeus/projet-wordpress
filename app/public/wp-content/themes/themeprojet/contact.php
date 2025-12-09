
<?php
// Page Contact personnalisée
get_header();
?>
<section class="centered-section page-contact" style="min-height:60vh;">
    <div style="display:flex;flex-direction:column;align-items:center;gap:1.5rem;max-width:600px;margin:0 auto;">
        <div style="font-size:3rem;line-height:1;color:#2e8fff;">
            <span aria-label="Contact" role="img">📬</span>
        </div>
        <h1 style="margin-bottom:0.5rem;">Contactez-nous</h1>
        <p style="font-size:1.12rem;color:#e0e6ed;">Une question, une demande ?<br>Remplissez le formulaire ci-dessous et nous vous répondrons rapidement.</p>
        <form style="width:100%;background:#23272b;padding:2rem 1.2rem;border-radius:10px;box-shadow:0 2px 12px rgba(46,143,255,0.10);display:flex;flex-direction:column;gap:1rem;max-width:400px;">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message :</label>
            <textarea id="message" name="message" required rows="5"></textarea>
            <button type="submit" class="cta-boutique" style="margin-top:1rem;">Envoyer</button>
        </form>
    </div>
</section>
<?php get_footer(); ?>
