<input id="{if $parentID}{$parentID}_{$id}{else}{$id}{/if}" type="text" value="{$value}" class="form-control {if $complexField}complexField{/if}" name="{if $complexField}{$complexField}[{$id}][{$complexStep}]{elseif $parentID}{$parentID}[{$id}]{else}{$id}{/if}" />
