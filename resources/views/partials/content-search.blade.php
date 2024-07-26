@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> content-search</p>
@endif
<article @php(post_class())>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @if (get_post_type() === 'post')
      @includeWhen(get_post_type() === 'post', 'partials.entry-meta')
    @endif
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> content-search</p>
@endif