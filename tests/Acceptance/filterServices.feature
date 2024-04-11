Feature: filterServices
  In order to filter services by category
  As a user
  I need to chose a category and see the corresponding results

  Scenario: Filtering by rentals
   Given I am on "http://localhost/Services"
   When I chose to filter the services by "Rentals"
   And click the Filter button
   Then I see "Rentals"

  Scenario: Filtering by memberships
   Given I am on "http://localhost/Services"
   When I chose to filter the services by "Memberships"
   And click the Filter button
   Then I see "Memberships"
