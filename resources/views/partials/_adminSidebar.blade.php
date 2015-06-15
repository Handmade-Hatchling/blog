<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li class="active"><a href="{{ url('/admin/') }}">Overview <span class="sr-only">(current)</span></a></li>
        <li>{!! link_to_action('AdminController@articles', 'Articles') !!}</li>
        <li>{!! link_to_action('AdminController@images', 'Images') !!}</li>
        <li>{!! link_to_action('AdminController@tags', 'Tags') !!}</li>
        <li>{!! link_to_action('AdminController@staff', 'Staff') !!}</li>
    </ul>
</div>
