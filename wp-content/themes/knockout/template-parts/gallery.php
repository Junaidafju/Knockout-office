<?php
/**
 * Template part for displaying the gallery section
 *
 * @package KnockOut
 */

?>

<section class="gallery-section" id="gallery">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Gallery</h2>
            <p class="section-subtitle">Take a look at our amazing bowling facility</p>
        </div>
        
        <div class="gallery-filters">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="lanes">Bowling Lanes</button>
            <button class="filter-btn" data-filter="events">Events</button>
            <button class="filter-btn" data-filter="food">Food & Drinks</button>
            <button class="filter-btn" data-filter="facility">Facility</button>
        </div>
        
        <div class="gallery-grid">
            <?php
            // Professional gallery items with neon sports café theme
            $gallery_items = array(
                array(
                    'image' => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop',
                    'title' => 'Neon Bowling Lanes',
                    'category' => 'lanes',
                    'description' => 'Futuristic bowling lanes with LED lighting and digital scoring'
                ),
                array(
                    'image' => 'https://images.unsplash.com/photo-1542751371-adc38448a05e?w=400&h=300&fit=crop',
                    'title' => 'E-Sports Tournament',
                    'category' => 'events',
                    'description' => 'Professional gaming tournaments with live streaming'
                ),
                array(
                    'image' => 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=400&h=300&fit=crop',
                    'title' => 'Cyber Café Menu',
                    'category' => 'food',
                    'description' => 'Gourmet food and energy drinks for gamers'
                ),
                array(
                    'image' => 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400&h=300&fit=crop',
                    'title' => 'Futuristic Interior',
                    'category' => 'facility',
                    'description' => 'State-of-the-art facility with neon ambiance'
                ),
                array(
                    'image' => 'https://images.unsplash.com/photo-1511512578047-dfb367046420?w=400&h=300&fit=crop',
                    'title' => 'VIP Gaming Lounge',
                    'category' => 'lanes',
                    'description' => 'Premium gaming stations with professional setups'
                ),
                array(
                    'image' => 'https://images.unsplash.com/photo-1530103862676-de8c9debad1d?w=400&h=300&fit=crop',
                    'title' => 'Neon Birthday Parties',
                    'category' => 'events',
                    'description' => 'Unforgettable celebrations with neon themes'
                ),
                array(
                    'image' => 'https://images.unsplash.com/photo-1544148103-0773bf10d330?w=400&h=300&fit=crop',
                    'title' => 'Energy Bar',
                    'category' => 'food',
                    'description' => 'Premium energy drinks and gaming fuel'
                ),
                array(
                    'image' => 'https://images.unsplash.com/photo-1511882150382-421056c89033?w=400&h=300&fit=crop',
                    'title' => 'Neon Arcade Zone',
                    'category' => 'facility',
                    'description' => 'Retro and modern arcade games with neon lighting'
                ),
                array(
                    'image' => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop&sat=-50',
                    'title' => 'Cosmic Bowling',
                    'category' => 'lanes',
                    'description' => 'Blacklight bowling with glowing pins and balls'
                ),
                array(
                    'image' => 'https://images.unsplash.com/photo-1542751371-adc38448a05e?w=400&h=300&fit=crop&sat=50',
                    'title' => 'Pro Gaming Stations',
                    'category' => 'facility',
                    'description' => 'High-end gaming PCs with RGB lighting'
                ),
                array(
                    'image' => 'https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?w=400&h=300&fit=crop',
                    'title' => 'Glowing Cocktails',
                    'category' => 'food',
                    'description' => 'Signature cocktails that glow under blacklight'
                ),
                array(
                    'image' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=300&fit=crop',
                    'title' => 'League Championships',
                    'category' => 'events',
                    'description' => 'Competitive bowling and gaming leagues'
                )
            );
            
            foreach ($gallery_items as $index => $item) :
            ?>
                <div class="gallery-item" data-category="<?php echo esc_attr($item['category']); ?>">
                    <div class="gallery-image">
                        <img src="<?php echo esc_url($item['image']); ?>" 
                             alt="<?php echo esc_attr($item['title']); ?>"
                             loading="lazy"
                             class="gallery-image-lazy">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h3><?php echo esc_html($item['title']); ?></h3>
                                <p><?php echo esc_html($item['description']); ?></p>
                                <button class="gallery-zoom" data-image="<?php echo esc_attr($item['image']); ?>">
                                    <i class="icon-zoom"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="gallery-cta">
            <p>Want to see more? Visit us in person!</p>
            <a href="#contact" class="btn btn-primary">Get Directions</a>
        </div>
    </div>
</section>

<!-- Gallery Modal -->
<div class="gallery-modal" id="gallery-modal">
    <div class="modal-overlay"></div>
    <div class="modal-content">
        <button class="modal-close">&times;</button>
        <img src="" alt="" id="modal-image">
        <div class="modal-nav">
            <button class="modal-prev">&larr;</button>
            <button class="modal-next">&rarr;</button>
        </div>
    </div>
</div>