<div x-data="{
    currentSlide: 0,
    slidesPerPage: 3,
    totalSlides: {{ count($news) }},
    slides: @js($news),
    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
    },
    prevSlide() {
        this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
    },
    getDisplayedSlides() {
        return [
            this.slides[(this.currentSlide) % this.totalSlides],
            this.slides[(this.currentSlide + 1) % this.totalSlides],
            this.slides[(this.currentSlide + 2) % this.totalSlides]
        ];
    }
}" class="slider-container">

    <!-- Кнопка для переключения влево -->
    <button @click="prevSlide" class="prev-button">
        <img src="/images/arrowLeft.svg" alt="Previous Slide">
    </button>

    <div class="cards-container">
        <template x-for="(newItem, index) in getDisplayedSlides()" :key="newItem.id">
            <div class="card"
                 x-show="newItem.id"
                 :class="{
                    
                     'animate__animated animate__fadeInRight': index === 2,
                     
                 }">
                <img :src="'{{ asset('storage') }}/' + newItem.photo" :alt="newItem.name">
                <div class="description">
                    <h1 x-text="newItem.name"></h1>
                    <h3 x-text="newItem.date"></h3>
                    <p x-text="newItem.description"></p>
                </div>
            </div>
        </template>
    </div>

    <!-- Кнопка для переключения вправо -->
    <button @click="nextSlide" class="next-button">
        <img src="/images/arrowRight.svg" alt="Next Slide">
    </button>
</div>
