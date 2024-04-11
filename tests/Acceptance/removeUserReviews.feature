Feature: remove user reviews
  In order to maintain the integrity of the platform
  As an admin
  I need to be able to remove user reviews if it contains inappropriate content

  Scenario: Remove a User Review Containing Inappropriate Words
	Given I am logged in as an administrator
	When I navigate to "/Admin/user-reviews"
	And I see a user review with inappropriate content
	And I select the option to remove the review
	Then the user review should be removed from the platform
