<?php
/**
 * Template part for displaying the page loader
 *
 * @package KnockOut
 */

?>

<div class="text-loader">
  <svg viewBox="0 0 1200 200" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <!-- Gradient Animation -->
      <linearGradient id="text-gradient" x1="0" y1="0" x2="0" y2="1">
        <stop stop-color="#973BED" offset="0%" />
        <stop stop-color="#b0d136" offset="50%" />
        <stop stop-color="#FFC800" offset="100%" />
        <animateTransform attributeName="gradientTransform"
          type="rotate"
          values="0 0 0; 360 0 0"
          dur="6s"
          repeatCount="indefinite" />
      </linearGradient>
    </defs>

    <!-- KnockOut Text -->
    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" 
          class="knockout-text">K N O C K O U T</text>
  </svg>
</div>
