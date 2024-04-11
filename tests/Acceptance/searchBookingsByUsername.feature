Feature: searchBookingsByUsername
  In order to find a certain user booking history
  As an administrator
  I need to be able to filter my search

  Scenario: Administrator searches for all user "john123" bookings
	Given I am logged in as an administrator
	When I navigate to the user booking page
	And I see the option to filter my search
	When I select the "search" field
	And I enter the username "john123"
	Then I should only see the "john123" booking history
