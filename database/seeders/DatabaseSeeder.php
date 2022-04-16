<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        for ($i=0; $i < 30; $i++) { 
            $title = 'Post ke- '.$i;
            $slug = implode("-", explode(" ", $title)). "-" .time();
            $desc = 'Lorem-'.$i.', ipsum dolor sit amet consectetur adipisicing elit. Molestiae nisi velit natus, repudiandae qui nam deleniti enim ullam eum iure facere ea eaque excepturi, fugiat, fugit non. Laudantium laboriosam quaerat enim dolor rem ipsa consequatur quis assumenda iusto odio earum vero, culpa laborum corrupti impedit unde alias perferendis atque! At tempora quam culpa laborum ipsam minus animi consequuntur laudantium earum numquam, nemo velit possimus ea similique. Velit officiis rerum fugit cum iusto illo cupiditate architecto dicta fuga animi hic culpa nisi ea aperiam deserunt, amet aliquid possimus repellat repudiandae non libero recusandae maiores. Eius vel consequuntur minima facere blanditiis temporibus architecto rerum corrupti fuga numquam qui impedit id, eveniet earum labore soluta dolorum, tenetur, aliquam repudiandae quasi consequatur. Vero autem ducimus facere sit vitae fugiat at quia repellat maxime voluptate rem consequuntur reiciendis hic, blanditiis animi voluptatum beatae odit earum dignissimos voluptatibus praesentium placeat. Ea illum unde ratione accusamus, voluptates, voluptas rerum amet sequi numquam nam, sit iste? Amet voluptatibus nemo nihil placeat natus ratione hic quae ducimus eaque quia animi quis ipsam, exercitationem vitae ipsa cupiditate fugit illo. Ipsam nostrum, quidem repellat odit maxime sit harum magni. Pariatur laudantium quia obcaecati delectus, vitae possimus. Sed accusamus autem nesciunt. Amet.
            ';
            Post::create([
                'title' => $title,
                'slug' => $slug,
                'sort_description' => Str::limit(strip_tags($desc), 100, '...'),
                'description' => $desc,
                'image' => 'image/default.jpg'

            ]);

        }

    }
}
