Feature: Edit Profile
  In order to edit my profile
  As a logged-in user with a profile
  I need to modify my details on my profile page

  Scenario: Successful profile modification
    Given I am on "/User/profile/edit"
    When I enter "John" in the first name field
    And click Edit Profile
    Then I see "John" on my profile
	
  Scenario: Empty fields
    Given I am on "/User/profile/edit"
    When I leave the text fields empty
    And click Edit Profile
    Then I should see an alert with text "Please fill in all fields"
	
  Scenario: Phone number length is not 10
    Given I am on "/User/profile/edit"
    When I enter "51454367" in the phone number field
    And click Edit Profile
    Then I should see an alert with text "You must be at least 17 years old to register"