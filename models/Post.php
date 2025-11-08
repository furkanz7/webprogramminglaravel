<?php
class Post
{
    // Basit örnek (DB yok): sahte veri
    private array $data = [
        1 => ['id'=>1,'title'=>'İlk Yazı','content'=>'Merhaba dünya'],
        2 => ['id'=>2,'title'=>'MVC Nedir?','content'=>'Ayrıştır, yönet, ölçekle']
    ];

    public function getPostById(int $id): ?object {
        if (!isset($this->data[$id])) return null;
        return (object) $this->data[$id];
    }

    public function getAllPosts(): array {
        return array_map(fn($r)=>(object)$r, array_values($this->data));
    }

    public function savePost(array $data): object {
        $id = max(array_keys($this->data)) + 1;
        $row = ['id'=>$id,'title'=>$data['title']??'','content'=>$data['content']??''];
        $this->data[$id] = $row;
        return (object)$row;
    }
}
