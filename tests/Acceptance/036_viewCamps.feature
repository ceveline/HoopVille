Feature: View Camp Types
In order to view all the camp selections
As a logged-in user
I want to be able to view the list of options and their benefit

Scenario: View Camp Types
Given I am on "/User/Home/"
And I navigate to  "/User/Camp/"
Then I should see a list of all camps and their details

