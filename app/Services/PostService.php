<?php

namespace App\Services;

use InvalidArgumentException;
use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Validator;

class PostService{
    protected $postRepository;

    public function __construct(PostRepository $postRepo)
    {
        $this->postRepository = $postRepo;
    }

    public function getAll()
    {
        return $this->postRepository->getAll();
    }

    public function store($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required',
            'description' => 'required'
        ]);

        if($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->postRepository->save($data);
        return $result;
    }
    
}