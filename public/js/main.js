document.addEventListener('DOMContentLoaded', () => {

    initMobileNav();

    initSidebarToggle();

    initSwiper();

    initScrollReveal();

    loadMetrics();

    initLeadForm();

});


// ============================================================
// MOBILE NAVIGATION
// ============================================================

function initMobileNav() {

    const toggle =
        document.getElementById('navToggle');

    const nav =
        document.getElementById('mainNav');

    if (!toggle || !nav) return;


    toggle.addEventListener('click', () => {

        nav.classList.toggle('open');

    });

}


// ============================================================
// SIDEBAR TOGGLE
// ============================================================

function initSidebarToggle() {

    const toggle =
        document.getElementById('sidebarToggle');

    const sidebar =
        document.getElementById('sidebar');

    if (!toggle || !sidebar) return;


    toggle.addEventListener('click', () => {

        sidebar.classList.toggle('open');

    });

}


// ============================================================
// TESTIMONIAL SWIPER
// ============================================================

function initSwiper() {

    const el =
        document.querySelector('.testimonialSwiper');

    if (
        !el ||
        typeof Swiper === 'undefined'
    ) {
        return;
    }


    new Swiper(el, {

        loop: true,

        autoplay: {

            delay: 4000,

            disableOnInteraction: false,

            pauseOnMouseEnter: true

        },

        pagination: {

            el: '.swiper-pagination',

            clickable: true

        },

        slidesPerView: 1,

        spaceBetween: 24,

        speed: 600

    });

}


// ============================================================
// SCROLL REVEAL
// ============================================================

function initScrollReveal() {

    const items =
        document.querySelectorAll('[data-reveal]');

    if (!items.length) return;


    const observer =
        new IntersectionObserver(

            (entries) => {

                entries.forEach((entry, i) => {

                    if (entry.isIntersecting) {

                        setTimeout(() => {

                            entry.target.classList.add(
                                'is-visible'
                            );

                        }, i * 60);


                        observer.unobserve(
                            entry.target
                        );

                    }

                });

            },

            {
                threshold: 0.15
            }

        );


    items.forEach((item) => {

        observer.observe(item);

    });

}


// ============================================================
// LOAD LIVE METRICS
// ============================================================

async function loadMetrics() {

    const grid =
        document.getElementById('metricsGrid');

    if (!grid) return;


    try {

        const res =
            await fetch(
                'api/get-metrics.php'
            );


        const json =
            await res.json();


        if (!json.success) {

            throw new Error(
                json.message
            );

        }


        grid.innerHTML =
            json.data.map(m => `

                <div class="metric-card">

                    <p class="metric-value">
                        ${m.metric_value}
                    </p>

                    <p class="metric-label">
                        ${m.metric_name}
                    </p>

                </div>

            `).join('');


    } catch (err) {

        grid.innerHTML =
            '<p class="error">Could not load live metrics.</p>';


        console.error(err);

    }

}


// ============================================================
// BOOK A DEMO FORM
// ============================================================

function initLeadForm() {

    const form =
        document.getElementById('leadForm');

    const status =
        document.getElementById('leadFormStatus');

    if (!form || !status) return;


    form.addEventListener(
        'submit',
        async (e) => {

            e.preventDefault();


            // Disable button while submitting.
            const button =
                form.querySelector(
                    'button[type="submit"]'
                );


            if (button) {

                button.disabled = true;

                button.textContent =
                    'Submitting...';

            }


            status.textContent =
                'Saving your request...';

            status.className =
                'lead-form-status';


            try {

                // Send form data to PHP API.
                const res =
                    await fetch(
                        'api/submit-lead.php',
                        {
                            method: 'POST',
                            body: new FormData(form)
                        }
                    );


                // Convert PHP JSON response.
                const json =
                    await res.json();


                // Display response message.
                status.textContent =
                    json.message;


                status.className =
                    'lead-form-status ' +
                    (
                        json.success
                            ? 'success'
                            : 'error'
                    );


                // Clear form after successful submission.
                if (json.success) {

                    form.reset();

                }


            } catch (err) {

                console.error(
                    'Lead submission error:',
                    err
                );


                status.textContent =
                    'Network error — please try again.';


                status.className =
                    'lead-form-status error';


            } finally {

                // Re-enable button.
                if (button) {

                    button.disabled = false;

                    button.textContent =
                        'Request Demo';

                }

            }

        }
    );

}