Feature: Modify bookings
In order to reschedule
As a logged-in user
I want to be able to modify bookings

  Scenario: User modifies a booking 
    Given I am on /User/Bookings/
    And I have an existing booking for “2 PM, April 15th” for a “basket”
    When the customer selects the "modify" button
    Then the customer will be navigated to "/User/Bookings/modify/1"
    When the customer changes the date to “April 22nd”
    And the customer clicks "save" button
    Then the booking should be successfully modified to “2PM, April 22nd” for a “basket”
