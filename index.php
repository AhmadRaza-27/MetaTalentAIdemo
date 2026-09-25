<?php

$pageTitle = 'The Next Generation of Workforce Capability';

require_once __DIR__ . '/includes/header.php';

?>


<!-- ============================================================
     HERO
============================================================ -->

<section class="hero">

    <div class="container hero-inner">

        <span class="pill">
            Introducing MetatalentAI 2.0 — The Human × Agent Collaboration
        </span>


        <h1>

            The Next Generation of

            <span class="gradient-text">
                Workforce Capability
            </span>

        </h1>


        <p class="hero-lead">

            Work is no longer executed purely by humans or software —
            it is driven by human-agent teams.

            OrionX 2.0 turns real-time human-agent collaboration
            into continuous workforce upskilling.

        </p>


        <div class="hero-actions">

            <a
                href="dashboard.php"
                class="btn-gradient"
            >
                See Orion X 2.0 in Action
            </a>


            <a
                href="#book-demo"
                class="btn-outline"
            >
                Book A Demo
            </a>

        </div>

    </div>

</section>


<!-- ============================================================
     WISTIA DEMO VIDEO
============================================================ -->

<section class="video-section container">

    <div
        class="wistia_responsive_padding"
        style="padding:56.25% 0 0 0;position:relative;"
    >

        <div
            class="wistia_responsive_wrapper"
            style="
                height:100%;
                left:0;
                position:absolute;
                top:0;
                width:100%;
            "
        >

            <div
                class="wistia_embed wistia_async_YOUR_VIDEO_ID seo=true videoFoam=true"
                style="
                    height:100%;
                    width:100%;
                "
            ></div>

        </div>

    </div>

</section>


<!-- ============================================================
     CAPABILITY CARDS
============================================================ -->

<section
    class="capability-section container"
    data-reveal
>

    <h2>
        Turn Every Interaction Into Greater Workforce Capability
    </h2>


    <div class="card-grid">

        <?php foreach ($capabilityCards as $card): ?>

            <article
                class="capability-card"
                data-reveal
            >

                <div
                    class="card-top"
                    style="
                        background-image:
                        <?php echo htmlspecialchars($card['gradient']); ?>;
                    "
                >

                    <h3>

                        <?php
                        echo htmlspecialchars(
                            $card['heading']
                        );
                        ?>

                    </h3>

                </div>


                <div class="card-body">

                    <p>

                        <?php
                        echo htmlspecialchars(
                            $card['body']
                        );
                        ?>

                    </p>


                    <a
                        href="<?php echo htmlspecialchars($card['href']); ?>"
                        class="learn-more"
                    >
                        LEARN MORE →
                    </a>

                </div>

            </article>

        <?php endforeach; ?>

    </div>

</section>


<!-- ============================================================
     KEY FEATURES
============================================================ -->

<section
    class="features-section"
    data-reveal
>

    <div class="container features-inner">

        <div class="features-text">

            <h2>
                Key Features
            </h2>


            <div class="feature-block">

                <h3>
                    01 — SHARED EXECUTION CANVAS
                </h3>

                <p>
                    Human experts inline-supervise AI agents
                    on a single shared canvas. The AI handles
                    the heavy execution; the human retains
                    100% governance and real-time review control.
                </p>

            </div>


            <div class="feature-block">

                <h3>
                    02 — 8x CAPABILITY MULTIPLICATION
                </h3>

                <p>
                    Collapse two-week review cycles down to two hours.
                    Multiply workforce capability 8x while upskilling
                    teams through live, expert-guided agent workflows.
                </p>

            </div>


            <div class="feature-block">

                <h3>
                    03 — ENTERPRISE CONTEXT ENGINE
                </h3>

                <p>
                    Every human intervention, edit, and edge-case fix
                    is automatically codified into an indexed memory graph.
                </p>

            </div>

        </div>


        <img
            src="<?php echo BASE_URL; ?>/public/assets/images/landing-team-table.jpg"
            alt="Team collaborating around a table"
            class="features-img"
        >

    </div>

</section>


<!-- ============================================================
     TESTIMONIALS
============================================================ -->

<section
    class="testimonial-section container"
    data-reveal
>

    <div class="swiper testimonialSwiper">

        <div class="swiper-wrapper">

            <?php foreach ($testimonials as $t): ?>

                <div class="swiper-slide">

                    <blockquote>

                        "<?php
                        echo htmlspecialchars(
                            $t['quote']
                        );
                        ?>"

                    </blockquote>

                    —

                    <?php
                    echo htmlspecialchars(
                        $t['author']
                    );
                    ?>

                </div>

            <?php endforeach; ?>

        </div>


        <div class="swiper-pagination"></div>

    </div>

</section>


<!-- ============================================================
     LIVE SYSTEM SNAPSHOT
============================================================ -->

<section
    class="metrics-section container"
    data-reveal
>

    <h2>
        Live System Snapshot
    </h2>


    <div
        class="metrics-grid"
        id="metricsGrid"
    >

        <p>
            Loading live metrics…
        </p>

    </div>

</section>


<!-- ============================================================
     CLOSING SECTION
============================================================ -->

<section
    class="closing-section container"
    data-reveal
>

    <h2>
        See How Your Workforce Is Becoming More Capable
    </h2>


    <img
        src="<?php echo BASE_URL; ?>/public/assets/images/landing-team-meeting.jpg"
        alt="Team in a meeting"
        class="closing-img"
    >

</section>


<!-- ============================================================
     BOOK A DEMO
============================================================ -->

<section
    class="demo-section container"
    id="book-demo"
    data-reveal
>

    <h2>
        Book A Demo
    </h2>


    <form
        id="leadForm"
        class="lead-form"
    >


        <!-- Full Name -->

        <input
            type="text"
            name="full_name"
            placeholder="Full name"
            autocomplete="name"
            required
        >


        <!-- Email -->

        <input
            type="email"
            name="email"
            placeholder="Work email"
            autocomplete="email"
            required
        >


        <!-- Company -->

        <input
            type="text"
            name="company"
            placeholder="Company (optional)"
            autocomplete="organization"
        >


        <!-- Message -->

        <textarea
            name="message"
            placeholder="What are you hoping to solve?"
            rows="3"
        ></textarea>


        <!-- Submit -->

        <button
            type="submit"
            class="btn-gradient"
        >
            Request Demo
        </button>


        <!-- Response -->

        <p
            id="leadFormStatus"
            class="lead-form-status"
            aria-live="polite"
        ></p>


    </form>

</section>


<!-- ============================================================
     CTA
============================================================ -->

<section class="cta-strip">

    <div class="container">

        <h2>
            Get Started
        </h2>


        <a
            href="dashboard.php"
            class="btn-gradient large"
        >
            Get Started
        </a>

    </div>

</section>


<?php

require_once __DIR__ . '/includes/footer.php';

?>