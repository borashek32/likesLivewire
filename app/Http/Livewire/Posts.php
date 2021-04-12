<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public $posts;

    protected $listeners =[
        'echo:posts,PostCreated' => 'prependPost'
    ];

    public function mount()
    {
        $this->posts = Post::latest()->get();
    }

    public function prependPost($post)
    {
        $this->posts->prepend(Post::find($post['id']));
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
