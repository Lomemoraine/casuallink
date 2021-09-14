<div class="modal fade" id="update_modal<?php echo $fetch['idno']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_query.php">
				<div class="modal-header">
					<h3 class="modal-title"><center > Rate worker <?php echo $fetch['fname'];?> on a scale of 1-10</center></h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Fullname</label>
						<input type="hidden" name="idno" value="<?php echo $fetch['idno']?>"/>
						
							<input type="text" name="firstname" value="<?php echo $fetch['fname']?>" class="form-control" required="required" disabled/>
						</div>
						<div class="form-group">
							<label>rate</label>
							<input type="number" name="lastname" value="" class="form-control" required="required" />
						</div>
						
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
			</form>
				</div>
			
			
		</div>
	</div>
</div>