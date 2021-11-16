<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\KeyValue;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use OptimistDigital\NovaPageManager\Template;

class PageWithFaq extends Template
{
    public static $type = 'page';
    public static $name = 'page-with-faq';
    public static $seo = false;
    public static $view = 'page.mnqf';

    public function fields(Request $request): array
    {
        return [
            Text::make('legend'),
            Text::make('Title'),
            Trix::make('Content'),
            Text::make('Faq Heading'),
            KeyValue::make('faq')
        ];
    }
}
