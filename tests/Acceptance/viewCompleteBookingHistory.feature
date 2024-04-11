Feature: View booking history
In order to reference past reservations.
As a logged-in user
I want to be able to view my booking history

Scenario: View booking history
Given I am on "/User/myAccount/"
When the customer navigates to “My Profile” section
Then the customer will see a table consisting their reservation history in order from the newest to the latest


Feature: Cancelling a booking
In order to free up reserved slots for others
As a user
I want to be able to cancel bookings

Scenario: Cancelling a booking
  Given I am on "/User/myAccount/"
  Given I have an existing reservation for a “basket” at “2PM on April 11th”
  When I select "cancel" button
  Then I will be navigated to "/User/myAccount/deleteBooking/1"
  And I click on "confirm booking deletion"
  Then the reservation should be successfully cancelled

