Feature: List User Booking
  In order to access user bookings
  As an admin
  I need to be able to see the list of user bookings

  Scenario: List User Booking
	Given I am logged in as an administrator
	When I navigate to "/Admin/booking"
	Then I should be able to access the list of all user bookings
	And I should have the option to search for a specific booking based on username
	Then I should be able to view details such as the date and time

