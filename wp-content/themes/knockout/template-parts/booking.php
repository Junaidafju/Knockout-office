<?php
/**
 * Template part for displaying the booking section
 *
 * @package KnockOut
 */

?>

<section class="booking-section" id="booking">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Book Your Lane</h2>
            <p class="section-subtitle">Reserve your bowling experience today</p>
        </div>
        
        <div class="booking-content">
            <div class="booking-form-wrapper">
                <form class="booking-form" id="lane-booking-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="booking-date">Date</label>
                            <input type="date" id="booking-date" name="booking_date" required>
                        </div>
                        <div class="form-group">
                            <label for="booking-time">Time</label>
                            <select id="booking-time" name="booking_time" required>
                                <option value="">Select Time</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="12:00">12:00 PM</option>
                                <option value="13:00">1:00 PM</option>
                                <option value="14:00">2:00 PM</option>
                                <option value="15:00">3:00 PM</option>
                                <option value="16:00">4:00 PM</option>
                                <option value="17:00">5:00 PM</option>
                                <option value="18:00">6:00 PM</option>
                                <option value="19:00">7:00 PM</option>
                                <option value="20:00">8:00 PM</option>
                                <option value="21:00">9:00 PM</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="party-size">Party Size</label>
                            <select id="party-size" name="party_size" required>
                                <option value="">Select Size</option>
                                <option value="1">1 Person</option>
                                <option value="2">2 People</option>
                                <option value="3">3 People</option>
                                <option value="4">4 People</option>
                                <option value="5">5 People</option>
                                <option value="6">6 People</option>
                                <option value="7">7 People</option>
                                <option value="8">8 People</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lane-type">Lane Type</label>
                            <select id="lane-type" name="lane_type" required>
                                <option value="">Select Lane</option>
                                <option value="standard">Standard Lane - $25/hour</option>
                                <option value="premium">Premium Lane - $35/hour</option>
                                <option value="vip">VIP Lane - $50/hour</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="customer-name">Full Name</label>
                            <input type="text" id="customer-name" name="customer_name" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="customer-email">Email</label>
                            <input type="email" id="customer-email" name="customer_email" required>
                        </div>
                        <div class="form-group">
                            <label for="customer-phone">Phone</label>
                            <input type="tel" id="customer-phone" name="customer_phone" required>
                        </div>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="special-requests">Special Requests</label>
                        <textarea id="special-requests" name="special_requests" rows="3" placeholder="Any special requests or notes..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-large">
                        Book Now
                    </button>
                </form>
            </div>
            
            <div class="booking-info">
                <div class="info-card">
                    <h3>Pricing</h3>
                    <ul class="pricing-list">
                        <li>Standard Lane: <span>$25/hour</span></li>
                        <li>Premium Lane: <span>$35/hour</span></li>
                        <li>VIP Lane: <span>$50/hour</span></li>
                        <li>Shoe Rental: <span>$5/person</span></li>
                    </ul>
                </div>
                
                <div class="info-card">
                    <h3>Hours</h3>
                    <ul class="hours-list">
                        <li>Monday - Thursday: <span>10 AM - 11 PM</span></li>
                        <li>Friday - Saturday: <span>10 AM - 1 AM</span></li>
                        <li>Sunday: <span>12 PM - 10 PM</span></li>
                    </ul>
                </div>
                
                <div class="info-card">
                    <h3>Contact</h3>
                    <ul class="contact-list">
                        <li>📞 <span>(555) 123-BOWL</span></li>
                        <li>📧 <span>info@knockout.com</span></li>
                        <li>📍 <span>123 Strike Lane, Bowling City</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>