<div class="col-md-6">
    <ul>
        @if ($entityType === ENTITY_QUOTE)
            <li>$quote.quoteNumber</li>
            <li>$quote.quoteDate</li>
            <li>$quote.validUntil</li>
            <!--! this intems of invoice to change in proposal -->
            
            <!--! this intems of invoice to change in proposal -->
        @elseif ($entityType === ENTITY_INVOICE)
            <li>$invoice.invoiceNumber</li>
            <li>$invoice.invoiceDate</li>
            <li>$invoice.dueDate</li>
        @endif
        <li>${{ $entityType }}.discount</li>
        <li>${{ $entityType }}.poNumber</li>
        <li>${{ $entityType }}.publicNotes</li>
        <li>${{ $entityType }}.amount</li>
        <li>${{ $entityType }}.terms</li>
        <li>${{ $entityType }}.footer</li>
        <li>${{ $entityType }}.partial</li>
        <li>${{ $entityType }}.partialDueDate</li>
        @if ($account->customLabel('invoice1'))
            <li>${{ $entityType }}.customValue1</li>
        @endif
        @if ($account->customLabel('invoice2'))
            <li>${{ $entityType }}.customValue2</li>
        @endif
        @if ($account->customLabel('invoice_text1'))
            <li>${{ $entityType }}.customTextValue1</li>
        @endif
        @if ($account->customLabel('invoice_text2'))
            <li>${{ $entityType }}.customTextValue2</li>
        @endif
    </ul>
    <ul>
        <li>$account.name</li>
        <li>$account.idNumber</li>
        <li>$account.vatNumber</li>
        <li>$account.address1</li>
        <li>$account.address2</li>
        <li>$account.city</li>
        <li>$account.state</li>
        <li>$account.postalCode</li>
        <li>$account.country.name</li>
        <li>$account.phone</li>
        @if ($account->custom_label1)
            <li>$account.customValue1</li>
        @endif
        @if ($account->custom_label2)
            <li>$account.customValue2</li>
        @endif
    </ul>
</ul>
</div>
<div class="col-md-6">
    <ul>
        <li>$client.name</li>
        <li>$client.idNumber</li>
        <li>$client.vatNumber</li>
        <li>$client.address1</li>
        <li>$client.address2</li>
        <li>$client.city</li>
        <li>$client.state</li>
        <li>$client.postalCode</li>
        <li>$client.country.name</li>
        <li>$client.workPhone</li>
        <li>$client.balance</li>
        <li>$client.website</li>
        @if ($account->customLabel('client1'))
            <li>$client.customValue1</li>
        @endif
        @if ($account->customLabel('client2'))
            <li>$client.customValue2</li>
        @endif
    </ul>
    <ul>
        <li>$contact.firstName</li>
        <li>$contact.lastName</li>
        <li>$contact.email</li>
        <li>$contact.phone</li>
        @if ($account->customLabel('contact1'))
            <li>$contact.customValue1</li>
        @endif
        @if ($account->customLabel('contact2'))
            <li>$contact.customValue2</li>
        @endif
    </ul>
    <ul>
        <li>$itemj.product_key</li>
        <li>$itemj.notes</li>
        <li>$itemj.cost</li>
        <li>$itemj.qty</li>
        <li>$itemj.tax_name1</li>
        <li>$itemj.tax_name2</li>
        <li>$itemj.tax_rate1</li>
        <li>$itemj.tax_rate2</li>
        <li>$itemj.custom_value1</li>
        <li>$itemj.custom_value2</li>
    </ul>
</div>
