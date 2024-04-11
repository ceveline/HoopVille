Feature: Login
  In order to access my account
  As a user
  I need to input correct credentials and get access to my account

  Scenario: Successful login with correct credentials
    Given I am on "http://localhost/User/login"
    When I enter "test@test.com" as the email and "pass123" as the password
    And I click the Login button
    Then I see "Scan the above QR-code"

  Scenario: Unsuccessful login with incorrect email
    Given I am on "http://localhost/User/login"
    When I enter "wrong@test.com" as the email and "abc123" as the password
    And I click the Login button
    Then I see "Incorrect email or password"

  Scenario: Unsuccessful login with incorrect password
    Given I am on "http://localhost/User/login"
    When I enter "test@test.com" as the email and "wrongpass123" as the password
    And I click the Login button
    Then I see "Incorrect email or password"

  Scenario: Empty fields
    Given I am on "http://localhost/User/login"
    And I click on the Login button
    Then I see "Please fill out the fields"	

