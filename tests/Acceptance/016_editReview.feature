Feature: Edit a review
  In order to modify typos or my opinion on a booking
  As a logged-in user
  I need to be able to edit a review

  Scenario: Edit a review
	Given I am on /User/myAccount/
    	And I have an existing publication titled "Recent Visit!"
	When I click the "edit" button
 	Then I will be navigated to "/Admin/Publications/edit/1"
	When I edit the title to "New Visitor!" and the publication text to "Jane Doe recently Visited!"
 	And I click the "save" button
	Then the publication should be successfully edited and visible on the website
