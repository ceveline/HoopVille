Feature: Edit Profile
  In order to edit my profile
  As a logged-in user with a profile
  I need to modify my details on my profile page

  Scenario: Successfull profile modification
    Given I am on "/User/profile/edit"
    When I enter "John" in the first name field
    And click "Edit Profile"
    Then I see "John" on my profile
	
  Scenario: Empty fields
    Given I am on "/User/Profile/edit"
    When I leave the text fields empty
    And click "Edit Profile"
    Then I see "Please fill out the fields"
