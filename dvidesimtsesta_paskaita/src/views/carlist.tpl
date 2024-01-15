<h1>All Cars List from Cars database</h1>

<div>
{foreach from=$list item=$car}
<h2>{$car->getManufacturer()}</h2>
{/foreach}
</div>