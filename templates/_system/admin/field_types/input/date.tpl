<div class="quarter">
	{if $complexField}
		<input type="text" class="input-date form-control__visible" value="{$value|date_format:"%m.%Y"|escape}" />
	{/if}
	<input {if $complexField}type="hidden"{else}type="text"{/if} class="input-date {if $complexField}complexField{else}input__datepicker{/if}" name="{if $complexField}{$complexField}[{$id}][{$complexStep}]{else}{$id}{/if}" value="{tr type="date"}{if $mysql_date && !$complexField}{$mysql_date|escape:'html'}{else}{$value|escape:'html'}{/if}{/tr}"/>
	<img class="ui-datepicker-trigger" src="{image}icon-calendar.svg" alt="..." title="...">
</div>