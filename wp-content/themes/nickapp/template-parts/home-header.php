		<section class="hero">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 hero__info">
						

						<div class="row">
							<div class="col-sm-3">
								<img class="image-fit hero__image" src="images/app_logo.png" />
							</div>
							<div class="col-sm-9">
								<h1 class="hero__header">
									<?php
										if(get_field("header_text"))
										{
											echo get_field("header_text");	
										}
									?>
								</h1>
								<p class="hero__subhead">
									<?php
										if(get_field("header_subhead_text"))
										{
											echo get_field("header_subhead_text");	
										}
									?>
								</p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="callout callout-primary">
  								<h4 class="hero__download">
  									Download for free on the:
  								</h4>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<?php

									// check if the repeater field has rows of data
									if( have_rows('primary_platform') ):

 									// loop through the rows of data
    							while ( have_rows('primary_platform') ) : the_row();

					        // display a sub field value
    							echo '<a class="btn btn-default btn-lg" type="submit" href="' . get_sub_field("platform_link") . '" target="_blank">' . get_sub_field("platform_name") . '</a>';

    							endwhile;

									else :

    							// no rows found

									endif;

									?>
							</div>
						</div>
				</div>

				<div class="col-sm-4 text-center hero__phone">
					<img src="images/header_phone.png" />
				</div>

			</div>
		</section>



		<section class="light-bar">
			<section class="download-links container">
				<div class="row">
					<div class="col-sm-9 col-xs-8">
						<h4>Other platforms for the Nick app</h4>
					</div>
					<div class="col-sm-3 col-xs-4">
						<h5 class="text-right" data-toggle="modal" data-target=".bs-example-modal-lg">
							<a data-toggle="modal" data-target="#myModal">
								<span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
								Use on a Smart TV
							</a>
						</h5>
					</div>

				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">
				        	How to set up Nick on a Smart TV or Connected Device
				        </h4>
				      </div>
				      <div class="modal-body">
				      	<ol>
				      		<li>Launch your Nick app and select your favorite show or movie using the play button.</li>
				      		<li>You will be prompted to sign in.</li>
				      		<li>Go to fxnetworks.com/activate and enter your activation code.</li>
				      		<li>Choose your TV provider from the pop-up menu and sign in using your credentials.
				      			<small>
				      				For help finding your log-in details, please choose your TV provider and follow instructions to create/update your password.
				      			</small>
				      		</li>
				      		<li>After you successfully sign in, a "Sign-in completed" confirmation message will appear. Return to the FXNOW app and a "Congratulations" message will confirm the successful activation.</li>
				      		<li>Select "Continue" to watch the show/movie content you selected in step 1.</li>
				      	</ol>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
					<!--modal-->
				</div>				

				<div class="row">
					<div class="col-sm-12">
									<?php

									// check if the repeater field has rows of data
									if( have_rows('secondary_platforms') ):

 									// loop through the rows of data
    							while ( have_rows('secondary_platforms') ) : the_row();

					        // display a sub field value
    							echo '<a class="btn btn-default btn-lg" type="submit" href="' . get_sub_field("platform_link") . '" target="_blank">' . get_sub_field("platform_name") . '</a>';

    							endwhile;

									else :

    							// no rows found

									endif;

									?>
					</div>
				</div>
			</section>
		</section>
