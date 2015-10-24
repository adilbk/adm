		<!-- One -->
			

			<section id="main" class="wrapper">
				<div class="container">
					<header class="major special">
						<h2>Notre Blog</h2>
						<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
					</header>

					<!-- Text -->
						<section>
							<?php foreach ($news_list as $u_key){ ?>
							<hr />

							<header>
								<h3><?php echo $u_key->title; ?></h3>
								<p><?php echo $u_key->text; ?></p>
							</header>
							<ul class="actions">
								<li>
									<a href="#" class="button alt">More</a>
								</li>
							</ul>
							<?php }?>
							
					</div>
				</section>