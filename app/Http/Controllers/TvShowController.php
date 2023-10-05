<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvShowController extends Controller
{
    public function search(Request $request)
    {
        $query = strtolower($request->input('q'));

        $baseUrl = 'https://api.tvmaze.com';
        $url = "/search/shows?q=$query";

            $response = Http::get($baseUrl . $url);

            if ($response->successful()) {
                $data = $response->json();

                $shows = [];
                foreach ($data as $result) {
                    $show = $result['show'];
                    $showName = strtolower($show['name']);

                    if ($query === $showName) {
                        $shows[] = [
                            'id' => $show['id'],
                            'name' => $show['name'],
                            'summary' => $show['summary'],
                            'url' => $show['url']
                        ];
                    }
                }

                return view('tvshows', ['shows' => $shows]);
        } else {
            return response()->json(['error' => 'Failed to fetch TV shows'], 500);
        }
    }
}
