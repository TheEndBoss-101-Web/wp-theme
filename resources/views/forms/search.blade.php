<?php/*
<form accept-charset="UTF-8" action="<?= get_site_url(); ?>/" id="search_form" method="get" class="usa-search usa-search-small js-search-form">
  <div role="search">
    <div style="margin:0;padding:0;display:inline"><!-- todo-config --><input name="utf8" type="hidden" value="YOUR_VALUE" /></div>
    <!-- todo-config -->
    <input id="affiliate" name="affiliate" type="hidden" value="YOUR_VALUE" />
    <?php /*
    @if ($thisSite)
    <!-- todo-config -->
    <input id="dc" name="dc" type="hidden" value="YOUR_VALUE" />
    @endif * / ?>
    <label class="usa-sr-only" for="query">Enter Search Term(s):</label>
    <input autocomplete="off" id="query" name="s" type="search" placeholder="Search">
    <button type="submit" name="commit" value="Search">
      <span class="usa-sr-only">Search</span>
    </button>
  </div>
</form>
*/?>
<section aria-label="Search component">
  <form accept-charset="UTF-8" action="{{ esc_url(home_url('/')) }}" id="search_form" method="get" class="usa-search usa-search--small" role="search">
    <label class="usa-sr-only" for="search-field">Search</label>
    <input class="usa-input" id="search-field" type="search" placeholder="Search" name="s" />
    <button class="usa-button" type="submit">
      <img src="@asset('images/usa-icons-bg/search--white.svg')" class="usa-search__submit-icon" alt="Search" />
    </button>
  </form>
</section>