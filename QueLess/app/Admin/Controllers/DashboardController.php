<?php
namespace App\Admin\Controllers;

use App\Models\Service;
use App\Models\User;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Layout\Column;
use OpenAdmin\Admin\Layout\Content;
use OpenAdmin\Admin\Layout\Row;

class DashboardController extends AdminController
{
    public function index(Content $content)
    {
        $userCount = User::count();
        $serviceCount = Service::count();
        $services = Service::all();
        $users = User::all();

        return $content
            ->title('Dashboard')
            ->description('Overview')
            ->row(function (Row $row) use ($userCount, $serviceCount, $services, $users) {
                $row->column(4, function (Column $column) use ($userCount) {
                    $column->append("<div>Total Users: $userCount</div>");
                });

                $row->column(4, function (Column $column) use ($serviceCount) {
                    $column->append("<div>Total Services: $serviceCount</div>");
                });

                $row->column(12, function (Column $column) use ($services, $users) {
                    $column->append(view('admin.services_dashboard', compact('services')));
                    $column->append(view('admin.users_dashboard', compact('users')));
                });
            });
    }
}
