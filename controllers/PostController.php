<?php
require_once __DIR__.'/../models/Post.php';

class PostController
{
    public function show(int $id): void {
        $postModel = new Post();
        $post = $postModel->getPostById($id);
        if (!$post) {
            http_response_code(404);
            $error = "Post bulunamadı";
            require __DIR__.'/../views/error.php';
            return;
        }
        // View'e sadece gerekli veriyi ver
        require __DIR__.'/../views/show_post.php';
    }
}
    public function index(): void {
        $postModel = new Post();
        $posts = $postModel->getAllPosts();
        require __DIR__.'/../views/list_posts.php';
    }
    
    public function create(array $data): void {
        $postModel = new Post();
        $newPost = $postModel->savePost($data);
        header("Location: /posts/{$newPost->id}");
    }
}