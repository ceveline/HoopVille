Feature: Leaving reviews for bookings

As a customer, I want to be able to leave reviews for all my bookings, so that I will be able to share my personal experience to other people.

Scenario: Customer leaves a review for a booking
Given the customer has completed their “2PM” “basket” booking
When the customer selects the option to leave a review
And submits their review saying how they enjoyed the booking
Then the review should be successfully submitted for the “basket” booking

