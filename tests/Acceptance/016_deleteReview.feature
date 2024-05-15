Feature: 016_deleteReview
  In order to remove reviews I dont want
  As a logged-in user
  I need to be able to delete reviews

  Scenario: Delete a review
	Given I am on "User/reviews/edit?id=1"
	When I click delete
	Then I should be redirected to "User/myAccount"
