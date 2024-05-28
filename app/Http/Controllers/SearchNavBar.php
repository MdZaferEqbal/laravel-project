<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SearchRouteData;

class SearchNavBar extends Controller
{
    public function searchResult(Request $request) {
        $textToSearch = $request['search'] ?? "";

        if($textToSearch !== "") {
            $searchRouteData = SearchRouteData::where('name', 'LIKE', "%$textToSearch%")->orwhere('route', 'LIKE', "%$textToSearch%")->first();
        }
        if($searchRouteData != null) {
            return redirect($searchRouteData->route);
        } else {
            return redirect('/404');
        }
    }
}
