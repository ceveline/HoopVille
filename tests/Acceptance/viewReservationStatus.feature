Feature: Viewing a reservation status

As a customer, I want to be able to view my reservation status, so I know whether or not my reservation is confirmed by the admin.

Scenario: Customer checks the status of their reservation
Given the customer is logged into their account
And the customer booked a “half court”
When the customer navigates to “My Profile” section
Then the customer will see a table consisting their reservation history
And the customer will see “pending” in the status section of their “half court” reservation

