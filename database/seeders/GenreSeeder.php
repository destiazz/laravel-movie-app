<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => ' Shounen',
            'description' => 'This genre often features adventure stories full of action, friendship, and character growth'
        ]);

        Genre::create([
            'name' => 'Horor',
            'description' => 'Horror films are a film genre that attempts to provoke emotions in the form of fear or disgust from the audience. Their storylines often involve themes of death, the supernatural, or mental illness. Many horror film stories center on a certain evil antagonist.'
        ]);

        Genre::create([
            'name' => 'School',
            'description' => 'This genre often features stories set in schools, interesting and lighthearted stories.'
        ]);

        Genre::create([
            'name' => 'Romance',
            'description' => 'A romance film is a love story captured in a visual medium that focuses on the passion, emotions and affectionate involvement of the main characters and the journey of their truly powerful, true and pure love that will take them through dating, courtship or marriage. Romance films make love stories or the search for strong and pure love and romance becomes the focus of the main plot.'
        ]);

        Genre::create([
            'name' => 'Thriller',
            'description' => 'The thriller genre can provide a sense of suspense, curiosity and uncertainty to the audience. Apart from that, the storyline can maintain the intensity of tension until the films climax. This genre usually tells the story of ordinary people who are trapped in extraordinary or critical situations.'
        ]);
    }
}
