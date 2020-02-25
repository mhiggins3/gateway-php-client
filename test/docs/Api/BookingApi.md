# OpenAPI\Client\BookingApi

All URIs are relative to *https://xk3vdylay4.execute-api.us-east-1.amazonaws.com/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelBooking**](BookingApi.md#cancelBooking) | **DELETE** /booking | cancel a Booking
[**createBooking**](BookingApi.md#createBooking) | **POST** /booking | create a new Booking
[**getBookingByXplorieReferenceId**](BookingApi.md#getBookingByXplorieReferenceId) | **GET** /booking/retrieve/ | retrieve a Booking using an Xplorie Booking reference Id
[**searchBooking**](BookingApi.md#searchBooking) | **POST** /booking/retrieve/ | post a booking search request



## cancelBooking

> \OpenAPI\Client\Model\Booking cancelBooking($booking_number, $rms_code, $company_name)

cancel a Booking

Attempt to cancel a Booking against an integrated RMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$booking_number = 'booking_number_example'; // string | The unique booking number
$rms_code = 'rms_code_example'; // string | Unique RMS code
$company_name = 'company_name_example'; // string | Name of attraction partner

try {
    $result = $apiInstance->cancelBooking($booking_number, $rms_code, $company_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->cancelBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_number** | **string**| The unique booking number |
 **rms_code** | **string**| Unique RMS code |
 **company_name** | **string**| Name of attraction partner | [optional]

### Return type

[**\OpenAPI\Client\Model\Booking**](../Model/Booking.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createBooking

> \OpenAPI\Client\Model\Booking createBooking($create_booking)

create a new Booking

By passing a valid BookingCreation body, a Booking is attempted against an integrated RMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_booking = new \OpenAPI\Client\Model\BookingCreation(); // \OpenAPI\Client\Model\BookingCreation | Create booking attributes

try {
    $result = $apiInstance->createBooking($create_booking);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->createBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_booking** | [**\OpenAPI\Client\Model\BookingCreation**](../Model/BookingCreation.md)| Create booking attributes | [optional]

### Return type

[**\OpenAPI\Client\Model\Booking**](../Model/Booking.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBookingByXplorieReferenceId

> \OpenAPI\Client\Model\Booking getBookingByXplorieReferenceId($task_id)

retrieve a Booking using an Xplorie Booking reference Id

Try and retrieve a Booking with the assigned Xplorie booking reference Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = 'task_id_example'; // string | The Gateway Booking search taskId

try {
    $result = $apiInstance->getBookingByXplorieReferenceId($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->getBookingByXplorieReferenceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| The Gateway Booking search taskId |

### Return type

[**\OpenAPI\Client\Model\Booking**](../Model/Booking.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchBooking

> \OpenAPI\Client\Model\Booking searchBooking($booking_search_request)

post a booking search request

Try and retrieve a Booking by placing a search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$booking_search_request = new \OpenAPI\Client\Model\BookingSearch(); // \OpenAPI\Client\Model\BookingSearch | The Gateway Booking search taskId

try {
    $result = $apiInstance->searchBooking($booking_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->searchBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_search_request** | [**\OpenAPI\Client\Model\BookingSearch**](../Model/BookingSearch.md)| The Gateway Booking search taskId |

### Return type

[**\OpenAPI\Client\Model\Booking**](../Model/Booking.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

