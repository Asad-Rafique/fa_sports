<?php

use App\Http\Controllers\Admin\AdminEnquiryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CraftController;
use App\Http\Controllers\DisciplinesController;
use App\Http\Controllers\GearIndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegacyController;
use App\Http\Controllers\PerformanceGearController;
use App\Http\Controllers\PlaybookController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\TeamLabController;
use App\Http\Controllers\PartnershipRequestController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CustomizeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/performance-gear', [PerformanceGearController::class, 'index'])->name('performance-gear');
Route::get('/disciplines', [DisciplinesController::class, 'index'])->name('disciplines');
Route::get('/team-lab', [TeamLabController::class, 'index'])->name('team-lab');
Route::get('/gear-index', [GearIndexController::class, 'index'])->name('gear-index');
Route::get('/legacy', [LegacyController::class, 'index'])->name('legacy');
Route::get('/playbook', [PlaybookController::class, 'index'])->name('playbook');
Route::get('/craft', [CraftController::class, 'index'])->name('craft');

Route::get('/connect', [ContactController::class, 'index'])->name('connect');
Route::post('/connect', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('connect.store');

Route::get('/request-a-quote', [QuoteController::class, 'index'])->name('quote');
Route::post('/request-a-quote', [QuoteController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('quote.store');

// Protect this group with 'auth' (e.g. Laravel Breeze) once admin login is set up.
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/enquiries', [AdminEnquiryController::class, 'index'])->name('enquiries.index');
    Route::get('/enquiries/{inquiry}', [AdminEnquiryController::class, 'show'])->name('enquiries.show');
    Route::patch('/enquiries/{inquiry}', [AdminEnquiryController::class, 'update'])->name('enquiries.update');
    Route::get('/enquiries/{inquiry}/attachment', [AdminEnquiryController::class, 'downloadAttachment'])->name('enquiries.attachment');
});
Route::get('/partnership', [PartnershipRequestController::class, 'index'])->name('partnership');

Route::post('/partnership', [PartnershipRequestController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('partnership.store');

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');

Route::get('/customize', [CustomizeController::class, 'index'])
    ->name('customize');

Route::post('/customize', [CustomizeController::class, 'store'])
    ->name('customize.store');


Route::get('/essentials/{product}', function ($product) {

    $products = [

        // THE ESSENTIALS
        'cap' => [
            'name' => 'FA SPORTS CAP',
            'category' => 'THE ESSENTIALS / HEADWEAR',
            'image' => 'images/legacy/product-091.jpg',
            'description' => 'A signature sports essential designed to complete your everyday performance identity.',
            'features' => [
                'Sport-inspired everyday design',
                'Clean and distinctive FA identity',
                'Made for everyday styling',
                'Performance-focused aesthetic',
            ],
        ],

        'bag' => [
            'name' => 'FA SPORTS BAG',
            'category' => 'THE ESSENTIALS / EQUIPMENT',
            'image' => 'images/legacy/product-074.jpg',
            'description' => 'Carry your sporting essentials with a design that reflects the identity of FA SPORTS.',
            'features' => [
                'Sport-focused functional design',
                'FA SPORTS signature identity',
                'Designed for everyday gear carrying',
                'Clean athletic styling',
            ],
        ],

        'boxing-gloves' => [
            'name' => 'BOXING GLOVES',
            'category' => 'THE ESSENTIALS / COMBAT',
            'image' => 'images/legacy/product-063.jpg',
            'description' => 'Built around the spirit of combat sports, bringing focus, identity and performance together.',
            'features' => [
                'Combat sports inspired design',
                'Distinctive FA SPORTS identity',
                'Training-focused aesthetic',
                'Made for the fighting spirit',
            ],
        ],
    ];

    // GEAR PRODUCTS
    $gearProducts = [

        // MATCH KIT ARCHIVE
        'match-kit-performance' => [
            'name' => 'PERFORMANCE MATCHWEAR',
            'category' => 'MATCH KIT',
            'image' => 'images/legacy/uniform7.jpg',
            'description' => 'Matchwear engineered around movement, team identity and the demands of competition.',
            'features' => ['Lightweight construction', '4-way movement', 'Performance fit', 'Custom team identity'],
        ],

        'match-kit-identity' => [
            'name' => 'TEAM IDENTITY KIT',
            'category' => 'MATCH KIT',
            'image' => 'images/legacy/uniform9.jpg',
            'description' => 'A team kit built around colour, crest and character.',
            'features' => ['Custom colours', 'Team crest options', 'Performance fabric', 'Match-ready design'],
        ],

        'match-kit-field-ready' => [
            'name' => 'FIELD READY KIT',
            'category' => 'MATCH KIT',
            'image' => 'images/legacy/uniform10.jpg',
            'description' => 'Performance-first construction designed for competition.',
            'features' => ['Athletic fit', 'Lightweight fabric', 'Movement focused', 'Custom design'],
        ],

        'match-kit-details' => [
            'name' => 'THE DETAILS KIT',
            'category' => 'MATCH KIT',
            'image' => 'images/legacy/uniform13.jpg',
            'description' => 'A team uniform where precision details complete the look.',
            'features' => ['Custom detailing', 'Team identity', 'Comfort fit', 'Performance finish'],
        ],

        'match-kit-game-form' => [
            'name' => 'GAME FORM KIT',
            'category' => 'MATCH KIT',
            'image' => 'images/legacy/uniform12.jpg',
            'description' => 'Designed for movement from the first whistle to the last.',
            'features' => ['Flexible construction', 'Breathable fabric', 'Athletic fit', 'Match-day performance'],
        ],

        // FOOTWEAR LAB
        'footwear-049' => [
            'name' => 'GAME READY FOOTWEAR',
            'category' => 'FOOTWEAR',
            'image' => 'images/legacy/product-049.jpg',
            'description' => 'Performance footwear designed for traction, stability and controlled movement.',
            'features' => ['Field traction', 'Stable movement', 'Lightweight feel', 'Performance design'],
        ],

        'footwear-040' => [
            'name' => 'SPEED FORM',
            'category' => 'FOOTWEAR',
            'image' => 'images/legacy/product-040.jpg',
            'description' => 'Lightweight footwear construction designed around fast movement.',
            'features' => ['Lightweight construction', 'Fast movement', 'Athletic support', 'Performance fit'],
        ],

        'footwear-043' => [
            'name' => 'GRIP CONTROL',
            'category' => 'FOOTWEAR',
            'image' => 'images/legacy/product-043.jpg',
            'description' => 'Built for traction, stability and controlled changes of direction.',
            'features' => ['Traction focused', 'Stable support', 'Movement control', 'Athletic design'],
        ],

        // GLOVE ARCHIVE
        'glove-063' => [
            'name' => 'CONTROL SERIES',
            'category' => 'GLOVES',
            'image' => 'images/legacy/product-063.jpg',
            'description' => 'A glove system designed around grip, protection and control.',
            'features' => ['Secure grip', 'Protective construction', 'Controlled handling', 'Performance fit'],
        ],

        'glove-064' => [
            'name' => 'GRIP CORE',
            'category' => 'GLOVES',
            'image' => 'images/legacy/product-064.jpg',
            'description' => 'Built around secure handling and confident contact.',
            'features' => ['Grip focused design', 'Secure handling', 'Comfort fit', 'Performance use'],
        ],

        'glove-059' => [
            'name' => 'FLEX FIT',
            'category' => 'GLOVES',
            'image' => 'images/legacy/product-059.jpg',
            'description' => 'Designed for natural hand movement without losing protection.',
            'features' => ['Flexible fit', 'Hand movement', 'Protective design', 'Comfort focused'],
        ],

        'glove-054' => [
            'name' => 'IMPACT SHIELD',
            'category' => 'GLOVES',
            'image' => 'images/legacy/product-054.jpg',
            'description' => 'Protective gloves designed for demanding moments of play.',
            'features' => ['Impact protection', 'Secure fit', 'Durable construction', 'Performance control'],
        ],

        'glove-055' => [
            'name' => 'PRO LOCK',
            'category' => 'GLOVES',
            'image' => 'images/legacy/product-055.jpg',
            'description' => 'A secure fit engineered around control and performance.',
            'features' => ['Secure fit', 'Grip support', 'Controlled movement', 'Performance design'],
        ],

        // BAG ROOM
        'bag-077' => [
            'name' => 'TEAM HAULER',
            'category' => 'BAGS',
            'image' => 'images/legacy/product-077.jpg',
            'description' => 'A team equipment bag designed to carry match-day essentials.',
            'features' => ['Team storage', 'Match-day use', 'Equipment carry', 'Practical design'],
        ],

        'bag-078' => [
            'name' => 'TRAVEL PACK',
            'category' => 'BAGS',
            'image' => 'images/legacy/product-078.jpg',
            'description' => 'A carry solution built for movement beyond the field.',
            'features' => ['Travel use', 'Equipment storage', 'Easy carry', 'Everyday utility'],
        ],

        'bag-075' => [
            'name' => 'KIT HOLD',
            'category' => 'BAGS',
            'image' => 'images/legacy/product-075.jpg',
            'description' => 'Organized storage for team kits and match essentials.',
            'features' => ['Kit storage', 'Organized carry', 'Team use', 'Practical design'],
        ],

        'bag-074' => [
            'name' => 'GEAR CASE',
            'category' => 'BAGS',
            'image' => 'images/legacy/product-074.jpg',
            'description' => 'Compact equipment carry for everyday sporting essentials.',
            'features' => ['Compact storage', 'Equipment carry', 'Easy handling', 'Everyday use'],
        ],

        'bag-069' => [
            'name' => 'DAILY CARRY',
            'category' => 'BAGS',
            'image' => 'images/legacy/product-069.jpg',
            'description' => 'A practical bag designed for training and everyday use.',
            'features' => ['Training use', 'Everyday carry', 'Equipment storage', 'Functional design'],
        ],

        // PROTECTION SYSTEM
        'protection-081' => [
            'name' => 'HEAD GUARD',
            'category' => 'PROTECTION',
            'image' => 'images/legacy/product-081.jpg',
            'description' => 'Protective head equipment designed around impact and confidence.',
            'features' => ['Head protection', 'Impact focused', 'Protective construction', 'Sport-ready design'],
        ],

        'protection-085' => [
            'name' => 'BODY SHIELD',
            'category' => 'PROTECTION',
            'image' => 'images/legacy/product-085.jpg',
            'description' => 'Protective kit designed to provide coverage during demanding play.',
            'features' => ['Body coverage', 'Protective design', 'Sport use', 'Movement focused'],
        ],

        'protection-089' => [
            'name' => 'HYDRATE READY',
            'category' => 'ACCESSORIES',
            'image' => 'images/legacy/product-089.jpg',
            'description' => 'A field essential designed to stay with the player.',
            'features' => ['Hydration essential', 'Player focused', 'Portable design', 'Training use'],
        ],

        'protection-093' => [
            'name' => 'SECURE FORM',
            'category' => 'PROTECTION',
            'image' => 'images/legacy/product-093.jpg',
            'description' => 'Support equipment for situations where controlled movement matters.',
            'features' => ['Structural support', 'Controlled movement', 'Support focused', 'Practical design'],
        ],

        'protection-095' => [
            'name' => 'GROUND CONTROL',
            'category' => 'TRAINING GEAR',
            'image' => 'images/legacy/product-095.jpg',
            'description' => 'Training protection designed for the training room and field.',
            'features' => ['Training use', 'Ground protection', 'Practical surface', 'Sport focused'],
        ],

        'protection-097' => [
            'name' => 'MOVE SAFE',
            'category' => 'PROTECTION',
            'image' => 'images/legacy/product-097.jpg',
            'description' => 'A carry and protection solution designed to travel with the system.',
            'features' => ['Equipment carry', 'Protective use', 'Portable design', 'Functional construction'],
        ],

        // THE FIVE
        'suit-uniform7' => [
    'name' => 'PERFORMANCE FORM',
    'category' => 'APPAREL',
    'image' => 'images/legacy/uniform7.jpg',
    'description' => 'Performance sportswear designed around movement, team identity and competition.',
    'features' => [
        'Lightweight construction',
        'Performance fit',
        'Movement focused',
        'Custom team identity',
    ],
],
        'suit-uniform1' => [
            'name' => 'TEAM FORM',
            'category' => 'APPAREL',
            'image' => 'images/legacy/uniform1.jpg',
            'description' => 'Teamwear designed to bring players together through a unified identity.',
            'features' => ['Team identity', 'Performance fabric', 'Athletic fit', 'Custom design'],
        ],

        'suit-uniform4' => [
            'name' => 'MATCH READY',
            'category' => 'APPAREL',
            'image' => 'images/legacy/uniform4.jpg',
            'description' => 'Match-ready sportswear designed around movement and performance.',
            'features' => ['Match-day design', 'Athletic fit', 'Movement focused', 'Custom teamwear'],
        ],

        'suit-uniform5' => [
            'name' => 'TRAIN MOVE',
            'category' => 'APPAREL',
            'image' => 'images/legacy/uniform5.jpg',
            'description' => 'Training apparel designed to move with the athlete.',
            'features' => ['Training focused', 'Flexible movement', 'Comfort fit', 'Performance fabric'],
        ],

        'suit-uniform6' => [
            'name' => 'ELITE PERFORM',
            'category' => 'APPAREL',
            'image' => 'images/legacy/uniform6.jpg',
            'description' => 'Elite sportswear designed for athletes who demand performance.',
            'features' => ['Performance construction', 'Athletic fit', 'Team identity', 'Custom options'],
        ],
    ];

    // Combine both product arrays
    $products = array_merge($products, $gearProducts);

    abort_unless(isset($products[$product]), 404);

    return view('essentials-detail', [
        'product' => $products[$product]
    ]);

})->name('essentials.show');



