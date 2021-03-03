<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Date:</label>
           			    </div>
						<div class="col-lg-10">
             				 <input type="text" class="form-control" name="date" data-toggle="datepicker" value="Defaults to today's date">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Exercise:</label>
						</div>
						<div class="btn-group" data-toggle="buttons">
							<label class="btn btn-primary">
								<input type="radio" id="bench" name="exercise" value="Bench" /> Bench
							</label>
							<label class="btn btn-success">
								<input type="radio" id="curls" name="exercise" value="Curls" /> Curls
							</label>
							<label class="btn btn-info">
								<input type="radio" id="lats" name="exercise" value="Lats" /> Lats
							</label>
							<label class="btn btn-warning">
								<input type="radio" id="rows" name="exercise" value="Rows" /> Rows
							</label>
							<label class="btn btn-primary">
								<input type="radio" id="squats" name="exercise" value="Squats" /> Squats
							</label>
							<label class="btn btn-success">
								<input type="radio" id="other" name="exercise" value="Other" autofocus="true"/> Other
							</label>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Reps:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="reps">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Weight:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="weight">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Notes:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="notes">
						</div>
          </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
            </div>
        </div>
    </div>
