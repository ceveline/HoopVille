Feature: Cancelling a Membership
In order to unsubscribe to Hoopville's services
As a User
I want to be able to cancel my membership

Scenario: Cancelling a Membership
  Given I am on "/User/myAccount/"
  Given the user has an existing membership that isn't basic
  When the customer selects the "unsubscribe" button
  Then the user will be navigated to "/User/myAccount/cancelMembership/1"
  And the user clicks on "I am sure I want to unsubscribe"
  Then the membership should be successfully cancelled
