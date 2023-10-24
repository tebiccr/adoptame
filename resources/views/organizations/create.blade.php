<h1>Ingresar Nombre de la Organización Que será parte de Adoptame.cl</h1>

<form action="{{ route('organization.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nombre de la Organización" autocomplete="off">
    <br><br>
    <input type="text" name="address" placeholder="Direccion de la organización" autocomplete="off">
    <br><br>

    <button type="submit">Guardar</button>
</form>
