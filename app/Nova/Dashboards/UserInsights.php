<?php

namespace App\Nova\Dashboards;

use App\Nova\Lenses\MostValuableUsers;
use App\Nova\Metrics\NewUsers;
use App\Nova\Metrics\TotalCourses;
use App\Nova\Metrics\TotalInstitutes;
use App\Nova\Metrics\TotalPosts;
use Laravel\Nova\Dashboard;
use App\Nova\Metrics\TotalUsers;
use App\Nova\Metrics\UsersOverTime;

class UserInsights extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new TotalUsers,
            //new NewUsers,
            new TotalInstitutes(),
            new TotalCourses(),
            new TotalPosts(),
            //new Lenses\MostValuableUsers,
            //new MostValuableUsers,
        ];
    }

    /**
     * Get the URI key for the dashboard.
     *
     * @return string
     */
    public static function uriKey()
    {
        return 'user-insights';
    }
}
