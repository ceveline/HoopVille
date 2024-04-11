Feature: edit publication
  In order to update a publication
  As an administrator
  I need to be able to edit publications

  Scenario: admin edits a publication title
	Given I am logged in as an administrator
	When I navigate to the publication to be edited
	And I select the option to edit the publication
	And I update the publication's title
	And I click the "Save Changes" button
	Then the publication should be successfully updated with the new title

  Scenario: admin edits a publication content
	Given I am logged in as an administrator
	When I navigate to the publication to be edited
	And I select the option to edit the publication
	And I update the publication's content
	And I click the "Save Changes" button
	Then the publication should be successfully updated with the new content
