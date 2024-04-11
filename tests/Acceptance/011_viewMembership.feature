Feature: View memberships
In order to know review my membership
As a logged-in user
I want to be able to view my membership

Scenario: View booking history
Given I am on "/User/myAccount/"
When I navigate to "/User/membership/list"
Then I will see my membership details 




