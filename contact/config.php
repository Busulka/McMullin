<?php

/**
 * REQUIRED SETTINGS
 *
 * You will probably need to change all of these settings for your own site.
 */

// The name and address which should be used for the sender details.
// The name can be anything you want, the address should be something in your own domain. It does not need to exist as a mailbox.
define('CONTACTFORM_FROM_ADDRESS', 'dana871@yandex.ru');
define('CONTACTFORM_FROM_NAME', 'Contact Form on McMullin');

// The name and address to which the contact message should be sent.
// These details should NOT be the same as the sender details.
define('CONTACTFORM_TO_ADDRESS', 'menchi87@gmail.com');
define('CONTACTFORM_TO_NAME', 'Your Name');

// The details of your SMTP service, e.g. Gmail.
define('CONTACTFORM_SMTP_HOSTNAME', 'smtp.yandex.ru');
define('CONTACTFORM_SMTP_USERNAME', 'dana871@yandex.ru');
define('CONTACTFORM_SMTP_PASSWORD', 'offqtekkhcyxfwjd');

// The reCAPTCHA credentials for your site. You can get these at https://www.google.com/recaptcha/admin
define('CONTACTFORM_RECAPTCHA_SITE_KEY', '6LexzRkgAAAAAPuNfcplrrFFrQt1TXRLCjylyMZS');
define('CONTACTFORM_RECAPTCHA_SECRET_KEY', '6LexzRkgAAAAAI1Aslh-eSTSg7l0q4MCUw0rzEf6');

/**
 * Optional Settings
 */

// The debug level for PHPMailer. Default is 0 (off), but can be increased from 1-4 for more verbose logging.
define('CONTACTFORM_PHPMAILER_DEBUG_LEVEL', 0);

// Which SMTP port and encryption type to use. The default is probably fine for most use cases.
define('CONTACTFORM_SMTP_PORT', 465);
define('CONTACTFORM_SMTP_ENCRYPTION', 'ssl');
