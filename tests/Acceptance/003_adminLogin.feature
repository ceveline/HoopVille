Feature: Admin Login
  In order to access my account
  As an administrator
  I need to input correct credentials and get access to my account

  Scenario: Successful login with correct credentials
    Given I am on "/User/login"
    When I enter "admin1@test.com" as the email and "adminPass123$" as the password
    And I click the "Login" button
    Then I see "Scan the above QR-code"

  Scenario: Unsuccessful login with incorrect email
    Given I am on "/User/login"
    When I enter "wrong@test.com" as the email and "abc123" as the password
    And I click the "Login" button
    Then I see "Incorrect email or password"

  Scenario: Unsuccessful login with incorrect password
    Given I am on "/User/login"
    When I enter "test@test.com" as the email and "wrongpass123" as the password
    And I click the "Login" button
    Then I see "Incorrect email or password"

  Scenario: Empty fields
    Given I am on "/User/login"
    And I click on the "Login" button
    Then I see "Please fill out the fields"	
