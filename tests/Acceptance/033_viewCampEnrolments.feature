Feature: View camp purchases
In order to know understand what camps im enroled in
As a logged-in user
I want to be able to view my enroled camps

Scenario: View camp purchases
Given I am on "/User/myAccount/"
When I navigate to "/User/camp/list/"
Then I will see my camp enrolment details 
