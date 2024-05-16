Feature: Edit a publication
  In order to modify typos or news and updates on the website
  As a logged-in administrator
  I need to be able to edit a publication

  Scenario: Edit a publication
	Given I am on "/Admin/Publications/list"
    	And I have an existing publication titled "Recent Visit!"
	When I click the "edit" button
 	Then I will be navigated to "/Admin/Publications/edit/1"
	When I enter "New visitor" as the title
 	And I enter "Jane Doe recently Visited!" as the text
 	And I click "Save Changes"
	Then the publication should be successfully edited and visible on the website

Scenario: Empty Fields
        Given I am on "Admin/Publications/list"
        When I click "Save Changes"
        Then I see an alert with text "Please fill out this field"
