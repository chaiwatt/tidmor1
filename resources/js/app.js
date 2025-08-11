import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    
    // --- Hamburger Menu Logic ---
    const hamburgerButton = document.getElementById('hamburger-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (hamburgerButton && mobileMenu) {
        hamburgerButton.addEventListener('click', function() {
            hamburgerButton.classList.toggle('is-active');
            mobileMenu.classList.toggle('is-active');
            document.body.style.overflow = mobileMenu.classList.contains('is-active') ? 'hidden' : '';
        });
    }

    // --- Floating Action Button (FAB) Logic ---
    const fabContainer = document.getElementById('fab-container');
    const fabCloseButton = document.getElementById('fab-close');

    if (fabContainer && fabCloseButton) {
        fabCloseButton.addEventListener('click', function() {
            fabContainer.style.display = 'none';
        });
    }


    // --- Star Rating Logic (อัปเดตแล้ว) ---
    function setupStarRating(containerId, scoreTextId) {
        const starsContainer = document.getElementById(containerId);
        const scoreText = document.getElementById(scoreTextId);
        if (!starsContainer || !scoreText) return;

        const initialRating = Math.round(parseFloat(starsContainer.dataset.rating)) || 0;
        let currentRating = initialRating;

        const starCount = 5;

        for (let i = 1; i <= starCount; i++) {
            const star = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            star.setAttribute('class', 'rating-star');
            star.setAttribute('viewBox', '0 0 24 24');
            star.setAttribute('fill', 'currentColor');
            star.dataset.value = i;
            const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
            path.setAttribute('d', 'M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z');
            star.appendChild(path);
            starsContainer.appendChild(star);
        }

        const stars = starsContainer.querySelectorAll('.rating-star');
        const updateStars = (rating) => stars.forEach(star => star.classList.toggle('filled', star.dataset.value <= rating));

        stars.forEach(star => {
            star.addEventListener('mouseover', () => updateStars(star.dataset.value));
            star.addEventListener('mouseout', () => updateStars(currentRating));
            star.addEventListener('click', () => {
                currentRating = star.dataset.value;
                scoreText.textContent = `ขอบคุณสำหรับ ${currentRating} คะแนน!`;
            });
        });

        // กำหนดสถานะเริ่มต้นของดาวและข้อความ
        if (initialRating > 0) {
            updateStars(initialRating);
            
            // อ่านค่าคะแนนเฉลี่ย (ทศนิยม) และจำนวนรีวิว
            const originalRatingValue = parseFloat(starsContainer.dataset.rating).toFixed(1);
            const ratingCount = starsContainer.dataset.count || 0;

            // อัปเดตข้อความให้แสดงทั้งคะแนนเฉลี่ยและจำนวนรีวิว
            scoreText.textContent = `คะแนนเฉลี่ย: ${originalRatingValue}/5 (จาก ${ratingCount} รีวิว)`; 
        } else {
            scoreText.textContent = 'ให้คะแนนหนังสือเล่มนี้';
        }
    }

    // --- Reusable Countdown Timer Logic ---
    function setupCountdown(config) {
        const countdownContainer = document.getElementById(config.containerId);
        if (!countdownContainer) return;

        const daysEl = document.getElementById(config.daysId);
        const hoursEl = document.getElementById(config.hoursId);
        const minutesEl = document.getElementById(config.minutesId);
        const secondsEl = document.getElementById(config.secondsId);

        const updateCountdown = () => {
            const now = new Date().getTime();
            const distance = config.endDate - now;

            if (distance < 0) {
                clearInterval(interval);
                if (countdownContainer.parentElement) {
                    countdownContainer.parentElement.innerHTML = `<div class='countdown-title' style='padding: 1rem 0;'>${config.endText}</div>`;
                }
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (daysEl) daysEl.textContent = String(days).padStart(2, '0');
            if (hoursEl) hoursEl.textContent = String(hours).padStart(2, '0');
            if (minutesEl) minutesEl.textContent = String(minutes).padStart(2, '0');
            if (secondsEl) secondsEl.textContent = String(seconds).padStart(2, '0');
        };

        const interval = setInterval(updateCountdown, 1000);
        updateCountdown();
    }

    // --- Initialize Components ---
    setupStarRating('rating-stars-container-2', 'rating-score-text-2');

    const now = new Date();
    
    setupCountdown({
        containerId: 'countdown-upcoming',
        daysId: 'days-upcoming',
        hoursId: 'hours-upcoming',
        minutesId: 'minutes-upcoming',
        secondsId: 'seconds-upcoming',
        endDate: new Date(now.getTime() + 5 * 24 * 60 * 60 * 1000),
        endText: 'Flash Sale เริ่มแล้ว!'
    });
});
