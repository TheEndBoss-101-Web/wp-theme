@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> app</p>
@endif

<!DOCTYPE html>
<!--[if lt IE 9]><html class="lt-ie9" @php(language_attributes())><![endif]-->
<!--[if gt IE 8]><!--><html @php(language_attributes())><!--<![endif]-->
  @include('sections.head')
  @include('sections.body')
</html>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> app</p>
@endif