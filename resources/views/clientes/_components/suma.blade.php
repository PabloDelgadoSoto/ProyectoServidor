<div>
    <form action="{{route('users.update')}}" method="post">
        @csrf
        @method('put')
    <h1>Precio total: {{$total}}</h1>
        <input type="submit" value="Pagar" id="pagar">
    </form>
</div>
