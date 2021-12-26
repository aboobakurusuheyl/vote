<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Fields\Text;
use OptimistDigital\NovaPageManager\Template;
use OptimistDigital\MultiselectField\Multiselect;

class FileGroup extends Template
{
    public static $type = 'page';
    public static $name = 'file-group';
    public static $seo = false;
    public static $view = 'page.file-group';

    public function fields(Request $request): array
    {
        return [
            Text::make('Title'),
            Multiselect::make('FileGroup')
                ->options(DB::table('nova_page_manager_pages')->where('template', 'file-list')->get()->pluck('name', 'id'))
                ->resolveForPageResponseUsing(function ($value, $templateModel) {
                    $placeholders = implode(',', array_fill(0, count($value), '?'));

                    return DB::table('nova_page_manager_pages')->whereIn('id', $value)
                        ->orderByRaw("field(id,{$placeholders})", $value)->get();
                    // string for the query);
                    //dd($value, PeopleType::whereIn('id', $value)->get());
                    // return PeopleType::findMany($value);
                })->reorderable(),
        ];
    }
}
