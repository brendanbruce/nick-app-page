<section class="benefits container">
			<div class="row">
				<div class="col-sm-12">
					<h2>
						<?php
							if(get_field("event_header_text"))
								{
									echo get_field("event_header_text");	
								}
						?>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-xs-8">
							<div class="panel panel-default" data-toggle="modal" data-target="#myModalEvents">
		  					<div class="panel-body">
						    	<img src="images/play_placeholder.jpg" class="image-fit">
								</div>
							</div>
						</div>
						<div class="col-xs-4">
				    	<img src="http://placehold.it/400x300" class="image-fit margin-bottom">
				    	<img src="http://placehold.it/400x300" class="image-fit">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
		    	<p>
						<?php
							if(get_field("event_body_text"))
								{
									echo get_field("event_body_text");	
								}
						?>
					</p>
				</div>
			</div>
		</section>