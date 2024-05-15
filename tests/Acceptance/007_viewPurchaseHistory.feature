Feature: View Purchase History
In order to know know what I have purchased or subscribed
As a logged-in user
I want to be able to view my purchase history

Scenario: View Purchase History
	Given I am on "/User/myAccount/"
	Then I will see "Your Membership"
	And I will see "Your Bookings"
	And I will see "Your Camps"


