Feature: editProfile
  In order to edit my profile
  As a logged-in user with a profile
  I need to modify my details on my profile page

  Scenario: Successfull profile modification
    Given I am on "http://localhost/Profile/edit"
    When I enter "John" as the first name and don't modify the other fields
    And click the Save button
    Then I see "Saved"   

  Scenario: Wrong input data
    Given I am on "http://localhost/Profile/edit"
    When I enter "John" as the first name, "Doe" as the last name, and "123" as the phone number
    And click the Save button
    Then I see "Invalid phone number"

  Scenario: Empty fields
    Given I am on "http://localhost/Profile/edit"
    When I leave the text fields empty
    And click the Save button
    Then I see "Please fill out the fields"
