Feature: 015_editReview
  In order to modify my opinion on a purchase
  As a logged-in user
  I need to be able to edit a review

  Scenario: Edit a Review
	Given I am on "User/review/edit?id=1"
	When I enter "new" in the review text field
	And I select the "1" rating
	And I click Update Review
	Then I should be redirected to "/User/myAccount"

  Scenario: Empty Field
        Given I am on "User/review/edit?id=1"
        When I click Update Review
        Then I should be redirected to "/User/myAccount"
