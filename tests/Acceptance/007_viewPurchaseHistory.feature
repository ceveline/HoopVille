Feature: View Purchase History
In order to know know what I have purchased or subscribed
As a logged-in user
I want to be able to view my purchase history

Scenario: View Purchase History
	Given I am on "/login"
	When I enter "cev@gmail.com" in the email field
	And I enter "123456" in the password field
	And I click Login
	Then I should be redirected to "/User/2FA/check2fa"
	Then I set "NKMHCGRDNA3EE7UNNRGKVUV2SQIROTL6" as the session named secret
	And I enter "524817" in the totp field
	And I click Verify Code
	Then I redirect to "/User/myAccount/"
	Then I will see "Your Membership"
	And I will see "Your Bookings"
	And I will see "Your Camps"


