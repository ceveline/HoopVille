Feature: Modify a Membership
In order to change the level of my subscription
As a User
I want to be able to modify my membership

Scenario: Upgrading a Membership
  Given I am on "/User/myAccount/"
  And I have an existing "VIP" membership
  When the customer selects the "modify" button
  Then the user will be navigated to "/User/myAccount/modifyMembership/1"
  And the user clicks on the "Premium" membership
  Then the membership should be change levels

Scenario: Downgrading a Membership
  Given I am on "/User/myAccount/"
  And I have an existing "VIP" membership
  When I selects the "modify" button
  Then I will be navigated to "/User/myAccount/modifyMembership/1"
  And I click on the "basic" membership
  Then I should see "Memberships cannot be downgraded"
