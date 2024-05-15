Feature: register
   In order to create a new account
   As a new user
   I need to be able to register with my details

   Scenario: Registration with existing email
    Given I am on "/register"
    When I enter "test@test.com" in the email field
    And click Register
	Then I see an alert with text "Email already exists. Please log in."

    Scenario: Successful registration
    Given I am on "/register"
    When I enter "test@test.com" in the email field
    And I enter "John" in the first name field
    And I enter "Doe" in the last name field
    And I enter "pass1234" in the password field
    And I enter "pass1234" in the re-type password field
    And I enter "5141112222" in the phone number field
    And I enter "05/02/2005" in the date of birth field
    And I click Register
    Then I should be redirected to "/login"

    Scenario: Empty fields
    Given I am on "/register"
    And I click Register
	Then I see an alert with text "Please fill in all fields"