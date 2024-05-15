Feature: Edit Profile
  In order to edit my profile
  As a logged-in user with a profile
  I need to modify my details on my profile page

  Scenario: Successful profile modification
	Given I am on "/login"
    When I enter "cev@gmail.com" in the email field
    And I enter "123456" in the password field
    And I click Login
    Then I should be redirected to "/User/2FA/check2fa"
	Then I set "NKMHCGRDNA3EE7UNNRGKVUV2SQIROTL6" as the session named secret
	And I enter "524817" in the totp field
    And I click Verify Code
	Then I redirect to "/User/profile/edit?id=12"
    And I enter "John" in the fname field
    And click Edit Profile
	Then I navigate to "/User/myAccount"
    And I see "John" in the first name field
	
  Scenario: Empty fields
	Given I am on "/login"
    When I enter "cev@gmail.com" in the email field
    And I enter "123456" in the password field
    And I click Login
	And I set "NKMHCGRDNA3EE7UNNRGKVUV2SQIROTL6" as the session named secret
	And I set "14" as the session named "user_id"
	Then I should be redirected to "/Home"
    And I redirect to "/User/profile/edit?id=12"
    And I enter "" in the fname field
    And click Edit Profile
    Then I should see an alert with text "Please fill in all fields"
	Then I should be redirected to "/User/profile/edit?id=12"
	
  Scenario: Phone number length is not 10
	Given I am on "/login"
    When I enter "cev@gmail.com" in the email field
    And I enter "123456" in the password field
    And I click Login
	And I set "NKMHCGRDNA3EE7UNNRGKVUV2SQIROTL6" as the session named secret
	And I set "14" as the session named "user_id"
	Then I should be redirected to "/Home"
    And I redirect to "/User/profile/edit?id=12"
    When I enter "51454367" in the phoneNb field
    And click Edit Profile
    Then I should see an alert with text "You must be at least 17 years old to register"