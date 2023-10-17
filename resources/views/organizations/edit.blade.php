<h1>Editar {{$organization->name}}</h1>
<form action="{{ route('organization.update', $organization->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Nombre de la Organización" autocomplete="off" value="{{ $organization->name }}">
    <br><br>
    <input type="text" name="address" placeholder="Direccion de la organización" autocomplete="off" value="{{ $organization->address }}">
    <br><br>

    <button type="submit">Actualizar</button>
</form>
