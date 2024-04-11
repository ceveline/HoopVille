Feature: Deleting a review
  In order to remove reviews that are no longer relevant
  As a logged-in user
  I want to be able to delete reviews

Scenario: Delete a review
	Given I am on /User/myAccount/
  And I have an existing review that says "Amazing Experience!"
  When I click the "delete" the option to delete this review
  Then the review should be successfully deleted
  And the review should disappear from the review list


