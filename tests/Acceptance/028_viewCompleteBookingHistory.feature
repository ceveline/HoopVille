Feature: View booking history
In order to reference past reservations.
As a logged-in user
I want to be able to view my booking history

Scenario: View booking history
Given I am on "/User/myAccount/"
When I navigate to "/User/booking/"
Then I will see my booking history and status

