Feature: purchase memberships
  In order to purchase a membership
  As a logged-in user
  I need to access the membership page to view the details of each membership

  Scenario: Purchase basic membership
    Given I am on "/User/Membership/Buy/1"
    When I select the "Basic" membership option
    And input "Joe" as the first name
    And "Doe" as the last name
    And "16" as the age
    And "4724090409385748" as my card number
    And "08/27" as my card expiry date
    And "342" as the cvv
    And click the "Subscribe now" button
    Then I see "Basic membership registered"

 Scenario: Purchase Vip membership
    Given I am on "/User/Membership/Buy/2"
    When I select the "VIP" membership option
    And input "Joe" as the first name
    And "Doe" as the last name
    And "16" as the age
    And "4724090409385748" as my card number
    And "08/27" as my card expiry date
    And "342" as the cvv
    And click the "Subscribe now" button
    Then I see "VIP membership registered"

 Scenario: Purchase Premium membership
    Given I am on "/User/Membership/Buy/3"
    When I select the "Premium" membership option
    And input "Joe" as the first name
    And "Doe" as the last name
    And "16" as the age
    And "4724090409385748" as my card number
    And "08/27" as my card expiry date
    And "342" as the cvv
    And click the "Subscribe now" button
    Then I see "Premium membership registered"

 Scenario: Empty fields
    Given I am on "/User/Membership/Buy/3"
    When I select the "Premium" membership option
    And I leave the text fields empty
    And click the "Subscribe now" button
    Then I see "Please fill out the fields"

 
