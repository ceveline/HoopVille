Feature: 012_modifyMembership
  In order to change the level of my subscription
  As a User
  I need to be able to make changes to my membership

  Scenario: Modify a membership
	Given I am on "/User/myAccount/"
	And I click Modify
	Then I should be redirected to "/User/Membership/individual"
	And I select "PREMIUM" as the membership type
	And I click Modify
	Then I should see my updated membership
