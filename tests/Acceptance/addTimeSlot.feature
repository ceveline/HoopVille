Feature: add time slot
  In order to accommodate special cases
  As an administrator
  I need to be able to add new time slots

  Scenario: Adding new time slots for exceptional bookings 
	Given I am on page "/Admin/dashboard"
	When I navigate to "/Admin/schedule"
	When I click the button "add a new time slot"
	Then I will see "add a new time slot" form
	When I specify the service as "full court"
	And I specify the date as "05/26/2024"
	And I specify the start time as "12:00"
	And I specify the end time as "14:00"
	When I click the button "Validate"
	Then I will see a message "The time slot is available"
	When I click "Add"
	Then I will see a message "The time slot has been added"
