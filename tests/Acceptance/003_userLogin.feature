Feature: user login
  In order to access my account
  As a user
  I need to input correct credentials and get access to my account

  Scenario: Successful login with correct credentials
    Given I am on "/login"
    When I enter "test@test.com" in the email field 
	Then I enter "pass1234" in the password field
    And I click Login
    Then I navigate to "/User/2FA/setup2fa"

  Scenario: Unsuccessful login with incorrect email
    Given I am on "/login"
    When I enter "test@test.com" in the email field 
	Then I enter "pass1234" in the password field
    And I click Login
    Then I see an alert with text "Incorrect email/password."

  Scenario: Unsuccessful login with incorrect password
    Given I am on "/login"
    When I enter "test@test.com" in the email field 
	Then I enter "pass1234" in the password field
    And I click Login
    Then I see an alert with text "Incorrect email/password."

  Scenario: Empty fields
    Given I am on "/login"
	When I enter "" in the email field 
	Then I enter "" in the password field
    And I click Login
    Then I see an alert with text "Please fill out the fields"	

  

