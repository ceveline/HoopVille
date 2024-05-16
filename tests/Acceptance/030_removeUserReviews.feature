Feature: remove user reviews
  In order to maintain the integrity of the platform
  As a logged-in administrator
  I need to be able to remove user reviews if it contains inappropriate content

  Scenario: Remove a User Review Containing Inappropriate Words
	Given I am on "/Admin/dashboard"
 	And I navigate to "/Admin/Review/list"
  	When I see review text "test"
	And I click the "Delete" button
	Then I will be navigated to "/Admin/Review/list"