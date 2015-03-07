<table
  id="usuarios-full"
  data-toggle="table"
  data-search="true"
  data-height="400"
  data-pagination="true"
  data-page-list="[10, 25, 50, 100]"
  data-show-toggle="true"
  data-show-columns="true"
  data-maintain-selected="true"
  data-sort-name="first_name"
  >
  <thead>
    <th data-field="first_name" data-sortable="true" data-switchable="false">
      Primer Nombre
    </th>
    <th data-field="first_surname" data-sortable="true" data-switchable="false">
      Primer Apellido
    </th>
    <th data-field="cedula" data-sortable="true" data-switchable="true">
      Cedula
    </th>
    <th data-field="email" data-sortable="true" data-switchable="true">
      Correo Electronico
    </th>
    <th data-field="phone" data-sortable="true" data-switchable="true">
      Telefono
    </th>
    @if ($habitantes)
    <th data-field="action" data-formatter="habitantesFormatter" data-events="habitantesEvents">Acciones</th>
    @else
      <th data-field="action" data-formatter="sinHabitantesFormatter" data-events="sinHabitantesEvents">Acciones</th>
    @endif
  </thead>
  <tbody>
    @foreach ($usuarios as $usuario)
      <tr>
        <td>{{ $usuario->first_name }}</td>
        <td>{{ $usuario->first_surname }}</td>
        <td>{{ $usuario->identity_card }}</td>
        <td>{{ $usuario->email }}</td>
        <td>{{ $usuario->phone }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
