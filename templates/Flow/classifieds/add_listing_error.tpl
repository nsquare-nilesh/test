{if $listingTypeName == 'Job'}
	{title}[[Post a Job]]{/title}
	<h1 class="title__primary title__primary-small title__centered title__bordered">[[Post a Job]]</h1>
{else}
	{title}[[Create New Resume]]{/title}
	<h1 class="title__primary title__primary-small title__centered title__bordered">[[Create New Resume]]</h1>
{/if}
<div class="static-pages content-text">
	{if $error eq 'NOT_LOGGED_IN'}
		{module name="users" function="login"}
	{/if}
</div>