<?php

namespace Database\Seeders;

use App\Http\Controllers\Api\Dashboard\StatsController as DashboardStatsController;
use App\Models\UserRole;
use Exception;
use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        if (UserRole::count() === 0) {
            // Add Admin Role
            $userRole = new UserRole();
            $userRole->name = 'Admin';
            $userRole->type = 1;
            $userRole->permissions = '[]';
            $userRole->dashboard_access = 1;
            $userRole->save();
            // Add User Role
            $userRole = new UserRole();
            $userRole->name = 'User';
            $userRole->type = 1;
            $userRole->permissions = json_encode([str_replace('\\', '.', DashboardStatsController::class)], JSON_THROW_ON_ERROR);
            $userRole->dashboard_access = 0;
            $userRole->save();
            // Customer Role
            $userRole = new UserRole();
            $userRole->name = 'Customer';
            $userRole->type = 1;
            $userRole->permissions = '[]';
            $userRole->dashboard_access = 0;
            $userRole->save();
            // Supervisor Role
            $userRole = new UserRole();
            $userRole->name = 'Supervisor';
            $userRole->type = 2;
            $userRole->permissions = "[\"App.Http.Controllers.Api.Dashboard.TicketController\"]";
            $userRole->dashboard_access = 1;
            $userRole->save();
            // ICT Personnel Role
            $userRole = new UserRole();
            $userRole->name = 'ICT Personnel';
            $userRole->type = 2;
            $userRole->permissions = "[\"App.Http.Controllers.Api.Dashboard.StatsController\",\"App.Http.Controllers.Api.Dashboard.TicketController\",\"App.Http.Controllers.Api.Dashboard.CannedReplyController\"]";
            $userRole->dashboard_access = 1;
            $userRole->save();
        }
    }
}
