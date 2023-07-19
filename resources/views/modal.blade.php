<!-- Add Modal -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Add New Member</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => 'save']) !!}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2" style="margin-top:7px;">
                            {!! Form::label('firstname', 'Firstname') !!}
                        </div>
                        <div class="col-md-10">
                            {!! Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Input Firstname', 'required']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2" style="margin-top:7px;">
                            {!! Form::label('lastname', 'Lastname') !!}
                        </div>
                        <div class="col-md-10">
                            {!! Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Input Lastname', 'required']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2" style="margin-top:7px;">
                            {!! Form::label('email','Email') !!}
                        </div>
                        <div class="col-md-10">
                            {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Input Email', 'required']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2" style="margin-top:7px;">
                            {!! Form::label('phone','Phone') !!}
                        </div>
                        <div class="col-md-10">
                            {!! Form::text('Phone', '', ['class' => 'form-control', 'placeholder' => 'Input Phone', 'required']) !!}
                        </div>
                    </div>
                </div>
                 <div class="form-group">
                    <div class="row">
                        <div class="col-md-2" style="margin-top:7px;">
                            {!! Form::label('Gender','gender') !!}
                        </div>
                        <div class="col-md-10">
                            {!! Form::text('Gender', '', ['class' => 'form-control', 'placeholder' => 'Input gender', 'required']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
					   <div class="col-md-2" style="margin-top:7px;">
                            {!! Form::label('tate','State') !!}
                        </div>
					   <div class="col-md-10">
                        <select class="form-control" id="selectState" name="resoureceName">

                       
                          
                                <option value="ASSAM">Assam
                                </option>
								 <option value="Bihar">Bihar
                                </option>
								 <option value="Goa">Goa
                                </option>
								 <option value="Maharashtra">Maharashtra
                                </option>
								 <option value="Delhi">Delhi
                                </option>
							
                           
                        </select>
						</div>
						</div>
                    </div>
                </div>
         
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                    Cancel</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                {!! Form::close() !!}
            </div>
        </div>
		</div>
 
</div>
