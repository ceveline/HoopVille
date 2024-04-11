Feature: Edit a review
  In order to modify typos or my opinion on a booking
  As a logged-in user
  I need to be able to edit a review

  Scenario: Edit a review
	Given I am on /User/myAccount/
    	And I have an existing review that says "Amazing Experience!"
	When I click the "edit" button
 	Then I will be navigated to "/User/Reviews/edit/1"
	When I edit the text to "Horrible Experience!"
 	And I click the "save" button
	Then the review should be successfully edited and visible on the website
