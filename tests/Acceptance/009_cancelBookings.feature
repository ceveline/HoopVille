Feature: Cancelling a booking
In order to free up reserved slots for others
As a user
I want to be able to cancel bookings

Scenario: Cancelling a booking
  Given I am on "/User/Bookings/"
  Given I have an existing reservation for a “basket” at “2PM on April 11th”
  When I select "cancel" button
  Then I will be navigated to "/User/Bookings/delete/1"
  And I click on "confirm booking cancellation"
  Then the reservation should be successfully cancelled
