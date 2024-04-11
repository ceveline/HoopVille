Feature: Modify User Booking
  In order to accommodate changes in schedules
  As an admin
  I need to be able to modify user bookings

  Scenario: Modify User Booking
	Given I am logged in as an administrator
	When I navigate to "/Admin/booking"
	Then I should be able to access the list of all user bookings
	And I should have the option to search for a specific booking based on username
	When I select a booking to modify
	Then I should be able to edit details such as the date and time
	And I should be able to update the booking accordingly
	When I save the changes
	Then the booking should be modified as per the updated detail

