<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use OptimistDigital\NovaPageManager\Template;

class SidePage extends Template
{
    public static $type = 'page';
    public static $name = 'side-page';
    public static $seo = true;
    public static $view = null;

    public function fields(Request $request): array
    {
        return [
            Text::make('Title', 'title'),
            Trix::make('About MQA'),
            Text::make('Vission'),
            Text::make('Mission'),
            Trix::make('Contact Us')
        ];
    }
}
