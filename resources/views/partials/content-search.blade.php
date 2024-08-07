@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> content-search</p>
@endif


@php( $post_id = get_the_ID() )
@php( $post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' ) )

<li class="usa-collection__item">
  <?php //article @php(post_class())?>
    @if ($post_thumbnail)
      <img class="usa-collection__img" src="{!! esc_url( $post_thumbnail[0] ) !!}" alt="{!! get_the_post_thumbnail_caption() !!}">
    @endif
    <div class="usa-collection__body">
      <?php //header?>
        <h4 class="usa-collection__heading">
          <a class="usa-link" href="{{ get_permalink() }}">{{ get_the_title() }}</a>
        </h4>
      <?php ///header?>
      <p class="usa-collection__description">
      @php(the_excerpt())
      </p>
      <ul class="usa-collection__meta" aria-label="More information">
        <li class="usa-collection__meta-item">
          {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author">{{ get_the_author() }}</a>
        </li>
        <li class="usa-collection__meta-item">
          <time datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
        </li>
      </ul>
      <ul class="usa-collection__meta" aria-label="Topics">
        <?php
          echo($category_tags);
        ?>
        <li class="usa-collection__meta-item usa-tag usa-tag--new">New</li>
      </ul>
    </div>
  <?php ///article?>
</li>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> content-search</p>
@endif
