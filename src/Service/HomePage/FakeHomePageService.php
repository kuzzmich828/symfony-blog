<?php
declare(strict_types=1);

namespace App\Service\HomePage;

use App\Collection\PostCollection;
use App\Model\Category;
use App\Model\Post;
use Faker\Factory;

final class FakeHomePageService implements HomePageServiceInterface
{
    /**
     * Get all posts
     * @return PostCollection
     */
    public function getPosts(): PostCollection
    {
        $collection = new PostCollection();

        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $post = new Post(
                $faker->randomNumber(),
                new Category($faker->sentence),
                $faker->sentence
            );
            $post
                ->setImage($faker->imageUrl())
                ->setShortDescription($faker->sentence())
                ->setPublicationDate($faker->dateTime)
            ;

            $collection->addPost($post);
        }

        return $collection;
    }

    /**
     * @param int $id
     * Get one post by id
     * @return Post
     */
    public function getPostById(int $id): Post
    {

        $faker = Factory::create();

        $post = new Post(
            $id,
            new Category($faker->sentence),
            $faker->sentence
        );

        $post
            ->setImage($faker->imageUrl())
            ->setShortDescription($faker->sentence())
            ->setPublicationDate($faker->dateTime)
        ;

        return $post;

    }

}
