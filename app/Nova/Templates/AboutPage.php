<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use OptimistDigital\NovaPageManager\Template;
use OptimistDigital\MultiselectField\Multiselect;
use App\Models\PeopleType;

class AboutPage extends Template
{
    public static $type = 'page';
    public static $name = 'about-page';
    public static $seo = true;
    public static $view = 'page.maq';

    public function fields(Request $request): array
    {
        return [
            Text::make('Title', 'title'),
            Trix::make('About MQA'),
            Text::make('Vission'),
            Text::make('Mission'),
            Multiselect::make('PeopleTypes')
                ->options(PeopleType::all()->pluck('name', 'id'))
                ->resolveForPageResponseUsing(function ($value, $templateModel) {
                    return PeopleType::findMany($value);
                })->reorderable(),
            Trix::make('Contact Us')
        ];
    }
}
