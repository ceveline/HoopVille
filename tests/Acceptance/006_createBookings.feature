Feature: Create bookings
In order to create a booking
As a logged-in user
I want to be able to make bookings

Scenario: Create a booking
  Given I am on /User/Booking/create
  When I Select "Full court" as the option
  And click on "Next"
  When I select "April 15th" as the date
  And "10:00 a.m. - 12:00 p.m." as the time
  And input "Joe Doe" as the Name on Card
  And input "4724090584759384" as the card number
  And input "05/2025" as the expiration date
  And 365 as the CVV
  And click the "Pay Now" button
  Then I see "Booking reserved"
    
Scenario: Wrong input data
  Given I am on /User/Bookings/create
  When I select "2 PM" as the time, "April 15th" as the date for a "basket"
  And input "Joe" as the first name, "Doe" as the last name, and "234" as the phone number
  And click the "Reserve" button
  Then I see "Invalid phone number"

  Scenario: Empty fields
    Given I am on /User/Bookings/create
    When I select "2 PM" as the time, "April 15th" as the date for a "basket"
    When I leave the text fields empty
    And click the "Reserve" button
    Then I see "Please fill out the fields"
