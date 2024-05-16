Feature: View Membership Types
In order to view all the membership selections
As a logged-in user
I want to be able to view the list of options and their benefit

Scenario: View Membership Types
Given I am on "/User/Home/"
And I navigate to  "/User/Membership/"
Then I should see a list of all membership types and their details