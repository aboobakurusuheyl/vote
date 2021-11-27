<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use OptimistDigital\NovaPageManager\Template;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;

class PageSimple extends Template
{
    public static $type = 'page';
    public static $name = 'page-simple';
    public static $seo = false;
    public static $view = 'page.page-simple';

    public function fields(Request $request): array
    {
        return [
            Text::make('legend'),
            Text::make('Title'),
            Trix::make('Content'),
        ];
    }
}
