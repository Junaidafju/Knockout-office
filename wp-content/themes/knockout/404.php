<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package KnockOut
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <section class="error-404 not-found">
            <div class="error-content">
                <div class="error-icon">
                    <span class="bowling-icon">🎳</span>
                    <span class="error-number">404</span>
                </div>
                
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e('Oops! Strike Out!', 'knockout'); ?></h1>
                    <p class="error-message"><?php esc_html_e('Looks like this page rolled into the gutter. Let\'s get you back on track!', 'knockout'); ?></p>
                </header>

                <div class="page-content">
                    <div class="error-suggestions">
                        <h2><?php esc_html_e('Try these instead:', 'knockout'); ?></h2>
                        <div class="suggestion-grid">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="suggestion-card">
                                <span class="suggestion-icon">🏠</span>
                                <h3>Home</h3>
                                <p>Back to the main page</p>
                            </a>
                            
                            <a href="<?php echo esc_url(home_url('/#menu')); ?>" class="suggestion-card">
                                <span class="suggestion-icon">🍕</span>
                                <h3>Menu</h3>
                                <p>Check out our food & drinks</p>
                            </a>
                            
                            <a href="<?php echo esc_url(home_url('/#booking')); ?>" class="suggestion-card">
                                <span class="suggestion-icon">🎳</span>
                                <h3>Book a Lane</h3>
                                <p>Reserve your bowling experience</p>
                            </a>
                            
                            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="suggestion-card">
                                <span class="suggestion-icon">📞</span>
                                <h3>Contact</h3>
                                <p>Get in touch with us</p>
                            </a>
                        </div>
                    </div>
                    
                    <div class="search-section">
                        <h3><?php esc_html_e('If You Need Help, Contact the Developer of this Website'); ?></h3>
                        <a class="profile-link" href="https://in.linkedin.com/in/0fficialjunaid" target="_blank" rel="noopener noreferrer">
                            <div class="profile">
                                <img class="profile__avatar" src="https://media.licdn.com/dms/image/v2/D5603AQGwMfCWI_Vbeg/profile-displayphoto-scale_200_200/B56Zfy8lMkHoAc-/0/1752127658317?e=2147483647&v=beta&t=DNZHBLJXG-L2M-LtHsY8kMZbrr67LO6XtmygM5cq5xo" alt="MUHAMMAD JUNAID AKHTAR">
                                <div class="profile__info">
                                    <h4 class="profile__name">MUHAMMAD JUNAID AKHTAR</h4>
                                    <p class="profile__role">Web Developer | SDET | Automation QA Engineer</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<style>
.error-404 {
    text-align: center;
    padding: 4rem 0;
    min-height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.error-content {
    max-width: 800px;
    margin: 0 auto;
}

.error-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 2rem;
    font-size: 4rem;
}

.bowling-icon {
    animation: bounce 2s ease-in-out infinite;
}

.error-number {
    font-weight: 900;
    color: #2c3e50;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
}

.page-title {
    font-size: 3rem;
    font-weight: 900;
    color: #2c3e50;
    margin-bottom: 1rem;
}

.error-message {
    font-size: 1.2rem;
    color: #6c757d;
    margin-bottom: 3rem;
    line-height: 1.6;
}

.error-suggestions h2 {
    font-size: 1.5rem;
    color: #2c3e50;
    margin-bottom: 2rem;
}

.suggestion-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-bottom: 3rem;
}

.suggestion-card {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    text-decoration: none;
    color: inherit;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.suggestion-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    border-color: #FFD700;
}

.suggestion-icon {
    font-size: 2.5rem;
    display: block;
    margin-bottom: 1rem;
}

.suggestion-card h3 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 0.5rem;
}

.suggestion-card p {
    color: #6c757d;
    font-size: 0.9rem;
}

.search-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 20px;
    padding: 3rem;
    margin-top: 3rem;
}

.search-section h3 {
    font-size: 1.3rem;
    color: #2c3e50;
    margin-bottom: 1.5rem;
}

@media (max-width: 768px) {
    .error-icon {
        font-size: 3rem;
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .page-title {
        font-size: 2rem;
    }
    
    .suggestion-grid {
        grid-template-columns: 1fr;
    }
    
    .search-section {
        padding: 2rem;
    }
}
</style>

<style>
/* Skeleton loader card */
.card {
    width: 190px;
    height: 90px;
    background: #ffff;
    box-shadow: 0 1px 25px rgba(0,0,0,0.2);
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    padding: 12px 10px;
}

.card_load {
    width: 70px;
    height: 70px;
    position: relative;
    float: left;
    background: linear-gradient(120deg, #e5e5e5 30%, #f0f0f0 38%, #f0f0f0 40%, #e5e5e5 48%);
    border-radius: 50%;
    background-size: 200% 100%;
    background-position: 100% 0;
    animation: load89234 2s infinite;
}

.card_load_extreme_title {
    width: 90px;
    height: 10px;
    position: relative;
    float: right;
    border-radius: 5px;
    background: linear-gradient(120deg, #e5e5e5 30%, #f0f0f0 38%, #f0f0f0 40%, #e5e5e5 48%);
    background-size: 200% 100%;
    background-position: 100% 0;
    animation: load89234 2s infinite;
}

.card_load_extreme_descripion {
    width: 90px;
    height: 47px;
    position: relative;
    float: right;
    border-radius: 5px;
    background: linear-gradient(120deg, #e5e5e5 30%, #f0f0f0 38%, #f0f0f0 40%, #e5e5e5 48%);
    margin-top: 10px;
    background-size: 200% 100%;
    background-position: 100% 0;
    animation: load89234 2s infinite;
}

@keyframes load89234 {
    100% {
        background-position: -100% 0;
    }
}

/* Profile snippet */
.profile {
    margin-top: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
}

.profile__avatar {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #e5e5e5;
}

.profile__name {
    margin: 0;
    font-size: 1rem;
    font-weight: 700;
    color: #2c3e50;
}

.profile__role {
    margin: 2px 0 0 0;
    font-size: 0.9rem;
    color: #6c757d;
}
</style>

<?php get_footer(); ?>