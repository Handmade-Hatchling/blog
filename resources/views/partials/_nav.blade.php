<nav role="navigation" class="site__nav">
    <span class="nav__tab">{!! link_to_action('ArticlesController@index', 'Articles', [], ['class' => 'nav__link']) !!}</span> <!-- /.nav__link -->
    <span class="nav__tab">{!! link_to_action('PagesController@gallery', 'Gallery', [], ['class' => 'nav__link']) !!}</span> <!-- /.nav__link -->
    <span class="nav__tab">{!! link_to_action('PagesController@about', 'About', [], ['class' => 'nav__link']) !!}</span> <!-- /.nav__link -->
    <span class="nav__tab">{!! link_to_action('PagesController@createContact', 'Contact', [], ['class' => 'nav__link']) !!}</span> <!-- /.nav__link -->
</nav> <!-- /.site__nav -->
