Feature: list user bookings
  In order to manage users efficiently
  As a logged-in administrator
  I need to view a list of all user bookings

  Scenario: view list of all user bookings
  Given I am on "/Admin/dashboard"
	When I navigate to "/Admin/booking/list"
	Then I should be able to access the list of all user bookings


