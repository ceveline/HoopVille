Feature: filter bookings based on status
  In order to effectively manage the availability of resources and bookings
  As an administrator
  I need to be able to filter the view based on the status of all bookings

  Scenario: view pending bookings
	Given I am on "/Admin/booking"
	Then I will see a dropdown menu to filter
	When I click the dropdown menu
	And I choose the "pending" option 
	Then I will only see bookings with the status "pending"

  Scenario: view confirmed bookings
	Given I am on "/Admin/booking"
	Then I will see a dropdown menu to filter
	When I click the dropdown menu
	And I choose the "accepted" option
	Then I will only see bookings with the status "accepted"


  Scenario: view refused bookings
	Given I am on "/Admin/booking"
	Then I will see a dropdown menu to filter
	When I click the dropdown menu
	And I choose the "refused" option
	Then I will only see bookings with the status "refused"

  Scenario: view cancelled bookings
	Given I am on "/Admin/booking"
	Then I will see a dropdown menu to filter
	When I click the dropdown menu
	And I choose the "cancelled" option
	Then I will only see bookings with the status "cancelled"
