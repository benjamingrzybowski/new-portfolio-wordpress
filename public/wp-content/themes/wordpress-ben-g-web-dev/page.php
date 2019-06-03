<?php get_header('secondary') ?>
<section class="content">
    <div class="row">
        <div class="col-1-of-4 intro-left slide-left">
            <h2>Some content</h2>
        </div>
        <div class="col-3-of-4 intro-right slide-right">
            <p class="paragraph">Lorem ipsum dolor amet activated charcoal man bun echo park four loko fanny pack stumptown tote bag helvetica. Church-key four loko dreamcatcher, sustainable ennui banh mi mixtape tacos hot chicken mlkshk. Kogi tbh air plant, butcher yr mlkshk paleo swag four dollar toast whatever ramps cold-pressed food truck. IPhone keffiyeh 3 wolf moon poke, hashtag shaman selvage edison bulb prism fam hoodie. Hexagon scenester four loko, listicle food truck cornhole mixtape pitchfork vape chia try-hard distillery direct trade kogi vaporware.</p>
            <br>
            <p class="paragraph">Salvia truffaut selfies twee. Flexitarian pabst chambray migas scenester try-hard gluten-free cray meh vinyl unicorn. Post-ironic squid jean shorts, waistcoat narwhal bushwick DIY raclette. IPhone gochujang pinterest lo-fi, cred food truck taiyaki taxidermy celiac poutine church-key sustainable distillery vape. Forage austin la croix, cardigan selvage shabby chic ramps semiotics yuccie PBR&B. Knausgaard chia raw denim plaid DIY unicorn distillery wayfarers williamsburg twee tofu taxidermy salvia vegan. Snackwave health goth af try-hard, fam put a bird on it franzen.</p>
        </div>
    </div>
</section>
<script>

jQuery( document ).ready( function( $ ) {
    var slideInTrigger = document.getElementById('slide-in-trigger').getBoundingClientRect();
    var slideLeft = document.querySelector('.slide-left');
    var slideRight = document.querySelector('.slide-right');

    if (slideInTrigger.top >= 0 && (slideInTrigger.bottom + 200) <= (window.innerHeight || document.documentElement.clientHeight)) {
        slideLeft.classList.add('slides-in-left');
        slideRight.classList.add('slides-in-right');
    }
});

</script>
<?php get_footer('secondary'); ?>