<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Discipline;
use Illuminate\View\View;

class DisciplinesController extends Controller
{
    /**
     * GET /disciplines
     *
     * FA SPORTS — DISCIPLINES
     *
     * HERO
     * STATEMENT
     * GAME EXPLORER
     * PERFORMANCE DEMANDS
     * PRIORITIES
     * GEAR SYSTEM
     * FINAL CTA
     */
    public function index(): View
    {
        /*
        |--------------------------------------------------------------------------
        | DISCIPLINES
        |--------------------------------------------------------------------------
        */

        $disciplines = Discipline::orderBy('sort_order')->get();

        /*
        |--------------------------------------------------------------------------
        | DISCIPLINE STORIES
        |--------------------------------------------------------------------------
        */

        $disciplineStories = Article::disciplineStories()
            ->take(5)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | PERFORMANCE INDICATORS
        |--------------------------------------------------------------------------
        */

        $indicatorKeys = [
            'speed',
            'power',
            'mobility',
            'precision',
            'protection',
            'endurance',
            'control',
        ];

        /*
        |--------------------------------------------------------------------------
        | PERFORMANCE DATA
        |--------------------------------------------------------------------------
        |
        | These values power the "BUILT FOR THE DEMAND" meters.
        |
        | Each discipline gets its own performance profile.
        |
        */

        $disciplineIndicatorData = [];

        foreach ($disciplines as $discipline) {

            $name = strtolower(trim($discipline->name));

            /*
            |--------------------------------------------------------------------------
            | DEFAULT PROFILE
            |--------------------------------------------------------------------------
            */

            $values = [
                'speed'      => 75,
                'power'      => 75,
                'mobility'   => 75,
                'precision'  => 75,
                'protection' => 75,
                'endurance'  => 75,
                'control'    => 75,
            ];

            /*
            |--------------------------------------------------------------------------
            | FOOTBALL
            |--------------------------------------------------------------------------
            */

            if (str_contains($name, 'football') || str_contains($name, 'soccer')) {
                $values = [
                    'speed'      => 94,
                    'power'      => 88,
                    'mobility'   => 96,
                    'precision'  => 91,
                    'protection' => 78,
                    'endurance'  => 92,
                    'control'    => 95,
                ];
            }

            /*
            |--------------------------------------------------------------------------
            | CRICKET
            |--------------------------------------------------------------------------
            */

            elseif (str_contains($name, 'cricket')) {
                $values = [
                    'speed'      => 84,
                    'power'      => 93,
                    'mobility'   => 82,
                    'precision'  => 97,
                    'protection' => 91,
                    'endurance'  => 88,
                    'control'    => 96,
                ];
            }

            /*
            |--------------------------------------------------------------------------
            | BASKETBALL
            |--------------------------------------------------------------------------
            */

            elseif (str_contains($name, 'basketball')) {
                $values = [
                    'speed'      => 96,
                    'power'      => 89,
                    'mobility'   => 98,
                    'precision'  => 92,
                    'protection' => 76,
                    'endurance'  => 94,
                    'control'    => 97,
                ];
            }

            /*
            |--------------------------------------------------------------------------
            | BOXING
            |--------------------------------------------------------------------------
            */

            elseif (str_contains($name, 'boxing')) {
                $values = [
                    'speed'      => 91,
                    'power'      => 98,
                    'mobility'   => 90,
                    'precision'  => 95,
                    'protection' => 99,
                    'endurance'  => 94,
                    'control'    => 97,
                ];
            }

            /*
            |--------------------------------------------------------------------------
            | RUNNING
            |--------------------------------------------------------------------------
            */

            elseif (str_contains($name, 'running')) {
                $values = [
                    'speed'      => 98,
                    'power'      => 81,
                    'mobility'   => 93,
                    'precision'  => 88,
                    'protection' => 84,
                    'endurance'  => 99,
                    'control'    => 95,
                ];
            }

            /*
            |--------------------------------------------------------------------------
            | TRAINING
            |--------------------------------------------------------------------------
            */

            elseif (str_contains($name, 'training')) {
                $values = [
                    'speed'      => 86,
                    'power'      => 94,
                    'mobility'   => 95,
                    'precision'  => 89,
                    'protection' => 91,
                    'endurance'  => 97,
                    'control'    => 94,
                ];
            }

            /*
            |--------------------------------------------------------------------------
            | FITNESS
            |--------------------------------------------------------------------------
            */

            elseif (str_contains($name, 'fitness')) {
                $values = [
                    'speed'      => 82,
                    'power'      => 91,
                    'mobility'   => 94,
                    'precision'  => 87,
                    'protection' => 88,
                    'endurance'  => 98,
                    'control'    => 96,
                ];
            }

            /*
            |--------------------------------------------------------------------------
            | STORE
            |--------------------------------------------------------------------------
            */

            $disciplineIndicatorData[$discipline->id] = $values;
        }

        /*
        |--------------------------------------------------------------------------
        | VIEW
        |--------------------------------------------------------------------------
        */

        return view('disciplines', compact(
            'disciplines',
            'disciplineStories',
            'indicatorKeys',
            'disciplineIndicatorData'
        ));
    }
}