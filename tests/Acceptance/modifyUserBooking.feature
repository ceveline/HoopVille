Feature: Modify User Booking
  In order to accommodate changes in schedules
  As a logged-in administrator
  I need to be able to modify user bookings

  Scenario: Modify User Booking
        Given I am on "/Admin/dashboard"
	When I navigate to "/Admin/booking"
	Then I should be able to access the list of all user bookings
	And I should have the option to search for a specific booking based on username
	When I select a booking to modify
	Then I should be able to edit the date to "April 10th" and the time to "3PM"
	When I click "save" 
	Then the booking should be modified as per the updated detail


Feature: list user accounts
  In order to see all users efficiently
  As a logged-in administrator
  I need to view a list of all user accounts

  Scenario: view list of all user accounts
    Given I am on "/Admin/dashboard"
    And I navigate to "/Admin/viewUsers"
    Then I should see a list of all user accounts and their emails
