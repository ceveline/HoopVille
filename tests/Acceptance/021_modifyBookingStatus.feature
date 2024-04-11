Feature: modify booking status
  In order to decide the status of bookings made by user
  As a logged-in administrator
  I need to be able to change the status of the bookings

  Scenario: Confirm a user booking
	Given I am on "/Admin/booking"
	When I see a booking request status for "half court" being "pending"
	When I click "update status"
  	Then I will be navigated to "/Admin/booking/status/1"
	Then I will be given the option to change the status to "accept"
	And I click "accept"
	Then I will see the status change from "pending" to "accepted"

  Scenario: Refuse a user booking 
	Given I am on "/Admin/booking"
	When I see a booking request status for "half court" being "pending"
	When I click "update status"
   	Then I will be navigated to "/Admin/booking/status/1"
	Then I will be given the option to change the status to "refuse"
	And I click "refuse"
	Then I will see the status change from "pending" to "refused"


