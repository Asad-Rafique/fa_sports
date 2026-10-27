<?php

namespace App\Http\Controllers;

use App\Models\CustomizationRequest;
use Illuminate\Http\Request;

class CustomizeController extends Controller
{
    public function index()
    {
        return view('customize');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:30'],

            'selected_sections' => ['required', 'array', 'min:1'],
            'selected_sections.*' => ['in:uniform,shoes,bags,gloves'],

            'customizations' => ['required', 'array'],
        ]);

        $selectedSections = $validated['selected_sections'];

        $customizations = $validated['customizations'];

        $requestRecord = CustomizationRequest::create([
            'selected_sections' => $selectedSections,
            'customizations' => $customizations,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'status' => 'new',
        ]);

        $message = $this->buildWhatsappMessage(
            $selectedSections,
            $customizations,
            $validated['name'],
            $validated['email'],
            $validated['phone']
        );

        $businessNumber = '923128564850';

        $whatsappUrl =
            'whatsapp://send?phone=' .
            $businessNumber .
            '&text=' .
            urlencode($message);

        return response()->json([
            'success' => true,
            'request_id' => $requestRecord->id,
            'whatsapp_url' => $whatsappUrl,
        ]);
    }

    private function buildWhatsappMessage(
        array $selectedSections,
        array $customizations,
        string $name,
        string $email,
        string $phone
    ): string {
        $message = "FA SPORTS CUSTOMIZATION\n";
        $message .= "========================\n\n";

        foreach ($selectedSections as $section) {

            if ($section === 'uniform' && isset($customizations['uniform'])) {
                $data = $customizations['uniform'];

                $message .= "UNIFORM CUSTOMIZATION\n";
                $message .= "--------------------\n";
                $message .= "Category: " . ($data['category'] ?? '') . "\n";
                $message .= "Shirt Color: " . ($data['shirtColor'] ?? '') . "\n";
                $message .= "Trouser Color: " . ($data['trouserColor'] ?? '') . "\n";
                $message .= "Text on Shirt: " . ($data['shirtText'] ?? '') . "\n";
                $message .= "Number: " . ($data['number'] ?? '') . "\n";
                $message .= "Shirt Size: " . ($data['shirtSize'] ?? '') . "\n";
                $message .= "Height: " . ($data['height'] ?? '') . "\n";
                $message .= "Width: " . ($data['width'] ?? '') . "\n";
                $message .= "Sleeve: " . ($data['sleeve'] ?? '') . "\n";
                $message .= "Collar: " . ($data['collar'] ?? '') . "\n";
                $message .= "Trouser Size: " . ($data['trouserSize'] ?? '') . "\n";
                $message .= "Trouser Length: " . ($data['trouserLength'] ?? '') . "\n";
                $message .= "Trouser Width: " . ($data['trouserWidth'] ?? '') . "\n\n";
            }

            if ($section === 'shoes' && isset($customizations['shoes'])) {
                $data = $customizations['shoes'];

                $message .= "SHOES CUSTOMIZATION\n";
                $message .= "------------------\n";
                $message .= "Category: " . ($data['category'] ?? '') . "\n";
                $message .= "Size: " . ($data['size'] ?? '') . "\n";
                $message .= "Color: " . ($data['color'] ?? '') . "\n";
                $message .= "Name / Text: " . ($data['text'] ?? '') . "\n";
                $message .= "Sole Type: " . ($data['sole'] ?? '') . "\n";
                $message .= "Width: " . ($data['width'] ?? '') . "\n\n";
            }

            if ($section === 'bags' && isset($customizations['bags'])) {
                $data = $customizations['bags'];

                $message .= "BAG CUSTOMIZATION\n";
                $message .= "-----------------\n";
                $message .= "Category: " . ($data['category'] ?? '') . "\n";
                $message .= "Size: " . ($data['size'] ?? '') . "\n";
                $message .= "Color: " . ($data['color'] ?? '') . "\n";
                $message .= "Name / Text: " . ($data['text'] ?? '') . "\n";
                $message .= "Compartments: " . ($data['compartments'] ?? '') . "\n";
                $message .= "Strap Style: " . ($data['strap'] ?? '') . "\n\n";
            }

            if ($section === 'gloves' && isset($customizations['gloves'])) {
                $data = $customizations['gloves'];

                $message .= "GLOVE CUSTOMIZATION\n";
                $message .= "------------------\n";
                $message .= "Category: " . ($data['category'] ?? '') . "\n";
                $message .= "Hand: " . ($data['hand'] ?? '') . "\n";
                $message .= "Size: " . ($data['size'] ?? '') . "\n";
                $message .= "Color: " . ($data['color'] ?? '') . "\n";
                $message .= "Wrist Style: " . ($data['wrist'] ?? '') . "\n";
                $message .= "Name / Text: " . ($data['text'] ?? '') . "\n\n";
            }
        }

        $message .= "CUSTOMER DETAILS\n";
        $message .= "----------------\n";
        $message .= "Name: " . $name . "\n";
        $message .= "Email: " . $email . "\n";
        $message .= "Phone / WhatsApp: " . $phone . "\n";

        return $message;
    }
}