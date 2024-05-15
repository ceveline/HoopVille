Feature: 011_purchaseMemberships.feature
  In order to purchase a membership
  As a logged-in user
  I need to access the membership page to view the details of each membership

  Scenario: Purchase basic membership
	Given I am on "User/Membership"
	When I select the "Basic" membership option
	And I click Next
	And I click Confirm
	Then I should be redirected to "User/payment/"

  Scenario: Existing membership
	Given I am on "User/Membership"
	When I select the "Basic" membership option
	And I click Next
	And I click Confirm
	Then I should be redirected to "User/myAccount/"
