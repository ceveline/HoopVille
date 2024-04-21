Feature: Delete User Memberships
  In order to delete memberships to enhance management priviledges
  As a logged-in administrator
  I need to be able to delete user memberships

  Scenario: Delete User Booking
	Given I am on "/Admin/Membership/list"
	Then I should be able to access the list of all user memberships
  	When I click the "Delete" button on a memberships
	Then I will see a message "Would you like to delete this memberships?"
	When I click the "Delete" button
	Then I will see a message "memberships has been deleted"
