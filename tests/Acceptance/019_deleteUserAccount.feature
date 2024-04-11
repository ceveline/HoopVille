Feature: delete user account
  In order to remove unauthorized user accounts
  As a logged-in administrator
  I need to have the ability to delete user accounts

  Scenario: delete a user account
	Given I am on "/Admin/dashboard"
	And I navigate to "/Admin/viewUsers"
	When I see user "joe123"
	And I click the "Delete" button
	Then I will see a message "Would you like to delete this user?"
	When I click the "Delete" button
	Then I will see a message "joe123 has been deleted"

  Scenario: accidentally select delete
	Given I am on "/Admin/dashboard"
	And I navigate to "/Admin/viewUsers"
	When I see user "joe123"
	And I accidentally click the "Delete" button
	Then I will see a message "Would you like to delete this user?"
	When I click the "Cancel" button
	Then I will be navigated back to "/Admin/viewUsers"
