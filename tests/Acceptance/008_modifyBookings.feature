Feature: Modify bookings
  In order to reschedule
  As a logged-in user
  I want to be able to modify bookings

  Scenario: User modifies a booking 
    Given I am on "/User/myAccount/"
	And I have an existing booking for "2 PM, April 15th 2024"
	And I click Modify button on "Your Bookings"
	Then I will be navigated to "/Booking/edit?id=1"
	And I click Update time or date
    When I change the date to "2 PM, April 22nd 2024"
    And I click Update
    Then the booking should be successfully modified to "2 PM, April 22nd 2024"
