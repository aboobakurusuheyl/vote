<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use OptimistDigital\NovaPageManager\Template;

class Post extends Template
{
    public static $type = 'page';
    public static $name = 'post-list';
    public static $seo = false;
    public static $view = 'page.post-list';

    public function fields(Request $request): array
    {
        return [
            Text::make('Title'),
            Textarea::make('Description')
        ];
    }
}
