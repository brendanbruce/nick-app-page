<section class="light-bar">
			<section class="container">
				<div class="row">
					
					<div class="col-sm-4">
						<div class="email-image">
							<img src="images/image_static.png" class="image-fit">
						</div>
					</div>
					
					<div class="col-sm-8">
						<h2>
						<?php
							if(get_field("email_header"))
								{
									echo get_field("email_header");	
								}
						?>
						</h2>
						
						<p>
							<?php
								if(get_field("email_body_copy"))
									{
										echo get_field("email_body_copy");	
									}
							?>
						</p>
            
            <a class="btn btn-default" href="signup.html">Sign Up Now!</a>
						<form>
                <!--
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
						  </div>
						  <div class="checkbox">
						    <label>
						      <input type="checkbox"> I authorize Nick to send me updates and information about the latest and greatest in the Nick app
						    </label>
						  </div>
						  <button type="submit" class="btn btn-primary">Submit</button>
                -->
						</form>
					</div>

				</div>
			</section>
		</section>