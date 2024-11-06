Inicio(Despliegue de Datos)

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>idcontry</th>
            <th>contryname</th>
            <th>contry_e</th>
           <th>contry_idmh</th>
          
            
        </tr>
    </thead>
    
    <tbody>
        @foreach ( $contry as $contry)
tr>
            <td>{{$loop->iteration}} </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
