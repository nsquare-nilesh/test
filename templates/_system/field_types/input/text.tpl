{capture name="wysiwygName"}{if $complexField}{$complexField}[{$id}][{$complexStep}]{else}{$id}{/if}{/capture}
{capture name="wysiwygClass"}inputText{if $complexField} complexField{/if}{/capture}
{assign var='wysiwygType' value='tinymce'}
{WYSIWYGEditor name=$smarty.capture.wysiwygName class=$smarty.capture.wysiwygClass width="555px" height="300" type=$wysiwygType value=$value conf="Basic"}