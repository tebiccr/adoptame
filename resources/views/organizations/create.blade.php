<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</header>

<body>

    <h1>Ingresar Nombre de la Organización Que será parte de Adoptame.cl</h1>

    <form action="{{ route('organization.store') }}" method="POST">
        @csrf
        <input type="text" class="col-6"  name="name" placeholder="Nombre de la Organización" autocomplete="off">
        <br><br>
        <input type="text" class="col-6" name="address" placeholder="Direccion de la organización" autocomplete="off">
        <br><br>

        <button type="submit" class="btn btn-outline-primary">Guardar</button>
        <a class="btn btn-outline-secondary" href="{{ route('organization.index') }}">Cancelar</a>
    </form>
</body>

</html>
