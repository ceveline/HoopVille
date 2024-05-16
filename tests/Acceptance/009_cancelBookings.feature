Feature: Cancelling a booking
In order to free up reserved slots for others
As a user
I want to be able to cancel bookings

Scenario: Cancelling a booking
	Given I am on "/login"
	When I enter "cev@gmail.com" in the email field
	And I enter "123456" in the password field
	And I click Login
	Then I should be redirected to "/User/2FA/check2fa"
	Then I set "NKMHCGRDNA3EE7UNNRGKVUV2SQIROTL6" as the session named secret
	And I enter "524817" in the totp field
	And I click Verify Code
    Then I redirect to "/User/myAccount/"
	And I see an existing booking
	And the start time is "12:00"
	And the date "2024-05-23"
	And I click Modify button on "Your Bookings"
	Then I will be navigated to "/Booking/edit?id=14"
    And I click Cancel booking
    Then I will be navigated to "/Home"
