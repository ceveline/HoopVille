Feature: Delete publication
  In order to remove irrelevant publications
  As logged-in administrator
  I need to be able to delete a publication

  Scenario: Delete a publication
    Given I am on /Admin/Publications/
    And I have an existing publication titled "Recent Visit!"
    When I click the "delete" button
    Then I will be navigated to "/Admin/Publications/deletePublication/1"
    Then the publication should be successfully deleted from the platform


