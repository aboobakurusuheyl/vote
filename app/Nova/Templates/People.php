<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use OptimistDigital\NovaPageManager\Template;

class People extends Template
{
    public static $type = 'region';
    public static $name = 'people';

    public function fields(Request $request): array
    {
        return [
            Text::make('Name'),
            Text::make('Email')->rules(['email']),
            Text::make('Mobile'),
            Markdown::make('Description')

        ];
    }
}
