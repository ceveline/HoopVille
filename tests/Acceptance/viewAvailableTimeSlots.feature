Feature: Viewing available time slots for fitness rooms

As a customer, I want to be able to view the available time slots for different fitness rooms, so that I can plan my workout sessions accordingly.

Scenario: Customer views available time slots
Given the customer is on the fitness centre web application homepage
When the customer navigates to the "Services" section
And the customer chooses the “half court”
When the customer clicks on “book now” button
Then the customer should see a list of available time slots for the “half court” they want to book

