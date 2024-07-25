@extends('layouts.app')

@section('content')

<main class="usa-grid usa-section usa-content usa-layout-docs" id="main-content">
    <div class="usa-width-one-whole usa-layout-docs-main_content">
  @while (have_posts()) @php(the_post())
    <?php //@include('main/content-single-'.get_post_type()) ?>
    @include('main/content-single')
  @endwhile
    </div>
</main>
@endsection
