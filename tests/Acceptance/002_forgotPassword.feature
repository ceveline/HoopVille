Feature: Forgot Password
  In order to change my password
  As a user
  I need to provide my email and receive password reset information

  Scenario: Email exists
    Given I am on "/User/forgotPassword"
    When I enter "test@test.com" in the email field
    And click the "Submit" button
    Then I see "Message has been sent"

  Scenario: Email doesn't exist
    Given I am on "/User/forgotPassword"
    When I enter "wrong@test.com" as the email
    And click Send
    Then I see "This email isn't associated with an account"
    
