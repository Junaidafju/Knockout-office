<?php
/**
 * Template part for displaying the events section
 *
 * @package KnockOut
 */

?>

<section class="events-section" id="events">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Upcoming Events</h2>
            <p class="section-subtitle">Join us for exciting bowling events and tournaments</p>
        </div>
        
        <div class="events-carousel-wrapper">
            <!-- Navigation Arrows -->
            <button class="carousel-nav carousel-nav-prev" aria-label="Previous events">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="carousel-nav carousel-nav-next" aria-label="Next events">
                <i class="fas fa-chevron-right"></i>
            </button>
            
            <!-- Carousel Container with Fixed Viewport -->
            <div class="events-carousel-container">
                <div class="events-carousel-track">
                    <?php
                    // Featured events with profile images - Extended array for demonstration
                    $events = array(
                        array(
                            'title' => 'DJ Maaru & DJ Rindi',
                            'instructor' => 'Rochelle Fernandez',
                            'description' => 'Tickets available at all Knockout outlets. Free entry for members.',
                            'image' => 'https://img.freepik.com/free-psd/club-dj-party-flyer-social-media-post_505751-3062.jpg',
                            'category' => 'workshop',
                            'date' => '25 Dec 2024',
                            'time' => '10:00 AM'
                        ),
                        array(
                            'title' => 'Green Party',
                            'instructor' => 'Billie Elish',
                            'description' => 'Tickets available at all Knockout outlets. Free entry for members.',
                            'image' => 'https://img.freepik.com/premium-psd/green-party-neon-social-media-post-flyer-template_516218-199.jpg',
                            'category' => 'career',
                            'date' => '28 Dec 2024',
                            'time' => '2:00 PM'
                        ),
                        array(
                            'title' => 'DJ Dinda & DJ Scott',
                            'instructor' => 'Michael Scott',
                            'description' => 'Tickets available at all Knockout outlets. Free entry for members.',
                            'image' => 'https://img.freepik.com/free-psd/saturday-party-promotion-post_505751-5167.jpg?semt=ais_hybrid&w=740&q=80',
                            'category' => 'business',
                            'date' => '30 Dec 2024',
                            'time' => '11:30 AM'
                        ),
                        array(
                            'title' => 'Special Show At Knockout',
                            'instructor' => 'James Fisher',
                            'description' => 'Tickets available at all Knockout outlets. Free entry for members.',
                            'image' => 'https://www.creative-flyers.com/wp-content/uploads/2023/03/DJ-Event-Promo-Design-1.jpg',
                            'category' => 'coding',
                            'date' => '2 Jan 2025',
                            'time' => '4:00 PM'
                        ),
                        array(
                            'title' => 'Party Nights',
                            'instructor' => 'Sao Paulo',
                            'description' => 'Chillout this party night with Sao Paulo',
                            'image' => 'https://img.freepik.com/premium-psd/mix-electro-party-dj-event-flyer-template_951415-802.jpg?semt=ais_hybrid&w=740&q=80',
                            'category' => 'design',
                            'date' => '5 Jan 2025',
                            'time' => '1:00 PM'
                        ),
                        array(
                            'title' => 'Party Nights',
                            'instructor' => 'DJ vega',
                            'description' => 'Deep dive into green party.',
                            'image' => 'https://img.freepik.com/premium-psd/green-party-flyer-social-media-post-web-banner_483912-893.jpg',
                            'category' => 'coding'
                        ),
                        array(
                            'title' => 'DJ Party',
                            'instructor' => 'Mascaken',
                            'description' => 'Free Parking | DJ Party | 25 Dec 2024 | 10:00 AM',
                            'image' => 'https://img.freepik.com/premium-psd/night-dj-party-flyer-social-media-post-with-green-color_507402-362.jpg',
                            'category' => 'marketing'
                        ),
                        array(
                            'title' => 'After Work Party',
                            'instructor' => 'DJ Karibo',
                            'description' => 'Start your weekend journey with night DJ party.',
                            'image' => 'https://img.freepik.com/premium-psd/club-dj-party-flyer-social-media-post_373138-1188.jpg',
                            'category' => 'coding'
                        ),
                        array(
                            'title' => 'Glow Night Party',
                            'instructor' => 'DJ Laotaro',
                            'description' => 'Fre Drinks |DJ Laotaro | 25 Dec 2024 | 10:00 AM',
                            'image' => 'https://i.pinimg.com/736x/30/fb/60/30fb60147586e5657df52d7f19ab5d8c.jpg',
                            'category' => 'creative'
                        )
                    );
                    
                    foreach ($events as $index => $event) :
                    ?>
                        <div class="event-card" data-index="<?php echo $index; ?>">
                            <div class="card-background">
                                <div class="character-image">
                                    <img src="<?php echo esc_url($event['image']); ?>" 
                                         alt="<?php echo esc_attr($event['instructor']); ?>" 
                                         class="instructor-photo"
                                         loading="lazy">
                                </div>
                                
                                <div class="card-content">
                                    <div class="event-footer">
                                        <div class="event-info">
                                            <div class="instructor-name"><?php echo esc_html($event['instructor']); ?></div>
                                            <h3 class="event-title"><?php echo esc_html($event['title']); ?></h3>
                                            <p class="event-description"><?php echo esc_html($event['description']); ?></p>
                                        </div>
                                        <button class="event-details-btn">
                                            Event Details 
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-reflection"></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
        <!-- Carousel Indicators (moved outside wrapper for bottom positioning) -->
        <div class="carousel-indicators">
            <?php for ($i = 0; $i < count($events); $i++) : ?>
                <button class="carousel-indicator <?php echo $i === 0 ? 'active' : ''; ?>" 
                        data-slide="<?php echo $i; ?>"
                        aria-label="Go to slide <?php echo $i + 1; ?>"></button>
            <?php endfor; ?>
        </div>
        
        <div class="events-cta">
            <div class="events-cta-content">
                <h3>Ready to Join Our Events?</h3>
                <p>Don't miss out on these amazing learning opportunities!</p>
                <div class="cta-buttons">
                    <button class="register-now-btn btn btn-primary" onclick="window.location.href='/contact/'">Register Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
