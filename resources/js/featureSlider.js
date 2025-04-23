   document.addEventListener('DOMContentLoaded', () => {
        // Initialize Swiper
        const swiper = new Swiper('.product-slider', {
            // Optional parameters
            slidesPerView: 1,
            spaceBetween: 16,
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            // Enable responsive breakpoints
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 16
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 16
                }
            },
            // Pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<button class="' + className + ' transition-all duration-300 mx-1 w-3 h-3 rounded-full bg-gray-300 hover:bg-indigo-400 focus:outline-none"></button>';
                },
            },
            // Navigation arrows
            navigation: {
                nextEl: '#next-slide',
                prevEl: '#prev-slide',
            },
            on: {
                init: function () {
                    updateCounter(this);
                },
                slideChange: function () {
                    updateCounter(this);
                }
            }
        });

        // Update the counter text
        function updateCounter(swiper) {
            const counter = document.getElementById('pagination-counter');
            const realIndex = swiper.realIndex + 1;
            const totalSlides = swiper.slides.length - swiper.loopedSlides * 2;
            counter.textContent = `${realIndex} / ${totalSlides}`;
        }

        // Function to equalize card heights
        const equalizeCardHeights = () => {
            // Reset heights first
            const cards = document.querySelectorAll('.swiper-slide .bg-white');
            cards.forEach(card => {
                card.style.height = 'auto';
            });

            // Get tallest height
            let maxHeight = 0;
            cards.forEach(card => {
                maxHeight = Math.max(maxHeight, card.offsetHeight);
            });

            // Set all cards to tallest height
            cards.forEach(card => {
                card.style.height = `${maxHeight}px`;
            });
        };

        // Call equalize function after content is loaded
        window.addEventListener('load', equalizeCardHeights);

        // Handle window resize
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                equalizeCardHeights();
            }, 300);
        });
    });
