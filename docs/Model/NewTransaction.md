# # NewTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount. Required. |
**currency** | [**\OpenAPI\Client\Model\Currency**](Currency.md) |  | [optional]
**original_amount** | **float** | Original amount | [optional]
**original_currency** | [**\OpenAPI\Client\Model\Currency**](Currency.md) |  | [optional]
**purpose** | **string** | Purpose. Any symbols are allowed. Optional. Default value: null. | [optional]
**counterpart** | **string** | Counterpart. Any symbols are allowed. Optional. Default value: null. | [optional]
**counterpart_iban** | **string** | Counterpart IBAN. Optional. Default value: null. | [optional]
**counterpart_blz** | **string** | Counterpart BLZ. Optional. Default value: null. | [optional]
**counterpart_bic** | **string** | Counterpart BIC. Optional. Default value: null. | [optional]
**counterpart_account_number** | **string** | Counterpart account number. Maximum length is 34. Optional. Default value: null. | [optional]
**booking_date** | **\DateTime** | &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;&lt;br/&gt;Booking date.&lt;br/&gt;&lt;br/&gt;If the date lies back more than 10 days from the booking date of the latest transaction that currently exists in the account, then this transaction will be ignored and not imported. If the date depicts a date in the future, then finAPI will deal with it the same way as it does with real transactions during a real update (see fields &#39;bankBookingDate&#39; and &#39;finapiBookingDate&#39; in the Transaction Resource for explanation).&lt;br/&gt;&lt;br/&gt;This field is optional, default value is the current date. | [optional]
**value_date** | **\DateTime** | &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;&lt;br/&gt;Value date. Optional. Default value: Same as the booking date. | [optional]
**type_id** | **int** | The transaction type id. It&#39;s usually a number between 1 and 999. You can look up valid transaction in the following document on page 198: &lt;a href&#x3D;&#39;https://www.hbci-zka.de/dokumente/spezifikation_deutsch/fintsv4/FinTS_4.1_Messages_Finanzdatenformate_2014-01-20-FV.pdf&#39; target&#x3D;&#39;_blank&#39;&gt;FinTS Financial Transaction Services&lt;/a&gt;.&lt;br/&gt; For numbers not listed here, the service call might fail. | [optional]
**counterpart_mandate_reference** | **string** | The mandate reference of the counterpart. | [optional]
**counterpart_creditor_id** | **string** | The creditor ID of the counterpart. Exists only for SEPA direct debit transactions (\&quot;Lastschrift\&quot;). | [optional]
**counterpart_customer_reference** | **string** | The customer reference of the counterpart. | [optional]
**counterpart_debitor_id** | **string** | The originator&#39;s identification code. Exists only for SEPA money transfer transactions (\&quot;Überweisung\&quot;). | [optional]
**type** | **string** | Transaction type, according to the bank. If set, this will contain a German term that you can display to the user. Some examples of common values are: \&quot;Lastschrift\&quot;, \&quot;Auslands&amp;uuml;berweisung\&quot;, \&quot;Geb&amp;uuml;hren\&quot;, \&quot;Zinsen\&quot;. | [optional]
**type_code_swift** | **string** | SWIFT transaction type code. | [optional]
**sepa_purpose_code** | **string** | SEPA purpose code. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
