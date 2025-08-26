<?php
/**
 * Template part for displaying our services section
 *
 * @package KnockOut
 */

?>

<section class="services-section" id="services">
    <div class="container">
        <div class="ko-section-header ko-fade-in-up">
            <h2>Our <span>Services</span></h2>
            <p>Six exceptional experiences under one roof, designed to create unforgettable memories</p>
        </div>
        
        <div class="services-grid">
            <?php
            // Define our services
            $services = array(
                'food' => array(
                    'title' => 'Lavish Food Menu',
                    'description' => 'Exquisite culinary experiences with diverse international cuisines crafted by expert chefs',
                    'image' => 'https://png.pngtree.com/thumb_back/fw800/background/20231022/pngtree-indulge-in-a-delectable-meal-grilled-chicken-salad-on-a-stylish-image_13645831.png' ,
                    'icon' => 'fas fa-utensils',
                    'features' => array(
                        'Multi-cuisine Restaurant',
                        'Fine Dining',
                        'Quick Bites',
                        'Special Menu'
                    ),
                    'class' => 'food-card'
                ),
                'bar' => array(
                    'title' => 'Extraordinary Pubs & Bars',
                    'description' => 'Premium beverages, craft cocktails, and vibrant nightlife in our sophisticated lounge',
                    'image' => 'https://images.unsplash.com/photo-1514933651103-005eec06c04b?w=800&h=600&fit=crop&crop=center',
                    'icon' => 'fas fa-cocktail',
                    'features' => array(
                        'Craft Cocktails',
                        'Premium Spirits',
                        'Live Music',
                        'Night Events'
                    ),
                    'class' => 'bar-card'
                ),
                'hookah' => array(
                    'title' => 'Hookah Lounge',
                    'description' => 'Relaxing hookah experience in our elegantly designed lounge with premium flavors',
                    'image' => 'https://t4.ftcdn.net/jpg/04/68/57/69/360_F_468576967_Z41MAuOX6z7uyv3S9uq49MN6iDaUnfGW.jpg',
                    'icon' => 'fas fa-smoking',
                    'features' => array(
                        'Premium Flavors',
                        'Cozy Ambiance',
                        'Private Sections',
                        'Expert Service'
                    ),
                    'class' => 'hookah-card'
                ),
                'bowling' => array(
                    'title' => '6 Lane Bowling',
                    'description' => 'First-of-its-kind 6 lane bowling experience in Kolkata with state-of-the-art equipment',
                    'image' => 'https://torq03.com/wp-content/uploads/2024/11/PowerClip-Rectangle-3.jpg',
                    'icon' => 'fas fa-bowling-ball',
                    'features' => array(
                        '6 Professional Lanes',
                        'Digital Scoring',
                        'Party Packages',
                        'First in Kolkata'
                    ),
                    'class' => 'bowling-card',
                    'highlight' => '6'
                ),
                'gaming' => array(
                    'title' => 'AR/VR & Arcade Games',
                    'description' => 'Cutting-edge AR/VR experiences and classic arcade games for ultimate entertainment',
                    'image' => 'https://images.unsplash.com/photo-1511512578047-dfb367046420?w=800&h=600&fit=crop&crop=center',
                    'icon' => 'fas fa-vr-cardboard',
                    'features' => array(
                        'VR Gaming Zones',
                        'AR Experiences',
                        'Classic Arcade',
                        'Racing Simulators'
                    ),
                    'class' => 'gaming-card'
                ),
                'live_screening' => array(
                    'title' => 'Live Screenings',
                    'description' => 'Experience live sports screenings on giant screens with an electrifying atmosphere.',
                    'image' => 'https://www.fanzo.com/_next/image?url=https%3A%2F%2Fmatchpint-cdn.matchpint.cloud%2Fshared%2Fimg%2Fpub%2F17843%2F240865805-1656583041_banner.jpeg&w=3840&q=75',
                    'icon' => 'fas fa-tv',
                    'features' => array(
                        'Giant Screens',
                        'Stadium Sound',
                        'Live Commentary',
                        'Special Offers'
                    ),
                    'class' => 'live-screening-card'
                )
            );
            
            foreach ($services as $service_key => $service) :
            ?>
                <div class="service-card <?php echo esc_attr($service['class']); ?>">
                    <div class="card-image">
                        <img src="<?php echo esc_url($service['image']); ?>" alt="<?php echo esc_attr($service['title']); ?>" />
                        <div class="card-overlay">
                            <div class="card-icon">
                                <i class="<?php echo esc_attr($service['icon']); ?>"></i>
                            </div>
                            <?php if (isset($service['highlight'])) : ?>
                                <div class="card-highlight">
                                    <span class="highlight-number"><?php echo esc_html($service['highlight']); ?></span>
                                    <span class="highlight-text">Lane Bowling</span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="card-content">
                        <h3 class="service-title"><?php echo esc_html($service['title']); ?></h3>
                        <p class="service-description"><?php echo esc_html($service['description']); ?></p>
                        
                        <ul class="service-features">
                            <?php foreach ($service['features'] as $feature) : ?>
                                <li><i class="fas fa-check"></i> <?php echo esc_html($feature); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Why Choose Section -->
        <div class="why-choose-section">
            <div class="why-choose-content">
                <h3 class="why-title">Why Choose KnockOut?</h3>
                <p class="why-subtitle">We've created Kolkata's first comprehensive entertainment complex where you don't need to go anywhere else for a complete experience</p>
                
                <div class="why-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Everything Under One Roof</h4>
                            <p>No need to travel between places - dining, bowling, and nightlife all in one location</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="feature-content">
                            <h4>First-of-its-Kind in Kolkata</h4>
                            <p>Experience the city's first 6-lane bowling alley and most advanced AR/VR gaming zone</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-gem"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Premium Quality Experience</h4>
                            <p>Every service is designed with attention to detail and premium standards</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="why-stats">
                <div class="stat-card">
                    <div class="stat-number">5+</div>
                    <div class="stat-label">Unique Experiences</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Service</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">1st</div>
                    <div class="stat-label">in Kolkata</div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="custom-shape-divider-top-1756199697">
  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" 
       viewBox="0 0 1200 120" preserveAspectRatio="none">
    <rect x="1200" height="3.6"></rect>
    <rect height="3.6"></rect>
    <path d="M0,0V3.6H580.08c11,0,19.92,5.09,19.92,13.2,
             0-8.14,8.88-13.2,19.92-13.2H1200V0Z" 
             class="shape-fill"></path>
  </svg>
  <div class="divider-text">Events at KnockOut</div>
</div>

