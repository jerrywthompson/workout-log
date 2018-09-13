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
							<div class="form-group has-feedback">
								<input type="text" class="form-control" name="date" data-toggle="datepicker" value="Defaults to today's date">
								<i class="glyphicon glyphicon-calendar form-control-feedback"></i>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:2px;">User:</label>
						</div>
						<div class="btn-group-user btn-group-justified" data-toggle="buttons">
							<label class="btn my-btn">
								<input type="radio" id="jerry" name="user" value="Jerry" /> Jerry
							</label>
							<label class="btn my-btn">
								<input type="radio" id="cindy" name="user" value="Cindy" /> Cindy
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:2px;">Exercise:</label>
						</div>
						<div class="btn-group btn-group-justified" data-toggle="buttons">
							<label class="btn my-btn">
								<input type="radio" id="bench" name="exercise" value="Bench" /> Bench
							</label>
							<label class="btn my-btn">
								<input type="radio" id="curls" name="exercise" value="Curls" /> Curls
							</label>
							<label class="btn my-btn">
								<input type="radio" id="lats" name="exercise" value="Lats" /> Lats
							</label>
							<label class="btn my-btn">
								<input type="radio" id="rows" name="exercise" value="Rows" /> Rows
							</label>
							<label class="btn my-btn">
								<input type="radio" id="squats" name="exercise" value="Squats" /> Squats
							</label>
							<label class="btn my-btn">
								<input type="radio" id="situps" name="situps" value="Situps" /> Situps
							</label>
							<label class="btn my-btn">
								<input type="radio" id="other" name="exercise" value="Other" /> Other
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:2px;">Reps:</label>
						</div>
						<div data-toggle="buttons">
							<div class="btn-group2 btn-group-justified">
								<label class="btn my-btn">
									<input type="radio" id="1" name="reps" value="1" /> 1
								</label>
								<label class="btn my-btn">
									<input type="radio" id="2" name="reps" value="2" /> 2
								</label>
								<label class="btn my-btn">
									<input type="radio" id="3" name="reps" value="3" /> 3
								</label>
								<label class="btn my-btn">
									<input type="radio" id="4" name="reps" value="4" /> 4
								</label>
								<label class="btn my-btn">
									<input type="radio" id="5" name="reps" value="5" /> 5
								</label>
								<label class="btn my-btn">
									<input type="radio" id="6" name="reps" value="6" /> 6
								</label>
								<label class="btn my-btn">
									<input type="radio" id="7" name="reps" value="7" /> 7
								</label>
								<label class="btn my-btn">
									<input type="radio" id="8" name="reps" value="8" /> 8
								</label>
							</div>
							<div style="height:5px;"></div>
							<div class="btn-group2 btn-group-justified">
								<label class="btn my-btn">
									<input type="radio" id="9" name="reps" value="9" /> 9
								</label>
								<label class="btn my-btn">
									<input type="radio" id="10" name="reps" value="10" /> 10
								</label>
								<label class="btn my-btn">
									<input type="radio" id="11" name="reps" value="11" /> 11
								</label>
								<label class="btn my-btn">
									<input type="radio" id="12" name="reps" value="12" /> 12
								</label>
								<label class="btn my-btn">
									<input type="radio" id="13" name="reps" value="13" /> 13
								</label>
								<label class="btn my-btn">
									<input type="radio" id="14" name="reps" value="14" /> 14
								</label>
								<label class="btn my-btn">
									<input type="radio" id="15" name="reps" value="15" /> 15
								</label>
								<label class="btn my-btn">
									<input type="radio" id="16" name="reps" value="16" /> 16
								</label>
							</div>
							<div style="height:5px;"></div>
							<div class="btn-group2 btn-group-justified">
								<label class="btn my-btn">
									<input type="radio" id="17" name="reps" value="17" /> 17
								</label>
								<label class="btn my-btn">
									<input type="radio" id="18" name="reps" value="18" /> 18
								</label>
								<label class="btn my-btn">
									<input type="radio" id="19" name="reps" value="19" /> 19
								</label>
								<label class="btn my-btn">
									<input type="radio" id="20" name="reps" value="20" /> 20
								</label>
								<label class="btn my-btn">
									<input type="radio" id="21" name="reps" value="21" /> 21
								</label>
								<label class="btn my-btn">
									<input type="radio" id="22" name="reps" value="22" /> 22
								</label>
								<label class="btn my-btn">
									<input type="radio" id="23" name="reps" value="23" /> 23
								</label>
								<label class="btn my-btn">
									<input type="radio" id="24" name="reps" value="24" /> 24
								</label>
							</div>
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
