<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<table>
											<thead>
												<tr>
													<th>Nombres</th>
													<th>Apellidos</th>
													<th>Cedula</th>
													<th>Dirección</th>
													<th>Telefono</th>
												</tr>
											</thead>
											<tbody>
												@foreach($estudiante as $estudiante)
												<tr>
													<td>{{$estudiante->nombres}}</td>
													
                                                    <td>{{$estudiante->apellidos}}</td>

                                                    <td>{{$estudiante->cedula}}</td>

                                                    <td>{{$estudiante->direccion}}</td>

													<td>{{$estudiante->telefono}}</td>
												</tr>
											@endforeach
											<tfoot>
												
											</tfoot>
										</table>
</body>
</html>