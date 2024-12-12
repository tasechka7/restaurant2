<div x-data="{
    currentSlide: 0,
    slidesPerPage: window.innerWidth <= 700 ? 1 : (window.innerWidth <= 1100 ? 2 : 3),
    totalSlides: {{ count($news) }},
    slides: @js($news),
    startX: 0,
    endX: 0,
    swipeThreshold: 50,
    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
    },
    prevSlide() {
        this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
    },
    goToSlide(index) {
        this.currentSlide = index;
    },
    getDisplayedSlides() {
        let displayedSlides = [];
        for (let i = 0; i < this.slidesPerPage; i++) {
            displayedSlides.push(this.slides[(this.currentSlide + i) % this.totalSlides]);
        }
        return displayedSlides;
    },
    init() {
        this.slidesPerPage = window.innerWidth <= 700 ? 1 : (window.innerWidth <= 1100 ? 2 : 3);
        window.addEventListener('resize', () => {
            this.slidesPerPage = window.innerWidth <= 700 ? 1 : (window.innerWidth <= 1100 ? 2 : 3);
        });
    },
    handleTouchStart(event) {
        this.startX = event.touches[0].clientX;
    },
    handleTouchEnd(event) {
        this.endX = event.changedTouches[0].clientX;
        const distance = this.startX - this.endX;
        if (distance > this.swipeThreshold) {
            this.nextSlide();
        } else if (distance < -this.swipeThreshold) {
            this.prevSlide();
        }
    }
}" x-init="init()" class="news-slider">
<div  class="slider-container"
    @touchstart="handleTouchStart" @touchend="handleTouchEnd">

    <!-- Кнопка для переключения влево -->
    <button @click="prevSlide" class="prev-button">
        <img src="/images/arrowLeft.svg" alt="Previous Slide">
    </button>

    <div class="cards-container">
        <template x-for="(newItem, index) in getDisplayedSlides()" :key="newItem.id">
            <div class="card"
                 x-show="newItem.id"
                 :style="{
                     'transition': 'transform 0.7s ease, opacity 0.7s ease',
                     'transform': 'translateX(0)',
                     'opacity': '1',
                     'animation': 'slideIn 0.7s ease-out'
                 }">
                <img :src="'{{ asset('storage') }}/' + newItem.photo" :alt="newItem.name">
                <div class="description">
                    <h1 x-text="newItem.name"></h1>
                    <h3 x-text="newItem.formattedDate"></h3>
                    <p x-text="newItem.description"></p>
                </div>
            </div>
        </template>
    </div>

    <!-- Кнопка для переключения вправо -->
    <button @click="nextSlide" class="next-button">
        <img src="/images/arrowRight.svg" alt="Next Slide">
    </button>
   
    <!-- Точки навигации -->
</div>
<div class="dots-navigation">
    <template x-for="(slide, index) in slides" :key="index">
        <button 
            @click="goToSlide(index)" 
            :class="{
                'dot': true,
                'active-dot': index === currentSlide
            }">
        </button>
    </template>
</div>
</div>