<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Container\Attributes\Auth;

class ShowTweets extends Component
{
    use WithPagination;

    public $content = '';

    // public $usuario = '';

    protected $rules = [
        'content' => 'required|min:3|max:255',
        // 'usuario' => 'required|integer|exists:users,id'
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->latest()->paginate(2);
        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ])->layout('layouts.app');
    }

    public function create()
    {
        $this -> validate();

        Auth()->user()->tweets()->create([
            'content' => $this->content,
        ]);

        $this->content = '';
    }

}
