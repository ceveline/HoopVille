Feature: Edit a publication
  In order to modify typos or news and updates on the website
  As a logged-in administrator
  I need to be able to edit a publication

  Scenario: Edit a publication
	Given I am on /Admin/Publications/
    	And I have an existing publication titled "Recent Visit!"
	When I click the "edit" button
 	Then I will be navigated to "/Admin/Publications/edit/1"
	When I edit the title to "New Visitor!" and the publication text to "Jane Doe recently Visited!"
 	And I click the "save" button
	Then the publication should be successfully edited and visible on the website


