Feature: modify booking status
  In order to decide the status of bookings made by user
  As an administrator
  I need to be able to change the status of the bookings

  Scenario: administrator confirms a user booking
	Given I am on "/Admin/booking"
	When I see a booking request for "half court"
	When I click "status"
	Then I will be given the option to change the status to "accept"
	And I click "accept"
	Then I will see the status change from "pending" to "accepted"

  Scenario: administrator refuses a user booking 
	Given I am on "/Admin/booking"
	When I see a booking request for "half court"
	When I click "status"
	Then I will be given the option to change the status to "refuse"
	And I click "refuse"
	Then I will see the status change from "pending" to "refused"
