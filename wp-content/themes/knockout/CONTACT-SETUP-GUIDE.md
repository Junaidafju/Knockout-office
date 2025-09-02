# KnockOut Contact Form Setup Guide

## 🎯 Overview
Your contact form has been updated with full email functionality that sends emails to `junaidafju@gmail.com` with professional HTML templates and auto-replies.

## 🔧 Setup for Localhost (Laragon)

### Step 1: Configure Gmail App Password
1. **Enable 2-Factor Authentication** on `junaidafju@gmail.com`
2. **Generate App Password:**
   - Go to [Google Account Security](https://myaccount.google.com/security)
   - Click "2-Step Verification"
   - Scroll down and click "App passwords"
   - Select "Mail" and "Windows Computer"
   - Copy the 16-character password (e.g., `abcd efgh ijkl mnop`)

### Step 2: Configure SMTP Settings
1. **Copy the configuration file:**
   ```bash
   cp smtp-config-example.php smtp-config.php
   ```

2. **Edit `smtp-config.php`:**
   - Replace `your-app-password-here` with your Gmail App Password
   - Save the file

3. **Add to wp-config.php:**
   Add this line to your `wp-config.php` file (before the "stop editing" comment):
   ```php
   require_once(get_template_directory() . '/smtp-config.php');
   ```

### Step 3: Test Email Functionality
1. **Test SMTP Connection:**
   Visit: `http://knockout.test/?test_email=knockout`
   
2. **Test Contact Form:**
   - Go to your contact page: `http://knockout.test/contact/`
   - Fill out and submit the form
   - Check the debug information for success/error messages

## 🚀 Production Setup

### Option 1: Gmail SMTP (Simple but Limited)
```php
// In wp-config.php or environment variables
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_SECURE', 'tls');
define('SMTP_USERNAME', 'junaidafju@gmail.com');
define('SMTP_PASSWORD', 'your-app-password');
define('SMTP_FROM_EMAIL', 'junaidafju@gmail.com');
define('SMTP_FROM_NAME', 'KnockOut Sports Café');
```

### Option 2: Professional Email Service (Recommended)

#### Mailgun (Recommended for WordPress)
```php
define('SMTP_HOST', 'smtp.mailgun.org');
define('SMTP_PORT', 587);
define('SMTP_SECURE', 'tls');
define('SMTP_USERNAME', 'postmaster@yourdomain.com');
define('SMTP_PASSWORD', 'your-mailgun-smtp-password');
```

#### SendGrid
```php
define('SMTP_HOST', 'smtp.sendgrid.net');
define('SMTP_PORT', 587);
define('SMTP_SECURE', 'tls');
define('SMTP_USERNAME', 'apikey');
define('SMTP_PASSWORD', 'your-sendgrid-api-key');
```

## 🛡️ Security Features Implemented

✅ **Nonce Verification** - Prevents CSRF attacks
✅ **Rate Limiting** - 5-minute cooldown between submissions
✅ **Input Sanitization** - All form data is properly sanitized
✅ **Email Validation** - Server-side email format validation
✅ **Spam Protection** - Basic spam prevention measures

## 📧 Email Features

### What Happens When Form is Submitted:
1. **Validation** - Form data is validated
2. **Main Email** - Detailed email sent to `junaidafju@gmail.com`
3. **Auto-Reply** - Thank you email sent to the user
4. **Rate Limiting** - User can't spam the form
5. **Debug Info** - Development feedback (only in localhost)

### Email Templates:
- **Professional HTML design** with your brand colors
- **Mobile-responsive** email layout
- **Includes all form data** with proper formatting
- **Submission details** (timestamp, IP, etc.)

## 🔍 Troubleshooting

### Common Issues:

1. **"Failed to send email"**
   - Check SMTP credentials in `smtp-config.php`
   - Ensure Gmail App Password is correct
   - Check error logs in Laragon

2. **"Security verification failed"**
   - Clear browser cache
   - Ensure nonce field is present in form

3. **Form not submitting**
   - Check browser console for JavaScript errors
   - Verify form action URL is correct

### Debug Tools:

1. **Test SMTP:** `yoursite.com/?test_email=knockout`
2. **WordPress Debug:** Check `wp-content/debug.log`
3. **PHP Errors:** Check Laragon error logs
4. **Form Debug:** Submit form and check debug information

## 📱 Mobile & Desktop Compatibility

✅ **Responsive Design** - Works on all devices
✅ **Touch-Friendly** - Optimized for mobile interaction
✅ **Fast Loading** - Optimized assets and code
✅ **Cross-Browser** - Compatible with all modern browsers

## 🎨 Customization Options

### Email Template Customization:
- Edit `knockout_get_contact_email_template()` in `functions.php`
- Modify `knockout_send_contact_auto_reply()` for auto-reply template

### Form Field Customization:
- Add/remove fields in `template-parts/contact.php`
- Update CSS in `assets/css/contact.css`

### Styling:
- Neon checkbox effects
- Gradient buttons with hover effects
- Lottie animations for contact icons

## 🎯 Next Steps

1. **For Localhost:** Set up Gmail App Password and test
2. **For Production:** Choose professional SMTP service
3. **Optional Enhancements:**
   - Add reCAPTCHA for better spam protection
   - Integrate with CRM systems
   - Add email analytics tracking
   - Set up automated email sequences

---

**Need help?** Check the debug information on your contact page or review the error logs in Laragon.
