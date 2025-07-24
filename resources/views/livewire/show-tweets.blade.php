<div>
    Show Tweets

    <p>{{ $message }}</p>

    <form action="" method="POST" wire:submit.live="create">
        <input type="text" name="message" id="message" wire:model.live = "message">
        <button type="submit">Criar Tweet</button>
    </form>

    <hr>
        <P> NOME......................TWEET</P>
    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }}   =>   {{ $tweet->content }}
        <br>
    @endforeach
</div>
