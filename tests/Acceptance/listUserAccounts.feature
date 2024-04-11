Feature: list user bookings
  In order to manage users efficiently
  As an administrator
  I need to view a list of all user accounts

  Scenario: view list of all user accounts
    Given I am logged in as an administrator
    When I navigate to "/Admin/user-accounts"
    Then I should see a list of all user accounts

