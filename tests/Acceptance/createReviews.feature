Feature: Leaving reviews for bookings

As a customer, I want to be able to leave reviews for all my bookings, so that I will be able to share my personal experience to other people.

Scenario: Customer leaves a review for a booking
Given the customer has completed their “2PM” “basket” booking
When the customer selects the option to leave a review
And submits their review saying how they enjoyed the booking
Then the review should be successfully submitted for the “basket” booking

Feature: Create a review
  In order to share my thoughts on a booking
  As a logged-in user
  I need to be able to create a review

  Scenario: Creates a new review
	Given I am on /User/myAccount/
	When I fill in "Recent Visit!" as the publication title and "John Doe recently visited Hoopville" as the publication text
	And I click the "Publish" button
	Then the publication should be successfully created and visible on the website

