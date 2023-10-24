<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</header>

<body>
    <h1>Soy el Index de Organization y debería mostrar todos los datos que hay</h1>
    <hr>
    <p>Se enchula se pone mas bonito bootrap, css grid, etc etc etc</p>
    pero lo que importa es que <strong><b>FUNCIONE</b></strong>
    ACA NO SE PREOCUPEN TANTO DE COMO LO MUESTRO, CADA LP TIENE SU MANERA DIFERENTE DE HACERLO, centrense más que estoy
    enviando datos desde el controlador a la vista para que lo pueda ver el usuario
    <hr>

    <h4>Las organizaciones inscristas en adoptame.cl son:</h4>

    <a href="{{ route('organization.create') }}"><button type="button">Agregar Organizacion</button> </a>

    <table class="table table-bordered">
        <thead>
            <th> Nombre</th>
            <th> Direccion</th>
            <th> Editar</th>
            <th> Eliminar</th>
        </thead>
        @foreach ($organizations as $organization)
            <tr>
                <td>{{ $organization->name }}</td>
                <td>{{ $organization->address }}</td>
                <td><a href="{{ route('organization.edit', $organization->id) }}"><button
                            type="button">Editar</button></a>
                </td>
                <td>
                    <a onclick="confirm('¿Está seguro que desea eliminar la organizacion de adoptame.cl?')">
                        <form action="{{ route('organization.destroy', $organization->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </a>
                </td>
                </form>
            </tr>
        @endforeach
    </table>
</body>

</html>
