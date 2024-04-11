Feature: create a publication
  In order to share news and updates on the website
  As an admin
  I need to be able to create a publication

  Scenario: admin creates a new publication
	Given I am logged in as an admin
	When I navigate to the "Create Publication" page
	And I fill in the publication details
	And I click the "Publish" button
	Then the publication should be successfully created and visible on the website
