<?php

namespace App\Service\PostPage;

use App\Model\Post;

interface PostPageServiceInterface
{
    public function getPostById(int $id): Post;
}
