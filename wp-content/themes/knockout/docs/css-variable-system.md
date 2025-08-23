# CSS Variable System Documentation

## Overview

The fluid responsive menu system uses a comprehensive CSS variable system with `clamp()` functions to provide seamless scaling across all device breakpoints from mobile (≤480px) to ultra-wide displays (1920px+).

## CSS Variable Categories

### Grid System Variables

```css
:root {
  --grid-columns-mobile: 2;        /* ≤480px */
  --grid-columns-mobile-lg: 3;     /* 481px-639px */
  --grid-columns-tablet: 4;        /* 640px-767px */
  --grid-columns-tablet-lg: 4;     /* 768px-991px */
  --grid-columns-desktop-sm: 5;    /* 992px-1199px */
  --grid-columns-desktop-md: 5;    /* 1200px-1439px */
  --grid-columns-desktop-lg: 5;    /* 1440px-1919px */
  --grid-columns-ultra-wide: 6;    /* 1920px+ */
}
```

### Fluid Spacing with clamp()

```css
:root {
  /* Scales from 1rem (mobile) to 2.5rem (desktop) */
  --card-padding: clamp(1rem, 2.5vw, 2.5rem);
  
  /* Scales from 0.5rem (mobile) to 1.5rem (desktop) */
  --grid-gap: clamp(0.5rem, 1.5vw, 1.5rem);
  
  /* Scales from 2rem (mobile) to 5rem (desktop) */
  --section-padding: clamp(2rem, 5vw, 5rem);
  
  /* Scales from 0.5rem (mobile) to 2rem (desktop) */
  --container-padding: clamp(0.5rem, 2vw, 2rem);
}
```

### Typography Scaling

```css
:root {
  /* Category titles: 1.3rem → 2.5rem */
  --title-size: clamp(1.3rem, 3vw, 2.5rem);
  
  /* Item names: 0.9rem → 1.5rem */
  --item-name-size: clamp(0.9rem, 2vw, 1.5rem);
  
  /* Prices: 1.1rem → 1.8rem */
  --price-size: clamp(1.1rem, 2.5vw, 1.8rem);
  
  /* Descriptions: 0.8rem → 1rem */
  --description-size: clamp(0.8rem, 1.5vw, 1rem);
  
  /* Filter buttons: 0.6rem → 0.9rem */
  --filter-font-size: clamp(0.6rem, 1.2vw, 0.9rem);
  
  /* Icons: 1.8rem → 3rem */
  --icon-size: clamp(1.8rem, 4vw, 3rem);
  
  /* Item numbers: 30px → 50px */
  --item-number-size: clamp(30px, 5vw, 50px);
}
```

### Visual Properties

```css
:root {
  /* Border radius: 10px → 30px */
  --border-radius: clamp(10px, 1.5vw, 30px);
  
  /* Card border radius: 10px → 20px */
  --card-border-radius: clamp(10px, 2vw, 20px);
  
  /* Filter border radius: 15px → 30px */
  --filter-border-radius: clamp(15px, 2vw, 30px);
  
  /* Shadow size: 5px → 20px */
  --shadow-size: clamp(5px, 1vw, 20px);
}
```

### Filter Button Scaling

```css
:root {
  /* Vertical padding: 0.4rem → 1rem */
  --filter-padding-y: clamp(0.4rem, 1vw, 1rem);
  
  /* Horizontal padding: 0.8rem → 2rem */
  --filter-padding-x: clamp(0.8rem, 2vw, 2rem);
}
```

## Mobile Foundation (≤480px)

### Key Features

1. **2-Column Grid Layout**
   ```css
   .menu-items-grid {
     grid-template-columns: repeat(var(--grid-columns-mobile), 1fr);
   }
   ```

2. **Vertical Card Layout**
   ```css
   .menu-item-card {
     flex-direction: column;
     align-items: center;
     text-align: center;
   }
   ```

3. **Touch-Friendly Interactions**
   ```css
   .menu-filter-btn {
     min-height: 44px; /* Apple's recommended touch target */
   }
   ```

4. **Minimal Padding**
   ```css
   .menu-item-card {
     padding: var(--card-padding); /* Scales to 1rem on mobile */
   }
   ```

### Grid System Fallback

For browsers without CSS Grid support:

```css
@supports not (display: grid) {
  .menu-items-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  
  .menu-item-card {
    flex: 1 1 calc(50% - var(--grid-gap));
    max-width: calc(50% - var(--grid-gap));
  }
}
```

## Utility Classes

### Container System

```css
.container-fluid {
  width: 100%;
  max-width: var(--container-max-width);
  margin: 0 auto;
  padding: 0 var(--container-padding);
}
```

### Accessibility

```css
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}
```

## Performance Optimizations

### CSS Containment

```css
.menu-item-card {
  contain: layout style paint;
  will-change: transform;
}
```

### Reduced Motion Support

```css
@media (prefers-reduced-motion: reduce) {
  * {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
  }
}
```

### High Contrast Support

```css
@media (prefers-contrast: high) {
  :root {
    --border-color: #000000;
    --text-secondary: #000000;
    --shadow-color: rgba(0, 0, 0, 0.5);
  }
}
```

## Usage Examples

### Customizing Card Padding

```css
/* Override for specific sections */
.special-section .menu-item-card {
  padding: clamp(0.5rem, 2vw, 2rem);
}
```

### Adding New Breakpoints

```css
/* Add new ultra-ultra-wide breakpoint */
@media (min-width: 2560px) {
  :root {
    --grid-columns-ultra-ultra-wide: 8;
  }
  
  .menu-items-grid {
    grid-template-columns: repeat(var(--grid-columns-ultra-ultra-wide), 1fr);
  }
}
```

### Modifying Typography Scale

```css
/* Increase title scaling range */
:root {
  --title-size: clamp(1.5rem, 4vw, 3rem);
}
```

## Browser Support

- **CSS Grid**: IE 11+ (with fallback)
- **CSS Variables**: IE 11+ (with fallback values)
- **clamp()**: Chrome 79+, Firefox 75+, Safari 13.1+
- **Flexbox**: IE 11+

## Testing Checklist

- [ ] Mobile (320px-480px): 2-column grid, vertical cards
- [ ] Typography remains readable at all sizes
- [ ] Touch targets are minimum 44px
- [ ] Animations respect `prefers-reduced-motion`
- [ ] High contrast mode works properly
- [ ] Fallbacks work in older browsers
- [ ] Performance metrics meet targets (CLS < 0.1)

## Maintenance

### Adding New Variables

1. Define in `:root` with appropriate `clamp()` values
2. Use consistently throughout stylesheet
3. Test across all breakpoints
4. Update documentation

### Modifying Existing Variables

1. Test impact across all components
2. Verify accessibility requirements
3. Check performance impact
4. Update related documentation