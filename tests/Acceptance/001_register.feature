Feature: register
   In order to create a new account
   As a new user
   I need to be able to register with my details

   Scenario: Registration with existing email
	Given I am on "/register"
    	When I enter "test@test.com" as the email
    	And click Register
    	Then I see "Email is already in use"

    Scenario: Successful registration
    	Given I am on "/register"
    	When I enter "test@test.com" in the email field
    	Then I enter "John" in the first name field
    	Then I enter "Doe" in the last name field
    	Then I enter "pass1234" in the password field
	Then I enter "pass1234" in the re-type password field
	Then I enter "5141112222" in the phone number field
	Then I enter "05/02/2005" in the date of birth field
    	And I click the Register button
    	Then I navigate to "/Home"

    Scenario: Empty fields
    	Given I am on "/register"
    	And I click Register
    	Then I see "Please fill in all fields"

