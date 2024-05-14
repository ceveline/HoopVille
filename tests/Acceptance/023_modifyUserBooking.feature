Feature: Modify User Booking
  In order to accommodate changes in schedules
  As a logged-in administrator
  I need to be able to modify user bookings

  Scenario: Modify User Booking
        Given I am on "/Admin/booking/list"
	Then I should be able to access the list of all user bookings
 	When I click the "edit" button on a booking
 	Then I will be navigated to "/Admin/booking/edit/1"
	When I select a booking to modify
	Then I should be able to edit the date to "April 10th" and the time to "3PM"
	When I click the "save" button
	Then the booking should be modified as per the updated detail

