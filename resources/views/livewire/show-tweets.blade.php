<div>
    <h1> 
        Tweeter do Titi 
    </h1>

    <form action="" method="POST" wire:submit.live="create">
        Pessoa:
        <input type="text" name="person" id="person" wire:model.live = "usuario">
        @error('usuario')
            {{ 'insira um usuario válido' }}
        @enderror
        <hr>
        Tweet:
        <input type="text" name="message" id="message" wire:model.live = "message">
        @error('message')
            {{ 'erro ao criar' }}
        @enderror
        <button type="submit">Criar Tweet</button>
    </form>

        <P> NOME......................TWEET</P>
    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }}   =>   {{ $tweet->content }}
        <br>
    @endforeach
   
    <div>
        {{ $tweets->links() }}
    </div>
</div>
