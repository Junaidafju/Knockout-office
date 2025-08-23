<?php
/**
 * Template Name: Menu Page
 * The template for displaying the menu page
 *
 * @package KnockOut
 */

get_header(); ?>

<main id="primary" class="site-main menu-page">


    

    <!-- Mobile Menu Categories -->
    <div class="mobile-menu-categories mobile-only">
        <div class="categories-header">
            <h2 class="categories-title">Our Menu</h2>
            <button class="view-all-btn">View All</button>
        </div>
        <div class="categories-scroll">
            <div class="category-card active" data-category="all">
                <div class="category-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/All-Menu.svg" alt="All Menu">
                </div>
                <span class="category-name">All Menu</span>
            </div>
            <div class="category-card" data-category="vegetarian-starters">
                <div class="category-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Vegetarian-Starters.svg" alt="Vegetarian Starters">
                </div>
                <span class="category-name">Veg Starters</span>
            </div>
            <div class="category-card" data-category="non-veg-starters">
            <div class="category-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Non-Veg-Starters.svg" alt="Non-Veg-Starters">
                </div>
                <span class="category-name">Non-Veg Starters</span>
            </div>
            <div class="category-card" data-category="kolkata-specials">
            <div class="category-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kolkata-Special.svg" alt="Kolkata-Specials">
                </div>
                <span class="category-name">Kolkata Specials</span>
            </div>
            <div class="category-card" data-category="bengaluru-pub">
                <div class="category-image">
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=60&h=60&fit=crop&crop=center" alt="Bengaluru Pub">
                </div>
                <span class="category-name">Bengaluru Pub</span>
            </div>
            <div class="category-card" data-category="indo-chinese">
                <div class="category-image">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=60&h=60&fit=crop&crop=center" alt="Indo-Chinese">
                </div>
                <span class="category-name">Indo-Chinese</span>
            </div>
            <div class="category-card" data-category="tandoori-kebabs">
                <div class="category-image">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=60&h=60&fit=crop&crop=center" alt="Tandoori & Kebabs">
                </div>
                <span class="category-name">Tandoori & Kebabs</span>
            </div>
            <div class="category-card" data-category="burgers-wraps">
                <div class="category-image">
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=60&h=60&fit=crop&crop=center" alt="Burgers & Wraps">
                </div>
                <span class="category-name">Burgers & Wraps</span>
            </div>
            <div class="category-card" data-category="main-course">
                <div class="category-image">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=60&h=60&fit=crop&crop=center" alt="Main Course">
                </div>
                <span class="category-name">Main Course</span>
            </div>
            <div class="category-card" data-category="biryanis">
                <div class="category-image">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=60&h=60&fit=crop&crop=center" alt="Biryanis & Rice">
                </div>
                <span class="category-name">Biryanis & Rice</span>
            </div>
            <div class="category-card" data-category="thalis">
                <div class="category-image">
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=60&h=60&fit=crop&crop=center" alt="Thalis & Combos">
                </div>
                <span class="category-name">Thalis & Combos</span>
            </div>
            <div class="category-card" data-category="beverages">
                <div class="category-image">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=60&h=60&fit=crop&crop=center" alt="Beverages">
                </div>
                <span class="category-name">Beverages</span>
            </div>
            <div class="category-card" data-category="desserts">
                <div class="category-image">
                    <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?w=60&h=60&fit=crop&crop=center" alt="Desserts">
                </div>
                <span class="category-name">Desserts</span>
            </div>
            <div class="category-card" data-category="signature">
                <div class="category-image">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=60&h=60&fit=crop&crop=center" alt="Signature Dishes">
                </div>
                <span class="category-name">Signature Dishes</span>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Items Section -->
    <div class="mobile-menu-items mobile-only">
        <div class="mobile-menu-header">
            <h2 class="mobile-menu-title">All Menu</h2>
        </div>
        <div class="mobile-food-grid">
            <!-- Menu items will be populated from desktop menu data -->
        </div>
    </div>

    <!-- Desktop Menu Hero Section (Hidden on Mobile) -->
    <section class="menu-hero-section desktop-only">
        <div class="menu-hero-background">
            <!-- Video Background -->
            <video class="menu-hero-video" autoplay muted loop playsinline webkit-playsinline preload="metadata">
                <source src="https://res.cloudinary.com/dcvn7lbh6/video/upload/v1754566081/Food_Menu_doapcf.mp4" type="video/mp4">
                <!-- Fallback for browsers that don't support video -->
                <div class="menu-hero-fallback"></div>
            </video>
            <div class="menu-hero-overlay"></div>
        </div>
        <div class="container">
            <div class="menu-hero-content">
                <h1 class="menu-hero-title">
                    <span class="menu-title-line-1">OUR</span>
                    <span class="menu-title-line-2">MENU</span>
                </h1>
                <p class="menu-hero-subtitle">Discover our carefully crafted dishes with authentic flavors</p>
            </div>
        </div>
    </section>

    <!-- Menu Categories Section -->
    <section class="menu-categories-section">
        <div class="container-fluid">
            <!-- Desktop Menu Category Filters (Consistent with Mobile UI) -->
            <div class="desktop-menu-categories desktop-only">
                <div class="desktop-categories-header">
                    <h2 class="desktop-categories-title">Browse Menu Categories</h2>
                </div>
                <div class="desktop-categories-container">
                    <button class="category-nav-arrow category-nav-left" id="categoryNavLeft">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="15,18 9,12 15,6"></polyline>
                        </svg>
                    </button>
                    <div class="desktop-categories-scroll">
                    <div class="desktop-category-card active" data-category="all">
                        <div class="desktop-category-image">
                            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=80&h=80&fit=crop&crop=center" alt="All Menu">
                        </div>
                        <span class="desktop-category-name">All Menu</span>
                    </div>
                    <div class="desktop-category-card" data-category="vegetarian-starters">
                        <div class="desktop-category-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/appetizers.svg" alt="Vegetarian Starters">
                        </div>
                        <span class="desktop-category-name">Veg Starters</span>
                    </div>
                    <div class="desktop-category-card" data-category="non-veg-starters">
                        <div class="desktop-category-image">
                            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=80&h=80&fit=crop&crop=center" alt="Non-Veg Starters">
                        </div>
                        <span class="desktop-category-name">Non-Veg Starters</span>
                    </div>
                    <div class="desktop-category-card" data-category="kolkata-specials">
                        <div class="desktop-category-image">
                            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=80&h=80&fit=crop&crop=center" alt="Kolkata Specials">
                        </div>
                        <span class="desktop-category-name">Kolkata Specials</span>
                    </div>
                    <div class="desktop-category-card" data-category="bengaluru-pub">
                        <div class="desktop-category-image">
                            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=80&h=80&fit=crop&crop=center" alt="Bengaluru Pub">
                        </div>
                        <span class="desktop-category-name">Bengaluru Pub</span>
                    </div>
                    <div class="desktop-category-card" data-category="indo-chinese">
                        <div class="desktop-category-image">
                            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=80&h=80&fit=crop&crop=center" alt="Indo-Chinese">
                        </div>
                        <span class="desktop-category-name">Indo-Chinese</span>
                    </div>
                    <div class="desktop-category-card" data-category="tandoori-kebabs">
                        <div class="desktop-category-image">
                            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=80&h=80&fit=crop&crop=center" alt="Tandoori & Kebabs">
                        </div>
                        <span class="desktop-category-name">Tandoori & Kebabs</span>
                    </div>
                    <div class="desktop-category-card" data-category="burgers-wraps">
                        <div class="desktop-category-image">
                            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=80&h=80&fit=crop&crop=center" alt="Burgers & Wraps">
                        </div>
                        <span class="desktop-category-name">Burgers & Wraps</span>
                    </div>
                    <div class="desktop-category-card" data-category="main-course">
                        <div class="desktop-category-image">
                            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=80&h=80&fit=crop&crop=center" alt="Main Course">
                        </div>
                        <span class="desktop-category-name">Main Course</span>
                    </div>
                    <div class="desktop-category-card" data-category="biryanis">
                        <div class="desktop-category-image">
                            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=80&h=80&fit=crop&crop=center" alt="Biryanis & Rice">
                        </div>
                        <span class="desktop-category-name">Biryanis & Rice</span>
                    </div>
                    <div class="desktop-category-card" data-category="thalis">
                        <div class="desktop-category-image">
                            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=80&h=80&fit=crop&crop=center" alt="Thalis & Combos">
                        </div>
                        <span class="desktop-category-name">Thalis & Combos</span>
                    </div>
                    <div class="desktop-category-card" data-category="beverages">
                        <div class="desktop-category-image">
                            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=80&h=80&fit=crop&crop=center" alt="Beverages">
                        </div>
                        <span class="desktop-category-name">Beverages</span>
                    </div>
                    <div class="desktop-category-card" data-category="desserts">
                        <div class="desktop-category-image">
                            <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?w=80&h=80&fit=crop&crop=center" alt="Desserts">
                        </div>
                        <span class="desktop-category-name">Desserts</span>
                    </div>
                    <div class="desktop-category-card" data-category="signature">
                        <div class="desktop-category-image">
                            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=80&h=80&fit=crop&crop=center" alt="Signature Dishes">
                        </div>
                        <span class="desktop-category-name">Signature Dishes</span>
                    </div>
                </div>
                <button class="category-nav-arrow category-nav-right" id="categoryNavRight">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9,18 15,12 9,6"></polyline>
                    </svg>
                </button>
            </div>
        </div>

            <!-- Vegetarian Starters -->
            <div class="menu-category" data-category="vegetarian-starters">
                <div class="category-header">
                    <h2 class="category-title">
                        <span class="category-icon">🥗</span>
                        Vegetarian Starters
                    </h2>
                    <p class="category-description">Fresh and flavorful vegetarian appetizers to start your meal</p>
                </div>
                
                <div class="menu-items-grid">
                    <div class="menu-item-card">
                        <div class="menu-item-number">01</div>
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h3 class="menu-item-name">Paneer 65</h3>
                                <div class="menu-item-price">₹280</div>
                            </div>
                            <p class="menu-item-description">Crispy fried paneer cubes with curry leaves & Bengaluru-style spices</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">VEGETARIAN</span>
                                <span class="calories-info">320 cal</span>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">02</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chilli Garlic Mushroom</h3>
                            <p class="menu-item-description">Button mushrooms tossed in spicy Indo-Chinese sauce</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">INDO-CHINESE</span>
                                <span class="calories-info">280 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹260</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">03</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Masala Papad Nachos</h3>
                            <p class="menu-item-description">Crushed papad topped with onions, tomatoes & chutneys</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">STREET FUSION</span>
                                <span class="calories-info">210 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹180</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">04</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Gobi Manchurian (Bangalore Style)</h3>
                            <p class="menu-item-description">Crispy cauliflower in sweet-spicy garlic sauce</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengaluru Pub</span>
                                <span class="calories-info">290 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹240</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">05</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Kolkata Aloo Chop</h3>
                            <p class="menu-item-description">Spiced potato patties coated in breadcrumbs, served with kasundi</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali</span>
                                <span class="calories-info">250 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹200</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">06</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Cheese Lollipop</h3>
                            <p class="menu-item-description">Cheese-stuffed potato balls, deep-fried with sesame crust</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Pub-Style</span>
                                <span class="calories-info">380 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹320</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">07</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Tandoori Soya Chaap</h3>
                            <p class="menu-item-description">Marinated soya chaap grilled in tandoor with mint chutney</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">North Indian</span>
                                <span class="calories-info">310 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹290</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">08</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Mangalorean Goli Baje</h3>
                            <p class="menu-item-description">Deep-fried lentil fritters served with coconut chutney</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">South Indian</span>
                                <span class="calories-info">270 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹220</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">09</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Hara Bhara Kebab</h3>
                            <p class="menu-item-description">Spinach-corn patties with mint dip</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Mughlai</span>
                                <span class="calories-info">220 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹250</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">10</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Pani Puri Shots</h3>
                            <p class="menu-item-description">Deconstructed pani puri with flavored waters & fillings</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Street Food</span>
                                <span class="calories-info">180 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹160</div>
                    </div>
                </div>
            </div>

            <!-- Non-Veg Starters -->
            <div class="menu-category" data-category="non-veg-starters" style="display: none;">
                <div class="category-header">
                    <h2 class="category-title">
                        <span class="category-icon">🍗</span>
                        Non-Vegetarian Starters
                    </h2>
                    <p class="category-description">Delicious meat and seafood appetizers</p>
                </div>
                <div class="menu-items-grid">
                    <div class="menu-item-card">
                        <div class="menu-item-number">01</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chicken 65 (Bangalore Special)</h3>
                            <p class="menu-item-description">Fiery red chicken bites with curry leaves & ginger-garlic paste</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengaluru Pub</span>
                                <span class="calories-info">420 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹320</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">02</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Fish Fry Kolkata Style</h3>
                            <p class="menu-item-description">Bhetki fillets marinated in mustard oil & spices, shallow-fried</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali</span>
                                <span class="calories-info">370 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹380</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">03</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Mutton Kheema Sliders</h3>
                            <p class="menu-item-description">Spiced mutton mince on mini buns with onion rings</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Pub-Style</span>
                                <span class="calories-info">480 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹420</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">04</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Tandoori Jhinga</h3>
                            <p class="menu-item-description">Tiger prawns marinated in yogurt, grilled in tandoor</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Mughlai</span>
                                <span class="calories-info">350 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹480</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">05</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Andhra Chicken Lollipop</h3>
                            <p class="menu-item-description">Succulent chicken wings with fiery Andhra chili glaze</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">South Indian</span>
                                <span class="calories-info">450 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹360</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">06</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Egg Roll Street Style</h3>
                            <p class="menu-item-description">Kolkata-style paratha wrapped with egg, onions & green chutney</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Street Food</span>
                                <span class="calories-info">320 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹180</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">07</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Kerala Pepper Duck</h3>
                            <p class="menu-item-description">Duck pieces roasted with crushed black pepper & coconut</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">South Indian</span>
                                <span class="calories-info">510 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹520</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">08</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chilli Honey Chicken</h3>
                            <p class="menu-item-description">Crispy chicken tossed in sweet-chilli sauce with sesame seeds</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indo-Chinese</span>
                                <span class="calories-info">410 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹340</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">09</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Murg Malai Tikka</h3>
                            <p class="menu-item-description">Creamy chicken tikka skewers with saffron infusion</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">North Indian</span>
                                <span class="calories-info">390 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹380</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">10</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Prawns Ghee Roast</h3>
                            <p class="menu-item-description">Mangalorean-style prawns cooked in ghee & roasted spices</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">South Indian</span>
                                <span class="calories-info">360 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹450</div>
                    </div>
                </div>
            </div>     
       <!-- Kolkata Specials -->
            <div class="menu-category" data-category="kolkata-specials" style="display: none;">
                <div class="category-header">
                    <h2 class="category-title">
                        <span class="category-icon">🏛️</span>
                        Kolkata Specials
                    </h2>
                    <p class="category-description">Authentic Bengali flavors from the City of Joy</p>
                </div>
                <div class="menu-items-grid">
                    <div class="menu-item-card">
                        <div class="menu-item-number">01</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Kathi Roll Platter</h3>
                            <p class="menu-item-description">Flaky parathas stuffed with egg/chicken/paneer, Kolkata street-style</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali Street</span>
                                <span class="calories-info">380 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹220</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">02</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Macher Jhol</h3>
                            <p class="menu-item-description">River fish curry with potatoes & Bengali 5-spice blend</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali</span>
                                <span class="calories-info">340 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹380</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">03</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chingri Malai Curry</h3>
                            <p class="menu-item-description">Tiger prawns in coconut milk gravy with mustard seeds</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali</span>
                                <span class="calories-info">410 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹480</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">04</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Kosha Mangsho</h3>
                            <p class="menu-item-description">Slow-cooked mutton in onion-tomato gravy, served with luchi</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali</span>
                                <span class="calories-info">580 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹520</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">05</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Phuchka Chaat</h3>
                            <p class="menu-item-description">Crisp puris filled with tamarind water, mashed potatoes & chickpeas</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali Street</span>
                                <span class="calories-info">230 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹160</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">06</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Mutton Cutlet</h3>
                            <p class="menu-item-description">Spiced mutton patties coated in breadcrumbs, fried golden</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Colonial Bengali</span>
                                <span class="calories-info">420 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹320</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">07</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Begun Bhaja</h3>
                            <p class="menu-item-description">Thick eggplant slices fried with nigella seeds, served with rice</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali</span>
                                <span class="calories-info">280 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹180</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">08</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Aloo Posto</h3>
                            <p class="menu-item-description">Potatoes cooked in poppy seed paste, tempered with mustard oil</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali</span>
                                <span class="calories-info">310 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹200</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">09</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Rosogolla</h3>
                            <p class="menu-item-description">Bengali cottage cheese dumplings in light sugar syrup</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali Dessert</span>
                                <span class="calories-info">190 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹120</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">10</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Mishti Doi Shots</h3>
                            <p class="menu-item-description">Sweet yogurt in clay cups with caramelized sugar crust</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali Dessert</span>
                                <span class="calories-info">150 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹100</div>
                    </div>
                </div>
            </div>

            <!-- Bengaluru Pub Favorites -->
            <div class="menu-category" data-category="bengaluru-pub" style="display: none;">
                <div class="category-header">
                    <h2 class="category-title">
                        <span class="category-icon">🍺</span>
                        Bengaluru Pub Favorites
                    </h2>
                    <p class="category-description">Pub-style favorites with a Bengaluru twist</p>
                </div>
                <div class="menu-items-grid">
                    <div class="menu-item-card">
                        <div class="menu-item-number">01</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Cheesy Loaded Fries</h3>
                            <p class="menu-item-description">Crispy fries topped with cheese sauce, jalapeños & minced meat</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Pub-Style</span>
                                <span class="calories-info">520 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹280</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">02</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chicken Ghee Roast Pizza</h3>
                            <p class="menu-item-description">Thin crust pizza with Mangalorean chicken ghee roast topping</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Pub-Fusion</span>
                                <span class="calories-info">680 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹420</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">03</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Microbrew Beer Sampler</h3>
                            <p class="menu-item-description">4 local craft beers (IPA, Lager, Wheat, Stout) in 150ml glasses</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Pub-Style</span>
                                <span class="calories-info">180 cal/glass</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹480</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">04</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Butter Chicken Poutine</h3>
                            <p class="menu-item-description">Fries topped with butter chicken gravy, cheese curds & coriander</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indo-Canadian Fusion</span>
                                <span class="calories-info">610 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹360</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">05</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Pulled Pork Burger</h3>
                            <p class="menu-item-description">Slow-cooked pork with BBQ sauce, coleslaw & onion rings</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Pub-Style</span>
                                <span class="calories-info">720 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹480</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">06</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Tandoori Chicken Tacos</h3>
                            <p class="menu-item-description">Soft tacos filled with grilled chicken, mint mayo & pickled veggies</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Mexican-Indian Fusion</span>
                                <span class="calories-info">430 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹320</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">07</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Benne Dosa Nachos</h3>
                            <p class="menu-item-description">Crisp mini benne dosas served with sambar & coconut chutney</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">South Indian Pub</span>
                                <span class="calories-info">370 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹260</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">08</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Veggie Burger</h3>
                            <p class="menu-item-description">Beetroot-potato patty with cheese & spicy mayo on brioche bun</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Café-Style</span>
                                <span class="calories-info">450 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹280</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">09</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chicken Wings (6pcs)</h3>
                            <p class="menu-item-description">Sticky soy-garlic or fiery Andhra pepper glaze</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Pub Classic</span>
                                <span class="calories-info">490 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹380</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">10</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Paneer Tikka Sliders</h3>
                            <p class="menu-item-description">Grilled paneer patties with mint chutney on mini buns</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indian Pub</span>
                                <span class="calories-info">380 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹320</div>
                    </div>
                </div>
            </div>

            <!-- Indo-Chinese Fusion -->
            <div class="menu-category" data-category="indo-chinese" style="display: none;">
                <div class="category-header">
                    <h2 class="category-title">
                        <span class="category-icon">🥢</span>
                        Indo-Chinese Fusion
                    </h2>
                    <p class="category-description">Perfect blend of Indian spices with Chinese techniques</p>
                </div>
                <div class="menu-items-grid">
                    <div class="menu-item-card">
                        <div class="menu-item-number">01</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Hakka Noodles</h3>
                            <p class="menu-item-description">Stir-fried noodles with veggies/chicken, Indo-Chinese spices</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indo-Chinese</span>
                                <span class="calories-info">420 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹240</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">02</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chilli Chicken Dry</h3>
                            <p class="menu-item-description">Crispy chicken tossed with onions, capsicum & green chilies</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Kolkata-Chinese</span>
                                <span class="calories-info">470 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹360</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">03</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Veg Manchurian</h3>
                            <p class="menu-item-description">Fried vegetable balls in garlic-soy gravy</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indo-Chinese</span>
                                <span class="calories-info">380 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹260</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">04</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Schezwan Fried Rice</h3>
                            <p class="menu-item-description">Basmati rice with fiery Schezwan sauce & choice of protein</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indo-Chinese</span>
                                <span class="calories-info">450 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹280</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">05</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">American Chopsuey</h3>
                            <p class="menu-item-description">Crispy noodles topped with sweet-sour veg/chicken gravy</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indo-Chinese</span>
                                <span class="calories-info">510 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹320</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">06</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Ginger Garlic Baby Corn</h3>
                            <p class="menu-item-description">Sautéed baby corn with ginger, garlic & soy sauce</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indo-Chinese</span>
                                <span class="calories-info">290 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹240</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">07</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Drums of Heaven</h3>
                            <p class="menu-item-description">Chicken lollipops in spicy red sauce</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Pub-Chinese</span>
                                <span class="calories-info">530 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹380</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">08</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Paneer Chilli</h3>
                            <p class="menu-item-description">Paneer cubes with bell peppers in tangy sauce</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indo-Chinese</span>
                                <span class="calories-info">410 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹300</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">09</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Thai Curry Momos</h3>
                            <p class="menu-item-description">Steamed dumplings served with red Thai curry</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Fusion</span>
                                <span class="calories-info">320 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹280</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">10</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Singapore Noodles</h3>
                            <p class="menu-item-description">Rice noodles with shrimp, curry powder & veggies</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Singaporean-Chinese</span>
                                <span class="calories-info">460 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹340</div>
                    </div>
                </div>
            </div> 
           <!-- Tandoori & Kebabs -->
            <div class="menu-category" data-category="tandoori-kebabs" style="display: none;">
                <div class="category-header">
                    <h2 class="category-title">
                        <span class="category-icon">🔥</span>
                        Tandoori & Kebabs
                    </h2>
                    <p class="category-description">Smoky grilled delicacies from the tandoor</p>
                </div>
                <div class="menu-items-grid">
                    <div class="menu-item-card">
                        <div class="menu-item-number">01</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chicken Tandoori</h3>
                            <p class="menu-item-description">Chicken marinated in yogurt & spices, grilled to perfection</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">North Indian</span>
                                <span class="calories-info">320 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹380</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">02</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Mutton Seekh Kebab</h3>
                            <p class="menu-item-description">Minced mutton skewers with aromatic spices</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Mughlai</span>
                                <span class="calories-info">280 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹420</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">03</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Paneer Tikka</h3>
                            <p class="menu-item-description">Cubes of paneer grilled with spicy marinade</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Punjabi</span>
                                <span class="calories-info">260 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹320</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">04</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chicken Malai Tikka</h3>
                            <p class="menu-item-description">Creamy chicken tikka with rich dairy marinade</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Awadhi</span>
                                <span class="calories-info">300 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹360</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">05</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Fish Amritsari Tikka</h3>
                            <p class="menu-item-description">Deep-fried spiced fish fillet</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Punjabi</span>
                                <span class="calories-info">340 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹400</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">06</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Hara Bhara Kebab</h3>
                            <p class="menu-item-description">Spinach & peas patties with Indian spices</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">North Indian</span>
                                <span class="calories-info">200 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹240</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">07</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Tandoori Mushroom</h3>
                            <p class="menu-item-description">Mushrooms marinated and grilled with Indian spices</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Fusion</span>
                                <span class="calories-info">180 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹260</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">08</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Kalmi Kebab</h3>
                            <p class="menu-item-description">Chicken leg pieces grilled with rich marinade</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Mughlai</span>
                                <span class="calories-info">330 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹380</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">09</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Soya Chaap Tikka</h3>
                            <p class="menu-item-description">Grilled soya chunks with spicy masala</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Delhi Street</span>
                                <span class="calories-info">290 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹280</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">10</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chicken Reshmi Kebab</h3>
                            <p class="menu-item-description">Creamy, soft chicken kebabs</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Mughlai</span>
                                <span class="calories-info">310 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹360</div>
                    </div>
                </div>
            </div>

            <!-- Burgers, Sandwiches & Wraps -->
            <div class="menu-category" data-category="burgers-wraps" style="display: none;">
                <div class="category-header">
                    <h2 class="category-title">
                        <span class="category-icon">🍔</span>
                        Burgers, Sandwiches & Wraps
                    </h2>
                    <p class="category-description">Hearty handheld delights for every craving</p>
                </div>
                <div class="menu-items-grid">
                    <div class="menu-item-card">
                        <div class="menu-item-number">01</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Classic Veg Burger</h3>
                            <p class="menu-item-description">Veg patty with lettuce, cheese & sauces</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">American</span>
                                <span class="calories-info">400 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹240</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">02</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chicken Grill Burger</h3>
                            <p class="menu-item-description">Grilled chicken breast with mayo & veggies</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">American</span>
                                <span class="calories-info">450 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹320</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">03</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Paneer Wrap</h3>
                            <p class="menu-item-description">Paneer tikka wrapped in rumali roti</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indian Fusion</span>
                                <span class="calories-info">390 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹260</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">04</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chicken Shawarma Wrap</h3>
                            <p class="menu-item-description">Spiced chicken with garlic mayo in pita bread</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Middle Eastern</span>
                                <span class="calories-info">420 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹300</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">05</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Club Sandwich</h3>
                            <p class="menu-item-description">Multi-layered sandwich with veggies, egg & mayo</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">British</span>
                                <span class="calories-info">370 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹280</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">06</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Egg & Mayo Sandwich</h3>
                            <p class="menu-item-description">Boiled egg & creamy mayo in brown bread</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Continental</span>
                                <span class="calories-info">300 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹180</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">07</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Spicy Aloo Tikki Burger</h3>
                            <p class="menu-item-description">Masala potato patty in soft bun</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indian Fusion</span>
                                <span class="calories-info">410 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹220</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">08</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Peri Peri Chicken Wrap</h3>
                            <p class="menu-item-description">Spicy chicken with peri peri sauce in tortilla wrap</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Fusion</span>
                                <span class="calories-info">430 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹320</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">09</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Grilled Veg Sandwich</h3>
                            <p class="menu-item-description">Assorted veggies grilled with cheese</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Continental</span>
                                <span class="calories-info">340 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹240</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">10</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">BBQ Paneer Burger</h3>
                            <p class="menu-item-description">Smoky paneer with BBQ sauce in sesame bun</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Fusion</span>
                                <span class="calories-info">400 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹280</div>
                    </div>
                </div>
            </div>  
          <!-- Main Course -->
            <div class="menu-category" data-category="main-course" style="display: none;">
                <div class="category-header">
                    <h2 class="category-title">
                        <span class="category-icon">🍛</span>
                        Main Course
                    </h2>
                    <p class="category-description">Hearty main dishes from North & South India</p>
                </div>
                <div class="menu-items-grid">
                    <div class="menu-item-card">
                        <div class="menu-item-number">01</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Butter Chicken</h3>
                            <p class="menu-item-description">Creamy tomato-based chicken curry</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Punjabi</span>
                                <span class="calories-info">490 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹380</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">02</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Dal Makhani</h3>
                            <p class="menu-item-description">Slow-cooked lentils with cream & butter</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Punjabi</span>
                                <span class="calories-info">350 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹280</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">03</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Kadhai Paneer</h3>
                            <p class="menu-item-description">Cottage cheese with capsicum in spicy masala</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">North Indian</span>
                                <span class="calories-info">420 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹320</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">04</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chicken Chettinad</h3>
                            <p class="menu-item-description">Fiery chicken curry with coconut & spices</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Tamil Nadu</span>
                                <span class="calories-info">480 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹420</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">05</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Fish Curry Rice</h3>
                            <p class="menu-item-description">Tangy fish curry with steamed rice</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Kerala</span>
                                <span class="calories-info">450 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹380</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">06</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Rogan Josh</h3>
                            <p class="menu-item-description">Mutton cooked in rich Kashmiri gravy</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Kashmiri</span>
                                <span class="calories-info">480 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹520</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">07</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Sambar Rice</h3>
                            <p class="menu-item-description">Lentil-based curry with veggies & rice</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Tamil Nadu</span>
                                <span class="calories-info">320 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹240</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">08</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Palak Paneer</h3>
                            <p class="menu-item-description">Spinach and cottage cheese curry</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">North Indian</span>
                                <span class="calories-info">360 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹300</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">09</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chole Bhature</h3>
                            <p class="menu-item-description">Spiced chickpeas with fried bread</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Delhi Street</span>
                                <span class="calories-info">500 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹280</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">10</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Rajma Chawal</h3>
                            <p class="menu-item-description">Kidney beans curry served with rice</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Punjabi</span>
                                <span class="calories-info">420 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹260</div>
                    </div>
                </div>
            </div>

            <!-- Biryanis & Rice -->
            <div class="menu-category" data-category="biryanis" style="display: none;">
                <div class="category-header">
                    <h2 class="category-title">
                        <span class="category-icon">🍚</span>
                        Biryanis & Rice Dishes
                    </h2>
                    <p class="category-description">Aromatic rice dishes cooked to perfection</p>
                </div>
                <div class="menu-items-grid">
                    <div class="menu-item-card">
                        <div class="menu-item-number">01</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Hyderabadi Chicken Biryani</h3>
                            <p class="menu-item-description">Dum cooked chicken biryani with saffron rice</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Hyderabadi</span>
                                <span class="calories-info">550 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹420</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">02</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Veg Biryani</h3>
                            <p class="menu-item-description">Mixed vegetables cooked in aromatic rice</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Mughlai</span>
                                <span class="calories-info">470 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹320</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">03</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Mutton Biryani</h3>
                            <p class="menu-item-description">Juicy mutton pieces in flavorful basmati rice</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Awadhi</span>
                                <span class="calories-info">600 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹520</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">04</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Egg Biryani</h3>
                            <p class="menu-item-description">Spiced rice with boiled eggs</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">South Indian</span>
                                <span class="calories-info">480 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹280</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">05</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Paneer Biryani</h3>
                            <p class="menu-item-description">Cottage cheese cooked with masala rice</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">North Indian</span>
                                <span class="calories-info">500 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹360</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">06</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Jeera Rice</h3>
                            <p class="menu-item-description">Basmati rice tempered with cumin</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">North Indian</span>
                                <span class="calories-info">320 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹180</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">07</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chicken Fried Rice</h3>
                            <p class="menu-item-description">Indo-Chinese style rice with chicken</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Fusion</span>
                                <span class="calories-info">500 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹320</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">08</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Ghee Rice</h3>
                            <p class="menu-item-description">Rice cooked with ghee and mild spices</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">South Indian</span>
                                <span class="calories-info">350 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹200</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">09</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Pulao</h3>
                            <p class="menu-item-description">Mildly spiced rice with vegetables</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indian</span>
                                <span class="calories-info">380 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹240</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">10</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Veg Fried Rice</h3>
                            <p class="menu-item-description">Rice tossed with veggies and soy sauce</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indo-Chinese</span>
                                <span class="calories-info">440 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹260</div>
                    </div>
                </div>
            </div>

            <!-- Thalis & Combos -->
            <div class="menu-category" data-category="thalis" style="display: none;">
                <div class="category-header">
                    <h2 class="category-title">
                        <span class="category-icon">🍽️</span>
                        Thalis & Combos
                    </h2>
                    <p class="category-description">Complete meal combinations for a satisfying experience</p>
                </div>
                <div class="menu-items-grid">
                    <div class="menu-item-card">
                        <div class="menu-item-number">01</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">North Indian Veg Thali</h3>
                            <p class="menu-item-description">Roti, sabzi, dal, rice, salad, dessert</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Punjabi</span>
                                <span class="calories-info">700 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹380</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">02</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">South Indian Thali</h3>
                            <p class="menu-item-description">Rice, sambar, rasam, curry, pickle, curd</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Tamil Nadu</span>
                                <span class="calories-info">650 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹350</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">03</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Mini Combo Meal</h3>
                            <p class="menu-item-description">Dal, sabzi, rice, roti</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">North Indian</span>
                                <span class="calories-info">550 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹280</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">04</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Non-Veg Combo</h3>
                            <p class="menu-item-description">Chicken curry, rice, roti</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">North Indian</span>
                                <span class="calories-info">700 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹420</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">05</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Rajma Chawal Combo</h3>
                            <p class="menu-item-description">Rajma, rice, salad</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Punjabi</span>
                                <span class="calories-info">600 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹320</div>
                    </div>
                </div>
            </div>  
                      <!-- Beverages -->
            <div class="menu-category" data-category="beverages" style="display: none;">
                <div class="category-header">
                    <h2 class="category-title">
                        <span class="category-icon">🥤</span>
                        Beverages
                    </h2>
                    <p class="category-description">Refreshing drinks, hot beverages, and specialty shakes</p>
                </div>
                <div class="menu-items-grid">
                    <div class="menu-item-card">
                        <div class="menu-item-number">01</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Virgin Mojito</h3>
                            <p class="menu-item-description">Lime, mint, soda & crushed ice</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Western</span>
                                <span class="calories-info">120 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹180</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">02</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Masala Chai</h3>
                            <p class="menu-item-description">Spiced Indian tea with milk</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indian</span>
                                <span class="calories-info">120 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹60</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">03</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Filter Coffee</h3>
                            <p class="menu-item-description">Strong south Indian-style coffee</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">South Indian</span>
                                <span class="calories-info">130 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹80</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">04</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chocolate Shake</h3>
                            <p class="menu-item-description">Milkshake with chocolate syrup</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Western</span>
                                <span class="calories-info">300 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹160</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">05</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Jaljeera Cooler</h3>
                            <p class="menu-item-description">Tangy cumin-flavored chilled drink</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indian</span>
                                <span class="calories-info">80 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹120</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">06</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Cold Coffee</h3>
                            <p class="menu-item-description">Coffee blended with ice & milk</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Western</span>
                                <span class="calories-info">220 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹140</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">07</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Mango Smoothie</h3>
                            <p class="menu-item-description">Mango pulp with yogurt & honey</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indian Fusion</span>
                                <span class="calories-info">280 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹180</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">08</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Buttermilk (Chaas)</h3>
                            <p class="menu-item-description">Spiced yogurt-based drink</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indian</span>
                                <span class="calories-info">90 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹80</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">09</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Rose Milk</h3>
                            <p class="menu-item-description">Chilled milk with rose syrup</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indian</span>
                                <span class="calories-info">180 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹120</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">10</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Soft Drinks</h3>
                            <p class="menu-item-description">Coke, Sprite, Fanta - chilled</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Global</span>
                                <span class="calories-info">150 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹60</div>
                    </div>
                </div>
            </div>

            <!-- Desserts -->
            <div class="menu-category" data-category="desserts" style="display: none;">
                <div class="category-header">
                    <h2 class="category-title">
                        <span class="category-icon">🍰</span>
                        Desserts & Sweet Dishes
                    </h2>
                    <p class="category-description">Sweet endings to your perfect meal</p>
                </div>
                <div class="menu-items-grid">
                    <div class="menu-item-card">
                        <div class="menu-item-number">01</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Gulab Jamun</h3>
                            <p class="menu-item-description">Fried khoya balls in sugar syrup</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">North Indian</span>
                                <span class="calories-info">250 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹120</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">02</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Rasgulla</h3>
                            <p class="menu-item-description">Spongy cottage cheese balls in syrup</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali</span>
                                <span class="calories-info">180 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹100</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">03</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Gajar Halwa</h3>
                            <p class="menu-item-description">Carrot pudding with ghee & dry fruits</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Punjabi</span>
                                <span class="calories-info">300 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹140</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">04</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Ice Cream</h3>
                            <p class="menu-item-description">Vanilla/Chocolate - creamy frozen dessert</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Western</span>
                                <span class="calories-info">220 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹80</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">05</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Rasmalai</h3>
                            <p class="menu-item-description">Soft cheese patties in saffron milk</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali</span>
                                <span class="calories-info">290 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹160</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">06</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Chocolate Brownie</h3>
                            <p class="menu-item-description">Fudgy chocolate cake</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Western</span>
                                <span class="calories-info">360 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹180</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">07</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Kheer</h3>
                            <p class="menu-item-description">Rice pudding with cardamom & nuts</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Indian</span>
                                <span class="calories-info">280 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹120</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">08</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Shahi Tukda</h3>
                            <p class="menu-item-description">Fried bread with rabri & nuts</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Mughlai</span>
                                <span class="calories-info">350 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹160</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">09</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Moong Dal Halwa</h3>
                            <p class="menu-item-description">Lentil dessert made with ghee</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Rajasthani</span>
                                <span class="calories-info">320 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹140</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">10</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Fruit Custard</h3>
                            <p class="menu-item-description">Mixed fruits with sweet custard</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Fusion</span>
                                <span class="calories-info">200 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹120</div>
                    </div>
                </div>
            </div>

            <!-- Signature Dishes -->
            <div class="menu-category" data-category="signature" style="display: none;">
                <div class="category-header">
                    <h2 class="category-title">
                        <span class="category-icon">⭐</span>
                        Signature Dishes
                    </h2>
                    <p class="category-description">Our chef's special fusion creations</p>
                </div>
                <div class="menu-items-grid">
                    <div class="menu-item-card">
                        <div class="menu-item-number">01</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Kolkata-Bangalore Fusion Biryani</h3>
                            <p class="menu-item-description">Hyderabadi dum biryani with Kolkata-style potato & egg</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Hyderabadi + Bengali</span>
                                <span class="calories-info">680 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹520</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">02</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Mustard Mocha Cold Brew</h3>
                            <p class="menu-item-description">Cold coffee with kasundi-infused caramel (Bengali twist)</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali + Café Style</span>
                                <span class="calories-info">120 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹220</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">03</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Rosogolla Cheesecake</h3>
                            <p class="menu-item-description">Baked cheesecake with rosogolla swirls</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali + Western</span>
                                <span class="calories-info">420 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹280</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">04</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Matcha Rasmalai</h3>
                            <p class="menu-item-description">Bengali rasmalai with Japanese matcha syrup</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">Bengali + Japanese</span>
                                <span class="calories-info">290 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹240</div>
                    </div>
                    <div class="menu-item-card">
                        <div class="menu-item-number">05</div>
                        <div class="menu-item-content">
                            <h3 class="menu-item-name">Ghee Roast Bloody Mary</h3>
                            <p class="menu-item-description">Spicy tomato cocktail with ghee roast spice rim</p>
                            <div class="menu-item-meta">
                                <span class="cuisine-tag">South Indian + Western</span>
                                <span class="calories-info">180 cal</span>
                            </div>
                        </div>
                        <div class="menu-item-price">₹320</div>
                    </div>
                </div>
            </div>

            <!-- Modern Call to Action Section -->
            <div class="menu-cta-section">
                <div class="menu-cta-container">
                    <div class="menu-cta-background">
                        <div class="cta-gradient-overlay"></div>
                    </div>
                    <div class="menu-cta-content">
                        <div class="cta-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9,22 9,12 15,12 15,22"></polyline>
                            </svg>
                        </div>
                        <div class="cta-text-content">
                            <h3 class="cta-title">Ready to Experience Amazing Flavors?</h3>
                            <p class="cta-subtitle">Join us for an unforgettable dining experience with authentic fusion cuisine</p>
                        </div>
                        <div class="menu-cta-buttons">
                            <a href="#booking" class="btn btn-cta-primary">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                Reserve Table
                            </a>
                            <a href="tel:+91-9876543210" class="btn btn-cta-secondary">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                                Call Now
                            </a>
                            <a href="#menu" class="btn btn-cta-outline">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.29 1.51 4.04 3 5.5l7 7z"></path>
                                </svg>
                                View Favorites
                            </a>
                        </div>
                        <div class="cta-social-proof">
                            <div class="rating-stars">
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                            </div>
                            <span class="rating-text">4.8/5 • 500+ Happy Customers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Mobile Menu Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Mobile Category Switching
    const categoryCards = document.querySelectorAll('.category-card');
    const menuCategories = document.querySelectorAll('.menu-category');
    const menuItemCards = document.querySelectorAll('.menu-item-card');
    const mobileFoodGrid = document.querySelector('.mobile-food-grid');
    
    // Food images for different categories
    const foodImages = {
        'vegetarian-starters': [
            'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=300&h=200&fit=crop&crop=center'
        ],
        'non-veg-starters': [
            'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=300&h=200&fit=crop&crop=center'
        ],
        'kolkata-specials': [
            'https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=300&h=200&fit=crop&crop=center'
        ],
        'burgers-wraps': [
            'https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=300&h=200&fit=crop&crop=center'
        ],
        'main-course': [
            'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=300&h=200&fit=crop&crop=center'
        ],
        'biryanis': [
            'https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=300&h=200&fit=crop&crop=center'
        ],
        'beverages': [
            'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=300&h=200&fit=crop&crop=center'
        ],
        'desserts': [
            'https://images.unsplash.com/photo-1565958011703-44f9829ba187?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=300&h=200&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=300&h=200&fit=crop&crop=center'
        ]
    };
    
    // Function to populate mobile food grid
    function populateMobileFoodGrid(category = 'all') {
        if (!mobileFoodGrid) return;
        
        mobileFoodGrid.innerHTML = '';
        
        // Update mobile menu title
        const mobileMenuTitle = document.querySelector('.mobile-menu-title');
        if (mobileMenuTitle) {
            if (category === 'all') {
                mobileMenuTitle.textContent = 'All Menu';
            } else {
                const categoryCard = document.querySelector(`.category-card[data-category="${category}"]`);
                if (categoryCard) {
                    const categoryName = categoryCard.querySelector('.category-name').textContent;
                    mobileMenuTitle.textContent = categoryName;
                }
            }
        }
        
        let itemsToShow = [];
        
        if (category === 'all') {
            // Show all menu items
            menuItemCards.forEach(card => {
                itemsToShow.push(card);
            });
        } else {
            // Show items from specific category
            const categoryContainer = document.querySelector(`.menu-category[data-category="${category}"]`);
            if (categoryContainer) {
                const categoryItems = categoryContainer.querySelectorAll('.menu-item-card');
                categoryItems.forEach(card => {
                    itemsToShow.push(card);
                });
            }
        }
        
        // Create mobile food cards
        itemsToShow.forEach((item, index) => {
            const itemName = item.querySelector('.menu-item-name').textContent;
            const itemDescription = item.querySelector('.menu-item-description').textContent;
            const itemPrice = item.querySelector('.menu-item-price').textContent;
            const itemCalories = item.querySelector('.calories-info').textContent;
            
            // Get category for image selection
            const categoryContainer = item.closest('.menu-category');
            const itemCategory = categoryContainer ? categoryContainer.getAttribute('data-category') : 'vegetarian-starters';
            
            // Select image based on category
            const categoryImages = foodImages[itemCategory] || foodImages['vegetarian-starters'];
            const imageIndex = index % categoryImages.length;
            const itemImage = categoryImages[imageIndex];
            
            const mobileCard = document.createElement('div');
            mobileCard.className = 'mobile-food-card';
            mobileCard.innerHTML = `
                <div class="mobile-food-image">
                    <img src="${itemImage}" alt="${itemName}">
                    <div class="mobile-food-price">${itemPrice}</div>
                </div>
                <div class="mobile-food-content">
                    <h3 class="mobile-food-name">${itemName}</h3>
                    <p class="mobile-food-description">${itemDescription}</p>
                    <div class="mobile-food-calories">${itemCalories}</div>
                </div>
            `;
            
            mobileFoodGrid.appendChild(mobileCard);
        });
    }
    
    // Initial population
    populateMobileFoodGrid();
    
    categoryCards.forEach(card => {
        card.addEventListener('click', function() {
            // Remove active class from all cards
            categoryCards.forEach(c => c.classList.remove('active'));
            // Add active class to clicked card
            this.classList.add('active');
            
            const category = this.getAttribute('data-category');
            
            // Update mobile food grid
            populateMobileFoodGrid(category);
            
            // Filter menu categories based on category
            menuCategories.forEach(menuCategory => {
                if (category === 'all') {
                    // Show all categories
                    menuCategory.style.display = 'block';
                    menuCategory.style.animation = 'fadeInUp 0.5s ease forwards';
                } else {
                    const categoryData = menuCategory.getAttribute('data-category');
                    if (categoryData === category) {
                        // Show matching category
                        menuCategory.style.display = 'block';
                        menuCategory.style.animation = 'fadeInUp 0.5s ease forwards';
                    } else {
                        // Hide non-matching categories
                        menuCategory.style.display = 'none';
                    }
                }
            });
        });
    });

    // View All Button
    const viewAllBtn = document.querySelector('.view-all-btn');
    
    if (viewAllBtn) {
        viewAllBtn.addEventListener('click', function() {
            // Show all menu categories
            menuCategories.forEach(category => {
                category.style.display = 'block';
                category.style.animation = 'fadeInUp 0.5s ease forwards';
            });
            
            // Reset category selection
            categoryCards.forEach(c => c.classList.remove('active'));
            categoryCards[0].classList.add('active'); // Set "All Menu" as active
            
            // Populate mobile grid with all items
            populateMobileFoodGrid();
            
            // Scroll to menu section
            const menuSection = document.querySelector('.menu-categories-section');
            if (menuSection) {
                menuSection.scrollIntoView({ 
                    behavior: 'smooth', 
                    block: 'start' 
                });
            }
        });
    }

    // Add hover effects for menu item cards
    menuItemCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});

// Initialize Menu Display (Desktop)
document.addEventListener('DOMContentLoaded', function() {
    console.log('Initializing menu display...');
    
    // On page load, ensure "All Menu" is selected and all categories are visible
    const menuCategories = document.querySelectorAll('.menu-category');
    const allMenuButton = document.querySelector('.desktop-category-card[data-category="all"]');
    
    console.log('Found categories to initialize:', menuCategories.length);
    console.log('All menu button found:', !!allMenuButton);
    
    // Show all categories by default
    menuCategories.forEach(cat => {
        cat.style.display = 'block';
        cat.style.animation = 'fadeInUp 0.5s ease forwards';
    });
    
    // Ensure "All Menu" button is active by default
    if (allMenuButton) {
        allMenuButton.classList.add('active');
    }
});
</script>

<script>
// Back to Top Button Functionality
document.addEventListener('DOMContentLoaded', function() {
    const backToTopBtn = document.getElementById('back-to-top');
    
    if (backToTopBtn) {
        // Show button when user scrolls down
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });
        
        // Smooth scroll to top when button is clicked
        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Add hover effect for mobile
        backToTopBtn.addEventListener('touchstart', function() {
            this.style.transform = 'translateY(-3px) scale(1.05)';
        });
        
        backToTopBtn.addEventListener('touchend', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    }
});

// Desktop Category Arrow Navigation
document.addEventListener('DOMContentLoaded', function() {
    const leftArrow = document.getElementById('categoryNavLeft');
    const rightArrow = document.getElementById('categoryNavRight');
    const categoriesContainer = document.querySelector('.desktop-categories-scroll');
    const categoryCards = document.querySelectorAll('.desktop-category-card');
    
    if (!leftArrow || !rightArrow || !categoriesContainer) return;
    
    let currentIndex = 0;
    const cardWidth = 140; // Approximate width of each card including gap
    const visibleCards = Math.floor(categoriesContainer.offsetWidth / cardWidth);
    const maxIndex = Math.max(0, categoryCards.length - visibleCards);
    
    function updateArrowStates() {
        leftArrow.classList.toggle('disabled', currentIndex === 0);
        rightArrow.classList.toggle('disabled', currentIndex >= maxIndex);
    }
    
    function scrollToIndex(index) {
        const scrollAmount = index * cardWidth;
        categoriesContainer.scrollTo({
            left: scrollAmount,
            behavior: 'smooth'
        });
        currentIndex = index;
        updateArrowStates();
    }
    
    leftArrow.addEventListener('click', function() {
        if (currentIndex > 0) {
            scrollToIndex(currentIndex - 1);
        }
    });
    
    rightArrow.addEventListener('click', function() {
        if (currentIndex < maxIndex) {
            scrollToIndex(currentIndex + 1);
        }
    });
    
    // Initialize arrow states
    updateArrowStates();
    
    // Update on window resize
    window.addEventListener('resize', function() {
        const newVisibleCards = Math.floor(categoriesContainer.offsetWidth / cardWidth);
        const newMaxIndex = Math.max(0, categoryCards.length - newVisibleCards);
        if (currentIndex > newMaxIndex) {
            scrollToIndex(newMaxIndex);
        } else {
            updateArrowStates();
        }
    });
    
    // Add click functionality to desktop category cards
    categoryCards.forEach(card => {
        card.addEventListener('click', function() {
            console.log('Desktop category clicked:', this.getAttribute('data-category'));
            
            // Remove active class from all cards
            categoryCards.forEach(c => c.classList.remove('active'));
            // Add active class to clicked card
            this.classList.add('active');
            
            // Get category and filter menu items
            const category = this.getAttribute('data-category');
            const menuCategories = document.querySelectorAll('.menu-category');
            
            console.log('Found menu categories:', menuCategories.length);
            
            menuCategories.forEach(menuCategory => {
                if (category === 'all') {
                    // Show all categories
                    menuCategory.style.display = 'block';
                    menuCategory.style.animation = 'fadeInUp 0.5s ease forwards';
                } else {
                    const categoryData = menuCategory.getAttribute('data-category');
                    if (categoryData === category) {
                        // Show matching category
                        menuCategory.style.display = 'block';
                        menuCategory.style.animation = 'fadeInUp 0.5s ease forwards';
                        console.log('Showing category:', categoryData);
                    } else {
                        // Hide non-matching categories
                        menuCategory.style.display = 'none';
                    }
                }
            });
            
            // Scroll to menu section smoothly
            const menuSection = document.querySelector('.menu-categories-section');
            if (menuSection) {
                menuSection.scrollIntoView({ 
                    behavior: 'smooth', 
                    block: 'start' 
                });
            }
        });
    });
});
</script>

<script>
// Remove Audio Visualizer from Menu Page
document.addEventListener('DOMContentLoaded', function() {
    // Remove any existing audio visualizer elements
    const audioVisualizers = document.querySelectorAll('.audio-visualizer, body > div.audio-visualizer');
    audioVisualizers.forEach(function(visualizer) {
        if (visualizer) {
            visualizer.remove();
        }
    });
    
    // Continuously check and remove audio visualizer (in case it's added dynamically)
    const removeVisualizerInterval = setInterval(function() {
        const visualizer = document.querySelector('body > div.audio-visualizer');
        if (visualizer) {
            visualizer.remove();
        }
    }, 100);
    
    // Stop checking after 5 seconds
    setTimeout(function() {
        clearInterval(removeVisualizerInterval);
    }, 5000);
});
</script>

<!-- Back to Top Button -->
<button id="back-to-top" class="back-to-top-btn" aria-label="Back to top">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 4L4 12H9V20H15V12H20L12 4Z" fill="currentColor"/>
    </svg>
</button>

<?php get_footer(); ?>