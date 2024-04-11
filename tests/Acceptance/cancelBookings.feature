Feature: Cancelling a reservation

In order to free up reserved slots for others
As a customer
I want to be able to cancel bookings

Scenario: Cancelling a reservation
  Given I am on "/User/myAccount/"
  Given the user has an existing reservation for a “basket” at “2PM on April 11th”
  When the customer selects "cancel" button
  Then the user will be navigated to "/User/myAccount/deleteBooking/1"
  And the user clicks on "confirm booking deletion"
  Then the reservation should be successfully cancelled

