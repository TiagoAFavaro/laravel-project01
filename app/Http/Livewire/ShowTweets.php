<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{
    public $message = 'Apenas um teste';

    public function render()
    {
        $tweets = Tweet::with('user')->get();
        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ]);
    }

    public function create()
    {
        if ($this->message == null) {
            return response()->json([
                'erro' => 'oooooo karaiooo',
            ]);

        }

        Tweet::create([
            'content' => $this->message,
            'user_id' => 9,
        ]);

        $this->message = '';
    }
}
