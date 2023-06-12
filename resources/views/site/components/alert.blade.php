<div class="alert alert-danger">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
           <p class="text-red-600 font-bold">{{$error}}</p>  
        @endforeach
    @endif
</div>