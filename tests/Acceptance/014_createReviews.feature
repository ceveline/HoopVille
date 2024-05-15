Feature: 014_createReviews
  In order to share my thoughts on a purchase
  As a logged-in user
  I need to be able to create a review

  Scenario: Create a new Review
	Given I am on "User/review/create"
	When I select "fullCourt" from the purchase type dropdown 
	And I enter "review" in the review text field
	And I select the "4" rating
	And I click Create Review
	Then I should be redirected to "/User/myAccount"

  Scenario: Empty Field
	Given I am on "User/review/create"
	When I click Create Review
	Then I see an alert with text "Please fill out this field"
