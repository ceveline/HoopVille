Feature: Cancelling a reservation

As a customer, I want to be able to cancel bookings, so that I can free up reserved slots for others if needed.

Scenario: Customer cancels a reservation
Given the customer has an existing reservation for a “basket” at “2PM on April 11th”
When the customer selects the option to cancel the reservation
Then the reservation should be successfully cancelled

