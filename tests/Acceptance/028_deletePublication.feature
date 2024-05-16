Feature: Delete publication
  In order to remove irrelevant publications
  As logged-in administrator
  I need to be able to delete a publication

  Scenario: Delete a publication
    Given I am on "/Admin/Publication/list"
    When I click the "delete" button
    Then I will be navigated to "/Admin/Publication/list"
    And the publication should be successfully deleted from the platform
