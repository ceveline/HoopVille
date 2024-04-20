Feature: camp enrolment
  In order to enrol in a camp
  As a logged-in user
  I need to access the camp page to view details of each camp

  Scenario: Enrol in Winter camp
    Given I am on "/User/Camp/Buy/1"
    When I select the "Winter camp" option
    And input "Joe" as the first name
    And "Doe" as the last name
    And "16" as the age
    And "4724090409385748" as my card number
    And "08/27" as my card expiry date
    And "342" as the cvv
    And click the "Enrol now" button
    Then I see "enrolment complete"

  Scenario: Enrol in Summer camp and miss the age requirement
    Given I am on "/User/Camp/Buy/2"
    When I select the "Summer camp" option
   And input "Joe" as the first name
    And "Doe" as the last name
    And "11" as the age
    And "4724090409385748" as my card number
    And "08/27" as my card expiry date
    And "342" as the cvv
    And click the "Enrol now" button
    Then I see "Player is under the required age"

  Scenario: Enrol in Spring camp and exceed the age limit
    Given I am on "/User/Camp/Buy/3"
    When I select the "Spring camp" option
   And input "Joe" as the first name
    And "Doe" as the last name
    And "24" as the age
    And "4724090409385748" as my card number
    And "08/27" as my card expiry date
    And "342" as the cvv
    And click the "Enrol now" button
    Then I see "Player exceeds the age limit"

  Scenario: Empty fields
    Given I am on "/User/Camp/Buy/3"
    When I select the "Spring camp" option
    And I leave the text fields empty
    And click the "Enrol now" button
    Then I see "Please fill out the fields"

 
