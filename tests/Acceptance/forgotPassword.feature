Feature: forgotPassword
  In order to change my password
  As a user
  I need to give my email and receive password reset information

  Scenario: Email exists
    Given I am on "http://localhost/User/forgotPassword"
    When I enter "test@test.com" as the email
    And click Send
    Then I see "We sent you an email"

  Scenario: Email doesn't exist
    Given I am on "http://localhost/User/forgotPassword"
    When I enter "wrong@test.com" as the email
    And click Send
    Then I see "This email isn't associated with an account"
    
