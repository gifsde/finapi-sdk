# # MoneyTransferOrderParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**counterpart_name** | **string** | Name of the counterpart. Has to be provided for the SEPA EUR transfers. Note: Neither finAPI nor the involved bank servers are guaranteed to validate the counterpart name. Even if the name does not depict the actual registered account holder of the target account, the order might still be successful.&lt;br/&gt;Please refer to the &lt;a href&#x3D;&#39;https://documentation.finapi.io/payments/payment-data-validation&#39; target&#x3D;&#39;_blank&#39;&gt; Payment Data Validation documentation &lt;/a&gt; for more details. | [optional]
**counterpart_iban** | **string** | IBAN of the counterpart&#39;s account. |
**counterpart_bic** | **string** | BIC of the counterpart&#39;s account. Only required for SEPA payments (i.e. payments in EUR currency), when there is no &#39;IBAN_ONLY&#39;-capability in the respective account/interface combination that is to be used when submitting the payment. | [optional]
**amount** | **float** | The amount of the payment. Must be a positive decimal number with at most two decimal places. For money transfers over the XS2A interface, finAPI will interpret the amount to be in the currency of the related account. For money transfers over other interfaces (FINTS_SERVER, WEB_SCRAPER), as well as for standalone money transfers (finAPI Payment product) over all interfaces (FINTS_SERVER, WEB_SCRAPER, XS2A), finAPI will consider the amount to be in EUR. |
**purpose** | **string** | The purpose of the transfer transaction.&lt;br/&gt;Please refer to the &lt;a href&#x3D;&#39;https://documentation.finapi.io/payments/payment-data-validation&#39; target&#x3D;&#39;_blank&#39;&gt; Payment Data Validation documentation &lt;/a&gt; for more details. | [optional]
**sepa_purpose_code** | **string** | SEPA purpose code, according to ISO 20022, external codes set.&lt;br/&gt;Please note that the SEPA purpose code may be ignored by some banks and will be discarded for the non-SEPA payments. | [optional]
**counterpart_address** | [**\OpenAPI\Client\Model\MoneyTransferOrderParamsCounterpartAddress**](MoneyTransferOrderParamsCounterpartAddress.md) |  | [optional]
**end_to_end_id** | **string** | End-To-End ID for the transfer transaction. &lt;br/&gt;Only applicable for the SEPA EUR transfers and will be discarded for other transfers.&lt;br/&gt;Please refer to the &lt;a href&#x3D;&#39;https://documentation.finapi.io/payments/payment-data-validation&#39; target&#x3D;&#39;_blank&#39;&gt; Payment Data Validation documentation &lt;/a&gt; for more details. | [optional]
**structured_remittance_information** | **string[]** | Structure Remittance Information.&lt;br/&gt;This attribute is used to submit structured remittance information for the domestic payments.&lt;br/&gt;Please refer to the &lt;a href&#x3D;&#39;https://documentation.finapi.io/payments/Czech-Republic-Domestic-Transfers.3045916711.html&#39; target&#x3D;&#39;_blank&#39;&gt;documentation&lt;/a&gt; for more details. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
