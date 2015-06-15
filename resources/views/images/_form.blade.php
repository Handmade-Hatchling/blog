<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('image', 'Select Image:') !!}
    {!! Form::file('image', ['id' => 'image', 'accept' => 'image/*']) !!}
    <p class="help-block">Pick one or more images to upload.</p>
</div>

<div class="form-group">
    {!! Form::label('caption', 'Caption:') !!}
    {!! Form::text('caption', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('alt_text', 'Alt Text:') !!}
    {!! Form::text('alt_text', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
</div>

{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}

@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder: 'Choose a tag'
        });
    </script>
@endsection
