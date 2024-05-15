Feature: createProfile
  In order to create a profile
  As a logged-in user
  I need to access the profile page and enter my details

  Scenario: Successful profile creation
	Given I am on "/login"
    When I enter "cev@gmail.com" in the email field
    And I enter "123456" in the password field
    And I click Login
	And I set "NKMHCGRDNA3EE7UNNRGKVUV2SQIROTL6" as the session named secret
	And I set "14" as the session named "user_id"
    Then I should be redirected to "/Home"
	And I redirect to "/User/myaccount"
    And I should see the current url "/User/myaccount"