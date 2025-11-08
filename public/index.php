<?php
require_once __DIR__ . '/../src/Models/User.php';
require_once __DIR__ . '/../src/Models/Post.php';
require_once __DIR__ . '/../src/Models/Tag.php';

header('Content-Type: text/plain; charset=utf-8');

$user = User::create('FURKAN', 'Furkan@example.com');

$post = Post::create($user->id, 'ilk yazim', 'eloquent’siz düz php/pdo', true);

$tag  = Tag::create('php', 'php');
$post->attachTag($tag->id);

echo "Post: {$post->title}\n";
$u = $post->user();
echo "Yazar: {$u['name']} ({$u['email']})\n";

$tags = $post->tags();
echo "Etiketler: " . implode(', ', array_column($tags,'name')) . "\n";

$post->update(['title' => 'güncel baslik']);
echo "Güncel Başlık: " . Post::find($post->id)->title . "\n";

$post->delete();
$deletedPost = Post::find($post->id);