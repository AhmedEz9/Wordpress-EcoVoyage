<?php get_header(); ?>
<main class="home-main">
    <section class="hero-section">
        <h1>Welcome to EcoVoyage</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/images/main-image.jpg" alt="Scenic Travel">
        <p>EcoVoyage is your gateway to sustainable travel experiences.</p>
        <a href="<?php echo get_permalink(get_page_by_title('Products')); ?>" class="button">Explore Our Packages</a>
    </section>
    
    <section class="features-section">
        <div class="feature">
            <h2>Sustainable Travel</h2>
            <p>Discover eco-friendly travel options that minimize your environmental impact.</p>
        </div>
        <div class="feature">
            <h2>Expert Guides</h2>
            <p>Learn from knowledgeable guides about the local ecosystem and culture.</p>
        </div>
        <div class="feature">
            <h2>Unforgettable Experiences</h2>
            <p>Enjoy unique and memorable travel experiences curated just for you.</p>
        </div>
    </section>
</main>
<?php get_footer(); ?>
