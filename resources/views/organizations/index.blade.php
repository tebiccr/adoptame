<h1>Soy el Index de Organization y debería mostrar todos los datos que hay</h1>
<hr>
<p>Se enchula se pone mas bonito bootrap, css grid, etc etc etc</p>
pero lo que importa es que <strong><b>FUNCIONE</b></strong>
ACA NO SE PREOCUPEN TANTO DE COMO LO MUESTRO, CADA LP TIENE SU MANERA DIFERENTE DE HACERLO, centrense más que estoy
enviando datos desde el controlador a la vista para que lo pueda ver el usuario
<hr>
<hr><hr>

<h4>Las organizaciones inscristas en adoptame.cl son:</h4>

<a href="{{ route('organization.create') }}"><button type="button">Agregar Organizacion</button></a>

<ol>
    @foreach ($organizations as $organization)
        <li>{{ $organization->name }}</li> <a href="{{ route('organization.edit', $organization->id) }}"><button type="button">Editar</button></a>
    @endforeach
</ol>
