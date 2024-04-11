Feature: list user reviews
  In order to view comments left by users
  As a logged-in administrator
  I need to view a list of all user reviews

  Scenario: view list of all user bookings
  Given I am on "/Admin/dashboard"
	When I navigate to "/Admin/review"
	Then I should be able to access the list of all user bookings

