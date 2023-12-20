<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client;
use App\ViewModels\MoviesViewModel;
use App\ViewModels\MovieViewModel;

class MoviesController extends Controller
{
    public function index()
    {
        $url_popularMovies = 'https://api.themoviedb.org/3/movie/popular';
        $url_genres = 'https://api.themoviedb.org/3/genre/movie/list';
        $url_nowPlayingMovies = 'https://api.themoviedb.org/3/movie/now_playing';
       
        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get($url_popularMovies)
            ->json()['results'];

        $genres = Http::withToken(config('services.tmdb.token'))
            ->get($url_genres)
            ->json()['genres'];

        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))
            ->get($url_nowPlayingMovies)
            ->json()['results'];

        $viewModel = new MoviesViewModel(
            $popularMovies, 
            $nowPlayingMovies,
            $genres
        );
        
        return view('movies.index', $viewModel);
    }
    

    public function demo()
    {
        $tmdb_id = 436270;
        $response = Http::asJson()
            ->get(config('services.tmdb.endpoint').'movie/'.$tmdb_id, [
                'api_key' => config('services.tmdb.token'),
            ]);

        $data = $response->json();

        return view('demo', compact('data'));
    }

    public function show($id)
    {
        $movie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')
            ->json();

        $viewModel = new MovieViewModel($movie);

        return view('movies.show', $viewModel);
    }


}
