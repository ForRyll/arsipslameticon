//
// Function Switch Tab
function switchPortfolioTab(targetId) {
    document.querySelectorAll('.portfolio-content').forEach(content => {
        content.classList.add('hidden');
        content.classList.remove('block');
    });

    document.querySelectorAll('.portfolio-tab').forEach(tab => {
        tab.classList.remove('active', 'bg-[#1112A2]', 'text-white');
        tab.classList.add('text-gray-400');
    });

    const activeContent = document.getElementById(targetId);
    if (activeContent) {
        activeContent.classList.remove('hidden');
        activeContent.classList.add('block');
    }

    const activeTab = document.querySelector(`[data-target="${targetId}"]`);
    if (activeTab) {
        activeTab.classList.add('active', 'bg-[#1112A2]', 'text-white');
        activeTab.classList.remove('text-gray-400');
    }

    // Pemicu rekalkulasi scroll saat beralih tab
    window.dispatchEvent(new CustomEvent('portfolio-tab-changed', { detail: { targetId } }));
}

// Auto Scroll Engine
document.addEventListener('DOMContentLoaded', () => {
    const SPEED = 35; // Kecepatan scroll dalam pixel/detik

    document.querySelectorAll('[data-auto-scroll]').forEach(wrapper => {
        let isInteracting = false;
        let resumeTimer = null;
        let lastTime = null;

        const pause = () => {
            isInteracting = true;
            if (resumeTimer) clearTimeout(resumeTimer);
        };

        const resume = (delay = 1200) => {
            if (resumeTimer) clearTimeout(resumeTimer);
            resumeTimer = setTimeout(() => {
                isInteracting = false;
            }, delay);
        };

        // Event listeners untuk interaksi manual
        wrapper.addEventListener('mouseenter', pause);
        wrapper.addEventListener('mouseleave', () => resume(300));
        wrapper.addEventListener('touchstart', pause, { passive: true });
        wrapper.addEventListener('touchend', () => resume(1500), { passive: true });
        wrapper.addEventListener('wheel', () => { pause(); resume(1500); }, { passive: true });

        window.addEventListener('portfolio-tab-changed', () => {
            lastTime = null;
        });

        // Animation Loop
        function animate(currentTime) {
            if (!lastTime) lastTime = currentTime;
            const dt = (currentTime - lastTime) / 1000;
            lastTime = currentTime;

            // Jalankan hanya jika elemen sedang terlihat (tidak hidden)
            const isVisible = wrapper.offsetWidth > 0 && wrapper.offsetHeight > 0;

            if (!isInteracting && isVisible) {
                const items = wrapper.querySelectorAll('.project-item');
                if (items.length >= 2) {
                    const half = Math.floor(items.length / 2);
                    const item1 = items[0];
                    const itemHalf = items[half];

                    if (item1 && itemHalf) {
                        const period = itemHalf.offsetTop - item1.offsetTop;

                        if (period > 0) {
                            let nextScroll = wrapper.scrollTop + (SPEED * dt);
                            if (nextScroll >= period) {
                                nextScroll -= period;
                            }
                            wrapper.scrollTop = nextScroll;
                        }
                    }
                }
            }

            requestAnimationFrame(animate);
        }

        requestAnimationFrame(animate);
    });
});