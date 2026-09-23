<?php

// All values below are intentionally left null by default — set the real
// values in your .env file (see keys referenced below). The Connect page
// shows a clear "add this in .env" placeholder wherever a value is missing,
// instead of ever inventing a fake email or phone number.

return [

    'emails' => [
        'general' => env('CONTACT_EMAIL_GENERAL'),
        'business' => env('CONTACT_EMAIL_BUSINESS'),
        'sales' => env('CONTACT_EMAIL_SALES'),
        'oem' => env('CONTACT_EMAIL_OEM'),
    ],

    'phone' => env('CONTACT_PHONE'),
    'whatsapp' => env('CONTACT_WHATSAPP'), // full international number, digits only, e.g. 923001234567

    'location' => [
        'line' => env('CONTACT_LOCATION', 'Sialkot, Pakistan'),
        'map_embed_url' => env('CONTACT_MAP_EMBED_URL'), // optional Google Maps embed src
    ],

    'business_hours' => [
        'weekday' => env('CONTACT_HOURS_WEEKDAY', '9:00 AM – 6:00 PM'),
        'saturday' => env('CONTACT_HOURS_SATURDAY', '10:00 AM – 2:00 PM'),
        'sunday' => env('CONTACT_HOURS_SUNDAY', 'Closed'),
    ],

    'social' => [
        'instagram' => env('CONTACT_SOCIAL_INSTAGRAM'),
        'facebook' => env('CONTACT_SOCIAL_FACEBOOK'),
        'linkedin' => env('CONTACT_SOCIAL_LINKEDIN'),
        'youtube' => env('CONTACT_SOCIAL_YOUTUBE'),
    ],

    // Basic spam protection for the enquiry form
    'honeypot_field' => 'website', // must stay empty; bots that fill every field trip this
    'max_attachment_mb' => 10,

];
