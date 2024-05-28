<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groupsData = [
            [
              "group_name"=> "VIP Customers",
              "group_description"=> "Customers who frequently purchase and have high lifetime value. Eligible for exclusive discounts and early access to new products."
            ],
            [
              "group_name"=> "New Customers",
              "group_description"=> "Customers who have made their first purchase within the last 30 days. Targeted for welcome offers and onboarding communications."
            ],
            [
              "group_name"=> "Loyal Customers",
              "group_description"=> "Customers who have been with us for over a year and have made multiple purchases. Rewarded with loyalty points and special offers."
            ],
            [
              "group_name"=> "Inactive Customers",
              "group_description"=> "Customers who have not made a purchase in the last 6 months. Engage with reactivation campaigns and special incentives."
            ],
            [
              "group_name"=> "Occasional Shoppers",
              "group_description"=> "Customers who purchase sporadically. Encourage more frequent shopping with targeted promotions and reminders."
            ]
        ];
        
        foreach( $groupsData as $groupData ) {
            $group = new Group;

            $group->group_name        = $groupData['group_name'];
            $group->group_description = $groupData['group_description'];
            $group->save();
        }
    }
}
