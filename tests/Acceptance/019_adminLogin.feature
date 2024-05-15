Feature: 019_adminLogin
  In order to access the admin account
  As an administrator
  I need to input correct credentials and access my admin account

  Scenario: Successful login for the first time
	Given I am on "Login"
	When I enter "admin@test.com" in the email field
	And I enter "pass123" in the password field
	And I click Login
	Then I should be redirected to "User/2FA/setup2fa"

  Scenario: Successful login for the second or more time
        Given I am on "Login"
        When I enter "admin@test.com" in the email field
        And I enter "pass123" in the password field
        And I click Login
        Then I should be redirected to "User/2FA/check2fa"

  Scenario: Incorrect credentials
        Given I am on "Login"
        When I enter "admin@test.com" in the email field
        And I enter "wrong" in the password field
        And I click Login
        Then I see an alert with test "Incorrect email/password."


