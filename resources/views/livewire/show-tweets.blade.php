<div>
    Show Tweets

    <p>{{ $message }}</p>

    <input type="text" name="message" id="message" wire:model.live = "message">

    <hr>
        <P> NOME......................TWEET</P>
    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }}   =>   {{ $tweet->content }}
        <br>
    @endforeach
</div>
