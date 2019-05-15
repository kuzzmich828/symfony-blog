<?php
declare(strict_types=1);

namespace App\Service\PostPage;

use App\Model\Category;
use App\Model\Post;
use Faker\Factory;

final class FakePostPageService implements PostPageServiceInterface
{
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
