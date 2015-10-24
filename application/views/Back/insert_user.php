
<div class="container">
				<section>
							<h3>Ajouter Utilisateur</h3>
							<form method="post" action="<?php echo base_url();?>panel/insert_user">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" />
									</div>
									
									<div class="6u$ 12u$(xsmall)">
										<input type="mobile" name="mobile" id="mobile" value="" placeholder="mobile" />
									</div>
									
									<div class="12u$">
										<textarea name="address" id="address" placeholder="adresse" rows="6"></textarea>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Ajouter" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>



</div>


















