Feature: View booking status
In order to know whether or not my reservation is confirmed by the admin.
As a logged-in user
I want to be able to view my booking status

Scenario: view booking status
Given the customer is logged into their account
And the customer booked a “half court”
When the customer navigates to “My Profile” section
Then the customer will see a table consisting their reservation history
And the customer will see “pending” in the status section of their “half court” reservation



  Scenario: view list of all user bookings
  Given I am on "/Admin/dashboard"
	When I navigate to "/Admin/review"
	Then I should be able to access the list of all user bookings


