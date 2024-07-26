@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Stat:</strong> page-header</p>
@endif

<!--header>
  <h1>{!! App\title() !!}</h1>
</header-->
<h1>{!! App\title() !!}</h1>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> page-header</p>
@endif