Feature: contactAdministration
  In order to contact the administration
  As a user 
  I need to enter my information and send my message

  Scenario: Message sent successfully
    Given I am on "http://localhost/Main/contact"
    When I enter "test@test.com" as the email, "John" as the first name, "Doe" as the last name, "514-123-1234" as the phone number, and "test" as the message
    And click the Send button
    Then I see "Message sent successfully"

  Scenario: Invalid email
    Given I am on "http://localhost/Main/contact"
    When I enter "test.com" as the email, "John" as the first name, "Doe" as the last name, "514-123-1234" as the phone number, and "test" as the message
    And click the Send button
    Then I see "Invalid email"

  Scenario: Invalid phone number
    Given I am on "http://localhost/Main/contact"
    When I enter "test@test.com" as the email, "John" as the first name, "Doe" as the last name, "514-12" as the phone number, and "test" as the message
    And click the Send button
    Then I see "Invalid phone number"

  Scenario: Empty fields
    Given I am on "http://localhost/Main/contact"
    When I leave the text fields empty
    And click the Send button
    Then I see "Please fill out the fields"


