Feature: purchase memberships
  In order to purchase a membership
  As a logged-in user
  I need to access the membership page to view the details of each membership

  Scenario: Purchase basic membership
    Given I am on "/Membership/Buy/1"
    When I select the "Basic" membership option
    And click the "Subscribe now" button
    Then It should redirect me to a payment site
    And I will enter my payment information externally

 Scenario: Purchase Vip membership
    Given I am on "/Membership/Buy/2"
    When I select the "VIP" membership option
    And click the "Subscribe now" button
    Then It should redirect me to a payment site
    And I will enter my payment information externally

 Scenario: Purchase Premium membership
    Given I am on "/Membership/Buy/3"
    When I select the "Premium" membership option
    And click the "Subscribe now" button
    Then It should redirect me to a payment site
    And I will enter my payment information externally

 
