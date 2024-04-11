Feature: register
  In order to create a new account
  As a new user
  I need to be able to register with my details

  Scenario: Registration with existing email
    Given I am on "/User/register"
    When I enter "existing@test.com" as the email
    And I click the Register button
    Then I see "Email is already in use"

  Scenario: Successful registration
    Given I am on "/User/register"
    When I enter "test@test.com" as the email, "John" as the first name, "Doe" as the last name, and "testPass123$" as the password
    And I click the Register button
    Then I see "Welcome, John"

  Scenario: Registration with weak password
    Given I am on "/User/register"
    When I enter "abc123@gmail.com" as the email, "John" as the first name, "Doe" as the last name, and "test" as the password
    And I click the Register button
    Then I see "Password must contain at least 8 characters, one uppercase,one lowercase, one number, and one special character"

  Scenario: Registration with invalid email
    Given I am on "/User/register"
    When I enter "testemail12@.com" as the email, "John" as the first name, "Doe" as the last name, and "testPass123$" as the password
    And I click the Register button
    Then I see "Invalid email"

  Scenario: Empty fields
    Given I am on "/User/register"
    And I click on the Register button
    Then I see "Please fill out the fields"

