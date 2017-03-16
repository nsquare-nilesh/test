{assign var='index' value=$listing_search.current_page*$listing_search.listings_per_page-$listing_search.listings_per_page}
{foreach from=$listings item=listing name=listings}
	{if $listing.api}
		{if $smarty.request.page == '1' && $smarty.foreach.listings.first}
			{$listing.code}
		{/if}
		<article class="media well listing-item listing-item__jobs listing-item__no-logo listing_item__backfilling">
            <div class="media-left listing-item__logo">
            </div>
			<div class="media-body">
                <div class="listing-item__date">
                    {$listing.activation_date|date}
                </div>
				<div class="media-heading listing-item__title">
					<a target="_blank" href="{$listing.url}" {$listing.target} {$listing.onmousedown} {$listing.onclick}>{$listing.Title|escape:'html'}</a>
				</div>
                <div class="listing-item__desc">
                    {$listing.JobDescription|strip_tags}
                </div>

				<div class="listing-item__info clearfix">
					{if $listing.CompanyName}
						<span class="listing-item__info--item listing-item__info--item-company">
							{$listing.CompanyName|escape:'html'}
						</span>
					{/if}
					{if $listing|location}
						<span class="listing-item__info--item listing-item__info--item-location">
							{$listing|location}
						</span>
					{/if}
                    {foreach from=$listing.EmploymentType item=list_value name="multifor"}
                        {if $smarty.foreach.multifor.first && $list_value}
                            <span class="listing-item__info--item listing-item__info--item-employment-type">{tr}{$list_value}{/tr}</span>
                        {/if}
                    {/foreach}
				</div>
			</div>
		</article>
	{else}
		{include file="listing_item.tpl" listing=$listing}
		{if 'banner_inline'|banner}
			{if $listing@index == 9}
				<div class="banner banner--inline">
					{'banner_inline'|banner}
				</div>
			{elseif $listing@index < 10 && $listing@last}
				<div class="banner banner--inline">
					{'banner_inline'|banner}
				</div>
			{/if}
		{/if}
	{/if}
{/foreach}