Feature: Cancelling a booking
In order to free up reserved slots for others
As a user
I want to be able to cancel bookings

Scenario: Cancelling a booking
    Given I am on "/User/myAccount/"
	And I have an existing booking for "2 PM, May 24th 2024"
	And I click Modify button on "Your Bookings"
	Then I will be navigated to "/Booking/edit?id=1"
    And I click Cancel booking
    Then I will be navigated to "/Home"
