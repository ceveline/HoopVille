Feature: Create bookings
In order to create a booking
As a logged-in user
I want to be able to make bookings

Scenario: Create a booking
  Given I am on /User/Bookings/create
  When I select "2 PM" as the time, "April 15th" as the date for a "basket"
  And input "Joe" as the first name, "Doe" as the last name, and "514-658-9874" as the phone number
  And click the "Reserve" button
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
