Feature: remove user reviews
  In order to maintain the integrity of the platform
  As a logged-in administrator
  I need to be able to remove user reviews if it contains inappropriate content

  Scenario: Remove a User Review Containing Inappropriate Words
	Given I am on "/Admin/dashboard"
 	And I navigate to "/Admin/reviews/"
	And I see a user review with inappropriate content
	And I select the option to remove the review
	Then the user review should be removed from the platform


Feature: list user bookings
  In order to manage users efficiently
  As a logged-in administrator
  I need to view a list of all user bookings

  Scenario: view list of all user bookings
  Given I am on "/Admin/dashboard"
	When I navigate to "/Admin/booking"
	Then I should be able to access the list of all user bookings


Feature: Create a review
  In order to share my thoughts on a booking
  As a logged-in user
  I need to be able to create a review

  Scenario: Creates a new review
	Given I am on /User/Reviews/create
 	And I have a completed booking
	When I select the booking I want to leave a review for and enter "Amazing Experience" as the review text
	And I click the "Submit Review" button
	Then the review should be successfully created and visible on the review page
