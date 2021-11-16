<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use OptimistDigital\NovaPageManager\Template;

class Post extends Template
{
    public static $type = 'page';
    public static $name = 'post-list';
    public static $seo = false;
    public static $view = null;

    public function fields(Request $request): array
    {
        return [];
    }
}
