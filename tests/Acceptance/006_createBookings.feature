Feature: Create bookings
	In order to create a booking
	As a logged-in user
	I want to be able to make bookings

	Scenario: Create a booking
		Given I am on "http://localhost/login"
		When I enter "cev@gmail.com" in the email field
		And I enter "123456" in the password field
		And I click Login
		Then I should be redirected to "/User/2FA/check2fa"
		Then I set "NKMHCGRDNA3EE7UNNRGKVUV2SQIROTL6" as the session named secret
		And I enter "524817" in the totp field
		And I click Verify Code
		Then I navigate to "/User/booking/create"
		And I click "Full court"
		Then I click "Next"
		Then I click "23"
		Then I click "Next"
		Then I click "4:00 p.m. - 6:00 p.m."
		Then I click "Next"
		And I input "123" for "name"
		And I input "123" for "card-number"
		And I input "123" for "exp-date"
		And I input "123" for "cvv"
		And I click the "#pay-now-btn" button
		Then I should be redirected to "/Main"
		And I should see the current url "/login"
		
	Scenario: Wrong input data
		Given I am on "http://localhost/login"
		When I enter "cev@gmail.com" in the email field
		And I enter "123456" in the password field
		And I click Login
		Then I should be redirected to "/User/2FA/check2fa"
		Then I set "NKMHCGRDNA3EE7UNNRGKVUV2SQIROTL6" as the session named secret
		And I enter "524817" in the totp field
		And I click Verify Code
		Then I navigate to "/User/booking/create"
		When I click "Full court"
		And I click "Next"
		Then I click "23"
		And I click "Next"
		Then I click "4:00 p.m. - 6:00 p.m."
		And I click "Next"
		Then I click the "#pay-now-btn" button
		Then I should see an alert with text "Empty field(s)."