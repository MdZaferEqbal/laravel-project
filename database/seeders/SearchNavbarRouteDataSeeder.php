<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SearchRouteData;

class SearchNavbarRouteDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routesData = [
            // [ 'name' => 'directives', 'route' => '/directives' ],
            // [ 'name' => 'components', 'route' => '/components' ],
            // [ 'name' => 'database-migration', 'route' => '/database-migration' ],
            // [ 'name' => 'intro-models', 'route' => '/intro-models' ],
            // [ 'name' => 'route-button-anchor', 'route' => '/route-button-anchor' ],
            // [ 'name' => 'delete.query.doc', 'route' => '/delete-query-doc' ],
            // [ 'name' => 'update.query.doc', 'route' => '/update-query-doc' ],
            // [ 'name' => 'helpers.doc', 'route' => '/helpers' ],
            // [ 'name' => 'accessors.mutators.doc', 'route' => '/accessors-mutators' ],
            // [ 'name' => 'session.handling.doc', 'route' => '/session-handling' ],
            // [ 'name' => 'softdelete.doc', 'route' => '/softdelete' ],
            // [ 'name' => 'file.upload.doc', 'route' => '/file-upload' ],
            // [ 'name' => 'database.seeder.faker.doc', 'route' => '/seeder-faker' ],
            // [ 'name' => 'customer.new', 'route' => '/model-demo' ],
            // [ 'name' => 'customer.view', 'route' => '/customer/view' ],
            // [ 'name' => 'customer.trash.view', 'route' => '/customer/view/trash' ],
            // [ 'name' => 'file.store', 'route' => '/file-upload' ],
            // [ 'name' => 'form', 'route' => '/form' ],
            // [ 'name' => 'controllers', 'route' => '/controllers' ],
            // // New pages added on 27-05-2024
            // [ 'name' => 'foreign.key.relation.doc', 'route' => '/foreign-key-relation' ],
            // [ 'name' => 'middleware.doc', 'route' => '/middleware' ],
            // New pages added on 28-05-2024
            [ 'name' => 'api.restful.api.page', 'route' => '/api-restful-api' ],
        ];

        foreach( $routesData as $route ) {
            $searchRouteData = new SearchRouteData;

            $searchRouteData->name = $route['name'];
            $searchRouteData->route = $route['route'];

            $searchRouteData->save();
        }
    }
}
