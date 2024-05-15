Feature: 013_cancelMembership
  In order to unsubscribe
  As a logged-in User
  I need to be able to cancel my membership

  Scenario: Cancel a basic Membership
	Given I am on "/User/myAccount"
	When I click Cancel Membership
	And I enter "basic" in the confirmation field
	And I click Cancel Membership
	Then my membership should be canceled
