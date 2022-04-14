<?php

namespace App\Nova\Templates;

use App\Models\TabPage;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use OptimistDigital\NovaPageManager\Template;
use OptimistDigital\MultiselectField\Multiselect;

class PageTab extends Template
{
    public static $type = 'page';
    public static $name = 'page-tab';
    public static $seo = false;
    public static $view = 'page.page-tab';

    public function fields(Request $request): array
    {
        return [
            Text::make('Title', 'title'),
            Multiselect::make('Tabs')

                ->options(TabPage::all()->pluck('name', 'id'))
                ->resolveForPageResponseUsing(function ($value, $templateModel) {
                    $placeholders = implode(',', array_fill(0, count($value), '?'));
                    return TabPage::whereIn('id', $value)
                        ->orderByRaw("field(id,{$placeholders})", $value)->get();
                    // string for the query);
                    //dd($value, PeopleType::whereIn('id', $value)->get());
                    // return PeopleType::findMany($value);
                })->reorderable(),
        ];
    }
}
