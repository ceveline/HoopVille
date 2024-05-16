Feature: 022_searchBookingsByEmail
  In order to find a user
  As a logged-in administrator
  I need to search for a email

  Scenario: Search Bookings by the Email
	Given I am in "admin/booking/list"
	And I enter "Jon123@gmail.com" in the email field
	Then I should see bookings booked by the email "Jon123@gmail.com"


