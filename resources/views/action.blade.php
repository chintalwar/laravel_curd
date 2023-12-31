<!-- Edit Modal -->
<div class="modal fade" id="edit{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Edit Member</h4>
			</div>
			<div class="modal-body">
				{!! Form::model($members, [ 'method' => 'patch','route' => ['member.update', $member->id] ]) !!}
			    	<div class="form-group">
						<div class="row">
				    		<div class="col-md-2" style="margin-top:7px;">
				    			{!! Form::label('firstname', 'Firstname') !!}
				    		</div>
				    		<div class="col-md-10">
				    			{!! Form::text('firstname', $member->firstname, ['class' => 'form-control']) !!}
				    		</div>
				    	</div>
			    	</div>
			    	<div class="form-group">
			    		<div class="row">
				    		<div class="col-md-2" style="margin-top:7px;">
				    			{!! Form::label('lastname', 'Lastname') !!}
				    		</div>
				    		<div class="col-md-10">
				    			{!! Form::text('lastname', $member->lastname, ['class' => 'form-control']) !!}
				    		</div>
				    	</div>
			    	</div>
					 <div class="form-group">
                    <div class="row">
                        <div class="col-md-2" style="margin-top:7px;">
                            {!! Form::label('email','Email') !!}
                        </div>
                        <div class="col-md-10">
                            {!! Form::text('email',  $member->email, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2" style="margin-top:7px;">
                            {!! Form::label('phone','Phone') !!}
                        </div>
                        <div class="col-md-10">
                            {!! Form::text('Phone', $member->phone, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
				<div class="form-group">
                    <div class="row">
                        <div class="col-md-2" style="margin-top:7px;">
                            {!! Form::label('Gender','gender') !!}
                        </div>
                        <div class="col-md-10">
                            {!! Form::text('Gender', $member->gender, ['class' => 'form-control']) !!}
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
                                <option @if($member->state =="ASSAM")selected @endif value="ASSAM">Assam
                                </option>
								 <option @if($member->state =="Bihar")selected @endif  value="Bihar">Bihar
                                </option>
								 <option  @if($member->state =="Goa")selected @endif value="Goa">Goa
                                </option>
								 <option  @if($member->state =="Maharashtra")selected @endif value="Maharashtra">Maharashtra
                                </option>
								 <option  @if($member->state =="Delhi")selected @endif value="Delhi">Delhi
                                </option>
							
                           
                        </select>
						</div>
						</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
				{{Form::button('<i class="fa fa-check-square-o"></i> Update', ['class' => 'btn btn-success', 'type' => 'submit'])}}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="delete{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Delete Member</h4>
			</div>
			<div class="modal-body">
				{!! Form::model($members, [ 'method' => 'delete','route' => ['member.delete', $member->id] ]) !!}
					<h4 class="text-center">Are you sure you want to delete Member?</h4>
					<h5 class="text-center">Name: {{$member->firstname}} {{$member->lastname}}</h5>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
				{{Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>