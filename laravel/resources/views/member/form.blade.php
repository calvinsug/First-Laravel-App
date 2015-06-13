<script type="text/javascript">
	$(document).ready(function(){

		$('#uploadFile').css({'width':'300px','float':'left','margin-top':'10px'});
		$('input[name="photo"]').change(function(e){
			files = e.target.files;
			$('#uploadFile').val(files[0].name);

			acceptedFile = ['image/jpeg','image/png','image/gif'];
					
			if(jQuery.inArray( files[0].type, acceptedFile) == -1)
				alert('file must be jpg/gif/png files.');
		});

	});

</script>

<div class="form-group {{$errors->has('name') ? 'has-error' : ''  }}">

	{!! Form::label('name','Name:',array('class' => 'lblTitle','id' => 'idTitle')) !!}

	{!! Form::text('name',null, ['class'=> 'form-control'] ) !!}
	
	{{-- <span class="help-block">{{ $errors->first('title') }}</span>  --}}

	{!! $errors->first('name','<span class="help-block">:message</span>' )  !!}
</div>

<div class="form-group {{$errors->has('address') ? 'has-error' : ''  }}">
	{!! Form::label('address','Address:') !!}
	{!! Form::textarea('address',null, ['class'=> 'form-control'] ) !!}
	{!! $errors->first('address','<span class="help-block">:message</span>' )  !!}	
</div>

<div class="form-group {{$errors->has('email') ? 'has-error' : ''  }}">

	{!! Form::label('email','Email:', ['id' => 'lblSlug' ,'class' => 'classSlug'] ) !!}

	{!! Form::text('email',null, ['class'=> 'form-control'] ) !!}
	{!! $errors->first('email','<span class="help-block">:message</span>' )  !!}
</div>

<div class="form-group {{$errors->has('phone') ? 'has-error' : ''  }}">

	{!! Form::label('phone','Phone:', ['id' => 'lblSlug' ,'class' => 'classSlug'] ) !!}

	{!! Form::text('phone',null, ['class'=> 'form-control'] ) !!}
	{!! $errors->first('phone','<span class="help-block">:message</span>' )  !!}
</div>

<div class="form-group {{$errors->has('dob') ? 'has-error' : ''  }}">

	{!! Form::label('dob','Date of Birth:') !!}

	{!! Form::input('date' ,'dob',null, ['class'=> 'form-control'] ) !!}
	{!! $errors->first('dob','<span class="help-block">:message</span>' )  !!}
</div>

{!! Form::label('photo','Photo:') !!}
<div class="form-group {{$errors->has('photo') ? 'has-error' : ''  }}">

	
	{!! Form::text('txtPhoto',null, ['id' => 'uploadFile' ,'class'=> 'form-control','placeholder' => 'Choose File', 'disabled' => 'disabled'] ) !!}

	<div class="fileUpload btn btn-primary">
   		<span>Upload</span>
		{!! Form::file('photo',[ 'id' => 'uploadBtn' ,'class' => 'upload','accept' => 'image/x-png, image/gif, image/jpeg']) !!}
	</div>
	{!! $errors->first('photo','<span class="help-block">:message</span>' )  !!}

</div>

<div class="clearfix"></div>

<div class="form-group">
	{!! Form::submit('Update Member', ['class'=> 'btn btn-primary'] ) !!}
</div>