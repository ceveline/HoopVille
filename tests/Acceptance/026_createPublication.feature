Feature: Create a publication
  In order to share news and updates on the website
  As a logged-in administrator
  I need to be able to create a publication

  Scenario: Creates a new publication
	Given I am on "/Admin/Publications/create"
	When I fill in "Recent Visit!" as the publication title 
 	And "John Doe recently visited Hoopville" as the publication text
	And I click the "Publish" button
	Then the publication should be successfully created and visible on the website

 Scenario: Empty fields
    Given I am on "/Admin/Publications/create"
    When I leave the text fields empty
    And click the "Publish" button
    Then I see "Please fill out the fields"

