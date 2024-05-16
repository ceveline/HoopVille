Feature: Modify bookings
  In order to reschedule
  As a logged-in user
  I want to be able to modify bookings

  Scenario: User modifies a booking 
	Given I am on "/login"
	When I enter "cev@gmail.com" in the email field
	And I enter "123456" in the password field
	And I click Login
	Then I should be redirected to "/User/2FA/check2fa"
	Then I set "NKMHCGRDNA3EE7UNNRGKVUV2SQIROTL6" as the session named secret
	And I enter "524817" in the totp field
	And I click Verify Code
    Then I am on "/User/myAccount/"
	And I see an existing booking
	And the start time is "12:00"
	And the date "2024-05-23"
	And I click Modify button on "Your Bookings"
	Then I will be navigated to "/Booking/edit?id=14"
	And I click Update time or date
    When I change the date to 2024-06-23"
	And I change the start time to "12:00"
    And I click Update
	Then I will be redirected to "/User/myAccount/"
    And I will see "2 PM, April 22nd 2024"
