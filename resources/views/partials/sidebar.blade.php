@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> sidebar</p>
@endif

@php(dynamic_sidebar('sidebar-primary'))

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> sidebar</p>
@endif