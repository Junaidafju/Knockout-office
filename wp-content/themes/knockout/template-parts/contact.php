<?php
/**
 * Template part for displaying the contact section
 *
 * @package KnockOut
 */

?>

<section class="contact-section" id="contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Contact Us</h2>
            <p class="section-subtitle">Get in touch with us for any questions or special requests</p>
        </div>
        
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-card visit-us">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <h3>Visit Us</h3>
                    <p>RDB Cinemas, Salt Lake,<br>Sector 5, Kolkata, West Bengal "(700135)"</p>
                    <a href="https://maps.google.com" target="_blank" class="btn btn-outline btn-small">Get Directions</a>
                </div>
                
                <div class="contact-card call-us">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                    </div>
                    <h3>Call Us</h3>
                    <p><a href="tel:+15551234267">(555) 123-BOWL</a></p>
                    <p class="contact-hours">
                        Mon-Thu: 10 AM - 11 PM<br>
                        Fri-Sat: 10 AM - 1 AM<br>
                        Sun: 12 PM - 10 PM
                    </p>
                </div>
                
                <div class="contact-card email-us">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <h3>Email Us</h3>
                    <p><a href="mailto:info@knockout.com">info@knockout.com</a></p>
                    <p class="contact-note">We'll respond within 24 hours</p>
                </div>
            </div>
            
            <div class="contact-form-wrapper">
                <form class="contact-form" id="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact-name">Name *</label>
                            <input type="text" id="contact-name" name="contact_name" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-email">Email *</label>
                            <input type="email" id="contact-email" name="contact_email" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact-phone">Phone</label>
                            <input type="tel" id="contact-phone" name="contact_phone">
                        </div>
                        <div class="form-group">
                            <label for="contact-subject">Subject</label>
                            <select id="contact-subject" name="contact_subject">
                                <option value="">Select Subject</option>
                                <option value="booking">Booking Inquiry</option>
                                <option value="event">Event Planning</option>
                                <option value="corporate">Corporate Events</option>
                                <option value="birthday">Birthday Parties</option>
                                <option value="general">General Question</option>
                                <option value="feedback">Feedback</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="contact-message">Message *</label>
                        <textarea id="contact-message" name="contact_message" rows="5" required placeholder="Tell us how we can help you..."></textarea>
                    </div>
                    
                    <div class="form-group full-width">
                        <label class="checkbox-label">
                            <input type="checkbox" name="contact_newsletter">
                            <span class="checkmark"></span>
                            Subscribe to our newsletter for special offers and events
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-large">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
        
        <div class="map-section">
            <div class="map-placeholder">
                <div class="map-content">
                    <h3>Find Us Here</h3>
                     <p>RDB Cinemas, Salt Lake,<br>Sector 5, Kolkata, West Bengal (700135)</p>
                    <p>Easy parking available • Wheelchair accessible</p>
                </div>
                <!-- In a real implementation, you would embed Google Maps or another map service here -->
            </div>
        </div>
    </div>
</section>