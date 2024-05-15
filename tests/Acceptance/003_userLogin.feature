Feature: user login
  In order to access my account
  As a user
  I need to input correct credentials and get access to my account

  Scenario: Successful login with correct credentials
    Given I am on "/login"
    When I enter "test@test.com" in the email field 
    And I enter "pass1234" in the password field
    And I click "Login"
    Then I see "Submit the 6-digit code for this site from your Authenticator app."

  Scenario: Unsuccessful login with incorrect email
    Given I am on "/login"
    When I enter "test@test.com" in the email field 
    And I enter "pass1234" in the password field
    And I click "Login"
    Then I see "Incorrect email/password."

  Scenario: Unsuccessful login with incorrect password
    Given I am on "/login"
    When I enter "test@test.com" in the email field 
    And I enter "pass1234" in the password field
    And I click "Login"
    Then I see "Incorrect email/password."

  Scenario: Empty fields
    Given I am on "/User/login"
    And I click on the Login button
    Then I see "Please fill out the fields"	

  

