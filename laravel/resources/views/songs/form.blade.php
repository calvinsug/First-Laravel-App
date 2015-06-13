<div class="form-group {{$errors->has('title') ? 'has-error' : ''  }}">

	{!! Form::label('title','Title:',array('class' => 'lblTitle','id' => 'idTitle')) !!}

	{!! Form::text('title',null, ['class'=> 'form-control'] ) !!}
	

	{{-- <span class="help-block">{{ $errors->first('title') }}</span>  --}}

	{!! $errors->first('title','<span class="help-block">:message</span>' )  !!}

</div>

<div class="form-group">
	{!! Form::label('lyrics','Lyrics:') !!}
	{!! Form::textarea('lyrics',null, ['class'=> 'form-control'] ) !!}
	
</div>

<div class="form-group {{$errors->has('slug') ? 'has-error' : ''  }}">

	{!! Form::label('slug','Slug:', ['id' => 'lblSlug' ,'class' => 'classSlug'] ) !!}

	{!! Form::text('slug',null, ['class'=> 'form-control'] ) !!}
	{!! $errors->first('slug','<span class="help-block">:message</span>' )  !!}
</div>

<div class="form-group">
	{!! Form::submit('Update Song', ['class'=> 'btn btn-primary'] ) !!}
</div>