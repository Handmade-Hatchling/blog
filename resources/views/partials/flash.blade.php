@if (Session::has('flash_message'))
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 alert alert-success {{ Session::has('flash_message_important') ? 'alert-important' : '' }}">
        @if (Session::has('flash_message_important'))
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        @endif

        {{ session('flash_message') }}
    </div>
@endif
