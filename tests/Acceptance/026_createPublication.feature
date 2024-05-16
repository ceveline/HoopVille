Feature: Create a publication
  In order to share news and updates on the website
  As a logged-in administrator
  I need to be able to create a publication

  Scenario: Creates a new publication
	Given I am on "/Admin/Publications/create"
	When I fill in "Recent Visit!" as the publication title 
 	And "John Doe recently visited Hoopville" as the publication text
	And I click the "Publish" button
	Then I should be redirected to "/Admin/dashboard"

 Scenario: Empty fields
    Given I am on "/Admin/Publications/create"
    When I leave the text fields empty
    And click Post
    Then I see an alert with text "Please fill out this field"
