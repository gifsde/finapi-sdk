# OpenAPI\Client\AccountsApi

All URIs are relative to https://sandbox.finapi.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAccount()**](AccountsApi.md#deleteAccount) | **DELETE** /api/v2/accounts/{id} | Delete an account |
| [**deleteAllAccounts()**](AccountsApi.md#deleteAllAccounts) | **DELETE** /api/v2/accounts | Delete all accounts |
| [**editAccount()**](AccountsApi.md#editAccount) | **PATCH** /api/v2/accounts/{id} | Edit an account |
| [**getAccount()**](AccountsApi.md#getAccount) | **GET** /api/v2/accounts/{id} | Get an account |
| [**getAndSearchAllAccounts()**](AccountsApi.md#getAndSearchAllAccounts) | **GET** /api/v2/accounts | Get and search all accounts |
| [**getDailyBalances()**](AccountsApi.md#getDailyBalances) | **GET** /api/v2/accounts/dailyBalances | Get daily balances |


## `deleteAccount()`

```php
deleteAccount($id, $psu_ip_address, $psu_device_os, $psu_user_agent, $x_http_method_override, $x_request_id)
```

Delete an account

Delete a single bank account of the user that is authorized by the access_token, including its transactions and balance data. Must pass the account's identifier and the user's access_token.<br/><br/>Notes: <br/>&bull; You cannot delete an account while the bank connection that it relates to is currently in the process of import, update, or transaction categorization.<br/>&bull; If the deleted account was connected to interfaces that no other account of the same bank connection is supporting, then those interfaces will be removed from the bank connection as well.<br/>&bull; When the last remaining account of a bank connection gets deleted, then the entire bank connection will get deleted as well, including consents on the bank's side.<br/>&bull; All notification rules that are connected to the account will get adjusted so that they no longer have this account listed. Notification rules that are connected to just this account (and no other accounts) will get deleted altogether.<br/>&bull; If a consent will get deleted by this service, it's not guaranteed that the consent will also get deleted on the bank's side, as not all banks may support this. Also errors during bank consent deletion will be ignored, so the service won't fail due to this.<br/><br/><b>ATTENTION:</b> For the deletion of XS2A consents, additional headers should be included in the request if the end user is involved. Please refer to the <a href='#general-user-metadata'>User metadata</a> section under 'General Information' of the API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: finapi_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: finapi_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the account to delete
$psu_ip_address = 'psu_ip_address_example'; // string | The IP address of the user's device. This header will be forwarded to the bank on XS2A requests. It has to be an IPv4 address, as some banks cannot work with IPv6 addresses. If a non-IPv4 address is passed, we will replace the value with our own IPv4 address as a fallback.
$psu_device_os = 'psu_device_os_example'; // string | The user's device and/or operating system identification. This header will be forwarded to the bank on XS2A requests.
$psu_user_agent = 'psu_user_agent_example'; // string | The user's web browser or other client device identification. This header will be forwarded to the bank on XS2A requests.
$x_http_method_override = 'x_http_method_override_example'; // string | Some HTTP clients do not support the HTTP methods PATCH or DELETE. If you are using such a client in your application, you can use a POST request instead with this header indicating the originally intended HTTP method. POST Requests having this  header set will be treated either as PATCH or DELETE by the finAPI servers.
$x_request_id = 'x_request_id_example'; // string | With any API call, you can pass a request ID. The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error. If you don't pass a request ID for a call, finAPI will generate a random ID internally. The request ID is always returned back in the response of a service, as a header with name 'X-Request-Id'. We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response (especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster.

try {
    $apiInstance->deleteAccount($id, $psu_ip_address, $psu_device_os, $psu_user_agent, $x_http_method_override, $x_request_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Identifier of the account to delete | |
| **psu_ip_address** | **string**| The IP address of the user&#39;s device. This header will be forwarded to the bank on XS2A requests. It has to be an IPv4 address, as some banks cannot work with IPv6 addresses. If a non-IPv4 address is passed, we will replace the value with our own IPv4 address as a fallback. | [optional] |
| **psu_device_os** | **string**| The user&#39;s device and/or operating system identification. This header will be forwarded to the bank on XS2A requests. | [optional] |
| **psu_user_agent** | **string**| The user&#39;s web browser or other client device identification. This header will be forwarded to the bank on XS2A requests. | [optional] |
| **x_http_method_override** | **string**| Some HTTP clients do not support the HTTP methods PATCH or DELETE. If you are using such a client in your application, you can use a POST request instead with this header indicating the originally intended HTTP method. POST Requests having this  header set will be treated either as PATCH or DELETE by the finAPI servers. | [optional] |
| **x_request_id** | **string**| With any API call, you can pass a request ID. The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error. If you don&#39;t pass a request ID for a call, finAPI will generate a random ID internally. The request ID is always returned back in the response of a service, as a header with name &#39;X-Request-Id&#39;. We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response (especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster. | [optional] |

### Return type

void (empty response body)

### Authorization

[finapi_auth](../../README.md#finapi_auth), [finapi_auth](../../README.md#finapi_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllAccounts()`

```php
deleteAllAccounts($psu_ip_address, $psu_device_os, $psu_user_agent, $x_http_method_override, $x_request_id): \OpenAPI\Client\Model\IdentifierList
```

Delete all accounts

Delete all accounts of the user that is authorized by the access_token, including all transactions and balance data. Must pass the user's access_token.<br/><br/>Notes: <br/>&bull; Deleting all of the user's accounts also deletes all of his bank connections, including consents on the bank's side.<br/>&bull; All notification rules that are connected to any specific accounts will get deleted as well.<br/>&bull; If at least one of the user's bank connections in currently in the process of import, update, or transaction categorization, then this service will perform no action at all.<br/>&bull; If a consent will get deleted by this service, it's not guaranteed that the consent will also get deleted on the bank's side, as not all banks may support this. Also errors during bank consent deletion will be ignored, so the service won't fail due to this.<br/><br/><b>ATTENTION:</b> For the deletion of XS2A consents, additional headers should be included in the request if the end user is involved. Please refer to the <a href='#general-user-metadata'>User metadata</a> section under 'General Information' of the API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: finapi_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: finapi_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$psu_ip_address = 'psu_ip_address_example'; // string | The IP address of the user's device. This header will be forwarded to the bank on XS2A requests. It has to be an IPv4 address, as some banks cannot work with IPv6 addresses. If a non-IPv4 address is passed, we will replace the value with our own IPv4 address as a fallback.
$psu_device_os = 'psu_device_os_example'; // string | The user's device and/or operating system identification. This header will be forwarded to the bank on XS2A requests.
$psu_user_agent = 'psu_user_agent_example'; // string | The user's web browser or other client device identification. This header will be forwarded to the bank on XS2A requests.
$x_http_method_override = 'x_http_method_override_example'; // string | Some HTTP clients do not support the HTTP methods PATCH or DELETE. If you are using such a client in your application, you can use a POST request instead with this header indicating the originally intended HTTP method. POST Requests having this  header set will be treated either as PATCH or DELETE by the finAPI servers.
$x_request_id = 'x_request_id_example'; // string | With any API call, you can pass a request ID. The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error. If you don't pass a request ID for a call, finAPI will generate a random ID internally. The request ID is always returned back in the response of a service, as a header with name 'X-Request-Id'. We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response (especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster.

try {
    $result = $apiInstance->deleteAllAccounts($psu_ip_address, $psu_device_os, $psu_user_agent, $x_http_method_override, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->deleteAllAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **psu_ip_address** | **string**| The IP address of the user&#39;s device. This header will be forwarded to the bank on XS2A requests. It has to be an IPv4 address, as some banks cannot work with IPv6 addresses. If a non-IPv4 address is passed, we will replace the value with our own IPv4 address as a fallback. | [optional] |
| **psu_device_os** | **string**| The user&#39;s device and/or operating system identification. This header will be forwarded to the bank on XS2A requests. | [optional] |
| **psu_user_agent** | **string**| The user&#39;s web browser or other client device identification. This header will be forwarded to the bank on XS2A requests. | [optional] |
| **x_http_method_override** | **string**| Some HTTP clients do not support the HTTP methods PATCH or DELETE. If you are using such a client in your application, you can use a POST request instead with this header indicating the originally intended HTTP method. POST Requests having this  header set will be treated either as PATCH or DELETE by the finAPI servers. | [optional] |
| **x_request_id** | **string**| With any API call, you can pass a request ID. The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error. If you don&#39;t pass a request ID for a call, finAPI will generate a random ID internally. The request ID is always returned back in the response of a service, as a header with name &#39;X-Request-Id&#39;. We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response (especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster. | [optional] |

### Return type

[**\OpenAPI\Client\Model\IdentifierList**](../Model/IdentifierList.md)

### Authorization

[finapi_auth](../../README.md#finapi_auth), [finapi_auth](../../README.md#finapi_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editAccount()`

```php
editAccount($id, $account_params, $x_http_method_override, $x_request_id): \OpenAPI\Client\Model\Account
```

Edit an account

Change the name and/or the type and/or the 'isNew' flag of a single bank account of the user that is authorized by the access_token. Must pass the account's identifier, the account's new name and/or type and/or 'isNew' flag, and the user's access_token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: finapi_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: finapi_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the account to edit
$account_params = new \OpenAPI\Client\Model\AccountParams(); // \OpenAPI\Client\Model\AccountParams | New account name and/or type and/or 'isNew' flag
$x_http_method_override = 'x_http_method_override_example'; // string | Some HTTP clients do not support the HTTP methods PATCH or DELETE. If you are using such a client in your application, you can use a POST request instead with this header indicating the originally intended HTTP method. POST Requests having this  header set will be treated either as PATCH or DELETE by the finAPI servers.
$x_request_id = 'x_request_id_example'; // string | With any API call, you can pass a request ID. The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error. If you don't pass a request ID for a call, finAPI will generate a random ID internally. The request ID is always returned back in the response of a service, as a header with name 'X-Request-Id'. We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response (especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster.

try {
    $result = $apiInstance->editAccount($id, $account_params, $x_http_method_override, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->editAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Identifier of the account to edit | |
| **account_params** | [**\OpenAPI\Client\Model\AccountParams**](../Model/AccountParams.md)| New account name and/or type and/or &#39;isNew&#39; flag | |
| **x_http_method_override** | **string**| Some HTTP clients do not support the HTTP methods PATCH or DELETE. If you are using such a client in your application, you can use a POST request instead with this header indicating the originally intended HTTP method. POST Requests having this  header set will be treated either as PATCH or DELETE by the finAPI servers. | [optional] |
| **x_request_id** | **string**| With any API call, you can pass a request ID. The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error. If you don&#39;t pass a request ID for a call, finAPI will generate a random ID internally. The request ID is always returned back in the response of a service, as a header with name &#39;X-Request-Id&#39;. We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response (especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Account**](../Model/Account.md)

### Authorization

[finapi_auth](../../README.md#finapi_auth), [finapi_auth](../../README.md#finapi_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccount()`

```php
getAccount($id, $x_request_id): \OpenAPI\Client\Model\Account
```

Get an account

Get a single bank account of the user that is authorized by the access_token. Must pass the account's identifier and the user's access_token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: finapi_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: finapi_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of requested account
$x_request_id = 'x_request_id_example'; // string | With any API call, you can pass a request ID. The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error. If you don't pass a request ID for a call, finAPI will generate a random ID internally. The request ID is always returned back in the response of a service, as a header with name 'X-Request-Id'. We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response (especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster.

try {
    $result = $apiInstance->getAccount($id, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Identifier of requested account | |
| **x_request_id** | **string**| With any API call, you can pass a request ID. The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error. If you don&#39;t pass a request ID for a call, finAPI will generate a random ID internally. The request ID is always returned back in the response of a service, as a header with name &#39;X-Request-Id&#39;. We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response (especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Account**](../Model/Account.md)

### Authorization

[finapi_auth](../../README.md#finapi_auth), [finapi_auth](../../README.md#finapi_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAndSearchAllAccounts()`

```php
getAndSearchAllAccounts($ids, $search, $account_types, $bank_connection_ids, $min_last_successful_update, $max_last_successful_update, $min_balance, $max_balance, $x_request_id): \OpenAPI\Client\Model\AccountList
```

Get and search all accounts

Get bank accounts of the user that is authorized by the access_token. Must pass the user's access_token. You can set optional search criteria to get only those bank accounts that you are interested in. If you do not specify any search criteria, then this service functions as a 'get all' service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: finapi_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: finapi_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(56); // int[] | A comma-separated list of account identifiers. If specified, then only accounts whose identifier match any of the given identifiers will be regarded. The maximum number of identifiers is 1000.
$search = 'search_example'; // string | If specified, then only those accounts will be contained in the result whose 'accountName', 'iban', 'accountNumber' or 'subAccountNumber' contains the given search string (the matching works case-insensitive). If no accounts contain the search string in any of these fields, then the result will be an empty list. NOTE: If the given search string consists of several terms (separated by whitespace), then ALL of these terms must be contained in the searched fields for an account to get included into the result.
$account_types = array('account_types_example'); // string[] | A comma-separated list of account types. If specified, then only accounts that relate to the given types will be regarded. If not specified, then all accounts will be regarded.
$bank_connection_ids = array(56); // int[] | A comma-separated list of bank connection identifiers. If specified, then only accounts that relate to the given bank connections will be regarded. If not specified, then all accounts will be regarded.
$min_last_successful_update = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | <strong>Format:</strong> 'YYYY-MM-DD'<br/>Lower bound for an account's last successful update date, e.g. '2016-01-01'. If specified, then an account will only be regarded if any of its interfaces has a 'lastSuccessfulUpdate' that is equal to or later than the given date.
$max_last_successful_update = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | <strong>Format:</strong> 'YYYY-MM-DD'<br/>Upper bound for an account's last successful update date, e.g. '2016-01-01'. If specified, then an account will only be regarded if any of its interfaces has a 'lastSuccessfulUpdate' that is equal to or earlier than the given date.
$min_balance = 3.4; // float | If specified, then only accounts whose balance is equal to or greater than the given balance will be regarded. Can contain a positive or negative number with at most two decimal places. Examples: -300.12, or 90.95
$max_balance = 3.4; // float | If specified, then only accounts whose balance is equal to or less than the given balance will be regarded. Can contain a positive or negative number with at most two decimal places. Examples: -300.12, or 90.95
$x_request_id = 'x_request_id_example'; // string | With any API call, you can pass a request ID. The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error. If you don't pass a request ID for a call, finAPI will generate a random ID internally. The request ID is always returned back in the response of a service, as a header with name 'X-Request-Id'. We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response (especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster.

try {
    $result = $apiInstance->getAndSearchAllAccounts($ids, $search, $account_types, $bank_connection_ids, $min_last_successful_update, $max_last_successful_update, $min_balance, $max_balance, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAndSearchAllAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**int[]**](../Model/int.md)| A comma-separated list of account identifiers. If specified, then only accounts whose identifier match any of the given identifiers will be regarded. The maximum number of identifiers is 1000. | [optional] |
| **search** | **string**| If specified, then only those accounts will be contained in the result whose &#39;accountName&#39;, &#39;iban&#39;, &#39;accountNumber&#39; or &#39;subAccountNumber&#39; contains the given search string (the matching works case-insensitive). If no accounts contain the search string in any of these fields, then the result will be an empty list. NOTE: If the given search string consists of several terms (separated by whitespace), then ALL of these terms must be contained in the searched fields for an account to get included into the result. | [optional] |
| **account_types** | [**string[]**](../Model/string.md)| A comma-separated list of account types. If specified, then only accounts that relate to the given types will be regarded. If not specified, then all accounts will be regarded. | [optional] |
| **bank_connection_ids** | [**int[]**](../Model/int.md)| A comma-separated list of bank connection identifiers. If specified, then only accounts that relate to the given bank connections will be regarded. If not specified, then all accounts will be regarded. | [optional] |
| **min_last_successful_update** | **\DateTime**| &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;&lt;br/&gt;Lower bound for an account&#39;s last successful update date, e.g. &#39;2016-01-01&#39;. If specified, then an account will only be regarded if any of its interfaces has a &#39;lastSuccessfulUpdate&#39; that is equal to or later than the given date. | [optional] |
| **max_last_successful_update** | **\DateTime**| &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;&lt;br/&gt;Upper bound for an account&#39;s last successful update date, e.g. &#39;2016-01-01&#39;. If specified, then an account will only be regarded if any of its interfaces has a &#39;lastSuccessfulUpdate&#39; that is equal to or earlier than the given date. | [optional] |
| **min_balance** | **float**| If specified, then only accounts whose balance is equal to or greater than the given balance will be regarded. Can contain a positive or negative number with at most two decimal places. Examples: -300.12, or 90.95 | [optional] |
| **max_balance** | **float**| If specified, then only accounts whose balance is equal to or less than the given balance will be regarded. Can contain a positive or negative number with at most two decimal places. Examples: -300.12, or 90.95 | [optional] |
| **x_request_id** | **string**| With any API call, you can pass a request ID. The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error. If you don&#39;t pass a request ID for a call, finAPI will generate a random ID internally. The request ID is always returned back in the response of a service, as a header with name &#39;X-Request-Id&#39;. We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response (especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountList**](../Model/AccountList.md)

### Authorization

[finapi_auth](../../README.md#finapi_auth), [finapi_auth](../../README.md#finapi_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDailyBalances()`

```php
getDailyBalances($account_ids, $start_date, $end_date, $with_projection, $page, $per_page, $order, $x_request_id): \OpenAPI\Client\Model\DailyBalanceList
```

Get daily balances

Returns the user's daily balances for a given period and a set of specified accounts (or all accounts, if none are specified). The daily balances are calculated by finAPI and are based on the current balances of the regarded accounts.<br/><br/>NOTES:<br/>&bull; This service is not calculating exchange rates for transactions, so if an account contains any transactions with a currency different to the account's currency, then the service is unable to provide accurate data.<br/>&bull; This service may return incorrect results if the 'skipBalancesDownload' and/or the 'skipPositionsDownload' flag have been set to true during an import, update or connect interface service call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: finapi_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: finapi_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_ids = array(56); // int[] | A comma-separated list of (non-security) account identifiers. If no accounts are specified, all (non-security) accounts of the user are regarded.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | <strong>Format:</strong> 'YYYY-MM-DD'<br/>Lower bound for the date range to be returned. Note that the requested date range [startDate .. endDate] may not exceed 1 year (366 days - considering Leap Years too).If 'startDate' is not specified, it defaults to 'endDate' minus one month.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | <strong>Format:</strong> 'YYYY-MM-DD'<br/>Upper bound for the date range to be returned. Note that the requested date range [startDate .. endDate] may not exceed 1 year (366 days - considering Leap Years too). If 'endDate' is not specified, it defaults to today's date.
$with_projection = true; // bool | Whether finAPI should project the first and last actually existing balance of an account into the past and future. When passing 'true', then the result will always contain a daily balance for every day of the entire requested date range, even for days before the first actually existing balance, resp. after the last actually existing balance. Those days will have the same balance as the day of the first actual balance, resp. last actual balance, i.e. the first/last balance will be infinitely projected into the past/the future. When passing 'false', then the result will contain daily balances only from the day on where the first actual balance exists for any of the regarded accounts, and only up to the day where the last actual balance exists for any of the regarded accounts. Note that when in this case there are no actual balances within the requested date range, then an empty array will be returned. Default value for this parameter is 'true'.
$page = 1; // int | Result page that you want to retrieve.
$per_page = 20; // int | Maximum number of records per page. By default it's 20.
$order = array('order_example'); // string[] | Determines the order of the results. You can order the results by 'date', 'balance', 'income' or 'spending'. The default order for this service is 'date,asc'. You can also order by multiple properties. In that case the order of the parameters passed is important. Example: '/accounts/dailyBalances?order=date,desc&order=balance,asc' will return daily balances ordered by 'date' (descending), where items with the same 'date' are ordered by 'balance' (ascending). The general format is: 'property[,asc|desc]', with 'asc' being the default value.
$x_request_id = 'x_request_id_example'; // string | With any API call, you can pass a request ID. The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error. If you don't pass a request ID for a call, finAPI will generate a random ID internally. The request ID is always returned back in the response of a service, as a header with name 'X-Request-Id'. We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response (especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster.

try {
    $result = $apiInstance->getDailyBalances($account_ids, $start_date, $end_date, $with_projection, $page, $per_page, $order, $x_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getDailyBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_ids** | [**int[]**](../Model/int.md)| A comma-separated list of (non-security) account identifiers. If no accounts are specified, all (non-security) accounts of the user are regarded. | [optional] |
| **start_date** | **\DateTime**| &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;&lt;br/&gt;Lower bound for the date range to be returned. Note that the requested date range [startDate .. endDate] may not exceed 1 year (366 days - considering Leap Years too).If &#39;startDate&#39; is not specified, it defaults to &#39;endDate&#39; minus one month. | [optional] |
| **end_date** | **\DateTime**| &lt;strong&gt;Format:&lt;/strong&gt; &#39;YYYY-MM-DD&#39;&lt;br/&gt;Upper bound for the date range to be returned. Note that the requested date range [startDate .. endDate] may not exceed 1 year (366 days - considering Leap Years too). If &#39;endDate&#39; is not specified, it defaults to today&#39;s date. | [optional] |
| **with_projection** | **bool**| Whether finAPI should project the first and last actually existing balance of an account into the past and future. When passing &#39;true&#39;, then the result will always contain a daily balance for every day of the entire requested date range, even for days before the first actually existing balance, resp. after the last actually existing balance. Those days will have the same balance as the day of the first actual balance, resp. last actual balance, i.e. the first/last balance will be infinitely projected into the past/the future. When passing &#39;false&#39;, then the result will contain daily balances only from the day on where the first actual balance exists for any of the regarded accounts, and only up to the day where the last actual balance exists for any of the regarded accounts. Note that when in this case there are no actual balances within the requested date range, then an empty array will be returned. Default value for this parameter is &#39;true&#39;. | [optional] [default to true] |
| **page** | **int**| Result page that you want to retrieve. | [optional] [default to 1] |
| **per_page** | **int**| Maximum number of records per page. By default it&#39;s 20. | [optional] [default to 20] |
| **order** | [**string[]**](../Model/string.md)| Determines the order of the results. You can order the results by &#39;date&#39;, &#39;balance&#39;, &#39;income&#39; or &#39;spending&#39;. The default order for this service is &#39;date,asc&#39;. You can also order by multiple properties. In that case the order of the parameters passed is important. Example: &#39;/accounts/dailyBalances?order&#x3D;date,desc&amp;order&#x3D;balance,asc&#39; will return daily balances ordered by &#39;date&#39; (descending), where items with the same &#39;date&#39; are ordered by &#39;balance&#39; (ascending). The general format is: &#39;property[,asc|desc]&#39;, with &#39;asc&#39; being the default value. | [optional] |
| **x_request_id** | **string**| With any API call, you can pass a request ID. The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error. If you don&#39;t pass a request ID for a call, finAPI will generate a random ID internally. The request ID is always returned back in the response of a service, as a header with name &#39;X-Request-Id&#39;. We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response (especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DailyBalanceList**](../Model/DailyBalanceList.md)

### Authorization

[finapi_auth](../../README.md#finapi_auth), [finapi_auth](../../README.md#finapi_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
