Feature: Create bookings
As a customer
I want to be able to modify bookings
I can reschedule.

Scenario: Customer modifies a booking
Given the customer has an existing booking for “2 PM, April 15th” for a “basket”
When the customer selects the option to modify the “basket” booking
And makes the necessary changes to the date to “April 22nd”
Then the booking should be successfully modified to “2PM, April 22nd” for a “basket”
