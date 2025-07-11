<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    protected $table = 'books';
    protected $useTimestamps = true;

    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];
    public function getBooks($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}