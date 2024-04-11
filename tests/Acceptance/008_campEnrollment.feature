Feature: camp enrolment
  In order to enrol in a camp
  As a logged-in user
  I need to access the camp page to view details of each camp

  Scenario: Enrol in Winter camp
    Given I am on "/Camp/Buy/1"
    When I select the "Winter camp" option
    And click the "Enrol now" button
    Then I see "enrolment complete"

  Scenario: Enrol in Summer camp
    Given I am on "/Camp/Buy/2"
    When I select the "Summer camp" option
    And click the "Enrol now" button
    Then I see "enrolment complete"

  Scenario: Enrol in Spring camp
    Given I am on "/Camp/Buy/3"
    When I select the "Spring camp" option
    And click the "Enrol now" button
    Then I see "enrolment complete"


 
