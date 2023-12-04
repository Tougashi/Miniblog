<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Adryan',
        //     'email' => 'adryanowh@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1, 
        //     'user_id' => 1,
        //     'slug'=> 'judul-pertama', 
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ipsum dolor quia repellat nisi eligendi voluptate consequuntur, ex harum quibusdam facilis quis deleniti optio tempore! Nostrum, enim? Autem placeat dolorem explicabo inventore.</p><p>iure minus mollitia perferendis, incidunt aut! Quasi facere quidem perspiciatis ea culpa ut, libero eveniet et praesentium perferendis tempora similique tenetur est, tempore ex sapiente excepturi voluptas reprehenderit error laudantium repudiandae laborum enim facilis! Ex nobis accusantium nesciunt ut labore ullam vitae non? Nulla itaque voluptate quis tempore maiores velit minima vel molestias ex praesentium quae reiciendis, amet modi ipsum suscipit facere pariatur beatae fuga provident sunt.</p>',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et perspiciatis voluptatibus autem placeat illum tempore iste aspernatur atque quidem eligendi nemo ipsum explicabo veritatis, quam corporis sunt ratione! Obcaecati voluptatum sit veniam neque nisi, ipsum suscipit totam natus debitis animi molestias fugit sed porro quaerat earum quis ratione maiores rerum accusamus deserunt a doloribus. Porro amet et nobis dolorem deleniti ipsum non rem saepe, accusamus velit quas, aliquid incidunt id optio tempora autem dolores tenetur perferendis illum omnis ut? Eveniet eum quos dolorem error cum blanditiis, nostrum, unde obcaecati ad quaerat nulla at iste esse laboriosam officiis provident aliquid facere rem quis. Excepturi eaque aut quos facere accusamus tenetur quasi, quis reiciendis ipsum error! Voluptas eum tenetur similique ratione porro! Rerum doloremque ab, non vero laudantium, a nam est nostrum culpa autem natus, recusandae eaque amet sapiente. Cupiditate iure sequi temporibus mollitia in a, fugiat esse aspernatur illum dolorem aliquid enim aliquam ipsum quas! Sint ipsa nostrum sed, aliquam repudiandae deleniti molestias doloribus natus debitis atque pariatur error dicta vero at blanditiis hic inventore dolore voluptates, placeat similique. Nulla quam excepturi laboriosam aperiam maxime commodi repellendus. Vel, qui repellendus omnis repellat sit aperiam atque autem, dolor, similique adipisci laborum ullam?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis dolor recusandae sit ipsa eaque aliquam atque minus enim impedit totam repudiandae quos neque quisquam iure velit alias incidunt delectus sapiente commodi, quam voluptate reiciendis? Fugit, recusandae aliquid, facere, dignissimos quisquam fugiat minima laboriosam in ab magnam natus asperiores similique ut nemo ipsam voluptatem. Molestiae optio, similique laudantium numquam, beatae doloremque dolor facere vel eum iure nam eius aut explicabo dolores sequi asperiores iste quod repellendus ipsum nulla ea quae aperiam! Illo doloremque accusamus quae voluptatum voluptate totam fugit minima temporibus aperiam blanditiis minus, amet nemo. Error quis corrupti similique veniam?'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2, 
        //     'user_id' => 2,
        //     'slug'=> 'judul-kedua', 
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ipsum dolor quia repellat nisi eligendi voluptate consequuntur, ex harum quibusdam facilis quis deleniti optio tempore! Nostrum, enim? Autem placeat dolorem explicabo inventore.</p><p>iure minus mollitia perferendis, incidunt aut! Quasi facere quidem perspiciatis ea culpa ut, libero eveniet et praesentium perferendis tempora similique tenetur est, tempore ex sapiente excepturi voluptas reprehenderit error laudantium repudiandae laborum enim facilis! Ex nobis accusantium nesciunt ut labore ullam vitae non? Nulla itaque voluptate quis tempore maiores velit minima vel molestias ex praesentium quae reiciendis, amet modi ipsum suscipit facere pariatur beatae fuga provident sunt.</p>',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et perspiciatis voluptatibus autem placeat illum tempore iste aspernatur atque quidem eligendi nemo ipsum explicabo veritatis, quam corporis sunt ratione! Obcaecati voluptatum sit veniam neque nisi, ipsum suscipit totam natus debitis animi molestias fugit sed porro quaerat earum quis ratione maiores rerum accusamus deserunt a doloribus. Porro amet et nobis dolorem deleniti ipsum non rem saepe, accusamus velit quas, aliquid incidunt id optio tempora autem dolores tenetur perferendis illum omnis ut? Eveniet eum quos dolorem error cum blanditiis, nostrum, unde obcaecati ad quaerat nulla at iste esse laboriosam officiis provident aliquid facere rem quis. Excepturi eaque aut quos facere accusamus tenetur quasi, quis reiciendis ipsum error! Voluptas eum tenetur similique ratione porro! Rerum doloremque ab, non vero laudantium, a nam est nostrum culpa autem natus, recusandae eaque amet sapiente. Cupiditate iure sequi temporibus mollitia in a, fugiat esse aspernatur illum dolorem aliquid enim aliquam ipsum quas! Sint ipsa nostrum sed, aliquam repudiandae deleniti molestias doloribus natus debitis atque pariatur error dicta vero at blanditiis hic inventore dolore voluptates, placeat similique. Nulla quam excepturi laboriosam aperiam maxime commodi repellendus. Vel, qui repellendus omnis repellat sit aperiam atque autem, dolor, similique adipisci laborum ullam?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis dolor recusandae sit ipsa eaque aliquam atque minus enim impedit totam repudiandae quos neque quisquam iure velit alias incidunt delectus sapiente commodi, quam voluptate reiciendis? Fugit, recusandae aliquid, facere, dignissimos quisquam fugiat minima laboriosam in ab magnam natus asperiores similique ut nemo ipsam voluptatem. Molestiae optio, similique laudantium numquam, beatae doloremque dolor facere vel eum iure nam eius aut explicabo dolores sequi asperiores iste quod repellendus ipsum nulla ea quae aperiam! Illo doloremque accusamus quae voluptatum voluptate totam fugit minima temporibus aperiam blanditiis minus, amet nemo. Error quis corrupti similique veniam?'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 1, 
        //     'user_id' => 1,
        //     'slug'=> 'judul-ketiga', 
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ipsum dolor quia repellat nisi eligendi voluptate consequuntur, ex harum quibusdam facilis quis deleniti optio tempore! Nostrum, enim? Autem placeat dolorem explicabo inventore.</p><p>iure minus mollitia perferendis, incidunt aut! Quasi facere quidem perspiciatis ea culpa ut, libero eveniet et praesentium perferendis tempora similique tenetur est, tempore ex sapiente excepturi voluptas reprehenderit error laudantium repudiandae laborum enim facilis! Ex nobis accusantium nesciunt ut labore ullam vitae non? Nulla itaque voluptate quis tempore maiores velit minima vel molestias ex praesentium quae reiciendis, amet modi ipsum suscipit facere pariatur beatae fuga provident sunt.</p>',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et perspiciatis voluptatibus autem placeat illum tempore iste aspernatur atque quidem eligendi nemo ipsum explicabo veritatis, quam corporis sunt ratione! Obcaecati voluptatum sit veniam neque nisi, ipsum suscipit totam natus debitis animi molestias fugit sed porro quaerat earum quis ratione maiores rerum accusamus deserunt a doloribus. Porro amet et nobis dolorem deleniti ipsum non rem saepe, accusamus velit quas, aliquid incidunt id optio tempora autem dolores tenetur perferendis illum omnis ut? Eveniet eum quos dolorem error cum blanditiis, nostrum, unde obcaecati ad quaerat nulla at iste esse laboriosam officiis provident aliquid facere rem quis. Excepturi eaque aut quos facere accusamus tenetur quasi, quis reiciendis ipsum error! Voluptas eum tenetur similique ratione porro! Rerum doloremque ab, non vero laudantium, a nam est nostrum culpa autem natus, recusandae eaque amet sapiente. Cupiditate iure sequi temporibus mollitia in a, fugiat esse aspernatur illum dolorem aliquid enim aliquam ipsum quas! Sint ipsa nostrum sed, aliquam repudiandae deleniti molestias doloribus natus debitis atque pariatur error dicta vero at blanditiis hic inventore dolore voluptates, placeat similique. Nulla quam excepturi laboriosam aperiam maxime commodi repellendus. Vel, qui repellendus omnis repellat sit aperiam atque autem, dolor, similique adipisci laborum ullam?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis dolor recusandae sit ipsa eaque aliquam atque minus enim impedit totam repudiandae quos neque quisquam iure velit alias incidunt delectus sapiente commodi, quam voluptate reiciendis? Fugit, recusandae aliquid, facere, dignissimos quisquam fugiat minima laboriosam in ab magnam natus asperiores similique ut nemo ipsam voluptatem. Molestiae optio, similique laudantium numquam, beatae doloremque dolor facere vel eum iure nam eius aut explicabo dolores sequi asperiores iste quod repellendus ipsum nulla ea quae aperiam! Illo doloremque accusamus quae voluptatum voluptate totam fugit minima temporibus aperiam blanditiis minus, amet nemo. Error quis corrupti similique veniam?'
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2, 
        //     'user_id' => 4,
        //     'slug'=> 'judul-keempat', 
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ipsum dolor quia repellat nisi eligendi voluptate consequuntur, ex harum quibusdam facilis quis deleniti optio tempore! Nostrum, enim? Autem placeat dolorem explicabo inventore.</p><p>iure minus mollitia perferendis, incidunt aut! Quasi facere quidem perspiciatis ea culpa ut, libero eveniet et praesentium perferendis tempora similique tenetur est, tempore ex sapiente excepturi voluptas reprehenderit error laudantium repudiandae laborum enim facilis! Ex nobis accusantium nesciunt ut labore ullam vitae non? Nulla itaque voluptate quis tempore maiores velit minima vel molestias ex praesentium quae reiciendis, amet modi ipsum suscipit facere pariatur beatae fuga provident sunt.</p>',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et perspiciatis voluptatibus autem placeat illum tempore iste aspernatur atque quidem eligendi nemo ipsum explicabo veritatis, quam corporis sunt ratione! Obcaecati voluptatum sit veniam neque nisi, ipsum suscipit totam natus debitis animi molestias fugit sed porro quaerat earum quis ratione maiores rerum accusamus deserunt a doloribus. Porro amet et nobis dolorem deleniti ipsum non rem saepe, accusamus velit quas, aliquid incidunt id optio tempora autem dolores tenetur perferendis illum omnis ut? Eveniet eum quos dolorem error cum blanditiis, nostrum, unde obcaecati ad quaerat nulla at iste esse laboriosam officiis provident aliquid facere rem quis. Excepturi eaque aut quos facere accusamus tenetur quasi, quis reiciendis ipsum error! Voluptas eum tenetur similique ratione porro! Rerum doloremque ab, non vero laudantium, a nam est nostrum culpa autem natus, recusandae eaque amet sapiente. Cupiditate iure sequi temporibus mollitia in a, fugiat esse aspernatur illum dolorem aliquid enim aliquam ipsum quas! Sint ipsa nostrum sed, aliquam repudiandae deleniti molestias doloribus natus debitis atque pariatur error dicta vero at blanditiis hic inventore dolore voluptates, placeat similique. Nulla quam excepturi laboriosam aperiam maxime commodi repellendus. Vel, qui repellendus omnis repellat sit aperiam atque autem, dolor, similique adipisci laborum ullam?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis dolor recusandae sit ipsa eaque aliquam atque minus enim impedit totam repudiandae quos neque quisquam iure velit alias incidunt delectus sapiente commodi, quam voluptate reiciendis? Fugit, recusandae aliquid, facere, dignissimos quisquam fugiat minima laboriosam in ab magnam natus asperiores similique ut nemo ipsam voluptatem. Molestiae optio, similique laudantium numquam, beatae doloremque dolor facere vel eum iure nam eius aut explicabo dolores sequi asperiores iste quod repellendus ipsum nulla ea quae aperiam! Illo doloremque accusamus quae voluptatum voluptate totam fugit minima temporibus aperiam blanditiis minus, amet nemo. Error quis corrupti similique veniam?'
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        User::factory(3)->create();
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Developer',
            'slug' => 'developer'
        ]);

      

        Post::factory(20)->create();

    }
}
