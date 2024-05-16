Feature: delete user account
  In order to remove unauthorized user accounts
  As a logged-in administrator
  I need to have the ability to delete user accounts

  Scenario: delete a user account
	Given I am on "/Admin/dashboard"
	And I navigate to "/Admin/User/view"
	When I see user "joe123"
	And I click the "Delete" button
	Then I will be navigated back to "/Admin/User/view"