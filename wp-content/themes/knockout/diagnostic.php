<?php
/**
 * Diagnostic script for KnockOut Theme
 * This script helps identify content rendering issues
 * 
 * Usage: Add ?diagnostic=1 to your URL to see diagnostic information
 */

if (isset($_GET['diagnostic']) && WP_DEBUG) {
    ?>
    <style>
        .diagnostic-panel {
            position: fixed;
            top: 0;
            right: 0;
            width: 300px;
            height: 100vh;
            background: #000;
            color: #0f0;
            padding: 20px;
            font-family: monospace;
            font-size: 12px;
            z-index: 9999;
            overflow-y: auto;
            border-left: 2px solid #0f0;
        }
        .diagnostic-section {
            margin-bottom: 20px;
            border-bottom: 1px solid #333;
            padding-bottom: 10px;
        }
        .diagnostic-title {
            color: #b0d136;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .diagnostic-item {
            margin: 3px 0;
        }
        .status-ok { color: #0f0; }
        .status-error { color: #f00; }
        .status-warning { color: #ff0; }
    </style>
    <div class="diagnostic-panel">
        <div class="diagnostic-title">KnockOut Theme Diagnostics</div>
        
        <div class="diagnostic-section">
            <div class="diagnostic-title">Template Files</div>
            <?php
            $template_parts = [
                'hero' => 'template-parts/hero.php',
                'sports-marquee' => 'template-parts/sports-marquee.php',
                'about' => 'template-parts/about.php',
                'services' => 'template-parts/services.php',
                'events' => 'template-parts/events.php',
                'gallery' => 'template-parts/gallery.php',
                'contact' => 'template-parts/contact.php',
            ];
            
            foreach ($template_parts as $name => $path) {
                $full_path = get_template_directory() . '/' . $path;
                $status = file_exists($full_path) ? 'status-ok' : 'status-error';
                $status_text = file_exists($full_path) ? '✓' : '✗';
                echo "<div class='diagnostic-item $status'>$status_text $name: $path</div>";
            }
            ?>
        </div>
        
        <div class="diagnostic-section">
            <div class="diagnostic-title">CSS Files</div>
            <?php
            $css_files = [
                'style.css',
                'assets/css/animations.css',
                'assets/css/neon-theme.css',
                'assets/css/marquee.css',
                'assets/css/fluid-responsive-menu.css',
                'assets/css/experience-section.css',
                'assets/css/about.css',
            ];
            
            foreach ($css_files as $css) {
                $full_path = get_template_directory() . '/' . $css;
                $status = file_exists($full_path) ? 'status-ok' : 'status-error';
                $status_text = file_exists($full_path) ? '✓' : '✗';
                echo "<div class='diagnostic-item $status'>$status_text $css</div>";
            }
            ?>
        </div>
        
        <div class="diagnostic-section">
            <div class="diagnostic-title">JavaScript Files</div>
            <?php
            $js_files = [
                'js/navigation.js',
                'js/front-page.js',
                'js/hero-video.js',
                'js/neon-effects.js',
                'js/marquee-effects.js',
            ];
            
            foreach ($js_files as $js) {
                $full_path = get_template_directory() . '/' . $js;
                $status = file_exists($full_path) ? 'status-ok' : 'status-error';
                $status_text = file_exists($full_path) ? '✓' : '✗';
                echo "<div class='diagnostic-item $status'>$status_text $js</div>";
            }
            ?>
        </div>
        
        <div class="diagnostic-section">
            <div class="diagnostic-title">WordPress Info</div>
            <div class="diagnostic-item status-ok">Theme: <?php echo wp_get_theme()->get('Name'); ?></div>
            <div class="diagnostic-item status-ok">Version: <?php echo wp_get_theme()->get('Version'); ?></div>
            <div class="diagnostic-item status-ok">WP Version: <?php echo get_bloginfo('version'); ?></div>
            <div class="diagnostic-item status-ok">PHP Version: <?php echo PHP_VERSION; ?></div>
            <div class="diagnostic-item <?php echo is_front_page() ? 'status-ok' : 'status-warning'; ?>">
                Is Front Page: <?php echo is_front_page() ? 'Yes' : 'No'; ?>
            </div>
        </div>
        
        <div class="diagnostic-section">
            <div class="diagnostic-title">Current Template</div>
            <div class="diagnostic-item status-ok"><?php echo basename(get_page_template()); ?></div>
        </div>
        
        <div class="diagnostic-section">
            <div class="diagnostic-title">Query Info</div>
            <div class="diagnostic-item">Menu Query: <?php echo get_query_var('knockout_menu') ? 'Active' : 'Inactive'; ?></div>
            <div class="diagnostic-item">Current URL: <?php echo $_SERVER['REQUEST_URI']; ?></div>
        </div>
        
        <div class="diagnostic-section">
            <div class="diagnostic-title">Actions</div>
            <div class="diagnostic-item">
                <a href="<?php echo add_query_arg('flush_rewrite', '1'); ?>" style="color: #b0d136;">
                    Flush Rewrite Rules
                </a>
            </div>
            <div class="diagnostic-item">
                <a href="<?php echo remove_query_arg('diagnostic'); ?>" style="color: #b0d136;">
                    Hide Diagnostics
                </a>
            </div>
        </div>
    </div>
    
    <script>
        console.log('KnockOut Theme Diagnostics Active');
        
        // Check for JavaScript errors
        window.addEventListener('error', function(e) {
            console.error('JavaScript Error:', e.error);
        });
        
        // Check if all required elements are present
        document.addEventListener('DOMContentLoaded', function() {
            const requiredElements = [
                '.hero-section',
                '.sports-marquee',
                '.about-wrapper',
                '.services-wrapper',
                '.events-wrapper',
                '.gallery-wrapper',
                '.contact-wrapper'
            ];
            
            requiredElements.forEach(selector => {
                const element = document.querySelector(selector);
                if (element) {
                    console.log('✓ Found:', selector);
                } else {
                    console.warn('✗ Missing:', selector);
                }
            });
        });
    </script>
    <?php
}

// Handle flush rewrite rules
if (isset($_GET['flush_rewrite']) && WP_DEBUG) {
    flush_rewrite_rules();
    wp_redirect(remove_query_arg('flush_rewrite'));
    exit;
}
?>
