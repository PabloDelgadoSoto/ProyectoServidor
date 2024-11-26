<x-auth-session-status :status="session('status')" />
    <form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <h3>Email</h3>
        <input id="email" type="email" name="email" required/>
        @error('email')
            <div>
                <h4>{{$message}}</h4>
            </div>
        @enderror
    </div>
    <div>
        <h3>Contraseña</h3>
        <input id="password" type="password" name="password" required/>
        @error('password')
            <div>
                <h4>{{$message}}</h4>
            </div>
        @enderror
    </div><br>
    <div>
        <input type="submit" value="Iniciar sesión">
    </div>
</form>
<a href={{route('users.create')}}>Crear cuenta</a>
