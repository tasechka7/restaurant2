<div id="glide" class="glide">
    <div class="glide__track" data-glide-el="track">
        <div class="glide__slides">
            <div class="glide__slide">
                <div class="nav"><img src="/images/sliderNav.svg" alt=""></div>
                <p>Dumque ibi diu moratur commeatus opperiens, quorum translationem ex Aquitania erni imbres solito
                    crebriores prohibebant auctique torrentes, Herculanus advenit pro tector domesticu</p>
                <h3>Moss Link</h3>
            </div>
            <div class="glide__slide">
                <div class="nav"><img src="/images/sliderNav.svg" alt=""></div>
                <p>Interveniente tempore et consiliis inopiam relevare conatus, Aquitaniae fluctus crebris imbribus
                    auctus transgredi minime potuit, donec aliter disponeret fortuna.</p>
                <h3>Forest Path</h3>
            </div>
            <div class="glide__slide">
                <div class="nav"><img src="/images/sliderNav.svg" alt=""></div>
                    <p>Quaerens opportunitatem et momenti copiam ex distantibus locis arcessitam, iter fluctibus
                        impeditum est, quibus incessanter pluviae adiciebantur.</p>
                    <h3>River Bend</h3>
                
            </div>
            <div class="glide__slide">
                <div class="nav"><img src="/images/sliderNav.svg" alt=""></div>
                <p>In valle remota morabatur, sperans serenum ad translationem commeatus; at tempora turbata et undae rapidae eius propositum inhibuerunt.</p>
                <h3>Meadow View</h3>
                
                
            </div>
        </div>
    </div>
    <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><img src="/images/arrowLeftAbout.svg"
                alt=""></button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><img src="/images/arrowRightAbout.svg"
                alt=""></button>
    </div>
    <div class="glide__bullets" data-glide-el="controls[nav]">
        <button class="glide__bullet" data-glide-dir="=0"></button>
        <button class="glide__bullet" data-glide-dir="=1"></button>
        <button class="glide__bullet" data-glide-dir="=2"></button>
        <button class="glide__bullet" data-glide-dir="=3"></button>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.5.0/dist/glide.min.js"></script>

<script>
    const glide = new Glide('#glide', {
        type: 'carousel',
        startAt: 0,
        perView: 1,
        gap: 10,
        hoverpause: true,
        keyboard: true,
        focusAt: 'center',
        loop: true,
    });

    glide.mount(); // Монтируем слайдер
</script>
