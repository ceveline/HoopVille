Feature: View Booking Types
In order to view all the booking selections
As a logged-in user
I want to be able to view the list of options and their benefit

Scenario: View Booking Types
Given I am on "/User/Home/"
And I navigate to  "/User/Booking/"
Then I should see a list of all booking types and their details