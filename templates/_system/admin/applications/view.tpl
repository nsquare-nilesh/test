{breadcrumbs}
	<a href="{$GLOBALS.site_url}/manage-{$listingType.id|lower}s/">
		[[{$listingType.name} Postings]]
	</a>
	&#187;
	[[Applications]]
{/breadcrumbs}
<div class="page-title">
	<h1 class="title">[[Applications for]] {$jobInfo.Title}</h1>
</div>

<div class="panel panel-default panel--wide">
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
				<tr>
					<th><a href="?user_sid={$user_sid}&amp;username={$username}&amp;orderBy=date&amp;appJobId={$jobInfo.id}&amp;order={if		$orderBy == "date" 		&& $order == "asc"}desc{else}asc{/if}">[[Date applied]]</a></th>
					<th><a href="?user_sid={$user_sid}&amp;username={$username}&amp;orderBy=applicant&amp;appJobId={$jobInfo.id}&amp;order={if	$orderBy == "applicant" && $order == "asc"}desc{else}asc{/if}">Applicant’s Name</a></th>
				</tr>
				</thead>
				<tbody>
				{foreach item=app from=$applications name=applications}
					<tr>
						<td class="td-wide">{$app.date|date:null:true}</td>
						<td class="td-wide">{$app.username}</td>
					</tr>
					<tr>
						<td colspan="2" style="border: none !important; white-space: initial;">
							<div class="applicationCommentsHeader">[[Cover Letter ]]:</div>
							<div class="applicationComments">
								{$app.comments|escape:'html'}
								{if $app.resume}
									<br />- <a href="{$GLOBALS.site_url}/edit-listing/?listing_id={$app.resume}">[[Attached Resume]]</a>
								{/if}
								{if $app.file}
									<br />- <a href="?appsID={$app.id}&amp;filename={$app.file|escape:"url"}">[[View Attached File]]</a>
								{/if}
							</div>
						</td>
					</tr>
				{/foreach}
				</tbody>
			</table>
		</div>
	</div>
</div>
