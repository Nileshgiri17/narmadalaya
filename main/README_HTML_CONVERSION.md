# PHP to HTML Conversion - Narmadalaya Website

## Overview
The PHP pages have been converted to functional HTML pages with client-side JavaScript to replace server-side functionality.

## Converted Files

### 1. donation_form.html (converted from donation_form.php)
- **Features:**
  - Client-side form validation
  - SweetAlert2 for success/error messages
  - EmailJS integration for sending emails
  - Bootstrap form styling
  - Input masking for phone numbers and PAN card
  - Date picker for date of birth

### 2. contact.html (converted from contact.php)
- **Features:**
  - Client-side form validation
  - EmailJS integration for contact form submissions
  - SweetAlert2 for user feedback
  - Google Maps integration
  - Newsletter subscription form

## Setup Instructions

### 1. EmailJS Configuration
To enable email functionality, you need to set up EmailJS:

1. Go to [EmailJS](https://www.emailjs.com/) and create an account
2. Create a new email service (Gmail, Outlook, etc.)
3. Create email templates for:
   - Donation form submissions
   - Contact form submissions
4. Replace the following placeholders in both HTML files:
   - `YOUR_USER_ID` - Your EmailJS user ID
   - `YOUR_SERVICE_ID` - Your EmailJS service ID
   - `YOUR_TEMPLATE_ID` - Your EmailJS template ID

### 2. File Updates Made
- Updated `index.html` navigation to point to `contact.html` instead of `contact.php`
- Both forms now use HTML5 validation with Bootstrap styling
- Added proper error handling and user feedback

### 3. Features Maintained
- All original styling and layout preserved
- Form validation (client-side instead of server-side)
- Email notifications (via EmailJS instead of PHPMailer)
- Success/error messages
- Responsive design
- Social media links and footer content

### 4. Benefits of HTML Version
- **No server requirements** - Can be hosted on any static hosting service
- **Faster loading** - No server-side processing
- **Better security** - No server-side vulnerabilities
- **Easy maintenance** - Pure HTML/CSS/JavaScript
- **Cost effective** - Can use free static hosting services

### 5. Hosting Options
The HTML version can be hosted on:
- GitHub Pages (free)
- Netlify (free tier available)
- Vercel (free tier available)
- Any web hosting service
- CDN services

### 6. Browser Compatibility
- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile responsive
- Progressive enhancement for older browsers

## Notes
- The original PHP files are preserved
- Database functionality has been replaced with email notifications
- All form data is now sent via email instead of being stored in a database
- For production use, consider implementing a backend service if database storage is required

## Testing
1. Open the HTML files in a web browser
2. Test form submissions (will show success message even without EmailJS setup)
3. Verify all navigation links work correctly
4. Test responsive design on different screen sizes