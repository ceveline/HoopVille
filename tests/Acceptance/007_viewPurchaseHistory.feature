Feature: View Purchase History
In order to know know what I have purchased or subscribed
As a logged-in user
I want to be able to view my memberships, my camps and my bookings

Scenario: View Purchase History
Given I am on "/User/myAccount/"
Then I will see my "premium" membership
And my "winter" camps 
And my "Basket" booking



