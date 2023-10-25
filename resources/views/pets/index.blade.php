<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</header>

<body>

    <h1>Mascotas en adopción</h1>
    <br>
    <a href="{{ route('pet.create') }}"><button type="button" class="btn btn-primary">Agregar Mascota</button> </a>

    <table class="table table-bordered">
        <thead>
            <th>Nombre Mascota</th>
            <th>Tipo</th>
            <th>Organizacion (direccion)</th>
        </thead>
        <tbody>
            @foreach ($pets as $pet)
                <tr>
                    <td> {{ $pet->nickname }}</td>
                    <td> {{ $pet->type }}</td>
                    <tD>{{ $pet->organization->name }}</tD>
                </tr>
            @endforeach

        </tbody>

    </table>





</body>



</html>
