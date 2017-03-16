{breadcrumbs}
	<a href="{$GLOBALS.site_url}/system/miscellaneous/plugins/">[[Plugins]]</a> / [[Social Login]]
{/breadcrumbs}
<div class="page-title">
	<h1 class="title">[[Social Login]]</h1>
</div>

{foreach from=$errors item="error"}
	<p class="error">
		[[{$error}]]
	</p>
{/foreach}
{foreach from=$messages item="message"}
	<p class="message">
		{if $message == 'ACCOUNT_UPDATED'}
			[[Account is successfully updated.]]
		{else}
			[[{$message}]]
		{/if}
	</p>
{/foreach}

<div id="social-media">
	<div id="settingsPane">
		<form method="post">
			<input type="hidden" name="action" value="save_settings">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#connectionSettings" data-toggle="tab" aria-expanded="true"><span>[[$networkName Settings]]</span></a>
				</li>
			</ul>
			<div class="tab-content">
				<div id="connectionSettings" class="tabs-pane clearfix active">
					<div class="form-horizontal">
						<input type="hidden" name="soc_network" value="{$network}">
						<input type="hidden" name="submit" value="apply">
						{foreach from=$settings item=networkSettings name=networkSettings}
							<div class="form-group">
								{assign var=setting_name value=$networkSettings.id}
								<label class="col-md-2">
									<label for="{$networkSettings.id}">[[{$networkSettings.caption}]]</label>
									<span class="pull-right required">{if $networkSettings.is_required}*{/if}</span>
								</label>

								<div class="col-md-7">
									{$pluginSetting.tabName.id}
									{if $networkSettings.type == 'boolean'}
										<input type="hidden" name="{$setting_name}" value="0" />
										<label class="cr-styled">
											<input type="checkbox" id="{$networkSettings.id}" name="{$setting_name}" value="1" {if $savedSettings.$setting_name}checked="checked" {/if} />
											<i class="fa"></i>
										</label>
									{elseif  $networkSettings.type == 'string'}
										<div class="numerical-block">
											<input type="text" name="{$networkSettings.id}" value="{$savedSettings.$setting_name|escape:'html'}" id="{$networkSettings.id}" />
										</div>
									{elseif  $networkSettings.type == 'text'}
										<textarea name="{$networkSettings.id}" id="{$networkSettings.id}">{$savedSettings.$setting_name|escape:'html'}</textarea>
									{elseif  $networkSettings.type == 'integer'}
										<input type="text" class="inputInteger" value="{$savedSettings.$setting_name}" name="{$networkSettings.id}" id="{$networkSettings.id}"/>
									{elseif  $networkSettings.type == 'list'}
										<select name="{$networkSettings.id}" id="{$networkSettings.id}">
											<option value="">[[Please Select Item]]:</option>
											{foreach from=$networkSettings.list_values item=list}
												<option value="{$list.id}" {if $savedSettings.$setting_name == $list.id}selected="selected" {/if}>{$list.caption}</option>
											{/foreach}
										</select>
									{elseif  $networkSettings.type == 'multilist'}
										<select name="{$networkSettings.id}[]" multiple="multiple" id="{$networkSettings.id}">
											<option value="">[[Please Select Items]]:</option>
											{assign var=selectedItems value=$savedSettings.$setting_name}
											{foreach from=$networkSettings.list_values item=list}
												<option value="{$list.id}" {if (is_array($selectedItems) && in_array($list.id, $selectedItems)) || (!is_array($selectedItems) && in_array($list.id, explode(',', $selectedItems)))}selected{/if}>[[{$list.caption}]]</option>
											{/foreach}
										</select>
									{/if}
									{if $networkSettings.id == "fb_appID" || $networkSettings.id == "li_apiKey"}
										[[{$networkSettings.comment}]]
									{/if}
								</div>
							</div>
						{/foreach}
						<div class="form-group">
							<div class="col-md-7 col-md-offset-2">
								<input type="submit" class="btn btn--primary" value="[[Save]]"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
{assign var="Close" value="[[Close]]"}
<script type="text/javascript">
	$('#li_signin').change(function() {
		$(this).closest('.form-group').nextAll().toggle(this.checked);
	}).change();
</script>
