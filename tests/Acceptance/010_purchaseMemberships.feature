Feature: purchase memberships
  In order to purchase a membership
  As a logged-in user
  I need to access the membership page to view the details of each membership

  Scenario: Purchase basic membership
    Given I am on "/Membership/Buy/1"
    When I select the "Basic" membership option
    And input "Joe" as the first name, "Doe" as the last name, and 16 as the age
    And click the "Subscribe now" button
    Then I see "Basic membership registered"

 Scenario: Purchase Vip membership
    Given I am on "/Membership/Buy/2"
    When I select the "VIP" membership option
    And input "Joe" as the first name, "Doe" as the last name, and 16 as the age
    And click the "Subscribe now" button
    Then I see "VIP membership registered"

 Scenario: Purchase Premium membership
    Given I am on "/Membership/Buy/3"
    When I select the "Premium" membership option
    And input "Joe" as the first name, "Doe" as the last name, and 16 as the age
    And click the "Subscribe now" button
    Then I see "Premium membership registered"

 
