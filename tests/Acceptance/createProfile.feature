Feature: createProfile
  In order to create a profile
  As a logged-in user
  I need to access the profile page and enter my details

  Scenario: Successful profile creation
    Given I am on "http://localhost/Profile/create"
    When I enter "John" as the first name, "Doe" as the last name, and "514-123-1234" as the phone number
    And click the Save button
    Then I see "Saved"

  Scenario: Wrong input data
    Given I am on "http://localhost/Profile/create"
    When I enter "John" as the first name, "Doe" as the last name, and "123" as the phone number
    And click the Save button
    Then I see "Invalid phone number"

  Scenario: Empty fields
    Given I am on "http://localhost/Profile/create"
    When I leave the text fields empty
    And click the Save button
    Then I see "Please fill out the fields"
