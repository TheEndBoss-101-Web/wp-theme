@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> content-page</p>
@endif

@php(the_content())
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> content-page</p>
@endif