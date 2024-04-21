Feature: Cancelling a Membership
In order to unsubscribe to Hoopville's services
As a User
I want to be able to cancel my membership

Scenario: Cancelling a Membership
  Given I am on "/User/myAccount/"
  When I select the "unsubscribe" button
  Then I will be navigated to "/User/Membership/cancel/1"
  And I click on "I am sure I want to unsubscribe"
  Then the membership should be successfully cancelled

Scenario: Cancelling a basic Membership where it has been less than a year
  Given I am on "/User/myAccount/"
  When I select the "unsubscribe" button
  Then I will be navigated to "/User/Membership/cancel/1"
  And I click on "I am sure I want to unsubscribe"
  Then I shoud see "Membership has a 1 year commitment, cannot be canceled"
