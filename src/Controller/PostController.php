<?php

namespace App\Controller;

use App\Service\PostPage\FakePostPageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class PostController extends AbstractController
{

    /**
     * Display single post by ID
     * @param int $id
     * @return Response
     */
    public function single(int $id): Response
    {

        $homePageService = new FakePostPageService();
        $post = $homePageService->getPostById($id);

        return $this->render('post/single.html.twig', [
            'post' => $post,
        ]);

    }
}
