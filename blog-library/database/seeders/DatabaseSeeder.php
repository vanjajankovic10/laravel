<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Genre;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $user = User::factory()->create();

       //GENRES

       $g1 = Genre::create([
        'name' => "mystery",
        'description' => "Mystery is a genre of literature whose stories focus on a puzzling crime, situation, or circumstance that needs to be solved.",
       ]);

       $g2 = Genre::create([
        'name' => "philosophy",
        'description' => "Books in the philosophy nonfiction genre are about the fundamental nature of knowledge, reality, and existence as an academic discipline. The books in this genre also explore fundamental truths about one's self, the world, and their relationships.",
       ]);

        $g3 = Genre::create([
        'name' => "fiction",
        'description' => "Literature created from the imagination, not presented as fact, though it may be based on a true story or situation",
       ]);

       $g4 = Genre::create([
        'name' => "dystopian",
        'description' => "Dystopian literature is a form of speculative fiction that offers a vision of the future",
       ]);

       $g5 = Genre::create([
        'name' => "fantasy",
        'description' => "Fantasy is a genre of speculative fiction involving magical elements, typically set in a fictional universe and sometimes inspired by mythology and folklore.",
       ]);

       //PUBLISHERS

       $p1 = Publisher::create([
        'name' => "Vulkan izdavastvo",
        'PIB' => 123,
       ]);

       $p2 = Publisher::create([
        'name' => "Laguna",
        'PIB' => 456,
       ]);

       $p3 = Publisher::create([
        'name' => "Nolit",
        'PIB' => 789,
       ]);

       //AUTHORS

       $a1 = Author::create([
        'name and surname' => "Agatha Christie",
        'born at' => "United Kingdom"
       ]);

       $a2 = Author::create([
        'name and surname' => "Albert Camus",
        'born at' => "France"
       ]);

       $a3 = Author::create([
        'name and surname' => "George Orwell",
        'born at' => "India"
       ]);


       $a4 = Author::create([
        'name and surname' => "J. R. R. Tolkien",
        'born at' => "South Africa"
       ]);

       $a5 = Author::create([
        'name and surname' => "Stephen King",
        'born at' => "United States of America"
       ]);

       //BOOKS
      
       Book::create([
        'title' => "The Lord Of The Rings",
        'description' => "The title refers to the story's main antagonist, the Dark Lord Sauron, who, in an earlier age, created the One Ring to rule the other Rings of Power given to Men, Dwarves, and Elves, in his campaign to conquer all of Middle-earth. ",
        'autor_id' =>$a4->id,
        'genre_id' =>$g5->id,
        'publisher_id'=>$p3->id,
       ]);

       Book::create([
        'title' => "Murder on the Orient Express",
        'description' => "The elegant train of the 1930s, the Orient Express, is stopped by heavy snowfall. A murder is discovered.",
        'autor_id' =>$a1->id,
        'genre_id' =>$g1->id,
        'publisher_id'=>$p2->id,
       ]);

       Book::create([
        'title' => "The Myth of Sisyphus",
        'description' => "The Myth of Sisyphus contains a sympathetic analysis of contemporary nihilism and touches on the nature of the absurd",
        'autor_id' =>$a2->id,
        'genre_id' =>$g2->id,
        'publisher_id'=>$p1->id,
       ]);

       Book::create([
        'title' => "Death on the Nile",
        'description' => "The tranquility of a luxury cruise along the Nile was shattered by the discovery that Linnet Ridgeway had been shot through the head. She was young, stylish, and beautiful. A girl who had everything . . . until she lost her life.",
        'autor_id' =>$a1->id,
        'genre_id' =>$g1->id,
        'publisher_id'=>$p3->id,
       ]);

       Book::create([
        'title' => "The Green Mile",
        'description' => "It tells the story of death row supervisor Paul Edgecombe's encounter with John Coffey, an unusual inmate who displays inexplicable healing and empathetic abilities.",
        'autor_id' =>$a5->id,
        'genre_id' =>$g5->id,
        'publisher_id'=>$p2->id,
       ]);

       Book::create([
        'title' => "The Stranger",
        'description' => "Through this story of an ordinary man unwittingly drawn into a senseless murder on a sundrenched Algerian beach, Camus explores what he termed the nakedness of man faced with the absurd",
        'autor_id' =>$a2->id,
        'genre_id' =>$g2->id,
        'publisher_id'=>$p2->id,
       ]);

       Book::create([
        'title' => "Under the Dome",
        'description' => "The novel focuses on a small Maine town, and tells an intricate, multi-character, alternating perspective story of how the town's inhabitants contend with the calamity of being suddenly cut off from the outside world by an impassable, invisible glass dome-like barrier that seemingly falls out of the sky, transforming the community into a domed city.",
        'autor_id' =>$a5->id,
        'genre_id' =>$g5->id,
        'publisher_id'=>$p1->id,
       ]);


       Book::create([
        'title' => "Nineteen Eighty-Four ",
        'description' => "Winston Smith toes the Party line, rewriting history to satisfy the demands of the Ministry of Truth. With each lie he writes, Winston grows to hate the Party that seeks power for its own sake and persecutes those who dare to commit thoughtcrimes. But as he starts to think for himself, Winston can’t escape the fact that Big Brother is always watching...",
        'autor_id' =>$a3->id,
        'genre_id' =>$g4->id,
        'publisher_id'=>$p3->id,
       ]);


       Book::create([
        'title' => "The Plague",
        'description' => "The novel presents a snapshot of life in Oran as seen through the author's distinctive absurdist point of view.",
        'autor_id' =>$a2->id,
        'genre_id' =>$g2->id,
        'publisher_id'=>$p1->id,
       ]);
    }
}
