Feature: Viewing a complete booking history

As a logged-in customer, I want to be able to view my complete booking history, so that I can easily reference past reservations.

Scenario: Customer wants to reference to their past reservations
Given the customer is logged into their account
When the customer navigates to “My Profile” section
Then the customer will see a table consisting their reservation history in order from the newest to the latest

