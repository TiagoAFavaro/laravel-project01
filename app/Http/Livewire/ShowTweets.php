<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

use function Laravel\Prompts\error;

class ShowTweets extends Component
{
    public $message = '';

    public $usuario = '';

    protected $rules = [
        'message' => 'required|min:3|max:255',
        'usuario' => 'required|integer|exists:users,id'
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->get();
        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ]);
    }

    public function create()
    {
        $this -> validate();

        Tweet::create([
            'content' => $this->message,
            'user_id' => $this->usuario
        ]);

        $this->message = '';
    }

}
