<div>
    <h1 class="text-4xl font-bold text-red-600">LaraTweets </h1>

    <form action="" method="POST" wire:submit.live="create">
        {{-- Pessoa:
        <input type="text" name="person" id="person" wire:model.live = "usuario">
        @error('usuario')
            {{ 'insira um usuario válido' }}
        @enderror --}}
        <hr>
        Tweet:
        <input type="text" name="content" id="content" wire:model.live = "content">
        @error('content')
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
