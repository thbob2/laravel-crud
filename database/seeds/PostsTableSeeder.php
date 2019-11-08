<?php
use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $category1 = Category::create([
            'name' => 'News'

        ]);
        $category2 = Category::create([
            'name' => 'Design'

        ]);
        $categor3 = Category::create([
            'name' => 'Partnership'

        ]);
        $category4 = Category::create([
            'name' => 'Hiring'

        ]);
        $category5 = Category::create([
            'name' => 'Updates'

        ]);
        $category6 = Category::create([
            'name' => 'Marketing'

        ]);
        $category7 = Category::create([
            'name' => 'Product'

        ]);
        $category8 = Category::create([
            'name' => 'Offers'

        ]);

        $tag1 = Tag::create([
            'name' => 'Record',
        ]);
        $tag2 = Tag::create([
            'name' => 'Progress',
        ]);
        $tag3 = Tag::create([
            'name' => 'customers',
        ]);
        $tag4 = Tag::create([
            'name' => 'Freeble',
        ]);
        $tag5 = Tag::create([
            'name' => 'Offer',
        ]);
        $tag6 = Tag::create([
            'name' => 'Screenshot',
        ]);
        $tag7 = Tag::create([
            'name' => 'Milestone',
        ]);
        $tag8 = Tag::create([
            'name' => 'Version',
        ]);
        $tag9 = Tag::create([
            'name' => 'Design',
        ]);
        $tag10 = Tag::create([
            'name' => 'Job',
        ]);
        $tag11 = Tag::create([
            'name' => 'Record',
        ]);

        $post1 =Post::create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tristique nibh. Curabitur quis lectus neque. Pellentesque vitae justo auctor, vulputate nisi vitae, auctor odio. Nullam tincidunt dictum blandit. Quisque iaculis mi nec nibh semper viverra. Maecenas rhoncus, arcu at condimentum commodo, ante mi porttitor dui, vel rhoncus ex augue vel mauris. Integer lacinia elit a mattis lacinia. Nullam consequat porttitor purus eu dapibus. Etiam dui sapien, congue et tincidunt in, pretium ut tellus.',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu",
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg',
        ]);

        $post2 =Post::create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tristique nibh. Curabitur quis lectus neque. Pellentesque vitae justo auctor, vulputate nisi vitae, auctor odio. Nullam tincidunt dictum blandit. Quisque iaculis mi nec nibh semper viverra. Maecenas rhoncus, arcu at condimentum commodo, ante mi porttitor dui, vel rhoncus ex augue vel mauris. Integer lacinia elit a mattis lacinia. Nullam consequat porttitor purus eu dapibus. Etiam dui sapien, congue et tincidunt in, pretium ut tellus.',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu",
            'category_id' => $category6->id,
            'image' => 'posts/2.jpg',
        ]);
        $post3 =Post::create([
            'title' => 'Best practices for minimalist design with example',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tristique nibh. Curabitur quis lectus neque. Pellentesque vitae justo auctor, vulputate nisi vitae, auctor odio. Nullam tincidunt dictum blandit. Quisque iaculis mi nec nibh semper viverra. Maecenas rhoncus, arcu at condimentum commodo, ante mi porttitor dui, vel rhoncus ex augue vel mauris. Integer lacinia elit a mattis lacinia. Nullam consequat porttitor purus eu dapibus. Etiam dui sapien, congue et tincidunt in, pretium ut tellus.',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu",
            'category_id' => $category2->id,
            'image' => 'posts/3.jpg',
        ]);
        $post4 =Post::create([
            'title' => 'Congratulate and thank to Maryam for joining our team',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tristique nibh. Curabitur quis lectus neque. Pellentesque vitae justo auctor, vulputate nisi vitae, auctor odio. Nullam tincidunt dictum blandit. Quisque iaculis mi nec nibh semper viverra. Maecenas rhoncus, arcu at condimentum commodo, ante mi porttitor dui, vel rhoncus ex augue vel mauris. Integer lacinia elit a mattis lacinia. Nullam consequat porttitor purus eu dapibus. Etiam dui sapien, congue et tincidunt in, pretium ut tellus.',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu",
            'category_id' => $category1->id,
            'image' => 'posts/4.jpg',
        ]);
        $post5 =Post::create([
            'title' => 'New published books to read by a product designer',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tristique nibh. Curabitur quis lectus neque. Pellentesque vitae justo auctor, vulputate nisi vitae, auctor odio. Nullam tincidunt dictum blandit. Quisque iaculis mi nec nibh semper viverra. Maecenas rhoncus, arcu at condimentum commodo, ante mi porttitor dui, vel rhoncus ex augue vel mauris. Integer lacinia elit a mattis lacinia. Nullam consequat porttitor purus eu dapibus. Etiam dui sapien, congue et tincidunt in, pretium ut tellus.',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu",
            'category_id' => $category1->id,
            'image' => 'posts/5.jpg',
        ]);
        $post6 =Post::create([
            'title' => "This is why it's time to ditch dress codes at work",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tristique nibh. Curabitur quis lectus neque. Pellentesque vitae justo auctor, vulputate nisi vitae, auctor odio. Nullam tincidunt dictum blandit. Quisque iaculis mi nec nibh semper viverra. Maecenas rhoncus, arcu at condimentum commodo, ante mi porttitor dui, vel rhoncus ex augue vel mauris. Integer lacinia elit a mattis lacinia. Nullam consequat porttitor purus eu dapibus. Etiam dui sapien, congue et tincidunt in, pretium ut tellus.',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu",
            'category_id' => $category1->id,
            'image' => 'posts/6.jpg',
        ]);

        $post1->tags()->attach([$tag1->id,$tag11->id]);
        $post2->tags()->attach([$tag3->id]);
        $post3->tags()->attach([$tag4->id]);
        $post4->tags()->attach([$tag2->id,$tag3->id,$tag5->id]);
        $post5->tags()->attach([$tag2->id,$tag3->id,$tag5->id]);
        $post6->tags()->attach([$tag2->id,$tag3->id,$tag5->id]);

    }

}
