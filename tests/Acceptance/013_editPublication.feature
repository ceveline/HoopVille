Feature: Edit a publication
  In order to modify typos or news and updates on the website
  As a logged-in administrator
  I need to be able to edit a publication

  Scenario: Edit a publication
	Given I am on /Admin/Publications/
	When I fill in "Recent Visit!" as the publication title and "John Doe recently visited Hoopville" as the publication text
	And I click the "Publish" button
	Then the publication should be successfully created and visible on the website
