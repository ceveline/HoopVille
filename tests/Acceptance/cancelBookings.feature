Feature: Cancelling a reservation
As a customer
I want to be able to cancel bookings
I can free up reserved slots for others if needed.

Scenario: Cancelling a reservation
Given I am on "/User/myAccount/"
Given the user has an existing reservation for a “basket” at “2PM on April 11th”
When the customer selects the option to cancel the reservation
Then the user should be on "/User/myAccount/deleteBooking/1"
And the user clicks on "confirm booking deletion"
Then the reservation should be successfully cancelled

