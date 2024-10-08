@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> content-single</p>
@endif

<article @php(post_class())>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials.entry-meta')
  </header>
  <div class="entry-content">
    @php(the_content())
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  <?php //@php(comments_template('/partials/main.blade.php')) ?>
  @php(comments_template())
</article>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> content-single</p>
@endif