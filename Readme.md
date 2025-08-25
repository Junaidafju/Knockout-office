# KNOCKOUT Sports Cafe - Codebase Index & Documentation

## Project Overview

**KNOCKOUT Sports Cafe** is a modern WordPress-powered website for a bowling alley/sports cafe in Kolkata. The site features a custom-built theme with modern design principles, interactive elements, and a focus on entertainment and sports activities.

### Technology Stack
- **CMS**: WordPress 6.8.2
- **PHP Version**: 7.4+ (Required: 7.2.24+)
- **Database**: MySQL (via Laragon)
- **Server**: Laragon (Local Development)
- **Theme**: Custom "KnockOut" theme built from scratch

## Database Configuration
```php
DB_NAME: 'KnockOut'
DB_USER: 'root'  
DB_PASSWORD: '' (empty)
DB_HOST: 'localhost'
```

## Directory Structure

```
C:\laragon\www\Junaid-KnockOut\
├── wp-admin/                    # WordPress admin interface
├── wp-content/
│   ├── mu-plugins/
│   │   └── force-knockout-theme.php  # Forces KnockOut theme activation
│   ├── plugins/                 # Third-party plugins
│   │   ├── advanced-custom-fields/
│   │   ├── akismet/
│   │   ├── contact-form-7/
│   │   ├── elementor/
│   │   ├── embedpress/
│   │   ├── essential-addons-for-elementor-lite/
│   │   ├── essential-blocks/
│   │   ├── pojo-accessibility/
│   │   ├── rocket-lazy-load/
│   │   ├── royal-elementor-addons/
│   │   ├── templately/
│   │   ├── wp-meteor/
│   │   └── wp-smushit/
│   └── themes/
│       └── knockout/            # Custom theme (main focus)
├── wp-includes/                 # WordPress core files
├── index.php                    # WordPress entry point
├── wp-config.php                # WordPress configuration
├── .htaccess                    # Apache configuration
└── readme.html                  # WordPress readme
```

## Custom Theme: "KnockOut"

### Theme Information
- **Name**: KnockOut
- **Version**: 1.0.0
- **Description**: A custom WordPress theme built from scratch with modern design principles and clean code structure
- **Text Domain**: knockout
- **License**: GPL v2 or later

### Theme Architecture

#### Core PHP Files
```
knockout/
├── 404.php                     # 404 error page
├── archive.php                 # Archive template
├── comments.php                # Comments template
├── footer.php                  # Site footer
├── front-page.php              # Custom homepage template
├── functions.php               # Theme functions and setup
├── header.php                  # Site header
├── index.php                   # Default template
├── page.php                    # Single page template
├── page-about.php              # About page template
├── search.php                  # Search results template
├── searchform.php              # Search form template
├── single.php                  # Single post template
├── style.css                   # Main stylesheet (3,773+ lines)
├── menu.php                    # Menu page template
├── diagnostic.php              # Troubleshooting script
└── flush-rules.php             # Rewrite rules management
```

#### Template Parts (Modular Components)
```
template-parts/
├── about.php                   # About section component
├── booking.php                 # Booking section component
├── contact.php                 # Contact section component
├── content-none.php            # No content found template
├── content-post.php            # Post content template
├── events.php                  # Events carousel component
├── gallery.php                 # Gallery section component
├── hero.php                    # Hero section with video background
├── menu.php                    # Menu section component
├── services.php                # Services section component
├── share-buttons.php           # Social sharing component
└── sports-marquee.php          # Sports activities marquee
```

#### JavaScript Files
```
js/
├── about-animations.js         # About page animations
├── custom.js                   # General custom functions
├── front-page.js               # Homepage interactions & lazy loading
├── hero-video.js               # Hero video management
├── marquee-effects.js          # Scrolling marquee effects
├── navigation.js               # Mobile navigation functionality
├── neon-effects.js             # Neon light effects
└── share-functionality.js      # Social sharing functionality
```

#### CSS Assets
```
assets/css/
├── about.css                   # About page styles
├── animations.css              # Animation definitions
├── experience-section.css      # Services/experience section styles
├── fluid-responsive-menu.css   # Responsive navigation
├── header-mobile.css           # Mobile header styles
├── hero-mobile.css             # Mobile hero section styles
├── marquee.css                 # Marquee animation styles
└── neon-theme.css              # Neon visual effects
```

### Key Features

#### 1. Hero Section
- **Video Background**: Cloudinary-hosted promotional video
- **Fallback Image**: Unsplash bowling image
- **Animated Title**: "KNOCKOUT SPORTS CAFE" with hover effects
- **Action Buttons**: Book Now & View Menu with 3D styling
- **Scroll Indicator**: Animated scroll prompt

#### 2. Navigation System
- **Split Navigation**: Left and right menu areas around centered logo
- **Mobile Responsive**: Hamburger menu for mobile devices
- **Logo Integration**: SVG logo from Cloudinary
- **Fixed Header**: Transparent header with backdrop blur

#### 3. Page Sections
- **Sports Marquee**: Scrolling activities banner
- **About Us**: Company information and vision
- **Services**: Sports and entertainment offerings
- **Events**: Carousel of upcoming DJ parties and events
- **Gallery**: Filtered image gallery
- **Contact**: Contact form and information

#### 4. Interactive Elements
- **Events Carousel**: Horizontal scrolling with navigation arrows
- **Gallery Filters**: Category-based image filtering
- **Lazy Loading**: Performance optimization for images
- **Smooth Scrolling**: Enhanced navigation experience
- **Modal Windows**: Image lightbox functionality

#### 5. Responsive Design
- **Mobile-First**: Optimized for mobile devices
- **Breakpoints**: 480px, 768px, 1024px, 1200px
- **Flexible Grid**: CSS Grid and Flexbox layouts
- **Touch-Friendly**: Optimized for touch interactions

### Design System

#### Colors
- **Primary**: #b0d136 (Lime Green)
- **Secondary**: #FFD700 (Gold)
- **Dark**: #2c3e50, #34495e (Dark Blue/Gray)
- **Accent**: Various neon colors for effects

#### Typography
- **Primary Font**: Poppins (Google Fonts)
- **Fallback**: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto
- **Icon Font**: Font Awesome 6.5.1

#### Layout
- **Container Max-Width**: 1200px
- **Grid System**: CSS Grid with auto-fit columns
- **Spacing**: Consistent rem-based spacing system

### WordPress Integration

#### Menus
- `primary-left`: Left side navigation
- `primary-right`: Right side navigation  
- `mobile`: Mobile hamburger menu
- `footer`: Footer menu

#### Theme Support
- Post thumbnails
- Custom logo
- Custom background
- HTML5 markup
- Title tag management
- Automatic feed links
- Site icon (favicon)

#### Custom Post Types
Currently using standard WordPress posts/pages with custom templates.

### Performance Features

#### Optimization
- **Lazy Loading**: Images load as they enter viewport
- **Minified Assets**: CSS and JS optimization
- **CDN Integration**: Cloudinary for media assets
- **Caching Ready**: Compatible with caching plugins

#### SEO Features
- **Semantic HTML**: Proper heading structure
- **Meta Tags**: WordPress title tag support
- **Image Alt Text**: Accessibility compliant
- **Schema Ready**: Structured for rich snippets

### Plugin Ecosystem

#### Active Plugins
1. **Advanced Custom Fields**: Custom field management
2. **Elementor**: Page builder (if needed)
3. **Contact Form 7**: Contact form handling
4. **WP Smush**: Image optimization
5. **Rocket Lazy Load**: Performance enhancement
6. **Essential Addons for Elementor**: Extended functionality
7. **Royal Elementor Addons**: Additional widgets
8. **WP Meteor**: Performance optimization
9. **Akismet**: Spam protection

### Development Workflow

#### File Organization
- **Modular Structure**: Template parts for reusability
- **Separation of Concerns**: CSS, JS, and PHP properly separated
- **Version Control Ready**: Clean file structure for Git

#### Coding Standards
- **WordPress Coding Standards**: Following WP guidelines
- **Security**: Proper sanitization and validation
- **Documentation**: Inline comments and docblocks
- **Accessibility**: WCAG compliant features

### Customization Points

#### Theme Customizer Integration
- Hero section content
- Colors and branding
- Contact information
- Social media links

#### Developer Hooks
- Custom action hooks for extensibility
- Filter hooks for content modification
- Template hierarchy support

### Browser Support
- **Modern Browsers**: Chrome, Firefox, Safari, Edge
- **Mobile Browsers**: iOS Safari, Chrome Mobile
- **Fallbacks**: Graceful degradation for older browsers

### Known Dependencies

#### External Services
- **Cloudinary**: Media hosting and optimization
- **Google Fonts**: Typography (Poppins, Orbitron)
- **Font Awesome**: Icon library
- **Unsplash**: Fallback images

#### JavaScript Libraries
- **Vanilla JS**: No jQuery dependency for core functionality
- **Lottie**: Animation library for special effects
- **Intersection Observer**: For lazy loading and animations

### Future Enhancement Opportunities

1. **Booking System**: Integration with reservation plugins
2. **E-commerce**: WooCommerce integration for merchandise
3. **Event Management**: Custom post type for events
4. **Member Portal**: User registration and profiles
5. **API Integration**: Social media feeds
6. **Analytics**: Enhanced tracking setup
7. **Multilingual**: WPML/Polylang support

### Security Considerations

- **Input Sanitization**: All user inputs properly sanitized
- **Nonce Verification**: CSRF protection implemented
- **File Permissions**: Proper WordPress file structure
- **Regular Updates**: WordPress and plugin update schedule

### Performance Metrics

#### Current Optimizations
- Gzipped assets
- Optimized images (WebP support ready)
- Minimal HTTP requests
- Efficient CSS/JS loading
- Database query optimization

### Maintenance Notes

#### Regular Tasks
- WordPress core updates
- Plugin updates  
- Theme updates
- Security monitoring
- Performance optimization
- Backup maintenance

#### Development Environment
- **Laragon**: Local development server
- **PHP**: 7.4+ recommended
- **MySQL**: 5.5.5+ required
- **Apache**: Web server with mod_rewrite

---

*Last Updated: January 2025*
*Development Environment: Laragon/Windows*
*WordPress Version: 6.8.2*

# KNOCKOUT Sports Cafe - Codebase Index & Documentation

## Project Overview

**KNOCKOUT Sports Cafe** is a modern WordPress-powered website for a bowling alley/sports cafe in Kolkata. The site features a custom-built theme with modern design principles, interactive elements, and a focus on entertainment and sports activities.

### Technology Stack
- **CMS**: WordPress 6.8.2
- **PHP Version**: 7.4+ (Required: 7.2.24+)
- **Database**: MySQL (via Laragon)
- **Server**: Laragon (Local Development)
- **Theme**: Custom "KnockOut" theme built from scratch

## Database Configuration
```php
DB_NAME: 'KnockOut'
DB_USER: 'root'  
DB_PASSWORD: '' (empty)
DB_HOST: 'localhost'
```

## Directory Structure

```
C:\laragon\www\Junaid-KnockOut\
├── wp-admin/                    # WordPress admin interface
├── wp-content/
│   ├── mu-plugins/
│   │   └── force-knockout-theme.php  # Forces KnockOut theme activation
│   ├── plugins/                 # Third-party plugins
│   │   ├── advanced-custom-fields/
│   │   ├── akismet/
│   │   ├── contact-form-7/
│   │   ├── elementor/
│   │   ├── embedpress/
│   │   ├── essential-addons-for-elementor-lite/
│   │   ├── essential-blocks/
│   │   ├── pojo-accessibility/
│   │   ├── rocket-lazy-load/
│   │   ├── royal-elementor-addons/
│   │   ├── templately/
│   │   ├── wp-meteor/
│   │   └── wp-smushit/
│   └── themes/
│       └── knockout/            # Custom theme (main focus)
├── wp-includes/                 # WordPress core files
├── index.php                    # WordPress entry point
├── wp-config.php                # WordPress configuration
├── .htaccess                    # Apache configuration
└── readme.html                  # WordPress readme
```

## Custom Theme: "KnockOut"

### Theme Information
- **Name**: KnockOut
- **Version**: 1.0.0
- **Description**: A custom WordPress theme built from scratch with modern design principles and clean code structure
- **Text Domain**: knockout
- **License**: GPL v2 or later

### Theme Architecture

#### Core PHP Files
```
knockout/
├── 404.php                     # 404 error page
├── archive.php                 # Archive template
├── comments.php                # Comments template
├── footer.php                  # Site footer
├── front-page.php              # Custom homepage template
├── functions.php               # Theme functions and setup
├── header.php                  # Site header
├── index.php                   # Default template
├── page.php                    # Single page template
├── page-about.php              # About page template
├── search.php                  # Search results template
├── searchform.php              # Search form template
├── single.php                  # Single post template
├── style.css                   # Main stylesheet (3,773+ lines)
├── menu.php                    # Menu page template
├── diagnostic.php              # Troubleshooting script
└── flush-rules.php             # Rewrite rules management
```

#### Template Parts (Modular Components)
```
template-parts/
├── about.php                   # About section component
├── booking.php                 # Booking section component
├── contact.php                 # Contact section component
├── content-none.php            # No content found template
├── content-post.php            # Post content template
├── events.php                  # Events carousel component
├── gallery.php                 # Gallery section component
├── hero.php                    # Hero section with video background
├── menu.php                    # Menu section component
├── services.php                # Services section component
├── share-buttons.php           # Social sharing component
└── sports-marquee.php          # Sports activities marquee
```

#### JavaScript Files
```
js/
├── about-animations.js         # About page animations
├── custom.js                   # General custom functions
├── front-page.js               # Homepage interactions & lazy loading
├── hero-video.js               # Hero video management
├── marquee-effects.js          # Scrolling marquee effects
├── navigation.js               # Mobile navigation functionality
├── neon-effects.js             # Neon light effects
└── share-functionality.js      # Social sharing functionality
```

#### CSS Assets
```
assets/css/
├── about.css                   # About page styles
├── animations.css              # Animation definitions
├── experience-section.css      # Services/experience section styles
├── fluid-responsive-menu.css   # Responsive navigation
├── header-mobile.css           # Mobile header styles
├── hero-mobile.css             # Mobile hero section styles
├── marquee.css                 # Marquee animation styles
└── neon-theme.css              # Neon visual effects
```

### Key Features

#### 1. Hero Section
- **Video Background**: Cloudinary-hosted promotional video
- **Fallback Image**: Unsplash bowling image
- **Animated Title**: "KNOCKOUT SPORTS CAFE" with hover effects
- **Action Buttons**: Book Now & View Menu with 3D styling
- **Scroll Indicator**: Animated scroll prompt

#### 2. Navigation System
- **Split Navigation**: Left and right menu areas around centered logo
- **Mobile Responsive**: Hamburger menu for mobile devices
- **Logo Integration**: SVG logo from Cloudinary
- **Fixed Header**: Transparent header with backdrop blur

#### 3. Page Sections
- **Sports Marquee**: Scrolling activities banner
- **About Us**: Company information and vision
- **Services**: Sports and entertainment offerings
- **Events**: Carousel of upcoming DJ parties and events
- **Gallery**: Filtered image gallery
- **Contact**: Contact form and information

#### 4. Interactive Elements
- **Events Carousel**: Horizontal scrolling with navigation arrows
- **Gallery Filters**: Category-based image filtering
- **Lazy Loading**: Performance optimization for images
- **Smooth Scrolling**: Enhanced navigation experience
- **Modal Windows**: Image lightbox functionality

#### 5. Responsive Design
- **Mobile-First**: Optimized for mobile devices
- **Breakpoints**: 480px, 768px, 1024px, 1200px
- **Flexible Grid**: CSS Grid and Flexbox layouts
- **Touch-Friendly**: Optimized for touch interactions

### WordPress Integration

#### Menus
- `primary-left`: Left side navigation
- `primary-right`: Right side navigation  
- `mobile`: Mobile hamburger menu
- `footer`: Footer menu

#### Theme Support
- Post thumbnails
- Custom logo
- Custom background
- HTML5 markup
- Title tag management
- Automatic feed links
- Site icon (favicon)

### Active Plugins
1. **Advanced Custom Fields**: Custom field management
2. **Elementor**: Page builder (if needed)
3. **Contact Form 7**: Contact form handling
4. **WP Smush**: Image optimization
5. **Rocket Lazy Load**: Performance enhancement
6. **Essential Addons for Elementor**: Extended functionality
7. **Royal Elementor Addons**: Additional widgets
8. **WP Meteor**: Performance optimization
9. **Akismet**: Spam protection

---

## Summary

This is a comprehensive WordPress installation with a custom bowling alley/sports cafe theme. The codebase demonstrates:

- **Modern WordPress Development**: Custom theme with proper WordPress standards
- **Performance Optimization**: Lazy loading, CDN integration, optimized assets
- **Mobile-First Design**: Fully responsive with mobile-specific optimizations  
- **Interactive Features**: Video backgrounds, carousels, filtering, animations
- **Professional Structure**: Modular template parts, organized assets, clean code

The site is designed for a sports entertainment venue with emphasis on bowling, events, dining, and customer engagement.
