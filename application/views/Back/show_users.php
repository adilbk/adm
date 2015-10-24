<div class="container">

<section>
							<h3>Articles</h3>
							
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>Titre</th>
											<th>Description</th>
											<th>Editer</th>
											<th>Supprimer</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($users_list as $u_key){ ?>
										<tr>
											<td><?php echo $u_key->name; ?></td>
											<td><?php echo $u_key->email; ?></td>
											<td>Editer</td>
											<td>Supprimer</td>

										</tr>
										
									</tbody>
									<?php }?>
								</table>
							</div>

						</div>