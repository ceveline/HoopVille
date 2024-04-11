Feature: searchBookingsByUsername
  In order to find a certain user booking history
  As a logged-in administrator
  I need to be search for a username

  Scenario: Administrator searches for all user "john123" bookings
	Given I am in "admin/booking/"
	And I see the option to filter my search
	When I select the "search" field
	And I enter the username "john123"
	Then I should only see the "john123" booking history
