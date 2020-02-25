# OpenAPI\Client\AvailabilityApi

All URIs are relative to *https://xk3vdylay4.execute-api.us-east-1.amazonaws.com/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**availabilityResult**](AvailabilityApi.md#availabilityResult) | **GET** /availability | retrieve the availability results from a search
[**availabilitySearch**](AvailabilityApi.md#availabilitySearch) | **POST** /availability | search the availability of a product



## availabilityResult

> \OpenAPI\Client\Model\Availability[] availabilityResult($task_id)

retrieve the availability results from a search

Check to see if the Availability results are available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = 'task_id_example'; // string | Id of the task returned in original POST request

try {
    $result = $apiInstance->availabilityResult($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilityResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Id of the task returned in original POST request |

### Return type

[**\OpenAPI\Client\Model\Availability[]**](../Model/Availability.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## availabilitySearch

> availabilitySearch($availability_search)

search the availability of a product

Search the availability of a product on an RMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$availability_search = new \OpenAPI\Client\Model\AvailabilitySearch(); // \OpenAPI\Client\Model\AvailabilitySearch | Search availability attributes

try {
    $apiInstance->availabilitySearch($availability_search);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilitySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **availability_search** | [**\OpenAPI\Client\Model\AvailabilitySearch**](../Model/AvailabilitySearch.md)| Search availability attributes | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

