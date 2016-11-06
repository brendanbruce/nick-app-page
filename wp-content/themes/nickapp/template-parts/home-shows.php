<section class="benefits container">
			<div class="row">
				<div class="col-sm-12">
					<h2>
						<?php
							if(get_field("favorite_shows_header"))
								{
									echo get_field("favorite_shows_header");	
								}
						?>
					</h2>
					<p>
						<?php
							if(get_field("favorite_shows_text"))
								{
									echo get_field("favorite_shows_text");	
								}
						?>
					</p>
				</div>
			</div>
			
			<div class="row">
    		<div class="col-xs-4">
    			<div class="panel panel-default" data-toggle="modal" data-target="#myModalVideo">
  					<div class="panel-body">
				    	<img src="images/play_placeholder.jpg" class="image-fit">
		    			<h4 class="text-center">TMNT</h4>
						</div>
					</div>
	    	</div>
	    	
	    	<div class="col-xs-4">
	    		<div class="panel panel-default" data-toggle="modal" data-target="#myModalVideo">
  					<div class="panel-body">
				    	<img src="images/play_placeholder.jpg" class="image-fit">
		    			<h4 class="text-center">Loud House</h4>
						</div>
					</div>
 				</div>
		    
		    <div class="col-xs-4">
		    	<div class="panel panel-default" data-toggle="modal" data-target="#myModalVideo">
  					<div class="panel-body">
						  <img src="images/play_placeholder.jpg" class="image-fit">
		    			<h4 class="text-center">Game Shakers</h4>
						</div>
					</div>
 				</div>
			</div>		
		</section>