<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movie = [
            [
                'name' => 'Big Buck Bunny',
                'slug' => 'bick-buck-bunny',
                'category' => 'Action',
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4',
                'thumbnail' => 'https://yavuzceliker.github.io/sample-images/image-1.jpg',
                'rating' => 4.5,
                'is_featured' => false
            ],
            [
                'name' => 'Elephant Dream',
                'slug' => 'elephant-dream',
                'category' => 'Action',
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4',
                'thumbnail' => 'https://yavuzceliker.github.io/sample-images/image-2.jpg',
                'rating' => 4.6,
                'is_featured' => false
            ],
            [
                'name' => 'For Bigger Blazes',
                'slug' => 'for-big-blazes',
                'category' => 'Action',
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4',
                'thumbnail' => 'https://yavuzceliker.github.io/sample-images/image-3.jpg',
                'rating' => 4.7,
                'is_featured' => false
            ],
            [
                'name' => 'What care can you get for a grand?',
                'slug' => 'what-care-can-you-get-for-a-grand',
                'category' => 'Drama',
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/WhatCarCanYouGetForAGrand.mp4',
                'thumbnail' => 'https://yavuzceliker.github.io/sample-images/image-4.jpg',
                'rating' => 4.8,
                'is_featured' => false
            ],
            [
                'name' => 'We Are Going On Bullrun',
                'slug' => 'we-are-going-on-bullrun',
                'category' => 'Drama',
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/WeAreGoingOnBullrun.mp4',
                'thumbnail' => 'https://yavuzceliker.github.io/sample-images/image-5.jpg',
                'rating' => 4.1,
                'is_featured' => true
            ],
            [
                'name' => 'Volkswagen GTI Review',
                'slug' => 'volskwagen-gti-review',
                'category' => 'Drama',
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/VolkswagenGTIReview.mp4',
                'thumbnail' => 'https://yavuzceliker.github.io/sample-images/image-6.jpg',
                'rating' => 4.9,
                'is_featured' => true
            ],
            [
                'name' => 'Tears of Steel',
                'slug' => 'tears-of-steel',
                'category' => 'Comedy',
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/TearsOfSteel.mp4',
                'thumbnail' => 'https://yavuzceliker.github.io/sample-images/image-7.jpg',
                'rating' => 4.2,
                'is_featured' => true
            ],
            [
                'name' => 'Subaru Outback On Street And Dirt',
                'slug' => 'subaru-outback-on-street-amd-dirt',
                'category' => 'Comedy',
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/SubaruOutbackOnStreetAndDirt.mp4',
                'thumbnail' => 'https://yavuzceliker.github.io/sample-images/image-8.jpg',
                'rating' => 4.3,
                'is_featured' => true
            ],
            [
                'name' => 'For Bigger Meltdowns',
                'slug' => 'for-bigger-meltdowns',
                'category' => 'Action',
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerMeltdowns.mp4',
                'thumbnail' => 'https://yavuzceliker.github.io/sample-images/image-9.jpg',
                'rating' => 4.4,
                'is_featured' => false
            ],
            [
                'name' => 'For Bigger Joyrides',
                'slug' => 'for-bigger-joyrides',
                'category' => 'Action',
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerJoyrides.mp4',
                'thumbnail' => 'https://yavuzceliker.github.io/sample-images/image-10.jpg',
                'rating' => 4.0,
                'is_featured' => true
            ],
        ];

        Movie::insert($movie);
    }
}
