Feature: Delete User Booking
  In order to remove reservations due to unforseen circumstances
  As a logged-in administrator
  I need to be able to remove user Bookings

  Scenario: Delete User Booking
	Given I am on "/Admin/booking/list"
	Then I should be able to access the list of all user bookings
  	When I click the "Delete" button on a booking
	Then I will see a message "Would you like to delete this booking?"
	When I click the "Delete" button
	Then I will see a message "booking has been deleted"
