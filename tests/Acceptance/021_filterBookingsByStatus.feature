Feature: 021_filterBookingsByStatus
  In order to manage the availability
  As an administrator
  I need to filter the bookings based on their status

  Scenario: Filter Booking by Status
	Given I am on "Admin/booking/list"
	When I select "0" as the status
	Then I will be redirected to "Admin/booking/list"
