<?php

namespace App\Nova\MenuBuilderTypes;

use Illuminate\Support\Facades\DB;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use OptimistDigital\MenuBuilder\MenuItemTypes\MenuItemTextType;

class PageLink extends MenuItemTextType
{
    /**
     * Get menu link name shown in CMS when selecting link type.
     * ie ('Product Link' or 'Image Link').
     *
     * @return string
     **/
    public static function getName(): string
    {
        return 'Page Link';
    }

    public static function getIdentifier(): string
    {
        return 'page-link';
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @return array An array of fields.
     */
    public static function getFields(): array
    {

        return [
            Select::make('page')->options(function () {
                return  DB::table('nova_page_manager_pages')->get()->pluck('name', 'id');
                //return array_filter(user::pluck('name', 'id')->toArray());
            }),

        ];
    }

    /**
     * Get the subtitle value shown in CMS menu items list.
     *
     * @param $value
     * @param $data The data from item fields.
     * @param $locale
     * @return string
     */
    public static function getDisplayValue($value, ?array $data, $locale)
    {
        return $value;
    }

    /**
     * Get the value of the link visible to the front-end.
     *
     * Can be anything. It is up to you how you will handle parsing it.
     *
     * This will only be called when using the nova_get_menu()
     * and nova_get_menus() helpers or when you call formatForAPI()
     * on the Menu model.
     *
     * @param null $value The key from options list that was selected.
     * @param array|null $data The data from item fields.
     * @param $locale
     * @return any
     */
    public static function getValue($value, ?array $data, $locale)
    {
        return $value;
    }

    /**
     * Get data of the link visible to the front-end.
     *
     * Can be anything. It is up to you how you will handle parsing it.
     *
     * This will only be called when using the nova_get_menu()
     * and nova_get_menus() helpers or when you call formatForAPI()
     * on the Menu model.
     *
     * @param null $data Field values
     * @return any
     */
    public static function getData($data = null)
    {

        $data['page'] = nova_get_page($data['page']);
        return $data;
    }
}
