<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie?primary_release_date.gte=2021-12-15&primary_release_date.lte=2022-12-22&api_key=def4f9ac2beb10d1686640969bf52c0b');
        $body = $response->getBody();
        $data = json_decode($body);

        $results = [];
        foreach($data->results as $item){
  

            if(str_contains("Spider-Man: No Way Home",$item->title) || str_contains("Scream",$item->title) || str_contains(	"The Ice Age Adventures of Buck Wild",$item->title) || str_contains("Uncharted",$item->title) || str_contains("The Requin",$item->title) || str_contains("Hotel Transylvania: Transformania",$item->title)) {
                array_push($results, $item);
            }
        }


        $heroImages = [$results[5],$results[1],$results[2]];

        return view('pages.home', compact('results','heroImages') );
    }

}
