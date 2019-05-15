<?php

namespace App\Service\HomePage;

use App\Collection\PostCollection;
use App\Model\Post;

interface HomePageServiceInterface
{
    public function getPosts(): PostCollection;

    public function getPostById(int $id): Post;
}
