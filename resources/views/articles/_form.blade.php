<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at', 'Published On:') !!}
    {!! Form::input('date', 'published_at', $article->published_at, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::label('image_list', 'Select Image:') !!}
    {!! Form::select('image_list[]', $images, null, ['id' => 'image_list', 'class' => 'form-control', 'multiple']) !!}
    <p class="help-block">Pick one or more images to add to the current article.</p>
</div>

{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}

@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder: 'Choose a tag'
        });
//        $("#image_list").fileinput({
//            previewFileType: "image",
//            browseClass: "btn btn-success",
//            browseLabel: "Pick Image",
//            browseIcon: '<i class="glyphicon glyphicon-picture"></i>',
//            removeClass: "btn btn-danger",
//            removeLabel: "Delete",
//            removeIcon: '<i class="glyphicon glyphicon-trash"></i>',
//            uploadClass: "btn btn-info",
//            uploadLabel: "Upload",
//            uploadIcon: '<i class="glyphicon glyphicon-upload"></i>',
//            overwriteInitial: true
//        });
    </script>
@endsection
