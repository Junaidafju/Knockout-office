<?php
/**
 * Template part for displaying the About Us section
 *
 * @package KnockOut
 */
?>

<!-- About The Sports Cafe Section - Redesigned Header -->
<section class="ko-about-section ko-about-content ko-about-cafe">
    <div class="ko-container">
        <div class="ko-about-wrapper">
            
            <!-- Header - appears first on mobile -->
            <div class="ko-about-header ko-fade-in-up">
                <h2>About <span>KnockOut</span></h2>
            </div>
            
            <!-- Image/Video - appears second on mobile -->
            <div class="ko-about-image-container ko-fade-in-up ko-delay-1">
                <video class="ko-about-video" autoplay muted loop playsinline>
                    <source src="https://res.cloudinary.com/dcvn7lbh6/video/upload/v1755953017/Purple_3D_Modern_Cyber_Security_Mobile_Video_4_bt5akd.mp4" type="video/mp4">
                    <!-- Fallback image if video doesn't load -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/About-Us.svg" alt="About KnockOut" class="ko-about-image">
                </video>
            </div>
            
            <!-- Content - appears third on mobile -->
            <div class="ko-about-text ko-fade-in-up ko-delay-2">
                <p>Kolkata's Premier Experiential Hub where the thrill of cutting-edge sports technology meets the indulgence of a lavish culinary experience.</p>
                <p>We are more than just a venue - we're a destination that transforms ordinary moments into extraordinary experiences, bringing together the excitement of sports with the pleasure of fine dining.</p>
                
                <ul class="ko-feature-list">
                    <li class="ko-feature-item">
                        <i class="fas fa-check-circle ko-feature-icon"></i>
                        <div class="ko-feature-content">
                            <h4 class="ko-feature-title">Premium Location</h4>
                            <p class="ko-feature-desc">Strategically located in the heart of Kolkata for easy accessibility.</p>
                        </div>
                    </li>
                    <li class="ko-feature-item">
                        <i class="fas fa-check-circle ko-feature-icon"></i>
                        <div class="ko-feature-content">
                            <h4 class="ko-feature-title">Modern Ambiance</h4>
                            <p class="ko-feature-desc">Contemporary design blending sports energy with sophisticated dining.</p>
                        </div>
                    </li>
                    <li class="ko-feature-item">
                        <i class="fas fa-check-circle ko-feature-icon"></i>
                        <div class="ko-feature-content">
                            <h4 class="ko-feature-title">Community Hub</h4>
                            <p class="ko-feature-desc">A gathering place for sports enthusiasts and food lovers alike.</p>
                        </div>
                    </li>
                </ul>
                
                <div class="ko-about-actions">
                    <a href="#" class="ko-btn ko-btn-primary">Discover More</a>
                    <a href="#" class="ko-play-circle" aria-label="Watch our story">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
        <!-- Wavy Line Separator -->
    <div class="ko-wavy-separator">
        <svg class="editorial"
             xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 24 150 28"
             preserveAspectRatio="none">
            <defs>
                <path id="gentle-wave"
                       d="M-160 44c30 0 
                          58-18 88-18s
                          58 18 88 18 
                          58-18 88-18 
                          58 18 88 18
                          v44h-352z" />
            </defs>
            <g class="parallax1">
                <use xlink:href="#gentle-wave" x="50" y="3" opacity=".25" fill="#b0d136"/>
            </g>
            <g class="parallax2">
                <use xlink:href="#gentle-wave" x="50" y="0" opacity=".5" fill="#b0d136"/>
            </g>
            <g class="parallax3">
                <use xlink:href="#gentle-wave" x="50" y="9" fill="#b0d136"/>
            </g>
            <g class="parallax4">
                <use xlink:href="#gentle-wave" x="50" y="6" fill="#000000"/>
            </g>
        </svg>
    </div>
</section>

<!-- About Content Section -->
<section class="ko-about-section ko-about-content">
    <div class="ko-container">
        <div class="ko-about-wrapper">
            <div class="ko-about-image-container ko-fade-in-up">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/About-Us.svg" alt="Sports Cafe Interior">
                <!-- <div class="ko-play-button">
                    <i class="fas fa-play"></i>
                </div> -->
            </div>
            <div class="ko-about-text ko-fade-in-up ko-delay-1">
                <h2>Our <span>Vision</span></h2>
                <p>Welcome to KnockOut, Kolkata's revolutionary new destination where the thrill of cutting-edge sports technology meets the indulgence of a lavish culinary experience.</p>
                <p>Our mission is to transcend the ordinary, offering a dynamic and immersive environment that caters to every facet of leisure. We envision a space where friends, families, and corporate teams can connect, compete, and celebrate, creating unforgettable memories through a seamless fusion of active entertainment, sophisticated dining, and vibrant social spaces.</p>
                
                <ul class="ko-feature-list">
                    <li class="ko-feature-item">
                        <i class="fas fa-check-circle ko-feature-icon"></i>
                        <div class="ko-feature-content">
                            <h4 class="ko-feature-title">State-of-the-Art Facilities</h4>
                            <p class="ko-feature-desc">Featuring the latest in sports simulation technology and interactive gaming.</p>
                        </div>
                    </li>
                    <li class="ko-feature-item">
                        <i class="fas fa-check-circle ko-feature-icon"></i>
                        <div class="ko-feature-content">
                            <h4 class="ko-feature-title">Gourmet Dining</h4>
                            <p class="ko-feature-desc">Curated menu featuring international cuisine and signature cocktails.</p>
                        </div>
                    </li>
                    <li class="ko-feature-item">
                        <i class="fas fa-check-circle ko-feature-icon"></i>
                        <div class="ko-feature-content">
                            <h4 class="ko-feature-title">Exclusive Events</h4>
                            <p class="ko-feature-desc">Host your next corporate event or private party in our premium spaces.</p>
                        </div>
                    </li>
                </ul>
                
                <div class="ko-about-actions">
                    <a href="#" class="ko-btn ko-btn-primary">Explore Our Menu</a>
                    <a href="#" class="ko-play-circle" aria-label="Watch our story">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="ko-about-section ko-features">
    <div class="ko-container">
        <div class="ko-section-header ko-fade-in-up">
            <h2>Why <span>Choose Us</span></h2>
            <p>Discover what makes KnockOut the ultimate destination for sports enthusiasts and food lovers alike.</p>
        </div>
        
        <div class="ko-features-grid">
            <div class="ko-feature-card ko-fade-in-up ko-delay-1">
                <div class="ko-feature-icon-circle">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3 class="ko-feature-card-title">Championship Experience</h3>
                <p class="ko-feature-card-desc">Compete in our regular tournaments and leagues with professional-grade equipment.</p>
            </div>
            
            <div class="ko-feature-card ko-fade-in-up ko-delay-2">
                <div class="ko-feature-icon-circle">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3 class="ko-feature-card-title">Gourmet Cuisine</h3>
                <p class="ko-feature-card-desc">Savor dishes crafted by award-winning chefs using locally-sourced ingredients.</p>
            </div>
            
            <div class="ko-feature-card ko-fade-in-up ko-delay-3">
                <div class="ko-feature-icon-circle">
                    <i class="fas fa-cocktail"></i>
                </div>
                <h3 class="ko-feature-card-title">Craft Cocktails</h3>
                <p class="ko-feature-card-desc">Enjoy signature drinks and premium spirits at our fully-stocked bar.</p>
            </div>
            
            <div class="ko-feature-card ko-fade-in-up ko-delay-1">
                <div class="ko-feature-icon-circle">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3 class="ko-feature-card-title">Event Hosting</h3>
                <p class="ko-feature-card-desc">Perfect venue for birthdays, corporate events, and private parties.</p>
            </div>
        </div>
    </div>
</section>

<!-- CEO Section - Complete Redesign -->
<section class="ko-about-section ko-team">
    <div class="ko-container">
        <div class="ko-section-header ko-fade-in-up">
            <h2>Meet <span>Our Leader</span></h2>
            <p>Visionary leadership driving innovation and excellence.</p>
        </div>
        
        <div class="ko-ceo-wrapper">
            <div class="ko-ceo-content ko-fade-in-up">
                <div class="ko-ceo-info">
                    <div class="ko-ceo-nameplate">
                        <h3 class="ko-ceo-name">Mr. Sumit Bhatwal</h3>
                        <p class="ko-ceo-title">Founder & CEO</p>
                    </div>
                    <div class="ko-ceo-description">
                        <p>With over a decade of experience in hospitality and sports management, Sumit Bhatwal brings visionary leadership to KnockOut. His passion for creating unique experiences and commitment to excellence drives our mission to revolutionize the sports and dining landscape in Kolkata.</p>
                        <p>Under his leadership, KnockOut has become a premier destination that seamlessly blends cutting-edge technology with exceptional culinary experiences, setting new standards in the industry.</p>
                        
                        <div class="ko-ceo-highlights">
                            <div class="ko-highlight-item">
                                <i class="fas fa-award ko-highlight-icon"></i>
                                <span>10+ Years Experience</span>
                            </div>
                            <div class="ko-highlight-item">
                                <i class="fas fa-lightbulb ko-highlight-icon"></i>
                                <span>Innovation Leader</span>
                            </div>
                            <div class="ko-highlight-item">
                                <i class="fas fa-handshake ko-highlight-icon"></i>
                                <span>Community Builder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ko-ceo-image-container ko-fade-in-up ko-delay-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ceo.svg" alt="Mr. Sumit Bhatwal - Founder & CEO" class="ko-ceo-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="ko-partners">
    <div class="ko-container">
        <div class="ko-section-header ko-fade-in-up">
            <h2>Our <span>Partners</span></h2>
            <p>Trusted by leading brands in the industry</p>
        </div>
        
        <div class="ko-partners-grid">
            <div class="ko-partner-logo ko-fade-in-up ko-delay-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-1.png" alt="Partner Logo" class="ko-partner-img">
            </div>
            <div class="ko-partner-logo ko-fade-in-up ko-delay-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-2.png" alt="Partner Logo" class="ko-partner-img">
            </div>
            <div class="ko-partner-logo ko-fade-in-up ko-delay-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-3.png" alt="Partner Logo" class="ko-partner-img">
            </div>
            <div class="ko-partner-logo ko-fade-in-up ko-delay-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-4.png" alt="Partner Logo" class="ko-partner-img">
            </div>
        </div>
    </div>
</section>