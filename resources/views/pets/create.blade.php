<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</header>

<body>

    <h6> Ingresar datos de mascota</h6>
    <form method="POST" action="{{ route('pet.store') }}">
        @csrf

        <select class="col-6 form-select" name="organization_id">
            @foreach ($organizations as $organization)
                <option value="{{$organization->id}}">{{$organization->name}}</option>
            @endforeach
        </select>


        <br><br><br><br>


        <input type="text" class="col-6" name="nickname" placeholder="Sobrenombre mascota en adopción"
            autocomplete="off">

        <br><br>

        <select class="col-6 form-select" name="type">
            <option value="Perro">Perro</option>
            <option value="Gato">Gato</option>
        </select>

        <br><br>


        <button type="submit" class="btn btn-primary">Guardar Mascota</button>
    </form>

</body>

</html>
