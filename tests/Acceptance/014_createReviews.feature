Feature: Create a review
  In order to share my thoughts on a booking
  As a logged-in user
  I need to be able to create a review

  Scenario: Creates a new review
	Given I am on "/User/Reviews/create"
 	And I have a completed booking
	When I select the booking I want to leave a review for 
 	And enter "Amazing Experience" as the review text
	And I click the "Submit Review" button
	Then the review should be successfully created and visible on the review page

  Scenario: Empty fields
    Given I am on "/User/Reviews/create"
    And I have a completed booking
    When I select the booking I want to leave a review for
    And I leave the text fields empty
    And I click the "Submit Review" button
    Then I see "Please fill out the fields"



