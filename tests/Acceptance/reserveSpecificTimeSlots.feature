Feature: Reserving a time slot for specific rooms

As a customer, I want to be able to reserve a specific time slot for specific rooms, so that I can fit it into my schedule.

Scenario: Customer reserves a time slot for a specific room
Given the customer is logged into their account
When the customer selects the 2 PM slot for a “basket” on “April 15th”
And confirms the reservation
Then the reservation should be successfully made

