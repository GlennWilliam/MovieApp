![image](https://github.com/GlennWilliam/MovieApp/assets/121201497/da4425b0-1226-4017-bdf3-3e9f40353bed)
![image](https://github.com/GlennWilliam/MovieApp/assets/121201497/bfc5b9dd-570b-47f6-9065-c83689d775c2)
![image](https://github.com/GlennWilliam/MovieApp/assets/121201497/f64d056b-a6b3-43d9-afd6-fc858a8b3084)
![image](https://github.com/GlennWilliam/MovieApp/assets/121201497/71087bc3-a52a-462f-bf4a-59b8bdbef461)

# Laravel Movie Application

## Overview

This Laravel project is a movie application that utilizes The Movie Database (TMDb) API to provide users with a comprehensive movie and TV show experience. Users can explore trending movies and TV shows, view detailed information about each movie, watch trailers, and search for specific movies using the search bar. Additionally, users can discover details about popular actors in the industry.

## Features

- **Trending Movies and TV Shows:** Explore a curated list of trending movies and TV shows.
- **Movie Details:** View detailed information about each movie, including synopsis and the option to watch trailers.
- **Search Functionality:** Utilize the search bar to find specific movies from the database.
- **Popular Actors:** Discover information about popular actors in the entertainment industry.

## Installation
- Clone the repo and cd into it 
- composer install
- Rename or copy .env.example file to .env
- Set your TMDB_TOKEN in your .env file. You can get an API key here. Make sure to use the "API Read Access Token (v4 auth)" from the TMDb dashboard.
- php artisan key:generate
- php artisan serve or use Laravel Valet or Laravel Homestead
- Visit localhost:8000 in your browser

## Acknowledgments
The Movie Database (TMDb) for providing the API.
