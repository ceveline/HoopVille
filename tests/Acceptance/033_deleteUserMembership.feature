Feature: Delete User Memberships
  In order to delete memberships to enhance management priviledges
  As a logged-in administrator
  I need to be able to delete user memberships

  Scenario: Delete User Booking
	Given I am on "/Admin/User/infoDetails"
	Then I should be able to access the list of all user services
  	When I click the "Cancel membership" button on a memberships
	Then I will be navigated "/Admin/User/infoDetails"