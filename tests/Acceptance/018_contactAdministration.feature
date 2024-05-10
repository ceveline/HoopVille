Feature: contact Administrator
  In order to contact the administration
  As a logged-in user 
  I need to enter my information and send my message

  Scenario: Message sent successfully
    Given I am on "/User/contact"
    When I enter "test@test.com" as the email
    And I enter "John" as the first name
    And I enter "Doe" as the last name
    And I enter "514-123-1234" as the phone number
    And I enter "test" as the message
    And click the Send button
    Then I see "Message sent successfully"

  Scenario: Invalid email
    Given I am on "/User/contact"
    When I enter "test.com" as the email
    And I enter "John" as the first name
    And I enter "Doe" as the last name
    And I enter "514-123-1234" as the phone number
    And I enter "test" as the message
    And click the Send button
    Then I see "Invalid email"

  Scenario: Invalid phone number
    Given I am on "/User/contact"
    When I enter "test.com" as the email
    And I enter "John" as the first name
    And I enter "Doe" as the last name
    And I enter "5-1234" as the phone number
    And I enter "test" as the message    And click the Send button
    Then I see "Invalid phone number"

  Scenario: Empty fields
    Given I am on "/User/contact"
    When I leave the text fields empty
    And click the Send button
    Then I see "Please fill out the fields"


