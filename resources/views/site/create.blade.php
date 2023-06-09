<h1>Criar novo evento</h1>

<form method="POST" class="max-w-md mx-auto" action="{{route('events.store')}}">
    @include('site.components.alert')
    @include('site.partials.form')
</form>