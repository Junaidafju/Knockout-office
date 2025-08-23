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
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="icon-location"></i>
                    </div>
                    <h3>Visit Us</h3>
                    <p>RDB Cinemas, Salt Lake,<br>Sector 5, Kolkata, West Bengal "(700135)"</p>
                    <a href="https://maps.google.com" target="_blank" class="btn btn-outline btn-small">Get Directions</a>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="icon-phone"></i>
                    </div>
                    <h3>Call Us</h3>
                    <p><a href="tel:+15551234267">(555) 123-BOWL</a></p>
                    <p class="contact-hours">
                        Mon-Thu: 10 AM - 11 PM<br>
                        Fri-Sat: 10 AM - 1 AM<br>
                        Sun: 12 PM - 10 PM
                    </p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="icon-email"></i>
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