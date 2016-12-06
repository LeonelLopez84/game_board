<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
	<section class="item">
		<div id="card" class="<?php echo (empty($regalo->ganador))?"":"flipped"; ?>">
			<figure class="front">
				<span><?php echo $regalo->indice ?></span>
			</figure>
			<figure class="back">
				<div class="panel panel-default">
				 <div class="panel-heading" style="background-image: url(<?php echo base_url('assets/img/regalos/'.$regalo->id.'.jpg') ?>);">
					
				</div>
				  <div class="panel-body">
					    
					   <div class="info">
					      <div class="title">
					         <?php echo $regalo->regalo ?>
					      </div>
					      <div class="desc"></div>
					   </div>
				  </div>
				  <div class="panel-footer">
						<div class="input-group form-group form-group-sm">
						
			            	<input type="text" class="form-control" placeholder="Ganador" name="ganador[]" id="<?php echo $regalo->id ?>" value="<?php echo $regalo->ganador ?>" <?php echo (empty($regalo->ganador))?"":"disabled"; ?> >
			            	<div class="input-group-btn">
				                <button value="<?php echo $regalo->id ?>" name="idregalo[]" class="btn btn-sm btn-default" type="button"><i class="glyphicon glyphicon-gift"></i></button>
				            </div>
			        </div>
				  </div>
				</div>
			</figure>
		</div>
	</section>

</div>