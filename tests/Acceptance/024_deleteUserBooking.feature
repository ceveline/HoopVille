Feature: 024_deleteUserBooking.feature
  In order to remove bookings
  As a logged-in administrator
  I need to be able to delete bookings

  Scenario: Delete User Booking
	Given I am on "/Booking/edit"
	And I click Delete Booking
	Then I should be redirected to "/Home"
