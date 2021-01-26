
<div class="inner">
<h2>Actualizar Banner</h2>

					<!-- Boxes -->
						


								
								<div class="table-wrapper">
									<form name="bannerform" action="{{url('guardarBanner')}}" method="POST">
										@csrf
										<table>
											<thead>
												<tr>
													<th>Título</th>
													<th>Descripción</th>
													<th>Imagen</th>
													<th>Fondo</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><input type="text" name="bnTitulo" id="bnTitulo" value="{{$banner->bn_titulo}}"/></td>
													
                                                    <td><input type="text" name="bnDescripcion" id="bnDescripcion" value="{{$banner->bn_descripcion}}"/></td>

                                                    <td><input type="text" name="bnImagen" id="bnImagen" value="{{$banner->bn_imagen}}"/></td>

                                                    <td><input type="text" name="bnFondo" id="bnFondo" value="{{$banner->bn_fondo}}"/></td>

												
												</tr>
											
											<tfoot>
												
											</tfoot>
										</table>
										<input type="submit" name="" value="Guardar">
									</form>
								</div>

							
						</div>