

<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box">
							<h3 class="section-title">About Us</h3>
							<p>RG Fitness, strives for the absolute best out of all members.
								Our great team will provide support and motivation as well as the necessary resources you need to get fit.
								You can sign up for various classes and personal training sessions with our fantastic trainers. </p>
						</div>

						<div class="col-md-4 animate-box">
							<h3 class="section-title">Customer Service </h3>
							<ul class="contact-info">
								<li class="menu__link menu__link--level-1"><a href="faq.php">FAQ&#039;s</a></li>
								<li class="menu__link menu__link--level-1"><a href="terms.php">Terms &amp; Conditions</a></li>
								<li class="menu__link menu__link--level-1"><a href="cookie.php">Cookie Policy</a></li>
								<li class="menu__link menu__link--level-1"><a href="privacy.php">Privacy Policy</a></li>

									<?php  if (isset($_SESSION['user'])) : ?>
										<li><a href="Welcome.php"><?php echo $_SESSION['user']['username']; ?></a></li>
										<li><a href="login.php?logout='1'" style="color: red;">logout</a></li>
									<?php endif ?>
							</ul>
						</div>
						<div class="col-md-4 animate-box">
							<h3 class="section-title">View Cart</h3>
								<p>Please click the button below to view the items in your Shopping Cart before proceeding to checkout.</p>
								<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="business" value="7PZJLHGEC5DDQ">
								<input type="hidden" name="display" value="1">
								<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
								</form>
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="https://twitter.com/Fitness_RG"><i class="icon-twitter2"></i></a>
								<a href="https://www.facebook.com/RG-Fitness-1610164359233735/"><i class="icon-facebook2"></i></a>
								<a href="https://www.instagram.com/rgfitness01/?hl=en"><i class="icon-instagram"></i></a>
							</p>
							<p>Copyright of <a href="#">RG Fitness</a>. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
