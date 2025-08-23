<?php
/**
 * Template part for displaying the menu section
 *
 * @package KnockOut
 */

?>

<section class="menu-section" id="menu">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Menu</h2>
            <p class="section-subtitle">Delicious food and refreshing drinks</p>
        </div>
        
        <div class="menu-categories">
            <?php
            // Get menu categories (you can customize this based on your needs)
            $menu_categories = array(
                'appetizers' => array(
                    'title' => 'Appetizers',
                    'icon' => get_template_directory_uri() . '/assets/images/appetizers.svg',
                    'items' => array(
                        array('name' => 'Loaded Nachos', 'price' => '$12.99', 'description' => 'Crispy tortilla chips with cheese, jalapeños, and sour cream'),
                        array('name' => 'Buffalo Wings', 'price' => '$14.99', 'description' => 'Spicy chicken wings with celery and blue cheese dip'),
                        array('name' => 'Mozzarella Sticks', 'price' => '$9.99', 'description' => 'Golden fried mozzarella with marinara sauce'),
                    )
                ),
                'mains' => array(
                    'title' => 'Main Courses',
                    'icon' => get_template_directory_uri() . '/assets/images/Main-Course.svg',
                    'items' => array(
                        array('name' => 'Strike Burger', 'price' => '$16.99', 'description' => 'Double beef patty with cheese, lettuce, tomato, and special sauce'),
                        array('name' => 'Spare Pizza', 'price' => '$18.99', 'description' => 'Wood-fired pizza with pepperoni, mushrooms, and bell peppers'),
                        array('name' => 'Gutter Ball Sandwich', 'price' => '$13.99', 'description' => 'Grilled chicken breast with avocado and bacon'),
                    )
                ),
                'beverages' => array(
                    'title' => 'Beverages',
                    'icon' => get_template_directory_uri() . '/assets/images/Beverages.svg',
                    'items' => array(
                        array('name' => 'Draft Beer', 'price' => '$5.99', 'description' => 'Local craft beer on tap'),
                        array('name' => 'Knockout Cocktail', 'price' => '$8.99', 'description' => 'Our signature mixed drink'),
                        array('name' => 'Soft Drinks', 'price' => '$2.99', 'description' => 'Coca-Cola, Pepsi, Sprite, and more'),
                    )
                )
            );
            
            foreach ($menu_categories as $category_key => $category) :
            ?>
                <div class="menu-category">
                    <h3 class="category-title">
                        <span class="category-icon">
                        <?php if (strpos($category['icon'], '.svg') !== false): ?>
                            <img src="<?php echo esc_url($category['icon']); ?>" alt="<?php echo esc_attr($category['title']); ?> Icon" style="height: 1.5em; width: auto; vertical-align: middle;" />
                        <?php else: ?>
                            <?php echo $category['icon']; ?>
                        <?php endif; ?>
                        </span>
                        <?php echo esc_html($category['title']); ?>
                    </h3>
                    
                    <div class="menu-items">
                        <?php foreach ($category['items'] as $item) : ?>
                            <div class="menu-item">
                                <div class="item-header">
                                    <h4 class="item-name"><?php echo esc_html($item['name']); ?></h4>
                                    <span class="item-price"><?php echo esc_html($item['price']); ?></span>
                                </div>
                                <p class="item-description"><?php echo esc_html($item['description']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>