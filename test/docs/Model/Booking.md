# # Booking

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rms_code** | **string** |  | 
**booking_id** | **string** | Unique identifier of the booking | 
**reference_id** | **string** | A unique identifier for the booking, created by the gateway | 
**customer_contact** | [**\OpenAPI\Client\Model\Contact**](Contact.md) |  | 
**customer_types_required** | [**\OpenAPI\Client\Model\BookingCustomerType[]**](BookingCustomerType.md) |  | 
**availability** | [**\OpenAPI\Client\Model\Availability**](Availability.md) |  | 
**price** | [**\OpenAPI\Client\Model\Price**](Price.md) |  | 
**status** | **string** |  | 
**confirmation_url** | **string** |  | [optional] 
**booking_info** | **map[string,string]** | Relevant info for the Booking, like pickup details, map link, time etc, in Key-&gt;Value format | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


