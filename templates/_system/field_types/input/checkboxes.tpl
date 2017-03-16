<div>
	<input type="hidden" name="{$id}" value=""/>
	{foreach from=$list_values item=list_value}
		<label class="cr-styled">
			<input class="checkBox{$id}" type="checkbox" name="{$id}[]" {foreach from=$value item=value_id}{if $list_value.id == $value_id}checked="checked"{/if}{/foreach} value="{$list_value.id}" />
			<i class="fa"></i>
			<span>&nbsp;{tr}{$list_value.caption}{/tr|escape:'html'}</span>
		</label>
		<br>
	{/foreach}
</div>
{if $comment}
	<span class="small">[[{$comment}]].</span>
{/if}
<script type="text/javascript">
	function limitShowAvailableCounter{$id}(limit) {
		var selCount = $(".checkBox{$id}:checked").length;
		$("#count-available-{$id}").empty().html(limit - selCount+" [[Available]]");
	}

	$(document).ready(function() {
		var limit{$id} = {if !empty($choiceLimit)}{$choiceLimit}{else}null{/if};
		if (limit{$id}) {
			$(".checkBox{$id}").bind("change", function() {
					if($(this).siblings(':checked').length >= limit{$id}) {
						this.checked = false;
					}
					limitShowAvailableCounter{$id}(limit{$id});
				}
			);
		}
	});
</script>