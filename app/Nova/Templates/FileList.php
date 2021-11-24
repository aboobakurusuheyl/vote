<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use OptimistDigital\NovaPageManager\Template;

class FileList extends Template
{
    public static $type = 'page';
    public static $name = 'file-list';
    public static $seo = false;
    public static $view = 'page.file-list';

    public function fields(Request $request): array
    {
        return [
            Text::make('Title'),
            Textarea::make('Description')
        ];
    }
}
